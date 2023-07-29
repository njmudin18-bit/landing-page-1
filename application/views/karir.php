<?php
defined('BASEPATH') OR exit('No direct script access allowed');
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
    
    <meta name="title" content="<?php echo $nama_halaman; ?> - <?php echo $this->config->item('company_name'); ?>">
    <meta name="description" content="Karir di <?php echo $company_profile->data->nama; ?>">
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
          <div class="row mb-30">
            <div class="col-lg-12">
              <blockquote class="generic-blockquote border-full-yellow">
                <h5 class="text-center text-career">Coming Soon</h5>
              </blockquote>
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
      $(document).ready(function(){
        $("[data-background]").each(function () {
          $(this).css("background-image", "url(" + $(this).attr("data-background") + ")")
        });
      });
    </script>
  </body>
</html>