<html>
  <head>
<title>Bali</title>
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
  background-image: url("imagesdemo/background1.jpg");
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
	var final_amount=traveller*57400;
	document.getElementById("amount").innerHTML=("The Amount to be Paid is: Rs."+final_amount);
}
</script>
<!-- Navbar (sit on top) -->
<header>
      <div id="menu-bar" class="fas fa-bars"></div>

      <a href="/logined" class="logo"><span>Manas</span> Holidays</a>
	<a href="#" class="logo"><span><h1>Bali</h1></span></a>
      <nav class="navbar">
        <a href="#about">About</a>
        <a href="#places">Places To Visit</a>
        <a href="#things">Things To Do</a>
	      <a href="#location">Location</a>
        <a href="#book">Book Now</a>
      </nav>
</header>
  <img class="center" src="imagesdemo/bali_1.jpg" alt="Bali Image" width="500" height="500">
<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="imagesdemo/about_bali.jfif" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
    </div>

    <div class="w3-col m6 w3-padding-large">
      <h1 class="heading1" id="hd">
	<span>ABOUT</span>
	<span class="space"></span>
	<span>b</span>
	<span>a</span>
	<span>l</span>
	<span>i</span>
	</h1><br>
      <p class="w3-large">Just one of many beautiful tropical islands that combine to make up Indonesia, Bali is full of
           stunning locations, rich culture & exciting activities. Considered the jewel of South East Asia, Bali's mix of
            world renowned surf spots, endless rice paddies and secrets off the beaten path all make backpacking in Bali an adventure not 
            to be missed.</p><br>
      <p class="w3-large w3-text-grey w3-hide-medium">
          Package costs Rs. 57400 for 5 Nights & 6 Days</p>
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
      <h4>Pura Tanah Lot</h4>
      <p class="w3-text-grey"> Pura Tanah Lot ("Pura" means temple in Balinese) is one of Bali's most iconic temples.
          Its spectacular seaside setting, on a rocky islet surrounded by crashing waves wows all who visit.
        For the Balinese people, it is one of the most sacred of all the island's sea temples.
        Find way through a labyrinth of lanes lined by souvenir sellers to watch the sun setting behind the temple.</p><br>
    </div>
      <div class="img">
        <img src="imagesdemo/bp1.jpg" style="width:110%"> 
      </div>
    </div>
    <div class="box">
        <div class="img">
            <img src="imagesdemo/bp2.jpg" style="width:110%"> 
          </div>
    <div>
      <h4>Mount Batur</h4>
      <p class="w3-text-grey">In Bali's predawn darkness, begin the trek up the 1,700-meter summit 
          of Mount Batur to watch the sun rise above the lush mosaic of mist-shrouded mountains and the caldera far below.
          The views are spectacular, stretching all the way across the Batur caldera; the surrounding mountain range; 
          and beautiful Lake Batur, the island's main source of irrigation water.</p><br>
    </div>
</div>
<div class="box">
    <div>
      <h4>Ubud Monkey Forest</h4>
      <p class="w3-text-grey">Visiting the Sacred Monkey Forest Sanctuary, is one of the top things to do if you're an animal lover. 
        Entertaining troops of grey long-tailed macaques make their home here .
        Paved pathways lead through thick forests of giant banyan and nutmeg trees, 
        where moss-covered statues and ancient temples loom through the dense foliage, imparting an almost mystical feel.</p><br>
    </div>
    <div class="img">
        <img src="imagesdemo/bp3.jpg" style="width:110%"> 
      </div>
</div>
<div class="box">
    <div class="img">
        <img src="imagesdemo/bp4.jpg" style="width:110%"> 
      </div>
    <div>
      <h4>Tegallalang and Jatiluwih Rice Terraces</h4>
      <p class="w3-text-grey">Tegallalang Rice Terraces are one of the most famous 
          areas to photograph these iconic landscapes and absorb their timeless beauty.
          The Jatiluwih rice terraces cover more than 600 hectares of rice fields along the hillsides of the Batukaru mountain range.
          Both of these locations use UNESCO-recognized irrigation system that dates to the 9th century.</p><br>
    </div>
