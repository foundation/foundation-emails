---
title: Tips &amp; Tricks
description: We've put together some Responsive Emails Tips &amp; Tricks that will help you navigate the mine field that is coding HTML emails.
---

Coding responsive emails can be a real pain. This guide will help you through some of the the most common issues you'd face. It's a living document and will be updated periodically.

## Why Foundation for Emails

Foundation for Emails, especially with Inky, help abstract away much of the pain of HTML email development. It's more than responsive templates you can use. 

## Need to know

The sad truth about creating or coding HTML emails is that tables are the only thing that is universally supported when it comes to email design. If you came from the world of building websites, this may seem like a stepping into Doc Brown's Delorean, charging up the Flux-capitor, and going back to the 1996. Suddenly your CSS is written with inline style tags, useful CSS properties don't work and you're burried in a sea of table tags. 

It's not all doom and gloom though, and we're all in this together. Foundation for Emails helps by getting you away from tables (Sass version), helping you with an organized project structure, and a well tested codebase to make this much easier. We've put together a guide and links to resources from our friends to help you along as well as a new [Responsive Emails master class](http://zurb.com/university/responsive-emails-foundation) to become a HTML email pro.

## General

**Email Container Width**

The email equivalent of the browser window is the "viewport", or the area in an email client dedicated to showing the actual email. This varies quite a bit.

Foundation for Emails' default container with around 600px wide. That's because the majority of email clients have a preview pane that is around 550-700 pixels. With the Sass version, you can easily customize this width by adjusting the `$global-width` variable.

The height of your email doesn't matter as much because people scroll. It still helps to have your most compelling content towards the top.

**Inlining CSS**

Gmail strips the `<head>` (and, consequently, `<style>`) tags from your email. Therefor your email's CSS needs to be inlined. You know, like old school CSS:

```html
<table class="menu" style="padding:0;text-align:center;vertical-align:top;width:auto">
```

Because media queries cannot be inlined, they need to be moved into the `<body>` of the email. Our inliner does that for you.

If you're using Sass with the ZURB stack, you enjoy the luxury of automatic inlining when running `npm run build`. You'll want to do this before you test or send your email.

