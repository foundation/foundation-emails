---
title: Typography
description: Typography in Foundation for Emails is meant to make your life easier by providing clean, attractive, simple default styles for all of the most basic typographical elements.
sass: scss/components/_typography.scss
---

## Paragraphs

This is a paragraph. Paragraphs are preset with a font size, line height and spacing to match the overall vertical rhythm. To show what a paragraph looks like this needs a little more content—so, did you know that female Giant Squids on average are around twice the size of (and around 10 feet longer than) their potential mates? Pretty cool. Use the `<strong>` and `<em>` tags to denote text that should be displayed or read with emphasis. Browsers will <strong>bold</strong> and <em>italicize</em> them, while screen readers will read the words with <em>emphasis</em>.

```
<p>This is a paragraph. Paragraphs are preset with a font size, line height and spacing to match the overall vertical rhythm. To show what a paragraph looks like this needs a little more content—so, did you know that female Giant Squids on average are around twice the size of (and around 10 feet longer than) their potential mates? Pretty cool. Use the `<strong>` and `<em>` tags to denote text that should be displayed or read with emphasis. Browsers will <strong>bold</strong> and <em>italicize</em> them, while screen readers will read the words with <em>emphasis</em>.</p>
```

---

## Header

Foundation includes styles for all headings.

```inky_example
<h1>h1. This is a very large header.</h1>
<h2>h2. This is a large header.</h2>
<h3>h3. This is a medium header.</h3>
<h4>h4. This is a moderate header.</h4>
<h5>h5. This is a small header.</h5>
<h6>h6. This is a tiny header.</h6>
```

---

### Header Sizes

The framework includes two typographic scales&mdash;one uses a narrow range of sizes for small- and medium-sized screens, and the other uses a wider range of sizes for large-sized screens. You can change these scales, or add new ones for other breakpoints, by editing the `$hx-font-size` variables in your project's <a href="sass.html#the-settings-file">Settings File</a>.

Header  | Default |
--------|---------|
`<h1>`  | 34px    |
`<h2>`  | 30px    |
`<h3>`  | 28px    |
`<h4>`  | 24px    |
`<h5>`  | 20px    |
`<h6>`  | 18px    |

---

## Small Header Segments

By inserting a `<small>` element into a header Foundation will scale the header font size down for an inline element, allowing you to use this for subtitles or other secondary header text.

```inky_example
<h3>Foundation for Emails <small>Version 2</small></h3>
```

---

## Links

Links are very standard, and the color is preset to the Foundation primary color. [Learn more about Foundation's global colors](global.html).

```
<p>Links are very standard, and the color is preset to the Foundation primary color. <a href="global.html">Learn more about Foundation's global colors.</a></p>
```

---

## Dividers

Use dividers to define thematic breaks between paragraphs or sections of your email.

```
<hr/>
```
