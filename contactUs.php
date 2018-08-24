<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="McCormacks Pharmacy is one of the leading online pharmacy stores in Ireland that offers a complete range of pharmaceutical drugs, health & beauty products, fragrances for men & women from leading brands, and much more! We have the most genuine prices from all other stores! Explore our pharmacy today and shop your way!">
    <link href="https://fonts.googleapis.com/css?family=Caveat|PT+Serif:400i|IndieFlower|Quicksand|Raleway|Bitter|Dosis|Schoolbell|SirinStencil|Poiret+One" rel="stylesheet">
    <?php include ("style.php"); ?>
    <link rel="stylesheet" href="Resources/CSS/ContactUs.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <title>McCormack's Pharmacy | Contact Us</title>
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
    <!-- 1 -->

<section id="Main_Image_Container">

    <div id="Store_Locations_On_Ireland_Map">
        <img src="Resources/Images/Ireland.jpg" alt="" id="Ireland_Map">
        <i class="far fa-2x fa-dot-circle" id="Store_Point1"></i>
        <h2 id="Clonmel_Store_Map_Location">Clonmel</h2>
        <i class="far fa-2x fa-dot-circle" id="Store_Point2"></i>
        <h2 id="Dundalk_Store_Map_Location">Dundalk</h2>
        <i class="far fa-2x fa-dot-circle" id="Store_Point3"></i>
        <h2 id="Tullamore_Store_Map_Location">Tullamore</h2>
        <i class="far fa-2x fa-dot-circle" id="Store_Point4"></i>
        <h2 id="Store_Map_Location">Belmullet</h2>
    </div>

    <h1 id="Message_Heading">Write To Us</h1>

    <?php

        //Check for header injections
        function has_header_injection($str){
            return preg_match("/[\r\n]/", $str);
        }

        if(isset($_POST['Submit_Message_Button'])) {
            $name = trim($_POST['Name_Input']);
            $email = trim($_POST['Email_Input']);
            $subject=$_POST['Subject_Input'];
            $teaser = $_POST['Teaser_Input'];
            $message = $_POST['Message_Input'];

            // Check to see if $name or $email or $subject have header injections

            if(has_header_injection($name)|| has_header_injection($email) || has_header_injection($subject)) {
                die();// if true, kill the script 
            } 

            if(!$name || !$email || !$message || !$teaser || !$subject ) {
                echo '<h4 id="Error_Message_Label">All Fields are Required.</h4><a href="contactUs.php" role="button" id="Error_Message_Button">Try Again</a>';
                exit;
            }

            // Add the recipient email to a variable
            $to = "oceallaighadam96@gmail.com";

            //Create a subject
            $email_subject= "$name sent you a message via your contact form";

            //Construct the actual message
            $email_message = "Name: $name\r\n";
            $email_message .= "Email: $email\r\n";
            $email_message .= "Message: \r\n$message";

            //Check to see if the subscribe checkbox was checked...
            if(isset($_POST['Checkbox_Newsletter_Button']) && ($_POST['Checkbox_Newsletter_Button'] == 'Subcribe')){
                //Add a new line to the message variable 
                $message .= "\r\n\r\nPlease add $email to your mailing list.\r\n ";
            }

            //How many characters per line in the message
            $message = wordwrap($message , 72);

            //Setting the mail headers to make sure the email doesn't get seen as spam

            $headers = "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
			$headers .= "From: $name <$email> \r\n";
			$headers .= "X-Priority: 1\r\n";
			$headers .= "X-MSMail-Priority: High\r\n\r\n";
            
			
			// Send the email!
			mail($to, $subject, $message, $headers);
		?>
		
		<!-- Show success message after email has sent -->
		<h5>Thanks for contacting Franklin's!</h5>
		<p>Please allow 24 hours for a response.</p>
		<p><a href="/final" class="button block">&laquo; Go to Home Page</a></p>
		
		<?php
			} else {
		?>


    <form action="" method="post" id="form1">
        <div id="input_container">
            <input type="text" name="Name_Input" id="Name_Input" placeholder="Name" maxlength="30" autocorrect="off" autocomplete="off" autocapitalize="off" aria-describedby="" aria-label="Name" aria-required="true" value="" required="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="email" name="Email_Input" id="Email_Input" placeholder="Email"><br><br>
            <input type="text" name="Subject_Input" id="Subject_Input" placeholder="Subject">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="Teaser_Input" id="Teaser_Input" placeholder="5x4"><br><br><br><br>
        </div>
        <textarea name="Message_Input" id="Message_Input" cols="30" rows="10" placeholder="Message.."></textarea>

        <input type="checkbox" name="Checkbox_Newsletter_Button" id="Checkbox_Newsletter_Button" value="Subscribe">
        <label for="Checkbox_Newsletter_Button" id="Checkbox_Newsletter_Button_Heading">Subscribe To Our Newletter</label>

        <input type="submit" value="Send" id="Submit_Message_Button" name="Submit_Message_Button" >
    </form>

            <?php } ?>
    <!-- <img src="Resources/Images/pot3.jpg" alt="" id="Main_Image_Contact_Us_Pic">
    <h2 id="Main_Image_Contact_Us_Heading">Hello There!</h2> -->
