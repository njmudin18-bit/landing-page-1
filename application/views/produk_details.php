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
  <link rel="canonical" href="<?php echo base_url(); ?>view/<?php echo $slug; ?>" />

  <meta name="title" content="<?php echo $nama_halaman; ?> - <?php echo $company_profile->data->nama; ?>">
  <meta name="description" content="<?php echo $produk_details; ?> - <?php echo $company_profile->data->nama; ?>">
  <meta name="subject" content="<?php echo $company_profile->data->nama; ?>">
  <meta name="language" content="ID">
  <meta name="author" content="<?php echo $company_profile->data->nama; ?>">
  <meta name="designer" content="IT Department - <?php echo $company_profile->data->nama; ?>">
  <meta name="copyright" content="Copyright &copy; <?php echo $company_profile->data->nama; ?>">
  <meta name="url" content="<?php echo base_url(); ?>view/<?php echo $slug; ?>">
  <meta name="identifier-URL" content="<?php echo base_url(); ?>view/<?php echo $slug; ?>">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo base_url(); ?>view/<?php echo $slug; ?>">
  <meta property="og:title" content="<?php echo $nama_halaman; ?> - <?php echo $company_profile->data->nama; ?>">
  <meta property="og:description" content="<?php echo $this->config->item('company_short_profile'); ?>">
  <meta property="og:image" content="<?php echo API_URL; ?>upload/general_images/<?php echo $company_profile->data->logo_name; ?>">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="<?php echo base_url(); ?>view/<?php echo $slug; ?>">
  <meta property="twitter:title" content="<?php echo $nama_halaman; ?> - <?php echo $company_profile->data->nama; ?>">
  <meta property="twitter:description" content="PT. Multi Arta Sekawan merupakan Perusahaan manufaktur untuk mensupply kabel stecker dan rangkaian kabel kepada perusahaan - perusahaan yang memproduksi alat - alat listrik rumah tangga terutama di Indonesia.">
  <meta property="twitter:image" content="<?php echo API_URL; ?>upload/general_images/<?php echo $company_profile->data->logo_name; ?>">

  <!-- LOADER BOF -->
  <?php $this->load->view('components/header_css'); ?>
  <!-- LOADER EOF -->
  <!-- zoomio CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/zoom-image-on-mouseover-using-jquery/css/zoomio.css">
</head>

<body>

  <!-- LOADER BOF -->
  <?php $this->load->view('components/loader'); ?>
  <!-- LOADER EOF -->

  <!-- HEADER BOF -->
  <?php $this->load->view('components/navbar'); ?>
  <!-- HEADER EOF -->

  <main>
    <?php //$this->load->view('components/slider_page'); 
    ?>
    <div class="slider-area ">
      <div class="single-slider slider-height2 d-flex align-items-center" data-background="<?php echo base_url(); ?>assets/img/hero/Industries_hero.jpg">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="hero-cap text-center">
                <h2><?php echo $produk_details; ?></h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="blog_area section-padding product_details">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mb-5 mb-lg-0">
            <div class="blog_left_sidebar">
              <article class="blog_item">
                <div class="blog_item_img">
                  <img class="card-img rounded-0 sampleimage" src="<?php echo API_URL; ?>upload/produk_images/<?php echo $product_images; ?>" alt="<?php echo $company_profile->data->nama; ?>">
                </div>
                <div class="blog_details">
                  <a class="d-inline-block" href="#">
                    <h2><?php echo $produk_details; ?></h2>
                  </a>
                  <table class="table table-responsive">
                    <thead>
                      <tr class="background-yellow">
                        <th>Deskripsi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <h6 class="mb-20">Nominal Voltage</h6>
                          <div class="mb-20">
                            <ul class="unordered-list">
                              <li><?php echo $nominal_voltage; ?></li>
                            </ul>
                          </div>

                          <h6 class="mb-20">Available Types</h6>
                          <div class="mb-20">
                            <ul class="unordered-list">
                              <?php foreach ($available_type as $key => $value) : ?>
                                <li><?php echo $value; ?></li>
                              <?php endforeach ?>
                            </ul>
                          </div>

                          <h6 class="mb-20">Applicable Standard</h6>
                          <div class="mb-20">
                            <ul class="unordered-list">
                              <li>Other Specification are available on request</li>
                            </ul>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <ul class="blog-info-link">
                    <li>
                      <a href="<?php echo base_url(); ?>download-catalogue" target="_blank" class="catalogue">
                        <button class=" btn red-btn text-white">Download E-Katalog <i class="ti-angle-double-right"></i></button>
                      </a>
                    </li>
                  </ul>
                </div>
              </article>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="blog_right_sidebar">
              <aside class="single_sidebar_widget post_category_widget">
                <h4 class="widget_title">Category</h4>
                <ul class="list cat-list">
                  <?php
                  foreach ($jenis_produk->data as $key => $value) :

                    $link = $value->jenis_produk == 'Power Cord' ? 'power-cord-series' : 'wiring-assy-series';
                  ?>
                    <li>
                      <a href="<?php echo base_url() . $link; ?>" class="d-flex" title="<?php echo $value->jenis_produk; ?>">
                        <p><?php echo $value->jenis_produk; ?></p>
                        <p>&nbsp;(<?php echo get_jumlah_produk($value->id); ?>)</p>
                      </a>
                    </li>
                  <?php endforeach ?>
                </ul>
              </aside>
              <aside id="produk_ku" class="single_sidebar_widget popular_post_widget">
              </aside>
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
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/zoom-image-on-mouseover-using-jquery/js/zoomio.js"></script>
  <!-- FOOTER BOF -->
  <script type="text/javascript">
    $(document).ready(function() {

      $('.sampleimage').zoomio();

      $.getJSON("<?php echo base_url(); ?>api/get_top_three_products", function(data) {
        var items = [];

        items.push('<h3 class="widget_title">Produk Kami</h3>');
        if (data.data.length > 0) {
          $.each(data.data, function(key, val) {

            const linkBerita = "'" + "<?php echo base_url(); ?>" + "view/" + val.slug + "'";
            const new_tab = "'_blank'";

            items.push('<div class="media post_item" onclick="window.open(' + linkBerita + ', ' + new_tab + ');" title="' + val.jenis_produk + ' : ' + val.nama_produk + '">' +
              '<img src="<?php echo API_URL; ?>upload/produk_images/' + val.images + '" alt="<?php echo $company_profile->data->nama; ?>" width="80" height="80">' +
              '<div class="media-body">' +
              '<a href="<?php echo base_url(); ?>view/' + val.slug + '" target="_blank">' +
              '<h3>' + val.nama_produk + '</h3>' +
              '</a>' +
              '<p>' + val.jenis_produk + '</p>' +
              '</div>' +
              '</div>');
          });
        } else {
          items.push('<div class="media post_item">' +
            '<img src="<?php echo base_url(); ?>assets/img/icons/image_na.jpg" alt=""<?php echo $company_profile->data->nama; ?>" width="80" height="80">' +
            '<div class="media-body">' +
            '<a href="#">' +
            '<h3>NOT FOUND</h3>' +
            '</a>' +
            '<p></p>' +
            '</div>' +
            '</div>');
        }

        $("#produk_ku").html(items);
      });

      $("[data-background]").each(function() {
        $(this).css("background-image", "url(" + $(this).attr("data-background") + ")")
      });
    });
  </script>
</body>

</html>