<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {

  public function __construct()
    {
        parent::__construct();
        is_logged_in();
           $this->load->library('upload');
           $this->load->model('Model_kegiatan');
           $this->load->model('Model_skema');
           $this->load->model('Model_sumberdaya');                      
           $this->load->model('Model_akun');
           
           $this->load->model('Model_dokumenpendukung');
    }

  public function index()
  {
         $kondisi ['email'] = $this->session->userdata('email');
    $data['title'] = "Kategori";
    $data['konten'] = "Kategori";
    $data['isi'] = 'kategori/dtkategori';
    $data['datap'] = $this->Model_akun->get_by_id($kondisi);
    $data['data'] =$this->Model_kegiatan->list_kegiatan();

    return $this->load->view('Kegiatan/dtkegiatan', $data);
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
      return $this->load->view('Kegiatan/tambah',$data);
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
      $luas_lokasi_proklim   = $this->input->post('luas_lokasi_proklim');
      $jumlah_kepala_keluarga   = $this->input->post('jumlah_kepala_keluarga');
      $jumlah_penduduk   = $this->input->post('jumlah_penduduk');
      $ketinggian_dari_permukaan_laut   = $this->input->post('ketinggian_dari_permukaan_laut');
      $topografi_daerah   = $this->input->post('topografi_daerah');
      $tipologi_lokasi   = $this->input->post('tipologi_lokasi');
      $ciri_khas_lokasi   = $this->input->post('ciri_khas_lokasi');
      $tiga_penggunaan_lahan   = $this->input->post('tiga_penggunaan_lahan');
      $persentase   = $this->input->post('persentase');
      $tiga_penggunaan_lahan1   = $this->input->post('tiga_penggunaan_lahan1');
      $persentase1   = $this->input->post('keterkaitan_program');
      $tiga_penggunaan_lahan2   = $this->input->post('tiga_penggunaan_lahan2');
      $persentase2   = $this->input->post('persentase2');
      $tiga_sumber_penghasilan_utama   = $this->input->post('tiga_sumber_penghasilan_utama');
      $persentase5 = $this->input->post('persentase5');
      $komponen   = $this->input->post('komponen');
      $satuan   = $this->input->post('satuan');
      $jumlah   = $this->input->post('jumlah');
      // $komponen_kel   = $this->input->post('komponen_kel');
      // $kegiatan_jenis   = $this->input->post('kegiatan_jenis');
      // $uraian   = $this->input->post('uraian');
      // $data   = $this->input->post('data');
      // $keterangan   = $this->input->post('keterangan');
      
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

                            'luas_lokasi_proklim'       => $luas_lokasi_proklim,
                            'jumlah_kepala_keluarga'       => $jumlah_kepala_keluarga,
                            'jumlah_penduduk'       => $jumlah_penduduk,
                            'ketinggian_dari_permukaan_laut'       => $ketinggian_dari_permukaan_laut,
                            'topografi_daerah'       => $topografi_daerah,
                            'tipologi_lokasi'       => $tipologi_lokasi,
                            'ciri_khas_lokasi'       => $ciri_khas_lokasi,
                            'tiga_penggunaan_lahan'       => $tiga_penggunaan_lahan,
                            'persentase'       => $persentase,
                            'tiga_penggunaan_lahan1'       => $tiga_penggunaan_lahan1,

                            'persentase1'       => $persentase1,
                            'tiga_penggunaan_lahan2'       => $tiga_penggunaan_lahan2,
                            'persentase2'       => $persentase2,
                            'tiga_sumber_penghasilan_utama'=> $tiga_sumber_penghasilan_utama,
                            'persentase5' => $persentase5,
                            'komponen'       => $komponen,

                            'satuan'       => $satuan,
                            'jumlah'       => $jumlah,
      //                       'komponen_kel'       => $komponen_kel,
      //                       'kegiatan_jenis'       => $persentase2,
      //                       'uraian'       => $uraian,
      //                       'data'       => $data,
      //                       'keterangan' => $keterangan,



                            
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
