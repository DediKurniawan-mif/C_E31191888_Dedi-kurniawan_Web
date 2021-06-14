 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model { 

    function getAll(){
        $this->db->select('*');
        $this->db->from('tm-user'); //Code ini untuk mengambil data dari tabel tm_user
        $this->db->join('tm-grup', 'tm-user.grup = tm-grup.id_grup');
        //yang dimana data tersebut digabung dengan tabel tm_grup berdasarkan atribut grup pada tm_user
        //dan akan sama dengan kolom id_grup pada tabel tm_grup
        $query = $this->db->get();
        //query tersebut mengambil data dari database
        return $query;
        //kemudian akan mengembalikan data yang telah diambil.
    }  
    function input_data($data,$table){
        $this->db->insert($table, $data);
        //Code ini menggunakan function insert yang ada di library db
        //dan juga untuk menambahkan data dengan parameter (nama pada tabel dan data dari inputan tersebut)
    }
    function getGrup(){
        $this->db->select('*');
        $this->db->from('tm-grup'); //Ini Code Untuk mengambil suatu data dari tabel tm-grup
        $query = $this->db->get();
        //Code ini Untuk mengambil data dari database
        return $query;
        //Yang Bertujuan untuk mengembalikan data yang telah diambil
    }
    function login($user, $pass, $table)
    {
        $this->db->select('*');
        $this->db->from('tm-user');
        $this->db->where('username', $user);
        $this->db->where('password', $pass);
        $query = $this->db->get();
        return $query;
    }
    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
?>