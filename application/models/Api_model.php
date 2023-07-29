<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Api_model extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
  }

  /***** GENERAL SETTING *****/
  //1.1. PROFILE HEADER
  public function get_profile_headers($nama_halaman)
  {
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => API_URL . 'api/get_profile_headersXX',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => array('nama_halaman' => $nama_halaman),
      CURLOPT_HTTPHEADER => array(
        'Authorization: Basic bmptdWRpbkBvbWFzLW1mZy5jb206NThhZmVjYWRiNDFkNzZiNjhlNTY3YzE4OWMxYThlODBYWFg=',
        'Cookie: ci_session=5ng18s65b6mipm6lrjoovro6p943n357'
      ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);

    return json_decode($response);
  }

  //1.2. COMPANY
  public function get_company_details()
  {
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => API_URL . 'api/get_company_details',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_HTTPHEADER => array(
        'Authorization: Basic bmptdWRpbkBvbWFzLW1mZy5jb206NThhZmVjYWRiNDFkNzZiNjhlNTY3YzE4OWMxYThlODBYWFg=',
        'Cookie: ci_session=tpq7cgdi7l10jk9igfhrl1gm1peh17fo'
      ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);

    return json_decode($response);
  }

  /***** BERANDA *****/
  //1.1. SLIDER
  public function get_all_sliders()
  {
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => API_URL . 'api/get_all_sliders',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_HTTPHEADER => array(
        'Authorization: Basic bmptdWRpbkBvbWFzLW1mZy5jb206NThhZmVjYWRiNDFkNzZiNjhlNTY3YzE4OWMxYThlODBYWFg=',
        'Cookie: ci_session=rnruuuud5grcvc4v7akhbgg9q8jktp1q'
      ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);

    return $response;
  }

  //1.2. SINOPSIS PRODUK
  public function get_all_sinopsis()
  {
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => API_URL . 'api/get_all_sinopsis',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_HTTPHEADER => array(
        'Authorization: Basic bmptdWRpbkBvbWFzLW1mZy5jb206NThhZmVjYWRiNDFkNzZiNjhlNTY3YzE4OWMxYThlODBYWFg=',
        'Cookie: ci_session=si2bkklitep9r4r4ernu5hs1gl7uvjv7'
      ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);

    return $response;
  }

  //1.3. SERTIFIKASI
  public function get_all_sertified()
  {
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => API_URL . 'api/get_all_sertified',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_HTTPHEADER => array(
        'Authorization: Basic bmptdWRpbkBvbWFzLW1mZy5jb206NThhZmVjYWRiNDFkNzZiNjhlNTY3YzE4OWMxYThlODBYWFg=',
        'Cookie: ci_session=mqrtpvin685rr33mrjfsf4c91m6pg87p'
      ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);

    return $response;
  }

  //1.4. TAG
  public function get_all_tags()
  {
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => API_URL . 'api/get_all_tags',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_HTTPHEADER => array(
        'Authorization: Basic bmptdWRpbkBvbWFzLW1mZy5jb206NThhZmVjYWRiNDFkNzZiNjhlNTY3YzE4OWMxYThlODBYWFg=',
        'Cookie: ci_session=c0geb883gr2r5d196tvoiboifg7aho2h'
      ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);

    return $response;
  }

  //1.5. KEPERCAYAAN
  public function get_all_trusted()
  {
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => API_URL . 'api/get_all_trusted',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_HTTPHEADER => array(
        'Authorization: Basic bmptdWRpbkBvbWFzLW1mZy5jb206NThhZmVjYWRiNDFkNzZiNjhlNTY3YzE4OWMxYThlODBYWFg=',
        'Cookie: ci_session=rnruuuud5grcvc4v7akhbgg9q8jktp1q'
      ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);

    return $response;
  }

  /***** TENTANG KAMI *****/
  //1.1. PROFILE PERUSAHAAN
  public function get_company_profile()
  {
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => API_URL . 'api/get_company_profile',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => array(),
      CURLOPT_HTTPHEADER => array(
        'Authorization: Basic bmptdWRpbkBvbWFzLW1mZy5jb206NThhZmVjYWRiNDFkNzZiNjhlNTY3YzE4OWMxYThlODBYWFg=',
        'Cookie: ci_session=88s240t4sc5e1fngsqs7jaq02jvhiql6'
      ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);

    echo $response;
  }

  //1.2. VISI
  public function get_all_visi()
  {
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => API_URL . 'api/get_all_visi',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => array(),
      CURLOPT_HTTPHEADER => array(
        'Authorization: Basic bmptdWRpbkBvbWFzLW1mZy5jb206NThhZmVjYWRiNDFkNzZiNjhlNTY3YzE4OWMxYThlODBYWFg='
      ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);

    echo $response;
  }

  //1.3. MISI
  public function get_all_misi()
  {
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => API_URL . 'api/get_all_misi',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => array(),
      CURLOPT_HTTPHEADER => array(
        'Authorization: Basic bmptdWRpbkBvbWFzLW1mZy5jb206NThhZmVjYWRiNDFkNzZiNjhlNTY3YzE4OWMxYThlODBYWFg=',
        'Cookie: ci_session=in2kaoqa1jtkkrale68esvs6gfl3kba7'
      ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);

    echo $response;
  }

  //1.4. METODE
  public function get_all_metode()
  {
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => API_URL . 'api/get_all_metode',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => array(),
      CURLOPT_HTTPHEADER => array(
        'Authorization: Basic bmptdWRpbkBvbWFzLW1mZy5jb206NThhZmVjYWRiNDFkNzZiNjhlNTY3YzE4OWMxYThlODBYWFg=',
        'Cookie: ci_session=in2kaoqa1jtkkrale68esvs6gfl3kba7'
      ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);

    echo $response;
  }

  //1.5. PELANGGAN KAMI
  public function get_all_customers()
  {
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => API_URL . 'api/get_all_customers',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => array(),
      CURLOPT_HTTPHEADER => array(
        'Authorization: Basic bmptdWRpbkBvbWFzLW1mZy5jb206NThhZmVjYWRiNDFkNzZiNjhlNTY3YzE4OWMxYThlODBYWFg=',
        'Cookie: ci_session=1c2ctv65s3qmnaqam76tiedmr3rmdvfh'
      ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);

    return $response;
  }

  //1.6. FASILITAS UJI
  public function get_all_test_kit()
  {
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => API_URL . 'api/get_all_test_kit',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => array(),
      CURLOPT_HTTPHEADER => array(
        'Authorization: Basic bmptdWRpbkBvbWFzLW1mZy5jb206NThhZmVjYWRiNDFkNzZiNjhlNTY3YzE4OWMxYThlODBYWFg=',
        'Cookie: ci_session=1c2ctv65s3qmnaqam76tiedmr3rmdvfh'
      ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);

    return $response;
  }

  /***** PRODUK *****/
  //1.1. PRODUK
  public function get_all_products($jenis)
  {
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => API_URL . 'api/get_all_products',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => array('jenis' => $jenis),
      CURLOPT_HTTPHEADER => array(
        'Authorization: Basic bmptdWRpbkBvbWFzLW1mZy5jb206NThhZmVjYWRiNDFkNzZiNjhlNTY3YzE4OWMxYThlODBYWFg=',
        'Cookie: ci_session=kgfushp3ovqf9i7h6mk0kt6lqu23djcm'
      ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);

    return $response;
  }

  //1.2. PRODUK DETAIL
  public function get_product_details($slug)
  {
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => API_URL . 'api/get_product_details',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => array('slug' => $slug),
      CURLOPT_HTTPHEADER => array(
        'Authorization: Basic bmptdWRpbkBvbWFzLW1mZy5jb206NThhZmVjYWRiNDFkNzZiNjhlNTY3YzE4OWMxYThlODBYWFg=',
        'Cookie: ci_session=m59t895ntf5gulsq1qfpv0clati2omea'
      ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);

    return $response;
  }

  //1.3. JENIS PRODUK
  //1.4. PRODUK MIX TOP TEN
  public function get_mix_top_ten_products()
  {
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => API_URL . 'api/get_mix_top_ten_products',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_HTTPHEADER => array(
        'Authorization: Basic bmptdWRpbkBvbWFzLW1mZy5jb206NThhZmVjYWRiNDFkNzZiNjhlNTY3YzE4OWMxYThlODBYWFg=',
        'Cookie: ci_session=e7nrr7jp2hfo0j232agicsquf91sorha'
      ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);

    return $response;
  }

  public function get_top_three_products()
  {
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => API_URL . 'api/get_top_three_products',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_HTTPHEADER => array(
        'Authorization: Basic bmptdWRpbkBvbWFzLW1mZy5jb206NThhZmVjYWRiNDFkNzZiNjhlNTY3YzE4OWMxYThlODBYWFg=',
        'Cookie: ci_session=e7nrr7jp2hfo0j232agicsquf91sorha'
      ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);

    return $response;
  }

  //1.5. PRODUK MIX ALL
  public function get_all_products_mix()
  {
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => API_URL . 'api/get_all_products_mix',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_HTTPHEADER => array(
        'Authorization: Basic bmptdWRpbkBvbWFzLW1mZy5jb206NThhZmVjYWRiNDFkNzZiNjhlNTY3YzE4OWMxYThlODBYWFg=',
        'Cookie: ci_session=4l3ga315pdc8pobssl4mebqs9uocpuu9'
      ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);

    return $response;
  }

  //1.6. JENIS PRODUK
  public function get_all_product_types()
  {
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => API_URL . 'api/get_all_product_types',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_HTTPHEADER => array(
        'Authorization: Basic bmptdWRpbkBvbWFzLW1mZy5jb206NThhZmVjYWRiNDFkNzZiNjhlNTY3YzE4OWMxYThlODBYWFg=',
        'Cookie: ci_session=9mf0oj91ktt7k18f7al4j797ekqlk4qs'
      ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);

    return $response;
  }

  //1.7. JUMLAH MASING2 PRODUK
  public function get_count_product_types($id)
  {
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => API_URL . 'api/get_count_product_types',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => array('id' => $id),
      CURLOPT_HTTPHEADER => array(
        'Authorization: Basic bmptdWRpbkBvbWFzLW1mZy5jb206NThhZmVjYWRiNDFkNzZiNjhlNTY3YzE4OWMxYThlODBYWFg=',
        'Cookie: ci_session=ckkcs2h659i9jdfsght02pqb5pumhj6t'
      ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);

    return $response;
  }

  /***** KONTAK KAMI *****/
  //1.1. SIMPAN CALL BACK
  public function save_call_back($data)
  {
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => API_URL . 'api/save_call_back',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => array(
        'name_cb'       => $data['pengirim'],
        'phone_cb'      => $data['phone'],
        'pertanyaan_cb' => $data['judul']
      ),
      CURLOPT_HTTPHEADER => array(
        'Authorization: Basic bmptdWRpbkBvbWFzLW1mZy5jb206NThhZmVjYWRiNDFkNzZiNjhlNTY3YzE4OWMxYThlODBYWFg=',
        'Cookie: ci_session=v5jv829hv5gs4n8s6v8ouqqrue1hhain'
      ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);

    return $response;
  }

  //1.2. SIMPAN PERTANYAAN
  public function save_pertanyaan($data)
  {
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => API_URL . 'api/save_pertanyaan',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => array(
        'name'      => $data['pengirim'],
        'email'     => $data['email'],
        'subject'   => $data['judul'],
        'message'   => $data['isi']
      ),
      CURLOPT_HTTPHEADER => array(
        'Authorization: Basic bmptdWRpbkBvbWFzLW1mZy5jb206NThhZmVjYWRiNDFkNzZiNjhlNTY3YzE4OWMxYThlODBYWFg=',
        'Cookie: ci_session=m8v191d54sq16jequ42o0tcf5hfach9c'
      ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);

    return $response;
  }
}
