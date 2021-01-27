<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_crud');

	}

	// List all data
	public function index()
	{
     $data['tmp']= $this->m_crud->tampil()->result();
     $this->template->load('role','crud/view',$data);
	}

	// Add a form item
	public function form_add()
	{
	$data['jbt']= $this->m_crud->getjabatan()->result();
     $this->template->load('role','crud/create',$data);
	}
    
    // ada data proses input
	public function add()
	{
		$this->m_crud->input();
		redirect('crud','refresh');

	}

	public function edit(){
	 $data['jbt']= $this->m_crud->getjabatan()->result();
     $data['tmp']=$this->m_crud->m_edit()->row();
     $this->template->load('role','crud/edit',$data);

	}

	//Update one item
	public function update()
	{

		$this->m_crud->m_update();
		redirect('/','refresh');

    }

	//Delete one item
	public function del()
	{
		$this->m_crud->delete();
		redirect('crud','refresh');

	}
}