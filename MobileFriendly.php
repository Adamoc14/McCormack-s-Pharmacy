<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="McCormacks Pharmacy is one of the leading online pharmacy stores in Ireland that offers a complete range of pharmaceutical drugs, health & beauty products, fragrances for men & women from leading brands, and much more! We have the most genuine prices from all other stores! Explore our pharmacy today and shop your way!">
	<link href="https://fonts.googleapis.com/css?family=Caveat|PT+Serif:400i|Indie+Flower|Quicksand|Raleway|Bitter|Dosis|Sirin+Stencil|" rel="stylesheet">
	<!-- I'm using simple-grid as opposed to your modified simple-grid.min.css -->
	<?php include ("style.php"); ?>
	<link rel="stylesheet" href="Resources/CSS/mobileFriendly.css">
	<link rel="stylesheet" href="Resources/CSS/popup.css">
	<link rel="stylesheet" href="Resources/CSS/homepage.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <title>McCormacks | Home</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

			var width = $(window).width(); 

			// if (width >= 540) {
			// 	$(".top-logo-and-tag a img").attr("src", "Resources/Images/MCCLogoBig.png");
			// 	console.log("Well");
			// }
			// else{
			// 	$(".top-logo-and-tag a img").attr("src", "Resources/Images/MCLogoSmall.png");
			// 	console.log("Po");
			// }

			// $(function(){
			// 		if(width >= 0 && width <= 540){
			// 			$("img").attr("src","Resources/Images/MCLogoSmall.png");
			// 			console.log("Well");
			// 		}
			// 		else if(width > 540 && width <= 768){
			// 			$("img").attr("src","Resources/Images/MCCLogoBig.png");
			// 			console.log("Big");
			// 		}
			// 		else{
			// 			$("img").attr("src","Resources/Images/MCCLogoBig.png"); 
			// 			console.log("Else");
			// 		}
   			//  });
			


            $('.first_sorter').on('click', function(){
                var $this = $(this);
                $this.parents().siblings().toggleClass('show');
                $(this).toggleClass('flip');
            });

           
            $('.Hamburger_Close').on('click',function(){

                $('.Nav_Bar_Menu').toggleClass('open');

            });

            $('#subscription_email_button').on('click', function(){
  
                    var $this = $(this);
                    var $email = $('#subscription_email');
            
                    if ($email.length === 0){
                    alert("Please enter an email");

                        
                    } else {
                      $this.parents('#Subscription_Pop_Up').addClass('hidden');
                    }
            
            
            });
            $('#Opt_Out_Link').on('click', function(){
  
                    var $this = $(this);
                    var $email = $('#subscription_email');

                    if ($email.length === 0){
                    alert("Please enter an email");

                        
                    } else {
                      $this.parents('#Subscription_Pop_Up').addClass('hidden');
                    }


            });
        });



    </script> 
    <script>
	/* chatra is slowing down page load... trying to get rid of it  */
	/*
        (function(d, w, c) {
            w.ChatraID = 'auSuwd4NaEDA4qw5F';
            var s = d.createElement('script');
            w[c] = w[c] || function() {
                (w[c].q = w[c].q || []).push(arguments);
            };
            s.async = true;
            s.src = 'https://call.chatra.io/chatra.js';
            if (d.head) d.head.appendChild(s);
        })(document, window, 'Chatra');
	*/
    </script>
  
    
</head>
<body>

<aside id="aside">
    <ul>
        <li id="facebook"><a href="" ></a><i class="fab fa-2x  face fa-facebook fa-facebook-f"></i></li>
        <li id="pinterest"><a href="" ></a><i class="fab fa-2x  pin fa-pinterest"></i></li>
        <li id="twitter"><a href="" ></a><i class="fab fa-2x  tweet fa-twitter"></i></li>
        <li id="instagram"><a href="" ></a><i class="fab  fa-instagram2 fa-2x fa-instagram"></i></li>
        <li id="snapchat"><a href="" ></a><i class="fab fa-2x fa-snapchat fa-snapchat-ghost"></i></li>
    </ul>
</aside>

<div id="Cookie_Banner">
    <p id="Cookie_Banner_Explanation">This site uses cookies. By continuing to browse this site you are agreeing to our use of cookies. <span id="Find_Out_More_Link" ><a href="legal.php?term=Cookies" target="blank" >Find Out More Here</a> <div id="Accept_Close_Button_Div">
        <a onclick="dismissCookie()" role="button" id="Accept_And_Close_Button">Accept and Close</a>
    </div></span></p>  
</div>
    
