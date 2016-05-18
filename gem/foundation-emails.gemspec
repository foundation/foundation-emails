# coding: utf-8
lib = File.expand_path("../lib", __FILE__)
$LOAD_PATH.unshift(lib) unless $LOAD_PATH.include?(lib)
require "foundation/emails/version"

Gem::Specification.new do |spec|
  spec.name          = "foundation-emails"
  spec.version       = Foundation::Emails::VERSION
  spec.authors       = ["ZURB"]
  spec.email         = ["foundation@zurb.com"]

  spec.summary       = %q{A framework for responsive emails made by ZURB.}
  spec.description   = %q{Foundation for Emails (previously known as Ink) is a framework for creating responsive HTML emails that work in any email client.}
  spec.homepage      = "http://foundation.zurb.com/emails"
  spec.license       = "MIT"

  spec.files         = `git ls-files -z`.split("\x0").reject { |f| f.match(%r{^(test|spec|features|vendor)/}) }
  # Include symlinked files separately via Dir.glob
  spec.files         += Dir.glob("vendor/assets/stylesheets/foundation-emails/**/*.*")
  spec.bindir        = "exe"
  spec.executables   = spec.files.grep(%r{^exe/}) { |f| File.basename(f) }
  spec.require_paths = ["lib"]

  spec.add_development_dependency "bundler", "~> 1.12"
  spec.add_development_dependency "rake", "~> 10.0"
  spec.add_development_dependency "rspec", "~> 3.0"
end
