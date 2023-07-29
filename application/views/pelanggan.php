<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?php echo $nama_halaman; ?> - <?php echo $company_profile->data->nama; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
  <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
  <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
  <link rel="canonical" href="<?php echo base_url(); ?>our-customer" />

  <meta name="title" content="<?php echo $nama_halaman; ?> - <?php echo $company_profile->data->nama; ?>">
  <meta name="description" content="<?php echo $nama_halaman; ?> - <?php echo $company_profile->data->nama; ?>">
  <meta name="subject" content="<?php echo $company_profile->data->nama; ?>">
  <meta name="language" content="ID">
  <meta name="author" content="<?php echo $company_profile->data->nama; ?>">
  <meta name="designer" content="IT Department - <?php echo $company_profile->data->nama; ?>">
  <meta name="copyright" content="Copyright &copy; <?php echo $company_profile->data->nama; ?>">
  <meta name="url" content="<?php echo base_url(); ?>our-customer">
  <meta name="identifier-URL" content="<?php echo base_url(); ?>our-customer">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo base_url(); ?>our-customer">
  <meta property="og:title" content="<?php echo $nama_halaman; ?> - <?php echo $company_profile->data->nama; ?>">
  <meta property="og:description" content="<?php echo $this->config->item('company_short_profile'); ?>">
  <meta property="og:image" content="<?php echo API_URL; ?>upload/general_images/<?php echo $company_profile->data->logo_name; ?>">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="<?php echo base_url(); ?>our-customer">
  <meta property="twitter:title" content="<?php echo $nama_halaman; ?> - <?php echo $company_profile->data->nama; ?>">
  <meta property="twitter:description" content="PT. Multi Arta Sekawan merupakan Perusahaan manufaktur untuk mensupply kabel stecker dan rangkaian kabel kepada perusahaan - perusahaan yang memproduksi alat - alat listrik rumah tangga terutama di Indonesia.">
  <meta property="twitter:image" content="<?php echo API_URL; ?>upload/general_images/<?php echo $company_profile->data->logo_name; ?>">

  <!-- LOADER BOF -->
  <?php $this->load->view('components/header_css'); ?>
  <!-- LOADER EOF -->
  <style>
    #static img.customer_logo {
      width: 50%;
    }
  </style>
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

    <section class="contact-section">
      <div class="container">
        <div class="row sp-mb-50">
          <div class="col-12 mb-30">
            <div class="section-title">
              <h2 class="contact-title">Siapa yang menggunakan produk kami?</h2>
            </div>
          </div>
          <div class="col-12">
            <p>Puluhan perusahaan elektronik besar telah menggunakan produk dari kami sebagai komponen dari produknya, selanjutnya giliran anda.</p>
          </div>
        </div>
        <ul id="customers_ku" class="row justify-content-center thumbnails"></ul>
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

      $.getJSON("<?php echo base_url(); ?>api/our_customer_list", function(data) {
        var items = [];
        $.each(data.data, function(key, val) {
          // items.push('<div class="col-lg-3 col-sm-12 sp-mb-50">' +
          //   '<img src="<?php echo API_URL; ?>upload/pelanggan_images/' + val.logo + '" class="customer_logo" alt="Customer <?php echo $company_profile->data->nama; ?>" title="' + val.nama + '" style="cursor: pointer;">' +
          //   '</div>');

          items.push('<li class="col-lg-3 col-sm-12" title="' + val.nama + '">' +
            '<img src="<?php echo API_URL; ?>upload/pelanggan_images/' + val.logo + '" class="customer_logo" alt="Customer <?php echo $company_profile->data->nama; ?>">' +
            '</li>');
        });

        //$("#contentku").html(items);
        $("#customers_ku").html(items);
      });

      $("[data-background]").each(function() {
        $(this).css("background-image", "url(" + $(this).attr("data-background") + ")")
      });
    });
  </script>
</body>

</html>