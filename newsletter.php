<?php
  header('content-type: application/json; charset=utf-8');
  header("access-control-allow-origin: *");
  if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $data = array("EmailAddress" => $email, "Resubscribe" => TRUE);
    $data_string = json_encode($data);

    $ch = curl_init("https://d275c8b5e96298ccb017e1c85bb47adb3dcfafbde61b53e5@api.createsend.com/api/v3/subscribers/5c6a55836de01f72133628c8343c520b.json");

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($data_string))
    );

    $result = curl_exec($ch);
    $success = strstr($result, '@');
    curl_close($ch);
    echo !!$success;
  } else {
    echo 'Blah';
  }
?>
