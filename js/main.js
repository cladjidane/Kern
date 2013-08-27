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

	var page = (function(){
		init = function(){
			console.log($('article').height());
			$('.parent-sidebar2').height($('article').height()+80);
		};

		return {
			init: init()
		};
	})();

	page.init;
});