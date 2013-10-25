// Using the module pattern for a jQuery feature
$(document).ready(function() {
	/*
	var feature = (function() {
		
		var $items = $(".contact li");
		var $container = $("<div class='container'></div>");
		var $currentItem = null;
		var urlBase = "/?item=";

		var createContainer = function() {
			var $i = $(this);
			var $c = $container.clone().appendTo($i);
			$i.data("container", $c);
		},
		buildUrl = function() {
			return urlBase + $currentItem.attr("id");
		},
		showItem = function() {
			$currentItem = $(this);
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
				$(this).data("container").hide();
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

		var	$ul = $('.mozaic-pagination'),
				$li = $('.mozaic-pagination li'),
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
			$('.mozaic-page').height(($('.mozaic__item').eq(0).height() * 3) + 15).eq(0).addClass('mozaic-page-active');

			// Navigation
			$('.mozaic-next').on('click', function(el){
				var $next = $('.mozaic-page-active').next();
				var $current = $('.mozaic-page-active');

				$current.removeClass('mozaic-page-active');
				
				if($next.length != 0) {
					$next.addClass('mozaic-page-active');
				} else {
					$('.mozaic-page').eq(0).addClass('mozaic-page-active');					
				}				
			})

			// Resize
			$( window ).resize(function() {
			  navDimension();
			});
		}

		navBuild = function() {
			// On construit le block pour la nav
			$('<li class="mozaic-next mozaic__item"></li>')
				.css('margin-right', 0)
				.appendTo('.mozaic-page');
			// On construit le block pour l'icone et le click
			$('<div class="mozaic-next-icon icons-plus-active"></div>')
				.appendTo('.mozaic-next');

			// Dimension idéal du block
			navDimension();
		}

		navDimension = function() {
			var $item = $('.mozaic__item').eq(0);

			// Le block fait la même taille que les autres li
			$('.mozaic-next')
				.width($item.width())
				.height($item.height());

			// L'UL est toujours de même hauteur

		}

		return {
			init: init()
		}		
	})();
	*/

	$('.gamme').mozaic();

	$('.slider-recette').bxSlider({
		slideWidth: 78,
    minSlides: 2,
    maxSlides: 3,
    slideMargin: 10,
    pager: false
	});


});