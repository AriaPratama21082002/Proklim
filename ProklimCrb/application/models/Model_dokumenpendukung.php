<?php
/**
 *
 */
class Model_dokumenpendukung extends CI_Model
{

  public function list_dokumenpendukung()
  {
      $this->db->from('dokumenpendukung');
      $query = $this->db->get();
      return $query->result();
  }


  public function get_by_id($kondisi)
  {
      $this->db->from('dokumenpendukung');
      $this->db->where($kondisi);
      $query = $this->db->get();
      return $query->row();
  }

  public function insert($data)
  {
      $this->db->insert('dokumenpendukung',$data);
      return TRUE;
  }
  public function update($data,$kondisi)
  {
      $this->db->update('dokumenpendukung',$data,$kondisi);
      return TRUE;
  }

  public function delete($where)
  {
      $this->db->where($where);
      $this->db->delete('dokumenpendukung');
      return TRUE;
  }
  // function list_menu(){
  //        $this->db->order_by('id', 'ASC');
  //       return $this->db->from('menu')
  //         ->join('id', 'dokumenpendukung.id=menu.id')
  //         ->get()
  //         ->result();
  //   }
  function get_kegiatan(){
        $query = $this->db->get('dokumenpendukung');
        return $query;  
    }
}
