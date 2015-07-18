<?php
if ( ! defined('BASEPATH') ) {
	exit("No direct script access allowed");
}

if ( ! function_exists( 'init_pagination' ) ) {
	function init_pagination($uri, $total_rows, $per_page = 10, $segment = 3 ) {
		$CI                          = & get_instance();

		// essential config
		$config['per_page']          = $per_page;
		$config['uri_segment']       = $segment;
		$config['base_url']          = base_url().$uri;
		$config['total_rows']        = $total_rows;
		$config['use_page_numbers']  = TRUE;

		// surrounds entire pagination with ul
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';

		// customizing first link
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';

		// customize last link
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';

		// customizing next link
		$config['next_link'] = '&raquo;';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';

		// customizing previous link
		$config['prev_link'] = '&laquo;';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';

		// opening tag for current page link
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';

		// tag for all pages link
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$CI->pagination->initialize($config);
		
		return $config;   
	} 
}
