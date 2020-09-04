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
        
      e.preventDefault();
      var quantity = parseInt($('#quantity').val());
      
      $('#quantity').val(quantity + 1);        
    });

    $('.quantity-left-minus').click(function(e){
      e.preventDefault();
      var quantity = parseInt($('#quantity').val());
      
        if(quantity>0){
        $('#quantity').val(quantity - 1);
        }
    });
    
});


// dropdown parent link click
jQuery(function($) {
  if ($(window).width() > 769) {

    $('.category-list .dropdown > a').click(function() {
      location.href = this.href;
    });

  }
});