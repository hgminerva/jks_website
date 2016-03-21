<head>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


</head>
<body>


  <div class="containerbanner">
            <br>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>

                <?php
                     
                    $files = glob("images/*.*");
                     
                    for ($i=1; $i<count($files); $i++)
                     
                    {
                     echo '<li data-target="#myCarousel" data-slide-to="'.$i.'"></li>';}

                    ?>
                <!-- <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li> -->
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="images/04.jpg" alt="sample1" width="460" height="345">
                </div>

               <!--  <div class="item">
                  <img src="images/06.jpg" alt="sample2" width="460" height="345">
                </div> -->

              
                <!-- <div class="item">
                  <img src="images/05.jpg" alt="sample3" width="460" height="345">
                </div>

                <div class="item">
                  <img src="images/07.jpg" alt="sample4" width="460" height="345">
                </div> -->
            






  <!-- LOOP IMAGES -->

                      <?php
                     
                    $files = glob("images/*.*");
                     
                    for ($i=1; $i<count($files); $i++)
                     
                    {
                     
                    $image = $files[$i];
                     
                    //print $image ."<br />";
                    //echo '<img src="'.$image .'" alt="Random image" />'."<br /><br />";
                     
                     
                    $info = pathinfo($image);
                    $file_name =  basename($image,'.'.$info['extension']);
                     
                    /*echo $file_name.".jpg"."<br />"; */

                    echo '<div class="item"><img src="images/'.$file_name.".jpg ".'."alt="sample2" width="460" height="345""."></div>';

                    /*echo '<img src="images/06.jpg">';*/

                    }

                     
                    ?>




  <!-- LOOP IMAGES -->

    </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>



</body>