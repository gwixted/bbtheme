(function ($) {
    $(function(){
      
      // GLOBAL VARIABLES =============================
  		wndw = $(window);
  		bod = $('body');
  		htmlheadbod = $('html,head,body'),
      mtrig = $('.mobile-trigger'),
      mmenu = $('#mobile-menu'),
      ovrly = $('.overlay');

      // HELPER FUNCTIONS ======================
  		function placeBgImg(container,path) {
  		  container.css({
  		    'background-image': 'url(' + path + ')'
  		  });
  		}//placeBgImg()
      
      // GLOBAL ================================
      mtrig.on('click',function(){
        $(this).toggleClass('vis');
        ovrly.toggleClass('vis');
        mmenu.toggleClass('vis');
      });
      
      // LOAD EVENT ============================
  		wndw.on('load',function(){
  			
  		});

  		// SCROLL EVENT ============================
  		wndw.on('scroll',function(){

  		});

  		// RESIZE EVENT ============================
  		wndw.on('resize',function(){

  		});

    });
}(jQuery));