<?php
/**
 *
 */
class Model_kegiatan extends CI_Model
{

  public function list_kegiatan()
  {
      $this->db->from('dataumum');
      $query = $this->db->get();
      return $query->result();
  }


  public function get_by_id($kondisi)
  {
      $this->db->from('dataumum');
      $this->db->where($kondisi);
      $query = $this->db->get();
      return $query->row();
  }

  public function insert($data)
  {
      $this->db->insert('dataumum',$data);
      return TRUE;
  }
  public function update($data,$kondisi)
  {
      $this->db->update('dataumum',$data,$kondisi);
      return TRUE;
  }

  public function delete($where)
  {
      $this->db->where($where);
      $this->db->delete('dataumum');
      return TRUE;
  }
  // function list_menu(){
  //        $this->db->order_by('id', 'ASC');
  //       return $this->db->from('menu')
  //         ->join('id', 'dataumum.id=menu.id')
  //         ->get()
  //         ->result();
  //   }
  function get_kegiatan(){
        $query = $this->db->get('dataumum');
        return $query;  
    }
}
