<div id="preloader-active">
  <div class="preloader d-flex align-items-center justify-content-center">
    <div class="preloader-inner position-relative">
      <div class="preloader-circle"></div>
      <div class="preloader-img pere-text">
        <!-- <img src="<?php //echo base_url(); ?>assets/img/icons/<?php echo $this->config->item('company_icon_bar'); ?>" alt=""> -->

        <img src="<?php echo API_URL; ?>upload/general_images/<?php echo $company_profile->data->icon_name; ?>" alt="<?php echo $company_profile->data->nama; ?>">
      </div>
    </div>
  </div>
</div>