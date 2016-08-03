<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Admin extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->data['css'] = array(
    $this->config->item('base_url').'/assets/css/pages.css',
    'https://fonts.googleapis.com/css?family=Medula+One',
    'https://fonts.googleapis.com/css?family=Lora:400,700'
    );
    $this->data['js'] = array(
    'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js',
    'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'
    );
  }

  function _render() {
    echo "Admin Mode from app/core/MY_Admin";
    $this->load->view('partials/header', $this->data);
    $this->load->view($this->data['v']);
    $this->load->view('partials/footer');
  }

}
