---
title: Getting Started with CSS
description: Get started with the CSS version of Foundation for Emails.
---

Foundation for Emails takes the pain out of developing HTML emails by giving you a set of powerful, tested components out of the box. This includes a fully-responsive grid, buttons, callouts, menus, and more.

In this Getting Started guide, we'll download Foundation for Emails, construct the basic grid, and then inline our email so it's ready to test.

---

## Installing

If you haven't yet, download the starter files for Foundation for Emails. They include the boilerplate HTML needed for an email, and all of the CSS for Foundation.

<a href="https://s3.amazonaws.com/zurb-foundation/foundation-emails.zip" class="large button">Download Foundation for Emails</a>

Unzip the folder and open it in your text editor of choice.

---

## File Structure

Here's a breakdown of the files in the folder you got:

- `css/foundation-emails.css`: the Foundation for Emails CSS.
- `index.html`: a blank boilerplate to get started.
- `templates/`: a set of pre-made templates following common email layouts.

We'll be writing a layout from scratch, so open up `index.html`.

---

## Boilerplate

Inside `index.html`, you can see the boilerplate needed to make an HTML work, with comments explaining what does what.

```html
<!-- Emails use the XHTML Strict doctype -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <!-- The character set should be utf-8 -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width"/>
  <!-- Link to the email's CSS, which will be inlined into the email -->
  <link rel="stylesheet" href="assets/css/foundation-emails.css">
  <style>
    <!-- Your CSS to inline should be added here -->
  </style>
</head>

<body>
  <!-- Wrapper for the body of the email -->
  <table class="body" data-made-with-foundation>
    <tr>
      <!-- The class, align, and <center> tag center the container -->
      <td class="float-center" align="center" valign="top">
        <center>
          <!-- The content of your email goes here. -->
        </center>
      </td>
    </tr>
  </table>
</body>
</html>
```

---

## Grid Basics

Foundation for Emails includes many common elements needed to make HTML emails: a grid, typography styles, buttons, callouts, and more.

The markup required to create HTML emails that work in all email clients is *complicated*, and involves writing many tables. However, all of Foundation's components are thoroughly tested in every major email client, including the problematic ones like Outlook. The rigid structure ensures your designs don't look off in any email client.

Let's start by building a basic grid. To do that, we need three pieces: a container, a row, and then some columns.

### Container

Most Foundation for Emails components are full tables, including the container. Inside the `<center>` tag of `index.html`, add this table code:

```html
<table class="container">
  <tr>
    <td></td>
  </tr>
</table>
```

The **container** will wrap the body of your entire email. It applies a maximum width to the body of the email. Every email needs this bit of boilerplate.

### Row

Next, let's build the grid itself, starting with the row. **Rows** group columns together into a unit. Inside of your container, add this table:

```html
<table class="row">
  <tr>
    <th></th>
  </tr>
</table>
```

### Columns

Columns divide your layout into horizontal sections that sit side-by-side. On small screens, these columns stack on top of each other to save space&mdash;unless you set them up to keep their layout on small screens.

Inside of your row (the innermost `<tr>`), add one column using this code:

```html
<table class="row">
  <tr>
    <th class="small-12 large-6 first columns">
      Column One
    </th>
    <th class="expander"></th>
  </tr>
</table>
```

In the above example, we used the classes `.small-12` and `.large-6` to define the size of the column on small vs. large email clients. Foundation uses a 12-column grid, so on mobile clients, the column stretches the full width of the page, and on desktop clients, the column is half the width of the row.

Since this first column is half-width, we need a second one to go with it. *After* the `<th>` for the first column, add the code for the second column:

```html
<table class="row">
  <tr>
    <th class="small-12 large-6 first columns">
      Column One
    </th>
    <th class="small-12 large-6 last columns">
      Column Two
    </th>
    <th class="expander"></th>
  </tr>
</table>
```

You may have noticed the `.first` and `.last` classes on the column. The first column in a row needs the `.first` class, and the last column in a row needs the `.last` class. This is explained more in the [First and Last Classes](grid.html#first-and-last-classes) section of the grid documentation.

That's a lot of HTML! Let's look at what it is at a high level:

```html
<!-- Container -->
  <!-- Row -->
    <!-- Column One -->
    <!-- Column Two -->
```

The CSS classes are always on the outermost table element, so that's an easy way to identify where a component starts. The container starts at the table with the `.container` class, the row starts at the table with the `.row` class, and so on.

---

## Inlining

Now that we have a basic email, the last thing we need to do before we can send it is *inline* it. This is the process of injecting all of the CSS for the email into the HTML, so that it works as a self-contained file.

Email clients like Gmail and Outlook strip out `<style>` tag from the `<head>` and Gmails strips it from the `<body>` of the email as well. It's best to have your CSS written inline within your markup. Hand writing all your CSS inline in a style tag would be a real pain and would take a long time.

Our [web inliner](http://foundation.zurb.com/emails/inliner-v2.html) automates this process for you. To use it, paste in the contents of `index.html` into the HTML field, paste in the contents of `css/foundation-emails.css` into the CSS field, and then press "Inline!". Once it's done, you'll see a large soup of HTML that is your inlined email.

Your email's CSS will include media queries for responsive styling which the inliner tool will move into the `<body>` so they are preserved.

---

## Testing

Now that you have an inlined email, you'll need to test it in real email clients to verify that it looks correct. All of Foundation's built-in components have already been tested in every major email client, so we've done a lot of the work for you. However, you'll want to test your email before you send it out to the masses.

The most popular tool for testing emails is [Litmus](https://litmus.com/). All you have to do is paste in the HTML of an email, and you get a live preview in any email client you want.

It's up to you to choose what email clients are important to test in, but you can [see our compatibility list](compatibility.html) for recommendations.

---

## Next Steps

You've successfully installed Foundation for Emails, and written, inlined, and tested your first email! To keep going with the framework, you can check out the documentation for the other framework components, including [buttons](button.html), [callouts](callout.html), [menus](menu.html).

If you're interested in going in-depth on the framework with the Foundation team, [check out our master class on Foundation for Emails](http://zurb.com/university/responsive-emails-foundation), an on-demand video series that explores every aspect of email design workflow.
