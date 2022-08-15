<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class datadasar extends CI_Controller {

  public function __construct()
    {
        parent::__construct();
        is_logged_in();
           $this->load->library('upload');
           $this->load->model('Model_datadasar');
           $this->load->model('Model_topografi_daerah');
           $this->load->model('Model_tipologi_lokasi');           
           $this->load->model('Model_ciri_khas_lokasi');
           $this->load->model('Model_tiga_penggunaan_lahan');
           $this->load->model('Model_tiga_sumber_penghasilan_utama');

           $this->load->model('Model_dokumenpendukung');
    }

  public function index()
  {
         $kondisi ['email'] = $this->session->userdata('email');
    $data['title'] = "Kategori";
    $data['konten'] = "Kategori";
    $data['isi'] = 'datadasar/datadasar';
      $data['datap'] = $this->Model_akun->get_by_id($kondisi);
    $data['data'] =$this->Model_datadasar->list_kegiatan();
    $this->load->view('datadasar/datadasar', $data);
  }
  public function edit($id)
    {

      $kondisip ['email'] = $this->session->userdata('email');
          $data['title'] = "datadasar";
      $data['datadasar'] =$this->Model_datadasar->get_kegiatan()->result();
      $kondisi = array('id' => $id );

    $data['datap'] = $this->Model_akun->get_by_id($kondisip);
      $data['data'] = $this->Model_datadasar->get_by_id($kondisi);
      
      return $this->load->view('datadasar/edit_datadasar',$data,);
    }

  public function detailkegiatan($id)
    {

      $kondisip ['email'] = $this->session->userdata('email');
          $data['title'] = "datadasar";
      $data['datadasar'] =$this->Model_datadasar->get_kegiatan()->result();
      $kondisi = array('id' => $id );
$data['datadokumen'] =$this->Model_dokumenpendukung->list_dokumenpendukung();
    $data['datap'] = $this->Model_akun->get_by_id($kondisip);
      $data['data'] = $this->Model_datadasar->get_by_id($kondisi);
      return $this->load->view('datadasar/detaildatadasar',$data,);
    }

    public function tambah()
    {
      $kondisip ['email'] = $this->session->userdata('email');
      $data['title'] = "datadasar";
    $data['konten'] = "datadasar";
    $data['isi'] = 'datadasar/datadasar';
    $data['datap'] = $this->Model_akun->get_by_id($kondisip);
      return $this->load->view('datadasar/tambahdatadasar',$data);
    }
    public function insertdata()
    {
     $luas_lokasi_proklim   = $this->input->post('luas_lokasi_proklim');
      $jumlah_kepala_keluarga   = $this->input->post('jumlah_kepala_keluarga');
      $jumlah_penduduk   = $this->input->post('jumlah_penduduk');
      $ketinggian_dari_permukaan_laut   = $this->input->post('ketinggian_dari_permukaan_laut');
      $topografi_daerah   = $this->input->post('topografi_daerah');
      $tipologi_lokasi   = $this->input->post('tipologi_lokasi');
      $ciri_khas_lokasi   = $this->input->post('ciri_khas_lokasi');
      $tiga_penggunaan_lahan   = $this->input->post('tiga_penggunaan_lahan');
      $tiga_sumber_penghasilan_utama   = $this->input->post('tiga_sumber_penghasilan_utama');
              $data = array(
                           'luas_lokasi_proklim'       => $luas_lokasi_proklim,
                            'jumlah_kepala_keluarga'       => $jumlah_kepala_keluarga,
                            'jumlah_penduduk'       => $jumlah_penduduk,
                            'ketinggian_dari_permukaan_laut'       => $ketinggian_dari_permukaan_laut,
                            'topografi_daerah'       => $topografi_daerah,
                            'tipologi_lokasi'       => $tipologi_lokasi,
                            'ciri_khas_lokasi'       => $ciri_khas_lokasi,
                            'tiga_penggunaan_lahan'       => $tiga_penggunaan_lahan,
                            'tiga_sumber_penghasilan_utama'       => $tiga_sumber_penghasilan_utama,

                            
                          );
              $this->Model_kegiatan->insert($data);
              redirect('datadasar');

    }
    public function updatedata()
    {
      $id   = $this->input->post('id');
      $luas_lokasi_proklim   = $this->input->post('luas_lokasi_proklim');
      $jumlah_kepala_keluarga   = $this->input->post('jumlah_kepala_keluarga');
      $jumlah_penduduk   = $this->input->post('jumlah_penduduk');
      $ketinggian_dari_permukaan_laut   = $this->input->post('ketinggian_dari_permukaan_laut');
      $topografi_daerah   = $this->input->post('topografi_daerah');
      $tipologi_lokasi   = $this->input->post('tipologi_lokasi');
      $ciri_khas_lokasi   = $this->input->post('ciri_khas_lokasi');
      $tiga_penggunaan_lahan   = $this->input->post('tiga_penggunaan_lahan');
      $tiga_sumber_penghasilan_utama   = $this->input->post('tiga_sumber_penghasilan_utama');

      $kondisi = array('id' => $id );

              $data = array(
                            'luas_lokasi_proklim'       => $luas_lokasi_proklim,
                            'jumlah_kepala_keluarga'       => $jumlah_kepala_keluarga,
                            'jumlah_penduduk'       => $jumlah_penduduk,
                            'ketinggian_dari_permukaan_laut'       => $ketinggian_dari_permukaan_laut,
                            'topografi_daerah'       => $topografi_daerah,
                            'tipologi_lokasi'       => $tipologi_lokasi,
                            'ciri_khas_lokasi'       => $ciri_khas_lokasi,
                            'tiga_penggunaan_lahan'       => $tiga_penggunaan_lahan,
                            'tiga_sumber_penghasilan_utama'       => $tiga_sumber_penghasilan_utama,
                          );

              $this->Model_kegiatan->update($data,$kondisi);
              redirect('datadasar');

  }

  public function deletedata($id)
  {

      $where = array('id' => $id );
      $this->Model_kegiatan->delete($where);
      return redirect('datadasar');
  }

} 
