<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if(!function_exists('url')){
	function url($nom){
		return base_url(). 'assets/' .$nom;
	}
}
