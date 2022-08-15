<?php
/**
 *
 */
class Model_akun extends CI_Model
{



  public function get_by_id($kondisi)
  {
      $this->db->from('users');
      $this->db->where($kondisi);
      $query = $this->db->get();
      return $query->row();
  }

  public function update($data,$kondisi)
  {
      $this->db->update('users',$data,$kondisi);
      return TRUE;
  }

  // function list_menu(){
  //        $this->db->order_by('id', 'ASC');
  //       return $this->db->from('menu')
  //         ->join('id', 'makanan.id=menu.id')
  //         ->get()
  //         ->result();
  //   }
  function get_category(){
        $query = $this->db->get('makanan');
        return $query;  
    }
}
