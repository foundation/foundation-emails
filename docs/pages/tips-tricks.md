---
title: Tips &amp; Tricks
description: We've put together some Responsive Emails Tips &amp; Tricks that will help you navigate the mine field that is coding HTML emails.
---

Coding responsive emails can be a real pain. This guide will help you through some of the the most common issues you'd face.

## Images

## CSS

https://www.campaignmonitor.com/css/b/

## Progressive Enhancement


Tables are still the standard.

Take a look at the code of almost any HTML email you've gotten. I'll bet ya it's formatted with a table. Tables are still the best way to achieve consistent results across email clients. The email equivalent of the browser window is the "viewport", or the area in an email client dedicated to showing the actual email. This varies quite a bit. A vary common technique is to set a table with a 100% width with a nested table inside of it that is centered with a static width. This seems to work very well. The outer table is also your big chance to set the background-color for the whole email. Too bad we can't just use a div with auto left and right margins for centering, but it won't work most email clients.

What you CAN'T do:

Include a <head> section with styles. Apple Mail.app supports it, but Gmail and Hotmail do not, so it's a no-no. Hotmail will support a style section in the body but Gmail still doesn't.
Link to an external stylesheet. Not many email clients support this, best to just forget it.
Background-image / Background-position. Gmail is also the culprit on this one.
Clear your floats. Gmail again.
Margin. Yep, seriously, Hotmail ignores margins. Basically any CSS positioning at all doesn't work.


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
#