
$(document).ready(function(){
	
	$('.event-links .tabs h6').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('.event-links .tabs h6').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
  
	})

})







;(function ($) {
  var gallery = function () {
    var $elem = $(this);
    var activatedImage

    var activateImage = function (index) {
      if (!$elem.find('.thumb').eq(index).length) {
        return;
      }

      $elem.find('.thumb').removeClass('active');
      $elem.find('.thumb').eq(index).addClass('active');

      $elem.find('.image').removeClass('active');
      $elem.find('.image').eq(index).addClass('active');

      return;
    };

    var imagesEl = $elem.find('.images')[0];
    var imagesHammer = new Hammer(imagesEl);

    var getActiveImageIndex = function () {
      var $images = $elem.find('.image');
      return $images.index('.active');
    };

    /*
    imagesHammer.on('swipeleft', function (e) {
      e.gesture.preventDefault();
      console.log('swipeleft', getActiveImageIndex(), '- 1');
      activateImage(getActiveImageIndex() - 1);
    });
    */

    imagesHammer.on('swiperight', function (e) {
      e.preventDefault();
      console.log('swiperight', getActiveImageIndex(), '+ 1');
      activateImage(getActiveImageIndex() + 1);
    });

    $elem.on('click', '.thumb', function () {
      var index = $(this).index();
      return activateImage(index);
    });
  };

  $.fn.gallery = gallery;
}(window.$));


