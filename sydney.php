<html>
  <head>
<title>Sydney</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="style.css">
 <link
   rel="stylesheet"
   href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
  />
  <link
    rel="stylesheet"
    href="https://unpkg.com/swiper/swiper-bundle.min.css"
   />

<style>
body {font-family: 'Roboto', sans-serif;}
:root{
  --orange:#ffa500;
}
h1, h2, h3, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
}
h4{
  font-family: "Playfair Display";
  letter-spacing: 5px;
  color:var(--orange);
}
.box{
    display: flex;
    width:200%;
    margin-top: 50px;
}
.img{
    margin-right: 30px;
}
#hd{
    color: #EE3623;
}
.btn{
 display: inline-block;
  margin-top: 1rem;
  background:var(--orange);
  color:#fff;
  padding:.8rem 3rem;
  border:.2rem solid var(--orange);
  cursor: pointer;
  font-size: 1.7rem;
}

.btn:hover{
   background:rgba(255, 165, 0,.2);
   color:var(--orange);
}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
body {
  background-image: url("imagesdemo/background2.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  text-align: center;
}
hr{
  height: 1px;
  background-color: black;
}
#form1{
display: inline-block;
background-color: #333;
}
</style>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<script type="text/javascript">
function calculate_amount()
{
	var traveller=document.getElementById("travellers").value;
	var final_amount=traveller*67400;
	document.getElementById("amount").innerHTML=("The Amount to be Paid is: Rs."+final_amount);
}
</script>
<!-- Navbar (sit on top) -->
<header>
      <div id="menu-bar" class="fas fa-bars"></div>

      <a href="/logined" class="logo"><span>Manas</span> Holidays</a>
	<a href="#" class="logo"><span><h1>Sydney</h1></span></a>
      <nav class="navbar">
        <a href="#about">About</a>
        <a href="#places">Places To Visit</a>
        <a href="#things">Things To Do</a>
	<a href="#location">Location</a>
        <a href="#book">Book Now</a>
      </nav>
</header>
  <img class="center" src="imagesdemo/sydney_1.jpg" alt="Bali Image" width="500" height="500">
<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="imagesdemo/about_sydney.jpg" class="w3-round w3-image w3-opacity-min" alt="" width="600" height="150">
    </div>

    <div class="w3-col m6 w3-padding-large">
      <h7 class="heading1" id="hd">
	<span>ABOUT</span>
	<span class="space"></span>
	<span>s</span>
	<span>y</span>
	<span>d</span>
	<span>n</span>
	<span>e</span>
	<span>y</span>
	</h7><br>
      <p class="w3-large">Sydney, city, capital of the state of New South Wales, Australia. Located on Australia’s southeastern coast, 
	Sydney is the country’s largest city and, with its magnificent harbour and strategic position, is one of the most important ports in the South Pacific.</p><br>
      <p class="w3-large w3-text-grey w3-hide-medium">
          Package costs Rs. 67400 for 5 Nights & 6 Days</p>
    </div>
  </div>
  
  <hr>
  
  <!-- Menu Section -->
  <div class="w3-row w3-padding-64" id="places">
    <div class="w3-col l6 w3-padding-large">
        <h1 class="heading1">
	<span>p</span>
	<span>l</span>
	<span>a</span>
	<span>c</span>
	<span>e</span>
	<span>s</span>
	<span class="space"></span>
	<span>t</span>
	<span>o</span>
	<span class="space"></span>
	<span>v</span>
	<span>i</span>
	<span>s</span>
	<span>i</span>
	<span>t</span>
	</h1><br>
        <div class="box">
            <div>
      <h4>Manly Beach</h4>
      <p class="w3-text-grey">Manly in Sydney, is a wonderful destination for tourists and presents a harmonious balance of both urban sophistication and carefree beach life.
     Enjoying a great view, a wonderful swimming experience, surf, and sand or some fun time with kids’ making sand castles, Manly is the beach to hit. Manly is approachable 
     from many directions, and one can also take ferries from Circular Quay to the Manly Wharf. It is also possible to club the carefree playtime
     with some fine dining and shopping because Manly has it all! Manly has a long stretch of oceanside, covered with white sandy beaches running from Queenscliff Beach to North
     Steyne Beach till the Manly Beach.</p><br>
    </div>
      <div class="img">
        <img src="imagesdemo/sydneyplaces1.jpg" style="width:110%"> 
      </div>
    </div>
    <div class="box">
        <div class="img">
            <img src="imagesdemo/sydneyplaces2.jpg" style="width:110%"> 
          </div>
    <div>
      <h4>Sydney Opera House</h4>
      <p class="w3-text-grey">Sydney’s Opera House needs no introduction because its architectural design has placed it among the most famous buildings in the world. 
 An effort of sixteen years from 1957 to 1973 presented Australia with one of its most recognized buildings designed by Jorn Utzon. Not possible to gauge just from the
 brilliant view of the outside, tourists must take a guided tour inside to explore different levels and gather knowledge and information about the history of the Opera House. 
