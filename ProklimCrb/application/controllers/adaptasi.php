<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adaptasi extends CI_Controller {

  public function __construct()
    {
        parent::__construct();
        is_logged_in();
           $this->load->library('upload');
           $this->load->model('Model_komponen');
           $this->load->model('Model_jenis_kegiatan');
           $this->load->model('Model_satuan');
           $this->load->model('Model_jumlah');           
           $this->load->model('Model_akun');

           $this->load->model('Model_dokumenpendukungadp');
    }

  public function index()
  {
    $kondisi ['email'] = $this->session->userdata('email');
    $data['title'] = "Kategori";
    $data['konten'] = "Kategori";
    $data['isi'] = 'adaptasi/dtdasar';
      $data['datap'] = $this->Model_akun->get_by_id($kondisi);
    $data['data'] =$this->Model_kegiatan->list_kegiatan();
    $this->load->view('Kegiatan/dtkegiatan', $data);
  }
  public function edit($id)
    {

      $kondisip ['email'] = $this->session->userdata('email');
          $data['title'] = "Kegiatan";
      $data['Kegiatan'] =$this->Model_kegiatan->get_kegiatan()->result();
      $kondisi = array('id' => $id );

    $data['datap'] = $this->Model_akun->get_by_id($kondisip);
      $data['data'] = $this->Model_kegiatan->get_by_id($kondisi);
      
      return $this->load->view('Kegiatan/edit_data',$data,);
    }

  public function detailkegiatan($id)
    {

      $kondisip ['email'] = $this->session->userdata('email');
          $data['title'] = "Kegiatan";
      $data['Kegiatan'] =$this->Model_kegiatan->get_kegiatan()->result();
      $kondisi = array('id' => $id );
$data['datadokumen'] =$this->Model_dokumenpendukung->list_dokumenpendukung();
    $data['datap'] = $this->Model_akun->get_by_id($kondisip);
      $data['data'] = $this->Model_kegiatan->get_by_id($kondisi);
      return $this->load->view('Kegiatan/detailkegiatan',$data,);
    }

    public function tambah()
    {
      $kondisip ['email'] = $this->session->userdata('email');
      $data['title'] = "Kegiatan";
    $data['konten'] = "Kegiatan";
    $data['isi'] = 'Kegiatan/dtqurban';
    $data['datap'] = $this->Model_akun->get_by_id($kondisip);
      return $this->load->view('Kegiatan/tambahdata',$data);
    }
    public function insertdata()
    {
      $judul_kegiatan   = $this->input->post('judul_kegiatan');
      $tanggal   = $this->input->post('tanggal');
      $durasi   = $this->input->post('durasi');
      $jenis_kegiatan   = $this->input->post('jenis_kegiatan');
      $tujuan_umum   = $this->input->post('tujuan_umum');
      $tujuan_khusus   = $this->input->post('tujuan_khusus');
      $aksi   = $this->input->post('aksi');
      $sektor   = $this->input->post('sektor');
      $skema   = $this->input->post('skema');
      $pelaku   = $this->input->post('pelaku');
      $keterkaitan_program   = $this->input->post('keterkaitan_program');
      $alih_tekhnologi   = $this->input->post('alih_tekhnologi');
      $peningkatan_kapasitas   = $this->input->post('peningkatan_kapasitas');
      $status_pendanaan   = $this->input->post('status_pendanaan');
      $tenaga_ahli   = $this->input->post('tenaga_ahli');
              $data = array(
                            'judul_kegiatan'       => $judul_kegiatan,
                            'tanggal'       => $tanggal,
                            'durasi'       => $durasi,
                            'jenis_kegiatan'       => $jenis_kegiatan,
                            'tujuan_umum'       => $tujuan_umum,
                            'tujuan_khusus'       => $tujuan_khusus,
                            'aksi'       => $aksi,
                            'sektor'       => $sektor,
                            'skema'       => $skema,
                            'pelaku'       => $pelaku,

                            'keterkaitan_program'       => $keterkaitan_program,
                            'alih_tekhnologi'       => $alih_tekhnologi,
                            'peningkatan_kapasitas'       => $peningkatan_kapasitas,
                            'status_pendanaan'       => $status_pendanaan,
                            'tenaga_ahli'       => $tenaga_ahli,


                            
                          );
              $this->Model_kegiatan->insert($data);
              redirect('Kegiatan');

    }
    public function updatedata()
    {
      $id   = $this->input->post('id');
      $judul_kegiatan   = $this->input->post('judul_kegiatan');
      $tanggal   = $this->input->post('tanggal');
      $durasi   = $this->input->post('durasi');
      $jenis_kegiatan   = $this->input->post('jenis_kegiatan');
      $tujuan_umum   = $this->input->post('tujuan_umum');
      $tujuan_khusus   = $this->input->post('tujuan_khusus');
      $aksi   = $this->input->post('aksi');
      $sektor   = $this->input->post('sektor');
      $skema   = $this->input->post('skema');
      $pelaku   = $this->input->post('pelaku');
      $keterkaitan_program   = $this->input->post('keterkaitan_program');
      $alih_tekhnologi   = $this->input->post('alih_tekhnologi');
      $peningkatan_kapasitas   = $this->input->post('peningkatan_kapasitas');
      $status_pendanaan   = $this->input->post('status_pendanaan');
      $tenaga_ahli   = $this->input->post('tenaga_ahli');
      
      $kondisi = array('id' => $id );

              $data = array(
                            'judul_kegiatan'       => $judul_kegiatan,
                            'tanggal'       => $tanggal,
                            'durasi'       => $durasi,
                            'jenis_kegiatan'       => $jenis_kegiatan,
                            'tujuan_umum'       => $tujuan_umum,
                            'tujuan_khusus'       => $tujuan_khusus,
                            'aksi'       => $aksi,
                            'sektor'       => $sektor,
                            'skema'       => $skema,
                            'pelaku'       => $pelaku,
                            'keterkaitan_program'       => $keterkaitan_program,
                            'alih_tekhnologi'       => $alih_tekhnologi,
                            'peningkatan_kapasitas'       => $peningkatan_kapasitas,
                            'status_pendanaan'       => $status_pendanaan,
                            'tenaga_ahli'       => $tenaga_ahli,
                            
                          );

              $this->Model_kegiatan->update($data,$kondisi);
              redirect('Kegiatan');

  }

  public function deletedata($id)
  {

      $where = array('id' => $id );
      $this->Model_kegiatan->delete($where);
      return redirect('Kegiatan');
  }

} 
