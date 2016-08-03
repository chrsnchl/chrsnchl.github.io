<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include_once(APPPATH.'core/MY_Admin.php');

class Adminblog extends MY_Admin {

  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->helper('form');
    $this->data['v'] = 'admin/blog';
    $this->db->order_by('time', 'desc');
  }

  public function index()
  {
    $this->_render();
  }
  public function add_post() 
  {
    //add blog post
    $this->data['v'] = 'admin/add_post';

    if (count($_POST) > 0):
    $this->load->model('blog_model');
    $this->blog_model->insert_into_db();
    //$this->load->view('success');//loading success view
    endif;

    $this->_render();

  }
}
