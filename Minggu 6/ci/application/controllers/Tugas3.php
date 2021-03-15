<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tugas3 extends CI_Controller {
	public function index() {
        //c3 - memuat model 'Hello_model'
		$this->load->model('Tugas3_model');

        //pengambilan objekdari kelas Hello_model dan dimuat di var $model
        $model = $this->Tugas3_model;

        //mengambil data dari model
        $a = $model->txt;

        //membuat data yang akan dikirimkan ke view
        $data['teks'] = $a;

        //memanggil file view
        $this->load->view('tugas3view', $data); //file view
	}