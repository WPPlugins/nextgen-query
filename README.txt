=== NextGEN Query ===
Contributors: ryan.burnette, jonathan-garber
Donate link: http://bit.ly/ngqDonate
Tags: NextGEN Gallery
Requires at least: 3.1
Tested up to: 3.8
Stable tag: 2.1.1
License: GPL3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

NextGEN Query is a back-end tool for developers. Remove all the junk from the header and query galleries directly in PHP.

== Description ==

NextGEN Query is a companion plugin for NextGEN Gallery. We created it so developers could utilize NGG's awesome back-end interface while removing all front-end traces of the plugin.

Upon activation of NGQ you'll notice that there's an 'Query' menu item under the main NGG menu. From here you can check a setting which sterilizes your front-end of NGG's additions.

Try using NGQ's two functions; `ngq_siglepic($image_id)` and `ngq_gallery($gallery_id)`. Build front-end elements the way you want to ... without the fuss.

== Installation ==

# Upload the `nextgen-query` directory to the `/wp-content/plugins/` directory
# Activate the plugin through the 'Plugins' menu in WordPress
# Notice the new `Query` menu item under the NGG menu

== Frequently Asked Questions ==

= How can I use this plugin to remove scripts and styles that NextGEN Gallery adds to the header? =

Install the plugin, activate it. Go to Gallery > Query then check the `Sterilze Header` box. Click `Save`.

= What does the ngq_query() function do? =

Nothing. `ngq_query()` is deprecated as of 2.0.0 and returns `false`.

= What does the ngq_query_singlepic() function do? =

Nothing. `ngq_query_singlepic()` is deprecated as of 2.0.0 and returns `false`.

= How can I control what users see the NextGEN Query options page? =

Set any capability for who can see the options page, just apply a filter to tag 'ngqOptionsPageCapability'.

== Screenshots ==

== Changelog ==

= 2.1.0 =
* Sterilze header works up to NGG 2.0.40

= 2.0.0 =
* A much needed update to match NGG 2.0.x, a lot has changed
* Sterilze header works again
* Deprecated old functions as they are not consistent
* Added ngq_singlepic(), ngq_gallery() functions

= 1.2.0 =
* Plugin now gracefully disables itself if NGG is not installed and active
* Improved documentation
* Cleaned up and organized code
* Options page now appears only if user has 'manage_options' capability
* Change which users see options page using 'ngqOptionsPageCapability' filter

= 1.1.0 =
* Added ngq_query_singlepic($image_id) function
* Tested up to WordPress 3.5.1

= 1.0.4 =
* Fixed a bug that broke a bunch of back-end functions. Yikes.

= 1.0.3 =
* Added a bunch more info to the array returned by ngq_query()

= 1.0.2 =
* Renamed public function once more to prevent function conflicts
* Function can now accept Gallery ID or Gallery Slug
* Fixed bug which prevented the shutter and thickbox sheets from being removed from the header

= 1.0.1 =
* Updated options page and documentation
* Updated interface placement
* Renamed main public function

= 1.0.0 =
* Initial release

== Upgrade Notice ==

= 2.1.0 =
* Sterilze header works up to NGG 2.0.40

= 2.0.0 =
* A lot has changed with NGG and NGQ
* Old NGQ functions have been deprecated, if used they return false to avoid breaking things too badly
* New NGQ functions are ngq_singlepic($image_id) and ngq_gallery($gallery_id), give them a try and you'll see the new structure
