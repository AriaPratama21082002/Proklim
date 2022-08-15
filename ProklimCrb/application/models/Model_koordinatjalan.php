<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_koordinatjalan extends CI_Model {

    public function create(){
        foreach ($this->cart->contents() as $koordinat) {
            $data = array('id' => $this->input->post('id'),
                'latitude'=>$koordinat['latitude'],
                'longitude'=>$koordinat['longitude']);
            $query = $this->db->insert('lokasi', $data);
        }
        return $query;
    }
    public function getAll(){
        $query = $this->db->get('lokasi');//mengambil semua data koordinat jalan
        return $query;
    }
    public function getbyidjalan($id){
        $this->db->where('id', $id);
        $query = $this->db->get('lokasi');//mengambil semua data koordinat jalan
        return $query;
    }
    public function read($id){
        $this->db->where('id', $id);//mengambil data koordinat jalan berdasarkan id
        $query = $this->db->get('lokasi');
        return $query;
    }
    public function update(){
        $data = array('id'=>$this->input->post('id'),
            'latitude'=>$this->input->post('latitude'),
            'longitude'=>$this->input->post('longitude'));
        $this->db->where('id', $this->input->post('id'));//mengupdate berdasarkan id
        $query = $this->db->update('lokasi', $data);
        return $query;
    }
    public function delete(){
        $this->db->where('id', $this->input->post('id'));//menghapus berdasarkan id
        $query = $this->db->delete('lokasi');
        return $query;
    }
    public function deletebyidjalan($id){
        $this->db->where('id', $id);//menghapus berdasarkan id
        $query = $this->db->delete('lokasi');
        return $query;
    }

}
