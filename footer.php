        </div><!-- #main end -->
        <footer>
          <div class="left">
            <?php echo get_ph_logo(); ?>
            <?php if(get_field('add_app_icon', 'options')) : ?>
              <div class="footer-myprivia-logo">              
                <a href="https://itunes.apple.com/us/app/myprivia/id1364708257" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/Apple.png" alt="App Store" width="77" height="25"></a>
                <a href="https://play.google.com/store/apps/details?id=com.priviamedicalgroup.priviaapp"  target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/Google-play.png" alt="Google Play" width="77" height="25"></a>
              </div>      
            <?php endif; ?>   
          </div>
          <div id="footer-right">
            <?php get_template_part( 'menus/footer' ); ?>
            <?php get_template_part( 'footer', 'social' ); ?>
          </div>
        </footer>
        <script type="text/javascript">
            function loadScript() {
              var script = document.createElement('script');
              script.type = 'text/javascript';
              script.src = 'http://maps.googleapis.com/maps/api/js?<?php echo (get_field('google_maps_api', 'options')) ? 'key='.get_field('google_maps_api', 'options').'&' : ''; ?>libraries=visualization,geometry&amp;sensor=false&callback=loadMap';
              document.body.appendChild(script);
            }
        </script>
            <script>
      var acc = document.getElementsByClassName("accordion");
      var i;
      
      for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
          this.classList.toggle("active-acc");
          var panel = this.nextElementSibling;
          if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
          } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
          } 
        });
      }
      </script>
    <script>
function mobtoggle(y) {
  y.classList.toggle("fa-times");
}
</script>
  <script>
function mdd(z) {
  z.classList.toggle("fa-times");
}
</script>
    <script>
        function main() {
                var menuIconOpen = document.getElementsByClassName("open")[0];
                var menuIconClose = document.getElementsByClassName("close")[0];
                var menuItems = document.getElementsByClassName("menu");
    
                menuIconClose.style.display = "none";
    
                menuIconOpen.onclick = function () {
                    this.style.display = "none";
                    menuIconClose.style.display = "block";
                    menuDisplay("show", menuItems);
                };
    
                menuIconClose.onclick = function () {
                    this.style.display = "none";
                    menuIconOpen.style.display = "block";
                    menuDisplay("hide", menuItems);
                };
            }
    
            function menuDisplay(state, items) {
                if (state == "show") {
                    for (var i = 1; i < items.length; i++) {
                        items[i].classList.add("show");
                    }
                } else {
                    for (var i = 1; i < items.length; i++) {
                        items[i].classList.remove("show");
                    }
                }
            }
    
            window.onload = function () {
                main();
            }
    </script>
 <script>
    $(document).ready(function(){ 
        $('.top-content').addClass('hidenow');
      $(".button-tog").click(function(){
        $(".top-content").toggle();
      });
    });
    </script>
    <script>
        function myFunction(x) {
          x.classList.toggle("change");
        }
        </script>
    <script>
            $(document).ready(function() {
              $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                  0: {
                    items: 1,
                    nav: false
                  },
                  600: {
                    items: 3,
                    nav: false
                  },
                  1000: {
                    items: 5,
                    nav: false,
                    loop: false,
                    margin: 20
                  }
                }
              })
            })
          </script>
           <script>
    $(document).ready(function(){ 
        $('.mob-top').addClass('hidenow');
      $(".tog-mob").click(function(){
        $(".mob-top").toggle();
      });
    });
    </script>
             <script>
    $(document).ready(function(){ 
        $('.mdd').addClass('hidenow');
      $(".tog-mob-bot").click(function(){
        $(".mdd").toggle();
      });
    });
    </script>
       <script>
        $(document).ready(function(){ 
            $('.men').addClass('hidenow');
          $(".tog-mob-bot").click(function(){
            $(".men").toggle();
          });
        });
        </script>
           <script>
            $(document).ready(function(){ 
                $('.phone-tog').addClass('hidenow');
              $(".tog-mob-bot").click(function(){
                $(".main").toggleClass("hidden1"); 
                $("footer").toggleClass("hidden1"); 
       
                
              });
            });
            </script>
 
      <?php wp_footer(); ?>
    </body>
</html>
