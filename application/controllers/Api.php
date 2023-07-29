<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Api extends CI_Controller
{

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   * 		http://example.com/index.php/welcome
   *	- or -
   * 		http://example.com/index.php/welcome/index
   *	- or -
   * Since this controller is set as the default controller in
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/welcome/<method_name>
   * @see https://codeigniter.com/userguide3/general/urls.html
   */

  public function __construct()
  {
    parent::__construct();

    $this->load->model('Api_model', 'api_model');
  }

  //SLIDER LIST
  public function slider_list()
  {
    $result  = $this->api_model->get_all_sliders();

    print_r($result);
  }

  //SINOPSIS LIST
  public function sinopsis_list()
  {
    $result  = $this->api_model->get_all_sinopsis();

    print_r($result);
  }

  //PRODUK KEPERCAYAAN LIST
  public function trusted_list()
  {
    $result  = $this->api_model->get_all_trusted();

    print_r($result);
  }

  //LAYANAN LIST
  public function tag_list()
  {
    $result  = $this->api_model->get_all_tags();

    print_r($result);
  }

  //SERTIFIKASI LIST
  public function serified_list()
  {
    $result  = $this->api_model->get_all_sertified();

    print_r($result);
  }

  /***** TENTANG KAMI *****/
  //1.1. VISI LIST
  public function visi_list()
  {
    $result  = $this->api_model->get_all_visi();

    print_r($result);
  }

  //1.2. MISI LIST
  public function misi_list()
  {
    $result  = $this->api_model->get_all_misi();

    print_r($result);
  }

  //1.3. METODE LIST
  public function metode_list()
  {
    $result  = $this->api_model->get_all_metode();

    print_r($result);
  }

  //1.4. CUSTOMER LIST
  public function our_customer_list()
  {
    $result  = $this->api_model->get_all_customers();

    print_r($result);
  }

  //1.5. TEST KIT LIST
  public function test_kit_list()
  {
    $result  = $this->api_model->get_all_test_kit();

    print_r($result);
  }

  //1.6. COMPANY PROFILE
  public function company_profile()
  {
    $result  = $this->api_model->get_company_profile();

    print_r($result);
  }

  /***** PRODUK *****/
  //1.1. POWER CORD
  public function power_cord_series_list()
  {
    $jenis   = "power cord";
    $result  = $this->api_model->get_all_products($jenis);

    print_r($result);
  }

  //1.2. WIRING ASSY
  public function wiring_assy_list()
  {
    $jenis   = "wiring assy";
    $result  = $this->api_model->get_all_products($jenis);

    print_r($result);
  }

  //1.3. PRODUK MIX TOP 10
  public function produk_mix_list_top_ten()
  {
    $result  = $this->api_model->get_mix_top_ten_products();

    print_r($result);
  }

  public function get_top_three_products()
  {
    $result  = $this->api_model->get_top_three_products();

    print_r($result);
  }

  //1.4. JENIS PRODUK
  /*public function jenis_produk_list()
	{
		$result	= $this->api_model->get_all_product_types();
		
		print_r($result);
	}*/

  /***** KONTAK KAMI *****/
  //1.1. SIMPAN CALL BACK
  public function save_call_back()
  {
    $name_cb        = ucwords($this->input->post('name_cb'));
    $phone_cb        = $this->input->post('phone_cb');
    $pertanyaan_cb  = ucfirst($this->input->post('pertanyaan_cb'));

    //SET ARRAY DATA
    $data = array(
      'pengirim'     => htmlspecialchars($name_cb),
      'phone'       => htmlspecialchars($phone_cb),
      'type'         => 'CALL BACK',
      'judul'       => htmlspecialchars($pertanyaan_cb),
    );

    $save           = json_decode($this->api_model->save_call_back($data));
    if ($save->status == 'ok') {
      echo json_encode(
        array(
          "status_code" => 200,
          "status"       => "success",
          "message"     => "Sukses menyimpan pesan anda",
          "saving"       => $save,
          "data"         => $data
        )
      );
    } else {
      echo json_encode(
        array(
          "status_code" => 400,
          "status"       => "error",
          "message"     => "Gagal menyimpan pesan anda",
          "saving"       => $save,
          "data"         => $data
        )
      );
    }
  }

  //1.2. SIMPAN PERTANYAAN
  public function save_pertanyaan()
  {
    $recaptchaResponse  = trim($this->input->post('g-recaptcha-response'));
    $userIp             = $this->input->ip_address();
    $secret             = $this->config->item('secret_key');

    $url = "https://www.google.com/recaptcha/api/siteverify?secret=" . $secret . "&response=" . $recaptchaResponse . "&remoteip=" . $userIp;

    $ch     = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);

    $status = json_decode($output, true);

    if ($status['success']) {

      $name      = ucwords($this->input->post('name'));
      $email    = $this->input->post('email');
      $subject  = ucfirst($this->input->post('subject'));
      $message  = $this->input->post('message');

      //SET ARRAY DATA
      $data = array(
        'pengirim'     => htmlspecialchars($name),
        'email'       => htmlspecialchars($email),
        'judul'       => htmlspecialchars($subject),
        'isi'         => htmlspecialchars($message)
      );

      $save           = json_decode($this->api_model->save_pertanyaan($data));
      if ($save->status == 'ok') {
        echo json_encode(
          array(
            "status_code" => 200,
            "status"       => "success",
            "message"     => "Sukses menyimpan pesan anda",
            "saving"       => $save,
            "data"         => $data
          )
        );
      } else {
        echo json_encode(
          array(
            "status_code" => 400,
            "status"       => "error",
            "message"     => "Gagal menyimpan pesan anda",
            "saving"       => $save,
            "data"         => $data
          )
        );
      }
    } else {
      echo json_encode(
        array(
          "status_code" => 400,
          "status"       => "error",
          "message"     => "Oops captcha belum di ceklis",
          "data"        => $status
        )
      );
    }
  }
}
