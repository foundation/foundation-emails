# foundation_emails

[![Gem Version](https://badge.fury.io/rb/foundation_emails.svg)](https://badge.fury.io/rb/foundation_emails)

**foundation_emails** is a gem that enables you to use Foundation for Emails assets within a Rails project.

Foundation for Emails (previously known as Ink) is a framework for creating responsive HTML emails that work in any email client &mdash; even Outlook. Our HTML/CSS components have been tested across every major email client to ensure consistency.

## Installation

1. Add the following line to your Gemfile:

  ```ruby
  gem 'foundation_emails'
  ```

2. Then execute:

  ```bash
  bundle install
  ```

3. Import Foundation for Emails in your emails' stylesheet(s):

  ```scss
  // app/assets/stylesheets/your_emails_stylesheet.scss

  @import "foundation-emails";
  ```

## License

The gem is available as open source under the terms of the [MIT License](http://opensource.org/licenses/MIT).
