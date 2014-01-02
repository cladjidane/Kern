// Using the module pattern for a jQuery feature
jQuery(document).ready(function() {

	//$.scrollTo('#accueil', 400);

	var vp = jQuery(window).height();
	jQuery('.ecran').height(vp-100);

	if(jQuery('body').data('home')) {
		jQuery('.nav-button').on('click', function(e){
			$that = jQuery(this);
			if($that.data('noscroll')) return true;
			e.preventDefault();
			$.scrollTo($that.attr('href').replace('/', ''), 400);
		});
	}

	jQuery('.article ul').each(function(i, el){
		$ul = jQuery(el);
		if (jQuery('li:first-child', $ul).children().is('img')) {
			$ul.addClass('bx');
			$ul.bxSlider({
				pager: false,
				responsive: false,
				controls: false,
				auto: true,
				slideWidth: 275,
				slideMargin: 0
			});
		}
	})

	// Effet diagonale
	jQuery('.home article').append(jQuery('<div class="diago-article" />'));

	// Mozaic equipe
	jQuery('.equipe a').each(function(i, el){
		$el = jQuery(el);
		$el.attr('href', $el.attr('href') + '&tmpl=component');
	});

	jQuery('.equipe a').click(function( event ) {
  	event.preventDefault();

  	jQuery('#contact .article').load(jQuery(this).attr('href'));
  });


	/*
	var feature = (function() {
		
		var $items = jQuery(".contact li");
		var $container = jQuery("<div class='container'></div>");
		var $currentItem = null;
		var urlBase = "/?item=";

		var createContainer = function() {
			var $i = jQuery(this);
			var $c = $container.clone().appendTo($i);
			$i.data("container", $c);
		},
		buildUrl = function() {
			return urlBase + $currentItem.attr("id");
		},
		showItem = function() {
			$currentItem = jQuery(this);
			getContent(showContent);
		},
		showItemByIndex = function(idx) {
			$.proxy(showItem, $items.get(idx));
		},
		getContent = function(callback) {
			//$currentItem.data("container").load(buildUrl(), callback);
			$currentItem.data("container").text('123');
		},
		showContent = function() {
			$currentItem.data("container").show();
			hideContent();
		},
		hideContent = function() {
			$currentItem.siblings().each(function() {
				jQuery(this).data("container").hide();
			});
		};
		
		$items.each(createContainer).click(showItem);
		
		return {
			showItemByIndex: showItemByIndex
		};

	})();
	feature.showItemByIndex(20);
	*/

	/*
	var mozaic = (function(){

		var	$ul = jQuery('.mozaic-pagination'),
				$li = jQuery('.mozaic-pagination li'),
				numPerPage = 8,
				numRows = 3,
				count = 1;
		
		init = function(){
			
			// On wrap tous les paquets de 8 li
			for (var i = 0; i < $li.length; i += numPerPage) {
			    $li.slice(i,i+numPerPage).wrapAll('<ul class="mozaic-page mozaic-page-' + (count++) + ' mozaic__layout" />');
			}

			$ul.find('> ul').unwrap();

			// TODO : à refactoriser propre
			// On ajoute la nav
			navBuild();

			// On active le premier et masque les autres
			jQuery('.mozaic-page').height((jQuery('.mozaic__item').eq(0).height() * 3) + 15).eq(0).addClass('mozaic-page-active');

			// Navigation
			jQuery('.mozaic-next').on('click', function(el){
				var $next = jQuery('.mozaic-page-active').next();
				var $current = jQuery('.mozaic-page-active');

				$current.removeClass('mozaic-page-active');
				
				if($next.length != 0) {
					$next.addClass('mozaic-page-active');
				} else {
					jQuery('.mozaic-page').eq(0).addClass('mozaic-page-active');					
				}				
			})

			// Resize
			jQuery( window ).resize(function() {
			  navDimension();
			});
		}

		navBuild = function() {
			// On construit le block pour la nav
			jQuery('<li class="mozaic-next mozaic__item"></li>')
				.css('margin-right', 0)
				.appendTo('.mozaic-page');
			// On construit le block pour l'icone et le click
			jQuery('<div class="mozaic-next-icon icons-plus-active"></div>')
				.appendTo('.mozaic-next');

			// Dimension idéal du block
			navDimension();
		}

		navDimension = function() {
			var $item = jQuery('.mozaic__item').eq(0);

			// Le block fait la même taille que les autres li
			jQuery('.mozaic-next')
				.width($item.width())
				.height($item.height());

			// L'UL est toujours de même hauteur

		}

		return {
			init: init()
		}		
	})();
	*/

	jQuery('.gamme').mozaic();

	jQuery('.slider-recette').bxSlider({
		slideWidth: 100,
    minSlides: 2,
    maxSlides: 3,
    slideMargin: 10,
    pager: false
	});

	jQuery('.slider-adherent').bxSlider({
		slideWidth: 100,
    minSlides: 2,
    maxSlides: 3,
    slideMargin: 10,
    pager: false
	});

	jQuery('.diapohome__list').bxSlider({
    pager: false,
    controls: false,
    auto: true,
    preloadImages: 'all'
	});

});