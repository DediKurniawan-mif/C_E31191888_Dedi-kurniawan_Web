<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    function __construct(){
        //Pada function construct ini ailah function yang berfungsi akan dijalankan paling awal
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        //dan akan meload file model Mahasiswa_model.php
    }
    
	public function index(){
        $this->lib_template->views('home');
    }

    public function user(){
        $data['user'] = $this->Mahasiswa_model->getAll()->result();
        //Berfungsi mengambil data array dari database melalui model Mahasiswa_model
        $this->lib_template->views('crud/home_mahasiswa', $data);
        //dan menngunakan library templtae untuk menampilkan isi content berupa file view home_mahasiswa
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
        $this->Mahasiswa_model->input_data($data, 'tm-user');
        //Jika input data dengan nilai data pada $data dan tabelnya tm_user
        redirect('Mahasiswa/index');
        //Lalu jika sudah maka akan menuju function index pada controller Mahasiswa
    }

    public function edit($id)
    {
        $where = array('id' => $id);
        $data['user'] = $this->Mahasiswa_model->edit_data($where, 'tm-user')->result();
        $data['data'] = $this->Mahasiswa_model->getGrup()->result();
        $this->lib_template->views('crud/edit_mahasiswa', $data);
    }
    public function update()
    {
        $id = $this->input->post('id');
        $username = $this->input->post('username');
        $password = $this->input->post('pass');
        $nama = $this->input->post('nama');
        $grup = $this->input->post('grup');

        $data = array(
            'username' => $username,
            'password' => $password,
            'nama' => $nama,
            'grup' => $grup 
        );

        $where = array('id' => $id);

        $this->Mahasiswa_model->update_data($where, $data, 'tm-user');
        redirect('Mahasiswa');
    }
    public function hapus($id)
    {
        $where = array('id' => $id );
        $this->Mahasiswa_model->hapus_data($where, 'tm-user');
        redirect('Mahasiswa');
    }
}
?>