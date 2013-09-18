# Ink

Ink is a framework for creating responsive emails.  It supports a large number of platforms out of the box (including Outlook) and includes many of the core features of Foundation, such as a responsive grid, buttons and panels.  To use the framework, simply include the CSS at the top of your email (in a `style` tag, rather than linked in an external stylesheet) and follow the syntax layed out in this document, as well as the two included sample templates.  Once your email is fully coded, run it through a CSS-inliner tool (we recommend Campaign Monitor's tool) and send it out using an HTML email provider.  We use Litmus for testing a variety of clients, but obviously we can't cover every combination, so let us know if you find things that don't work.

# Tested Platforms

* Gmail
* Apple Mail
* Microsoft Outlook
* Android Native
* iOS Native
* AOL Mail
* Yahoo Mail

# Features

## Grid

```
table.body
	td.center

		table.container

			table.row
				td.wrapper(.last)

					table(.one).columns
						td.expander
```

## Sub-grid
	
```
table(.three).columns
	td(.two).small-columns(.last)
	td.expander
```

## Full-width Headers/Footers

```
table.body
	td.center

		table.row
			td.center

				table.container
					td.wrapper(.last)

						table(.four).columns
							td.expander
```

## Visibility Classes

Apply a class `hide-for-small` or `show-for-small` to a table to toggle its visibility based on the media query.

## Panels

Apply a class `panel` to a td that's a descendant of a `columns` table.  Cannot be applied to an element positioned with an offset class.

## Grid Offsets

Apply an offset class to a `wrapper` td or a small offset class to a `small-columns` td to force it to the right by that many columns, without the need for an empty `columns` element.  The available offsets are:

* offset-by-one
* offset-by-two
* offset-by-three
* small-offset-by-one
* small-offset-by-two
* small-offset-by-three

## Buttons

Apply a button class to an anchor tag, and include a table within the anchor.  Optional treatment or color classes may be added to the anchor tag as well.

```
a.button(.radius)(.success)
	table
		tr
			td
```

Button Classes:

* button (same as `small-button`)
* tiny-button
* small-button
* medium-button
* large-button

Treatment Classes:

* radius
* round

Color Classes:

* secondary
* success
* alert


# General Email Quirks and Notes

* Yahoo doesn't respect media queries, tries to render CSS inside them as normal.  Use bracket notation to confuse the beast and keep your MQs from rendering in Yahoo.
* Chrome will only render padding on `td`s, not `table`s.
* Classes can only be applied to `table` and `td` (unknown origin).
* Media queries must use the `!important` modifer in order to override inline styles.
* Outlook (and, from the looks of it, Thunderbird) force images full width, irregardless of `width` or `max-width`.
* Expander `td` causes weird resizing in some cases in Outlook <= 2003 (ex. Wakefield hero), though I don't know the pattern yet.
* To hide images in Gmail, the wrapper and the image need to have `display:none;` [Note: confirm this]
