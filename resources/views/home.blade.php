@include('includes.header')

<div class="container" id="about_us">
    <!--Introduction Section-->
    <div class="jumbotron">
      <h3 class="text-center">About Us</h3>
      <p>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
      </p>

    </div>
  </div>
  <!--Introduction Section End-->
  <!-- Start Services -->
  <div class="container text-center border-bottom" id="services">
    <h2>Our Services</h2>
    <div class="row mt-4">
      <div class="col-sm-3 mb-4">
        <a href="#"><i class="fas fa-cogs fa-8x text-secondary"></i></a>
        <h4 class="mt-4">Fault Maintinance</h4>
      </div>
      <div class="col-sm-3 mb-4">
        <a href="#"><i class="fas fa-mobile fa-8x text-secondary"></i></a>
        <h4 class="mt-4">Software Mantinance</h4>
      </div><div class="col-sm-3 mb-4">
        <a href="#"><i class="fas fa-laptop fa-8x text-secondary"></i></a>
        <h4 class="mt-4">Software Mantinance</h4>
      </div>
      <div class="col-sm-3 mb-4">
        <a href="#"><i class="fas fa-sliders-h fa-8x text-secondary"></i></a>
        <h4 class="mt-4">Preventive Maintenance</h4>
      </div>
      
    </div>
  </div> <!-- End Services -->

  <!-- Start Happy Customer  -->
  <div style="background: #bdbdbd ;" class="jumbotron" id="customer">
    <!-- Start Happy Customer Jumbotron -->
    <div class="container">
      <!-- Start Customer Container -->
      <h2 class="text-center text-black">Our Customers</h2>
      <div class="row mt-5">
        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 1st Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/1.jpg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Rohit Kumar</h4>
              <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            </div>
          </div>
        </div> <!-- End Customer 1st Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 2nd Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/2.jpg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Pooja Yadav</h4>
              <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            </div>
          </div>
        </div> <!-- End Customer 2nd Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 3rd Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/3.jpg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Ritika Yadav</h4>
              <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            </div>
          </div>
        </div> <!-- End Customer 3rd Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 4th Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/4.jpg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Manoj Sinha</h4>
              <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            </div>
          </div>
        </div> <!-- End Customer 4th Column-->
      </div> <!-- End Customer Row-->
    </div> <!-- End Customer Container -->
  </div> <!-- End Customer Jumbotron -->

  <!--Start Contact Us-->
  <div class="container" id="contact">
    <!--Start Contact Us Container-->
    <h2 class="text-center mb-4">Contact Us</h2> <!-- Contact Us Heading -->
    <div class="row">

       <!--Start Contact Us Row-->
      @include('includes.contactform')
      <!-- End Contact Us 1st Column -->

      <div class="col-sm-4 text-center">
        <!-- Start Contact Us 2nd Column-->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.8316138986465!2d77.3535236144058!3d28.57481869344297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5961f589b79%3A0x830d4e4085f76372!2sNoida%20City%20Center%20Metro%20Parking!5e0!3m2!1sen!2sin!4v1621920293089!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div> <!-- End Contact Us 2nd Column-->
    </div> <!-- End Contact Us Row-->
  </div> <!-- End Contact Us Container-->
  <!-- End Contact Us -->

@include('includes.footer')
