<?php
/**
 * Swiper for Joomla! Module
 *
 * @author    TemplateMonster http://www.templatemonster.com
 * @copyright Copyright (C) 2012 - 2016 Jetimpex, Inc.
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 
 * Parts of this software are based on Swiper by Vladimir Kharlampidi: http://idangero.us/swiper/ & Articles Newsflash standard module
 * 
 */

defined('_JEXEC') or die;

$app 	  = JFactory::getApplication();	
$template = $app->getTemplate();


$effects = $params->get('items_params');

$j = 0;
$isVideo = 0;
$isParallax = 0;
if($effects != NULL){
	foreach($effects as $item){
		$item_effects[$j] = $item;
		if($item_effects[$j]->slide_effect==0){
			$isVideo = 1;
		}
		if($item_effects[$j]->slide_effect==1){
			$isParallax = 1;
		}
		$j++;
	}
}



if($isVideo == 1){
	$document->addScript('modules/mod_swiper/js/jquery.vide.min.js');
}
if($isParallax == 1){
	$document->addScript('modules/mod_swiper/js/jquery.materialize-parallax.js');
}
?>

<div id="swiper-slider_<?php echo $module->id; ?>" class="swiper-container swiper-slider swiper-slider__<?php echo $moduleclass_sfx; ?>"
	data-autoplay="<?php if($params->get('autoplay')==0):?>false<?php else:?><?php echo $params->get('autoplay_speed')?><?php endif;?>"
	data-loop="true"
	data-simulate-touch="<?php echo $params->get('simulatetouch');?>"
	data-slide-effect="<?php echo $params->get('slide_animation');?>"
	style="min-height: <?php echo $params->get('minHeight');?>;height: <?php echo $params->get('height');?>"
	>
	<div class="swiper-wrapper">
		<?php
			// Item URL
			if($params->get('item_url')){
				$itemURLs = explode(';', $params->get('item_url'));
			}	

			$i=0;	
			foreach ($list as $item) :		

				require JModuleHelper::getLayoutPath('mod_swiper', '_item');

				$i++;
			endforeach;
		?>
	</div>
	<?php if($params->get('pagination')==1):?>
		<!-- Swiper Pagination -->
	    <div class="swiper-pagination"
	    data-clickable="<?php if($params->get("pagination_clickable")==0):?>false<?php endif;?>"
	    data-index-bullet="<?php if($params->get("pagination_bullet")==0):?>false<?php else:?>true<?php endif;?>"
	    ></div>
	<?php endif?>
	<?php if($params->get('navigation')==1):?>
	    <!-- Swiper Navigation -->
	    <div class="swiper-button-prev"></div>
	    <div class="swiper-button-next"></div>
	<?php endif;?>
</div>

