<?php
/**
 *
 */
class Model_skema extends CI_Model
{

  public function list_skema()
  {
      $this->db->from('skema');
      $query = $this->db->get();
      return $query->result();
  }


  public function get_by_id($kondisi)
  {
      $this->db->from('skema');
      $this->db->where($kondisi);
      $query = $this->db->get();
      return $query->row();
  }

  public function insert($data)
  {
      $this->db->insert('skema',$data);
      return TRUE;
  }
  public function update($data,$kondisi)
  {
      $this->db->update('skema',$data,$kondisi);
      return TRUE;
  }

  public function delete($where)
  {
      $this->db->where($where);
      $this->db->delete('skema');
      return TRUE;
  }
  // function list_menu(){
  //        $this->db->order_by('id', 'ASC');
  //       return $this->db->from('menu')
  //         ->join('id', 'skema.id=menu.id')
  //         ->get()
  //         ->result();
  //   }
  function get_skema(){
        $query = $this->db->get('skema');
        return $query;  
    }
}
