<?php
      ini_set('display_errors',1);
      error_reporting(E_ALL);

      require_once('admin/phpscripts/config.php');

      $tbl1 = "tbl_image";
      $getImages = getImage($tbl1);

      if(!is_string($getImages)){
      while($row = mysqli_fetch_array($getImages)){
        $headerlogo = $row['image_logo'];
        $promobcg = $row['image_bcg'];
        $heart = $row['image_heart'];
        $facebook = $row['image_facebook'];
        $twitter = $row['image_twitter'];
        $youtube = $row['image_youtube'];
      }
    }

      $tbl2 = "tbl_text";
      $getText = getTextinfo($tbl2);

      if(!is_string($getText)){
      while($row = mysqli_fetch_array($getText)){
        $introTitle = $row['text_title'];
        $intropar1 = $row['text_par1'];
        $intropar2 = $row['text_par2'];
        $intropar3r = $row['text_par3r'];
        $intropar3b = $row['text_par3b'];
        $intropar4r = $row['text_par4r'];
        $intropar4b = $row['text_par4b'];
        $intropar5r = $row['text_par5r'];
        $intropar5b = $row['text_par5b'];
        $intropar6r = $row['text_par6r'];
        $intropar6b = $row['text_par6b'];
        $intropar7r = $row['text_par7r'];
        $intropar7b = $row['text_par7b'];
      }
    }

      $tbl3 = "tbl_memory";
      $getmemory = getmemory($tbl3);
      $getsinglem = getsingle($tbl3);

    if(!is_string($getsinglem)){
    while($row = mysqli_fetch_array($getsinglem)){
      $memoryimages = $row['memory_pic'];
      $memorytexts = $row['memory_text'];
    }
  }

      $tbl4 = "tbl_event";
      $getevent = getevent($tbl4);

      $tbl5 = "tbl_contact";
      $getContact = getContact($tbl5);

      if(!is_string($getContact)){
      while($row = mysqli_fetch_array($getContact)){
        $address = $row['contact_address'];
        $phone = $row['contact_phone'];
        $email = $row['contact_email'];
        $map = $row['contact_map'];
      }
    }

      $tbl6 = "tbl_video";
      $getvideo = getVideo($tbl6);

      if(!is_string($getvideo)){
      while($row = mysqli_fetch_array($getvideo)){
        $video = $row['video_name'];
      }
    }



 ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Organ Donation</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
  </head>

  <body>
    <div id="siteContainer">
    <header id="mainHeader">
      <div class="row">
        <?php
          echo "<img src=\"images/$headerlogo\" alt=\"headerLogo\" id=\"headerLogo\">";
        ?>
        <div data-responsive-toggle="main-menu" data-hide-for="large" id="hamMenu">
          <button class="menu-icon float-right" type="button" data-toggle></button>
        </div>
        <div id="main-menu">
          <ul>
            <li><a href="#" id="1" class="nav">ABOUT DONATION</a></li>
            <li><a href="#" id="2" class="nav">MEMORY</a></li>
            <li><a href="#" id="3" class="nav">EVENTS</a></li>
            <li><a href="#" id="4" class="nav">CONTACT US</a></li>
            <li id="navline">|</li>
            <li><a href="#" id="signin">Sign in</a></li>
          </ul>
        </div>
      </div>
    </header>
    <section id="promo">
      <h2 class="hidden">promo</h2>
      <?php
       echo "<img id=\"promobcg\" src=\"images/$promobcg\" alt=\"promobcg\">";
      ?>
      <div id="signinpop">
        <?php
        include('admin/admin_login2.php');
         ?>
      </div>
      <p id="slogan">Making life extended<br>for someone in need</p>
      <?php
      echo "<div id=\"heartCon\"><img id=\"heart\" src=\"images/$heart\" alt=\"heart\"></div>";
      ?>
      <div class="buttonCon"><a href="admin/admin_createuser.php" class="button">Be a Donor</a></div>
      <div id="socialCon">
        <ul>
          <?php
          echo"<a target=_blank href=\"https://www.facebook.com/pages/Organ-Donation-Ontario/1589235651403335\"><li><img  id=\"facebook\" src=\"images/$facebook\"></li></a>";
          echo"<a target=_blank href=\"https://twitter.com/TrilliumGift\"><li><img class=\"social\" src=\"images/$twitter\"></li></a>";
          echo"<a target=_blank href=\"https://www.youtube.com/watch?v=n6FdS3tcso4\"><li><img class=\"social\" src=\"images/$youtube\"></li></a>";
          ?>
        </ul>
      </div>
  </section>

  <section class="section1">
    <h2 class="hidden">video</h2>
    <div class="video">
      <?php
      echo"<video id=\"myVideo\" controls>
                        <source src=\"video/{$video}\" type=\"video/mp4\"/>
      </video>";
      ?>

    </div>
  </section>

  <section id="introCon">
    <h2 class="hidden">introduction</h2>
    <?php
      echo "
      <h2>$introTitle</h2>
      <p>$intropar1</p>

      <p>$intropar2</p>

      <p><span>$intropar3r </span>$intropar3b</p>

      <p><span>$intropar4r </span>$intropar4b</p>

      <p><span>$intropar5r </span>$intropar5b</p>

      <p><span>$intropar6r </span>$intropar6b</p>

      <p><span>$intropar7r </span>$intropar7b</p>
      ";
     ?>
     <div id="introbutton"><a href="admin/admin_createuser.php" class="button">Be a Donor</a></div>
  </section>

  <section id="memoryCon" class="section2">
    <h2 class="hidden">memory</h2>
      <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
      <div class="orbit-wrapper">
        <div class="orbit-controls">
          <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
          <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
        </div>
        <ul class="orbit-container">
          <?php
            echo "
            <li class=\"is-active orbit-slide\">
              <figure class=\"orbit-figure\">
                <img class=\"orbit-image\" src=\"images/{$memoryimages}\" alt=\"memory\">
                <figcaption class=\"orbit-caption\">{$memorytexts}</figcaption>
              </figure>
            </li>
            ";

            if(!is_string($getmemory)){
            while($row = mysqli_fetch_array($getmemory)){
              echo "
              <li class=\"orbit-slide\">
                <figure class=\"orbit-figure\">
                  <img class=\"orbit-image\" src=\"images/{$row['memory_pic']}\" alt=\"memory\">
                  <figcaption class=\"orbit-caption\">{$row['memory_text']}</figcaption>
                </figure>
              </li>
              ";
            }
          }
          ?>
        </ul>
      </div>
    </div>
  </section>

  <section class="section3">
    <h2 class="hidden">EVENTS</h2>
    <div id="event">
      <h2>EVENTS</h2>
      <?php
            if(!is_string($getevent)){
            while($row = mysqli_fetch_array($getevent)){
              echo "
                <div class=\"eventall\"><img src=\"images/{$row['event_pic']}\" alt=\"event\">
                <div class=\"eventp\"><h4>{$row['event_title']}</h4>
                <p>{$row['event_text']}</p></div></div>
              ";
            }
          }
      ?>
    </div>
  </section>

  <section id="section5" class="section4">
    <h2 id="contacttitle">CONTACT US</h2>
    <?php
       echo "
             <div class=\"contactp\"><p>$address</p>
             <p>$phone</p></div>
             <div id=\"mapcon\"><div id=\"map\">$map</div></div>
             <a href=\"mailto:xushengke94@gmail.com?Subject=Hello%20this%20is%20Life%20Extended\" target=\"_top\" class=\"contactp\"><p id=\"email\">$email</p></a>
             ";
    ?>
  </section>

  <footer>
    <?php
      echo"<img src=\"images/$headerlogo\" alt=\"headerLogo\" id=\"footerLogo\">";
      echo"<ul><a target=_blank href=\"https://www.facebook.com/pages/Organ-Donation-Ontario/1589235651403335\"><li><img  id=\"facebook\" src=\"images/$facebook\"></li></a>";
      echo"<a target=_blank href=\"https://twitter.com/TrilliumGift\"><li><img  class=\"social\" src=\"images/$twitter\"></li></a>";
      echo"<a target=_blank href=\"https://www.youtube.com/watch?v=n6FdS3tcso4\"><li><img  class=\"social\" src=\"images/$youtube\"></li></a></ul>";
     ?>
     <p>Copyright Life Extended &copy; 2018</p>
  </footer>

  </div>
      <script src="js/vendor/jquery.js"></script>
      <script src="js/vendor/what-input.js"></script>
      <script src="js/vendor/foundation.js"></script>
      <script src="js/app.js"></script>
      <script src="js/ScrollToPlugin.min.js"></script>
      <script src="js/TweenMax.min.js"></script>
  </body>

  </html>
