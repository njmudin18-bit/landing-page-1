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
  <link rel="canonical" href="<?php echo base_url(); ?>wiring-assy" />

  <meta name="title" content="<?php echo $nama_halaman; ?> - <?php echo $company_profile->data->nama; ?>">
  <meta name="description" content="Produk Wiring Assy <?php echo $company_profile->data->nama; ?>">
  <meta name="subject" content="<?php echo $company_profile->data->nama; ?>">
  <meta name="language" content="ID">
  <meta name="author" content="<?php echo $company_profile->data->nama; ?>">
  <meta name="designer" content="IT Department - <?php echo $company_profile->data->nama; ?>">
  <meta name="copyright" content="Copyright &copy; <?php echo $company_profile->data->nama; ?>">
  <meta name="url" content="<?php echo base_url(); ?>wiring-assy">
  <meta name="identifier-URL" content="<?php echo base_url(); ?>wiring-assy">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo base_url(); ?>wiring-assy">
  <meta property="og:title" content="<?php echo $nama_halaman; ?> - <?php echo $company_profile->data->nama; ?>">
  <meta property="og:description" content="<?php echo $this->config->item('company_short_profile'); ?>">
  <meta property="og:image" content="<?php echo API_URL; ?>upload/general_images/<?php echo $company_profile->data->logo_name; ?>">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="<?php echo base_url(); ?>wiring-assy">
  <meta property="twitter:title" content="<?php echo $nama_halaman; ?> - <?php echo $company_profile->data->nama; ?>">
  <meta property="twitter:description" content="PT. Multi Arta Sekawan merupakan Perusahaan manufaktur untuk mensupply kabel stecker dan rangkaian kabel kepada perusahaan - perusahaan yang memproduksi alat - alat listrik rumah tangga terutama di Indonesia.">
  <meta property="twitter:image" content="<?php echo API_URL; ?>upload/general_images/<?php echo $company_profile->data->logo_name; ?>">

  <!-- LOADER BOF -->
  <?php $this->load->view('components/header_css'); ?>
  <!-- LOADER EOF -->
  <style type="text/css">
    .recent-area .single-recent-cap .recent-img img {
      height: 246px;
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

    <div class="contact-section recent-area section-paddingt2">
      <div class="container">

        <div class="row">
          <div class="col-lg-12">
            <div class="section-tittle text-center">
              <h2>Produk kami</h2>
            </div>
          </div>
        </div>
        <div id="contentku" class="row products"></div>
      </div>
    </div>

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

      $.getJSON("<?php echo base_url(); ?>api/wiring_assy_list", function(data) {
        var items = [];

        if (data.data.length > 0) {
          $.each(data.data, function(key, val) {

            const linkBerita = "'" + "<?php echo base_url(); ?>" + "view/" + val.slug + "'";
            const new_tab = "'_blank'";

            items.push('<div class="col-xl-3 col-lg-3 col-md-6 mb-30" onclick="window.open(' + linkBerita + ', ' + new_tab + ');" title="' + val.jenis_produk + ' : ' + val.nama_produk + '">' +
              '<div class="single-recent-cap mb-30">' +
              '<div class="recent-img">' +
              '<img src="<?php echo API_URL; ?>upload/produk_images/' + val.images + '" alt="<?php echo $company_profile->data->nama; ?>">' +
              '</div>' +
              '<div class="recent-cap">' +
              '<span>' + val.jenis_produk + '</span>' +
              '<h4>' +
              '<a href="<?php echo base_url(); ?>view/' + val.slug + '" target="_blank">' + val.nama_produk +
              '</a>' +
              '</h4>' +
              '<p>' + val.nominal_voltage + '</p>' +
              '</div>' +
              '</div>' +
              '</div>');
          });
        } else {
          items.push('<div class="col-xl-12 col-lg-12 col-md-12 mb-30 text-center">' +
            '<h5>' + data.message + '</h5>' +
            '</div>');
        }

        $("#contentku").html(items);
      });

      $("[data-background]").each(function() {
        $(this).css("background-image", "url(" + $(this).attr("data-background") + ")")
      });
    });
  </script>
</body>

</html>