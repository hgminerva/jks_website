<!DOCTYPE html>
<html>
<head>
	<title>Activities</title>
	   <link rel="stylesheet" type="text/css" href="style/style.css" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" media="screen" href="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.css" />
<style type="text/css">
    a.fancybox img {
        border: none;
        box-shadow: 0 1px 7px rgba(0,0,0,0.6);
        -o-transform: scale(1,1); -ms-transform: scale(1,1); -moz-transform: scale(1,1); -webkit-transform: scale(1,1); transform: scale(1,1); -o-transition: all 0.2s ease-in-out; -ms-transition: all 0.2s ease-in-out; -moz-transition: all 0.2s ease-in-out; -webkit-transition: all 0.2s ease-in-out; transition: all 0.2s ease-in-out;
    } 
    a.fancybox:hover img {
        position: relative; z-index: 999; -o-transform: scale(1.03,1.03); -ms-transform: scale(1.03,1.03); -moz-transform: scale(1.03,1.03); -webkit-transform: scale(1.03,1.03); transform: scale(1.03,1.03);
    }
</style>




<!-- http://www.dwuser.com/education/content/click-to-zoom-for-photos-adding-lightbox-effect-to-your-images/ -->
</head>
<body style="background-image: url(images/bg.jpg);">
	<div id="main">
      <div id="header">
        <div id="logo">
        
        
        <div id="logo_text">
          <img src="images/resources/jkslogo4.png" width="750px" height=" 120px" style="margin-left: 170px; margin-top:20px;">
          <!-- <img src="images/resources/jkslogo2.png" width="750px" height=" 120px" style="margin-left: 50px; margin-top:20px;"> -->
        </div>
        </div>
        <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="Homepage.php">Home</a></li>
          <li><a href="Organization.php">Organization</a></li>
          <li class="selected"><a href="Activities.php">Activities</a></li>
          <li><a href="Aboutus.php">About Us</a></li>
          <li><a href="History.php">History</a></li>
          <li><a href="contactus.php">Contact Us</a></li>
          <br><br><br>
        </ul>
        </div>
      </div>

      <!--CONTENT-->
        <div id="content_header"></div>
          <div id="site_content">
            <div id="contentx">
              <hr>


                  <center><p><b>JKS International Seminar, Teikyo Daigako, Tokyo, Japan, December 5-6, 2015</b></p></center>

                  <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
                  <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
                  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.pack.min.js"></script>
                  <script type="text/javascript">
                      $(function($){
                          var addToAll = false;
                          var gallery = false;
                          var titlePosition = 'inside';
                          $(addToAll ? 'img' : 'img.fancybox').each(function(){
                              var $this = $(this);
                              var title = $this.attr('title');
                              var src = $this.attr('data-big') || $this.attr('src');
                              var a = $('<a href="#" class="fancybox"></a>').attr('href', src).attr('title', title);
                              $this.wrap(a);
                          });
                          if (gallery)
                              $('a.fancybox').attr('rel', 'fancyboxgallery');
                          $('a.fancybox').fancybox({
                              titlePosition: titlePosition
                          });
                      });
                      $.noConflict();
                  </script>
                  <center><img class="fancybox" src="images/IMG_0754.jpg" width="600px" height="350" data-big="images/IMG_0754.jpg"/></center>
                   <center><table border="0" align="center" width="70%"><hr>
                   <caption>Picture Gallery</caption>
                   <br>

                  <tr>
                  <td><img class="fancybox" src="images/new/IMG_0759.jpg" width="200px" height="150px" data-big="images/new/IMG_0759.jpg"/></td>
                  <td><img class="fancybox" src="images/new/IMG_1128.jpg" width="200px" height="150px" data-big="images/new/IMG_1128.jpg"/></td>
                  <td><img class="fancybox" src="images/new/IMG_1333.jpg" width="200px" height="150px" data-big="images/new/IMG_1333.jpg"/></td>
                  <td><img class="fancybox" src="images/new/IMG_1339.jpg" width="200px" height="150px" data-big="images/new/IMG_1339.jpg"/></td>
                  </tr>
                  <tr>
                  <td><img class="fancybox" src="images/new/IMG_1344.jpg" width="200px" height="150px" data-big="images/new/IMG_1344.jpg"/></td>
                  <td><img class="fancybox" src="images/new/IMG_1348.jpg" width="200px" height="150px" data-big="images/new/IMG_1348.jpg"/></td>
                  <td><img class="fancybox" src="images/new/IMG_0747.jpg" width="200px" height="150px" data-big="images/new/IMG_0747.jpg"/></td>
                  <td><img class="fancybox" src="images/new/IMG_1353.jpg" width="200px" height="150px" data-big="images/new/IMG_1353.jpg"/></td>
                  </tr>
                   <tr>
                  <td><img class="fancybox" src="images/new/IMG_1358.jpg" width="200px" height="150px" data-big="images/new/IMG_1358.jpg"/></td>
                  <td><img class="fancybox" src="images/new/IMG_1354.jpg" width="200px" height="150px" data-big="images/new/IMG_1354.jpg"/></td>
                  <td><img class="fancybox" src="images/new/slider11.jpg" width="200px" height="150px" data-big="images/new/slider11.jpg"/></td>
                  <td><img class="fancybox" src="images/new/IMG_1360.jpg" width="200px" height="150px" data-big="images/new/IMG_1360.jpg"/></td>
                  </tr>
                  <tr>
                  <td><img class="fancybox" src="images/new/IMG_1361.jpg" width="200px" height="150px" data-big="images/new/IMG_1361.jpg"/></td>
                  <td><img class="fancybox" src="images/new/IMG_1365.jpg" width="200px" height="150px" data-big="images/new/IMG_1365.jpg"/></td>
                  <td><img class="fancybox" src="images/new/slide8.jpg" width="200px" height="150px" data-big="images/new/slide8.jpg"/></td>
                  <td><img class="fancybox" src="images/new/slider.jpg" width="200px" height="150px" data-big="images/new/slider.jpg"/></td>
                  </tr>
                    <tr>
                  <td><img class="fancybox" src="images/new/slider2.jpg" width="200px" height="150px" data-big="images/new/slider2.jpg"/></td>
                  <td><img class="fancybox" src="images/new/slider3.jpg" width="200px" height="150px" data-big="images/new/slider3.jpg"/></td>
                  <td><img class="fancybox" src="images/new/slider4.jpg" width="200px" height="150px" data-big="images/new/slider4.jpg"/></td>
                  <td><img class="fancybox" src="images/new/slider5.jpg" width="200px" height="150px" data-big="images/new/slider5.jpg"/></td>
                  </tr>
                   <tr>
                  <td><img class="fancybox" src="images/new/IMG_1353.jpg" width="200px" height="150px" data-big="images/new/IMG_1353.jpg"/></td>
                  <td><img class="fancybox" src="images/new/slider9.jpg" width="200px" height="150px" data-big="images/new/slider9.jpg"/></td>
                  <td><img class="fancybox" src="images/new/slider10.jpg" width="200px" height="150px" data-big="images/new/slider10.jpg"/></td>
                  <td><img class="fancybox" src="images/new/slider11.jpg" width="200px" height="150px" data-big="images/new/slider11.jpg"/></td>
                  </tr>
                  </table></center>
                  <br>

                  <video width="400" controls>
                    <source src="images/new/IMG_1363.mov" type="video/mp4">
               
            
                  </video><br><br><br>
                   <center><p><b>JKS International Seminar, Teikyo Daigako, Tokyo, Japan, November 29-30, 2014</b></p></center>
                  <center><img class="fancybox" src="images/activities/CSC_0587.jpg" width="600px" height="350" data-big="images/activities/CSC_0587.jpg"/></center>
                  <center><table border="0" align="center" width="70%"><hr>
                  <caption>Picture Gallery</caption>
                  <tr>
                  <td><img class="fancybox" src="images/activities/09.jpg" width="200px" height="150px" data-big="images/activities/09.jpg"/></td>
                  <td><img class="fancybox" src="images/activities/10.jpg" width="200px" height="150px" data-big="images/activities/10.jpg"/></td>
                  <td><img class="fancybox" src="images/activities/11.jpg" width="200px" height="150px" data-big="images/activities/11.jpg"/></td>
                  <td><img class="fancybox" src="images/activities/12.jpg" width="200px" height="150px" data-big="images/activities/12.jpg"/></td>
                  </tr>
                  <tr>
                  <td><img class="fancybox" src="images/activities/13.jpg" width="200px" height="150px" data-big="images/activities/13.jpg"/></td>
                  <td><img class="fancybox" src="images/activities/14.jpg" width="200px" height="150px" data-big="images/activities/14.jpg"/></td>
                  <td><img class="fancybox" src="images/activities/15.jpg" width="200px" height="150px" data-big="images/activities/15.jpg"/></td>
                  <td><img class="fancybox" src="images/activities/16.jpg" width="200px" height="150px" data-big="images/activities/16.jpg"/></td>
                  </tr>
                  <tr>
                  <td><img class="fancybox" src="images/activities/17.jpg" width="200px" height="150px" data-big="images/activities/17.jpg"/></td>
                  <td><img class="fancybox" src="images/activities/18.jpg" width="200px" height="150px" data-big="images/activities/18.jpg"/></td>
                  <td><img class="fancybox" src="images/activities/CSC_0333.jpg" width="200px" height="150px" data-big="images/activities/CSC_0333.jpg"/></td>
                  <td><img class="fancybox" src="images/activities/01.jpg" width="200px" height="150px" data-big="images/activities/01.jpg"/></td>
                  </tr>
                  </table></center>
                  <hr>
                  <center><p><b>JKS International Seminar, Honbu, Sogamo Tokyo, Japan, December 1-2, 2012</b></p></center>
                  <center><img class="fancybox" src="images/activities/Main01.gif" width="600px" height="350" data-big="images/activities/Main01.gif"/></center>
                  <center><table border="0" align="center" width="70%"><hr>
                  <caption>Picture Gallery</caption>
                  <tr>
                  <td><img class="fancybox" src="images/activities/pic2.gif" width="200px" height="150px" data-big="images/activities/pic2.gif"/></td>
                  <td><img class="fancybox" src="images/activities/pic3.gif" width="200px" height="150px" data-big="images/activities/pic2.gif"/></td>
                  <td><img class="fancybox" src="images/activities/pic4.gif" width="200px" height="150px" data-big="images/activities/pic4.gif"/></td>
                  <td><img class="fancybox" src="images/activities/pic5.gif" width="200px" height="150px" data-big="images/activities/pic5.gif"/></td>
                  </tr>
                  <tr>
                  <td><img class="fancybox" src="images/activities/pic6.gif" width="200px" height="150px" data-big="images/activities/pic6.gif"/></td>
                  <td><img class="fancybox" src="images/activities/pic7.gif" width="200px" height="150px" data-big="images/activities/pic7.gif"/></td>
                  <td><img class="fancybox" src="images/activities/pic8.gif" width="200px" height="150px" data-big="images/activities/pic8.gif"/></td>
                  <td><img class="fancybox" src="images/activities/pic9.gif" width="200px" height="150px" data-big="images/activities/pic9.gif"/></td>
                  </tr>
                  <!-- <tr>
                  <td><img class="fancybox" src="images/activities/17.jpg" width="200px" height="150px" data-big="images/activities/17.jpg"/></td>
                  <td><img class="fancybox" src="images/activities/18.jpg" width="200px" height="150px" data-big="images/activities/18.jpg"/></td>
                  <td><img class="fancybox" src="images/activities/CSC_0333.jpg" width="200px" height="150px" data-big="images/activities/CSC_0333.jpg"/></td>
                  <td><img class="fancybox" src="images/activities/CSC_0562.jpg" width="200px" height="150px" data-big="images/activities/CSC_0562.jpg"/></td>
                  </tr> -->
                  </table></center>
                  <hr>
                   <center><p><b>JKS International Seminar, held in Tokyo, Japan on December 3rd & 4th, 2011</b></p></center>
                  <center><img class="fancybox" src="images/activities/top011.jpg" width="600px" height="350" data-big="images/activities/top011.jpg"/></center>
                  <br><center><p><b>The JKS International Seminar, held in Tokyo, Japan on December 3rd & 4th 13 countries, 55 participants including Philippines. The aim of the seminar is to update the techniques and movements in Kata. The technical updates facilitied by Kagawa Sensei were the latest approach of Shotokan styles. The Junro Katas that are uniquely JKS were tackled in details so as its application through Bunkai. It was also followed by advance Kumite. Overall the seminar was rich and informative for a modern Karate-kas.</b></p></center>
                  <center><table border="0" align="center" width="70%"><hr>
                  <caption>Picture Gallery</caption>
                  <tr>
                  <td><img class="fancybox" src="images/activities/CSC_0562.jpg" width="200px" height="150px" data-big="images/activities/CSC_0562.jpg"/></td>
                  <td><img class="fancybox" src="images/activities/CSC_0585.jpg" width="200px" height="150px" data-big="images/activities/CSC_0585.jpg"/></td>
                  <td><img class="fancybox" src="images/activities/CSC_0587.jpg" width="200px" height="150px" data-big="images/activities/CSC_0587.jpg"/></td>
                  <td><img class="fancybox" src="images/activities/DSC_0520.jpg" width="200px" height="150px" data-big="images/activities/DSC_0520.jpg"/></td>
                  </tr>
                  <tr>
                  <td><img class="fancybox" src="images/activities/DSC_0529 (1).jpg" width="200px" height="150px" data-big="images/activities/DSC_0529 (1).jpg"/></td>
                  <td><img class="fancybox" src="images/activities/DSC_0529.jpg" width="200px" height="150px" data-big="images/activities/DSC_0529.jpg"/></td>
                  <td><img class="fancybox" src="images/activities/DSC_0535.jpg" width="200px" height="150px" data-big="images/activities/DSC_0535.jpg"/></td>
                  <td><img class="fancybox" src="images/activities/DSC_0537.jpg" width="200px" height="150px" data-big="images/activities/DSC_0537.jpg"/></td>
                  </tr>
                  <tr>
                  <td><img class="fancybox" src="images/activities/DSC_0540.jpg" width="200px" height="150px" data-big="images/activities/DSC_0540.jpg"/></td>
                  <td><img class="fancybox" src="images/activities/DSC_0544.jpg" width="200px" height="150px" data-big="images/activities/DSC_0544.jpg"/></td>
                  <td><img class="fancybox" src="images/activities/DSC_0546.jpg" width="200px" height="150px" data-big="images/activities/DSC_0546.jpg"/></td>
                  <td><img class="fancybox" src="images/activities/DSC_0549.jpg" width="200px" height="150px" data-big="images/activities/DSC_0549.jpg"/></td>
                  </tr>
                  <tr>
                  <td><img class="fancybox" src="images/activities/DSC_0550.jpg" width="200px" height="150px" data-big="images/activities/DSC_0550.jpg"/></td>
                  <td><img class="fancybox" src="images/activities/DSC_0553.jpg" width="200px" height="150px" data-big="images/activities/DSC_0553.jpg"/></td>
                  <td><img class="fancybox" src="images/activities/DSC_0567.jpg" width="200px" height="150px" data-big="images/activities/DSC_0567.jpg"/></td>
                  <td><img class="fancybox" src="images/activities/DSC_0569.jpg" width="200px" height="150px" data-big="images/activities/DSC_0569.jpg"/></td>
                  </tr>
                  <tr>
                  <td><img class="fancybox" src="images/activities/pic4.gif" width="200px" height="150px" data-big="images/activities/pic4.gif"/></td>
                  <td><img class="fancybox" src="images/activities/DSC_0578.jpg" width="200px" height="150px" data-big="images/activities/DSC_0578.jpg"/></td>
                  <td><img class="fancybox" src="images/activities/DSC_0571.jpg" width="200px" height="150px" data-big="images/activities/DSC_0571.jpg"/></td>
                  <td><img class="fancybox" src="images/activities/DSC_0574.jpg" width="200px" height="150px" data-big="images/activities/DSC_0574.jpg"/></td>
                  </tr>

                  <!-- <tr>
                  <td><img class="fancybox" src="images/activities/17.jpg" width="200px" height="150px" data-big="images/activities/17.jpg"/></td>
                  <td><img class="fancybox" src="images/activities/18.jpg" width="200px" height="150px" data-big="images/activities/18.jpg"/></td>
                  <td><img class="fancybox" src="images/activities/CSC_0333.jpg" width="200px" height="150px" data-big="images/activities/CSC_0333.jpg"/></td>
                  <td><img class="fancybox" src="images/activities/CSC_0562.jpg" width="200px" height="150px" data-big="images/activities/CSC_0562.jpg"/></td>
                  </tr> -->
                  </table></center>
                  <hr>
                  <center><p><b>Cebu International School, Cebu, Philippines</b></p></center>
                  <center><img class="fancybox" src="images/activities/image0a (1).jpg" width="600px" height="350" data-big="images/activities/image0a (1).jpg"/></center>
                  <center><table border="0" align="center" width="70%"><hr>
                  <caption>Picture Gallery</caption>
                  <tr>
                  <td><img class="fancybox" src="images/activities/image03.jpg" width="200px" height="150px" data-big="images/activities/image03.jpg"/></td>
                  <td><img class="fancybox" src="images/activities/image02.jpg" width="200px" height="150px" data-big="images/activities/image02.jpg"/></td>
                  <td><img class="fancybox" src="images/activities/image09.jpg" width="200px" height="150px" data-big="images/activities/image09.jpg"/></td>
                  <td><img class="fancybox" src="images/activities/image04.jpg" width="200px" height="150px" data-big="images/activities/image04.jpg"/></td>
                  </tr>
                  <tr>
                  <td><img class="fancybox" src="images/activities/image05.jpg" width="200px" height="150px" data-big="images/activities/image05.jpg"/></td>
                  <td><img class="fancybox" src="images/activities/image06.jpg" width="200px" height="150px" data-big="images/activities/image06.jpg"/></td>
                  <td><img class="fancybox" src="images/activities/image07.jpg" width="200px" height="150px" data-big="images/activities/image07.jpg"/></td>
                  <td><img class="fancybox" src="images/activities/image08.jpg" width="200px" height="150px" data-big="images/activities/image08.jpg"/></td>
                  </tr>
                  </table></center>

             <!--  sample -->
              
                 
                 <!--  sample -->
                  
              
            </div>
          </div>
      <!--/CONTENT-->
      <div id="content_footer"></div>
      <div id="footer">
        <p><a href="Homepage.php">Home</a> | <a href="Organization.php">Organization</a> | <a href="Activities.php">Activities</a> | <a href="Aboutus.php">About Us</a> | <a href="History.php">History</a> | <a href="Contactus.php">Contact</a></p>
      </div>
    </div>


</body>
</html>