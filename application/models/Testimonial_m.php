<?php defined('BASEPATH') || exit('No direct script allowed');

class Testimonial_m extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->data['table_name']  = 'testimonial';
		$this->data['primary_key'] = 'id_testimonial';
	}
}

