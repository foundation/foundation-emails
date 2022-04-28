# coding: utf-8
lib = File.expand_path("../lib", __FILE__)
$LOAD_PATH.unshift(lib) unless $LOAD_PATH.include?(lib)
require "foundation_emails/version"

Gem::Specification.new do |spec|
  spec.name          = "foundation_emails"
  spec.version       = FoundationEmails::VERSION
  spec.authors       = ["Foundation"]
  spec.email         = ["contact@get.foundation"]

  spec.summary       = %q{A framework for responsive emails.}
  spec.description   = %q{Foundation for Emails (previously known as Ink) is a framework for creating responsive HTML emails that work in any email client.}
  spec.homepage      = "https://github.com/foundation/foundation-emails/tree/develop/gem"
  spec.license       = "MIT"

  spec.files         = Dir[ File.join("**", "*") ].reject { |p| File.directory?(p) || p.match(%{^(test|spec|features)/}) }
  # Include symlinked files separately
  spec.files         += Dir.glob("vendor/assets/stylesheets/foundation-emails/**/*.*")
  spec.bindir        = "exe"
  spec.executables   = spec.files.grep(%r{^exe/}) { |f| File.basename(f) }
  spec.require_paths = ["lib"]

  spec.add_development_dependency "bundler", "~> 2"
  spec.add_development_dependency "rake", "~> 10.0"
  spec.add_development_dependency "rspec", "~> 3.0"
end
