$(document).ready( function() {
     
    
    $('#advertising img').on('load', function() {
        var msnry = new Masonry( $('#advertising')[0], {
           columnWidth: 188,
           itemSelector: '.a-item',
            gutter: 20      
        });        
    });	

    $('#fashion img').on('load', function() {
        var msnry = new Masonry( $('#fashion')[0], {
           columnWidth: 188,
           itemSelector: '.c-item',
            gutter: 20      
        });        
    });

    $('#beauty img').on('load', function() {
        var msnry = new Masonry( $('#beauty')[0], {
           columnWidth: 188,
           itemSelector: '.b-item',
            gutter: 20      
        });        
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