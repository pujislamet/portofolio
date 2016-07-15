<!DOCTYPE html>
<html>
<head>
    <title>My Internship</title>
    {!! Html::script(elixir('js/app.js')) !!}
    {!! Html::style(elixir('css/app.css')) !!}
    
    
    <link rel="stylesheet" href="<?php echo asset('http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'); ?>" />
    <style>
    .wow:first-child {
      visibility: hidden;
    }
    </style>
    <!-- end wow -->
    <style>
    html, body{
        height: 100%;
        font-family: Corbel;
    }
    .bg-menu{
        background-color: #0080C0;
    }
    hr.style18 { 
      height: 30px; 
      border-style: solid; 
      border-color: #A6A6A6; 
      border-width: 1px 0 0 0; 
      border-radius: 20px;
      width: 80%; 
    } 
    hr.style18:before { 
      display: block; 
      content: ""; 
      height: 30px; 
      margin-top: -31px; 
      border-style: solid; 
      border-color: #8c8b8b; 
      border-width: 0 0 1px 0; 
      border-radius: 20px; 
    }
    #details, #portofolio, #education{
        height:650px;
        vertical-align: middle;
        display: table-cell;
    }
    #contact{
        padding: 100px 0px;
    }
    </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
<div class="fullpage">
    <div class="container-fluid">
        <!-- menu -->
        <div class="row">
                <div class="col-md-2">&nbsp;</div>
                <div class="col-md-8">            
                    <nav class="navbar navbar-default navbar-fixed-top bg-menu container-fluid">
                        <div class="col-md-2">&nbsp;</div>        
                        <div class="col-md-4">
                            <div class="navbar-header">
                       			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    				<span class="sr-only">Toggle navigation</span>
                    				<span class="icon-bar"></span>
                    				<span class="icon-bar"></span>
                    				<span class="icon-bar"></span>
                    			</button>
                                <a href="#" class="navbar-brand" style="font-family: Lucida Calligraphy; letter-spacing: 3px;"><span class="glyphicon glyphicon-globe"></span> My Portofolio</a>
                            </div>                
                        </div>
                        <div class="col-md-6">      
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                  <li class="active"><a href="#about">About Me</a></li>
                                  <li><a href="#details">Details</a></li>
                                  <li><a href="#education">Education</a></li>
                                  <li><a href="#portofolio">Website Portofolio</a></li>
                                  <li><a href="#contact">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-md-2">&nbsp;</div>
            
        </div>
        <!-- end menu -->
    </div>
    <div class="container-fluid">
        <!-- about section -->
        <div class="row" id="about" style="padding-top: 100px;background: url('https://pbs.twimg.com/profile_banners/106837463/1433266318/1500x500'); background-size: cover; color:white;">
            <div class="col-md-2">&nbsp;</div>
            <div class="col-md-8" style="border-radius: 5px; padding: 10px;">
                <div class="col-md-2">&nbsp;</div>
                <div class="col-md-8" style="font-size: 15px; padding: 15px; text-align: center; font-family: Corbel;">
                    <div class="col-md-12 wow fadeInDown"><img src="http://i1364.photobucket.com/albums/r721/Beckz_Dos_Santos_Aveiro/PicsArt_1434953026953_zpsf3mu69wp.jpg" style="width: 300px; height: 300px;" class="img-circle"/></div>
                    <div class="col-md-12 wow slideInLeft">
                    <h3 style="letter-spacing: 5px; font-family: Lucida Calligraphy;">Puji Slamet</h3>
                    My Name is Puji, I am 20 years old, live in malang.  
                    I am a student of Informatics Engineering in Ma Chung University since 2013.
                    I love to make a website or application. I am a BACK END Programmer.
                    I have some basic skill in Website Programming such as HTML, CSS, PHP, JSP and Javascript.
                    I can also use some framework of PHP such as CodeIgniter and Laravel.<br /><br />
                    My social account:<br />
                    <img class="img-circle" src="https://cdn2.iconfinder.com/data/icons/micon-social-pack/512/facebook-128.png" width="30" height="30"/>
                    <img class="img-circle" src="http://3835642c2693476aa717-d4b78efce91b9730bcca725cf9bb0b37.r51.cf1.rackcdn.com/Instagram_App_Large_May2016_200.png" width="30" height="30"/>
                    <img class="img-circle" src="http://www.freeiconspng.com/uploads/bbm-icon-bbm-android-untuk-versi-gingerbread-zon3-android-6.png" width="30" height="30"/>
                    </div>
                </div>
                <div class="col-md-2">&nbsp;</div>
            </div>
            <div class="col-md-2">&nbsp;</div>
        </div>
        <div class="col-md-12">&nbsp;</div>
        <!-- end about section -->
    </div>
    <div class="container-fluid">
        <!-- details section -->
        <div class="row" id="details">
            <div class="col-md-2">&nbsp;</div>
            <div class="col-md-8" style="padding: 10px;">
                <div class="col-md-4" style="padding: 5px;">
                    <table>
                        <tr class="wow slideInLeft">
                            <td><img src="http://image.flaticon.com/icons/png/512/5/5109.png" style="width: 100%; height: 300px;" /></td>
                        </tr>
                        <tr class="wow slideInRight">
                            <td><center><b><h3>My Education</h3></b></center></td>
                        </tr>
                        <tr class="wow slideInRight">
                            <td><center>I am an alumni in one of Vocational Schools in Malang with a major in Software Engineering. Now I am a student of Informatics Engineering in Ma Chung University.</center></td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-4" style="padding: 5px;">
                    <table>
                        <tr class="wow slideInLeft">
                            <td><img src="http://simpleicon.com/wp-content/uploads/multy-user.png" style="width: 100%; height: 300px;" /></td>
                        </tr>
                        <tr class="wow slideInRight">
                            <td><center><b><h3>My Team</h3></b></center></td>
                        </tr>
                        <tr class="wow slideInRight">
                            <td><center>I joined with Ma Chung Developer Team since last year. We are building for some website such as Alumni Website, Job Vacancy Website and Tracer Study. I work on Back End side.</center></td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-4" style="padding: 5px;">
                    <table>
                        <tr class="wow slideInLeft">
                            <td><img src="http://unfolding.co.uk/img/icon-mind.svg" style="width: 100%; height: 300px;" /></td>
                        </tr>
                        <tr class="wow slideInRight">
                            <td><center><b><h3>My Skill</h3></b></center></td>
                        </tr>
                        <tr class="wow slideInRight">
                            <td><center>I love about programming, especially website programming. I can use CodeIgniter Framework as my Favourite PHP Framework.</center></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-md-2">&nbsp;</div>
        </div>
        <div class="col-md-12"><hr class="style18"/></div>
        <!-- end detail section -->
    </div>
    <div class="container-fluid">
        <!-- education section -->
        <div class="row" id="education" style="padding-top: 0px;">
            <div class="col-md-2">&nbsp;</div>
            <div class="col-md-8">
                <div class="col-md-4 wow slideInLeft">
                    <img src="http://www.freeiconspng.com/uploads/school-icon-png-5.png" style="width: 100%;" />
                </div>
                <div class="col-md-8 wow slideInRight" style="padding: 0 50px; font-size: 15px;">
                    <h2>Educational BackGround:</h2><br />
                    <span class="glyphicon glyphicon-education"></span> 2001 - 2007: SD Katolik Yos Sudarso<br />
                    <span class="glyphicon glyphicon-education"></span> 2007 - 2010: SMP Katolik Santo Yoseph<br />
                    <span class="glyphicon glyphicon-education"></span> 2010 - 2013: SMK Negeri 4 Malang<br />
                    <span class="glyphicon glyphicon-education"></span> 2013 - now: Ma Chung University<br />
                </div>
            </div>
            <div class="col-md-2">&nbsp;</div>
        </div>
        <div class="col-md-12"><hr class="style18"/></div>
        <!-- end education section -->
    </div>
    <div class="container-fluid">
        <!-- portofolio section -->
        <div class="row" id="portofolio">
            <div class="col-md-2">&nbsp;</div>
            <div class="col-md-8" style="text-align: center;">
                <div class="col-md-12 wow bounceInUp"><center><h2>My Website Portfolio</h2></center></div>
                <div class="col-md-4 wow bounceInUp" data-wow-duration="2s" style="box-sizing: border-box; padding: 20px; box-shadow: 5px 5px 10px #CFCFCF;">
                    <img src="portofolio1.png" style="width: 100%; height:200px;" class="img-rounded" /><br />
                    <h4><b>Back End Job Vacancy Universitas Machung</b></h4>
                    <a href="http://alumni.machung.ac.id/rubik/admin_rubik/" target="_blank">Go to Site</a>
                </div>
                <div class="col-md-4 wow bounceInUp" data-wow-duration="3s" style="box-sizing: border-box; padding: 20px; box-shadow: 5px 5px 10px #CFCFCF;">
                    <img src="portofolio2.png" style="width: 100%; height:200px;" class="img-rounded" />
                    <h4><b>Back End Pengelolaan Barang PT Werbel Indonesia Service</b></h4>
                    <a href="http://pengadaan-barang.16mb.com/" target="_blank">Go to Site</a>
                </div>
                <div class="col-md-4 wow bounceInUp" data-wow-duration="4s" style="box-sizing: border-box; padding: 20px; box-shadow: 5px 5px 10px #CFCFCF;">
                    <img src="portofolio3.png" style="width: 100%; height:200px;" class="img-rounded" />
                    <h4><b>Website Ecommerce Kencana Mas</b></h4>
                    <a href="http://kencana-mas.tk/prestashop/" target="_blank">Go to Site</a>
                </div>
            </div>
            <div class="col-md-2">&nbsp;</div>
        </div>
        <div class="col-md-12">&nbsp;</div>
        <!-- end portofolio section -->
    </div>
    <div class="container-fluid">        
        <!-- contact section --> 
        <div class="row bg-menu wow fadeIn" id="contact" data-wow-duration="4s">
            <div class="col-md-2">&nbsp;</div>
            <div class="col-md-8">
                <div class="col-md-4">
                    <img src="http://www.freeiconspng.com/uploads/contact-icon-png-3.png" style="width: 100%;" />
                </div>
                <div class="col-md-8" style="padding: 0 50px; font-size: 15px; color:white;">
                    <h2>Contact Information:</h2><br />
                    <b>
                    <table>
                    <tr><td><span class='fa fa-map-marker fa-2x'></span> </td><td>&nbsp;</td><td>Address : Jalan Pande no 36, Kepanjen, Kabupaten Malang.<br /></td></tr>
                    <tr><td><span class='fa fa-phone fa-2x'></span> </td><td>&nbsp;</td><td>Phone : +62 81 232 295 731<br /></td></tr>
                    <tr><td><span class='fa fa-envelope fa-2x'></span> </td><td>&nbsp;</td><td><a style="color: white;" href="mailto:311310019@student.machung.ac.id"> Official Email</a><br /></td></tr>
                    <tr><td><span class='fa fa-facebook fa-2x'></span> </td><td>&nbsp;</td><td><a style="color: white;" href="http://www.facebook.com/wang.jae.sen"> Facebook Account</a><br /></td></tr>
                    <tr><td><span class='fa fa-instagram fa-2x'></span> </td><td>&nbsp;</td><td><a style="color: white;" href="http://www.instagram.com/wang.9116"> Instagram Account</a><br /></td></tr>
                    </table>
                    </b>
                </div>
            </div>
            <div class="col-md-2">&nbsp;</div>
            <div class="col-md-12">&nbsp;</div>
            <div class="col-md-2">&nbsp;</div>
            <div class="col-md-8" style="font-family: Lucida Calligraphy; font-size: 50px; color:white; text-align: center;">Make them believe!</div>
            <div class="col-md-2">&nbsp;</div>
        </div>
        <!-- end contact section -->
    </div>
</div>
</body>
<script>
    /*
    $(window).on("load",function() {
      $(window).scroll(function() {
        $(".row").each(function() {
          var objectBottom = $(this).offset().top + $(this).outerHeight();
          var windowBottom = $(window).scrollTop() + $(window).innerHeight() + 300;
          if (objectBottom < windowBottom) {
            if ($(this).css("opacity")==0.3) {$(this).fadeTo(1000,1);}
          } else {
            if ($(this).css("opacity")==1) {$(this).fadeTo(1000,0.3);}
          }
        });
      }); $(window).scroll();
    });
    */

$(document).ready(function(){
    //fungsi dibawah hanya berjalan untuk semua tag <a> yang diawali (^) dengan hash (#)
    $('a[href^="#"]').on('click', function(e){
        $target = $(this.hash);
        $jarak = 0;
        $('html, body').stop().animate(
            {
                'scrollTop' : $target.offset().top - $jarak
            },
            1500, //durasi dalam milisekon
            'swing', //efek transisi (opsi : swing / linear)
            function(){
                window.location.hash = target;
            }
        );
    });
});
    
</script>
  <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
      var section = document.createElement('section');
      section.className = 'section--purple wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };
  </script>
</html>