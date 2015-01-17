Opower Ink
==========
Ink is a responsive email framework, used to make HTML emails look great on any client or device.  It includes a 12-column grid, as well as some simple UI elements for rapid prototyping.

This is a modified version of [Zurb Ink](https://github.com/zurb/ink), which Opower uses as a responsive framework for emails.

Changes 
* Removes Typography, Panel, and Button CSS
* Updates normalizing CSS for `table`, `tr`, and `td`
* Adds `.grid` to `td`s used for responsive layout so we can target which tables elements get the responsive treatment. Necessary since we won't be updating all modules to be Ink-compliant. 

