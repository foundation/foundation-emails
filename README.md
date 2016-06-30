# [Foundation for Emails](http://foundation.zurb.com/emails)

[![npm version badge](https://img.shields.io/npm/v/foundation-emails.svg)](https://www.npmjs.org/package/foundation-emails)
[![downloads badge](http://img.shields.io/npm/dm/foundation-emails.svg)](https://www.npmjs.org/package/foundation-emails)
[![Gem Version](https://badge.fury.io/rb/foundation_emails.svg)](https://badge.fury.io/rb/foundation_emails)
[![downloads badge](http://img.shields.io/npm/l/foundation-emails.svg)](https://www.npmjs.org/package/foundation-emails)


Foundation for Emails (previously known as Ink) is a framework for creating responsive HTML emails that work in any email client &mdash; even Outlook. Our HTML/CSS components have been tested across every major email client to ensure consistency. And with the [Inky](https://github.com/zurb/inky) templating language, writing HTML emails is now even easier.

## Getting Started

The main way to get started is with our [email template stack](https://github.com/zurb/foundation-emails-template). To use the stack, you'll need [Node.js](https://nodejs.org/en/) installed on your machine.

To set up the emails template, run these commands:

```bash
git clone https://github.com/zurb/foundation-emails-template project
cd project
npm install
```

Then run `npm start` to run the project. A new browser window will open with a BrowserSync server showing the finished files.

Run `npm run build` to do a full email inlining process.


#### Using the Ruby gem

**foundation_emails** is a gem that enables you to use Foundation for Emails assets within a Rails project. To install in your app:

1. Add the following line to your Gemfile:

  ```ruby
  gem 'foundation_emails'
  ```

2. Then execute:

  ```bash
  bundle install
  ```

3. Import Foundation for Emails in your `application.scss`:

  ```scss
  @import "foundation-emails";
  ```

## Documentation

**Check out our [Migration Guide](https://github.com/zurb/foundation-emails/blob/master/migration.md) for upgrading an existing template or for more in-depth code examples.**

Foundation for Emails 2.0 documentation and framework are on the `develop` branch and you can compile it on your own machine.

Run these commands to set up the documentation:

```bash
git clone https://github.com/zurb/foundation-emails.git
cd foundation-emails
```

Foundation for Emails 2.0 documentation is on the `develop` branch.

```bash
git fetch
git checkout develop
npm install
```

Then run `npm start` to compile the documentation. When it finishes, a new browser window will open pointing to a BrowserSync server displaying the documentation.

## Testing

Run `npm run test:visual` to compile the visual regression tests. All of the pages under `test/visual/pages` are compiled and inlined. From there, they can be uploaded to Litmus for testing.

## Inky

[Inky](https://github.com/zurb/inky) is our new templating language that converts simple HTML into the complex tables required for email layout.

The parser converts a set of custom HTML tags, expanding them out into full HTML syntax. Below is a list of every custom element.

### Grid

```html
<container>
  <row>
    <column small="12" large="4"></column>
    <column small="12" large="8"></column>
  </row>
</container>
```

### Block Grid

```html
<block-grid up="3">
  <td></td>
  <td></td>
  <td></td>
</block-grid>
```

### Components

```html
<button href="http://zurb.com"></button>
```

```html
<menu>
  <item href="one.html">Item One</item>
  <item href="one.html">Item Two</item>
  <item href="one.html">Item Three</item>
</menu>
```

## Contributing

As an open source project, we looooove our community support. Please file issues, or better yet pull requests on the [Foundation for Emails Repo](https://github.com/zurb/foundation-emails). We're stoked to hear your feedback, make improvements, and keep evolving Foundation for Emails!

Copyright (c) 2016 ZURB, inc.
