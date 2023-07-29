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
    <link rel="canonical" href="<?php echo base_url(); ?>visi-dan-misi" />
    
    <meta name="title" content="<?php echo $nama_halaman; ?> - <?php echo $company_profile->data->nama; ?>">
    <meta name="description" content="Kontak PT. Multi Arta Sekawan">
    <meta name="subject" content="<?php echo $company_profile->data->nama; ?>">
    <meta name="language" content="ID">
    <meta name="author" content="<?php echo $company_profile->data->nama; ?>">
    <meta name="designer" content="IT Department - <?php echo $company_profile->data->nama; ?>">
    <meta name="copyright" content="Copyright &copy; <?php echo $company_profile->data->nama; ?>">
    <meta name="url" content="<?php echo base_url(); ?>visi-dan-misi">
    <meta name="identifier-URL" content="<?php echo base_url(); ?>visi-dan-misi">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo base_url(); ?>visi-dan-misi">
    <meta property="og:title" content="<?php echo $nama_halaman; ?> - <?php echo $company_profile->data->nama; ?>">
    <meta property="og:description" content="<?php echo $this->config->item('company_short_profile'); ?>">
    <meta property="og:image" content="<?php echo API_URL; ?>upload/general_images/<?php echo $company_profile->data->logo_name; ?>">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo base_url(); ?>visi-dan-misi">
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
            <div class="col-12 mb-30">
              <h2 class="contact-title text-center">VISI</h2>
            </div>
            <div class="col-lg-12">
              <blockquote class="generic-blockquote border-right-yellow">
                <h5 id="text-visi" class="text-center text-visi"></h5>
              </blockquote>
            </div>
          </div>

          <div class="row section-top-border">
            <div class="col-12 mb-30">
              <h2 class="contact-title text-center">MISI</h2>
            </div>
            <div class="col-lg-12">
              <blockquote class="generic-blockquote">
                <ol id="misi-list" class="ordered-list">
                </ol>
              </blockquote>
            </div>
          </div>

          <div class="row section-top-border">
            <div class="col-12 mb-30">
              <h6>Dalam menjalankan visi misi ini, kami menjalankan metode 5R and PDCA, dimana kami bertekad:</h6>
            </div>
            <div class="col-lg-12">
              <blockquote class="generic-blockquote transparentX">
                <ol id="metode-list" class="ordered-list">
                  <!-- <li>Pengembangan dimulai dari individu dengan usaha dan komunikasi yang baik serta training dan dukungan data yang benar dan tepat.</li>
                  <li>Pengembangan dimulai dari hal yang terkecil dan harus dilakukan secara rutin dengan semangat serta tujuan yang baik untuk segenap karyawan tanpa terkecuali.</li>
                  <li>Pengembangan terjadi dengan kerjasama yang baik dengan Pelanggan dalam mengikuti tuntutan pasar dan menerapkan kemajuan teknologi.</li>
                  <li>Lingkungan kerja adalah rumah kedua kami yang bersih, sehat dan menunjang produktivas usaha.</li>
                  <li>Qualitas dan ketepatan waktu adalah kunci dari kepuasan pelanggan kami.</li> -->
                </ol>
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
      function metode_list() {
        $.ajax({
          url:  "<?php echo base_url(); ?>api/metode_list",
          type: 'POST',
          dataType: 'JSON',
          beforeSend: function() {
            
          },
          success:function(data) {
            var items = [];
            data.data.forEach((elemen, indeks, array) => {
              items.push('<li>'+ elemen.text +'</li>');
            });

            $("#metode-list").html(items);
          }
        });
      };

      function misi_list() {
        $.ajax({
          url:  "<?php echo base_url(); ?>api/misi_list",
          type: 'POST',
          dataType: 'JSON',
          beforeSend: function() {
            
          },
          success:function(data) {
            var items = [];
            data.data.forEach((elemen, indeks, array) => {
              //console.log('elemen:', elemen, 'indeks:', indeks, 'array:', array);
              items.push('<li>'+ elemen.text +'</li>');
            });

            $("#misi-list").html(items);
          }
        });
      };

      function visi_list() {
        $.ajax({
          url:  "<?php echo base_url(); ?>api/visi_list",
          type: 'POST',
          dataType: 'JSON',
          beforeSend: function() {
            
          },
          success:function(data) {
            $("#text-visi").html('"' + data.data.text + '"');
          }
        });
      };

      $(document).ready(function(){
        visi_list();
        misi_list();
        metode_list();

        $("[data-background]").each(function () {
          $(this).css("background-image", "url(" + $(this).attr("data-background") + ")")
        });
      });
    </script>
  </body>
</html>