<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    function __construct(){
        //function construct ini ailah function yang berfungsi akan dijalankan paling awal
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        //dan akan meload file model Mahasiswa_model.php
    }
    
	public function index(){
        $data['user'] = $this->Mahasiswa_model->getAll()->result();
        //Pada saat mengambil data array dari database melalui model Mahasiswa_model
		$this->lib_template->views('crud/home_mahasiswa', $data);
        //akan menngunakan library templtae untuk menampilkan isi content berupa file view home_mahasiswa
	}
    
    public function tambah(){
        $this->lib_template->views('crud/tambah_mahasiswa');
        //Pada saat menampilkan halaman tambah_mahasiswa untuk input data
    }
    
    public function input(){
        $username = $this->input->post('username');
        //Fungsinya yaitu membuat delarasi $username untuk menampung data dari inputan yang memiliki name username
        $password = $this->input->post('pass');
        //Fungsinya yaitu membuat delarasi $password untuk menampung data dari inputan yang memiliki name pass
        $nama = $this->input->post('nama');
        //Fungsinya yaitu membuat delarasi $nama untuk menampung data dari inputan yang memiliki name nama
        $grup = $this->input->post('grup');
        //Fungsinya yaitu membuat delarasi $grup untuk menampung data dari inputan yang memiliki name grup
        
        $data = array(
            'username' => $username,
            'password' => $password,
            'nama' => $nama,
            'grup' => $grup
        );
        //Fungsi diatas mengatur atribut yang sesuai dengan pada tabel yang akan ditambahkan nilainya,
        //sama dengan nilai masing-masing atribut telah disimpan dalam variabel sebelumnya
        $this->Mahasiswa_model->input_data($data, 'tm_user');
        //Jika input data dengan nilai data pada $data dan tabelnya tm_user
        redirect('Mahasiswa/index');
        //Lalu jika sudah maka akan menuju function index pada controller Mahasiswa
    }
}
?>