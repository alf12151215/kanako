$(document).ready( function() {
	
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
    

});