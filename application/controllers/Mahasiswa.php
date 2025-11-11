<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model("Mahasiswa_model"); // Memuat database
        $this->load->model("Prodi_model"); // Memuat database
    }

    public function index() {
        $data['mahasiswa'] = $this->Mahasiswa_model->lihatData(); // Mengambil semua data mahasiswa
        // echo json_encode($data);
        $this->load->view('mahasiswa_view', $data); // Memuat view dan mengirim data
    }

    public function mhs_result() {
        $data['result'] = $this->Mahasiswa_model->metodeResult(); // Mengambil semua data mahasiswa menggunakan metode result()
        // echo json_encode($data); 
        $this->load->view('result_view', $data); // Memuat view dan mengirim data
    }

    public function mhs_row() {
        $data['row'] = $this->Mahasiswa_model->metodeRow(); // Mengambil semua data mahasiswa menggunakan metode result()
        // echo json_encode($data); 
        $this->load->view('row_view', $data); // Memuat view dan mengirim data
    }

    public function mhs_resultArray() {
        $data['resultArray'] = $this->Mahasiswa_model->metodeResultArray(); // Mengambil semua data mahasiswa menggunakan metode result_array()
        // echo json_encode($data); 
        $this->load->view('resultArray_view', $data); // Memuat view dan mengirim data
    }

    public function mhs_rowArray () {
        $data['rowArray'] = $this->Mahasiswa_model->metodeRowArray(); // Mengambil semua data mahasiswa menggunakan metode row_array()
        // echo json_encode($data); 
        $this->load->view('rowArray_view', $data); // Memuat view dan mengirim data
    }

    // CRUD
    public function tambah() {
        $data['prodi'] = $this->Prodi_model->lihatData(); // Mengambil semua data prodi
        $this->load->view('mahasiswa_tambah',$data);
    }

    public function simpan() {
        $nim = $this->input->post('nim');
        $nama_mahasiswa = $this->input->post('nama_mahasiswa');
        $id_prodi = $this->input->post('id_prodi');

        $data = array(
            'nim' => $nim,
            'nama_mahasiswa' => $nama_mahasiswa,
            'id_prodi' => $id_prodi
        );
        // echo json_encode($data);

        $this->Mahasiswa_model->simpan($data);
        redirect('mahasiswa');

        // $data = [
        //     'nim' => $nim,
        //     'nama_mahasiswa' => $nama_mahasiswa
        // ];
        // $this->Mahasiswa_model->simpan($data);
        // redirect('mahasiswa');
    }

    public function edit($id) {
        $data['prodi'] = $this->Prodi_model->lihatData(); // Mengambil semua data prodi
        $data['mahasiswa'] = $this->Mahasiswa_model->getById($id);
        $this->load->view('mahasiswa_update', $data);
    }

    public function perbaharui($id) {
        $data= [
            'nim' => $this->input->post('nim'),
            'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
            'id_prodi' => $this->input->post('id_prodi')
        ];

        // echo json_encode($data);
        $this->Mahasiswa_model->perbaharui($id, $data);
        redirect('mahasiswa');
    }

    public function hapus($id) {
        $this->Mahasiswa_model->hapus($id);
        redirect('mahasiswa');
    }

    // Print
    public function cetak (){
        $data['mahasiswa'] = $this->Mahasiswa_model->lihatData(); // Mengambil semua data mahasiswa
        $this->load->view('mahasiswa_print', $data); // Memuat view dan mengirim data
    }
}

?>