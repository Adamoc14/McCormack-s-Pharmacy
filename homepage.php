<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="McCormacks Pharmacy is one of the leading online pharmacy stores in Ireland that offers a complete range of pharmaceutical drugs, health & beauty products, fragrances for men & women from leading brands, and much more! We have the most genuine prices from all other stores! Explore our pharmacy today and shop your way!">
    <link href="https://fonts.googleapis.com/css?family=Caveat|PT+Serif:400i|Indie+Flower|Quicksand|Raleway|Bitter|Dosis|Sirin+Stencil|" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"> 
    <?php include ("style.php"); ?>
    <link rel="stylesheet" href="Resources/CSS/homepage.css">
    <link rel="stylesheet" href="Resources/CSS/popup.css">
    <title>McCormacks | Home</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
    <script src="Resources/Javascript/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.min.js"></script>
    <style>

            .Boxes{
                display: flex;
                max-width: 620px;
                flex-wrap:wrap;
            }


             @media only screen and (min-width: 45em) {  /* 720px */
                .Boxes{
                    width: 100vw;
                    margin:0 auto;
                } 
            }

            @media screen and (min-width:80em){  /*1280px*/
                .Boxes{
                    max-width: 100vw;
                    margin: 0 1.5vw 0;
                } 
            }

            @media screen and (min-width:88.75em){  /*1420px*/
                .Boxes{
                    max-width: 100vw;
                    margin: 0 6vw;
                } 
            }

            .Most_Popular_Section{
                display: flex;
                max-width: 620px;
                background:#E91E63;
                flex-wrap:wrap;
            }

            

            .Most_Popular_Section h1{
                font-size: 20px;
                text-align: center;
                background: white;
                color: #E91E63;
                width: 50vw;
                border-radius: 15px;
                margin: 2vh auto;
                font-family: Dosis;
                
            }

             @media screen and (min-width:20em) { /*320px*/
                .Most_Popular_Section h1{
                    width: 100vw;
                }
            }

            @media screen and (min-width:80em){  /*1280px*/
                .Most_Popular_Section h1{
                    width: 43vw;
                }
            }


            .Most_Popular_Section_Sub{
                margin: 2vw auto;
                height: 39vh;
                background: white;
                border-radius: 15px;
            }

             @media screen and (min-width:20em) { /*320px*/
                .Most_Popular_Section_Sub{
                    width: 48vw;
                    margin: 1vw;
                }
            }
            @media only screen and (min-width: 45em) {  /* 720px */
                .Most_Popular_Section_Sub{
                    width: 41vw;
                }
            }

            @media only screen and (min-width:57.5em) {  /* 920px*/
                .Most_Popular_Section_Sub{
                    width: 20vw;
                }
            }

            @media screen and (min-width:80em){  /*1280px*/
                .Most_Popular_Section_Sub{
                margin: 2vw auto;
                }
            }

            .Most_Popular_Section_Sub #tag {
                background: #E91E63;
                width: 15vw;
                margin: 1vh auto;
                text-align: center;
                border-radius: 15px;
                color: white;
            }
            @media screen and (min-width:20em) { /*320px*/
                .Most_Popular_Section_Sub #tag{
                    margin:1vh auto;
                    width:30vw;

                }
            }
            @media only screen and (min-width:57.5em) {  /* 920px*/
                .Most_Popular_Section_Sub #tag{
                    width: 16vw;
                }
            }

            
            

            .Most_Popular_Section_Sub h2, .Most_Popular_Section_Sub article, .Most_Popular_Section_Sub #tag {
                display: flex;
                font-size: 12px;
                justify-content: center;
                font-family: 'Lato', Helvetica, sans-serif;
            }

            @media screen and (min-width:20em) { /*320px*/
                .Most_Popular_Section_Sub h2{
                    font-size: 10px;

                }
            }

            .Most_Popular_Section_Sub img{
                width: 20vw;
                height: 26vh;
                border-radius: 15px;
            }
            
            @media screen and (min-width:20em) { /*320px*/
                .Most_Popular_Section_Sub img{
                    margin: 0 1vw;
                    width: 40vw;

                }
            }

            @media only screen and (min-width: 45em) {  /* 720px */
                .Most_Popular_Section_Sub img{
                    width: 38vw;
                }
            }

            @media only screen and (min-width:57.5em) {  /* 920px*/
                .Most_Popular_Section_Sub img{
                    width: 17vw;
                }
            }




            /* End of Most Popular Section */
            

            .Editors_Picks_Section{
                display: flex;
                max-width: 620px;
                background: #77ff03;
                flex-wrap:wrap;
                

            }
            .Editors_Picks_Section h1{
                font-size: 20px;
                text-align: center;
                background: white;
                color: #77ff03;
                width: 50vw;
                border-radius: 15px;
                margin: 2vh auto;
                font-family: Dosis;
                
            }

             @media screen and (min-width:20em) { /*320px*/
                .Editors_Picks_Section h1{
                    width: 100vw;
                }
            }

             @media screen and (min-width:80em){  /*1280px*/
                .Editors_Picks_Section h1{
                    width: 43vw;
                }
            }


            .Editors_Picks_Section_Sub{
                margin: 2vw auto;
                height: 39vh;
                background: white;
                border-radius: 15px;
            }

            @media screen and (min-width:20em) { /*320px*/
                .Editors_Picks_Section_Sub{
                    width: 48vw;
                    margin: 1vw;
                }
            }

            @media only screen and (min-width: 45em) {  /* 720px */
                .Editors_Picks_Section_Sub{
                    width: 41vw;
                }
            }

            @media only screen and (min-width:57.5em) {  /* 920px*/
                .Editors_Picks_Section_Sub{
                    width: 20vw;
                }
            }

            @media screen and (min-width:80em){  /*1280px*/
                .Editors_Picks_Section_Sub{
                margin: 2vw auto;
                }
            }

            .Editors_Picks_Section_Sub #tag {
                background: #77ff03;
                width: 15vw;
                margin: 1vh auto;
                text-align: center;
                border-radius: 15px;
                color: white;
            }

            @media screen and (min-width:20em) { /*320px*/
                .Editors_Picks_Section_Sub #tag{
                    margin:1vh auto;
                    width:30vw;

                }
            }



            @media only screen and (min-width:57.5em) {  /* 920px*/
                .Editors_Picks_Section_Sub #tag{
                    width: 16vw;
                }
            }

            .Editors_Picks_Section_Sub h2, .Editors_Picks_Section_Sub article, .Editors_Picks_Section_Sub #tag {
                display: flex;
                font-size: 12px;
                justify-content: center;
                font-family: 'Lato', Helvetica, sans-serif;
            }

            @media screen and (min-width:20em) { /*320px*/
                .Editors_Picks_Section_Sub h2{
                    font-size: 10px;

                }
            }

            .Editors_Picks_Section_Sub img{
                width: 20vw;
                height: 26vh;
                border-radius: 15px;
            }

            @media screen and (min-width:20em) { /*320px*/
                .Editors_Picks_Section_Sub img{
                    margin: 0 1vw;
                    width: 40vw;

                }
            }

            @media only screen and (min-width: 45em) {  /* 720px */
                .Editors_Picks_Section_Sub img{
                    width: 29vw;
                    margin: 0 4vw;
                }
            }

             @media only screen and (min-width:57.5em) {  /* 920px*/
                .Editors_Picks_Section_Sub img{
                    width: 16vw;
                    margin: 0 2vw;
                }
            }

            /* End of Editors Picks Section */

             .Popular_Choice_Section{
                display: flex;
                max-width: 620px;
                background:#29B6F6;
                flex-wrap:wrap;
                

            }

             @media only screen and (min-width:57.5em) {  /* 920px*/
                .Popular_Choice_Section{
                    max-width: 100vw;
                    width: 97vw;
                }
            }

            @media only screen and (min-width: 88.75em) {  /* 142px */
                .Popular_Choice_Section{
                    width: 88vw;
                }
            }
            .Popular_Choice_Section h1{
                font-size: 20px;
                text-align: center;
                background: white;
                color: #29B6F6;
                width: 50vw;
                border-radius: 15px;
                margin: 2vh auto;
                font-family: Dosis;
                
            }

             @media screen and (min-width:20em) { /*320px*/
                .Popular_Choice_Section h1{
                    width: 100vw;
                    display: flex;
                    justify-content: center;
                }
            }
            
            @media only screen and (min-width:80em) {  /* 1280px*/
                .Popular_Choice_Section h1{
                    width: 83vw;
                }
            }

            .Popular_Choice_Section_Sub{
                margin: 2vw auto;
                height: 39vh;
                background: white;
                border-radius: 15px;
            }

            @media screen and (min-width:20em) { /*320px*/
                .Popular_Choice_Section_Sub{
                    width: 48vw;
                    margin: 1vw;
                }
            }

            @media only screen and (min-width: 45em) {  /* 720px */
                .Popular_Choice_Section_Sub{
                    width: 41vw;
                }
            }

             @media only screen and (min-width:57.5em) {  /* 920px*/
                .Popular_Choice_Section_Sub{
                    width: 31vw;
                }
            }

             @media only screen and (min-width:80em) {  /* 1280px*/
                .Popular_Choice_Section_Sub{
                    width: 16vw;
                    margin: 5vw auto;
                }
            }

            .Popular_Choice_Section_Sub #tag {
                background: #29B6F6;
                width: 15vw;
                margin: 1vh auto;
                text-align: center;
                border-radius: 15px;
                color: white;
            }

            @media screen and (min-width:20em) { /*320px*/
                .Popular_Choice_Section_Sub #tag{
                    margin:1vh auto;
                    width:30vw;

                }
            }

             @media only screen and (min-width:57.5em) {  /* 920px*/
                .Popular_Choice_Section_Sub #tag{
                    width:22vw;

                }
            }


            @media screen and (min-width:80em){  /*1280px*/
                .Popular_Choice_Section_Sub #tag{
                    width:14vw;
                }
            }
            

            .Popular_Choice_Section_Sub h2, .Popular_Choice_Section_Sub article, .Popular_Choice_Section_Sub #tag {
                display: flex;
                font-size: 12px;
                justify-content: center;
                font-family: 'Lato', Helvetica, sans-serif;
            }

            @media screen and (min-width:20em) { /*320px*/
                .Popular_Choice_Section_Sub h2{
                    font-size: 10px;

                }
            }

            .Popular_Choice_Section_Sub img{
                width: 20vw;
                height: 26vh;
                border-radius: 15px;
            }

            @media screen and (min-width:20em) { /*320px*/
                .Popular_Choice_Section_Sub img{
                    margin: 0 11vw;
                    width: 26vw;

                }
            }

            @media only screen and (min-width: 45em) {  /* 720px */
                .Popular_Choice_Section_Sub img{
                    width: 17vw;
                }
            }

             @media only screen and (min-width:57.5em) {  /* 920px*/
                .Popular_Choice_Section_Sub img{
                    margin: 0 7vw;
                }
            }

             @media only screen and (min-width:80em) {  /* 1280px*/
                .Popular_Choice_Section_Sub img{
                    margin: 0 5vw;
                    width: 7vw;
                }
            }

            /* End of Popular Choice Section */




    </style>
   <script>
        $(document).ready(function() {

            $('.first_sorter').on('click', function(event){
                var $this = $(this);
                var $target = event.target | event.srcElement;
                $this.parents().siblings().toggleClass('show');
                $(this).toggleClass('flip');
            });

           
            $('.Hamburger_Close').on('click',function(){

                $('.Nav_Bar_Menu').toggleClass('open');

            });

            // setTimeout(function(){

  
            // // document.getElementById("Subscription_Pop_Up").style.display = "block";

            // document.body.scrollTop = 0; // For Safari
            // document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera

            

            // },8000);


            
            

            // $('#subscription_email_button').on('click', function(){

            //      var $this = $(this);

            //     $this.parents('#Subscription_Pop_Up').addClass('hidden');
  
            //         // Need to make email link work 
            
            
            // });
            // $('#Opt_Out_Link').on('click', function(){

            //      var $this = $(this);

            //     $this.parents('#Subscription_Pop_Up').addClass('hidden');
  
            //     //    Need to make email link work 


            // });

            
           


			var timer;
			$("#menu ul li").mouseenter(function(){timer = setTimeout(function(){$('#Beauty_Megamenu').show();}, 800);})
			$("#menu ul li").mouseout(function(){clearTimeout(timer);$('#Beauty_Megamenu').hide()})





             var width = $(window).width();
             if(width >= 1280){
                 $('row Mobile_Footer').hide();
                 $('row Laptop_Footer').show();
             }
        });

       

    </script> 
    <script>
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
    </script>
  
    
