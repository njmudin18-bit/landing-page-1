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
  <link rel="canonical" href="<?php echo base_url(); ?>company-profile" />

  <meta name="title" content="<?php echo $nama_halaman; ?> - <?php echo $company_profile->data->nama; ?>">
  <meta name="description" content="Company Profile PT. Multi Arta Sekawan">
  <meta name="subject" content="<?php echo $company_profile->data->nama; ?>">
  <meta name="language" content="ID">
  <meta name="author" content="<?php echo $company_profile->data->nama; ?>">
  <meta name="designer" content="IT Department - <?php echo $company_profile->data->nama; ?>">
  <meta name="copyright" content="Copyright &copy; <?php echo $company_profile->data->nama; ?>">
  <meta name="url" content="<?php echo base_url(); ?>company-profile">
  <meta name="identifier-URL" content="<?php echo base_url(); ?>company-profile">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo base_url(); ?>company-profile">
  <meta property="og:title" content="<?php echo $nama_halaman; ?> - <?php echo $company_profile->data->nama; ?>">
  <meta property="og:description" content="<?php echo $this->config->item('company_short_profile'); ?>">
  <meta property="og:image" content="<?php echo API_URL; ?>upload/general_images/<?php echo $company_profile->data->logo_name; ?>">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="<?php echo base_url(); ?>company-profile">
  <meta property="twitter:title" content="<?php echo $nama_halaman; ?> - <?php echo $company_profile->data->nama; ?>">
  <meta property="twitter:description" content="PT. Multi Arta Sekawan merupakan Perusahaan manufaktur untuk mensupply kabel stecker dan rangkaian kabel kepada perusahaan - perusahaan yang memproduksi alat - alat listrik rumah tangga terutama di Indonesia.">
  <meta property="twitter:image" content="<?php echo API_URL; ?>upload/general_images/<?php echo $company_profile->data->logo_name; ?>">

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

    <section class="contact-section">
      <div class="container">
        <!-- <div class="row mb-30">
            <div class="col-12 mb-30">
              <h2 class="contact-title">Latar Belakang</h2>
            </div>
            <div class="col-lg-8">
              <p><?php //echo $this->config->item('company_background'); 
                  ?></p>
            </div>
            <div class="col-lg-4 mt-10">
              <img src="https://omas-mfg.com/assets/images/Fasilitas/DSC00045.JPG" alt="" class="img-fluid">
            </div>
          </div> -->

        <div id="contentku" class="row">
          <!-- <div class="col-12 mb-30">
              <h2 class="contact-title">Produk Dan Pasar</h2>
            </div>
            <div class="col-lg-4 mt-10">
              <img src="https://omas-mfg.com/assets/images/Fasilitas/DSC00045.JPG" alt="" class="img-fluid">
            </div>
            <div class="col-lg-8">
              <p><?php //echo $this->config->item('company_produk_market'); 
                  ?></p>
            </div> -->
        </div>

        <!-- <div class="row section-top-border">
            <div class="col-12 mb-30">
              <h2 class="contact-title">Peran Dalam Bisnis</h2>
            </div>
            <div class="col-lg-12">
              <p>Sejalan dengan perkembangan & pertumbuhan perusahaan alat - alat listrik rumah tangga, perusahaan kami memproduksi produk power cord dan rangkaian listrik internal untuk produk - produk dan alat - alat rumah tangga dengan desain yang dibutuhkan oleh pelanggan. Dalam perkembangannya kami mengikuti perubahan - perubahan yang diminta oleh pelanggan.</p>
              <p>Beberapa aktivitas yang telah dilaksanakan antara lain berupa :</p>
              <blockquote class="generic-blockquote">
                <ol class="ordered-list">
                  <li>Pengembangan tipe produk baru dari semua produk yang dijual sesuai dengan pesanan pelanggan, pengembangan bahan - bahan baku dan supplier bahan baku , penambahan fasilitas proses produksi, teknologi, sumber daya manusia, sehingga mendorong efisiensi di segala bidang agar diperoleh keuntungan yang optimal sehingga selalu mendapatkan hasil terbaik dalam setiap kompetisi produk di pasaran.</li>
                  <li>Pengembangan organisasi, system manajerial dan standard - standard produk internasional yang dipersyaratkan oleh perdagangan baik lokal maupun internasional mengikuti perkembangan zaman seperti diantaranya sertifikasi SNI dll.</li>
                  <li>Perbaikan fasilitas pabrik, kantor, kantin, mushola dan pergudangan untuk menunjang kelancaran kegiatan perusahaan sehingga menambah produktifitas yang dihasilkan.</li>
                  <li>Perbaikan fasilitas pabrik, kantor, kantin, mushola dan pergudangan untuk menunjang kelancaran kegiatan perusahaan sehingga menambah produktifitas yang dihasilkan.</li>
                </ol>
              </blockquote>
            </div>
          </div> -->
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

      $.getJSON("<?php echo base_url(); ?>api/company_profile", function(data) {
        console.log(data);
        var items = [];

        items.push('<div class="col-12 mb-30">' +
          '<h2 class="contact-title">' + data.data.main_title + '</h2>' +
          '</div>' +
          '<div class="col-lg-5 mt-10 mb-30">' +
          '<img src="<?php echo API_URL; ?>upload/profile_images/' + data.data.images + '" alt="<?php echo $company_profile->data->nama; ?>" class="img-fluid">' +
          '</div>' +
          '<div class="col-lg-7">' +
          data.data.contents +
          '</div>');


        $("#contentku").html(items);
      });

      $("[data-background]").each(function() {
        $(this).css("background-image", "url(" + $(this).attr("data-background") + ")")
      });
    });
  </script>
</body>

</html>