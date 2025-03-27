<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The web site of roebit</title>
    <!-- The style.css file allows you to change the look of your web pages.
         If you include the next line in all your web pages, they will all share the same look.
         This makes it easier to make new pages for your site. -->
    <link href="/style.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">  

  </head>
  <body>
<div class="entry"><div class="lb_gallery">
		<?php
      $Folder_Name = "gallery";

      $images = glob("$Folder_Name/*.{jpg,png,gif}", GLOB_BRACE);


      foreach($images as $image){

  					echo '<a href="'.$image.'" data-lightbox="auto_lightbox">
  					<img class="lb_img" src="' .$image. '" alt="">
  					</a>';

  			}
    ?>
</div></div>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script type="text/javascript" 
  src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js">    
  </script>
</html>
