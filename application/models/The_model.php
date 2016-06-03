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
                $data['nama']             = $this->input->post('name');
                $data['nim']              = $this->input->post('nim');
                $data['jenis_kelamin']    = $this->input->post('gender');
                if($data['jenis_kelamin'] === 'Perempuan')
                {
                        $data['jenis_kelamin'] = FALSE;
                } 
                else
                {
                        $data['jenis_kelamin'] = TRUE;
                }
                $data['tempat_lahir']     = $this->input->post('place');
                $data['tanggal']          = $this->input->post('date');
                $data['golongan_darah']   = $this->input->post('goldar');
                $data['prodi']            = $this->input->post('prodi');
                $data['angkatan']         = $this->input->post('angkatan');

                $sql = "INSERT INTO `data_mahasiswa` VALUES ('NULL', '$data[nama]', '$data[nim]', '$data[jenis_kelamin]', '$data[tempat_lahir]', '$data[tanggal]', '$data[golongan_darah]', '$data[prodi]', '$data[angkatan]')";

                return $this->db->query($sql);
        }

        public function selecting_data()
        {
                $this->db->select('*');
                $this->db->from('data_mahasiswa');
                $query = $this->db->get();
                return $result = $query->result();
        }
        public function getDetail($nim){
                $this->db->select('*');
                $this->db->from('data_mahasiswa');
                $this->db->where('NIM', $nim);
                $query = $this->db->get();
                return $result = $query->result();
        }
        public function update_entry($nim){

                $data['Nama'] = $this->input->post('name'); 
                $data['NIM'] = $this->input->post('nim'); 
                $data['Jenis_Kelamin']    = $this->input->post('gender');
                if($data['Jenis_Kelamin'] === 'Perempuan')
                {
                        $data['Jenis_Kelamin'] = FALSE;
                } 
                else
                {
                        $data['Jenis_Kelamin'] = TRUE;
                }
                $data['Tempat_Lahir']     = $this->input->post('place');
                $data['Tanggal_Lahir']          = $this->input->post('date');
                $data['Golongan_Darah']   = $this->input->post('goldar');
                $data['Prodi']            = $this->input->post('prodi');
                $data['Angkatan']         = $this->input->post('angkatan');

                $this->db->where('NIM', $nim);
                $this->db->update('data_mahasiswa', $data);

        }

        public function delete_entry($nim){
                $this->db->where('nim', $nim);
                $this->db->delete('data_mahasiswa');
        }
}

?>