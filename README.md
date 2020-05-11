# Responsive-Drupal-Theme
About Arian Open Charity Theme
------------------------------
This is my first drupal theme. Its very light weight with modern look and feel. It is responsive theme. Tested with the latest version of Firfox, Google chrome, Safari and IE11. Responsiveness tested with Google chrome and Firefox device tool.

I just followed the instructions of drupal theming from https://www.drupal.org/node/171194

I have focused on the regions feature of drupal and tried to use the default functions and features to minimize the coading.

I have used media query in different css file to make it manageable and tried to write simple and clean css to make it easily understandable to other begineers.

I have used Drupal's default architecture for CSS.

Drupal compatibility:
------------------------------
This theme is compatible with Drupal 7.x.x

Support & Customization:
------------------------------
Email: tsumon@gmail.com

Required Modules:
------------------------------
1. entity
2. ctools
3. views
4. libraries
5. views_slideshow
6. flexslider
7. flexslider_views_slideshow
8. link

Can be downloaded from https://www.drupal.org/project/project_module

Installation: Simply extract, copy and paste to /sites/all/modules directory. Enable from the admin/modules

Installation:
------------------------------
Assuming you have already installed the drupal 7.x in your machine.
Now follow the following steps:

1. Copy and paste the extracted arian_open_charity folder to /sites/all/themes
2. From admin/appearance enable and set default the theme.
3. install the required modules.
4. Now add new content type from admin/structure. I have added three content types for three different regions (Get Involved, Members and Blog). Need to add extra fields (link and image) in the Get Involved content type and image field for Member content type.
5. Add some contents for various regions.
6. Now add different views for Blog page, Blog slider block, Get Involved block and Member slider (filtering specific content type) from admin/structure/views.
7. Go to admin/structure/block to add the blocks to specific regions. Yoy will get the newly created views title in the block list below. Just select the region from select box and click save blocks.
8. Add new block for Home page banner text, contet, Home page first block, Home page second block and Home page third block regions.
9. From admin/appearance theme settings you can put the social links url.
10. From admin/structure/menu > Main menu you can add menu items.


