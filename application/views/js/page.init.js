$(document).ready(function(){ 
   jQuery(document).on('click', '.dropdown-mega .dropdown-menu', function(e) {
     e.stopPropagation();
   });

   /* Navbar-1 and Navbar-3 Toggleshow */
   $(document).on('scroll', function(){
      var y = $(this).scrollTop();
      if (y < 50) {
         $('.navbar-1').css('margin-top', '0');
         $('.navbar-2').css('margin-top', '2rem');
         $('.navbar-3').css('margin-top', '5.5rem');
      } else {
         $('.navbar-1').css('margin-top', '-2rem');
         $('.navbar-2').css('margin-top', '0');
         $('.navbar-3').css('margin-top', '-2rem');
      }
   });
      
   /* .dropdown-mega hover triger*/
   $('.dropdown-mega').hover(function() {
      $(this).stop(true, true).addClass("open");
   }, function() {
      $(this).removeClass("open");
   });
   
   /* .dropdown-mega tab manu*/
   $('.dropdown-mega .dropdown-menu .nav-tabs li a').hover(
      function() {    
         $(this).tab('show');
      },
       function() {    
         // $(this).parents('.mega-container').find('.tab-content ' + $(this).attr('href')).removeClass('active');
      }
   );
   $('.dropdown-mega .dropdown-menu .nav-tabs li a').on('shown.bs.tab', function(event){
      $(event.relatedTarget).tab('');
   });

   /* btn-upload Tooltop */
   $('.navbar-2 .btn-upload').tooltip();

   /* Ticker */
   $('.ticker1, .ticker2').easyTicker({
      direction: 'up',
      easing: 'swing',
      speed: 'slow',
      interval: 3000,
      height: 'auto',
      visible: 0,
      mousePause: 1,
      controls: {
         up: '.control-right',
         down: '.control-left',
         toggle: '',
         playText: 'Play',
         stopText: 'Stop'
      }
   });
})