</section>



    <!-- 2 -->
<section id="Banner_Contact_Us">

    <div id="Banner_Contact_Us_Left">
        <h1 id="Number_Four">4</h1>&nbsp;<h1 id="Symbol_Plus">+</h1>
        <h1 id="Number_One_Details">Over 4 Pharmacy<br> Franchises</h1>


    </div>

    <div id="Banner_Contact_Us_Left_Middle">

        <i class="fas fa-3x fa-phone"></i><h3 id="Number_Two_Details">For All Enquiries<br><em> Call 052 6199329</em></h3>
    </div>

    <div id="Banner_Contact_Us_Right_Middle">

        <i class="fas fa-3x fa-envelope"></i><h3 id="Number_Three_Details">Need Product Info?<br><em>Email info@McCormacksPharmacy.ie</em></h3>


    </div>

    <div id="Banner_Contact_Us_Right">

        <i class="fas fa-3x fa-clock"></i><h3 id="Number_Four_Details">Open 6 days a week</h3>

    </div>


</section>


    <!-- 3 -->


<section id="Locations_Section">


    <div id="Store_No1">

        <div id="Store_No1_Image_Container">  
            <img src="Resources/Images/McCormacks.jpg" alt="" id="Store_No1_Image">
        </div> 

        <img src="Resources/Images/McCormacks.png" alt="" id="Circular_Logo_Store_No1">

        <div id="Store_No1_Details">
                <i class="fas fa-map-marker" id="Store_No1_Marker"></i><h3 id="Store_No1_Marker_Heading">Stop By <br><h5 id="Actual_Address" >23 Bolton St, Oldbridge, Clonmel, Co. Tipperary
</h5></h3>
                <i class="fas fa-phone" id="Store_No1_Phone"></i><h3 id="Store_No1_Phone_Heading">Let's Chat<br><h5 id="Actual_Phone" >052 6199329</h5></h3>
                <i class="fas fa-envelope" id="Store_No1_Envelope"></i><h3 id="Store_No1_Envelope_Heading">Email Us<br><h5 id="Actual_Email" >info@McCormacksPharmacy.ie</h5></h3>
                <i class="fas fa-clock" id="Store_No1_Clock"></i><h3 id="Store_No1_Clock_Heading">Pop In<br><h5 id="Actual_Clock">
                    Thursday	8:30a.m.–6:30p.m. <br>
                    Friday	8:30a.m.–6:30p.m.<br>
                    Saturday	9a.m.–6p.m.<br>
                    Sunday	Closed<br>
                    Monday	8:30a.m.–6:30p.m.<br>
                    Tuesday	8:30a.m.–6:30p.m.<br>
                    Wednesday	8:30a.m.–6:30p.m.</h5></h3>
        </div>

    </div>

    <div id="Store_No2">

        <div id="Store_No2_Image_Container">  
            <img src="Resources/Images/mccdundalk.jpg" alt="" id="Store_No2_Image">
        </div> 
        <img src="Resources/Images/McCormacks.png" alt="" id="Circular_Logo_Store_No2">

        <div id="Store_No2_Details">
                <i class="fas fa-map-marker" id="Store_No2_Marker"></i><h3 id="Store_No2_Marker_Heading">Stop By <br><h5 id="Actual_Address2" >Fairway centre, Blackrock Rd, Dundalk, Co. Louth
