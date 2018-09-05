<?php include('arrays.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="McCormacks Pharmacy is one of the leading online pharmacy stores in Ireland that offers a complete range of pharmaceutical drugs, health & beauty products, fragrances for men & women from leading brands, and much more! We have the most genuine prices from all other stores! Explore our pharmacy today and shop your way!">
    <link href="https://fonts.googleapis.com/css?family=Caveat|PT+Serif:400i|Indie+Flower|Quicksand|Raleway|Bitter|Dosis|Sirin+Stencil|Marck+Script|Damion" rel="stylesheet">
    <?php include ("style.php"); ?>
    <link rel="stylesheet" href="Resources/CSS/AskPharmacist.css">
    <link rel="stylesheet" href="Resources/CSS/HealthProducts.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $.getJSON('https://newsapi.org/v2/everything?sources=medical-news-today&apiKey=1648e454b427440788c1d3acd76462bf', function(data) {
  
                console.log(data.articles);
   
                // set the i variable
                var i = 0;
   
                // run the each loop
                $.each(data.articles, function(i, val) {
                    
                            var title = val.title;
                            var description = val.description;
                            var imageURL = val.urlToImage;
                            var url = val.url;
            
                        // breaks out of the loop at 13
                        if (i++ > 12) {
                        return false;
                        console.log("well");
                        }      
        
                    // output HTML each time the loop runs
                    $('.Recommended_Health_Articles_Output').append('<div class="image"><img src="' + imageURL + '"></div><h2 class="title">' + title + '</h2><br><h4 class="description">' + description + '</h4><br><br><br><br><a href="' + url + '" target="blank" id="Read_More_Link">Read More</a><br><br><br><br>');
                      
                }); 
                 
        });

    </script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <title>McCormack's Pharmacy | Ask The Pharmacist</title>
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

        

    <?php include('healthoptions.php'); ?>

    <div class="container full">


        <div class="row">
            <div class="col-12">
            </div>
        </div>


        <div class="row">
            <div class="col-12">
            </div>
        </div>


        <div class="row">
            <div class="col-12">
            </div>
        </div>
        
        <div class="row">

            <div class="col-7">
            </div>

            <div class="col-5">
                <h1 id="Ask_Our_Pharmacist_Heading">Ask Our Pharmacist</h1>
            </div>

        </div>

        <div class="row">

            <div class="col-5">
            </div>

            <div class="col-7">
                <h2 id="Fergal_Heading">Fergal McCormack</h2>
            </div>

        </div>

        <div class="row">

            <div class="col-5">
                <img src="Resources/Images/Richard.jpg" id="Ask_Fergal_Picture">
                <div id="Contact_Box_Fergal">
                    <a href="tel:+353 52 6199329" id="Send_Phone_Link"><i class="fas fa-3x fa-phone" ></i></a>
                    <a href="mailto:oceallaighadam96@gmail.com"   role="link" id="Send_Email_Link"><i class="fas fa-3x fa-envelope" ></i></a>
                </div>
            </div>

            <div class="col-7">
                <p id="Fergal_Paragraph_Summary_Career">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat eius, quas ut debitis consequatur praesentium explicabo.Dicta rem quasi consequuntur esse iusto blanditiis quis laudantium harum, vero repudiandae? Dolorem, totam.
                Fuga consequuntur expedita doloremque illum doloribus. Ducimus dolores quibusdam deserunt neque est veniam minima voluptatibus possimus adipisci, culpa laboriosam, laborum, fuga mollitia omnis eius. Itaque ad minima sapiente quod cum?
                Accusamus reiciendis, doloremque numquam molestias architecto itaque voluptas veritatis eius qui! Ad dolore nisi, assumenda, veniam odit in officiis dolor cupiditate minus eaque neque, illum saepe harum rerum quisquam quo.
                Sint itaque distinctio incidunt ut molestias rem accusantium debitis perspiciatis at doloremque doloribus voluptas, nemo et sunt voluptatem odio, ipsum, quis neque vero veniam? Assumenda blanditiis perferendis illum laborum neque.
                Dignissimos laborum cumque nulla quas atque odio vel accusantium aut debitis. Obcaecati itaque fugit, laudantium distinctio rem tempora nesciunt quam harum facere consequatur explicabo ex consectetur exercitationem voluptas iure cumque.</p>
            </div>

        </div>

         <div class="row">

                <div class="col-7">
                </div>

                <div class="col-5">
                    <h3 id="Follow_Fergal_Social_Media_Heading">Or Follow Him On Social Media:</h3>
                    <div id="Follow_Fergal_Social_Media_Container">
                        <a href="#"><i class="fab fa-2x fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-2x fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-2x fa-snapchat-ghost"></i></a>
                    </div>
                </div>

        </div>

        <div class="row">
            <div class="col-12">
            </div>
        </div>


        <div class="row">
            <div class="col-12">
            </div>
        </div>

        <div class="row">
            <div class="col-12">
            </div>
        </div>


        <div class="row">
            <div class="col-12">
            </div>
        </div>

        <div class="row">
            <div class="col-12">
            </div>
        </div>


        <div class="row">
            <div class="col-12">
            </div>
        </div>

        <div class="row">

            <div class="col-4">
                <h3 id="Recommended_Health_Articles_Heading">Recommended Health Articles</h3>
            </div>

            <div class="col-8">
            </div>

        </div>

        <div class="row">
            <div class="col-12">
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="Recommended_Health_Articles_Output">

        
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
            </div>
        </div>


        <div class="row">
            <div class="col-12">
            </div>
        </div>

        <div class="row">
            <div class="col-12">
            </div>
        </div>

    </div>

    
       
        
        
        

        

        

    


    
        

        

    




    <?php include("footer.php"); ?>
    
</body>
</html>