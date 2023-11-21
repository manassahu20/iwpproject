<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Manas Holidays,Adventure awaits!</title>

    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />

    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script> 
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
  </head>
  <body>
    <!-- header section starts  -->

    <header>
      <div id="menu-bar" class="fas fa-bars"></div>

      <a href="#" class="logo"><span>Manas</span> Holidays</a>

      

      <div class="icons">
        <i class="fas fa-user" id="login-btn"></i>
	<p id="Login">Login</p>
      </div>
      
      <div class="icons">
        <i class="fas fa-user" id="signup-btn"></i>
	<p id="Signup">Signup</p>
      </div>
    </header>

    <!-- header section ends -->

    <!-- login form container  -->

    

    <div class="login-form-container">
      <i class="fas fa-times" id="form-close"></i>

      <form action="login.php" method="POST">
        <h3>login</h3>
        <input type="email" name="email" class="box" placeholder="Enter your Email" />
        <input type="password" name="password" class="box" placeholder="Enter your Password" />
        <img src="captcha.php" />
        <input type="text" name="captcha" class="box" placeholder="Enter Captcha!"/>
        
        <input type="submit" value="Login now" class="btn" />
        <!-- <p>Don't have an account? <a href="">Please Sign up</a></p> -->
	 
	
      </form>
	
    </div>

	<!-- signup form container -->
	
      <div class="signup-form-container" ng-app="">
        <i class="fas fa-times" id="signupform-close"></i>

      <form action="signup.php" name="signupForm" method="post">
         <h3>Sign Up</h3>
	 <input type="text" name="name" ng-model="name" pattern="[a-zA-Z]{1,}" required="" class="box" placeholder="Enter your Name" />
	  <span ng-show="signupForm.$submitted || signupForm.name.$dirty">
            <span class="error" ng-show="signupForm.name.$error.required"><i class="fa fa-exclamation-circle"></i> Name Is A Required Field</span>
            <span class="error" ng-show="signupForm.name.$error.pattern"><i class="fa fa-exclamation-circle"></i> Invalid Name</span>
        </span><br>        
	 <input type="email" name="email" ng-model="email" pattern="^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$" required="" class="box" placeholder="Enter your Email" />
          <span ng-show="signupForm.$submitted || signupForm.name.$dirty">
            <span class="error" ng-show="signupForm.email.$error.required"><i class="fa fa-exclamation-circle"></i> Email Is A Required Field</span>
            <span class="error" ng-show="signupForm.email.$error.pattern"><i class="fa fa-exclamation-circle"></i> Invalid Email</span>
        </span><br>
         <input type="number" name="phone" ng-model="phone" ng-minlength="10" ng-maxlength="14" pattern="^[6-9]\d{9}$" required="" class="box" placeholder="Enter your Phone Number" />
        <span ng-show="signupForm.$submitted || signupForm.phone.$dirty">
            <span class="error" ng-show="signupForm.phone.$error.required"><i class="fa fa-exclamation-circle"></i> Phone Number Is A Required Field</span> 
            <span class="error" ng-show="signupForm.phone.$error.pattern"><i class="fa fa-exclamation-circle"></i> Invalid Phone Number</span>
        </span><br>
         <input type="password" name="password" ng-model="password" ng-minlength="5" ng-maxlength="10" class="box" required="" placeholder="Enter your Password" />
         <span ng-show="signupForm.$submitted || signupForm.password.$dirty">
	    <span class="error" ng-show="signupForm.password.$error.required"><i class="fa fa-exclamation-circle"></i> Password Is A Required Field</span>
            <span class="error" ng-show="((signupForm.password.$error.minlength || signupForm.password.$error.maxlength) &amp;&amp; signupForm.password.$dirty)"><i class="fa fa-exclamation-circle"></i> Password Should Be From 5 to 10 Characters</span>
        </span><br>
         <input type="submit" value="Register now" class="btn" onclick="signupsubmit()"  />
      </form>
    </div>
    <script>
       function signupsubmit(){
         swal("Signup Successful!","Please Login","success");
       }
    </script> 
     <div>

     </div>


    <!-- home section starts  -->

    <section class="home" id="home">
      <div class="content">
        <h3>Travel Is The Healthiest Addiction!</h3>
        <p>discover new places with us, adventure awaits</p>
        <!-- <a href="#packages" class="btn">discover more</a> -->
        <button class="btn" onclick="logerror()">discover more</button>
      </div>
       <script>
         function logerror(){
           swal("Please Login","","error");
         }
       </script>
      <div class="controls">
        <span class="vid-btn active" data-src="images/vid-8.mp4"></span>
        <span class="vid-btn" data-src="images/vid-6.mp4"></span>
        <span class="vid-btn" data-src="images/vid-3.mp4"></span>
        <span class="vid-btn" data-src="images/vid-7.mp4"></span>
        <span class="vid-btn" data-src="images/vid-5.mp4"></span>
      </div>

      <div class="video-container">
        <video
          src="images/vid-8.mp4"
          id="video-slider"
          loop
          autoplay
          muted
        ></video>
      </div>
    </section>

    <!-- home section ends -->

   
    <!-- services section starts  -->

    <section class="services" id="services">
      <h1 class="heading">
        <span>s</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>i</span>
        <span>c</span>
        <span>e</span>
        <span>s</span>
      </h1>

      <div class="box-container">
        <div class="box">
          <i class="fas fa-hotel"></i>
          <h3>Accomodation</h3>
          <p>
            We provide accomodation in 4 Star Hotels with all necessary
            facilities.
          </p>
        </div>
        <div class="box">
          <i class="fas fa-utensils"></i>
          <h3>food and drinks</h3>
          <p>
            We provide complimentary breakfast to all our travellers at the
            accomodated hotel.
          </p>
        </div>
        <div class="box">
          <i class="fas fa-bullhorn"></i>
          <h3>safety guide</h3>
          <p>
            Safety of our customers is our foremost priority, we don't
            compromise in it.
          </p>
        </div>
        <div class="box">
          <i class="fas fa-globe-asia"></i>
          <h3>around the world</h3>
          <p>
            We provide Service all around the world,For hustle free travel
            experience.
          </p>
        </div>
        <div class="box">
          <i class="fas fa-plane"></i>
          <h3>fastest travel</h3>
          <p>
            We provide the fastest mode for travelling through all modes
            available in that place.
          </p>
        </div>
        <div class="box">
          <i class="fas fa-hiking"></i>
          <h3>adventures</h3>
          <p>Our packages include all kinds of Adventure activities.</p>
        </div>
      </div>
    </section>

    <!-- services section ends -->

    <!-- gallery section starts  -->

    <section class="gallery" id="gallery">
      <h1 class="heading">
        <span>g</span>
        <span>a</span>
        <span>l</span>
        <span>l</span>
        <span>e</span>
        <span>r</span>
        <span>y</span>
      </h1>

      <div class="box-container">
        <div class="box">
          <img src="images/g-1.jpg" alt="" />
        </div>
        <div class="box">
          <img src="images/g-2.jpg" alt="" />
        </div>
        <div class="box">
          <img src="images/g-3.jpg" alt="" />
        </div>
        <div class="box">
          <img src="images/g-4.jpg" alt="" />
        </div>
        <div class="box">
          <img src="images/g-5.jpg" alt="" />
        </div>
        <div class="box">
          <img src="images/g-6.jpg" alt="" />
        </div>
        <div class="box">
          <img src="images/g-7.jpg" alt="" />
        </div>
        <div class="box">
          <img src="images/g-8.jpg" alt="" />
        </div>
        <div class="box">
          <img src="images/g-9.jpg" alt="" />
        </div>
      </div>
    </section>

    <!-- gallery section ends -->

    

    <!-- contact section starts  -->

    <section class="contact" id="contact">
      <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
      </h1>

      <div class="row">
        <div class="image">
          <img src="images/contactus.jpg" alt="" />
        </div>

        <form action="#" id="contact_form" method="post">
          <div class="inputBox">
            <input type="text" placeholder="Name" id="form_name"/>
	    <span class="error_form" id="name_error_message"></span>
            <input type="email" placeholder="Email" id="form_email"/>
	    <span class="error_form" id="email_error_message"></span>
          </div>
          <div class="inputBox">
            <input type="number" placeholder="Mobile Number" id="form_number"/>
	    <span class="error_form" id="number_error_message"></span>
            <input type="text" placeholder="Subject" id="form_subject"/>
	    <span class="error_form" id="subject_error_message"></span>
          </div>
          <textarea
            placeholder="Message"
            name=""
            id="form_message"
            cols="30"
            rows="10"
          ></textarea>
	  <span class="error_form" id="message_error_message"></span>
          <input type="submit" class="btn" value="send message" />
        </form>
      </div>
    </section>

    <script type="text/javascript">
      $(function() {

         $("#name_error_message").hide();
         $("#email_error_message").hide();
	 $("#number_error_message").hide();
	 $("#subject_error_message").hide();
         $("#message_error_message").hide(); 

         var error_name = false;
	 var error_email = false;
	 var error_number = false;
	 var error_subject = false;
         var error_message = false;

         $("#form_name").focusout(function(){
            check_name();
         });
	 $("#form_email").focusout(function() {
            check_email();
         });
 	 $("#form_number").focusout(function() {
            check_number();
         });
	 $("#form_subject").focusout(function() {
            check_subject();
         });
         $("#form_message").focusout(function() {
            check_message();
         });

         function check_name() {
            var pattern = /^[a-zA-Z]*$/;
            var name = $("#form_name").val();
            if (pattern.test(name) && name !== '') {
               $("#name_error_message").hide();
               $("#form_name").css("border-bottom","2px solid #34F458");
            } else {
               $("#name_error_message").html("Should contain only Characters");
               $("#name_error_message").show();
               $("#form_name").css("border-bottom","2px solid #F90A0A");
               error_name = true;
            }
         }

	 function check_email() {
            var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var email = $("#form_email").val();
            if (pattern.test(email) && email !== '') {
               $("#email_error_message").hide();
               $("#form_email").css("border-bottom","2px solid #34F458");
            } else {
               $("#email_error_message").html("Invalid Email");
               $("#email_error_message").show();
               $("#form_email").css("border-bottom","2px solid #F90A0A");
               error_email = true;
            }
         }
	 
	 function check_number() {
           var pattern = /^[6-9]\d{9}$/;
           var number = $("#form_number").val();
           if (pattern.test(number) && number !== '') {
              $("#number_error_message").hide();
              $("#form_number").css("border-bottom","2px solid #34F458");
            } else {
              $("#number_error_message").html("Invalid Mobile Number");
              $("#number_error_message").show();
              $("#form_number").css("border-bottom","2px solid #F90A0A");
              error_number = true;
            }
         }

	 function check_subject() {
           var subject = $("#form_subject").val();
           if (subject !== '') {
              $("#subject_error_message").hide();
              $("#form_subject").css("border-bottom","2px solid #34F458");
            } else {
              $("#subject_error_message").html("Subject Field Should Not Be Empty");
              $("#subject_error_message").show();
              $("#form_subject").css("border-bottom","2px solid #F90A0A");
              error_subject = true;
            }
         } 
	 
	 function check_message() {
           var message = $("#form_message").val();
           if (message !== '') {
              $("#message_error_message").hide();
              $("#form_message").css("border-bottom","2px solid #34F458");
            } else {
              $("#message_error_message").html("Message Should Not Be Empty");
              $("#message_error_message").show();
              $("#form_message").css("border-bottom","2px solid #F90A0A");
              error_message = true;
            }
         }

         $("#contact_form").submit(function() {
            error_name = false;
	    error_email = false;
	    error_number = false;
	    error_subject = false;
	    error_message = false;

            check_name();
 	    check_email();
	    check_number();
	    check_subject();
	    check_message();

            if (error_name === false && error_email === false && error_number === false && error_subject === false && error_message === false) {
               alert("Form Submission Successfull. We will be contacting you soon!");
               return true;
            } else {
               alert("Please Fill the form Correctly");
               return false;
            }


         });
      });
   </script>

    <!-- contact section ends -->

    <!-- footer section  -->

    <section class="footer">
      <div class="box-container">
        <div class="box">
          <h3>about us</h3>
          <p align="left">
            We Manas Holidays are a full integrated travel company that offers
            comprehensive solutions for all the business and leisure travelers
            across the world. This prestigious travel company in Chennai mainly
            aims to satisfy the client’s requirements with ultimate transparency
            and cost-effectiveness. We assure to offer round the clock support
            and assistance at any point of your travel.
          </p>
        </div>
        <div class="box">
          <h3>branch locations</h3>
          <a href="#">india</a>
          <a href="#">USA</a>
          <a href="#">japan</a>
          <a href="#">france</a>
        </div>
        <div class="box">
          <h3>quick links</h3>
          <a href="#home">home</a>
          <a href="#book">book</a>
          <a href="#packages">packages</a>
          <a href="#services">services</a>
          <a href="#gallery">gallery</a>
          <a href="#contact">contact</a>
        </div>
        <div class="box">
          <h3>follow us</h3>
          <a href="#">facebook</a>
          <a href="#">instagram</a>
          <a href="#">twitter</a>
          <a href="#">linkedin</a>
        </div>
      </div>

      <h1 class="credit">
        Created by <span> Manas </span> | All Rights Reserved!
      </h1>
    </section>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="script.js"></script>
  </body>
</html>