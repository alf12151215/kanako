
( function( window ) {
	
  var $container = $('#fashion');
  $container.masonry({
    columnWidth: 188,
    itemSelector: '.c-item',
   gutter: 20     	
  });

  var $container = $('#beauty');
  $container.masonry({
    columnWidth: 188,
    itemSelector: '.b-item',
   gutter: 20     	
  });

	
  var $container = $('#advertising');
  $container.masonry({
    columnWidth: 188,
    itemSelector: '.a-item',
   gutter: 20     	
  });
  
 
    });

