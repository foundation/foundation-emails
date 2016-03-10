---
title: Inky
description: Inky is a templating language that converts simple HTML tags into the complex table HTML required for emails.
---

We’re proud to announce our new templating language, Inky! We have our own custom tags such as the `<row>` and `<column>` tags. This keeps you out of a sea of tables and focused on your email. Check out an example below:

*Need an example here.*

We’re super proud of our Inky templating language, and want to make sure you know how to get the most out of it! Here’s a few of the more frequently asked questions about Inky:

### What’s a templating language?

Essentially, it is just custom HTML tags. Things like <row> and <columns> are understood by this language. These tags don’t actually make it into your recipient’s inbox, it’s translated into the table-based HTML needed for our approach to responsive emails.

### How does it work?

We run a Gulp task that runs through your code, identifies our custom Inky tags, and translates them into valid HTML. For the more tech-savvy, you can check out our task on our Github Repo here.

### How do I start Inky?

Inky is built into the ZURB stack.  There are two simple commands, `npm start` and `npm run build`, which  release the kraken, aka start the Inky templating language.

### Do I have to have the Gulp tasks running for Inky to work?

Yes. In order for Inky to watch your files, you need to be running either npm start or npm run build to see your changes reflected.

### Do I have to use Inky, what if I just want to code my own email?

You aren’t required to use Inky in your emails. You can write only in tables, or mix tables and Inky within the same email.

### What are all of Inky’s tags and components?

You can check out all of the syntax and examples in the components section of the docs. We recommend you start off with The Grid.

### I found a bug, what do I do?

Foundation for Emails is completely open sourced and we love engaging with the community. Feel free to file a bug, or even crush the bug, at our GitHub Repo.
