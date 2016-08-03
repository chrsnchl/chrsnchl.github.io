<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends MY_Controller {

  public function __construct()
   {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->data['v'] = 'blog/blog';
        $this->db->order_by('time', 'desc');
   }

	public function index()
	{
    $this->data['query'] = $this->db->get('sch_haunt', 10);
    $this->_render();
  }

  public function individual_post($postid)
	{
    $this->db->where('id', $postid);
    $this->data['query'] = $this->db->get('sch_haunt', 1);
    $this->_render();
	}

	public function match_title($title)
	{

    //form query
    $urltitle = $title;
    $title = str_replace('-', ' ', $title); //replace hyphens with spaces, for db search
    $this->db->where('title', $title);
    $this->data['query'] = $this->db->get('sch_haunt', 1);

    //form metatags
    $this->data['pageurl'] = base_url()."{$urltitle}";

    $this->data['meta'] = array(
    'og:url' => $this->data['pageurl'],
    'og:type' => 'website',
    'og:title' => "{$title}",
    'og:description' => 'Schmitt\'s Farms Haunted House',
    'og:image' => base_url().'assets/img/logo.png'
    );

    $this->_render();
	}

}
