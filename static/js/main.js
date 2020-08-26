// sticky header
$(window).scroll(function() {
  if ($(this).scrollTop() > 300){  
    $('header').addClass("sticky");
  }
  else{
    $('header').removeClass("sticky");
  }
});

// search menu
$(".search-icon-toggle").click(function(){
  $(".search-bar").toggle();
});

$(".close-icon").click(function(){
  $(".search-bar").hide();
});

//quantity plus minus
$(document).ready(function(){

  var quantitiy=0;
    $('.quantity-right-plus').click(function(e){
        
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());
        
        // If is not undefined
            
            $('#quantity').val(quantity + 1);

          
            // Increment
        
    });

      $('.quantity-left-minus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());
        
        // If is not undefined
      
            // Increment
            if(quantity>0){
            $('#quantity').val(quantity - 1);
            }
    });
    
});