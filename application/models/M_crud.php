<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_crud extends CI_Model {

	
	public function input(){

    $data = array('nama' => $this->input->post('nama') , 
                  'tanggal_lahir'=> $this->input->post('tanggal_lahir'),
                  'jenis_kelamin'=> $this->input->post('jenis_kelamin'),
                  'alamat'=> $this->input->post('alamat'),
                  'no_hp'=> $this->input->post('no_hp'),
                  'id_jabatan'=> $this->input->post('id_jabatan'));;

    return $this->db->insert('karyawan',$data);
	}

	public function tampil(){

      

    $this->db->select('*');
    
	 return $this->db->get('karyawan');
	}

	public function delete(){

        $this->db->where('id',$this->uri->segment(3));
        return $this->db->delete('karyawan');

	}

	public function m_edit(){

    
        $this->db->select('
        karyawan.*, jabatan.id_jabatan AS id_jabatan, jabatan.nama AS namajbt, 
        ');
        $this->db->join('jabatan', 'karyawan.id = jabatan.id_jabatan');
        $this->db->where('id',$this->uri->segment(3));

    // $this->db->select('*');
    
     return $this->db->get('karyawan');
     
    // $this->db->select('*');
    // $this->db->where('id',$this->uri->segment(3));
	// return $this->db->get('karyawan');
	
	}

	public function m_update(){

		$data = array('nama' => $this->input->post('nama') , 
                  'tanggal_lahir'=> $this->input->post('tanggal_lahir'),
                  'jenis_kelamin'=> $this->input->post('jenis_kelamin'),
                  'alamat'=> $this->input->post('alamat'),
                  'no_hp'=> $this->input->post('no_hp'),
                  'id_jabatan'=> $this->input->post('id_jabatan'));;

        $this->db->where('id',$this->uri->segment(3));
        return $this->db->update('karyawan',$data);

    }
    
    public function getjabatan()
    {
        $this->db->select('*');
    
        return $this->db->get('jabatan');
    }


}