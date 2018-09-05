
<?php $imagesTotal = 9; 
     include("arrays.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="McCormacks Pharmacy is one of the leading online pharmacy stores in Ireland that offers a complete range of pharmaceutical drugs, health & beauty products, fragrances for men & women from leading brands, and much more! We have the most genuine prices from all other stores! Explore our pharmacy today and shop your way!">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Caveat|PT+Serif:400i|Indie+Flower|Quicksand|Raleway|Bitter|Dosis|Schoolbell|Sirin+Stencil|Poiret+One|Comfortaa:300" rel="stylesheet">
    <?php include ("style.php"); ?>
    <link rel="stylesheet" href="Resources/CSS/AboutUs.css">
     <title>McCormack's Pharmacy | About Us</title>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"> 
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script>

        $(document).ready(function(){
            var timer = 4000;
            var i = 0;
            var max= $(".MemberImage").length;

            $(".MemberImage").eq(i).addClass("active").css('left','5vw');
            $(".MemberImage").eq(i+1).addClass("active").css('left','8vw');
            $(".MemberImage").eq(i+2).addClass("active").css('left','11vw');
            


            setInterval(function(){
                $(".MemberImage").removeClass("active");
                $(".MemberImage").eq(i).css('transition-delay','0.25s')
                $(".MemberImage").eq(i+1).css('transition-delay','0.50s')
                $(".MemberImage").eq(i+2).css('transition-delay','0.75s')
               


            if (i < max-3) {
                i = i+4; 
            } // this code basically checks the status of the images and then it checks if i=1 then its less than 8 so add 4 to start again but if its 8 then i=0 to start the process again

            else { 
                i = 0; 
            } 
            $(".MemberImage").eq(i).css('left','5vw').addClass('active').css('transition-delay','1.25s');
		    $(".MemberImage").eq(i + 1).css('left','8vw').addClass('active').css('transition-delay','1.5s');
		    $(".MemberImage").eq(i + 2).css('left','11vw').addClass('active').css('transition-delay','1.75s');
        
            //These last four add a delay onto the next four after we have checked the status of where we are on the slider once you have removed the classes from the other images 
	
	        }, timer);
            
        });




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
    <?php include("header.php"); ?>



            <div class="container full">


                <div class="row">
                    <div class="col-12">
                        <section class="sec1"></section>
                    </div>
                </div>


                <div class="row">
                    <div class="col-4">

                    </div>
                    <div class="col-4">
                        <img src="Resources/Images/McCormacks.png" alt="" id="Our_Story_Logo">
                        <h1 id="Our_Story_Heading">OUR STORY</h1>
                        <hr id="Our_Story_Underline">
                    </div>
                    <div class="col-4">

                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="Our_Story_Piece">
                
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad officia culpa quis quisquam sapiente eius fuga perferendis, laudantium est deserunt laboriosam eveniet ullam labore eum, eligendi, inventore nihil sequi rem.
                            Minus magnam voluptates totam at culpa, neque deserunt natus sit delectus alias. Quam unde delectus totam natus at labore animi sed tempore quod? Itaque architecto, omnis atque assumenda tempora cupiditate.
                            Similique expedita neque pariatur, repellendus in sapiente! Molestiae, culpa dolorum! Obcaecati suscipit error aliquid tempora eaque ipsa consequuntur, fuga voluptatem accusantium. Modi, distinctio alias optio maiores fuga inventore saepe? Ratione.
                            Quidem eveniet labore facere reiciendis ullam suscipit minima dolore hic, libero provident dignissimos laudantium ipsam, nam aspernatur deserunt est quaerat voluptatum quae asperiores dolorum ducimus eaque. Sunt voluptatem atque temporibus!
                            Nisi perspiciatis soluta blanditiis unde alias accusantium, repellendus libero mollitia hic, natus exercitationem asperiores culpa qui harum vero porro maiores rerum dolor similique! Enim dolores eos ex! Repellat, sed vero.
                            Enim, quaerat voluptates necessitatibus harum incidunt optio sunt ducimus molestias cum a, eaque quae eos exercitationem neque tenetur dolore? Perferendis sed, inventore explicabo maiores quos quidem delectus quas consequuntur itaque!
                            Nemo, sint. Molestias cumque nesciunt consequuntur voluptate, itaque hic? Harum nemo iste voluptatibus vitae distinctio possimus cum, assumenda doloribus quae. Animi labore repudiandae quae, minus suscipit consectetur facilis doloribus eligendi.</p>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-12">
                        <section class="sec2">
                            <h1 id="Sec2_Nationwide_Heading">NATIONWIDE</h1>
                        </section>
                    </div>
                </div>


                <div class="row">
                    <div class="col-4">

                    </div>
                    <div class="col-4">
                        <h1 id="Our_Philosphy_Heading">OUR PHILOSPHY</h1>
                        <hr id="Our_Philosphy_Underline">
                    </div>
                    <div class="col-4">

                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="Our_Philosphy_Piece">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad officia culpa quis quisquam sapiente eius fuga perferendis, laudantium est deserunt laboriosam eveniet ullam labore eum, eligendi, inventore nihil sequi rem.
                            Minus magnam voluptates totam at culpa, neque deserunt natus sit delectus alias. Quam unde delectus totam natus at labore animi sed tempore quod? Itaque architecto, omnis atque assumenda tempora cupiditate.
                            Similique expedita neque pariatur, repellendus in sapiente! Molestiae, culpa dolorum! Obcaecati suscipit error aliquid tempora eaque ipsa consequuntur, fuga voluptatem accusantium. Modi, distinctio alias optio maiores fuga inventore saepe? Ratione.
                            Quidem eveniet labore facere reiciendis ullam suscipit minima dolore hic, libero provident dignissimos laudantium ipsam, nam aspernatur deserunt est quaerat voluptatum quae asperiores dolorum ducimus eaque. Sunt voluptatem atque temporibus!
                            Nisi perspiciatis soluta blanditiis unde alias accusantium, repellendus libero mollitia hic, natus exercitationem asperiores culpa qui harum vero porro maiores rerum dolor similique! Enim dolores eos ex! Repellat, sed vero.
                            Enim, quaerat voluptates necessitatibus harum incidunt optio sunt ducimus molestias cum a, eaque quae eos exercitationem neque tenetur dolore? Perferendis sed, inventore explicabo maiores quos quidem delectus quas consequuntur itaque!
                            Nemo, sint. Molestias cumque nesciunt consequuntur voluptate, itaque hic? Harum nemo iste voluptatibus vitae distinctio possimus cum, assumenda doloribus quae. Animi labore repudiandae quae, minus suscipit consectetur facilis doloribus eligendi.</p>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <section class="sec3">
                        <h1 id="Sec3_Beauty_Products_Heading">High-End Beauty Products</h1>
                    </section>
                </div>


                <div class="row">
                    <div class="col-4">

                    </div>
                    <div class="col-4">
                        <h1 id="Our_Team_Heading">OUR TEAM</h1>
                        <hr id="Our_Team_Underline">
                    </div>
                    <div class="col-4">

                    </div>
                </div>


                <div class="row">
                    <div class="col-12">
                        <div class="Our_Team_Piece">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad officia culpa quis quisquam sapiente eius fuga perferendis, laudantium est deserunt laboriosam eveniet ullam labore eum, eligendi, inventore nihil sequi rem.
                            Minus magnam voluptates totam at culpa, neque deserunt natus sit delectus alias. Quam unde delectus totam natus at labore animi sed tempore quod? Itaque architecto, omnis atque assumenda tempora cupiditate.
                            Similique expedita neque pariatur, repellendus in sapiente! Molestiae, culpa dolorum! Obcaecati suscipit error aliquid tempora eaque ipsa consequuntur, fuga voluptatem accusantium. Modi, distinctio alias optio maiores fuga inventore saepe? Ratione.
                            Quidem eveniet labore facere reiciendis ullam suscipit minima dolore hic, libero provident dignissimos laudantium ipsam, nam aspernatur deserunt est quaerat voluptatum quae asperiores dolorum ducimus eaque. Sunt voluptatem atque temporibus!
                            Nisi perspiciatis soluta blanditiis unde alias accusantium, repellendus libero mollitia hic, natus exercitationem asperiores culpa qui harum vero porro maiores rerum dolor similique! Enim dolores eos ex! Repellat, sed vero.
                            Enim, quaerat voluptates necessitatibus harum incidunt optio sunt ducimus molestias cum a, eaque quae eos exercitationem neque tenetur dolore? Perferendis sed, inventore explicabo maiores quos quidem delectus quas consequuntur itaque!
                            Nemo, sint. Molestias cumque nesciunt consequuntur voluptate, itaque hic? Harum nemo iste voluptatibus vitae distinctio possimus cum, assumenda doloribus quae. Animi labore repudiandae quae, minus suscipit consectetur facilis doloribus eligendi.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div id="Our_Team_Container">
                            <div id="Our_Team_Container_Member_Area">

                                <?php 
                                    foreach($memberContainers as $container){ ?>
                                    <span class="<?php echo $container['Class']; ?>">
                                        <img class="Members_Image" src="<?php echo $container['Image']; ?>" />
                                        <h1 class="Members_Name"><?php echo $container['Name']; ?></h1>
                                        <p class ="Members_Description"> <?php echo $container['Description']; ?></p>
                                    </span>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>



                









            </div>



    

    

    

    

    

    
        


                
        
     

    <?php include("footer.php"); ?>
    </script>
</body>
</html>