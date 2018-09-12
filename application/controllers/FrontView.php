<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontView extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('frontview_model');
		$this->load->helper('form');
		$this->load->helper('date');
		$this->load->library('pagination');
		$this->load->helper('url');
	}
	
	public function index()
	{
		$data['menu'] = $this->frontview_model->menuKiri();
		$data['menuSub'] = $this->frontview_model->menuKiri();
		$data['subMenu'] = $this->frontview_model->subMenuList();
		$data['menuFooter'] = $this->frontview_model->menuKiri();
		$data['categories'] = $this->frontview_model->categoriesList();
		$data['sortcutView'] = $this->frontview_model->previewContent('1',0);
		$data['contentCount'] = $this->frontview_model->contentCount();
		$data['recentPost'] = $this->frontview_model->recentPost();
		$data['popularPost'] = $this->frontview_model->popularPost();
		$data['detailContent'] = $this->frontview_model->detailContent();
		$data['listSlide'] = $this->frontview_model->listSlide();
		$content =  $this->frontview_model->detailContent();
		$id = $content[0]->id;
		$data['comment'] = $this->frontview_model->commenHome($id);
		// $data['user'] = $this->gudang_model->userLogin();
		$this->load->view('front_view',$data);
	}
	
	function contentselect($id)
	{
		$data['contentDetatil'] = $this->frontview_model->select_by_id($id);
		$data['menu'] = $this->frontview_model->menuKiri();
		$data['menuSub'] = $this->frontview_model->menuKiri();
		$data['subMenu'] = $this->frontview_model->subMenuList();
		$data['menuFooter'] = $this->frontview_model->menuKiri();
		$data['categories'] = $this->frontview_model->categoriesList();
		$data['sortcutView'] = $this->frontview_model->previewContent('1',0);
		$data['contentCount'] = $this->frontview_model->contentCount();
		$data['recentPost'] = $this->frontview_model->recentPost();
		$data['popularPost'] = $this->frontview_model->popularPost();
		$data['detailContent'] = $this->frontview_model->detailContent();
		$data['listSlide'] = $this->frontview_model->listSlide();
		$data['comment'] = $this->frontview_model->comment($id);
		$data['commentReplay'] = $this->frontview_model->commentReplay($id);
		$this->frontview_model->viewerAdd($id);
		// $data['user'] = $this->gudang_model->userLogin();
		$this->load->view('content_view',$data);
	}

	function addComment(){
		$today = date("Y-m-d H:i:s"); 
		$data1['name'] = $this->input->post('name',true);
		$data1['email'] = $this->input->post('email',true);
		$data1['commentText'] = $this->input->post('commentText',true);
		$data1['dateTime'] = $today;
		$data1['contentPost_id'] = $this->input->post('contentPost_id',true);
		$notif['type'] = "comment";
		$notif['status'] = 0;
		$notif['user'] = $this->input->post('name',true);
		$notif['dateTime'] = $today;
		$notif['idtarget'] = $this->input->post('contentPost_id',true);

		$this->frontview_model->postComment($data1);
		$this->frontview_model->commentAdd($this->input->post('contentPost_id',true));
		$this->frontview_model->notification($notif);
		redirect('FrontView/contentselect/'.$this->input->post('contentPost_id',true));
	}

	function videos(){
		$this->load->view('videos_view');
	}

	function postNext() {
		$config['base_url'] = site_url('FrontView/postNext');
 		$config["uri_segment"] = 3;
 		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['sortcutView'] = $this->frontview_model->previewContent('1',$data['page']);
		echo json_encode($data['sortcutView']);
	}
	
}
