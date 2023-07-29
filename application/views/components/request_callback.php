<div id="call-back"></div>

<div id="request-area" class="request-back-area section-padding30">
  <div class="container">
    <div class="row d-flex justify-content-between">
      <div class="col-xl-4 col-lg-5 col-md-5">
        <div class="request-content">
          <h3>Request for Call Back</h3>
          <p>Lengkapi dan submit form pelanggan di samping dan Tim sales kami akan menghubungi anda, diwaktu yang nyaman bagi anda.</p>
        </div>
      </div>
      <div class="col-xl-7 col-lg-7 col-md-7">

        <div class="form-wrapper">
          <form id="call_back_form" action="#" method="POST">
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="form-box  mb-30">
                  <input type="text" name="name_cb" placeholder="Nama" class="text-white text-capitalize" autocomplete="off" maxlength="75">
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="form-box mb-30">
                  <input type="text" name="phone_cb" placeholder="Telepon" class="text-white" autocomplete="off" onkeypress="return isNumber(event)" maxlength="17">
                </div>
              </div>
              <div class="col-lg-8 col-md-8 mb-30">
                <div class="select-itms">
                  <select name="pertanyaan_cb" id="select1" class="text-white">
                    <option value="Pertanyaan seputar produk">Pertanyaan seputar produk</option>
                    <option value="Cara memesan produk">Cara memesan produk</option>
                    <option value="Diskusi dengan tim sales">Diskusi dengan tim sales</option>
                    <option value="Hubungi saya">Hubungi saya</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-4 col-md-4">
                <button type="submit" id="btn_cb_send" class="send-btn">Kirim</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- WA ELEMENT -->
<div id="myButton"></div>

<!-- LOADER -->
<div class="loading">Loading&#8230;</div>