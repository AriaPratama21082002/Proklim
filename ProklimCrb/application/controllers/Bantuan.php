	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bantuan extends CI_Controller {

  public function __construct()
    {
        parent::__construct();
        is_logged_in();
           $this->load->library('upload');
           $this->load->model('Model_akun');
    }

  public function index()
  {
    $data['title'] = "Bantuan";
    $data['konten'] = "Bantuan";
    $data['isi'] = 'bantuan/dtbantuan';
          $kondisi ['email'] = $this->session->userdata('email');
      $data['datap'] = $this->Model_akun->get_by_id($kondisi);
    $this->load->view('bantuan/dtbantuan', $data);
  }
  // public function edit($id = null)
  //   {
  //         $data['title'] = "Profil Akun";

		
   

  //     $kondisi ['email'] = $this->session->userdata('email');
  //     $data['data'] = $this->Model_akun->get_by_id($kondisi);
  //     return $this->load->view('profilakun/edit_data',$data,);
  //   }
  //   public function updatedata()
  //   {
  //     $id   = $this->input->post('id');
  //     $name   = $this->input->post('name');
  //     $jabatan   = $this->input->post('jabatan');
  //     $jalan_nomor_rt_rw   = $this->input->post('jalan_nomor_rt_rw');
  //     $desa_kelurahan   = $this->input->post('desa_kelurahan');
  //     $kecamatan   = $this->input->post('kecamatan');
  //     $kota_kabupaten   = $this->input->post('kota_kabupaten');
  //     $provinsi   = $this->input->post('provinsi');
  //     $no_telpn   = $this->input->post('no_telpn');
  //     $email   = $this->input->post('email');
      
  //     $kondisi = array('id' => $id );

  //             $data = array(
  //                           'name'       => $name,
  //                           'jabatan'       => $jabatan,
  //                           'jalan_nomor_rt_rw'       => $jalan_nomor_rt_rw,

  //                           'desa_kelurahan'       => $desa_kelurahan,
  //                           'kecamatan'       => $kecamatan,
  //                           'kota_kabupaten'       => $kota_kabupaten,
  //                           'provinsi'       => $provinsi,
  //                           'no_telpn'       => $no_telpn,
  //                           'email'       => $email,
                            
  //                         );

  //             $this->Model_akun->update($data,$kondisi);
  //             redirect('index.php/Profilakun/edit');

  // }

  // public function deletedata($id)
  // {

  //     $where = array('id' => $id );
  //     $this->Model_makanan->delete($where);
  //     return redirect('Makanan');
  // }

} 
