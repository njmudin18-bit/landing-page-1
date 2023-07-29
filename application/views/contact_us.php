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
  <link rel="canonical" href="<?php echo base_url(); ?>contact-us" />

  <meta name="title" content="<?php echo $nama_halaman; ?> - <?php echo $company_profile->data->nama; ?>">
  <meta name="description" content="<?php echo $this->config->item('company_short_profile'); ?>">
  <meta name="subject" content="<?php echo $company_profile->data->nama; ?>">
  <meta name="language" content="ID">
  <meta name="author" content="<?php echo $company_profile->data->nama; ?>">
  <meta name="designer" content="IT Department - <?php echo $company_profile->data->nama; ?>">
  <meta name="copyright" content="Copyright &copy; <?php echo $company_profile->data->nama; ?>">
  <meta name="url" content="<?php echo base_url(); ?>contact-us">
  <meta name="identifier-URL" content="<?php echo base_url(); ?>contact-us">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo base_url(); ?>contact-us">
  <meta property="og:title" content="<?php echo $nama_halaman; ?> - <?php echo $company_profile->data->nama; ?>">
  <meta property="og:description" content="<?php echo $this->config->item('company_short_profile'); ?>">
  <meta property="og:image" content="<?php echo API_URL; ?>upload/general_images/<?php echo $company_profile->data->logo_name; ?>">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="<?php echo base_url(); ?>contact-us">
  <meta property="twitter:title" content="<?php echo $nama_halaman; ?> - <?php echo $company_profile->data->nama; ?>">
  <meta property="twitter:description" content="<?php echo $this->config->item('company_short_profile'); ?>">
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
        <div class="d-none d-sm-block mb-5 pb-4">
          <?php echo $company_profile->data->maps; ?>
        </div>
        <div class="row">
          <div class="col-12">
            <h2 class="contact-title">Terhubung dengan kami</h2>
          </div>
          <div class="col-lg-8">
            <form class="form-contact contact_form" action="#" method="post" id="contactForm" novalidate="novalidate">
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder="Pesan anda"></textarea>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control text-capitalize valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Nama anda" value="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control text-lowercase valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email anda" value="">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <input class="form-control text-capitalize" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Judul pesan anda" value="">
                  </div>
                </div>
                <div class="col-12 center">
                  <div id="recaptcha" class="g-recaptcha" data-sitekey="<?php echo $this->config->item('site_key'); ?>"></div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="form-group mt-3">
                    <button id="btn_send" type="submit" class="button button-contactForm boxed-btn btn-more">Kirim sekarang</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="col-lg-4">
            <div class="media contact-info">
              <span class="contact-info__icon"><i class="ti-home"></i></span>
              <div class="media-body">
                <h3><a href="https://www.google.com/maps/place/PT.+MULTI+ARTA+SEKAWAN/@-6.2195932,106.4912309,17z/data=!3m1!4b1!4m6!3m5!1s0x2e4200d0d49aadeb:0x5c5bd12989d99803!8m2!3d-6.2195985!4d106.4934196!16s%2Fg%2F11fy4gt674" target="_blank"><?php echo $company_profile->data->alamat; ?></a></h3>
              </div>
            </div>
            <div class="media contact-info">
              <span class="contact-info__icon"><i class="ti-tablet"></i></span>
              <div class="media-body">
                <h3><a href="tel:<?php echo $company_profile->data->telepon; ?>" class="__cf_email__"><?php echo $company_profile->data->telepon; ?></a></h3>
                <p>Senin - Jumat 07.00 - 16.00 WIB<br>
                  Sabtu 07.00 - 13.00 WIB
                </p>
              </div>
            </div>
            <div class="media contact-info">
              <span class="contact-info__icon"><i class="ti-email"></i></span>
              <div class="media-body">
                <h3><a href="mailto:<?php echo $company_profile->data->email; ?>" class="__cf_email__"><?php echo $company_profile->data->email; ?></a></h3>
                <p>Kirimi kami permintaan Anda kapan saja!</p>
              </div>
            </div>
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
      (function($) {
        // validate contactForm form
        $(function() {
          $('#contactForm').validate({
            rules: {
              name: {
                required: true,
                minlength: 2
              },
              subject: {
                required: true,
                minlength: 4
              },
              email: {
                required: true,
                email: true
              },
              message: {
                required: true,
                minlength: 20
              }
            },
            messages: {
              name: {
                required: "Nama wajib diisi"
              },
              subject: {
                required: "Judul pesan wajib diisi"
              },
              email: {
                required: "Email wajib diisi"
              },
              message: {
                required: "Pesan wajib diisi"
              }
            },
            submitHandler: function(form) {
              var data = $("#contactForm").serialize();
              $.ajax({
                type: 'POST',
                url: "<?php echo base_url(); ?>api/save_pertanyaan",
                data: data,
                beforeSend: function() {
                  $("#error").fadeOut();
                  $("#btn_send").prop('disabled', true);
                  $(".loading").show();
                  $("#btn_send").html('Saving....');
                },
                success: function(response) {
                  var hasil = JSON.parse(response);
                  if (hasil.status_code == 200) {
                    $('#contactForm')[0].reset();
                  } else {

                  }

                  Toast.fire({
                    icon: hasil.status,
                    title: hasil.message
                  });

                  $(".loading").hide();
                  $("#btn_send").prop('disabled', false);
                  $("#btn_send").html('Kirim sekarang');
                  grecaptcha.reset();
                },
                error: function(jqXHR, textStatus, errorThrown) {
                  grecaptcha.reset();
                  Toast.fire({
                    icon: response.status,
                    title: response.message
                  });
                }
              });
              return false;
            }
          })
        })
      })(jQuery);

      $("[data-background]").each(function() {
        $(this).css("background-image", "url(" + $(this).attr("data-background") + ")")
      });
    })
  </script>
</body>

</html>