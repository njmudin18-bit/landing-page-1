<script src="<?php echo base_url(); ?>assets/js/vendor/modernizr-3.5.0.min.js"></script>

<script src="<?php echo base_url(); ?>assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

<script src="<?php echo base_url(); ?>assets/js/jquery.slicknav.min.js"></script>

<script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/slick.min.js"></script>

<script src="<?php echo base_url(); ?>assets/js/gijgo.min.js"></script>

<script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/animated.headline.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.magnific-popup.js"></script>

<script src="<?php echo base_url(); ?>assets/js/jquery.scrollUp.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.nice-select.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.sticky.js"></script>

<script src="<?php echo base_url(); ?>assets/js/contact.js"></script>
<?php //$this->load->view('adminx/components/contact_js'); 
?>

<script src="<?php echo base_url(); ?>assets/js/jquery.form.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/mail-script.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.ajaxchimp.min.js"></script>

<script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P5HG44T" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- WA CHAT -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/floating-whatsapp-master/floating-wpp.js"></script>
<script type="text/javascript">
  $(function() {
    $('#myButton').floatingWhatsApp({
      phone: '<?php echo $company_profile->data->handphone; ?>',
      popupMessage: 'Hi, ada yang bisa kami bantu?',
      message: "Hi, saya ingin bertanya mengenai PT. MAS",
      showPopup: true,
      showOnIE: false,
      headerTitle: 'Selamat Datang!',
      headerColor: '#008069',
      backgroundColor: '#008069',
      buttonImage: '<img src="<?php echo base_url(); ?>assets/plugins/floating-whatsapp-master/whatsapp.svg" />'
    });
  });

  //GLOBAL TOAST
  const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    //backdrop: 'swal2-backdrop-show',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  })

  //GLOBAL DOCUMENT READY
  $(document).ready(function() {
    $(".loading").hide();

    (function($) {
      // validate contactForm form
      $(function() {
        $('#call_back_form').validate({
          rules: {
            name_cb: {
              required: true,
              minlength: 3
            },
            phone_cb: {
              required: true,
              minlength: 5
            },
            pertanyaan_cb: {
              required: true
            }
          },
          messages: {
            name_cb: {
              required: "Nama wajib diisi",
              minlength: "Nama minimal 3 karakter"
            },
            phone_cb: {
              required: "Nomor Telepon wajib diisi",
              minlength: "Nomor Telepon minimal 5 karakter"
            },
            pertanyaan_cb: {
              required: "Pertanyaan wajib dipilih"
            }
          },
          submitHandler: function(form) {
            var data = $("#call_back_form").serialize();
            $.ajax({
              type: 'POST',
              url: "<?php echo base_url(); ?>api/save_call_back",
              data: data,
              beforeSend: function() {
                $("#error").fadeOut();
                $("#btn_cb_send").prop('disabled', true);
                $(".loading").show();
                $("#btn_cb_send").html('Saving....');
              },
              success: function(response) {
                var hasil = JSON.parse(response);
                if (hasil.status_code == 200) {
                  $('#call_back_form')[0].reset();
                } else {

                }
                Toast.fire({
                  icon: hasil.status,
                  title: hasil.message
                });

                $(".loading").hide();
                $("#btn_cb_send").prop('disabled', false);
                $("#btn_cb_send").html('Kirim sekarang');
              },
              error: function(jqXHR, textStatus, errorThrown) {
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
    })(jQuery)
  });
</script>