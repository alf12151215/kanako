$(document).ready( function() {
     
    
    $(window).on('scroll', function() {
        if ((window.pageYOffset + window.innerHeight) >= $('#beauty').offset().top) {
            $('#beauty img').trigger('beauty');
        }
        if ((window.pageYOffset + window.innerHeight) >= $('#advertising').offset().top) {
            $('#advertising img').trigger('advertising');
        }

    });

    var $fashion = $('#fashion');
    var $fashionImg = $fashion.find('img');
    var fashionLen = $fashionImg.length;
    var fashionCount = 0;    
    $fashionImg.lazyload({
        event: 'load',
        effect: 'fadeIn',
        load: function() {
            fashionCount++;         
            if (fashionLen > fashionCount) {
                return false;
            }        
            var msnry = new Masonry( $fashion[0], {
               columnWidth: 188,
               itemSelector: '.c-item',
               gutter: 20      
            });              
        }
    });
    
    var $advertising = $('#advertising');
    var $advertisingImg = $advertising.find('img');
    var advertisingLen = $advertisingImg.length;
    var advertisingCount = 0;  
    $advertisingImg.lazyload({
        event: 'advertising',
        effect: 'fadeIn',
        load: function() {
            advertisingCount++;         
            if (advertisingLen > advertisingCount) {
                return false;
            }        
            var msnry = new Masonry( $advertising[0], {
               columnWidth: 188,
               itemSelector: '.a-item',
               gutter: 20      
            });              
        }
    });
    
    var $beauty = $('#beauty');
    var $beautyImg = $beauty.find('img');
    var beautyLen = $beautyImg.length;
    var beautyCount = 0;  
    $beautyImg.lazyload({
        event: 'beauty',
        effect: 'fadeIn',
        load: function() {
            beautyCount++;
            if (beautyLen > beautyCount) {
                return false;
            }        
            var msnry = new Masonry( $beauty[0], {
               columnWidth: 188,
               itemSelector: '.b-item',
                gutter: 20      
            });              
        }
    });
    
    
    
    
  
   
    

    
$('#menu-item-162').ready(function(){
    $('#menu-item-162 a').addClass('active');
}); 



    
var sections = $('section')
  , nav = $('nav');
 
$(window).on('scroll', function () {
  var cur_pos = $(this).scrollTop();
 
  sections.each(function() {
    var top = $(this).offset().top,
        bottom = top + $(this).outerHeight();
 
    if (cur_pos >= top && cur_pos <= bottom) {
      nav.find('a').removeClass('active');
      sections.removeClass('active');
 
      $(this).addClass('active');
      nav.find('a[href="#'+$(this).attr('id')+'"]').addClass('active');
    }
  });
});

    
    
    
});