</head>
<body>


<button onclick="topFunction()" id="myBtn">&#9651;</button>  

<aside id="aside">
    <ul>
        <li id="facebook"><a href="https://www.facebook.com/mccormacks.clonmel"><i class="fab fa-2x  face fa-facebook fa-facebook-f"></i></a></li>
        <li id="pinterest"><a href="https://www.pinterest.ie/mccormackspharmacyonline/" ><i class="fab fa-2x  pin fa-pinterest"></i></a></li>
        <li id="twitter"><a href="https://twitter.com/cormacks_mc?lang=en"><i class="fab fa-2x  tweet fa-twitter"></i></a></li>
        <li id="instagram"><a href="https://www.instagram.com/mccormackspharmacy/?hl=en" ><i class="fab  fa-instagram2 fa-2x fa-instagram"></i></a></li>
        <li id="snapchat"><a></a><i class="fab fa-2x fa-snapchat fa-snapchat-ghost"></i></li>
    </ul>
</aside>

<div id="Cookie_Banner">
    <span>This site uses cookies. By continuing to browse this site you are agreeing to our use of cookies.</span>
    <a href="legal.php?term=Cookies" target="blank" class="Find_Out_More_Link" >Find Out More Here</a>
    <a onclick="dismissCookie()" role="button" class="Accept_And_Close_Button right">Accept and Close</a>
