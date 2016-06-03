<?php

class The_model extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->load->database();
        }

        public function insert_entry()
        {
                $data = array(
                        'nama' => $this->input->post('name'),
                        'nim' => $this->input->post('nim'),
                        'jenis_kelamin' => $this->input->post('gender'),
                        'Propinsi_Tempat_Lahir' => $this->input->post('provinsi_tempatlahir'),
                        'Kota_Tempat_Lahir' => $this->input->post('kota_tempatlahir'),
                        'tempat_lahir' => $this->input->post('place'),
                        'tanggal_lahir' => $this->input->post('date'),
                        'golongan_darah' => $this->input->post('goldar'),
                        'prodi' => $this->input->post('prodi'),
                        'angkatan' => $this->input->post('angkatan'),

                        'Periode_Masuk' => $this->input->post('periode'),
                        'No_Tes' => $this->input->post('notest'),
                        'Jalur_Masuk' => $this->input->post('jalur'),
                        'Tanggal_Daftar' => $this->input->post('tgl_daftar'),
                        'Gelombang_Pendaftaran' => $this->input->post('gel_pendaftaran'),
                        'Status_Masuk' => $this->input->post('status_masuk'),
                        
                        'Agama' => $this->input->post('agama'),
                        'Status_Nikah' => $this->input->post('status_nikah'),
                        'Kewarganegaraan' => $this->input->post('kewarganegaraan'),
                        'Status_Rumah' => $this->input->post('status_rumah'),
                        'Propinsi_Tempat_Tinggal' => $this->input->post('provinsi_tempattinggal'),
                        'Kota_Tempat_Tinggal' => $this->input->post('kota_tempattinggal'),
                        'alamat' => $this->input->post('alamat'),
                        'Kelurahan' => $this->input->post('kelurahan'),
                        'Kecamatan' => $this->input->post('kecamatan'),
                        'Kode_Pos' => $this->input->post('kode_pos'),
                        'Negara' => $this->input->post('negara'),
                        'Nomor_Telepon' => $this->input->post('no_telepon'),
                        'Email' => $this->input->post('email'),

                        'Hubungan_Biaya' => $this->input->post('hubungan_biaya'),
                        'Sumber_Dana' => $this->input->post('sumber_dana'),
                        'Sumber_Dana_Beasiswa' => $this->input->post('sumber_dana_beasiswa'),
                        'Jumlah_Saudara' => $this->input->post('jumlah_saudara'),
                        'Status_Bekerja' => $this->input->post('status_bekerja'),
                        'No_Asuransi' => $this->input->post('no_asuransi'),
                        'Mengenal_Kampus' => $this->input->post('mengenal_kampus')

                        );

                        $this->db->insert('data_mahasiswa', $data);

        }

        public function selecting_data()
        {
                $this->db->select('*');
                $this->db->from('data_mahasiswa');
                $query = $this->db->get();
                return $result = $query->result();
        }
}

?>