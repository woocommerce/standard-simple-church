# Simple Church For Standard

A child theme developed by Chris Rouse for use with Standard 3.

* [Chris Rouse](http://chrisrouse.us)
* [Demo Site](http://demo.chrisrouse.us/SimpleChurchTheme)

## Disclaimer
* This theme is provided "As Is". I'll release updates as necessary, but regular updates and support shouldn't be expected. This theme is a starting point and it's intended for you to build on it from here. If you would like to contribute anything to the theme, let me know and I'll figure out the best way to get you involved.
* This is a free theme. If you like it, spread the word. If you don't like it, don't use it.

## Features

* Custom Home Page template.
* Notify user of required plugins and prompt to install and activate.
* Custom social media icons.
* Easy-to-understand style.css file follows the same layout as the Standard Theme style.css.

## Things you should do first

* Install and activate the required plugins.
* Upload your logo through Standard>Presentation>Logo. Theme is designed for a 300x42 pixel graphic, but this can easily be adjusted in style.css.
* Use Header Menu (Lower) for best results. Not designed for use with Header Menu (Upper).

## Reporting bugs

* If you find a bug with this theme, send an email to contact@chrisrouse.us with details. If you have a possible fix, please include that. If you have screenshots of the issue, definitely include those.
* I won't release regular updates, but if there are more than five changes being made, I'll update the theme. If I fix a bug you reported, I'll email you to let you know the theme has been updated.

## More customization

* If you want more customization than you know how to do, send me an email at contact@chrisrouse.us. Some things may be able to be done for free, but if you have a lot of customizing, we'll talk a price to get it done.

## Modified files

* footer.php
* I have removed several pieces of the default copyright text from the right side so that it only shows the year, site name, and Privacy Policy Link. Referal and 8BIT links have been removed.

* functions.php
* Includes several functions that make the site work nicely. Google Fonts should be the only thing you may want to change.

* Images folder
* This includes the image used behind the header and footer. If you want to use a different image, add it to this folder and then replace the link in the style.css.

* lib folder
* This includes the Standard Sticky Footer widget file.

* loop-quote.php
* This supports using a custom field called "attribution" to include an additional line below the post title after publishing a quote.

* loop.php
* There are several small tweaks made to this file. This is the file for standard post types.

* required-plugin-activation.php
* This file maks it possible for this theme to require plugins to be installed.

* style.css
* This is where all the custom design magic happens. You can modify anything in this file without really breaking things. The worst that happens is you make something look bad and have to undo whatever you changed.

* template-home.php
* This is the Home page template. Don't touch!