<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model("Prodi_model"); // Memuat model Prodi
    }

    public function index() {
        $data['prodi'] = $this->Prodi_model->lihatData(); // Mengambil semua data prodi
        $this->load->view('prodi_view', $data); // Memuat view dan mengirim data
    }

    // CRUD

    public function tambah() {
        $this->load->view('prodi_tambah');
    }

    public function simpan() {
        $kode_prodi = $this->input->post('kode_prodi');
        $nama_prodi = $this->input->post('nama_prodi');

        $data = array(
            'kode_prodi' => $kode_prodi,
            'nama_prodi' => $nama_prodi
        );

        $this->db->insert('prodi', $data);
        redirect('prodi');
    }

    public function edit($id) {
        $data['prodi'] = $this->Prodi_model->getById($id);
        $this->load->view('prodi_update', $data);
    }

    public function perbaharui($id) {
        // $kode_prodi = $this->input->post('kode_prodi');
        // $nama_prodi = $this->input->post('nama_prodi');

        // $data = array(
        //     'kode_prodi' => $kode_prodi,
        //     'nama_prodi' => $nama_prodi
        // );

        // $this->Prodi_model->perbaharui('prodi', $data, array('id_prodi' => $id));
        // redirect('prodi');

        $data = [
            'kode_prodi' => $this->input->post('kode_prodi'),
            'nama_prodi' => $this->input->post('nama_prodi')
        ];
        $this->Prodi_model->perbaharui($id, $data);
        redirect('prodi');        
    }

    public function hapus($id) {
        $this->Prodi_model->hapus($id);
        redirect('prodi');
    }
}
?>