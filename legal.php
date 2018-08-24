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