</div>
<div class="box">
    <div>
      <h4>Seminyak Shopping</h4>
      <p class="w3-text-grey">Bali is known for its flamboyant designers and fabulous shopping, 
          and you'll find the best examples of Balinese design along the busy streets of Seminyak. 
          Cutting-edge designer fashion, surf and swimwear, jewelry, furniture, and homewares are just some of the
          items you can buy at the chic shops and busy market stalls here.</p>    
    </div>
    <div class="img">
        <img src="imagesdemo/bp5.jpg" style="width:110%"> 
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
      <h4>Catch the Beachy Vibe at Nusa Penida Island</h4>
      <p class="w3-text-grey">A lesser travelled Nusa Penida is the place to come if you are looking for tranquillity and natural beauty. 
          The island has some excellent dive sites which offer the opportunity to swim amidst manta rays,
           Mola-Mola fish, whale sharks and coral. You can also opt for snorkelling or simply sunbathe on the white-sand beaches.</p><br>
      </div>
      <div class="img">
        <img src="imagesdemo/bt1.jpg" style="width:110%"> 
      </div>
    </div>
    <div class="box">
        <div class="img">
            <img src="imagesdemo/bt2.jpg" style="width:85%">
        </div>
    <div class="text">
        <h4>Experience the Thrill of Muck Diving at Padang Bai</h4>
      <p class="w3-text-grey">Padang Bai in Bali offers excellent opportunities to certified divers who want to try micro-photography, 
          muck diving and night dives at the place. The area has diverse marine life which lends itself wonderfully 
          to underwater photography.</p><br>
    </div>
</div>
    <div class="box">
        <div class="text">
      <h4>Ride a Jetpack in Tanjung Benoa</h4>
      <p class="w3-text-grey">There is no better place 
          to find jetpacks or flyboards than at Bali’s ‘watersports playground’ Tanjung Benoa.
           You can levitate on these jetpacks as high as up to 15 meters above the water level. 
           You can also perform various manoeuvres like diving, breaching. 
            Each ride lasts about 15 minutes along the coastline, allowing you to take satiate the water-enthusiast in you.</p><br>
        </div>
            <div class="img">
                <img src="imagesdemo/bt3.webp" style="width:120%">
            </div>
        </div>
        <div class="box">
            <div class="img">
                <img src="imagesdemo/bt4.jpg" style="width:95%">
            </div>
        <div class="text">
      <h4>Memorable Kintamani Cycling Tour in Bali</h4>
      <p class="w3-text-grey">This isn't just a cycling tour but a total fun experience that takes you through the
           jaw-dropping hamlet of Kintamani, offering the best views of the crystalline Lake Batur.
           Adding to the fun are the views of the rice fields which are terraced to let you soak in its phenomenal beauty. </p><br>
    </div>
</div>
    <div class="box">
    <div class="text">
      <h4>Swoosh on the Bali Swing</h4>
      <p class="w3-text-grey">Melt your heart away with the breathtakingly beautiful views of the entire island with the exclusive version of Bali adventure tours, the Bali swing.
        You might have dreamt about swinging in between the clouds, but this is the place where you can live your dream and take a bird's eye view of the city. Ranging from 10 to as high as 78 meters, here you can select the swing height and enjoy the Instagram worthy spot of Bali.</p>    
    </div>
        <div class="img">
            <img src="imagesdemo/bt5.jpg" style="width:125%">
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
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d505145.8255794888!2d114.7913737593264!3d-8.455371748393398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd141d3e8100fa1%3A0x24910fb14b24e690!2sBali%2C%20Indonesia!5e0!3m2!1sen!2sin!4v1638262904750!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
         <form action="balibook.php" id="form1" method="post">
          <div class="inputBox">
            <h3>How Many</h3>
            <input type="text" name="count" placeholder="Enter Number Of Travellers" id="travellers" onkeyup="calculate_amount()" />
          </div>
          <div class="inputBox">
            <h3>Travel Date</h3>
            <input type="date" name="date"/>
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
	    <input type="date" placeholder="Enter Date Of Expiry"/>
	    <input type="number" placeholder="Enter CVV" />
          </div>
          <input type="submit" class="btn" value="book & pay now" onclick="paynow()" />
        </form>
</div>
</section>
<script>
  function paynow(){
    swal("Payment Successfull","Thank you for choosing Manas Holidays as your travel Partner","success");
  }
</script>
  
<!-- End page content -->
</div>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!--<script src="script.js"></script>-->
</body>
</html>
