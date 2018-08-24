<?php include('arrays.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="McCormacks Pharmacy is one of the leading online pharmacy stores in Ireland that offers a complete range of pharmaceutical drugs, health & beauty products, fragrances for men & women from leading brands, and much more! We have the most genuine prices from all other stores! Explore our pharmacy today and shop your way!">
    <link href="https://fonts.googleapis.com/css?family=Caveat|PT+Serif:400i|Indie+Flower|Quicksand|Raleway|Bitter|Dosis|Sirin+Stencil|" rel="stylesheet">
    <?php include ("style.php"); ?>
    <link rel="stylesheet" href="Resources/CSS/gallery.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"> 
    <title>McCormack's Pharmacy | Gallery</title>
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
    
    <?php include('header.php') ?>


    <div id="McCormacksPharmacy_Picture_Gallery_Grid">

    
    <?php 
            foreach($gridPics as $gridPic){
                echo  "<div class=\"grid_Image\"><img src=\"$gridPic[Image]\" class=\"grid_Image_Pic $gridPic[Class]\" ></div>";
            } 
    ?> 
    
    
    
    
    
    </div>



    <?php include('footer.php') ?>








</body>
</html>