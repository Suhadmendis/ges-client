
  <body>
  <?php include '../header.php' ?>
    <!-- #header -->

    <!-- start banner Area -->
    <section class="banner-area relative about-banner" id="home">
      <div class="overlay overlay-bg"></div>
      <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
          <div class="about-content col-lg-12">
            <h1 class="text-white">
              Contact Us
            </h1>
            <p class="text-white link-nav">
              <a href="index.html">Home </a>
              <span class="lnr lnr-arrow-right"></span>
              <a href="contact.html"> Contact Us</a>
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- End banner Area -->

    <!-- Start contact-page Area -->
    <section class="contact-page-area">
      <div class="map-wrap" style="width:100%; height: 445px;">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253489.46110292297!2d79.8033157430108!3d6.917740223517232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25bdf26e43db9%3A0x5f7c6c72c6a66e9e!2sGES%20International%20Recruitment%20(Pvt)%20Ltd!5e0!3m2!1sen!2slk!4v1584698799176!5m2!1sen!2slk"
          width="100%"
          height="450"
          frameborder="0"
          style="border:0;"
          allowfullscreen=""
          aria-hidden="false"
          tabindex="0"
        ></iframe>
      </div>
      <div class="container" style="margin-bottom: 6rem;">
        <div class="row">
          <div class="col-lg-4 d-flex flex-column address-wrap">
            <div class="single-contact-address d-flex flex-row">
              <div class="icon">
                <span class="lnr lnr-home"></span>
              </div>
              <div class="contact-details">
                <h5>Colpetty Campus</h5>
                <p>No. 375, R.A De Mel Mawatha, Colombo 03.<br /></p>
                <h5>Mount Campus</h5>
                <p>No. 330, Galle Road, Mount Lavinia<br /></p>
              </div>
            </div>
            <div class="single-contact-address d-flex flex-row">
              <div class="icon">
                <span class="lnr lnr-phone-handset"></span>
              </div>
              <div class="contact-details">
                <h5>+94766337377</h5>
                <p>Mon to Fri 9am to 6 pm</p>
              </div>
            </div>
            <div class="single-contact-address d-flex flex-row">
              <div class="icon">
                <span class="lnr lnr-envelope"></span>
              </div>
              <div class="contact-details">
                <h5>info@gesedu.lk</h5>
                <p>Send us your query anytime!</p>
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <form
              class="form-area contact-form text-right"
              id="myForm"
              action="mail.php"
              method="post"
            >
              <div class="row">
                <div class="col-lg-6 form-group">
                  <input
                    name="name"
                    placeholder="Enter your name"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter your name'"
                    class="common-input mb-20 form-control"
                    required=""
                    type="text"
                  />

                  <input
                    name="email"
                    placeholder="Enter email address"
                    pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter email address'"
                    class="common-input mb-20 form-control"
                    required=""
                    type="email"
                  />

                  <input
                    name="subject"
                    placeholder="Enter subject"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter subject'"
                    class="common-input mb-20 form-control"
                    required=""
                    type="text"
                  />
                </div>
                <div class="col-lg-6 form-group">
                  <textarea
                    class="common-textarea form-control"
                    name="message"
                    placeholder="Enter Messege"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter Messege'"
                    required=""
                  ></textarea>
                </div>
                <div class="col-lg-12">
                  <div class="alert-msg" style="text-align: left;"></div>
                  <button class="genric-btn primary" style="float: right;">
                    Send Message
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- End contact-page Area -->

    <!-- start footer Area -->
    <?php include '../footer.php' ?>
    <!-- End footer Area -->

    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/easing.min.js"></script>
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.tabs.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