</div>
    
<!-- <//?php include("popup.php"); ?>   -->

<?php include("header.php"); ?>

<?php include("image-slider.php");?>


            <div class="Boxes">
                    <div class = "Most_Popular_Section">
                        <h1>Most Popular (Beauty)</h1>
                            <div class="Most_Popular_Section_Sub" v-for= "mitem in products.slice(1,7)" :key= "mitem.id">
                                <div id="tag">{{tagSelected}}</div>
                                <img :src = "mitem.image" >
                                <h2>{{mitem.name}}</h2>
                                <a :href="mitem.link"></a>
                                <article >€ {{mitem.price}}</article>
                            </div>
                    </div>
                    

                     <div class = "Editors_Picks_Section">
                        <h1>Editor's Picks(Health)</h1>
                        <div class="Editors_Picks_Section_Sub" v-for= "mitem in products.slice(8,14)" :key= "mitem.id">
                            <div id="tag">{{tagSelected}}</div>
                            <img :src = "mitem.image" alt="">
                            <h2 >{{mitem.name}}</h2>
                            <a :href="mitem.link"></a>
                            <article >€ {{mitem.price}}</article>
                        </div>
                    </div>

                    
                    <div class = "Popular_Choice_Section">
                        <h1>Popular Choice(Skincare)</h1>
                        <div class="Popular_Choice_Section_Sub" v-for= "mitem in products.slice(15,19)" :key= "mitem.id">
                            <div id="tag">🚑 Popular 🚑 </div>
                            <img :src = "mitem.image" alt="">
                            <h2 >{{mitem.name}}</h2>
                            <a :href="mitem.link"></a>
                            <article >€ {{mitem.price}}</article>
                        </div>
                    </div>
            </div>

                    <script>
                         var app = new Vue({
                                el: '.Boxes',
                                created() {
                                    $(document).ready(function(){
                                        $(".Most_Popular_Section_Sub").click(function(){
                                            window.location = $(this).find("a").attr("href");
                                            return false;     
                                         });
                                         $(".Editors_Picks_Section_Sub").click(function(){
                                            window.location = $(this).find("a").attr("href");
                                            return false;     
                                         });   
                                         $(".Popular_Choice_Section_Sub").click(function(){
                                            window.location = $(this).find("a").attr("href");
                                            return false;     
                                         });                                       
                                    });
                                    
                                },
                                mounted() {

                                    //How to handle an all object response 
                                        let vm = this
                                            
                                        axios.get('https://sheets.googleapis.com/v4/spreadsheets/1tsalHSuO_Qt3oSGi3o6X4ZE7GstOlK2tOP6aQyI5gVQ/values/Sheet1?key=AIzaSyD-8poX-toKfN-LVyfp0uD9HMFzPIZ1NsM').then(function(response){
                                            console.log(response.data);
                                        
                                            let specials = response.data.values;
                                                for (let index = 0; index < specials.length; index++) {
                                                    const product = specials[index];
                                                    let mitem = {
                                                        name: product[0],
                                                        price: product[1],
                                                        image: product[2],
                                                        link: product[3],
                                                    }
                                                vm.products = vm.products.concat(mitem);
                                                vm.rNumber = Math.floor( Math.random() * 7 );
                                                vm.tagSelected = vm.tags[vm.rNumber];
                                                vm.link = mitem.link;

                                                
                                                

                                                }

                                            }).catch(function (error) {
                                            // handle error
                                            console.log(error);
                                            })

                                            
                                             
                                           
                                            

                                },
                                data() {
                                    return {
                                            tags: ["⭐️️ Best Seller ⭐️  " , " 🍸 Nightout 🍸" , "🏷 Sale On 🏷 " , " 👍 Promotion 👍 " , " ⭐️️ Best Seller ⭐️ " , "🙌🏻 Popular 🙌🏻 " ],
                                            tagSelected: "",
                                            rNumber: 0,
                                            products: [],
                                            link: "",
                                            
                                    }
                                }
                        })

                    </script>
    				 
                <div class="row ">


                    <div  class="col-12 Stay_In_The_Know_Section">
                        <h2 id="Stay_In_The_Know_Section_Heading">Stay In The Know</h2>
                        <div id="Stay_In_The_Know_Section_Social_Media_Container">
                            <a href="https://www.facebook.com/McCormacksPharmacy/" class="facebook"><i class="fab fa-2x fa-facebook fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/mccormackspharmacy/?hl=en" class="instagram"><i class="fab  fa-instagram2 fa-2x fa-instagram"></i></a>
                            <a href="https://twitter.com/cormacks_mc?lang=en" class="twitter"><i class="fab fa-2x fa-twitter"></i></a>
                            <a href="https://www.pinterest.ie/mccormackspharmacyonline/" class="pinterest"><i class="fab fa-2x fa-pinterest"></i></a>
                        </div>
                        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                        <div class="elfsight-app-be5d8108-cc37-49af-a58d-a19916a81baf"></div>
                    </div>

                </div>

                

				
        </div>

    








<script src="Resources/Javascript/homepage.js"></script>




<?php include("footer.php"); ?>


    
</body>
</html>