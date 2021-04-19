 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model { 

 function getAll(){
        $this->db->select('*');
        $this->db->from('tm_user'); //Code ini untuk mengambil data dari tabel tm_user
        $this->db->join('tm_grup', 'tm_user.grup = tm_grup.id_grup');
        //yang dimana data tersebut digabung dengan tabel tm_grup berdasarkan atribut grup pada tm_user
        //dan akan sama dengan kolom id_grup pada tabel tm_grup
        $query = $this->db->get();
        //query tersebut mengambil data dari database
        return $query;
        //kemudian akan mengembalikan data yang telah diambil.
    }
        
    function input_data($data, $table){
        $this->db->insert($table, $data);
        //Code ini menggunakan function insert yang ada di library db
        //dan juga untuk menambahkan data dengan parameter (nama pada tabel dan data dari inputan tersebut)
    }
}
?>