Its location on Bennelong Point amidst the excellent harbor setting that adds to its exclusiveness. </p><br>
    </div>
</div>
<div class="box">
    <div>
      <h4>Watson's Bay</h4>
      <p class="w3-text-grey">Watsons Bay is a great place to visit if one wants to experience some of Sydney’s finest stunning harbor views and breathtaking beaches. 
     One can do plenty of things here starting from a simple stroll along the pristine coastline, taste some wine and fine dining at some of the most celebrated seafood restaurants in Australia.
     This place is well known for its fresh seafood and has been one among the oldest fishing villages in the country.
     It’s a photographer’s paradise with some awesome cliff views and multiple shades of blue spread over the sea.</p><br>
    </div>
    <div class="img">
        <img src="imagesdemo/sydneyplaces3.jpg" style="width:110%"> 
      </div>
</div>
<div class="box">
    <div class="img">
        <img src="imagesdemo/sydneyplaces4.jpg" style="width:110%"> 
      </div>
    <div>
      <h4>Hyde Park</h4>
      <p class="w3-text-grey">Hyde Park is most probably Australia’s oldest park and can be called the city’s central open green space. More than sixteen acres of land with vibrant greens, this is one of the favorite 
    destinations for nature lovers who want to take a break from the hustle and bustle of busy city life. A simple walk, a small picnic or a cozy reading nook under a tree, one can do so many things in this garden. 
    People often come here to soak in the sun amidst a lush green setting. Plenty of benches in the backyard offers a good resting spot for the tires walkers or those who want to laze around on holiday. 
    Starting from big trees to grassy patches, Hyde Park houses a wide variety of flora that offers shade as well as an amazing backdrop for the photographers.</p><br>
    </div>
</div>
<div class="box">
    <div>
      <h4>Sydney Harbour Bridge</h4>
      <p class="w3-text-grey">Sydney Harbor Bridge also called by the locals as the ‘Coathanger’ or simply as ‘The Bridge’ was opened in 1932. It took six long years to be constructed but has gifted Australia and
      the world a bridge worth visiting at least once in a lifetime. The famous Bridge is the largest steel arch bridge in the entire world, but don’t mistake it for being the longest! Adding to its magnificence,
      its harbor location plays a major role in its photographic view. This bridge has an amazing construction and that gives it the strength to support about 90,000 vehicles which cross over every day. </p>    
    </div>
    <div class="img">
        <img src="imagesdemo/sydneyplaces5.jpg" style="width:110%"> 
      </div>
</div>
</div>
  </div>
<hr>
  <div class="w3-row w3-padding-64" id="things">
    <div class="w3-col l6 w3-padding-large">
      <h1 class="heading1">
        <span>t</span>
	<span>h</span>
	<span>i</span>
	<span>n</span>
	<span>g</span>
	<span>s</span>
	<span class="space"></span>
	<span>t</span>
	<span>o</span>
	<span class="space"></span>
	<span>d</span>
	<span>o</span>
	</h1>
      <div class="box">
      <div class="text">
      <h4>Visit the Iconic Paddy Markets</h4>
      <p class="w3-text-grey">These markets have been a Sydney institution for over 150 years.Paddy’s is the biggest market in Sydney, with over 1,000 stalls between the Haymarket and Flemington locations.
     You’ll find very reasonably priced souvenirs, bric-a-brac and general fun items, as well as a great atmosphere and tasty food.</p><br>
      </div>
      <div class="img">
        <img src="imagesdemo/sydneythings1.jpg" style="width:110%"> 
      </div>
    </div>
    <div class="box">
        <div class="img">
            <img src="imagesdemo/sydneythings2.jpg" style="width:85%">
        </div>
    <div class="text">
        <h4>Visit the Beautiful Bondi Beach</h4>
      <p class="w3-text-grey">Bondi Beach is one of Australia’s most famous beaches, and a popular hangout for Sydney’s beautiful people, as well as local and international celebrities.
       It’s always busy here, but usually not too busy, and the atmosphere is exciting. The surrounding suburb has some great retail and dining options.
       Bondi Beach is on the Australian Heritage List, and is also noteworthy for holding the Guinness World Record for the largest swimsuit photo shoot.</p><br>
    </div>
