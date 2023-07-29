<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?php echo $nama_halaman; ?> - <?php echo $this->config->item('company_name'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
  <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
  <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
  <link rel="canonical" href="<?php echo base_url(); ?>" />

  <meta name="title" content="<?php echo $nama_halaman; ?> - <?php echo $this->config->item('company_name'); ?>">
  <meta name="description" content="PT. Multi Arta Sekawan merupakan Perusahaan manufaktur untuk mensupply kabel stecker dan rangkaian kabel kepada perusahaan - perusahaan yang memproduksi alat - alat listrik rumah tangga terutama di Indonesia.">
  <meta name="keywords" content="PT. Multi Arta Sekawan, PT. MAS, Perusahaan pembuat power cord dan wiring assy, Pabrik pembuat power cord dan wiring assy, Manufacturers pembuat power cord dan wiring assy, Perusahaan power cord dan wiring assy, Pabrik power cord dan wiring assy, Perusahaan kabel power cord, Pabrik kabel power cord, Pabrik kabel pembuat power cord, Pabrik kabel, Pabrik kabel power cord terbaik.">
  <meta name="subject" content="<?php echo $this->config->item('company_name'); ?>">
  <meta name="language" content="ID">
  <meta name="author" content="<?php echo $this->config->item('company_name'); ?>">
  <meta name="designer" content="IT Department - <?php echo $this->config->item('company_name'); ?>">
  <meta name="copyright" content="Copyright &copy; <?php echo $this->config->item('company_name'); ?>">
  <meta name="url" content="<?php echo base_url(); ?>">
  <meta name="identifier-URL" content="<?php echo base_url(); ?>">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo base_url(); ?>">
  <meta property="og:title" content="<?php echo $nama_halaman; ?> - <?php echo $this->config->item('company_name'); ?>">
  <meta property="og:description" content="PT. Multi Arta Sekawan merupakan Perusahaan manufaktur untuk mensupply kabel stecker dan rangkaian kabel kepada perusahaan - perusahaan yang memproduksi alat - alat listrik rumah tangga terutama di Indonesia.">
  <meta property="og:image" content="<?php echo base_url(); ?>assets/img/logo/<?php echo $this->config->item('company_logo'); ?>">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="<?php echo base_url(); ?>">
  <meta property="twitter:title" content="<?php echo $nama_halaman; ?> - <?php echo $this->config->item('company_name'); ?>">
  <meta property="twitter:description" content="PT. Multi Arta Sekawan merupakan Perusahaan manufaktur untuk mensupply kabel stecker dan rangkaian kabel kepada perusahaan - perusahaan yang memproduksi alat - alat listrik rumah tangga terutama di Indonesia.">
  <meta property="twitter:image" content="<?php echo base_url(); ?>assets/img/logo/<?php echo $this->config->item('company_logo'); ?>">

  <!-- LOADER BOF -->
  <?php $this->load->view('components/header_css'); ?>
  <!-- LOADER EOF -->
</head>

<body>

  <!-- LOADER BOF -->
  <?php $this->load->view('components/loader'); ?>
  <!-- LOADER EOF -->

  <!-- HEADER BOF -->
  <?php $this->load->view('components/navbar'); ?>
  <!-- HEADER EOF -->

  <main>

    <?php $this->load->view('components/slider_page'); ?>

    <section class="contact-section not_found">
      <div class="container">
        <div class="row error-page">
          <div class="col-12 justify-content-center d-flex mb-5">
            <img src="<?php echo base_url(); ?>assets/img/logo/<?php echo $this->config->item('company_logo_404'); ?>" class="img-fluid">
          </div>
          <div class="col-12 mb-5">
            <h4 class="text-center">Halaman yang anda cari tidak ditemukan</h4>
          </div>
          <div class="col-12 text-center">
            <button class="btn btn-primary" onclick="window.location.href='<?php echo base_url(); ?>'">KEMBALI KE BERANDA</button>
          </div>
        </div>
      </div>
    </section>

    <?php $this->load->view('components/request_callback'); ?>
  </main>

  <!-- FOOTER BOF -->
  <?php $this->load->view('components/footer'); ?>
  <!-- FOOTER BOF -->

  <!-- FOOTER BOF -->
  <?php $this->load->view('components/footer_js'); ?>
  <!-- FOOTER BOF -->
  <script type="text/javascript">
    $(document).ready(function() {
      $("[data-background]").each(function() {
        $(this).css("background-image", "url(" + $(this).attr("data-background") + ")")
      });
    });
  </script>
</body>

</html>