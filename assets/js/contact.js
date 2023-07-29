$(".header-btn").click(function() {
  $('html, body').animate({
    scrollTop: $("#call-back").offset().top
  }, 3000);
})


function isNumber(evt) {
  evt = (evt) ? evt : window.event;
  var charCode = (evt.which) ? evt.which : evt.keyCode;
  if (charCode > 31 && (charCode < 48 || charCode > 57)) {
      return false;
  }
  return true;
}

/*$(document).ready(function(){

  (function($) {
    "use strict";
    jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value)
    }, "type the correct answer -_-");

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
          number: {
            required: true,
            minlength: 5
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
          number: {
              required: "come on, you have a number, don't you?"
          },
          email: {
              required: "Email wajib diisi"
          },
          message: {
              required: "Pesan wajib diisi"
          }
        },
        submitHandler: function(form) {
          $(form).ajaxSubmit({
            type:"POST",
            data: $(form).serialize(),
            url: "<?php echo base_url(); ?>welcome/kirim_pesan",
            success: function() {
              $('#contactForm :input').attr('disabled', 'disabled');
              $('#contactForm').fadeTo( "slow", 1, function() {
                $(this).find(':input').attr('disabled', 'disabled');
                $(this).find('label').css('cursor','default');
                $('#success').fadeIn()
                $('.modal').modal('hide');
        	      $('#success').modal('show');
              })
            },
            error: function() {
              $('#contactForm').fadeTo( "slow", 1, function() {
                  $('#error').fadeIn()
                  $('.modal').modal('hide');
          	      $('#error').modal('show');
              })
            }
          })
        }
      })
  }) 
  })(jQuery)
})*/