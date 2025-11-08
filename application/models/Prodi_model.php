<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        // $this->load->database(); // pastikan koneksi database aktif
    }

    public function lihatData() {
        return $this->db->get('prodi')->result();
    }

    // CRUD
    public function simpan ($data) {
        return $this->db->insert('prodi', $data);
    }

    public function getById($id) {
        $query = $this->db->get_where('prodi',['id_prodi' => $id]);
        return $query->row();
    }

    public function perbaharui($id, $data) {
        return $this->db->update('prodi', $data, ['id_prodi' => $id]);
    }

    public function hapus($id) {
        return $this->db->delete('prodi', ['id_prodi' => $id ]);
    }
}
?>