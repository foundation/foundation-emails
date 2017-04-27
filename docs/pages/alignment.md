---
title: Alignment
description: Centering, images, text, buttons, and menus in HTML emails made easy.
---

Foundation includes a handful of helpful alignment classes to add common positioning behaviors to elements.

---

## Text Alignment

You can align text with the `.text-x` classes. These classes will apply to the large breakpoint as well as the small.

```inky_example
<style>.columns {border: 1px solid #333;}</style>
<container>
  <row>
    <columns>
      <p class="text-left">Left (default)</p>
    </columns>
    <columns>
       <p class="text-center">center</p>
    </columns>
    <columns>
       <p class="text-right">right</p>
    </columns>
  </row>
</container>
```

If you need to change text alignment only on the small breakpoint, you can use the `.small-text-x` classes.


```inky_example
<style>.columns {border: 1px solid #333;}</style>
<container>
  <row>
    <columns>
      <p class="small-text-left">Left on small</p>
    </columns>
    <columns>
       <p class="small-text-center">Center on small</p>
    </columns>
    <columns>
       <p class="small-text-right">Right on small</p>
    </columns>
  </row>
</container>
```

You can combine these classes to override the behavior on the small breakpoint.

```inky_example
<style>.columns {border: 1px solid #333;}</style>
<container>
  <row>
    <columns>
      <p class="text-center small-text-left">Center, small left</p>
    </columns>
    <columns>
       <p class="text-right small-text-center">Right, small center</p>
    </columns>
  </row>
</container>
```

---

## Centering Images

Just wrap the `<center>` around an image you’ll be good to go. Inky will handle the magic behind the scenes! In the CSS version, you’ll add a `.float-center` class, `align="center"` attribute and wrap a <code>&lt;center&gt;</code> tag to make sure things are centered.

```inky_example
<container>
  <row>
    <columns>
      <center>
        <img src="http://placehold.it/200?text=center" alt="image of clever meme that made me chuckle">
      </center>
    </columns>
  </row>
</container>
```

So to be clear: with Inky you only need to wrap an image in `<center>` tag to reliably center it.

In the CSS version, our centering recipe includes three ingredients:

- `.float-center` class on the `<img>` element
- `align="center"` attribute on the `<img>` element
- Wrap the `<img>` with `<center>` tags (needed for Outlook 2007, 2010, and 2011)

Also, it's not really a float, but the `.float-center` class to an element to engage the automatic margin centering trick. Note that this will only work on elements with an absolute width, which means not a percentage or auto width.

If you need to center an image only on mobile clients, you can apply the `.small-float-center` class. A good use case would be centering an image smaller than the full column width on devices like an iPhone 5, iPhone 6, and Android 4.4.

```inky_example
<container>
  <row>
    <columns small="12" large="3" class="large-offset-1">
      <img class="small-float-center" src="http://placehold.it/200?text=small-center" alt="please don't forget me">
    </columns>
    <columns small="12" large="8">
      <h4 class="small-text-center">What is the deal?</h4>
      <p class="small-text-center">Sweet beast sun bathe or chase mice rub face on everything or leave dead animals as gifts for mark territory play time.</p>
    </columns>  
  </row>
</container>
```

---

## Aligning Images Left and Right

You can also align images to the left or the right.

```inky_example
<container>
  <row>
    <columns>
      <img class="float-left" src="http://placehold.it/200?text=left" alt="">
      <img class="float-center" src="http://placehold.it/200?text=center" alt="">
      <img class="float-right" src="http://placehold.it/200?text=right" alt="">
    </columns>
  </row>
</container>
```

---

## Centering a Button

Wrap the button with `<center>` tags to center it.

```inky_example
<container>
  <row>
    <columns>
      <center>
        <button href="#">Centered Button</button>
      </center>
    </columns>
  </row>
</container>
```

---

## Centering Columns

Tables by nature take up as much space is available to them. Because of this, centering columns can be done by adding empty columns to left and right of the column to be centered.

```inky_example
<style>.columns {border: 1px solid #333;}</style>
<container>
  <row>
    <columns></columns>
      <columns>Centering a column</columns>
    <columns></columns>
  </row>
  <row>
    <columns></columns>
      <columns small="3">Centering a column</columns>
    <columns></columns>
  </row>
  <row>
    <columns></columns>
      <columns small="7">Centering a column</columns>
    <columns></columns>
  </row>
</container>
```

If you don't add a size attribute like `small="x"` then the columns will be equal width.

---

## Centering a Menu

Centering the menu is a common practice. Wrapping the menu in `<center>` tags will achieve this.

```inky_example
<center>
  <menu>
    <item href="http://zurb.com">Item</item>
    <item href="http://zurb.com">Item</item>
    <item href="http://zurb.com">Item</item>
  </menu>
</center>
```

---

## Vertical Alignment

You can vertically align your content within columns by using `valign` attribute. The available values are `top`, `middle`, and `bottom`.

```inky_example
<row>
  <columns large="3" valign="top">
    <img class="float-right" src="http://placehold.it/50" alt="">
  </columns>
  <columns large="3" valign="bottom">
    <h4>Bottom</h4>
  </columns>
  <columns large="3" valign="middle">
    <h4 style="margin-bottom: 0;" class="text-right">HEADLINE</h4>
    <p style="margin-bottom: 0;" class="text-right subheader">SUBHEADLINE</p>
  </columns>
  <columns large="3" valign="middle">
    <img class="small-float-center" src="http://placehold.it/250" alt="">
  </columns> 
</row> 
```
<br>
