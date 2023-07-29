<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
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

	/***** BERANDA *****/
	//HOMEPAGE
	public function index()
	{
		$data['nama_halaman'] 		= "Beranda";
		$data['company_profile'] 	= $this->api_model->get_company_details();

		$this->load->view('welcome_message', $data, FALSE);
	}

	/***** TENTANG KAMI *****/
	//1.1. PROFILE PERUSAHAAN
	public function company_profile()
	{
		$data['nama_halaman'] 		= "Profil Perusahaan";
		$nama_halaman 						= "Profil Perusahaan";
		$data['nama_file_header'] = "Industries_hero.jpg";
		$data['company_profile'] 	= $this->api_model->get_company_details();
		$data['slider_page'] 			= $this->api_model->get_profile_headers($nama_halaman);

		$this->load->view('company_profile', $data, FALSE);
	}

	//1.2. VISI DAN MISI
	public function visi_dan_misi()
	{
		$data['nama_halaman'] 		= "Visi dan Misi";
		$nama_halaman 						= "Visi dan Misi";
		$data['nama_file_header'] = "gallery_hero.jpg";
		$data['company_profile'] 	= $this->api_model->get_company_details();
		$data['slider_page'] 			= $this->api_model->get_profile_headers($nama_halaman);

		$this->load->view('visi_dan_misi', $data, FALSE);
	}

	//1.3. PELANGGAN KAMI
	public function our_customer()
	{
		$data['nama_halaman'] 		= "Pelanggan Kami";
		$nama_halaman 						= "Pelanggan Kami";
		$data['nama_file_header'] = "gallery_hero.jpg";
		$data['company_profile'] 	= $this->api_model->get_company_details();
		$data['slider_page'] 			= $this->api_model->get_profile_headers($nama_halaman);

		$this->load->view('pelanggan', $data, FALSE);
	}

	//1.4. FASILITAS UJI
	public function test_kit()
	{
		$data['nama_halaman'] 		= "Fasilitas Uji";
		$nama_halaman	 						= "Fasilitas Uji";
		$data['nama_file_header'] = "Industries_hero.jpg";
		$data['company_profile'] 	= $this->api_model->get_company_details();
		$data['slider_page'] 			= $this->api_model->get_profile_headers($nama_halaman);

		$this->load->view('test_kit', $data, FALSE);
	}

	//1.5. DOWNLOAD CATALOGUE
	public function download()
	{
		//$this->load->helper('download');
		// $data = (base_url('assets/catalogue/Company_Profile_PT.MAS.pdf'));
		// force_download($data, NULL);

		$this->load->helper('download');
		// read file contents
		$filename = "Company__Profile__PT._MAS.pdf";
		$data 		= file_get_contents(base_url('/assets/catalogue/' . $filename));
		force_download($filename, $data);
	}

	/***** PRODUK *****/
	//1.2. POWER CORD
	public function power_cord_series()
	{
		$data['nama_halaman'] 		= "Power Cord";
		$nama_halaman 						= "Power Cord";
		$data['nama_file_header'] = "contact_hero.jpg";
		$data['company_profile'] 	= $this->api_model->get_company_details();
		$data['slider_page'] 			= $this->api_model->get_profile_headers($nama_halaman);

		$this->load->view('power_cord', $data, FALSE);
	}

	//1.2. WIRING ASSY
	public function wiring_assy()
	{
		$data['nama_halaman'] 		= "Wiring Assy";
		$nama_halaman 						= "Wiring Assy";
		$data['nama_file_header'] = "gallery_hero.jpg";
		$data['company_profile'] 	= $this->api_model->get_company_details();
		$data['slider_page'] 			= $this->api_model->get_profile_headers($nama_halaman);

		$this->load->view('wiring_assy', $data, FALSE);
	}

	//1.3 PRODUK DETAIL
	public function view($slug)
	{

		$result	= json_decode($this->api_model->get_product_details($slug));

		$data['slug'] 						= $result->data->slug;
		$data['available_type'] 	= explode(';', $result->data->available_types);
		$data['produk_details'] 	= $result->data->nama_produk;
		$data['nama_halaman'] 		= $result->data->nama_produk;
		$data['nominal_voltage'] 	= $result->data->nominal_voltage;
		$data['product_images'] 	= $result->data->images;

		$nama_halaman 						= "Power Cord";
		$data['nama_file_header'] = "contact_hero.jpg";
		$data['jenis_produk'] 		= json_decode($this->api_model->get_all_product_types());
		$data['company_profile'] 	= $this->api_model->get_company_details();
		$data['slider_page'] 			= $this->api_model->get_profile_headers($nama_halaman);

		$this->load->view('produk_details', $data, FALSE);
	}

	/***** KARIR *****/
	public function career()
	{
		$data['nama_halaman'] 		= "Karir";
		$nama_halaman 						= "Karir";
		$data['nama_file_header'] = "gallery_hero.jpg";
		$data['company_profile'] 	= $this->api_model->get_company_details();
		$data['slider_page'] 			= $this->api_model->get_profile_headers($nama_halaman);

		$this->load->view('karir', $data, FALSE);
	}

	public function contact_us()
	{
		$data['nama_halaman'] 		= "Kontak Kami";
		$nama_halaman 						= "Kontak Kami";
		$data['nama_file_header'] = "contact_hero.jpg";
		$data['company_profile'] 	= $this->api_model->get_company_details();
		$data['slider_page'] 			= $this->api_model->get_profile_headers($nama_halaman);

		$this->load->view('contact_us', $data, FALSE);
	}

	public function not_found()
	{
		$data['nama_halaman'] 		= "Tidak ditemukan";
		$nama_halaman 						= "Tidak ditemukan";
		$data['company_profile'] 	= $this->api_model->get_company_details();
		$data['slider_page'] 			= $this->api_model->get_profile_headers($nama_halaman);
		$data['nama_file_header'] = "services_hero.jpg";

		$this->load->view('error_404', $data, FALSE);
	}

	public function sitemap()
	{
		$data['data_power_cord'] 	= json_decode($this->api_model->get_all_products_mix());

		$this->load->view('sitemap', $data, FALSE);
	}
}
