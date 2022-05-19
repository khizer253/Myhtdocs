jQuery(document).ready(function( $ ){ 
  if( $('body').hasClass('woocommerce') && $('body').hasClass('archive') ) { 
   $('.products').isotope({ 
	itemSelector: '.product',
	layoutMode: 'packery' 
    }); 
   }
}); 