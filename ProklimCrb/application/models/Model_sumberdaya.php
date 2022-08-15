<?php
/**
 *
 */
class Model_sumberdaya extends CI_Model
{

  public function list_sumberdaya()
  {
      $this->db->from('sumberdaya');
      $query = $this->db->get();
      return $query->result();
  }


  public function get_by_id($kondisi)
  {
      $this->db->from('sumberdaya');
      $this->db->where($kondisi);
      $query = $this->db->get();
      return $query->row();
  }

  public function insert($data)
  {
      $this->db->insert('sumberdaya',$data);
      return TRUE;
  }
  public function update($data,$kondisi)
  {
      $this->db->update('sumberdaya',$data,$kondisi);
      return TRUE;
  }

  public function delete($where)
  {
      $this->db->where($where);
      $this->db->delete('sumberdaya');
      return TRUE;
  }
  // function list_menu(){
  //        $this->db->order_by('id', 'ASC');
  //       return $this->db->from('menu')
  //         ->join('id', 'sumberdaya.id=menu.id')
  //         ->get()
  //         ->result();
  //   }
  function get_sumberdaya(){
        $query = $this->db->get('sumberdaya');
        return $query;  
    }
}