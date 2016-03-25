# What Input?

__A global utility for tracking the current input method (mouse, keyboard or touch).__

What Input improves on [track-focus](https://github.com/ten1seven/track-focus) by adding a data attribute on the `<body>` instead of littering the DOM with classes on elements that have been interacted with. It also exposes a simple API that can be used for scripting interactions.

## How it works

What Input uses event bubbling on the `<body>` to watch for mouse, keyboard and touch events (via `mousedown`, `keydown` and `touchstart`). It then sets or updates a `data-whatinput` on the `<body>`.

Since the form fields `input` and `textarea` rely on the keyboard as their only means of input, What Input _does not_ switch the input type to keyboard when typing to preserve the last detected input type. To override this behavior and allow the keyboard to be recorded, add:

```html
<body data-whatinput-formtyping>
```

What Input also exposes a tiny API that allows the developer to ask for or set the current input.

_What Input does not make assumptions about the input environment before the user makes their first interaction._

## Installing

Download the file directly or install via Bower.

```shell
bower install what-input
```

## Usage

Include the script directly in your project.

```html
<script src="assets/scripts/what-input.js"></script>
```

Or require with a script loader (What Input is AMD compatible).

```javascript
require('what-input');
```

What Input will start doing its thing while you do yours.

### Example Styling

```css
/**
 * set a default :focus style
 */
a:focus {
  outline: 3px dotted #06c;
}

/*
 * remove :focus style via What Input using progressive enhancement
 * so :focus isn't left broken if JavaScript fails
 */
[data-whatinput="mouse"] a:focus,
[data-whatinput="touch"] a:focus {
  outline: none;
}
```

### Scripting

#### Current Input

Ask What Input what the current input method is. This works best if asked after the events What Input is bound to (`mousedown`, `keydown` and `touchstart`). Because `click` always executes last in the event tree, What Input will be able to answer with the event that _just_ happened.

```javascript
whatInput.ask(); // returns `mouse`, `keyboard` or `touch`

myButton.addEventListener('click', function() {

  if (whatInput.ask() === 'mouse') {
    // do mousy things
  } else if (whatInput.ask() === 'keyboard') {
    // do keyboard things
  }

});
```

Ask What Input to return an array of all the input types that have been used _so far_.

```javascript
whatInput.types(); // ex. returns ['mouse', 'keyboard']
```

Tell What Input what's being used. This can be useful if you'd like to set an input method before the user has actually interacted with the page. What Input is not so assumptive on its own.

```javascript
whatInput.set('hampster');

whatInput.ask(); // 'hampster'
```

#### Key Logging

Along with tracking the use of the keyboard, What Input keeps track of the currently pressed keys and stores them in an array. Instead of returning cryptic key codes, What Input uses plain language.

This can be used if, for example, you want to track how an element is being interacted with.

```javascript
whatInput.keys(); // ex. returns ['shift', 'tab']

myMenuTab.addEventListener('keyup', function() {

  // query for the down arrow
  if (whatInput.keys().indexOf('down') !== -1) {
    // open the dropdown menu
  }

});
```

What Input only responds to the following "action" keys: 'tab', 'enter', 'shift', 'esc', 'space', 'left', 'up', 'right' and 'down'.

## Compatibility

What Input works in all modern browsers. For compatibility with IE8, polyfills are required for:

* addEventListener
* IndexOf

Add your own, or grab the bundle included here.

```html
<!--[if lte IE 8]>
  <script src="lte-IE8.js"></script>
<![endif]-->
```

## Demo

Check out the demo to see What Input in action.

http://ten1seven.github.io/what-input

## Acknowledgments

Special thanks to [Viget](http://viget.com/) for their encouragement and commitment to open source projects. Visit [code.viget.com](http://code.viget.com/) to see more projects from [Viget](http://viget.com).

What Input is written and maintained by [@ten1seven](https://github.com/ten1seven).

## License

What Input is freely available under the [MIT License](http://opensource.org/licenses/MIT).