<?php include("popup.php"); ?>  


        <div class="container full">
			
				<div class="row hidden-sm">
					<div class="col-9"></div>
					<div class="col-3 Authorization_Links right hidden-sm">
						<a href="">Log In</a>
						<a href="">Register</a>
					</div>
				</div>



				<div class="row bottom_row_border hidden-sm">

					<div class="col-9 left green_info hidden-sm">
					   Open 6 days a week: &nbsp;<a class="Tel_Number" href="tel:+353 52 6199329">Tel:&nbsp;052 6199329</a> | info@McCormacksPharmacy.ie
					</div>

					<div class="col-3 Social_Icon_Container right">
						<a href="https://www.facebook.com/McCormacksPharmacy/"><i class="fab fa-2x fa-facebook-f"></i></a>
						<a href="https://www.instagram.com/mccormackspharmacy/?hl=en"><i class="fab fa-2x fa-instagram"></i></a>
						<a href="#"><i class="fab fa-2x fa-snapchat-ghost"></i></a>
					</div>

				</div>


				<div class="row green_Navbar">
					<div class="col-1 hidden-sm"></div>

					 <span class="col-2 bars">
                            <i class="fas fa-2x Hamburger_Menu Hamburger_Close fa-bars"></i>
                    </span>
						
					<div class="col-10 top-logo-and-tag center">
						<a href="homepage.php">
							<img src="Resources/Images/MCCLogoBig.png">
						</a>
					</div>

					<span class="cart">
                        
						<span class="ec-cart-widget" data-ec-widget-loaded="true"><div class="ec-minicart ec-minicart--empty ec-minicart--m ec-minicart--inline ec-minicart--no-shape ec-minicart--animation-default"><div class="ec-minicart__body"><div class="ec-minicart__icon"><svg class="icon-default" height="30" viewBox="0 0 36 30" width="36" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M7 7h22v18a4 4 0 0 1-4 4H11a4 4 0 0 1-4-4V7z" stroke="currentColor" stroke-width="2"></path><path d="M13 10V6c0-2.993 2.009-5 5-5s5 2.026 5 5v4" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path><circle class="cart-not-empty" cx="18" cy="18" fill="currentColor" r="4"></circle></g></svg></div><div class="ec-minicart__wrap"><div class="ec-minicart__counter">0</div></div></div></div></span>
					</span>

					<div class="col-1 hidden-sm"></div>
				</div>

				<div class="row">
					<!-- Notice that the class xx-sm. By default, simple-grid stacks columns ontop of each other
					   when the screen gets small but using -sm forces simplegrid not to -->
					<div class="col-1-sm"></div>
					<div class="col-10-sm center">
						
						<div>
							<script data-cfasync="false" type="text/javascript" src="https://app.ecwid.com/script.js?14190009&amp;data_platform=code&amp;data_date=2018-06-22" charset="utf-8"></script>
							<script type="text/javascript">Ecwid.init();</script>
						</div>
						
						
						<div id="ecwid-search">
							<script data-cfasync="false" type="text/javascript" src="https://app.ecwid.com/script.js?14190009&amp;data_platform=code&amp;data_date=2018-06-22" charset="utf-8"></script>
							<script type="text/javascript"> xSearch("id=my-search-14190009"); </script>
						</div>
						
					</div>
				
					<div class="col-1-sm"></div>
				</div>
				
				<div class="row full-green hidden-sm" >	
					<div class="col-12 center" id="menu">
						<ul>
							<li><a href="health.php#/Health/c/30087031/offset=0&sort=normal">Health</a>
									<div id="Beauty_Megamenu">
											<h2 id="Beauty_Megamenu_Title">Health Inspiration, products and services</h2>
											<ul id="Beauty_Megamenu_List1">
												<h2 id="Beauty_Megamenu_List1_Subtitle">Express Access</h2>
												<li><a href="#">Vitamins</a></li>
												<li><a href="#">Medicines</a></li>
												<li><a href="#">Travel</a></li>
												<li><a href="#">Embarassing Conditions</a></li>
												<li><a href="#">Contingence Care</a></li>
												<li><a href="#">Feminine Hygiene</a></li>
												<li><a href="#">Family Planning</a></li>
												<li><a href="#">Diabetes Care</a></li>
												<li><a href="#">First Aid</a></li>
												<li><a href="#">Pain Relief</a></li>
												<li><a href="#">Cold,Flu and Allergy</a></li>
												<li><a href="#">Other Healthcare</a></li>
											</ul>

											<ul id="Beauty_Megamenu_List4">
												<h2 id="Beauty_Megamenu_List4_Subtitle">List Of Brands</h2>
												<a href="#">View All Brands</a>
											</ul>
											<ul id="Beauty_Megamenu_List5">
												<h2 id="Beauty_Megamenu_List5_Subtitle">Events In Stores</h2>
												<a href="#">See Events In Stores</a>
											</ul>
											<img src="Resources/Images/Health_Megamenu.jpg" alt="">
										</div>
							</li>
							<li><a href="beauty.php">Beauty</a>
								<div id="Beauty_Megamenu">
									<h2 id="Beauty_Megamenu_Title">Beauty Inspiration, products and services</h2>
									<ul id="Beauty_Megamenu_List1">
										<h2 id="Beauty_Megamenu_List1_Subtitle">Express Access</h2>
										<li><a href="#">Dermo-Cosmetics</a></li>
										<li><a href="#">Fragrances</a></li>
										<li><a href="#">Beauty Top Picks</a></li>
										<li><a href="#">Makeup</a></li>
										<li><a href="#">Nails</a></li>
										<li><a href="#">Skin Care</a></li>
										<li><a href="#">Hair</a></li>
										<li><a href="#">Care For Men</a></li>
										<li><a href="#">In-store Beauty Services</a></li>
										<li><a href="#">Events In Stores</a></li>
									</ul>

									<ul id="Beauty_Megamenu_List4">
										<h2 id="Beauty_Megamenu_List4_Subtitle">List Of Brands</h2>
										<a href="#">View All Brands</a>
									</ul>
									<ul id="Beauty_Megamenu_List5">
										<h2 id="Beauty_Megamenu_List5_Subtitle">Events In Stores</h2>
										<a href="#">See Events In Stores</a>
									</ul>
									<img src="https://i.pinimg.com/736x/76/44/70/76447054e577760e4b7526e37df0480f--beauty-full-beauty-bar.jpg" alt="">
								</div>
							</li>
							<li><a href="skincare.php">Skincare</a>
									<div id="Beauty_Megamenu">
										<h2 id="Beauty_Megamenu_Title">Skincare Inspiration, products and services</h2>
										<ul id="Beauty_Megamenu_List1">
											<h2 id="Beauty_Megamenu_List1_Subtitle">Express Access</h2>
											<li><a href="#">Best Selling Skincare Brands</a></li>
											<li><a href="#">Face</a></li>
											<li><a href="#">Expert Skincare</a></li>
											<li><a href="#">Body</a></li>
											<li><a href="#">Hands, Nails &amp; Feet</a></li>
										</ul>

										<ul id="Beauty_Megamenu_List4">
											<h2 id="Beauty_Megamenu_List4_Subtitle">List Of Brands</h2>
											<a href="#">View All Brands</a>
										</ul>
										<ul id="Beauty_Megamenu_List5">
											<h2 id="Beauty_Megamenu_List5_Subtitle">Events In Stores</h2>
											<a href="#">See Events In Stores</a>
										</ul>
										<img src="Resources/Images/Skincare_Megamenu.jpg" alt="">
									</div>
							</li>
							<li><a href="#">General</a></li>
							<li><a href="coupons.php">Coupons</a></li>
							<li><a href="AboutUs.php">About Us</a></li>
							<li><a href="contactUs.php">Contact Us</a></li>
						</ul>
					</div>
				</div>

			<div class="row grey_Bottom_Homepage_Bar hidden-sm">

				<div class="col-4 left">
					<i class="fas fa-2x fa-truck"></i><span>Order By 3pm for Next Day Delivery</span>
				</div>
				<div class="col-4 center">
					<span>Excellent <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
					<span class="trustpilot">TrustPilot</span>
				</div>
				<div class="col-4 right">
					<span class="Bottom_Task_Bar_Green_Info">€ Low </span><span>Prices all  year round</span>
				</div>

			</div>          
			
			
			<div id="image_slider" class="hidden-sm">
				<div class="row">
					<div class="col-12" >
						<div id="slider" data-state="0">

								<svg id="previous" viewBox="0 0 31 101" version="1.1">
								<path d="M 0,0,30,50,0,100"></path>
								</svg>
								<svg id="next" viewBox="0 0 31 101" version="1.1">
								<path d="M 0,0,30,50,0,100"></path>
								</svg>
								
								<div id="status">
									<div id="stat" data-key="0"></div>
									<div id="stat" data-key="1"></div>
									<div id="stat" data-key="2"></div>
									<div id="stat" data-key="3"></div>
									<div id="stat" data-key="4"></div>
									<div id="stat" data-key="5"></div>
								</div>
								
								<div id="image" data-key="0">
									<img id="img" src="Resources/Images/age-protect-range-hd.jpg" alt="">
								</div>
								<div id="image" data-key="1">
									<img  id="img" src="Resources/Images/GAMME_BARIESUN_BD.png" alt="">
								</div>
								<div id="image" data-key="2">
									<img  id="img" src="Resources/Images/Natural-Life.png" alt="">
								</div>
								<div id="image" data-key="3">
									<img  id="img" src="" alt="">
								</div>
								<div id="image" data-key="4" data-active>
									<img  id="img" src="" alt="">
								</div>
								<div id="image" data-key="5">
									<img id="img" src="" alt="">
								</div>

						</div>
					</div>
				</div>
			</div> <!-- end image_slider -->
		
			<div id="products">
				<div class="row">
					<script type='text/javascript' src='https://app.ecwid.com/script.js?14190009'></script> 
					 <div class="col-6" id="left-product-list">				 				
						<script type='text/javascript'> 
							xProductBrowser("defaultCategoryId=id=30881149");
						</script>
					 </div>
					 <!-- <div class="col-6" id="right-product-list">				 
						<script type='text/javascript'> 
							xProductBrowser("defaultCategoryId=30881149");
						</script>
					 </div> -->
				</div>    
			</div>
			
		
			<script src="Resources/Javascript/homepage.js"></script>
	
			
			<div id="footer">
				<div class="row full-green" >	
					<div class="col-12 center">
						<p>The footer should go under this store</p>
					</div>
				</div>
			</div>
		</div> <!-- End of container
   
</body>
</html>