<?php
$js = '
	;(function ($, undefined) {
		$(window).load(function(){
			function isIE() {
			    var myNav = navigator.userAgent.toLowerCase();
			    return (myNav.indexOf(\'msie\') != -1) ? parseInt(myNav.split(\'msie\')[1]) : false;
			};
			var o = $("#swiper-slider_'.$module->id.'");

		    if (o.length) {

		        function getSwiperHeight(object, attr) {
			      var val = object.attr("data-" + attr),dim;
			      if (!val) {
			        return undefined;
			      }
			      dim = val.match(/(px)|(%)|(vh)|(vw)$/i);
			      if (dim.length) {
			        switch (dim[0]) {
			          case "px":
			            return parseFloat(val);
			          case "vh":
			            return $window.height() * (parseFloat(val) / 100);
			          case "vw":
			            return $window.width() * (parseFloat(val) / 100);
			          case "%":
			            return object.width() * (parseFloat(val) / 100);
			        }
			      } else {
			        return undefined;
			      }
			    }

		        function toggleSwiperInnerVideos(swiper) {
			        var prevSlide = $(swiper.slides[swiper.previousIndex]),
			        nextSlide = $(swiper.slides[swiper.activeIndex]),
			        videos,
			        videoItems = prevSlide.find("video");

			        for (var i = 0; i < videoItems.length; i++) {
			        	videoItems[i].pause();
			        }

			      	videos = nextSlide.find("video");
			        if (videos.length) {
			        	videos.get(0).play();
			        }
			    }

		        function toggleSwiperCaptionAnimation(swiper) {
			        var prevSlides = $(swiper.el).find("[data-caption-animate]"),
			        nextSlide = $(swiper.slides[swiper.activeIndex]).find("[data-caption-animate]"),
			        delay,
			        duration,
			        nextSlideItem,
			        prevSlideItem;

			        for (var i = 0; i < prevSlides.length; i++) {
				        prevSlideItem = $(prevSlides[i]);

				        prevSlideItem.removeClass("animated")
				          .removeClass(prevSlideItem.attr("data-caption-animate"))
				          .addClass("not-animated");
			        }


			        var tempFunction = function (nextSlideItem, duration) {
				        return function () {
				          nextSlideItem
				            .removeClass("not-animated")
				            .addClass(nextSlideItem.attr("data-caption-animate"))
				            .addClass("animated");
				          if (duration) {
				            nextSlideItem.css(\'animation-duration\', duration + \'ms\');
				          }
				        };
			        };

			        for (var i = 0; i < nextSlide.length; i++) {
				        nextSlideItem = $(nextSlide[i]);
				        delay = nextSlideItem.attr("data-caption-delay");
				        duration = nextSlideItem.attr(\'data-caption-duration\');
				        
			            if (delay) {
			            	setTimeout(tempFunction(nextSlideItem, duration), parseInt(delay, 10));
			            } else { 
			            	setTimeout(tempFunction(nextSlideItem, duration), parseInt(delay, 0));
			            }
			        }
			    }

                var s = $("#swiper-slider_'.$module->id.'"),
	            pag = s.find(".swiper-pagination"),
	            next = s.find(".swiper-button-next"),
	            prev = s.find(".swiper-button-prev"),
	            bar = s.find(".swiper-scrollbar"),
	            swiperSlide = s.find(".swiper-slide");

		        for (var j = 0; j < swiperSlide.length; j++) {
		          var $this = $(swiperSlide[j]),
		            url;

		          if (url = $this.attr("data-slide-bg")) {
		            $this.css({
		              "background-image": "url(" + url + ")",
		              "background-size": "cover"
		            })
		          }
		        }

		        swiperSlide.end()
		          .find("[data-caption-animate]")
		          .addClass("not-animated")
		          .end();
		        
		        var swiperOptions = {
		        	';

		        	if($params->get('autoplay') == 1){
						$js .='
						autoplay: {
						    delay: '.$params->get('autoplay_speed', '7000').',
						},
						';
		        	}
		        	
		        $js .= '
		          direction: s.attr(\'data-direction\') ? s.attr(\'data-direction\') : "horizontal",
		          effect: s.attr(\'data-slide-effect\') ? s.attr(\'data-slide-effect\') : "slide",
		          speed: s.attr(\'data-slide-speed\') ? s.attr(\'data-slide-speed\') : 600,
		          loop: s.attr(\'data-loop\'),
		          simulateTouch: s.attr(\'data-simulate-touch\') ? s.attr(\'data-simulate-touch\') : false,
		          navigation: {
		            nextEl: next.length ? next.get(0) : null,
		            prevEl: prev.length ? prev.get(0) : null
		          },
		          pagination: {
		            el: pag.length ? pag.get(0) : null,
		            clickable: pag.length ? pag.attr("data-clickable") !== "false" : false,
		            renderBullet: pag.length ? pag.attr("data-index-bullet") === "true" ? function (index, className) {
		              return \'<span class="\' + className + \'">\' + ((index + 1) < 10 ? (\'0\' + (index + 1)) : (index + 1)) + \'</span>\';
		            } : null : null,
		          },
		          scrollbar: {
		            el: bar.length ? bar.get(0) : null,
		            draggable: bar.length ? bar.attr("data-draggable") !== "false" : true,
		            hide: bar.length ? bar.attr("data-draggable") === "false" : false
		          },
		          on: {
		            init: function () {
		              toggleSwiperInnerVideos(this);
		              toggleSwiperCaptionAnimation(this);
		            },

		            transitionStart: function () {
		              toggleSwiperInnerVideos(this);
		            },
		            transitionEnd: function () {
		            	toggleSwiperCaptionAnimation(this)
		            }
		          }
		        };
		        
		        mainSlider = new Swiper($("#swiper-slider_'.$module->id.'"), swiperOptions);
		    }


		});
	})(jQuery);
';
if($isParallax == 1){

	$js.='
	;(function($){
        $(window).load(function(){
            userAgent = navigator.userAgent.toLowerCase();
            isIE = userAgent.indexOf("msie") != -1 ? parseInt(userAgent.split("msie")[1], 10) : userAgent.indexOf("trident") != -1 ? 11 : userAgent.indexOf("edge") != -1 ? 12 : false;

            isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);


            if (!isIE && !isMobile) {
                $(".slider_parallax-main .slider-parallax").parallaxmat();
            } else {

                imgPath = $(".slider_parallax-main .slider-parallax").find("img").attr("src");

                $(".slider_parallax-main .slider-parallax").css({
                    "background-image": "url(" + imgPath + ")",
                    "background-size": "cover"
                });
            }
        });
    })(jQuery);
';
} 
$document->addScriptdeclaration($js); ?>