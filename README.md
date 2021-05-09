# Duck Diver Framework 5

A starter theme for Duck Diver Marketing, based on _strap (based on _s) theme for WordPress.

Utilizing Bootstrap 5 with an array of shortcodes for simple integration.

## List of Action Hooks
* 'dd_before_header' - Before the masthead
* 'dd_after_header' - After the navbar and </header>
* 'dd_before_slider' - If slider is active.
* 'dd_after_slider'
* 'dd_before_main_content' - After Slider before Main Content Container
* 'dd_before_footer' - After Main Content - Before the Footer
* 'dd_after_footer' - After the Footer before the wp_footer is called.
* 'dd_homepage_scripts' - Additional Scripts for the Homepage footer.  
  * By default, the ('dd_homepage_scripts', 'add_slider_to_homepage', 5); is called to include the slider script.

## List of Filters
* 'dd_main_width' - Defaults to col-md-9 - in use in the sidebar position function.
* 'dd_sidebar_width' - Defaults to col-md-3 - in use in the sidebar position function.
* 'dd_slider_image_size' - defaults to 'slider-post-thumbnail' which is 2000 x 600

### Changelog

#### Ver 1.0
Initial build as framework. Uses bootstrap 5.0.0. Basically a conversion of the _strap theme to Duck Diver theme.
