

<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 */

get_template_part('header', 'head');
?>



<header class="sticky">
<!--top content section starts here-->
<div class="top-content" style="display:none;">
 <div class="tcs1">
     <div class="tcs-border">
<div class="tcs-logo">
<img src="<?php echo get_template_directory_uri(); ?>/img/phlogo.png" alt="PH logog" class="lc">
</div>
<div class="tcs-text">
    <p>Our doctors are based in your community, centered on your needs, and part of a national network that’s transforming
    healthcare.</p>
<div class="bside">
    <a href="https://www.priviahealth.com/" class="button1 btn-sec" target="_blank">LEARN MORE</a>
</div>
</div>
 </div> 
</div>
<div class="tcs2">
<div class="tcs2-logo">
<img src="<?php echo get_template_directory_uri(); ?>/img/virtual-visit.jpg" alt="Virtual Visit" class="vv">
<div class="tcs2-text">
<h2 clas="font-bold">Healthcare, handled.</h2>
<p>You have enough on your plate. We make it easy to message your doctor, connect to on-demand virtual care,
receive appointment reminders, refill prescriptions, and more.</p>
</div>
</div>
</div>

<div class="tcs2">
    <div class="tcs2-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/plank.jpg" alt="plank" class="vv">
        <div class="tcs2-text">
<h2>Healthcare for the long haul.</h2>
<p>You’re more than a set of symptoms. From pediatrics to adult needs, preventive programs to complex care – we’re here
to support you on every step in your journey.</p>
        </div>
    </div>
</div>

<div class="tcs2">
    <div class="tcs2-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/ped.jpg" alt="pediatrics" class="vv">
        <div class="tcs2-text">
            <h2>Our doctors do more.</h2>
            <p>You can enjoy personalized care without pricey fees. Our doctors take time to listen to your concerns, from wellness
            programs to chronic care management.</p>
        </div>
    </div>
</div>

</div>
<!--top content section ends here-->

<div class="flex-container1">
<!--menu 1st level starts-->
<div class="top-menu">
<div class="tsec1">
    <div class="menu-right">
        <ul  class="nav-lang">

<li class="globe"><a><?php echo do_shortcode('[gtranslate]'); ?></a></li>
        </ul>
    </div>
</div>
<div class="tsec2">
<div class="menu-right">
<ul class="nav-top-right"> 
<li class="ppicon"><a href="https://dev.myprivia.com/account-access/">Patient Portal</a></li>
<li class="maicon"><a href="https://8042-1.portal.athenahealth.com/">Mobile App</a></li>
<li class="cicon"><a href="https://dev.myprivia.com/contact-us/">Pay My Bill</a></li>
<!--<li class="pmicon"><a href="#">Pay My Bill</a></li>-->
<li class="ppo">Proudly part of</li>
<li>
<div  onclick="myFunction(this)" class="button-tog">
<div class="bar1"></div>
<div class="bar2"></div>
<div class="bar3"></div>
</div>
   </li>
</ul>
</div>

</div>

</div>
<!--menu 1st level ends-->
<!--menu 2nd level starts-->
<div>
    <div class="fcsub">
        <div class="sub-logo">
        <a href="<?php echo get_site_url(); ?>">    <img src="<?php echo get_template_directory_uri(); ?>/logo.png" class="logo-sub" alt="privia logo"></a>
        </div>
        <div class="sub-menu1">
         <?php
          wp_nav_menu(
             array(
                 'menu' => 'primary menu',
                 'container' => '',
                 'items_wrap' =>'<ul class="navigation">%3$s</ul>'
             )
          );
         ?>
    
        </div>
        <div class="sb2">
       <span class="user2"><a href="#" class="button1 button-blue btn-bold" > GET CARE NOW</a></span>
        </div>
    </div>
</div>
<!--menu 2nd level ends-->
       
    </div>
      <!--Mob top starts-->
       <div class="mob-top" style="display:none;">
   <section id="demos">
      <div class="row">
        <div class="large-12 columns">
          <div class="owl-carousel owl-theme">
            <div class="item center item-init">
             
<img src="<?php echo get_template_directory_uri(); ?>/img/phlogo.png" alt="PH logog" class="mc">
    <div class="tcs-text-mob">
    <p>Our doctors are based in your community, centered on your needs, and part of a national network that’s transforming
    healthcare.</p>
<div class="center mob-lbt">
  <a href="https://www.priviahealth.com/" target="_blank" class="button1 btn-sec">LEARN MORE</a>
</div>
    </div>

            </div>
            <div class="item">
                <div class="mtslide">
              <img src="<?php echo get_template_directory_uri(); ?>/img/virtual-visit.jpg" alt="Virtual Visit" class="mvv">
               </div>
                <div class="mtslide-text">
                    <h2>Healthcare, handled.</h2>
