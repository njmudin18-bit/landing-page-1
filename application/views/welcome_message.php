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

  <meta name="title" content="<?php echo $nama_halaman; ?> - <?php echo $company_profile->data->nama; ?>">
  <meta name="description" content="<?php echo $this->config->item('company_short_profile'); ?>">
  <meta name="keywords" content="PT. Multi Arta Sekawan, PT. MAS, Perusahaan pembuat power cord dan wiring assy, Pabrik pembuat power cord dan wiring assy, Manufacturers pembuat power cord dan wiring assy, Perusahaan power cord dan wiring assy, Pabrik power cord dan wiring assy, Perusahaan kabel power cord, Pabrik kabel power cord, Pabrik kabel pembuat power cord, Pabrik kabel, Pabrik kabel power cord terbaik.">
  <meta name="subject" content="<?php echo $company_profile->data->nama; ?>">
  <meta name="language" content="ID">
  <meta name="author" content="<?php echo $company_profile->data->nama; ?>">
  <meta name="designer" content="IT Department - <?php echo $company_profile->data->nama; ?>">
  <meta name="copyright" content="Copyright &copy; <?php echo $company_profile->data->nama; ?>">
  <meta name="url" content="<?php echo base_url(); ?>">
  <meta name="identifier-URL" content="<?php echo base_url(); ?>">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo base_url(); ?>">
  <meta property="og:title" content="<?php echo $nama_halaman; ?> - <?php echo $company_profile->data->nama; ?>">
  <meta property="og:description" content="<?php echo $this->config->item('company_short_profile'); ?>">
  <meta property="og:image" content="<?php echo API_URL; ?>upload/general_images/<?php echo $company_profile->data->logo_name; ?>">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="<?php echo base_url(); ?>">
  <meta property="twitter:title" content="<?php echo $nama_halaman; ?> - <?php echo $company_profile->data->nama; ?>">
  <meta property="twitter:description" content="<?php echo $this->config->item('company_short_profile'); ?>">
  <meta property="twitter:image" content="<?php echo API_URL; ?>upload/general_images/<?php echo $company_profile->data->logo_name; ?>">

  <!-- CSS BOF -->
  <?php $this->load->view('components/header_css'); ?>
  <!-- CSS EOF -->
  <style>

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

    <!-- SLIDER -->
    <?php //$this->load->view('components/slider'); 
    ?>
    <div class="slider-area ">
      <div class="slider-active">
      </div>
    </div>
    <!-- SLIDER END -->

    <!-- SINOPSIS PRODUK -->
    <div class="team-profile team-padding">
      <div class="container">
        <div id="sinopsisku" class="row">
        </div>
      </div>
    </div>
    <!-- SINOPSIS PRODUK END -->

    <!-- TRUSTED AREA -->
    <!-- <div class="we-trusted-area trusted-padding">
      <div class="container">
        <div id="trust_ku" class="row d-flex align-items-end">
        </div>
      </div>
    </div> -->

    <div class="completed-cases section-padding bg-white">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
            <div class="single-cases-info trusted-area mb-30">
            </div>
          </div>

          <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
            <div id="customers_gue" class="completed-actived owl-carousel thumbnails"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- TRUSTED AREA END -->

    <!-- LAYANAN KAMI -->
    <div class="services-area section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-tittle text-center">
              <h2>Layanan kami</h2>
            </div>
          </div>
        </div>
        <div id="layananku" class="row d-flex align-items-center justify-content-center">
        </div>
      </div>
    </div>
    <!-- LAYANAN KAMI END -->

    <!-- PRODUK KAMI -->
    <div class="completed-cases section-padding3">
      <div class="container-fluid">
        <div class="row">

          <div class="col-xl-4 col-lg-4 col-md-8">
            <div class="single-cases-info mb-30">
              <h3>Produk kami</h3>
              <p>PT. Multi Arta Sekawan telah memproduksi beragam Power Cord dan Wiring Assy. sesuai dengan kebutuhan pasar dan customer. Beberapa produk kami diantaranya.</p>
              <a href="#" class="border-btn border-btn2 btn-more" data-toggle="modal" data-target="#modal_product">See more</a>
            </div>
          </div>

          <div class="col-xl-8 col-lg-8 col-md-col-md-7">
            <div class="completed-active owl-carousel"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- PRODUK KAMI END -->

    <!-- SERTIFIKASI -->
    <div class="testimonial-area fix section-paddingt">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-tittle text-center mt-30">
              <h2>Sertifikasi oleh</h2>
            </div>
          </div>
        </div>
        <div id="sertifikasi_ku" class="row justify-content-center mb-30">

        </div>
      </div>
    </div>
    <!-- SERTIFIKASI END -->

    <!-- CALL BACK -->
    <?php $this->load->view('components/request_callback'); ?>
    <!-- CALL BACK END -->
  </main>

  <!-- MODAL -->
  <div class="modal fade" id="modal_product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header text-center "><!-- d-block -->
          <h5 class="modal-title text-center w-100" id="exampleModalLabel">Pilihan produk kami</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-12 text-center">
                <button id="specials" class="spin circle pc" style="background-image: url('<?php echo base_url(); ?>assets/img/products/2_Pin_Euro_Plug_M-006A1.png');" onclick="window.location.href='power-cord-series'">Power Cord</button>
              </div>
              <div class="col-md-6 col-sm-12 text-center">
                <button id="specials" class="spin circle wr" style="background-image: url('<?php echo base_url(); ?>assets/img/products/Element_Wire_Assy.png');" onclick="window.location.href='wiring-assy-series'">Wiring Assy</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- MODAL END -->

  <!-- FOOTER BOF -->
  <?php $this->load->view('components/footer'); ?>
  <!-- FOOTER BOF -->

  <!-- JS BOF -->
  <?php $this->load->view('components/footer_js'); ?>
  <!-- JS BOF -->
  <script type="text/javascript">
    function sertified_list() {
      $.ajax({
        url: "<?php echo base_url(); ?>api/serified_list",
        type: 'POST',
        dataType: 'JSON',
        beforeSend: function() {

        },
        success: function(data) {
          var items = [];
          data.data.forEach((elemen, indeks, array) => {
            items.push('<div class="col-xl-2 col-lg-2 col-md-2 col-sm-4 text-center mb-30">' +
              '<img src="<?php echo API_URL; ?>upload/sertified_images/' + elemen.images + '" title="' + elemen.nama + '" class="img-logo-sni">' +
              '</div>')
          });

          $("#sertifikasi_ku").html(items);
        }
      });
    }

    function trusted_list() {
      $.ajax({
        url: "<?php echo base_url(); ?>api/trusted_list",
        type: 'POST',
        dataType: 'JSON',
        beforeSend: function() {

        },
        success: function(data) {
          var items = [];

          // items.push('<div class="col-xl-7 col-lg-7">' +
          //   '<div class="trusted-img">' +
          //   '<img src="<?php echo API_URL; ?>upload/trust_images/' + data.data.images + '" alt="<?php echo $company_profile->data->logo_name; ?>">' +
          //   '</div>' +
          //   '</div>' +
          //   '<div class="col-xl-5 col-lg-5">' +
          //   '<div class="trusted-caption">' +
          //   '<h2>' + data.data.main_title + '</h2>' +
          //   '<p>' + data.data.sub_title + '</p>' +
          //   '<a href="<?php echo base_url(); ?>' + data.data.button_link + '" class="btn trusted-btn btn-more">' + data.data.button_text + '</a>' +
          //   '</div>' +
          //   '</div>');

          items.push('<h3>' + data.data.main_title + '</h3>' +
            '<p>' + data.data.sub_title + '</p>' +
            '<a href="<?php echo base_url(); ?>' + data.data.button_link + '" class="border-btn border-btn2 btn-more">' + data.data.button_text + '</a>');

          $(".trusted-area").html(items);
        }
      });
    };

    function sinopsis_list() {
      $.ajax({
        url: "<?php echo base_url(); ?>api/sinopsis_list",
        type: 'POST',
        dataType: 'JSON',
        beforeSend: function() {

        },
        success: function(data) {
          var items = [];

          data.data.forEach((elemen, indeks, array) => {
            const link = "'" + "<?php echo base_url(); ?>" + elemen.link + "'";
            const newTab = "'" + "_blank" + "'";

            if (elemen.types == 'IMAGES') {
              items.push('<div class="col-xl-4 col-lg-4 col-md-6">' +
                '<div class="single-profile mb-30">' +
                '<div class="single-profile-front">' +
                '<div class="profile-img" onclick="window.open(' + link + ', ' + newTab + ')" style="cursor:pointer;">' +
                '<img src="<?php echo API_URL; ?>upload/sinopsis_images/' + elemen.product_images + '" alt="<?php echo $company_profile->data->logo_name; ?>">' +
                '</div>' +
                '<div class="profile-caption">' +
                '<h4>' +
                '<a href="<?php echo base_url(); ?>' + elemen.link + '">' + elemen.product_name + '</a>' +
                '</h4>' +
                '<p>' + elemen.product_desc + '</p>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>');
            } else {
              items.push('<div class="col-xl-4 col-lg-4 col-md-6">' +
                '<div class="single-profile mb-30">' +
                '<div class="single-profile-back-last">' +
                '<h2>' + elemen.product_name + '</h2>' +
                '<p>' + elemen.product_desc + '</p>' +
                '<a href="<?php echo base_url(); ?>' + elemen.link + '">View profile »</a>' +
                '</div>' +
                '</div>' +
                '</div>');
            }
          });

          $("#sinopsisku").html(items);
        }
      });
    };

    function tag_list() {
      $.ajax({
        url: "<?php echo base_url(); ?>api/tag_list",
        type: 'POST',
        dataType: 'JSON',
        beforeSend: function() {

        },
        success: function(data) {
          var items = [];

          if (data.data.length > 0) {

            data.data.forEach((elemen, indeks, array) => {
              items.push('<div class="col-xl-4 col-lg-4 col-md-6">' +
                '<div class="single-services text-center mb-30">' +
                '<div class="services-icon">' +
                '<span class="' + elemen.icon + '"></span>' +
                '</div>' +
                '<div class="services-caption">' +
                '<h4>' + elemen.main_title + '</h4>' +
                '<p>' + elemen.sub_title + '</p>' +
                '</div>' +
                '</div>' +
                '</div>');
            });
          } else {
            items.push('<div class="col-xl-4 col-lg-4 col-md-6">' +
              '<div class="single-services text-center mb-30">' +
              '<div class="services-icon">' +
              '<span class="flaticon-audit"></span>' +
              '</div>' +
              '<div class="services-caption">' +
              '<h4></h4>' +
              '<p>' + data.message + '</p>' +
              '</div>' +
              '</div>' +
              '</div>');
          }

          $("#layananku").html(items);
        }
      });
    };

    $(document).ready(function() {

      $('#myButton textarea').attr('id', 'kirim_pesan');
      $('#myButton textarea').attr('name', 'kirim_pesan');

      trusted_list();
      sinopsis_list();
      tag_list();
      sertified_list();

      $.getJSON("<?php echo base_url(); ?>api/produk_mix_list_top_ten", function(data) {
        var items = [];
        $.each(data.data, function(key, val) {

          const link = "'" + "<?php echo base_url(); ?>" + "view/" + val.slug + "'";
          const newTab = "'" + "_blank" + "'";


          items.push('<div class="single-cases-img" title="' + val.jenis_produk + ' : ' + val.nama_produk + '" onclick="window.open(' + link + ', ' + newTab + ')">' +
            '<img src="<?php echo API_URL; ?>upload/produk_images/' + val.images + '" alt="<?php echo $company_profile->data->nama; ?>">' +
            '<div class="single-cases-cap">' +
            '<h4><a href="<?php echo base_url(); ?>view/' + val.slug + '" target="_blank">' + val.nama_produk + '</a></h4>' +
            '<p>' + val.jenis_produk + '</p>' +
            '<span>' + val.nominal_voltage + '</span>' +
            '</div>' +
            '</div>');
        });

        $(".completed-active").html(items);

        var client_list = $('.completed-active');
        if (client_list.length) {
          client_list.owlCarousel({
            slidesToShow: 2,
            slidesToScroll: 1,
            loop: true,
            autoplay: true,
            speed: 1000,
            smartSpeed: 1000,
            nav: true,
            navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
            dots: false,
            margin: 30,
            autoplayHoverPause: true,
            responsive: {
              0: {
                items: 1
              },
              768: {
                items: 2
              },
              992: {
                items: 3
              },
              1200: {
                items: 3
              }
            }
          });
        }
      });

      $.getJSON("<?php echo base_url(); ?>api/slider_list", function(data) {
        var contents = [];
        $.each(data.data, function(key, val) {
          contents.push(
            '<div class="single-slider slider-height d-flex align-items-center" data-background="<?php echo API_URL; ?>upload/slider_images/' + val.slider_image + '">' +
            '<div class="container">' +
            '<div class="row">' +
            '<div class="col-xl-6 col-lg-6 col-md-8">' +
            '<div class="hero__caption">' +
            '<p data-animation="fadeInLeft" data-delay=".4s">' +
            val.main_title +
            '</p>' +
            '<h1 data-animation="fadeInLeft" data-delay=".6s">' +
            val.sub_title +
            '</h1>' +
            '<div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s">' +
            '<a href="<?php echo base_url(); ?>' + val.button_link + '" class="btn hero-btn">' + val.button_text + '</a>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>');
        });

        $(".slider-active").html(contents);

        var BasicSlider = $('.slider-active');
        BasicSlider.on('init', function(e, slick) {
          var $firstAnimatingElements = $('.single-slider:first-child').find('[data-animation]');
          doAnimations($firstAnimatingElements);
        });
        BasicSlider.on('beforeChange', function(e, slick, currentSlide, nextSlide) {
          var $animatingElements = $('.single-slider[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
          doAnimations($animatingElements);
        });
        BasicSlider.slick({
          autoplay: false,
          autoplaySpeed: 10000,
          dots: false,
          fade: true,
          arrows: true,
          prevArrow: '<button type="button" class="slick-prev"><i class="ti-shift-left"></i></button>',
          nextArrow: '<button type="button" class="slick-next"><i class="ti-shift-right"></i></button>',
          responsive: [{
              breakpoint: 1024,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
              }
            },
            {
              breakpoint: 991,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false
              }
            },
            {
              breakpoint: 767,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false
              }
            }
          ]
        });

        function doAnimations(elements) {
          var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
          elements.each(function() {
            var $this = $(this);
            var $animationDelay = $this.data('delay');
            var $animationType = 'animated ' + $this.data('animation');
            $this.css({
              'animation-delay': $animationDelay,
              '-webkit-animation-delay': $animationDelay
            });
            $this.addClass($animationType).one(animationEndEvents, function() {
              $this.removeClass($animationType);
            });
          });
        };

        $("[data-background]").each(function() {
          $(this).css("background-image", "url(" + $(this).attr("data-background") + ")")
        });
      });

      $.getJSON("<?php echo base_url(); ?>api/our_customer_list", function(data) {
        var items = [];
        $.each(data.data, function(key, val) {
          items.push('<li class="col-lg-12 col-md-12 col-sm-12" title="' + val.nama + '">' +
            '<img src="<?php echo API_URL; ?>upload/pelanggan_images/' + val.logo + '" class="customer_logo" alt="Customer <?php echo $company_profile->data->nama; ?>">' +
            '</li>');
        });

        $(".completed-actived").html(items);

        var client_list = $('.completed-actived');
        if (client_list.length) {
          client_list.owlCarousel({
            slidesToShow: 2,
            slidesToScroll: 1,
            loop: true,
            autoplay: true,
            speed: 1000,
            smartSpeed: 1000,
            nav: true,
            navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
            dots: false,
            margin: 15,
            autoplayHoverPause: true,
            responsive: {
              0: {
                items: 1
              },
              768: {
                items: 3
              },
              992: {
                items: 3
              },
              1200: {
                items: 3
              }
            }
          });
        }
      });
    });
  </script>
</body>

</html>