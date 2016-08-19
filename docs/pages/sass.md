---
title: Using Sass
description: Foundation for Emails is written in Sass, which allows us to make the codebase customizable and flexible.
---

<div class="primary callout">
  <p>Not familiar with Sass? The [official tutorial](http://sass-lang.com/guide) on sass-lang.com is a great place to start.</p>
</div>

## Compatibility

<img src="assets/img/logos/sass-logo.svg" alt="Sass logo" class="float-right" style="width: 150px; height: 150px; margin-left: 1rem;">

**Foundation for Emails can be compiled with Ruby Sass and libsass.** We tend to stick to the latest versions of both compilers when possible. Our documentation, as well as the ZURB Email Stack, are compiled with [node-sass](https://github.com/sass/node-sass), a Node port of libsass. We recommend these versions of either compiler:

- Ruby Sass **3.4+**
- node-sass **3.4.2+** (libsass **3.3.2**)

---

## Loading the Framework

If you're using the [ZURB Email Stack](zurb-stack.html) to create emails, Sass has already been set up for you. However, it's also easy to incorporate the Foundation for Emails Sass into your own email workflow.

To get started, first install the framework files using Bower or npm.

```bash
npm install foundation-emails --save
bower install foundation-emails --save
```

Next, add the framework files as an import path in Sass. How you do this depends on your build process, but the path is the same regardless: `[packages_folder]/foundation-emails/scss`

Here's an example using grunt-contrib-sass:

```js
grunt.initConfig({
  sass: {
    dist: {
    options: {
        loadPath: ['node_modules/foundation-emails/scss']
      }
    }
  }
});
```

If you're using Compass, open your project's `config.rb` and add the import path there:

```ruby
add_import_path "node_modules/foundation-emails/scss"
```

Finally, add an `@import` statement to the top of your main Sass file.

```scss
@import 'foundation-emails';
```

You're also going to want a settings file for your project, which will allow you to modify the default styles of Foundation for Emails. **[Download the latest settings file here](https://raw.githubusercontent.com/zurb/foundation-emails/master/scss/settings/_settings.scss)**, add it to your project as `_settings.scss`, then import it *before* Foundation itself.

```scss
@import 'settings';
@import 'foundation-emails';
```

---

## The Settings File

All Foundation projects include a **settings file**, named `_settings.scss`. If you're using the ZURB Stack, you can find the settings file under `src/assets/scss/`. If you're installing the framework standalone using Bower or npm, there's a settings file included in those packages, which you can copy into your own Sass folder to work with.

Every component includes a set of variables that modify core structural or visual styles. If there's something you can't customize with a variable, you can just write your own CSS to add it.

<div class="callout warning">
  <p>Once you've set up a new project, your settings file can't be automatically updated when new versions change, add, or remove variables. Keep tabs on new <a href="https://github.com/zurb/foundation-emails/releases">Foundation releases</a> so you know when things change.</p>
</div>

Here's an example set of settings variables. These change the default styling of [buttons](button.html):

```scss
// Text color of buttons.
$button-color: $white;

// Text color of buttons with a light background.
$button-color-alt: $medium-gray;

// Font weight of buttons.
$button-font-weight: bold;

// Background color of buttons.
$button-background: $primary-color;

// Border around buttons.
$button-border: 2px solid $button-background;
```

We put together some [Best Practices on Sass file structure](http://zurb.com/university/lessons/avoid-a-cluttered-mess-sensible-sass-file-structure) that will help you keep your project clean.
