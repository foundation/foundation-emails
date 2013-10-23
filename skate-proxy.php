<?php

/**
 * AJAX Cross Domain (PHP) Proxy 0.7
 *    by Iacovos Constantinou (http://www.iacons.net)
 * 
 * Released under CC-GNU GPL
 */

/**
 * Enables or disables filtering for cross domain requests.
 * Recommended value: true
 */
define( 'CSAJAX_FILTERS', true );

/**
 * If set to true, $valid_requests should hold only domains i.e. a.example.com, b.example.com, usethisdomain.com
 * If set to false, $valid_requests should hold the whole URL ( without the parameters ) i.e. http://example.com/this/is/long/url/
 * Recommended value: false (for security reasons - do not forget that anyone can access your proxy)
 */
define( 'CSAJAX_FILTER_DOMAIN', false );

/**
 * Set debugging to true to receive additional messages - really helpful on development
 */
define( 'CSAJAX_DEBUG', true );

/**
 * A set of valid cross domain requests
 */
$valid_requests = array(
  'http://skate.zurb.com/api/v1/raw'
);

/* * * STOP EDITING HERE UNLESS YOU KNOW WHAT YOU ARE DOING * * */

// identify request headers
$request_headers = array( );
foreach ( $_SERVER as $key => $value ) {
  if ( substr( $key, 0, 5 ) == 'HTTP_' ) {
    $headername = str_replace( '_', ' ', substr( $key, 5 ) );
    $headername = str_replace( ' ', '-', ucwords( strtolower( $headername ) ) );
    if ( !in_array( $headername, array( 'Host', 'X-Proxy-Url' ) ) ) {
      $request_headers[] = "$headername: $value";
    }
  }
}

// identify request method, url and params
$request_method = $_SERVER['REQUEST_METHOD'];
$request_params = ( $request_method == 'GET' ) ? $_GET : $_POST;
// Get URL from `csurl` in GET or POST data, before falling back to X-Proxy-URL header.
$request_url = urldecode( isset( $_REQUEST['csurl'] ) ? $_REQUEST['csurl'] : $_SERVER['HTTP_X_PROXY_URL'] );
$p_request_url = parse_url( $request_url );
unset( $request_params['csurl'] );

// ignore requests for proxy :)
if ( preg_match( '!' . $_SERVER['SCRIPT_NAME'] . '!', $request_url ) || empty( $request_url ) || count( $p_request_url ) == 1 ) {
  csajax_debug_message( 'Invalid request - make sure that csurl variable is not empty' );
  exit;
}

// check against valid requests
if ( CSAJAX_FILTERS ) {
  $parsed = $p_request_url;
  if ( CSAJAX_FILTER_DOMAIN ) {
    if ( !in_array( $parsed['host'], $valid_requests ) ) {
      csajax_debug_message( 'Invalid domain - ' . $parsed['host'] . ' does not included in valid requests' );
      exit;
    }
  } else {
    $check_url = isset( $parsed['scheme'] ) ? $parsed['scheme'] . '://' : '';
    $check_url .= isset( $parsed['user'] ) ? $parsed['user'] . ($parsed['pass'] ? ':' . $parsed['pass'] : '') . '@' : '';
    $check_url .= isset( $parsed['host'] ) ? $parsed['host'] : '';
    $check_url .= isset( $parsed['port'] ) ? ':' . $parsed['port'] : '';
    $check_url .= isset( $parsed['path'] ) ? $parsed['path'] : '';
    if ( !in_array( $check_url, $valid_requests ) ) {
      csajax_debug_message( 'Invalid domain - ' . $request_url . ' does not included in valid requests' );
      exit;
    }
  }
}

// append query string for GET requests
if ( $request_method == 'GET' && count( $request_params ) > 0 && (!array_key_exists( 'query', $p_request_url ) || empty( $p_request_url['query'] ) ) ) {
  $request_url .= '?' . http_build_query( $request_params );
}

// let the request begin
$ch = curl_init( $request_url );
curl_setopt( $ch, CURLOPT_HTTPHEADER, $request_headers );   // (re-)send headers
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );  // return response
curl_setopt( $ch, CURLOPT_HEADER, true );    // enabled response headers
// add post data for POST requests
if ( $request_method == 'POST' ) {
  curl_setopt( $ch, CURLOPT_POST, true );
  curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $request_params ) );
}

// retrieve response (headers and content)
$response = curl_exec( $ch );
curl_close( $ch );

// split response to header and content
list($response_headers, $response_content) = preg_split( '/(\r\n){2}/', $response, 2 );

// (re-)send the headers
$response_headers = preg_split( '/(\r\n){1}/', $response_headers );
foreach ( $response_headers as $key => $response_header ) {
  // Rewrite the `Location` header, so clients will also use the proxy for redirects.
  if ( preg_match( '/^Location:/', $response_header ) ) {
    list($header, $value) = preg_split( '/: /', $response_header, 2 );
    $response_header = 'Location: ' . $_SERVER['REQUEST_URI'] . '?csurl=' . $value;
  }
  if ( !preg_match( '/^(Transfer-Encoding):/', $response_header ) ) {
    header( $response_header );
  }
}

// finally, output the content
print($response_content );

function csajax_debug_message( $message )
{
  if ( true == CSAJAX_DEBUG ) {
    print $message . PHP_EOL;
  }
}