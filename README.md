This is my personal copy of the PressPlaying theme, with custom modifications
as I needed them. While I have tried to keep changes in the behaviour close to
the spirit of the original code, *this may not always be the case and things
might break!* Also, I haven't coded a single line of PHP except for the
modifications here, so caveat emptor. Seriously, if you break you blog and
demand my head on a platter, that just isn't happening. I might be more
inclined to help if you ask nicely however.

That being said, I've tried to write it so that all new features revert to the
behaviour of the original code when disabled and that they are fully
configurable from the theme options page (nothing is hard coded, although
that would have made things easier for me). I've also tried to maintain the
convention of translatable strings, so if you're the kind of person that's
into internationalization, go for it.

A live demo of all the changes can be found at my blog: [Zero Indexed]
(http://zeroindexed.com).

The initial commit to this repository is PressPlay v2.1, and all modifications
are based upon this version. An unofficial changelog (see repo history for
details):

* Twitter integration &emdash; when a twitter username is configured through
  theme options, a "Follow on Twitter" link appears next to the "Subscribe"
  link, in the top right corner.

* If using the 80x80px logo, clicking the logo is now a link to the main
  page of your blog. I don't know how this affects the other options.

* Customizable copyright text in the footer. Defaults to the blog name.

* Removed "Authors" tab. Redundant for single author blogs like mine. Someday
  I'll make the sidebar tabs customizable through theme options.

* Style changes &emdash; true fluid width. Fixes a bug where a right sidebar
  goes below posts if the window isn't wide enough.

* Pages reference "/favicon.ico" in the *root of your site*.

* Converted vanilla readme to markdown.

The commits are fairly independent of each other, and it theoretically should
be possible to pick and choose which changes you'd like on top of vanilla,
although that would require some git magic and some luck.

All credit to Michael Dance for the gorgeous theme.

The original README:
> PressPlay Readme
> ================
>
> Designer: Michael Dance  
> http://profiles.wordpress.org/seventhsteel/
>
> Theme Home: http://pressplaying.com  
> Support: http://pressplaying.com/support
>
> PressPlay is a clean and elegant theme with rich colors for personal or
> professional websites. Flexible theme options offer four different layouts and
> lots of header customizations. Additional features include six widget areas, a
> simple tabbed jQuery sidebar, and mutiple custom page templates. It's also
> browser-safe and built on XHTML 1.0 Strict.
>
> Changelog
> ---------
>
> #### Version 2.1 - March 21st, 2010 ####
>
> * Added searchform.php and tweaked search form styling.
> * Added theme options for toggling pages, categories, or neither in both header menus.
> * Changed the sidebar heading letter spacing.
> * Now use wp_enqueue_script in header to call jQuery (to minimize tabbed
>   widget conflicts - thanks to Shinji).
> * Images don't overflow past the bottom of posts now.
> * Image centering in posts now works correctly.
> * Restyled readme file.
>
> #### Version 2.0 - February 6th, 2010 ####
>
> * Complete style and design revamp.
> * Added theme options, and alternate styles for those options in header.php.
> * Added four custom page templates (no-sidebar, links, archives, widget).
> * Added /library folder to house tabs.js and functions.
> * Added /languages folder along with English translation files.
> * Fixed variable gallery columns.
> * Integrated WP-PageNavi.
> * Page and category lists can no longer overflow.
> * Added "author" tab to sidebar widget.
>
> #### Version 1.3 - August 2nd, 2009 ####
>
> * Moved dates from post boxes and into small tabs to the left of content.
> * Localization support: now fully translation-ready.  (Thanks to Georg!)
> * Post meta info was commented out by default in 1.2; now fixed.
>
> #### Version 1.2 - July 16th, 2009 ####
>
> * Fixed a widget validation error.
> * Fixed pingback styling.
> * Brightened the archive banners a little.
> * Deleted unused archive-banner-top.png image.
> * Changed "feed" to "subscribe" in header.
> * Eliminated bug in which you're only able to see the first page of search results.
> * No longer shows the blank bar at the bottom if there are no next/previous links.
> * Regular body fonts are now Tahoma.
> * Site blurb is now normal-weight Georgia.
> * Removed Lower Sidebar default widget instructions.
> * Fixed margins on left-justified images.
> * On author pages, now displays public name as opposed to first/last name.
> * Dates added to post headings on the homepage and all archive pages.
> * Versions before 2.7 now no longer get hung up on the post_class() error.
>
> #### Version 1.1 - July 3rd, 2009 ####
>
> * Updated screenshot.png
> * Commented out ad boxes by default.
> * If there are no comments, sidebar widget now displays "no comments yet"
>   message which fixes a validation error.
> * Deleted unnecessary "exclude" code in wp_list_categories.
> * Fixed DOCTYPE typo.
