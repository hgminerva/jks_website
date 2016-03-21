<html>
  <head>
    <title>Organization</title>
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
  </head>
  <body style="background-image: url(images/bg.jpg);">
    <div id="main">
      <div id="header">
        <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <img src="images/resources/jkslogo4.png" width="750px" height=" 120px" style="margin-left: 170px; margin-top:20px;">
          <!-- <img src="images/resources/jkslogo2.png" width="750px" height=" 120px" style="margin-left: 50px; margin-top:20px;"> -->
          <!-- <h1><a href="Homepage.php">JapanKarateShotorenmei<span class="logo_colour">Philippines</span></a></h1>
          <h2>Welcome To Our Home Page.</h2> -->
        </div>
        </div>
        <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="Homepage.php">Home</a></li>
          <li class="selected"><a href="Organization.php">Organization</a></li>
          <li><a href="Activities.php">Activities</a></li>
          <li><a href="Aboutus.php">About Us</a></li>
          <li><a href="History.php">History</a></li>
          <li><a href="contactus.php">Contact Us</a></li>
        </ul>
        </div>
      </div>
      <!--CONTENT-->
        <div id="content_header"></div>
          <div id="site_content">
            <div id="contentx">
            <!-- insert the page content here -->
                
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
                
                
                <br>
                <center><h4>JKS ORGANIZATION</h4></center><br>
                <center><img class="fancybox" src="images/activities/image07.jpg" width="600px" height="350" data-big="images/activities/image07.jpg"/></center>
                <center><strong><p>JKS Philippines Directors Roland Koschinger(JKS Philippines President)<br>and Vito Logan (JKS Philippines Technical Director)</p></strong></center>
                <center>

                <!-- <table bgcolor:#FFF style="border: 1px solid #ddd;">
                    <tr><th colspan="2">JKS Philippines Directors</th></tr>
                    <tr><td style="background:#bdc7d1;"><img src="images/resources/logan.jpg" width="195" height="210" ></td style="background:#bdc7d1;"><td style="background:#bdc7d1;"><img src="images/resources/roland.jpg" width="195" height="210" ></td style="background:#bdc7d1;"></tr>
                    <tr><td style="background:#bdc7d1;"><p><b>Vito Logan</b><br>Technical Director JKS Philippines</p></td style="background:#bdc7d1;"><td style="background:#bdc7d1;"><p><b>Roland Koschinger</b><br>Assistant Technical Director JKS Philippines</p></td style="background:#bdc7d1;"></tr>

                </table></center> -->
                <hr><br>
                <center><h4>AFRICA</h4></center>
                <table style="width:100%; border-spacing:0;border: 2px solid #ddd;">
                <tr><th>Location</th><th>Organization</th><th>Active Directors</th></tr>
                <tr><td style="background:#bdc7d1;">Kenya</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">JKS KENYA</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Peter Ombima</td style="background:#bdc7d1;"></tr>
                <tr><td style="background:#bdc7d1;">South Africa</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">JKS South Africa</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Norman Robinson</td style="background:#bdc7d1;"></tr>
                </table>
                <center><h4>NORTH AMERICA</h4></center>
                <table style="width:100%; border-spacing:0;">
                <tr><th>Location</th><th>Organization</th><th>Active Directors</th></tr>
                <tr><td style="background:#bdc7d1;">Canada</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Association de Karate<br>Shotokan</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Yutaka Katsumata</td style="background:#bdc7d1;"></tr>
                <tr><td style="background:#bdc7d1;">U.S.A.</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">JKS New Jersey</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Sergio Antonio Dato</td style="background:#bdc7d1;"></tr>
                <tr><td style="background:#bdc7d1;"></td style="background:#bdc7d1;"><td style="background:#bdc7d1;">JKS Michigan</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Robert Nearon</td style="background:#bdc7d1;"></tr>
                <tr><td style="background:#bdc7d1;"></td style="background:#bdc7d1;"><td style="background:#bdc7d1;">JKS Hawaii</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Charles Lee</td style="background:#bdc7d1;"></tr>
                <tr><td style="background:#bdc7d1;"></td style="background:#bdc7d1;"><td style="background:#bdc7d1;">JKS Hawaii</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Joseph Suozzi</td style="background:#bdc7d1;"></tr>
                <tr><td style="background:#bdc7d1;">Mexico</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">JKS Mexico</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Jose Luis Moctezuma</td style="background:#bdc7d1;"></tr>
                <tr><td style="background:#bdc7d1;">Puerto Rico</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">JKS Puerto Rico</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Sergio Antonio Dato</td style="background:#bdc7d1;"></tr>
                </table>
                <center><h4>SOUTH AMERICA</h4></center>
                <table style="width:100%; border-spacing:0;">
                  <tr><th>Location</th><th>Organization</th><th>Active Directors</th></tr>
                  <tr><td style="background:#bdc7d1;">Brazil</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">JKS Brazil</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Sadamu Uriu</td style="background:#bdc7d1;"></tr>
                  <tr><td style="background:#bdc7d1;">Chile</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Shisaikan Dojo Chile</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Luis Aros</td style="background:#bdc7d1;"></tr>
                  <tr><td style="background:#bdc7d1;">Venezuela</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Venezuela Dojo Joa</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Antonio Diaz</td style="background:#bdc7d1;"></tr>
                </table>
                <center><h4>ASIA</h4></center>
                <table style="width:100%; border-spacing:0;">
                  <tr><th>Location</th><th>Organization</th><th>Active Directors</th></tr>
                  <tr><td style="background:#bdc7d1;">China</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">JKS China</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Li Yuan-shen</td style="background:#bdc7d1;"></tr>
                  <tr><td style="background:#bdc7d1;"></td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Shanghai</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Yang Yong</td style="background:#bdc7d1;"></tr>
                  <tr><td style="background:#bdc7d1;"></td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Kunming</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Philip Willson</td style="background:#bdc7d1;"></tr>
                  <tr><td style="background:#bdc7d1;"></td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Shanghai</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Johnny Kwan</td style="background:#bdc7d1;"></tr>
                  <tr><td style="background:#bdc7d1;"></td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Hong Kong</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Johnny Kwan</td style="background:#bdc7d1;"></tr>
                  <tr><td style="background:#bdc7d1;">India</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Shotokai Karate<br>Association</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Sundaram Mani</td style="background:#bdc7d1;"></tr>
                  <tr><td style="background:#bdc7d1;"></td style="background:#bdc7d1;"><td style="background:#bdc7d1;">JKS-India</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">S. Srinivasan</td style="background:#bdc7d1;"></tr>
                  <tr><td style="background:#bdc7d1;"></td style="background:#bdc7d1;"><td style="background:#bdc7d1;">JKS Shotojuku India</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Sudeep T. Cyriac</td style="background:#bdc7d1;"></tr>
                  <tr><td style="background:#bdc7d1;"></td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Bodhidharma JKS India</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">K. S. Manoj</td style="background:#bdc7d1;"></tr>
                  <tr><td style="background:#bdc7d1;">Indonesia</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">INKANAS</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Djafar Djantang</td style="background:#bdc7d1;"></tr>
                  <tr><td style="background:#bdc7d1;">Sri Lanka</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">JKS Sri-Lanka</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">G. L. L. D. Nanayakkara</td style="background:#bdc7d1;"></tr>
                  <tr><td style="background:#bdc7d1;">Saudi Arabia</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">JKS Saudi Arabia</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Tarik Al-Tabbaa</td style="background:#bdc7d1;"></tr>
                  <tr><td style="background:#bdc7d1;">Lebanon</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Shinkukan Dojo</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Kamal Helou</td style="background:#bdc7d1;"></tr>
                  <tr><td style="background:#bdc7d1;">Philippines</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">JKS Philippines</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Roland Koschinger</td style="background:#bdc7d1;"></tr>
                  <tr><td style="background:#bdc7d1;">U. A. E.</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">JKS Karate Center Dubai</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Shefin K. R.</td style="background:#bdc7d1;"></tr>
                  <tr><td style="background:#bdc7d1;">Iran</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Iran Shotokan Association</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Kaykavos Saeedi</td style="background:#bdc7d1;"></tr>
                </table>
                <center><h4>EUROPE</h4></center>
                <table style="width:100%; border-spacing:0;">
                  <tr><th>Location</th><th>Organization</th><th>Active Directors</th></tr>
                  <tr><td style="background:#bdc7d1;">Belgium</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">JKS Belgium</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Eric Bortels</td style="background:#bdc7d1;"></tr>
                  <tr><td style="background:#bdc7d1;">Denmark</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">JKS Denmark</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Jan Spatzek</td style="background:#bdc7d1;"></tr>
                  <tr><td style="background:#bdc7d1;">England</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">JKS England</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Alan Campbell</td style="background:#bdc7d1;"></tr>
                  <tr><td style="background:#bdc7d1;">Germany</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">JKS Deutschland e.V.</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Uwe Schwehm</td style="background:#bdc7d1;"></tr>
                  <tr><td style="background:#bdc7d1;"></td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Germany Wheelchair Karate Fed.</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Tadashi Ishikawa</td style="background:#bdc7d1;"></tr>
                  <tr><td style="background:#bdc7d1;">Ireland</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">JKS Ireland</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Scott Langley</td style="background:#bdc7d1;"></tr>
                  <tr><td style="background:#bdc7d1;">Israel</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">JKS Israel</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Nir Yaeger</td style="background:#bdc7d1;"></tr>
                  <tr><td style="background:#bdc7d1;">Kazakhstan</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">JKS Kazakhstan</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Korneyev Sergey</td style="background:#bdc7d1;"></tr>
                  <tr><td style="background:#bdc7d1;">Italy</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Karate Shotokan Italia</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Paolo Arlotti</td style="background:#bdc7d1;"></tr>
                  <tr><td style="background:#bdc7d1;">Moldova</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Shotokan Karate Federation<br>of Moldova</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Isacenco Serghei</td style="background:#bdc7d1;"></tr>
                  <tr><td style="background:#bdc7d1;">Netherland</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">JKS Karate Netherlands</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Ronald van den Eyssel</td style="background:#bdc7d1;"></tr>
                  <tr><td style="background:#bdc7d1;">Portugal</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Kaizendo Karate Association</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Diamantino Jorge Santos Lobo</td style="background:#bdc7d1;"></tr>
                  <tr><td style="background:#bdc7d1;">Russia</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">JKS Russia</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Alexei Dolgov</td style="background:#bdc7d1;"></tr>
                  <tr><td style="background:#bdc7d1;">Scotland</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">JKS Scotland</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Paul Giannandrea</td style="background:#bdc7d1;"></tr>
                  <tr><td style="background:#bdc7d1;">Sweden</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">JKS Sweden</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Gorgen Sokare</td style="background:#bdc7d1;"></tr>
                  <tr><td style="background:#bdc7d1;">Switzerland</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">JKS Switzerland</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Yutaka Koike</td style="background:#bdc7d1;"></tr>
                  <tr><td style="background:#bdc7d1;"></td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Someibukan Interlaken</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Veronika Horne</td style="background:#bdc7d1;"></tr>
                  <tr><td style="background:#bdc7d1;"></td style="background:#bdc7d1;"><td style="background:#bdc7d1;">JKS Liestal</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Giuseppe Puglisi</td style="background:#bdc7d1;"></tr>
                  <tr><td style="background:#bdc7d1;">Ukraine</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Ukrainian Karate Association</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Dmitriy Shvydchenko</td style="background:#bdc7d1;"></tr>
                </table>
                  <center><h4>OCEANA</h4></center>
                <table style="width:100%; border-spacing:0;">
                  <tr><th>Location</th><th>Organization</th><th>Active Directors</th></tr>
                  <tr ><td style="background:#bdc7d1;">Australia</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Hyakurenjuku</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Katsunori Kanaya</td style="background:#bdc7d1;"></tr>
                  <tr><td style="background:#bdc7d1;"></td style="background:#bdc7d1;"><td style="background:#bdc7d1;">JKS Gympie</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Katsunori Kanaya</td style="background:#bdc7d1;"></tr>
                  <tr><td style="background:#bdc7d1;">New Zealand</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">JKS New Zealand</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Charles Lee</td style="background:#bdc7d1;"></tr>
                  <tr><td style="background:#bdc7d1;"></td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Christchurch Karate Club</td style="background:#bdc7d1;"><td style="background:#bdc7d1;">Trevor Foster</td style="background:#bdc7d1;"></tr>
                </table>
                style="background:#bdc7d1;"
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