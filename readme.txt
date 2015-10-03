/* -------------------------------------------------------------- */
/* Amethyst
/* -------------------------------------------------------------- */
Author: featherplain
Donate link: http://www.amazon.co.jp/registry/wishlist/2GURV789X3MLT
Tags: white, responsive-layout, single-column, two-columns, right-sidebar, editor-style, sticky-post, microformats, featured-images, custom-colors, custom-menu, custom-background
Requires at least: 4.1
Tested up to: 4.3.1
Stable tag: 1.0.0
License: GPLv2 or later
License URI: license.txt
Text Domain: amethyst

== Description ==
Amethyst is a simple theme based on Foundation. The design is kept simple to keep the simplicity of the Foundation. Features are, 100% responsive layouts, Genericons, Gulp use, Sass.


/* Installation
/* -------------------------------------------------------------- */

== Installation using "Add New Theme" ==
1. From your Admin UI (Dashboard), go to Appearance => Themes. Click the "Add New" button.
2. Search for theme, or click the "Upload" button, and then select the theme you want to install.
3. Click the "Install Now" button.

== Manual installation ==
1. Upload the "amethyst" folder to the "/wp-content/themes/" directory.

== Activiation and Use ==
1. Activate the Theme through the "Themes" menu in WordPress.


/* Third Party Resources
/* -------------------------------------------------------------- */

Foundation
License: MIT
Source: http://foundation.zurb.com/

FastClick
License: MIT
Source: https://github.com/ftlabs/fastclick

HTML5 Shiv
License: MIT/GPL2 License
Source: https://github.com/aFarkas/html5shiv

Genericons
License: GPLv2
Source: http://genericons.com/


/* Theme Features
/* -------------------------------------------------------------- */

== 2 blog layouts ==
* Right Sidebar
* Single Column layout

== Header paterns ==
* Left logo + Global navigation ( default )

== Widget areas ==
* Sidebar
* Footer

== Navigation ==
* Global navigation ( in header )

== HTML5, Microformats compatible ==
HTML5 mark upped. Page structure follows Foundation and it's kept as simple as possible.
Micro formats compatible. WordPress, by default, outputs a class "hentry", which belongs to microformats and so this theme adjust everything with it.

== Useful CSS class ==
* .btn: A class for link contents with button style.
* .btn-full: A class for link contents with full width button style.

== Using child theme with Sass ==
While you can @import or wp_enqueue_script the style.css from your child theme, you can utilize the variables and functions of Sassified Foundation. Copy /amethyst/src/scss/ directory to your child theme directory so that you can compile them with Gulp and such.

/* -------------------------------------------------------------- */
/* Change log
/* -------------------------------------------------------------- */

== 1.0.0 ==
* Initial Release
