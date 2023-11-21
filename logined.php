
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

    

    <header>
      <div id="menu-bar" class="fas fa-bars"></div>

      <a href="#" class="logo"><span>Manas</span> Holidays</a>

      <nav class="navbar">
        <a href="#home">home</a>
        <a href="#book">Enquire</a>
        <a href="#packages">packages</a>
        <a href="#services">services</a>
        <a href="#gallery">gallery</a>
        <a href="#contact">contact</a>
      </nav>

      
     <form action="index.php" method="post">
        <input style="cursor: pointer;" class="btn" type="submit" value="Log out" onclick="logout()">
     </form>
       
    </header>
    <script>
       function logout(){
         swal("Logged out successfully!","See you again :)","success");
       }
    </script> 
    <!-- header section ends -->

    
	 <!-- home section starts  -->

    <section class="home" id="home">
      <div class="content">
        <h3>Travel Is The Healthiest Addiction!</h3>
        <p>discover new places with us, adventure awaits</p>
        <a href="#packages" class="btn">discover more</a>
      </div>

  

      <div class="video-container">
        <video
          src="images/vid-9.mp4"
          id="video-slider"
          loop
          autoplay
          muted
        ></video>
      </div>
    </section>

    <!-- home section ends -->

    <!-- Enquiry section starts  -->

    <section class="book" id="book">
      <h1 class="heading">
        <span>E</span>
        <span>n</span>
        <span>q</span>
        <span>u</span>
        <span>i</span>
        <span>r</span>
        <span>e</span>
        <span class="space"></span>
        <span>n</span>
        <span>o</span>
        <span>w</span>
      </h1>

      <div class="row">
        <div class="image">
          <img src="images/enquiry.jpg" alt="Enquire Now" />
        </div>

        <form action="enquire.php" method="post">
          <div class="inputBox">
            <h3>where to</h3>
            <input type="text" name="destination" placeholder="Enter Name" />
          </div>
          <div class="inputBox">
            <h3>how many</h3>
            <input type="number" name="travellers" placeholder="Enter No. of Travellers" />
          </div>
          <div class="inputBox">
            <h3>Travel date</h3>
            <input type="date" name="date" />
          </div>
          <div class="inputBox">
            <h3>Phone number</h3>
            <input type="tel" name="phone" />
          </div>
          <input type="submit"  class="btn" value="Enquire now" onclick="enquirysubmit()" />
        </form>
      </div>
    </section>
    <script>
       function enquirysubmit(){
         swal("Enquiry sent successfully!","Our Representative will contact you shortly","success");
       }
    </script> 

    <!-- Enquiry section ends -->

    <!-- packages section starts  -->

    <section class="packages" id="packages">
      <h1 class="heading">
        <span>p</span>
        <span>a</span>
        <span>c</span>
        <span>k</span>
        <span>a</span>
        <span>g</span>
        <span>e</span>
        <span>s</span>
      </h1>

      <div class="box-container">
        <div class="box">
          <img src="images/p-1.jpg" alt="Mumbai" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i> mumbai</h3>
            <p>
              Mumbai is popularly known as the entertainment and financial
              capital. It is the largest city of India and fondly called as the
              city of dreams.
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="price">₹16000 <span>₹25500</span></div>
            <a href="#" class="btn">book now</a>
          </div>
        </div>

        <div class="box">
          <img src="images/p-2.jpg" alt="hawaii" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i> hawaii</h3>
            <p>
              Hawaii's spectacular beaches and lush valleys offer endless
              outdoor experiences, including surfing, skydiving, helicopter
              tours.
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="price">₹150000 <span>₹250000</span></div>
            <a href="#" class="btn">book now</a>
          </div>
        </div>

        <div class="box">
          <img src="images/p-3.jpg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i> sydney</h3>
            <p>
              Known for its luxury and high-end building,The most famous
              attractions include the Sydney Opera House, and the Sydney Harbour
              Bridge.
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="price">₹67400 <span>₹97400</span></div>
            <a href="sydney.php" class="btn">book now</a>
          </div>
        </div>

        <div class="box">
          <img src="images/p-4.jpg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i> paris</h3>
            <p>
              Europe's most enchanting city, Paris is known for its many
              monuments, especially the Eiffel Tower, Notre-Dame Cathedral, Arc
              de Triomphe, etc.
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="price">₹250000 <span>₹330000</span></div>
            <a href="#" class="btn">book now</a>
          </div>
        </div>

        <div class="box">
          <img src="images/p-5.jpg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i> tokyo</h3>
            <p>
              Tokyo offers a seemingly unlimited choice of shopping,
              entertainment, culture and dining to its visitors.
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="price">₹350000 <span>₹400000</span></div>
            <a href="#" class="btn">book now</a>
          </div>
        </div>

        <div class="box">
          <img src="images/p-6.jpg" alt="Bali" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i> Bali</h3>
            <p>
              Just one of many beautiful tropical islands that combine to make up Indonesia,
              Bali is full of stunning locations, rich culture & exciting activities.
    
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>


            <div class="price">₹57400 <span>₹87400</span></div>
            <a href="bali.php" class="btn">book now</a>
          </div>
        </div>
      </div>
    </section>

    <!-- packages section ends -->

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

    <!-- review section starts  -->

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

        <form action="contact.php" id="contact_form" method="post">
          <div class="inputBox">
            <input type="text" name="name" placeholder="Name" id="form_name"/>
	    <span class="error_form" id="name_error_message"></span>
            <input type="email" name="email" placeholder="Email" id="form_email"/>
	    <span class="error_form" id="email_error_message"></span>
          </div>
          <div class="inputBox">
            <input type="number" name="phone" placeholder="Mobile Number" id="form_number"/>
	    <span class="error_form" id="number_error_message"></span>
            <input type="text" name="subject" placeholder="Subject" id="form_subject"/>
	    <span class="error_form" id="subject_error_message"></span>
          </div>
          <textarea
            placeholder="Message"
            name="message"
            id="form_message"
            cols="30"
            rows="10"
          ></textarea>
	  <span class="error_form" id="message_error_message"></span>
          <input type="submit" class="btn" value="send message" />
        </form>
      </div>
    </section>
    >

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
              swal("Message sent Successfully","Thankyou for Contacting Manas Holidays","success");
               return true;
            } else {
               swal("Oops!","Please Fill the form Correctly","error");
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