</div>
    <div class="box">
        <div class="text">
      <h4>Have Dinner at Circular Quay</h4>
      <p class="w3-text-grey">Circular Quay is known for its excellent gourmet dining options, and the views of the crystal-blue Sydney Harbour waters are truly stunning.
      Some particularly delicious options include ARIA, the Sydney Cove Oyster Bar, Yayoi Garden and Tapavino; there’s also budget options such as Banh You Vietnamese Street Food, 
       burgers at City Extra or the weekly meal deals at the Ship Inn.</p><br>
        </div>
            <div class="img">
                <img src="imagesdemo/sydneythings3.jpg" style="width:120%">
            </div>
        </div>
        <div class="box">
            <div class="img">
                <img src="imagesdemo/sydneythings4.jpg" style="width:95%">
            </div>
        <div class="text">
      <h4>Take a cruise or ferry around the lovely Darling Harbour</h4>
      <p class="w3-text-grey">Cruising past the opera house and enjoying the stunning views of the water is a wonderful way to relax after a long day of pounding the pavement.
      There’s various sightseeing cruises available, many of which are catered, but if you’re on a budget, you can enjoy the same views at a much cheaper price via public transport:
      a trip from Circular Quay to Darling Harbour is under. $4</p><br>
    </div>
</div>
    <div class="box">
    <div class="text">
      <h4>Visit the Garigal National Park</h4>
      <p class="w3-text-grey">Garigal is a protected national park in the North Shore region of Sydney.
      Only 20km from the CBD, it’s a gorgeous oasis just a short trip away from the hustle and bustle, and it’s a popular weekend getaway for locals.
      The national park is huge, at 2202 hectares, and the park trails are very popular with walkers, hikers and cyclists; the Cascades are particularly lovely.
      You’ll find exquisite scenery here, as well as interesting local flora and fauna; there’s also 100 ancient Aboriginal sites recorded within the park, including cave art and rock engravings.</p>    
</div>
        <div class="img">
            <img src="imagesdemo/sydneythings5.jpg" style="width:125%">
        </div>
    </div>
    </div>
  </div>

  <hr>
<div class="w3-row w3-padding-64" id="location">
<div>
<h1 class="heading1">
        <span>L</span>
        <span>o</span>
        <span>c</span>
        <span>a</span>
        <span>t</span>
        <span>i</span>
        <span>o</span>
	<span>n</span>
      </h1>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d424143.2713541492!2d150.6517805878386!3d-33.84792701839226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney%20NSW%2C%20Australia!5e0!3m2!1sen!2sin!4v1638286443579!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
</div>
<hr>
  <!-- Contact Section -->
<section class="book" id="book">
      <h1 class="heading1">
        <span>b</span>
        <span>o</span>
        <span>o</span>
        <span>k</span>
        <span class="space"></span>
        <span>n</span>
        <span>o</span>
        <span>w</span>
      </h1>
<div class="row"> 
         <form action="/sydneybook" id="form1" method="post">
          <div class="inputBox">
            <h3>How Many</h3>
            <input type="text" name="count" placeholder="Enter Number Of Travellers" id="travellers" onkeyup="calculate_amount()" />
          </div>
          <div class="inputBox">
            <h3>Travel Date</h3>
            <input type="date" name="date" />
          </div>
	<h3>
	<p id="displayamount" style="color:red">
	<span id="amount">The Amount To Be Paid is: Rs.</span>
	</h3>
	</p>
	  <div class="inputBox">
            <h3>Payment Details</h3>
            <input type="text" placeholder="Enter Name on Card" />
            <input type="number" placeholder="Enter Card Number" />
	    <input type="text" placeholder="Enter Date Of Expiry"/>
	    <input type="number" placeholder="Enter CVV" />
          </div>
          <input type="submit" class="btn" value="book & pay now" onclick="paynow1()" />
        </form>
</div>
</section>
<script>
  function paynow1(){
    swal("Payment Successfull","Thank you for choosing Manas Holidays as your travel Partner","success");
  }
</script>
  
<!-- End page content -->
</div>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</body>
</html>
