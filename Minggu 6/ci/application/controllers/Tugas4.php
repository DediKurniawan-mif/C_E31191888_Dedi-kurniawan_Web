<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tugas4 extends CI_Controller {
	public function index() {
        $data = ['nama'=>'Dedi Kurniawan', 'nim'=>'E31191888', 'golongan'=>'MIF C'];

        //c3 - memuat model 'Hello_model'
		$this->load->model('Tugas4_model');

        //pengambilan objekdari kelas Hello_model dan dimuat di var $model
        $model = $this->Tugas4_model;

        //mengambil data dari model
        $a = $model->txt;

        //membuat data yang akan dikirimkan ke view
        $data['teks'] = $a;

        //memanggil file view
        $this->load->view('tugas4view', $data); //file view
	}
}