# Touchpoint

Touchpoint is a starter theme for WordPress intended for developing business/organizational websites. It adds workflow tools such as Grunt and Sass while removing some features that are not needed for custom themes. Touchpoint is forked from the Twenty Twelve theme and is maintained by [Doug Hamlin](http://doughamlin.com).

## Features
### Developer friendly features
* Sass for style
* Grunt for tasks
 * Live reload
 * Minimizes image files
 * Compiles SCSS
 * Autoprefixes CSS
 * Adds pixel fallbacks to all REM font sizes, margins, etc.
 * Minimizes JS
 * Replaces version number in functions.php (cache busting)
* Font Awesome for vector icons
* Includes mixins to keep media queries nested in selector blocks ([CSS-Tricks](http://css-tricks.com/conditional-media-query-mixins/))
* size() mixin takes one or two aruments (in REM units) to define the width and height of an element; passing one argument will define a square 
* Warns admin users if $required_plugins are not active
* Changed baseline font size to 62.5%

### Twenty Twelve features removed because they are typically not needed in business-specific themes
* Disabled post formats
* Disabled theme customizer background color and header selectors
* Removed Open Sans font
* Tag template (can be duplicated from Category template if needed)

## Get Started
* Copy the project files to a directory within `wp-content/themes`
* Run `npm install`
* Start MAMP, WAMP or whatever
* Run `grunt watch`
* Develop your theme

## To Do
* Refactor, refactor, refactor the CSS
* Reduce the base look of the theme by removing uneeded styles
* Is it worth rewriting SCSS as Stylus?

## Dependencies
* Node.js
* Grunt.js
* Ruby
* Sass
* Probably some other things I am forgetting?

## Release History
* 0.1.8, 21 Oct 2014 - Enabled live reload in grunt-contrib-watch. (Also broke this repository away from WordPress, which it had no business being a fork of.)
* 0.1.7, 17 Sep 2014 - Refactored CSS to not use ID selectors; Removed some unused CSS; Removed html5.js from header; Swapped in some HTML5 sectioning elements in place of generic divs.
* 0.1.6, 29 Jul 2014 - New border-box method; updated body_class(); More CSS refactoring.
* 0.1.5, 20 Jul 2014 - Replaced some colors and widths with variables. More CSS reduction.
* 0.1.4, 17 Jun 2014 - Some minor improvements and CSS reductions. (Also added box-sizing:border-box; I guess it didn't take last time.)
* 0.1.3, 3 Apr 2014 - Added box-sizing:border-box; Added add_theme_support( 'html5', array( 'caption' ) ); Removed the examples from $required_plugins
* 0.1.2, 1 Apr 2014 - Replaced hyphens:auto with hyphens:none
* 0.1.1, 13 Mar 2014 - Replaced REM mixins with grunt-rempix for creating pixel fallbacks; Added size(width,height) mixin
* 0.1.0, 1 Mar 2014 - Initial release