</h5></h3>
                <i class="fas fa-phone" id="Store_No2_Phone"></i><h3 id="Store_No2_Phone_Heading">Let's Chat<br><h5 id="Actual_Phone2" >042 9322677</h5></h3>
                <i class="fas fa-envelope" id="Store_No2_Envelope"></i><h3 id="Store_No2_Envelope_Heading">Email Us<br><h5 id="Actual_Email2" >info@McCormacksPharmacy.ie</h5></h3>
                <i class="fas fa-clock" id="Store_No2_Clock"></i><h3 id="Store_No2_Clock_Heading">Pop In<br><h5 id="Actual_Clock2">
                Friday	9a.m.–7p.m.<br>
                Saturday	9a.m.–6p.m.<br>
                Sunday	11a.m.–5p.m.<br>
                Monday	9a.m.–7p.m.<br>
                Tuesday	9a.m.–7p.m.<br>
                Wednesday	9a.m.–7p.m.<br>
                Thursday	9a.m.–7p.m.</h5></h3>
        </div>


    </div>

    <div id="Store_No3">

         <div id="Store_No3_Image_Container">  
            <img src="Resources/Images/McCormack'sTullamore.jpg" alt="" id="Store_No3_Image">
        </div> 
        <img src="Resources/Images/McCormacks.png" alt="" id="Circular_Logo_Store_No3">

        <div id="Store_No3_Details">
                <i class="fas fa-map-marker" id="Store_No3_Marker"></i><h3 id="Store_No3_Marker_Heading">Stop By <br><h5 id="Actual_Address3" >Kilbeggan Bridge, Arden Rd, Tullamore, Co. Offaly
</h5></h3>
                <i class="fas fa-phone" id="Store_No3_Phone"></i><h3 id="Store_No3_Phone_Heading">Let's Chat<br><h5 id="Actual_Phone3" >057 9326675</h5></h3>
                <i class="fas fa-envelope" id="Store_No3_Envelope"></i><h3 id="Store_No3_Envelope_Heading">Email Us<br><h5 id="Actual_Email3" >mccormackstullamore@gmail.com</h5></h3>
                <i class="fas fa-clock" id="Store_No3_Clock"></i><h3 id="Store_No3_Clock_Heading">Pop In<br><h5 id="Actual_Clock3">
                Friday	9:15a.m.–7:15p.m.<br>
                Saturday	9:15a.m.–6:15p.m.<br>
                Sunday	Closed<br>
                Monday	9:15a.m.–6:15p.m.<br>
                Tuesday	9:15a.m.–6:15p.m.<br>
                Wednesday	9:15a.m.–6:15p.m.<br>
                Thursday	9:15a.m.–6:15p.m.</h5></h3>
        </div>


    </div>

    <div id="Store_No4">

        <div id="Store_No4_Image_Container">  
            <img src="Resources/Images/McCormacksErris.jpg" alt="" id="Store_No4_Image">
        </div> 
        <img src="Resources/Images/McCormacks.png" alt="" id="Circular_Logo_Store_No4">

        <div id="Store_No4_Details">
                <i class="fas fa-map-marker" id="Store_No4_Marker"></i><h3 id="Store_No4_Marker_Heading">Stop By <br><h5 id="Actual_Address4" >Curlew Hill Church Road Co. Mayo.
</h5></h3>
                <i class="fas fa-phone" id="Store_No4_Phone"></i><h3 id="Store_No4_Phone_Heading">Let's Chat<br><h5 id="Actual_Phone4" >097 20540</h5></h3>
                <i class="fas fa-envelope" id="Store_No4_Envelope"></i><h3 id="Store_No4_Envelope_Heading">Email Us<br><h5 id="Actual_Email4" >belmulletpharmacy@gmail.com</h5></h3>
                <i class="fas fa-clock" id="Store_No4_Clock"></i><h3 id="Store_No4_Clock_Heading">Pop In<br><h5 id="Actual_Clock4">
                Wednesday	9a.m.–6p.m.<br>
                Thursday	9a.m.–6p.m.<br>
                Friday	9a.m.–6:30p.m.<br>
                Saturday	9a.m.–6p.m.<br>
                Sunday	Closed<br>
                Monday	9a.m.–6p.m.<br>
                Tuesday	9a.m.–6p.m.<h5><h3>
        </div>

    </div>
    <!-- TO DO: GET Location Info about 4th Franchise -->
    <!-- This was done on june 13th -->



</section>
 

    <!-- 4 -->
<!-- <section id="Message_Container">



    


</section> -->


    <!-- 5 -->



</section> -->
<i class="fas fa-2x fa-map-marker" id="Store_Locator_Marker"></i><h2 id="Store_Locator_Heading">Store Locator</h2>


    <?php include('maps.php'); ?>
    <!-- Includes the McCormack's Pharmacy Store Loactions -->




    <?php include('footer.php'); ?>








</body>
</html>