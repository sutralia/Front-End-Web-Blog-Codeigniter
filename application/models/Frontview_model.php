<?php

class Frontview_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	function menuKiri()
	{
		$this->db->select('*');
		$this->db->from('menuSide');
		$this->db->order_by('id','asc');
				
		return $this->db->get()->result();
	}

	function categoriesList(){
		$this->db->select('*');
		$this->db->from('categories');
		$this->db->order_by('id','asc');

		return $this->db->get()->result();
	}
	
	function subMenuList(){
		$this->db->select('*');
		$this->db->from('subMenu');
		$this->db->order_by('id','asc');
		return $this->db->get()->result();
	}

	function previewContent(){
		$this->db->select('*');
		$this->db->from('contentPost');
		$this->db->order_by('dateTime','desc');
		return $this->db->get()->result();
	}

	function detailContent(){
		$this->db->select('*');
		$this->db->from('contentPost');
		$this->db->order_by('dateTime','desc');
		$this->db->limit(1);
		return $this->db->get()->result();

	}

	function listSlide(){
		$this->db->select('title,imgCover');
		$this->db->from('contentPost');
		// $this->db->where('id',1);
		$this->db->order_by('dateTime','desc');
		return $this->db->get()->result();
	}

	function select_by_id($id){
		$this->db->select('*');
		$this->db->from('contentPost');
		$this->db->where('id',$id);
		
		return $this->db->get()->row();
	}

	function viewerAdd($id)
	{
		$this->db->set('viewer','viewer+1',FALSE);
		$this->db->where('id',$id);
		$this->db->update('contentPost');
	}

	function popularPost(){
		$this->db->select('*');
		$this->db->from('contentPost');
		$this->db->order_by('viewer','desc');
		$this->db->limit(4);
		return $this->db->get()->result();
	}

	function recentPost(){
		$this->db->select('*');
		$this->db->from('contentPost');
		$this->db->order_by('dateTime','desc');
		$this->db->limit(5);
		return $this->db->get()->result();
	}

	function comment($id){
		$this->db->select('*');
		$this->db->from('comment');
		$this->db->where('contentPost_id',$id);
		$this->db->order_by('dateTime','desc');
		
		return $this->db->get()->result();
	}

	function commentReplay($id){
		$this->db->select('*');
		$this->db->from('comment');
		$this->db->join('commentReplay', 'comment.id = commentReplay.comment_id');
		$this->db->where('contentPost_id',$id);
		
		return $this->db->get()->result();
	}

	function postComment($data1)
	{
		$this->db->insert('comment',$data1);
	}

	function commentAdd($id)
	{
		$this->db->set('comment','comment+1',FALSE);
		$this->db->where('id',$id);
		$this->db->update('contentPost');
	}

	function commenHome($id){
		$this->db->select('*');
		$this->db->from('comment');
		$this->db->where('contentPost_id',$id);
		
		return $this->db->get()->result();
	}

	function notification($notif){
		$this->db->insert('notifications',$notif);
	}
	
}