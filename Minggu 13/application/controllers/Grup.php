<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grup extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Grup_model');
	}
	public function index(){
        $data['grup'] = $this->Grup_model->getGrup()->result();
		$this->lib_template->views('crud/home_grup', $data);
	}
    
    public function tambah(){
        $this->lib_template->views('crud/tambah_grup');
    }
    
    public function input(){
        $grup = $this->input->post('grup');
        $data = array(
            'grup' => $grup
        );
        $this->Grup_model->input_data($data, 'tm-grup');
        redirect('Grup');
    }
    public function edit($id)
    {
        $where = array('id_grup' => $id);
        $data['grup'] = $this->Grup_model->edit_data($where, 'tm-grup')->result();
        $this->lib_template->views('crud/edit_grup', $data);
    }
    public function update()
    {
        $id = $this->input->post('id');
        $grup = $this->input->post('grup');

        $data = array(
            'grup' => $grup 
        );

        $where = array('id_grup' => $id);

        $this->Grup_model->update_data($where, $data, 'tm-grup');
        redirect('Grup');
    }
    public function hapus($id)
    {
        $where = array('id_grup' => $id );
        $this->Grup_model->hapus_data($where, 'tm-grup');
        redirect('Grup');
    }

}