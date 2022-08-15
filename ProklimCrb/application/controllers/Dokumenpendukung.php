<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumenpendukung extends CI_Controller {

  public function __construct()
    {
        parent::__construct();
        is_logged_in();
           $this->load->library('upload');
           $this->load->model('Model_dokumenpendukung');
           $this->load->model('Model_akun');
    }

  public function index()
  {
    $data['title'] = "Dokumen";
    $data['konten'] = "Dokumen";
    $data['isi'] = 'kegiatan/detailkegiatan';
    $data['datadokumen'] =$this->Model_dokumenpendukung->list_dokumenpendukung();
    $this->load->view('kemitraan/dtkemitraan', $data);
  }
  public function edit($id)
    {
       $data['title'] = "Dokumen Pendukung";
         $kondisip ['email'] = $this->session->userdata('email');
      $kondisi = array('id' => $id );

    $data['datap'] = $this->Model_akun->get_by_id($kondisip);
      $data['data'] = $this->Model_dokumenpendukung->get_by_id($kondisi);
      return $this->load->view('dokumenpendukung/edit_data',$data);
    }
    public function tambah()
    {
      $kondisip ['email'] = $this->session->userdata('email');
      $data['title'] = "Dokumenpendukung";
    $data['konten'] = "dokumenpendukung";
    $data['isi'] = 'dokumenpendukung/tambahdata';
    $data['datap'] = $this->Model_akun->get_by_id($kondisip);
      return $this->load->view('dokumenpendukung/tambahdata',$data);
    }
    public function insertdata()
    {
      $judul   = $this->input->post('judul');
      $keterangan   = $this->input->post('keterangan');
      
      // get foto
      $config['upload_path'] = './assets/picture';
      $config['allowed_types'] = 'jpg|png|jpeg|gif';
      $config['max_size'] = '2048';  //2MB max
      $config['max_width'] = '4480'; // pixel
      $config['max_height'] = '4480'; // pixel
      $config['file_name'] = $_FILES['fotopost']['name'];

      $this->upload->initialize($config);

      if (!empty($_FILES['fotopost']['name'])) {
          if ( $this->upload->do_upload('fotopost') ) {
              $foto = $this->upload->data();
              $data = array(
                            'judul'       => $judul,
                            'keterangan'       => $keterangan,
                            'foto'       => $foto['file_name'],
                          );
              $this->Model_dokumenpendukung->insert($data);
              redirect('Dokumenpendukung/Kegiatan');
          }else {
              die("gagal upload");
          }
      }else {
        echo "tidak masuk";
      }

    }
    public function updatedata()
    {
      $id   = $this->input->post('id');
      $judul   = $this->input->post('judul');
      $keterangan   = $this->input->post('keterangan');
      
      $path = './assets/picture/';

      $kondisi = array('id' => $id );

      // get foto
      $config['upload_path'] = './assets/picture';
      $config['allowed_types'] = 'jpg|png|jpeg|gif';
      $config['max_size'] = '2048';  //2MB max
      $config['max_width'] = '4480'; // pixel
      $config['max_height'] = '4480'; // pixel
      $config['file_name'] = $_FILES['fotopost']['name'];

      $this->upload->initialize($config);

      if (!empty($_FILES['fotopost']['name'])) {
          if ( $this->upload->do_upload('fotopost') ) {
              $foto = $this->upload->data();
              $data = array(
                            'judul'       => $judul,
                            'keterangan'       => $keterangan,
                            'foto'       => $foto['file_name'],
                            
                          );
              // hapus foto pada direktori
              @unlink($path.$this->input->post('filelama'));

              $this->Model_dokumenpendukung->update($data,$kondisi);
              redirect('index.php/Kegiatan');
          }else {
              die("gagal update");
          }
      }else {
        echo "tidak masuk";
      }

  }

  public function deletedata($id,$foto = null)
  {
      $path = './assets/picture/';
      @unlink($path.$foto);

      $where = array('id' => $id );
      $this->Model_dokumenpendukung->delete($where);
      return redirect('Kegiatan');
  }

} 
