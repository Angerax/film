(function ($, app) {
	$(document).ready(function () {
		$('.supsystic-table').each(function () {
			app.initializeTable(this, app.showTable($(this)), function(table) {
				// This is used when table is hidden in tabs and can't calculate itself width to adjust on small screens
				if (table.is(':visible')) {
					// Fix bug in FF and IE wich not supporting max-width 100% for images in td
					calculateImages(table);
				} else {
					table.data('isVisible', setInterval(function(){
						if (table.is(':visible')) {
							clearInterval(table.data('isVisible'));
							calculateImages(table);
						}
					}, 250));
				}
				if(table.data('responsive-mode') == 1) {
					table.api().responsive.recalc();
				}
			});
		});
	});
	function getOriginalImageSizes(img) {
		var tempImage = new Image(),
			width,
			height;
		if ('naturalWidth' in tempImage && 'naturalHeight' in tempImage) {
			width = img.naturalWidth;
			height = img.naturalHeight;
		} else {
			tempImage.src= img.src;
			width = tempImage.width;
			height = tempImage.height;
		}
		return {
			width: width,
			height: height
		};
	}

	function calculateImages($table) {
		var $images = $table.find('img');
		if ($images.length > 0 && /firefox|trident|msie/i.test(navigator.userAgent)) {
			$images.hide();
			$.each($images, function(index, el) {
				var $img = $(this),
					originalSizes = getOriginalImageSizes(this);
				if ($img.closest('td, th').width() < originalSizes.width) {
					$img.css('width', '100%');
				}
			});
			$images.show();

		}
	}
}(window.jQuery, window.supsystic.Tables));