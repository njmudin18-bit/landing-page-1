<footer>
  <div class="footer-area footer-padding">
    <div class="container">
      <div class="row d-flex justify-content-between">
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
          <div class="single-footer-caption mb-50">
            <div class="single-footer-caption mb-30">

              <div class="footer-logo">
                <!--  <a href="<?php //echo base_url(); 
                                ?>">
                  <img src="<?php //echo base_url(); 
                            ?>assets/img/logo/<?php //echo $this->config->item('company_logo'); 
                                              ?>" alt="<?php //echo $company_profile->data->alamat; 
                                                        ?>">
                </a> -->
                <a href="<?php echo base_url(); ?>">
                  <img src="<?php echo API_URL; ?>upload/general_images/<?php echo $company_profile->data->logo_name; ?>" alt="<?php echo $company_profile->data->alamat; ?>">
                </a>
              </div>
              <div class="footer-tittle">
                <div class="footer-pera">
                  <p><?php echo $this->config->item('company_short_profile'); ?></p>
                </div>
              </div>

              <div class="footer-social">
                <!-- <a href="#"><i class="fab fa-facebook-square"></i></a>
                <a href="#"><i class="fab fa-twitter-square"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-pinterest-square"></i></a> -->
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12">
          <div class="single-footer-caption mb-50">
            <div class="footer-tittle">
              <h4>Company</h4>
              <ul>
                <li><a href="<?php echo base_url(); ?>">Beranda</a></li>
                <li>
                  <a href="#" class="mb-20">Tentang Kami</a>
                  <ol class="ordered-list">
                    <li><a href="<?php echo base_url(); ?>company-profile">- Profil Perusahaan</a></li>
                    <li><a href="<?php echo base_url(); ?>visi-dan-misi">- Visi dan Misi</a></li>
                    <li><a href="<?php echo base_url(); ?>our-customer">- Pelanggan Kami</a></li>
                    <li><a href="<?php echo base_url(); ?>test-kit">- Fasilitas Uji</a></li>
                  </ol>
                </li>
                <li><a href="<?php echo base_url(); ?>career">Karir</a></li>
                <li><a href="<?php echo base_url() ?>contact-us">Kontak Kami</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-lg-3 col-md-6 col-sm-12">
          <div class="single-footer-caption mb-50">
            <div class="footer-tittle">
              <h4>Produk</h4>
              <ul>
                <li><a href="<?php echo base_url(); ?>power-cord-series">Power Cord Series</a></li>
                <li><a href="<?php echo base_url(); ?>wiring-assy-series">Wiring Assy</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-3 col-md-6 col-sm-12">
          <div class="single-footer-caption mb-50">
            <div class="footer-tittle">
              <h4>Terhubung dengan kami</h4>
              <ul>
                <li>Phone : <a href="tel:<?php echo $company_profile->data->telepon; ?>"><?php echo $company_profile->data->telepon; ?></a></li>
                <li>Fax : <a href="tel:<?php echo $company_profile->data->fax; ?>"><?php echo $company_profile->data->fax; ?></a></li>
                <li>Email : <a href="mailto:<?php echo $company_profile->data->email; ?>"> <span class="__cf_email__"><?php echo $company_profile->data->email; ?></span></a></li>
                <li><a href="https://www.google.com/maps/place/PT.+MULTI+ARTA+SEKAWAN/@-6.2195932,106.4912309,17z/data=!3m1!4b1!4m6!3m5!1s0x2e4200d0d49aadeb:0x5c5bd12989d99803!8m2!3d-6.2195985!4d106.4934196!16s%2Fg%2F11fy4gt674" target="_blank"><?php echo $company_profile->data->alamat; ?></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom-area footer-bg">
    <div class="container">
      <div class="footer-border">
        <div class="row d-flex align-items-center">
          <div class="col-xl-12 ">
            <div class="footer-copy-right text-center">
              <p>
                Copyright &copy;<script>
                  document.write(new Date().getFullYear());
                </script> <a href="#"><?php echo $company_profile->data->nama; ?></a> - All rights reserved.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>