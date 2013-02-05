=== Hot'n'Cold ===
Contributors: Dukessa, Shambix
Donate link: http://www.shambix.com/en/portfolio/wordpress-plugin-hotncold/
Tags: hotncold, post views, post hotness, popular posts, jetpack, stats, badge, tag, popularity
Requires at least: 3
Tested up to: 3.5.1
Stable tag: trunk
License: GPLv2 or later

== Description ==

= Hot'n'Cold shows a different colored badge for every post, depending if the post is "hot", "medium" or "cold", based on Jetpack post views =

* The plugin requires Jetpack to be installed, activated and connected to your Wordpress.com account.

The typical/full code that you need to add to your theme, wherever you want the badge to display is `<?php shambix_hotposts(200,100,50,true,true,false); ?>`

The code MUST be used inside the Loop.

You can customize the code with these parameters, in order:

- n. of views for the post to be "hot" (default: 200)
- n. of views for the post to be "medium" (default: 100)
- n. of views for the post to be "cold" (default: 50)
- if "hot", display badge? (default: true)
- if "medium", display badge? (default: true)
- if "cold", display badge? (default: false)

We use a css file to style the badges, as they are fully made out of CSS3, no images, however we don't provide any specific layout (floating, alignment, etc), that way you are free to customize them the way you want, by using the div class `hotncold` in your own theme style.css

If you like the plugin or want to suggest a new features, feel free to drop a comment at the official plugin post on [Shambix](http://www.shambix.com/en/portfolio/wordpress-plugin-hotncold).

Credits to the [Twitter Bootstrap Framework](http://twitter.github.com/bootstrap/components.html#labels-badges) for the badges/labels' CSS.

== Installation ==

1. Upload the folder `hotncold` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Insert the code `<?php shambix_hotposts(200,100,50,true,true,false); ?>` in your theme and customize it for your needs

== Frequently Asked Questions ==

= Look of the badges =

The default badges are:

- "hot": comes in red and displays the text "HOT!"
- "medium": comes in green and displays the text "Popular"
- "cold": comes in blue and displays the text "Read Me!"

As of now, you can only edit the text by going directly in the plugin file hotncold.php

= Custom CSS =

You can customize the badges from the hotncold.css file in the plugin folder, if you want to add images instead of using CSS3.
However, if you update the plugin those changes will be lost.
If you simply want to make the badges bigger or change font (stylistic changes), we advise you do that in your theme style.css instead, using the div class `hotncold`.
You may want to add `!important` to your CSS statements, if after customizing the div class `hotncold` you see no change.

= NOTICE =
 
Please bare in mind that this is a free plugin, that the time to work on it is limited and that we do our best anyway to give everybody a cool free plugin.
So if something doesn't work as you expected please report it in the WordPress Support Forum, we'll do our best to help you out.
Thanks for understanding.

== Screenshots ==

1. Example for the badges being displayed in a category

== Changelog ==

= 1.0 =
* Plugin release

== About ==

= Who are we? =

Shambix is a Web & Mobile Development firm, we also design user interfaces and plan Social Media Marketing strategies.
We are official WordPress consultants for Europe (check on CodePoet) :)

We provide support for this free plugin's bugs but we don't give any free support for individual customization, if you need some specific work done for your website, contact us at info@shambix.com and we will get back to you with a quote and timeframe.

ENJOY! :)