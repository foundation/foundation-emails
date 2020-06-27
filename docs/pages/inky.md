---
title: Inky
description: Inky is a templating language that converts simple HTML tags into the complex table HTML required for emails.
library: true
---

## Overview

HTML emails require tables upon tables *upon tables* to work properly. Although Foundation for Emails takes a lot of the pain out of constructing these tables, we've made it even easier with **Inky**, a templating language that converts simple HTML tags like `<row>` and `<columns>` into complex table HTML.

Inky keeps you out of a sea of tables and focused on your email. Check out this example&mdash;click "Switch to Inky" to see the difference.

```inky_example
<container>
  <row>
    <columns>Put content in me!</columns>
  </row>
</container>
```
<div class="callout warning">
The Inky templating language is part of the [ZURB Stack and the Sass version](zurb-stack.html). <br><a href="#how-to-inky">More on how to get Inky into your workflow</a>
</div>

---

## Tags

Inky currently supports these custom tags:

- **Grid:**
  - `<container>`
  - `<row>`
  - `<columns>`
- **Button:** `<button>`
- **Callout:** `<callout>`
- **Menu:**
  - `<menu>`
  - `<item>`

---

## FAQ

Here are some frequently asked questions about Inky:

**What’s a templating language?**

Essentially, it is just custom HTML tags. Things like `<row>` and `<columns>` are understood by this language. Since email clients only work with table-based HTML, these tags don’t actually make it into your recipient’s inbox. Instead it’s translated into the table-based HTML needed for our approach to responsive emails.

**How does it work?**

We run a Gulp task that runs through your code, identifies our custom Inky tags, and translates them into valid HTML. For the more tech-savvy, you can [check out our task on our Github Repo](https://github.com/foundation/foundation-emails/blob/v2.0.0/gulpfile.js#L149).

<a id="how-to-inky"></a>
**How do I start Inky?**

Inky is built into the ZURB Stack, but you can also use Inky standalone, or integrate it into your own build process. [Refer to the Inky readme to learn more.](https://github.com/zurb/inky#usage)

**Do I have to have the Gulp tasks running for Inky to work?**

Yes. In order for Inky to watch your files for changes, you need to be running either `npm start` or `npm run build` to see your changes reflected.

**Do I have to use Inky? What if I just want to code my own email in tables?**

You aren’t required to use Inky in your emails. You can write only in tables, or mix tables and Inky within the same email.

**What are all of Inky’s tags and components?**

You can check out all of the syntax and examples in the components section of the docs. We recommend you start off with [the grid](grid.html). 

**I found a bug&mdash;what should I do?**

Foundation for Emails is completely open sourced and we love engaging with the community. Feel free to file a bug, or even crush the bug, through our [GitHub repo](https://github.com/zurb/inky/issues).
