$(function(){

	// Effects
	$("#btn1").on("click", function(){
		$("#bounce").effect("bounce", {
			times: 7,
			distance: 100,
			direction: "down"

		}, 1000);
	})

	$("#btn2").on("click", function(){
		$("#explode").effect("explode", {
			pieces: 100,

		}, 2000, function(){
		$("#explode").effect("explode", {
			pieces: 40,
			mode: "show"
		},1000);
		});
	});

	$("#btn3").on("click", function(){
		$("#puff").effect("puff", {
			percent: 150

		}, 1000);
	})


	// Функции show/hide
	$("#btn4").on("click", function(){
		$("#pic1").hide("fold", 1000);
	})

	$("#btn5").on("click", function(){
		$("#pic2").show("scale", 1000);
	})

	// Функция switch class
	$("#btn8").on("click", function(){
		$("#switch").switchClass("switch", "switch1", 2000);
	});

	// Анимация цвета
	$("#btn9").on("click", function(){
		$("#anim").animate({
			color: "white",
			backgroundColor: "red",
			fontSize: "44px",
			lineHeight: "90px"
		}, 2000);
	});

	// Виджеты jQueryUI Accordion
	$("#accord").accordion({
		active: false,
		collapsible: true,
		heightStyle: ""
	});

	// Виджеты jQueryUI Tabs (вкладки)
	$("#tabs").tabs({
		event: "mouseover",
		collapsible: true
	});

	// Виджеты jQueryUI Menu
	$("#menu").menu();

	// Виджет Button (кнопка)
	$("#butt").button();

	//Widget Datepicker
	$("#date, #calendar").datepicker({
		changeYear: true,
		changeMonth: true,
		yearRange: "1940:2028",
		showWeek: true
	});

	// Widget slider
	$(".slider").slider({
		min: 10,
		max: 200,
		values: [19,61],
		range: true,
		slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( ".slider" ).slider( "values", 0 ) +
      " - $" + $( ".slider" ).slider( "values", 1 ) );

    // Widget dialog
    $("#opdialog").on("click", function(){
    	$("#dialog").dialog({
    		minWidth: 350,
    		buttons: [{
      			text: "Cancel",
      			icon: "ui-icon-heart",
      			click: function() {
        		$( this ).dialog( "close" );
        	}
        }
        ],
        	modal: true, // затемняет задний фон!! круто!!!
        	hide: { effect: "blind", duration: 1000 },
        	show: {effect: "blind", duration: 1000}
    });
    });
    
    // Widget selectMenu
    $("#list").selectmenu();

    // Drag elements перетаскивание
    $("#drag1, #drag2, #drag3").draggable({
    	revert: true,
    	helper: 'clone',
    	opacity: 0.5,
    	zIndex: 100
    });

    // Drag and Drop
    $("#gallery img").draggable({
    	revert: 'invalid',
    	start: function(event, ui){
    		ui.helper.css({'transform': 'rotate(5deg) scale(0.5)'});
    	},
    	stop: function(event, ui){
    		ui.helper.css({'transform': 'rotate(0deg) scale(1)'});
    	},
    	zIndex: 100
    });
    $("#trash").droppable({
    	activeClass: "highlight",
    	drop: function(event, ui){
    		ui.helper.hide("scale");
    		$(this).attr('src', 'img/trashcan-full-icon.png');
    	}
    });

    // Sort elements сортировать перетаскиванием
    $("#sort-1").sortable({
    	connectWith: "#sort-2",
    	helper: 'clone',
    	opacity: 0.5
    });
    $("#sort-2").sortable({
    	connectWith: "#sort-1",
    	helper: 'clone',
    	opacity: 0.5
    });

    // Menu SUPERFISH
    $("ul.sf-menu").superfish({
    	
    });

    // Gallery Colorbox
    $("a.gal").colorbox({
    	rel: 'gal',
    	transition: 'fade',
    	speed: 500,
    	width: 600,
    	height: 600,
    	opacity: 0.6,
    	slideshow: true,
    	slideshowSpeed: 2000,
    	slideshowAuto: false,
    	current: 'Photo {current} of {total}',
    	slideshowStart: "Slideshow",
    	slideshowStop:"Stop",
    	previous: 'back',
    	next: 'next',
    	close: 'shut down'
    });

    $("a.inline").colorbox({
    	inline: true,
    	width: "50%"
    });

    // Slider
    $("div.bxslider").bxSlider({
        mode: "horizontal",
        minSlides: 2,
        maxSlides: 4,
        moveSlides: 1,
        slideWidth: 300,
        slideMargin: 10,
        video: true
    });
});