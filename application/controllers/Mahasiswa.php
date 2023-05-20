<?php

class Mahasiswa extends CI_Controller {

    public function index() {

        $this->load->view('view-form-mahasiswa');
    }

    public function cetak() {
        $data = [
            'nis' => $this->input->post('nis'),
            'kelas' => $this->input->post('kelas'), 
            'nama' => $this->input->post('nama'),
            'tanggal' => $this->input->post('tanggal'),
            'tempat' => $this->input->post('tempat'),
			'alamat' => $this->input->post('alamat'),
            'jeniskelamin' => $this->input->post('jeniskelamin'),
		    'agama' => $this->input->post('agama')];
        $this->load->view('view-data-mahasiswa', $data);
    }

}