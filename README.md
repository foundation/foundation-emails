# [Foundation for Emails](http://foundation.zurb.com/emails) (v2.0 Alpha)

Foundation for Emails is the second installment of what was previously known as Ink. We've made some major improvements to the workflow including:

- **Inky, our new templating language!**
- **A small and large grid.**
- **Sass integration.**
- **Panini, our flat file generator.**
- **Components.**
- **Automatic inlining with a single command.** 

While in the process of creating our official docs, this README.md file will be your guide to installing, running, and documentation for F4E. If you need to brush up on Ink, you can still find our [old docs here.](http://foundation.zurb.com/emails/docs.html)

## Requirements
Requires NodeJS to be installed on your machine. Works with 0.12, and 4.x, and 5.x! **Note that parts of our build process will break with NPM 3, due to the changes in how packages are installed.**

The Sass is compiled using libsass, which requires the GCC to be installed on your machine. Windows users can install it through [MinGW](http://www.mingw.org/), and Mac users can install it through the [Xcode Command-line Tools](http://osxdaily.com/2014/02/12/install-command-line-tools-mac-os-x/).

## Installing
To get going with Foundation for Emails you'll need run the following commands in your projects directory:

```
git clone --recursive https://github.com/zurb/foundation-emails.git
cd foundation-emails
npm install
```

Note: this is the repo for the private release of the framework, we'll eventually be releasing a template repo to the public!

## Organization
For the private release we're including the docs within this repo for development purposes. We've provided you a testbed to work within that will act as the final `foundation-emails-template` repo that will be released to the public.

Foundation for Emails utilizes [Panini](https://github.com/zurb/panini), our super simple flat file generator. This let's compile a series of HTML **pages**  using a common **layout**. Here's what the directory structure will look like:

```
foundation-emails/
├── _build/
│   └── ...
├── foundation-emails-template/
│   └── layouts
│        └── ...
│   └── pages
│        └── ...
```
You'll be working within the `foundation-emails-template/layouts/` and `foundation-emails-template/pages/` to write your HTML emails. The `dist/` directory will have all of your outputted emails.

## Commands
You'll have two commands that will give you all the tools you need for F4E.

1. `npm test` Run this command from the root directory to compile and quickly view your emails within your browser. Browser Sync will run automatically to update your codes changes on the fly!
2. `npm run production` Run this command when you're ready to send off your email for testing. This command inlines all of the styles getting you ready to send off your email.

## Inky - Our Templating Language
We’ve created a brand-spankin’-new templating language to make coding HTML emails a synch! You can now use custom Inky tags to whip up complex table layouts at lighting speed. Check out the example below:

```
<container>
  <row>
    <columns large='8' small='6'>
      <button>My button</button>
    </columns>
    <columns large='4' small='6'>
      <h3>Hi</h3>
    </columns>
  </row>
</container>
```

Here's a list of our custom Inky tags:

- `<container>` Which contains the content of the email. Set to 600px by default.
- `<row>` A horizontal block that holds columns.
- `<columns>` Vertical divisions within a row.
- `<subcolumns>` Columns within a column. We'll be working to remove this tag.
- `<callout>` A generic container component used to differentiate content within the flow of the email.
- `<inline-list-h>` A horizontal inline list of elements.
- `<inline-list-v>` A vertical inline list of elements.


Here's a list of our attributes:

- `small` This attribute is applicable to the `<columns>` and `<subcolumns>` tags. It defines the width of the column in the small breakpoint. The syntax looks like:

```
<columns small='12'>
```
- `large` This attribute is applicable to the `<columns>` and `<subcolumns>` tags. It defines the width of the column in the large breakpoint. The syntax looks like:

```
<columns large='12'>
```

## Using Sass
You'll be able to use the `_settings.scss` within the `/test` folder to update sass variables! This means you can use global variables to control the overall look of the page, just like in Foundation for Sites! When you have `npm test` running, just change a variable's value in the `_settings.scss`, save, and voila! The variables are updated with no uncommenting necessary!

Note: The `_settings.scss` file automatically scrapes your project for variables. If you add variables that you'd like to see reflected in the `_settings.scss` file run `npm start settings` to update it.

## Filing Issues
As an open source project, we looooove our community support. Please file issues, or better yet pull requests on the [Foundation for Emails Repo](https://github.com/zurb/foundation-emails). We're stoked to hear your feedback, make improvements, and release this to the public soon!
