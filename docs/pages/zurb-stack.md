---
title: ZURB Stack
descripiton: The ZURB email stack is a boilerplate that gives you everything you need to develop and test HTML emails.
---

Email and web development can get complicated fast. We’ve introduced the ZURB Stack which helps you get started faster and lets you do more - without having to spend time finding the right tool for the job. The ZURB Stack includes:

## Gulp
This is our task runner of choice for Foundation. Gulp lets us queue up tasks to execute. This lets us do cool things like inlining automagically updating your browser. It’s what the Stack is built on. [Find out more about Gulp](http://gulpjs.com/).

## Sass
We use Libsass as our CSS preprocessor of choice. If you’re not familiar with Sass, it lets you use variables, nesting, and mixins (to name a few). [Learn more about Sass](http://sass-lang.com/).

## Inlining
One of the biggest headaches and time-sucks used to be inlining your HTML email. Well, no more! We’re using gulp-inline to to scan your CSS file and automatically inject your CSS when you’re ready. Just run `npm run build` in your project when you’re ready to inline.

## Build Options
By default the inliner works without removing whitespaces and inlining for you, you have to change your settings in the inliner function (`function inliner(css)`) on your gulpfile.babel.js which is the root of your project. To change these settings go and update this part of the function as you wish: ``` .pipe($.htmlmin, { collapseWhitespace: true, minifyCSS: true }); ```.

## Panini
This is our flat file generator for Foundation. Just like it’s real-world counterpart, it takes a set of ingredients and flattens them into one delicious item. This lets you separate things like the header and footer content into partials, letting you focus on your code when you’re building. It’s built off of Handlebars, which let’s you keep things super organized with partial files and repeatable sections. Checkout our [Panini Repo](https://github.com/zurb/panini).

## BrowserSync
BrowserSync is awesome. It’s the specific tool in our ZURB Stack that let’s you see your code changes in the browser in real-time. Just save your code and watch the magic happen in your browser. [Learn more about BrowserSync](https://www.browsersync.io/).

## Image Compression
Finally, we’ve added gulp-imagemin which intelligently reduces the file-size of your png, jpeg, gif, and svg images. This lets your emails load at lightning speeds! [Check out the gulp-imagemin repo](https://github.com/sindresorhus/gulp-imagemin).

## Migrating a Project to 2.2.1
Updating Foundation for Emails is quite easy. Navigate to your package.json file in the root of your project folder. You'll want to change the dependency from your current version (around line 16) to version `2.2.1`.

After that you will need to update to the latest version of inky. In the same package.json file, find the section devDependcies. (around line 41). Change your current version of inky to `^1.3.6`.

Once that is completed, you will need to update the app.scss file.  In order to be able to use Foundation for Sites and Emails together without conflicts, the Foundation for Emails CSS file’s name has changed from `foundation` to `foundation-emails`. If you are using the CSS version you can change the name from `foundation.min.css` to `foundation-emails.min.css`.

Next, open up command line and navigate to the root of your project folder. Run `npm install`. Once completed, run `foundation build`.

---

The ZURB Stack is just a starting place that lets you do all of the things mentioned above! You can totally rip out or add to the ZURB Stack’s gulp file to make your perfect email environment.
