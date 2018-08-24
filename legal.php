<?php include("header.php"); 

    
    
    function strip_bad_chars($input) {
        $output = preg_replace("/[^a-zA-Z0-9_-]/", " ",$input);
        return $output;
    }

    
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="McCormacks Pharmacy is one of the leading online pharmacy stores in Ireland that offers a complete range of pharmaceutical drugs, health & beauty products, fragrances for men & women from leading brands, and much more! We have the most genuine prices from all other stores! Explore our pharmacy today and shop your way!">
    <link href="https://fonts.googleapis.com/css?family=Caveat|PT+Serif:400i|Indie+Flower|Quicksand|Raleway|Bitter|Dosis|Sirin+Stencil|" rel="stylesheet">
    <?php include ("style.php"); ?>
    <link rel="stylesheet" href="Resources/CSS/legal.css">
    <title>McCormack's Pharmacy | <?php if(isset($_GET['term'])) {
        $termItem = strip_bad_chars($_GET['term']);
        $terms = $policies[$termItem];
        define("TITLE","$terms[title] ");
    } ?></title>
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

        <?php include("header.php") ?>
    


    
        <h1 id="Overall_Title"><?php echo $terms['title']; ?></h1>

        <div id="Content_1">

            <p id="Content_1_Content"><?php echo $terms['content1']; ?></p>
            
        </div>

        <div id="Content_2">
            <p id="Content_1_Content"><?php echo $terms['content2']; ?></p>
        </div>

        <div id="Content_3">
             <p id="Content_1_Content"><?php echo $terms['content3']; ?></p>
        </div>

        <div id="Content_4">
            <p id="Content_1_Content"><?php echo $terms['content4']; ?></p>
        </div>

        <div id="Content_5">
            <p id="Content_1_Content"><?php echo $terms['content5']; ?></p>
        </div>

        <div id="Content_6">
            <p id="Content_1_Content"><?php echo $terms['content6']; ?></p>
        </div>


    
    














    <?php include("footer.php") ?>




</body>
</html>

