<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="McCormacks Pharmacy is one of the leading online pharmacy stores in Ireland that offers a complete range of pharmaceutical drugs, health & beauty products, fragrances for men & women from leading brands, and much more! We have the most genuine prices from all other stores! Explore our pharmacy today and shop your way!">
    <link href="https://fonts.googleapis.com/css?family=Caveat|PT+Serif:400i|IndieFlower|Quicksand|Raleway|Bitter|Dosis|Schoolbell|SirinStencil|" rel="stylesheet">
    <?php include ("style.php"); ?>
    <link rel="stylesheet" href="Resources/CSS/brands.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"> 
    <title>McCormack's Pharmacy | Brands</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            console.log("Hello");

            $(window).on("load", function(){
                
                $('.ecwid-search-widget__input').css("border-radius","15px");
            });

            

            $('#All_Brands_Container li a').click(function(){
                $(this).siblings().children().toggleClass("show");
                $(this).siblings().children().children().css("transform", "rotate(180deg)");
            });

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

    <?php include("header.php"); ?>

    <div id="All_Brands_Heading">These are all the brands we stock</div>

    <div id="All_Brands_Container">
        <ul>
            <li><a>A &#9656;</a>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contcate</a></li>
                    <li><a href="#">vvvvv</a></li>
                    <li><a href="#">hjbigugiug</a></li>
                    <li><a href="#">vdshvh</a></li>
                    <li><a href="#">dsh</a></li>
                    <li><a href="#">bub</a></li>
                </ul>
            </li>
            <li><a href="">B</a>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contcate</a></li>
                    <li><a href="#">vvvvv</a></li>
                    <li><a href="#">hjbigugiug</a></li>
                    <li><a href="#">vdshvh</a></li>
                    <li><a href="#">dsh</a></li>
                    <li><a href="#">bub</a></li>
                </ul>
            </li>
            <li><a href="#">C</a></li>
            <li><a href="#">D</a></li>
            <li><a href="#">E</a></li>
            <li><a href="#">F</a></li>
            <li><a href="#">G</a></li>
            <li><a href="#">H</a></li>
            <li><a href="#">I</a>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contcate</a></li>
                    <li><a href="#">vvvvv</a></li>
                    <li><a href="#">hjbigugiug</a></li>
                    <li><a href="#">vdshvh</a></li>
                    <li><a href="#">dsh</a></li>
                    <li><a href="#">bub</a></li>
                </ul>
            </li>
            <li><a href="#">J</a></li>
            <li><a href="#">K</a></li>
            <li><a href="#">L</a></li>
            <li><a href="#">M</a></li>
            <li><a href="#">N</a></li>
            <li><a href="#">O</a>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contcate</a></li>
                    <li><a href="#">vvvvv</a></li>
                    <li><a href="#">hjbigugiug</a></li>
                    <li><a href="#">vdshvh</a></li>
                    <li><a href="#">dsh</a></li>
                    <li><a href="#">bub</a></li>
                </ul>
            </li>
            <li><a href="#">P</a></li>
            <li><a href="#">Q</a></li>
            <li><a href="#">R</a></li>
            <li><a href="#">S</a>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contcate</a></li>
                    <li><a href="#">vvvvv</a></li>
                    <li><a href="#">hjbigugiug</a></li>
                    <li><a href="#">vdshvh</a></li>
                    <li><a href="#">dsh</a></li>
                    <li><a href="#">bub</a></li>
                </ul>
            </li>
            <li><a href="#">T</a></li>
            <li><a href="#">U</a></li>
            <li><a href="#">V</a></li>
            <li><a href="#">W</a></li>
            <li><a href="#">X</a></li>
            <li><a href="#">Y</a>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contcate</a></li>
                    <li><a href="#">vvvvv</a></li>
                    <li><a href="#">hjbigugiug</a></li>
                    <li><a href="#">vdshvh</a></li>
                    <li><a href="#">dsh</a></li>
                    <li><a href="#">bub</a></li>
                </ul>
            </li>
            <li><a href="#">Z</a></li>
        </ul>
    </div>

    <?php include("footer.php"); ?>
    
</body>
</html>