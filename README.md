this is the readme.txt for multiloquent theme v6

this theme has 10 widget areas:
1) used in the top navigation bar, next to the search (restricted height of 20px with hidden overflow)
2) in advert snippet, included on posts if device is a mobile device - you can use text widgets, or a more advanced advert plugin and place widgets to suit
3) in advert snippet, included on posts if device is not mobile device - you can use text widgets, or a more advanced advert plugin and place widgets to suit
4) in sidebar.php [so it goes under the content, but above the footer]
5) in sidebar.php [so it goes under the content, but above the footer]
6) in sidebar.php [so it goes under the content, but above the footer]
7) in sidebar.php [so it goes under the content, but above the footer]
8) used in social.php [suggested that you put a text widget in it and add in your social links - to add a second lot, eg for your rss feed / facebook page]
9) footer left area for you to add whatever you want
10) footer right area for you to add whatever you want

post tags:
these are bootstrap 'label' style buttons and will have different colours based on the total number of times the tag has been used across all posts / pages on your site

other things:

version 6.1.0 adds support for wordpress theme customisation API -
currently supports changing background, text and border colours of the main theme elements

the theme is licenced under the GPLv3 - please see the included LICENCE file
the theme uses bootstrap: http://getbootstrap.com v3.0.4 - Apache-20 Licence http://www.apache.org/licenses/LICENSE-2.0
the theme uses font-awesome: http://fontawesome.io - SiL Open Font Licence http://scripts.sil.org/OFL
the theme is responsive.

the main slider on the homepage will use your top ten posts if you have the top10 plugin installed, otherwise it will use your 10 most recent as a fallback
http://wordpress.org/extend/plugins/top-10/
it gets the image from the 'featured image' against the post if it exists, if it doesnt then it uses a default image.

posts with a featured image display the featured image in the header of the site

has a theme for TW Recent Posts Widget 'yarpp' - yet another related posts plugin and it will auto include the related posts in the post page if its installed
[I suggest that you pick multiples of 3 for the number of related posts to show - 3 will be one row, 6 will be two rows]
http://wordpress.org/extend/plugins/yet-another-related-posts-plugin/

has support for jetpack sharing plugins [and puts them in the correct position in your post if you have it installed]
http://wordpress.org/extend/plugins/jetpack/

category-index.php is a page template incase someone wants to make a page that displays 'all available categories in hierarchical order' - sort of a 'top level category page' - it only contains links to category archives

tag-index.php is a page template incase someone wants to make a page that displays 'all available tags in alphabetical order' - sort of a 'top level tag page' - it only displays links to tag archives
to activate these, simply make a page in your system and assign the category or tag template.

there are 3 post template files included if you use
http://wordpress.org/extend/plugins/custom-post-template/
1) default with comments at the right hand side in desktop (under the post in mobile)
2) full width post with comments underneath
3) adventures: this auto inserts a google map if your post is titled 'placeA to placeB', eg 'Glasgow to London' will insert a google map with a route pre-selected - comments are disabled on this post template
