<style>
  .main-header .main-menu ul ul.submenu>li.sub-active>a {
    color: #e87722 !important;
  }
</style>
<header>
  <div class="header-area">
    <div class="main-header ">
      <div class="header-top top-bg d-none d-lg-block">
        <div class="container-fluid">
          <div class="col-xl-12">
            <div class="row d-flex justify-content-between align-items-center">
              <div class="header-info-left">
                <ul>
                  <li>
                    <a href="https://www.google.com/maps/place/PT.+MULTI+ARTA+SEKAWAN/@-6.2195932,106.4912309,17z/data=!3m1!4b1!4m6!3m5!1s0x2e4200d0d49aadeb:0x5c5bd12989d99803!8m2!3d-6.2195985!4d106.4934196!16s%2Fg%2F11fy4gt674" target="_blank">
                      <i class="fas fa-map-marker-alt"></i><?php echo $company_profile->data->alamat; ?>
                    </a>
                  </li>
                  <!-- <li><i class="fas fa-envelope"></i><a href="mailto:sales@omas-mfg.com" class="__cf_email__">sales@omas-mfg.com</a></li> -->
                </ul>
              </div>
              <div class="header-info-right">
                <ul class="header-social">
                  <li><a href="mailto:<?php echo $company_profile->data->email; ?>" class="__cf_email__X"><i class="fas fa-envelope" style="margin-right: 8px;"></i><?php echo $company_profile->data->email; ?></a></li>
                  <!-- <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li> <a href="#"><i class="fab fa-google-plus-g"></i></a></li> -->
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="header-bottom  header-sticky">
        <div class="container-fluid">
          <div class="row align-items-center">

            <div class="col-xl-2 col-lg-1 col-md-1">
              <div class="logo">
                <!-- <a href="<?php //echo base_url(); 
                              ?>">
                  <img src="<?php //echo base_url(); 
                            ?>assets/img/logo/<?php //echo $this->config->item('company_logo'); 
                                              ?>" alt="<?php // $company_profile->data->nama; 
                                                        ?>">
                </a> -->
                <a href="<?php echo base_url(); ?>">
                  <img src="<?php echo API_URL; ?>upload/general_images/<?php echo $company_profile->data->logo_name; ?>" alt="<?php echo $company_profile->data->nama; ?>">
                </a>
              </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-8">

              <div class="main-menu f-right d-none d-lg-block">
                <nav>
                  <ul id="navigation">
                    <li class="<?php echo $this->router->method == 'index' ? 'active' : '' ?>">
                      <a href="<?php echo base_url(); ?>">Beranda</a>
                    </li>
                    <?php
                    $class_tk   = "";
                    if (
                      $this->router->method == 'company_profile' ||
                      $this->router->method == 'visi_dan_misi' ||
                      $this->router->method == 'our_customer' ||
                      $this->router->method == 'test_kit'
                    ) {
                      $class_tk   = "active";
                    } else {
                      $class_tk   = "";
                    }
                    ?>
                    <li class="<?php echo $class_tk; ?>">
                      <a href="#">Tentang kami</a>
                      <ul class="submenu">
                        <li class="<?php echo $this->router->method == 'company_profile' ? 'sub-active' : ''; ?>">
                          <a href="<?php echo base_url(); ?>company-profile">Profil Perusahaan</a>
                        </li>
                        <li class="<?php echo $this->router->method == 'visi_dan_misi' ? 'sub-active' : ''; ?>">
                          <a href="<?php echo base_url(); ?>visi-dan-misi">Visi dan Misi</a>
                        </li>
                        <li class="<?php echo $this->router->method == 'our_customer' ? 'sub-active' : ''; ?>">
                          <a href="<?php echo base_url(); ?>our-customer">Pelanggan Kami</a>
                        </li>
                        <li class="<?php echo $this->router->method == 'test_kit' ? 'sub-active' : ''; ?>">
                          <a href="<?php echo base_url(); ?>test-kit">Fasilitas Uji</a>
                        </li>
                      </ul>
                    </li>
                    <li class="<?php echo $this->router->method == 'power_cord_series' ? "active" : ($this->router->method == 'wiring_assy' ? "active" : ""); ?>">
                      <a href="#">Produk</a>
                      <ul class="submenu">
                        <li class="<?php echo $this->router->method == 'power_cord_series' ? 'sub-active' : ''; ?>">
                          <a href="<?php echo base_url(); ?>power-cord-series">Power Cord Series</a>
                        </li>
                        <li class="<?php echo $this->router->method == 'wiring_assy' ? 'sub-active' : ''; ?>">
                          <a href="<?php echo base_url(); ?>wiring-assy-series">Wiring Assy. Series</a>
                        </li>
                      </ul>
                    </li>
                    <li class="<?php echo $this->router->method == 'career' ? 'active' : '' ?>">
                      <a href="<?php echo base_url(); ?>career">Karir</a>
                    </li>
                    <!-- <li>
                      <a href="#">E-Katalog</a>
                      <ul class="submenu">
                        <li><a href="#">Power Cord Series</a></li>
                        <li><a href="#">Wiring Assy</a></li>
                      </ul>
                    </li> -->
                    <li class="<?php echo $this->router->method == 'contact_us' ? 'active' : '' ?>">
                      <a href="<?php echo base_url() ?>contact-us">Kontak kami</a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-3">
              <div class="header-right-btn f-right d-none d-lg-block">
                <a href="#" class="btn header-btn">Contact Now</a>
              </div>
            </div>

            <div class="col-12">
              <div class="mobile_menu d-block d-lg-none"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>