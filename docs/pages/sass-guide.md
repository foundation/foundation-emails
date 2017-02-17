---
title: Getting Started with Sass
description: Get started with the Sass-powered ZURB Stack for writing HTML emails.
---

Foundation for Emails takes the pain out of developing HTML emails by giving you a set of powerful, tested components out of the box. This includes a fully-responsive grid, buttons, callouts, menus, and more.

The Sass workflow for Foundation for Emails is backed by the [ZURB Email Stack](zurb-stack.html), an all-in-one build system for creating HTML emails. This workflow requires a bit more up-front setup, but the tooling makes it wicked fast to code, and keeps your code amazingly clean with our new custom HTML tags in Inky.

The ZURB Stack workflow also includes Handlebars, allowing you to write emails as templates instead of static files. Lastly, you can easily make sweeping design changes with the Sass [settings file](sass.html#the-settings-file). Here’s everything that’s packaged in this template:

- Inky HTML
- Sass
- Handlebars templates
- BrowserSync
- Image compression
- Inlining

In this Getting Started guide, we'll download Foundation for Emails, construct the basic grid, and then inline our email so it's ready to test.

---

## Requirements

To use the Sass version of Foundation for Emails, you need Node.js installed on your computer. Node is compatible with Windows, OS X, and Linux&mdash;the [Node.js website](https://nodejs.org/) has installers for every operating system.

---

## Installing

We'll use the Foundation CLI to set up a new project. If you already have the Foundation CLI installed from Foundation for Sites or Apps, you can skip this first command.

```bash
npm install --global foundation-cli
```

If you run into any permission errors (EACCESS) on OS X or Linux, you can try prefixing the command with `sudo`.

```bash
sudo npm install --global foundation-cli
```

Once the CLI is installed on your machine, it’s super easy to fire up a blank Foundation for Emails project. Move into the folder you store your projects in, and then run this command:

```bash
foundation new --framework emails
```

The CLI will ask you for a project name, which is used as the name of the folder to install in. After that, the project template will be downloaded, and the various dependencies installed. The entire process takes over a minute.

---

## Running the Server

After your project has been installed, run `cd project`, where `project` is the name of the project just created. Then run:

```bash
npm start
```

This will kick off the build process, which includes HTML parsing, Sass, image compression, and a server. When the initial build finishes, your browser will pop open a new tab pointing to your project. You'll be seeing a blank `index.html` file.

---

## File Structure

You'll do all of your work in the `src` folder of your project. The various HTML files, Sass files, and images inside of `src` are compiled to a new folder called `dist/` (as in "distribution"), which contains the final HTML and CSS for your emails. These are the files you'll upload to Litmus, Campaign Monitor, etc. for testing, or load into your email campaign service.

Here's a breakdown of the files in the `src` folder:

- `assets/`: Sass and image files.
- `layouts/`: Boilerplate HTML that wraps all of your emails.
- `pages/`: HTML files for emails.
- `partials/`: Reusable chunks of HTML that can be injected into pages.

---

## Boilerplate

Inside `src/layouts/default.html`, you can see the boilerplate needed to make an HTML work. Below we've annotated this boilerplate, explaining what does what.

{{{{raw}}}}

```html
<!-- Emails use the XHTML Strict doctype -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <!-- The character set should be utf-8 -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <!-- Enables media queries -->
  <meta name="viewport" content="width=device-width"/>
  <!-- Link to the email's CSS, which will be inlined into the email -->
  <link rel="stylesheet" href="assets/css/foundation-emails.css">
</head>

<body>
  <!-- Injection point for the inline <style> element. Don't remove this comment! -->
  <!-- <style> -->
  <!-- Wrapper for the body of the email -->
  <table class="body" data-made-with-foundation>
    <tr>
      <!-- The class, align, and <center> tag center the container -->
      <td class="float-center" align="center" valign="top">
        <center>
          <!-- The body of each email you write is injected here -->
          {{> body}}
        </center>
      </td>
    </tr>
  </table>
</body>
</html>
```

{{{{/raw}}}}

---

## Grid Basics

Foundation for Emails includes many common elements needed to make HTML emails: a grid, typography styles, buttons, callouts, and more.

The markup required to create HTML emails that work in all email clients is *complicated*, and involves writing many tables. However, the ZURB Stack includes Inky, a templating language that converts simple HTML tags to the complex HTML required for the components.

Let's build a basic grid.

```html
<container>
  <row>
    <columns small="12" large="6">Column One</columns>
    <columns small="12" large="6">Column Two</columns>
  </row>
</container>
```

Here we're using all three of the key layout elements: the container, row, and column.

A **container** will wrap the body of your email. It applies a maximum width to the body of the email.

**Rows** are used to group sets of **columns** together. Columns divide your layout into horizontal sections that sit side-by-side. On small screens, these columns stack on top of each other to save space&mdash;unless you set them up to keep their layout on small screens.

In the above example, we used the attribute `large` on the `<column>` tag to define a size for that column *on large screens*. Foundation uses a 12-column grid, and since `large="6"`, that means each column will take up half the width of the row. On a small screen, each columns will be full width and the second column will stack underneath.

---

## Inlining

Now that we have a basic email, the last thing we need to do before we can send it is *inline* it. This is the process of injecting all of the CSS for the email into the HTML, so that it works as a self-contained file.

Email clients like Gmail and Outlook strip out `<style>` tag from the `<head>` and Gmails strips it from the `<body>` of the email as well. It's best to have your CSS written inline within your markup. Hand writing all your CSS inline in a style tag would be a real pain and would take a long time. 

The build process doesn't inline by default. To do a full inlining process as you build, quit the process you have running in your command line, and run `npm run build` instead. This does the same build process, but adds the inlining step at the end.

Your email's CSS will include media queries for responsive styling which the inliner tool will move into the `<body>` so they are preserved.

When the email opens up in the browser, it will look the same. But try viewing the source code of the page, and you'll see a mess of code like this:

```html
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en" style="background:#cacaca;min-height:100%"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">...
```

---

## Testing

Now that you have an inlined email, you'll need to test it in real email clients to verify that it looks correct. All of Foundation's built-in components have already been tested in every major email client, so we've done a lot of the work for you. However, you'll want to test your email before you send it out to the masses.

The most popular tool for testing emails is [Litmus](https://litmus.com/). All you have to do is paste in the HTML of an email, and you get a live preview in any email client you want.

It's up to you to choose what email clients are important to test in, but you can [see our compatibility list](compatibility.html) for recommendations.

---

## Next Steps

You've successfully installed Foundation for Emails, and written, inlined, and tested your first email! To keep going with the framework, you can check out the documentation for the other framework components, including [buttons](button.html), [callouts](callout.html), [menus](menu.html).

If you're interested in going in-depth on the framework with the Foundation team, [check out our master class on Foundation for Emails](http://zurb.com/university/responsive-emails-foundation), an on-demand video series that explores every aspect of email design workflow.
