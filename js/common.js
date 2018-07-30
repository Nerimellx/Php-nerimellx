$(function() {

	$(".button").click(function(){

	var	 tid = $(this).attr("tid");

	$.ajax({
		type: "POST",
		url: "/addtocart.php",
		data: "id="+tid,
		dataType: "html",
		cache: false,
		success: function(data) {
			loadcart();
		}

	});

	});

	function loadcart() {
			$.ajax({
		type: "POST",
		url: "/loadcart.php",
		dataType: "html",
		cache: false,
		success: function(data)	{
			if (data == "0")
			{

				$("#block-basket > a").html("Корзина");
			}else
			{
				$("#block-basket > a").html(data);
			}
			
					}
			});
	}
	// Price counter script


	$('.count-plus').click(function(){

		var iid = $(this).attr("iid");

		$.ajax({
			type: "POST",
			url: "/count-plus.php",
			data: "id="+iid,
			dataType: "html",
			cache: false,
			success: function(data) {
				$("#input-id"+iid).val(data);
				loadcart();

				// переменная с ценой продукта
				var priceproduct = $("#tovar"+iid+" > p").attr("price");
				// цена умножается на количество
				result_total = Number(priceproduct) * Number(data);

				$("#tovar"+iid+" > p").html(result_total+" грн");
				$("#tovar"+iid+" > h5 > .span-count").html(data);

				itog_price();
			}
		});
	});

$('.count-minus').click(function(){
 
  var iid = $(this).attr("iid");      
 
 $.ajax({
  type: "POST",
  url: "/count-minus.php",
  data: "id="+iid,
  dataType: "html",
  cache: false,
  success: function(data) {  
  $("#input-id"+iid).val(data);
   
  // переменная с ценной продукта
  var priceproduct = $("#tovar"+iid+" > p").attr("price");
  // Цену умножаем на колличество
  result_total = Number(priceproduct) * Number(data);
 
  $("#tovar"+iid+" > p").html(result_total+" $");
  $("#tovar"+iid+" > h5 > .span-count").html(data);
 
  itog_price();
      }
});
 
});

 $('.count-input').keypress(function(e){
   
 if(e.keyCode==13){//код кнопки enter
       
 var iid = $(this).attr("iid");
 var incount = $("#input-id"+iid).val();        
 
 $.ajax({
  type: "POST",
  url: "/count-input.php",
  data: "id="+iid+"&count="+incount,
  dataType: "html",
  cache: false,
  success: function(data) {
  $("#input-id"+iid).val(data);
   
  // переменная с ценной продукта
  var priceproduct = $("#tovar"+iid+" > p").attr("price");
  // Цену умножаем на колличество
  result_total = Number(priceproduct) * Number(data);
 
 
  $("#tovar"+iid+" > p").html(result_total+" грн");
  $("#tovar"+iid+" > h5 > .span-count").html(data);
  itog_price();
 
      }
});
  }
});

	function itog_price() {
		$.ajax({
			type: "POST",
			url: "/itog_price.php",
			dataType: "html",
			cache: false,
			success: function(data) {
				$(".itog-price > strong").html(data);
			}
		});
	}

	$('.popup-with-move-anim').magnificPopup({
		type: 'inline',

		fixedContentPos: false,
		fixedBgPos: true,

		overflowY: 'auto',

		closeBtnInside: true,
		preloader: false,
		
		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-slide-bottom'
	});

	$(".top-line .sf-menu").superfish({
		cssArrows: false,
		hoverClass: 'no-class',
		delay: '100'
	});

	//EqualHeights
	$(".products-item h4").equalHeights();

	// Owl Carousel script
	var owl = $('.slider');
  owl.owlCarousel({
   loop: true,
   items: 1,
   itemClass: 'slide-wrap',
   nav: true, 
   navText: "", 
  });
  
  $('.next').on('click', function () {
      owl.trigger('next.owl.carousel', [500]);
  });
  $('.prev').on('click', function () {
      owl.trigger('prev.owl.carousel', [500]);
  }); 

  // Mobile Menu

	$(".mobile-mnu").click(function() {
		var mmAPI = $("#my-menu").data( "mmenu" );
		mmAPI.open()
	  var thiss = $(this).find("toggle-mnu")
	  $(this).toggleClass("on");
	  $(".main-mnu").slideToggle();
	  return false;
	});

	$("#my-menu").mmenu({
	extensions : [ 'widescreen', 'theme-white', 'effect-menu-slide', 'pagedim-black' ],
	navbar: {
		title : "Меню"
	}
	});

	//SVG Fallback
	if(!Modernizr.svg) {
		$("img[src*='svg']").attr("src", function() {
			return $(this).attr("src").replace(".svg", ".png");
		});
	};

	//E-mail Ajax Send
	//Documentation & Example: https://github.com/agragregra/uniMail
	$(".callback").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "mail.php", //Change
			data: th.serialize()
		}).done(function() {
			$(".success").addClass("visible");
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
				$(".success").removeClass("visible");
				$.magnificPopup.close();
			}, 3000);
		});
		return false;
	});

});

