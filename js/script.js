$(document).ready( function() {
 
$('#menu-item-162').ready(function(){
    $('#menu-item-162 a').addClass('active');
}); 

$('nav li a').click(function(){
    $(this).addClass('selected');
    $('.active').removeClass('selected');
});    


        
	
  var container = document.querySelector('#fashion');
  var msnry = new Masonry( container, {
   columnWidth: 188,
   itemSelector: '.c-item',
   gutter: 20      
 });
    
  var container = document.querySelector('#beauty');
  var msnry = new Masonry( container, {
   columnWidth: 188,
   itemSelector: '.b-item', 
   gutter: 20
 });
    
  var container = document.querySelector('#advertising');
  var msnry = new Masonry( container, {
   columnWidth: 188,
   itemSelector: '.a-item',
   gutter: 20      
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