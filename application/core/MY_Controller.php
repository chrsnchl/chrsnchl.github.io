<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->data['css'] = array(
    $this->config->item('base_url').'/assets/css/pages.css',
    'https://fonts.googleapis.com/css?family=Medula+One',
    'https://fonts.googleapis.com/css?family=Lora:400,700'
    );
      array_push($this->data['css'], 'https://fonts.googleapis.com/css?family=Oswald');
    $this->data['js'] = array(
    'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js',
    'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'
    );
  }

  function _render() {
    $this->load->view('partials/header', $this->data);
    $this->load->view($this->data['v']);
    $this->load->view('partials/footer');
  }
}