<p>You have enough on your plate. We make it easy to message your doctor, connect to on-demand virtual care,
receive appointment reminders, refill prescriptions, and more.</p>
                </div>    

            </div>
            <div class="item">
                   <div class="mtslide">
                     <img src="<?php echo get_template_directory_uri(); ?>/img/plank.jpg" alt="plank" class="mvv">
               </div>
                <div class="mtslide-text">
                    <h2>Healthcare for the long haul.</h2>
                   <p>You’re more than a set of symptoms. From pediatrics to adult needs, preventive programs to complex care – we’re here
to support you on every step in your journey.</p>
                </div>   
            </div>
            <div class="item">
                    <div class="mtslide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/ped.jpg" alt="pediatrics" class="mvv">    
                  </div>
                <div class="mtslide-text">
                    <h2>Our doctors do more.</h2>
 <p>You can enjoy personalized care without pricey fees. Our doctors take time to listen to your concerns, from wellness
            programs to chronic care management.</p>
                </div>   
            </div>
           
          </div>
      </section>
       </div>
      <!--Mob top ends-->

      <!--mobile menu starts-->
      <!--mobile menu starts-->
    <div class="flexmenu">
        <div class="pri-menu">
            <div class="pmlogo">
                <p class="pm-text">Proudly part of Privia Health</p>
            </div>
            <div class="pmnavicon">
  <i onclick="mobtoggle(this)" class="fas fa-ellipsis-v tog-mob"></i>
            </div>
        </div>
    </div>
    <!--mobile menu ends-->
  <!--main mob menu starts-->

      <!--main mob menu ends--> 
<div class="mob-top-nav">
<div class="mob-top-logo">
    <!--<p>PRIVIA HEALTH</p>--->
 <img src="<?php echo get_template_directory_uri(); ?>/logo.png" alt="Privia logo" class="mtl"></a>
</div>
<!--<div class="phone-icon">
    <i class="fas fa-phone-volume"></i>
</div>-->
<!--<div class="tel-icon">
  <i class="fas fa-phone-alt phone-tog" style="display:none;"></i>
</div>-->
<!--<div class="search-icon">
    <i class="fas fa-search"></i><br><span class="men">Search</span>
</div>-->
<div class="ham-icon">
    <i onclick="mdd(this);" class="fas fa-bars tog-mob-bot" id="mbot"></i><br>
    <span class="men">Menu</span>
</div>
      </div>

      <!--mobile mwnu dropdown starts-->
           <div class="mdd" style="display:none;">
             <!--acc menu starts-->
             <button class=" accordion">WHO WE ARE</button>
<div class="panel">
 <ul class="pan-links">
 <li><a href="https://dev.myprivia.com/about-us/">About Us</a></li>
  <li><a href="https://dev.myprivia.com/contact-us/">Contact Us</a></li>
  <!-- <li><a href="#">Link3</a></li>-->
 
 </ul>
</div>

<button class="accordion ">HOW WE HELP</button>
<div class="panel">
 <ul class="pan-links">
 <li><a href="https://dev.myprivia.com/virtual-health/">Virtual Health</a></li>
  <li><a href="https://dev.myprivia.com/account-access/">Patient Portal</a></li>
   <li><a href="https://dev.myprivia.com/medicare/">Understanding Medicine</a></li>
    <li><a href="https://dev.myprivia.com/coronavirus/">Covid-19 Resources</a></li>
 
 </ul>
</div>

<!--<button class="accordion">OUR LOCATIONS</button>
<div class="panel">
  <ul class="pan-links">
 <li><a href="#">Link1</a></li>
  <li><a href="#">Link2</a></li>
   <li><a href="#">Link3</a></li>
 
 </ul>
</div>-->
             <!--acc menu ends-->
<!--acc below menu starts-->
<div class="accb-menu">
<ul class="accb-links">
<li class="mpp"><a href="https://dev.myprivia.com/account-access/" class="ppm">Patient Portal</a></li>
<li class="mpmb"><a href="https://8042-1.portal.athenahealth.com/">Pay My Bill</a></li>
<li class="mcu"><a href="https://dev.myprivia.com/contact-us/">Contact Us</a></li>
<li class="me"><a><?php echo do_shortcode('[gtranslate]'); ?></a></li>

 </ul>   
 </div>   
<!--acc below menu ends-->
<!--mob bot button starts-->
<div class="mob-bot center">
<a href="http://find-a-doctor.priviamedicalgroup.com/" target="_blank" class="btn-xlg button-blue btn-bold">GET CARE NOW</a>
</div>   
<!--mob bot button ends-->

           </div>
      <!--mobile mwnu dropdown ends-->


</header>



<div id="main" class="main">
