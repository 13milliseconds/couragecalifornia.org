<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class FrontPage extends Controller
{

    public function latest_news() {
        $featured_action = get_field('featured_action');
	    $args = array(
            'post_type' => 'post',
            //'cat' => -1, // No Press Releases
	    	'posts_per_page' => 3,
            'post_not_in' => array($featured_action->ID),
	    );
	    $the_query = new WP_Query( $args );
	    return $the_query->posts;
    }
    
    public function data(){
        $data = [];
        $data['top'] = get_field('top');
        $data['intro'] = get_field('intro');
        $data['newsletter'] = get_field('newsletter');
        $data['courage_score_banner'] = get_field('courage_score_banner');
        $data['voter_guide'] = get_field('voter_guide');
        $data['institute'] = get_field('institute');
        $data['featured_action'] = get_field('featured_action');

        return $data;
    }
}
