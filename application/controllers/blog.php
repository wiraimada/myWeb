<?php if (! defined('BASEPATH'))
		exit('No direct script access allowed');

	class Blog extends CI_Controller{
		function _construct(){
			parent::_construct();
		}

		function index(){
			echo "Hello world";
		}

	}
	/* End of file Blog.php */
	/* Location: ./application/controllers/blog.php */