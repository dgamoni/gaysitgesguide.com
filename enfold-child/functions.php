<?php

/*
* Add your own functions here. You can also copy some of the theme functions into this file. 
* Wordpress will use those functions instead of the original functions then.
*/

/* Change Blog Archive Style  */


function change_blog_archive_style() {	
	global $avia_config;
	if(!is_single()){ $avia_config['blog_content'] = "excerpt_read_more"; }
}
add_action('get_header', 'change_blog_archive_style');

add_filter('avf_builder_boxes', 'add_builder_to_posttype');

function add_builder_to_posttype($metabox)
{
	foreach($metabox as &$meta)
	{
		if($meta['id'] == 'avia_builder' || $meta['id'] == 'layout')
		{
			$meta['page'][] = 'bar'; /*instead add the name of the custom post type here*/
		}
{
			$meta['page'][] = 'event'; /*instead add the name of the custom post type here*/
		}
{
			$meta['page'][] = 'restaurant'; /*instead add the name of the custom post type here*/
		}
{
			$meta['page'][] = 'saunas'; /*instead add the name of the custom post type here*/
		}
{
			$meta['page'][] = 'clubs'; /*instead add the name of the custom post type here*/
		}	
{
			$meta['page'][] = 'shopping'; /*instead add the name of the custom post type here*/
		}	
{
			$meta['page'][] = 'galleries'; /*instead add the name of the custom post type here*/
		}		
	}
	return $metabox;
}