If you are using the CSS version, you can use our [web inliner](http://foundation.zurb.com/emails/inliner.html).

## HTML

When it comes to making emails, `<div>`'s aren’t a thing. Don’t kill the messenger, but it’s true. For structural purposes at least. `<div>`'s can still be used for targeting CSS and for grouping semantically related elements, but shouldn’t be used for spacing or background colors.

Tables are still the standard. 

For those of you who haven’t used tables since Netscape Navigator (or ever) here’s a quick recap.

There are three main tags in a table. The `<table>` tag wraps the entire table. The `<tr>` tag denotes a row. The `<td>` tag is used to wrap a table cell.

```

Some web browsers may be forgiving, but it’s important to include all three tags. Don’t get lazy and skip the `<tr>`. Email clients can be unpredictable, so the first step to good rendering is to have valid markup. 

It makes debugging and sharing code a lot easier when you’re consistent. It lets other developers get oriented within the code and makes it easier to tell what you’re looking at, just like consistent indentation and comments.

While semantic, the “table row” and “table data” elements aren’t that helpful for creating row and column layouts. They’re designed for spreadsheets or other *non-uniform* grids. They can’t be used structurally.

Instead, we use nested tables. Think of a bunch of single-cell spreadsheets being nested.

Where we would have `<div>`'s in website land…

```html
<div class="row">
  <div class="small-12 columns">
    <!-- Content -->
  </div>
</div>
```

…we have tables in email world. 

```html
<table class="container">
  <tr>
    <td>
      <table class="row">
        <tr>
          <th class="first last small-12 large-12 columns">

          </th>
        </tr>
      </table>
    <th class="expander"></th>
    </td>
  </tr>
</table>
```

A (`<table>`, `<tr>`, `<td>`) triplet is *almost*, but not quite, a one-to-one replacement for a structural `<div>`.

Table elements have their own special “display” values. Sometimes we can override them to display as block elements. The display value (in combination with the HTML schema specified in the DOCTYPE), specifies the rules for rendering each element.

Tables have all sorts of fancy HTML attributes not all of which can be set in CSS.

```html
<table align="center" valign="top" cellspacing="0">
  …
</table>
```

Some inliners (like Premailer and our inliner) will take care of this for you. This is unfortunate because separation of concerns dictates that we should try and keep our structure in the markup (HTML) and styles in the CSS, but alas HTML email is far from a perfect world.

## CSS

**CSS Support**
Support of CSS properties varies greatly between email clients. You're best off sticking with the basics and not getting to fancy.

This guide will really save you some pain when writing CSS:
[CSS Support Chart](https://www.campaignmonitor.com/css/b/)

You should only set classes and IDs on `<tables>` or `<td>`/`<th>` tags, not `<tr>` tags. 

If you need to apply padding, only do that on a `<td>`/`<th>` as well. Been there, done that — we had a lot of trouble of this while building Foundation for Emails. Your milage may vary, but just trying to help you out by saving you some time.

For some things you can do and work-arounds, see the <a href="#progressive-enhancement">Progressive Enhancement</a> section below.

## JavaScript

Nope. JavaScript is not a reality in emails. 

**Structure and alignment:** 


**Colors:** 

- It's better to use full 6 digit hex codes colors in HTML emails (#ffffff vs #fff). Although all the major email clients support short hex colors, Outlook.com (Hotmail), Lotus Notes 6.5, 7 and 8 do not.
- RGB's are supported all the major email clients but RGBA's are only supported in IOS, Apple Mail, Gmail, and Android 4 (Gmail).
- Background colors work across all email clients as well as color for fonts.


**Margin and Padding:** 

- Outlook 2007, 2010, and 2013 does not support "padding" in `<p>`, `<div>` or `<a>` tags. Use margin instead.
- Forget about using CSS positioning like `top`, `bottom`, `relative`, `absolute`. 
- Margin is universally supported BUT you may see some inconsistencies in Outlook 2007, 2010, and 2013. Padding is safer. Also, it is known that Outlook.com does not support the margin property. The odd thing is Outlook.com does support margin with a capital "M".
Use it like this: 
  
  ```
  margin: 10px; 
  Margin: 10px;  // fallback for Outlook.com
  ```

## Images


<a id="progressive-enhancement"></a>
## Progressive Enhancement

Think of any extra CSS you may use as upward-compatibility. You can always include some header style CSS if you want, but think of it as a bonus for people using email clients that support it. Then turn it off completely and make sure the design still makes sense.


What you CAN'T do:

Include a <head> section with styles. Apple Mail.app supports it, but Gmail and Hotmail do not, so it's a no-no. Hotmail will support a style section in the body but Gmail still doesn't.
Link to an external stylesheet. Not many email clients support this, best to just forget it.
Background-image / Background-position. Gmail is also the culprit on this one.
Clear your floats. Gmail again.

Main things to keep in mind, since they're hard to believe...

1. Only use inline style.

2. Just give in and nest tables. It's terrible, but reliable everywhere.

3. Margin and padding is not completely supported (depending on DOM element).
   Mostly just not Outlook > 2003, which is insane.
   
4. Apply style to divs and not many other tags.

5. Bullet lists will look different, so use a table.

6. Spacers are your friend. Or more like your stupid roomate,
   that you can strangely rely on.

7. You must include text formatting in every div layer. Remember Dreamweaver?

8. Vertical spacing can be greater between elements. Combat that...

   8a. Add a css style of "display:block" to all image elements
      (including spacers).

   8b. Place <div> tags around every table and within every
       <td> that contains content. Also applies to <img> only cells.
       Some email clients will register a space after the image
       if there is not a closing div tag immediately following it.
   
   8c. Any div that is shorter than 14 pixels (or the line-height)
       should have it's height specified with CSS and the line height.
       
9. Most CSS is not available, you can't get fancy.
   Check out this great reference: http://www.campaignmonitor.com/css


Reduce Image Size - Refer back to #7 above, there is no guarantee the recipient of your email will have wifi and waiting for images to load is a guaranteed to annoy some of your recipients.
 

Increase Text Size - Don’t make users squint to read what you sent them, shorten the message a bit and increase the size (including links and CTAs) to make sure they are able to see and understand everything clearly.


Quick tips!

Remember to use full paths to images, not relative paths. (e.g. http://www.yourserver.com/email/images/logo.gif). Also, link to images from your own server, not anyone elses.
Check with your ISP before you go out sending thousands and thousands of emails, they might think you are a spammer.
Test, test, and test again with as many different email clients as you can possibly get access to. You will definetly want to test the major online clients like Gmail, Yahoo, and Hotmail, but also definitely check Outlook, Mail.app, and as many other desktop clients as possible.
Don't go over 600px in width. Even that is pushing it. If your design can handle it, 440px is closer to ideal.
Think of any extra CSS you may use as upward-compatibility. You can always include some header style CSS if you want, but think of it as a bonus for people using email clients that support it. Then turn it off completely and make sure the design still makes sense.
Try not to look like SPAM. Pretty obvious, but just writing good code and honest copy should keep you out of the can here. Your HTML email is definitely NOT the place for a Viagra joke.
Just like in web design, it doesn't hurt to think above the fold. Meaning what users will see before they have to scroll.
Use your footer like a footer. This is a great place for lots of things including phone numbers and addresses, about information, unsubscribe options, and perhaps a little reminder of what this email is and why the reader is on the list.
OBEY THE LAW. The CAN-SPAM act became law on Jan. 1, 2004. It says there many things you must do as a commercial email-er. Highlights are basically don't be deceptive, and that you MUST include a physical mailing address as well as a working unsubscribe link.

## Testing

Test, test, and test again. After you have an inlined version of your email, you should test it on as many devices and email clients as you can. 

The two top testing services out there are:
[Litmus](https://litmus.com/)
[Email on Acid](https://www.emailonacid.com/)

If you're not sure where to start, you can see the [Email Client Market Share](http://emailclientmarketshare.com/) by Litmus

Foundation for Emails is tested on the most popular clients. You can also test on the clients listed in our [compatability guide](compatibility.html)

These services make testing on lots of email clients and devices much faster. Still, nothing beats testing on a real device.