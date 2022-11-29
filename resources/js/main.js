(function ($) {
    "use strict";
	$('.sub_img').click(function(){
		myFunction(this);
	});
	// chi tiet sp
	function myFunction(smallImg) {
		var fullImg = document.getElementById('img-full');
		fullImg.src = smallImg.src;
	}

	$('#filterBy').change(function(){
		$('#form-filter').submit();
	});

	$('#product-item').click(function(){
		$('#form-product').submit();
	});

    //format money
    $.fn.simpleMoneyFormat = function() {
		this.each(function(index, el) {		
			var elType = null; // input or other
			var value = null;
			// get value
			if($(el).is('input') || $(el).is('textarea')){
				value = $(el).val().replace(/,/g, '');
				elType = 'input';
			} else {
				value = $(el).text().replace(/,/g, '');
				elType = 'other';
			}
			// if value changes
			$(el).on('paste keyup', function(){
				value = $(el).val().replace(/,/g, '');
				formatElement(el, elType, value); // format element
			});
			formatElement(el, elType, value); // format element
		});
		function formatElement(el, elType, value){
			var result = '';
			var valueArray = value.split('');
			var resultArray = [];
			var counter = 0;
			var temp = '';
			for (var i = valueArray.length - 1; i >= 0; i--) {
				temp += valueArray[i];
				counter++
				if(counter == 3){
					resultArray.push(temp);
					counter = 0;
					temp = '';
				}
			};
			if(counter > 0){
				resultArray.push(temp);				
			}
			for (var i = resultArray.length - 1; i >= 0; i--) {
				var resTemp = resultArray[i].split('');
				for (var j = resTemp.length - 1; j >= 0; j--) {
					result += resTemp[j];
				};
				if(i > 0){
					result += ','
				}
			};
			if(elType == 'input'){
				$(el).val(result);
			} else {
				$(el).empty().text(result);
			}
		}
	};

    $('.price_format').simpleMoneyFormat();

	// nav & back top
    $(window).scroll(function () {
        if($(this).scrollTop() ){
            $('#mainnav').addClass('navbar-white');
			$('#back-to-top').fadeIn()
        } else{
            $('#mainnav').removeClass('navbar-white');
			$('#back-to-top').fadeOut()
        }
    });

	$('#back-to-top').click(function(){
		$('html, body').animate({
			scrollTop: 0
		},300);
	})    
    
    // Sidebar Toggler
    $('.sidebar-toggler').click(function () {
        $('.sidebar, .content').toggleClass("open");
        return false;
    });
    
    // Menu active
    var path = window.location.href;
    $('.nav-item').each(function() {
        if (this.href === path) {
           $(this).addClass('active');
        }
    });


    // setTime Alert
    setTimeout(function(){
        $('.alert').fadeOut(1000);
    }, 5000);

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
	
  
})(jQuery);



 
