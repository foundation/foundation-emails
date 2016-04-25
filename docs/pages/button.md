---
title: Button
description: Buttons are convenient tools when you need more traditional actions. To that end, Foundation has many easy to use button styles that you can customize or override to fit your needs.
sass: scss/components/_button.scss
---

Creating a bullet-proof button that works in all email clients requires a table nested inside of a table. Put the class `.button` on the outer `<table>`. Inside of the inner table, put an `<a>` with an `href` attribute containing your link.

In Inky HTML, the `<button>` tag creates all of this markup for you.

```inky_example
<button href="zurb.com">Button</button>
```

---

## Sizing

By default, buttons are sized by the content and padding within them. You can also size a button according to it's parent container (see Expanded section).

Buttons can be made larger or smaller by adding the class `.tiny`, `.small`, or `.large` to a button's outer `<table>`.

In Inky HTML, add the same class to the `<button>` tag.

```inky_example
<button href="#" class="tiny">Tiny Button</button>
<button href="#" class="small">Small Button</button>
<button href="#">Default Button</button>
<button href="#" class="large">Large Button</button>
```

Don't forget the `href=""` ;)

---

## Expanded

To create an expanded button (full width of it's container), add the class `.expanded` to the outer `<table>` of the button, and wrap a `<center>` tag around the `<a>`.

In Inky HTML, add the `.expanded` class to the `<button>` tag.

```inky_example
<row>
  <column>
    <button href="zurb.com" class="expand">Expanded Button</button>
  </column>
</row>
```

---

## Coloring

Change the background color of a button by adding the class `.secondary`, `.success`, `.warning`, or `.alert` to the outer `<table>` (or the `<button>` tag in Inky HTML).

```inky_example
<button href="zurb.com" class="secondary">Secondary Button</button>
<button href="zurb.com" class="success">Success Button</button>
<button href="zurb.com" class="warning">Warning Button</button>
<button href="zurb.com" class="alert">Alert Button</button>
```

---

## Radius and Round

Creating buttons with a radius or rounded edges (like a pill) can be achieved by adding the `.radius` or `.rounded` class to a button.

*Note - border-radius is not supported on Outlook 2000-2013, Yahoo! Mail, and Android 4+ (Gmail)*

*Note - In order to create `.radius` and `.rounded` buttons, the border needs to be removed.*

```inky_example
<button href="#" class="radius">Radius</button>
<button href="#" class="rounded">Round</button>

```
