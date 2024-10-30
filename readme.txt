=== LH Better Slugs ===
Contributors: shawfactor
Donate link: https://lhero.org/portfolio/lh-better-slugs/
Tags: administration, seo, permalink, url, slug
Requires at least: 4.0
Tested up to: 6.0
Stable tag: 1.00

Improve your post and page slugs by removing too short unhelpful stopwords automatically.

== Description ==

Apply decisions not options to having better slugs for SEO

**Like this plugin? Please consider [leaving a 5-star review](https://wordpress.org/support/view/plugin-reviews/lh-better-slugs/).**

**Love this plugin or want to help the LocalHero Project? Please consider [making a donation](https://lhero.org/portfolio/lh-better-slugs/).**

== Frequently Asked Questions ==

= How do I change the minimum string length per slug word? =

By use of the lh_better_slugs_min_chars filter, just return a number other than 3 (the default).

= How do I change the stopwords which are removed from the slug? =

By use of the lh_better_slugs_stopwords filter, just return an array of the words you wish to block.

= What are the limitations? =

- LH Better Slugs overrides slugs whivh violate its rule set, however you can override them later.
- WordPress appends a unique number to ambigous slugs (e.g. hello-word, hello-world-2 et cetera). LH Better Slugs may not notice this behaviour when an article is saved for the first time. If this happens you may simply re-save the post.

= What is something does not work?  =

LH Better Slugs, and all [https://lhero.org](LocalHero) plugins are made to WordPress standards. Therefore they should work with all well coded plugins and themes. However not all plugins and themes are well coded (and this includes many popular ones). 

If something does not work properly, firstly deactivate ALL other plugins and switch to one of the themes that come with core, e.g. twentyfirteen, twentysixteen etc.

If the problem persists please leave a post in the support forum: [https://wordpress.org/support/plugin/lh-better-slugs/](https://wordpress.org/support/plugin/lh-better-slugs/). I look there regularly and resolve most queries.

= What if I need a feature that is not in the plugin?  =

Please contact me for custom work and enhancements here: [https://shawfactor.com/contact/](https://shawfactor.com/contact/)

== Installation ==

1. Upload the entire `lh-better-slugs` folder to the `/wp-content/plugins/` directory.
1. Activate the plugin through the 'Plugins' menu in WordPress.

== Changelog ==

**1.00 April 11, 2018**  
Initial release.