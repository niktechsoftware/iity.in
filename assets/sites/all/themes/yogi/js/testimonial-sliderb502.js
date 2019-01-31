jQuery('document').ready(function ($) {
	function getCenterThumb() {
		var visible = jQuery('.testimonial-author ul').triggerHandler( 'currentVisible' ),
		center = Math.floor( ( visible.length - 1 ) / 2);

		return center;
	}

	var testimonialOptions = {
			infinite: true,
			circular: true,
			responsive: true,
			debug : false,
			width: '100%',
			height: 'variable',
			scroll: {
				items: 1,
				duration: 600,
				pauseOnHover: "resume",
				fx: "scroll",
				onBefore: function( data ) {
					var page = data.items.visible.first().data( 'page' );
					jQuery('.testimonial-author ul').trigger( 'slideTo', [ jQuery('.testimonial-author ul').find("li[data-source=" + page +  "]" ), -getCenterThumb() ] );
					jQuery('.testimonial-author ul').find( 'li' ).removeClass( 'selected' );
				},
				onAfter: function( data ) {
					var page = data.items.visible.first().data( 'page' );
					jQuery('.testimonial-author ul').find("li[data-source=" + page +  "]" ).addClass( 'selected' );
				}
			},
			auto: {
				timeoutDuration: 10000,
				play: true						    },
			swipe: {
			  onTouch: true,
			  onMouse: true
			},
			items: {
				visible: {
				  min: 1,
				  max: 1
				},
				height:'variable'
			},
		};
		jQuery('.testimonial-quote ul').carouFredSel(testimonialOptions);

	var testimonialThumbOptions = {
		infinite: true,
		circular: true,
		responsive: true,
		debug : false,
		width:'100%',
		height: 120,
		align: 'center',
		scroll: {
		  items: 2,
		  duration: 600,
		  pauseOnHover: "resume",
		  fx: "scroll"
		},
		auto: false,
		swipe: {
		  onTouch: true,
		  onMouse: true
		},
		items: {
			visible: 18,
			width: "variable",
			height: 100,
			align: 'center'
		},
		onCreate: function() {
			var center = 8;//getCenterThumb();
			jQuery('.testimonial-author ul').trigger( 'slideTo', [ -center, { duration: 0 } ] );
			jQuery('.testimonial-author ul').find( 'li' ).eq( center ).addClass( 'selected' );
		}
	};

	jQuery('.testimonial-author ul').carouFredSel(testimonialThumbOptions);

	jQuery(document).on('click','.testimonial-author li',function(e){
		e.stopPropagation();
		e.preventDefault();
		var source = jQuery(this).data('source');
		jQuery('.testimonial-quote ul').trigger('slideTo', jQuery('.testimonial-quote ul').find("li[data-page=" + source +  "]" ));
	});
});