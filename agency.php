<?php
   
    if($_SERVER['REQUEST_METHOD']=='POST')
{
	if(isset($_POST['agency_upload_details']))
	{   
        //generate an UserId 
        $user_id=rand(100000,999999);
        
        //agency bio
        $agency_name=$_POST['agency_name'];
        $agency_motto=$_POST['agency_motto'];
        $agency_description=$_POST['agency_description'];
        $agency_deals_cap=$_POST['agency_deals_cap'];
        
        //profile card bio
        $card_name=$_POST['card_name'];
        $card_bio=$_POST['card_bio'];
        $card_contact=$_POST['card_contact'];
        
        //upcoming trips details(1)
        $tour_post1=$_POST['tour_post1'];
        $tour_start1=$_POST['tour_start1'];
        $tour_end1=$_POST['tour_end1'];
        
        //upcoming trips details(2)
        $tour_post2=$_POST['tour_post2'];
        $tour_start2=$_POST['tour_start2'];
        $tour_end2=$_POST['tour_end2'];
        
        $target_dir="images/";//file directory to store images
		//agency logo 
       $agency_logo=$target_dir.basename($_FILES["agency_logo"]["name"]);
		$imageFileType= pathinfo($agency_logo,PATHINFO_EXTENSION);
                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                  ) {$flag=0;}
		
		move_uploaded_file($_FILES["agency_logo"]["tmp_name"], $agency_logo);
        
        //profile card dp
       
        
        echo $user_id;
        echo $agency_name;
         echo $agency_motto;
         echo $agency_description;
         echo $agency_deals_cap;
      }
    }
        
?>
