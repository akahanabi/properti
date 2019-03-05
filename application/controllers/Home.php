<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("properti_model");
		$this->load->library('form_validation');
	}
	public function index(){
		$data["properti"]=$this->properti_model->getAll();
		$this->load->view('home');
	}
	public function tambah(){
        $properti = $this->properti_model;
        $validation = $this->form_validation;
        $validation->set_rules($properti->rules());

        if ($validation->run()) {
            $properti->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $this->load->view("tambah");
    }

    public function edit($id = null){
        if (!isset($id)) redirect('home');
       
        $properti = $this->properti_model;
        $validation = $this->form_validation;
        $validation->set_rules($properti->rules());

        if ($validation->run()) {
            $properti->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["properti"] = $properti->getById($id);
        if (!$data["properti"]) show_404();
        
        $this->load->view("edit", $data);
    }

    public function delete($id=null){
        if (!isset($id)) show_404();
        
        if ($this->properti_model->delete($id)) {
            redirect(site_url('home'));
        }
    }
}
