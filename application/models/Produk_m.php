<?php defined('BASEPATH') || exit('No direct script allowed');

class Produk_m extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->data['table_name']  = 'produk';
		$this->data['primary_key'] = 'id_produk';
	}
}

