﻿<div id="home">
  <div id="main" role="main">
		<?php include Kohana::find_file('views', 'shared/accountinfo') ?>
		<div id="banner"><img src="<?= url::base(); ?>media/img/banner_welcome.png" /></div>
		
		<div id="videoRotating">
			<div id="carousel">
				<div id="slide01" class="slide">
					<img src="<?= url::base(); ?>media/img/video.png"/>
				</div>
						
				<div id="slide02" class="slide">
					<img src="<?= url::base(); ?>media/img/video.png"/>
				</div>
						
				<div id="slide03" class="slide">
					<img src="<?= url::base(); ?>media/img/video.png"/>
				</div>
					
			</div>
				<a href="#" id="ui-carousel-next"><span>next</span></a>
				<a href="#" id="ui-carousel-prev"><span>prev</span></a>
			<div id="pages"></div>
		</div>
		
		<div id="bannerRotating">
			<div id="carouselBanner">
				<div id="slide01" class="slide">
					<h3>XXX ชม.</h3>
					<p>เวลารวมที่อาสา<br>ฝากไว้กับธนาคาร</p>
				</div>
						
				<div id="slide02" class="slide">
					<h3>YYY ชม.</h3>
					<p>เวลารวมของภารกิจ<br>ที่ต้องการอาสา</p>
				</div>
						
				<div id="slide03" class="slide">
					<h3>ZZZ ชม.</h3>
					<p>เวลารวมที่อาสา<br>ได้ปฏิบัติภารกิจไปแล้ว</p>
				</div>
					
			</div>
				<a href="#" id="ui-carousel-next"><span>next</span></a>
				<a href="#" id="ui-carousel-prev"><span>prev</span></a>
			<div id="pages2"></div>
		</div>
		
		<blockquote>
			<h2>ปันเวลาช่วยกัน</h2>
			<p>มาช่วยกันสร้างสรรค์สังคมของเรา ผ่านการฝากเวลา เพื่อปฏิบัติภารกิจจิตอาสา (หากคุณเป็นอาสาสมัคร) หรือสร้างภารกิจจิตอาสา เพื่อเป็นโอกาสในการใช้เวลา (หากคุณเป็นองค์กรอาสา) </p>
			<h3><span style="text-decoration:underline">ฝากเวลา</span>   <span style="font-size:20px;">หรือ</span>   <span style="text-decoration:underline">สร้างภารกิจจิตอาสา</span></h3>
		</blockquote>
		
		<section><span style="color:#a73c0c">ภารกิจจิตอาสาที่น่าสนใจ</span></section>
		<article class="first">
			<img src="<?= url::base(); ?>media/img/sample_01.png"/>
			<div>50 ชม.</div>
			<a class="subscribe">สมัคร</a>
			<p>Neque tum eos illa opinio fefellit.  Nam Zeuxis ilico quaesivit  ab iis,quasnam virgines formosas haberent.  Illi autem statim hominem deduxerunt in.
			<a>[อ่านต่อ...]</a></p>
		</article>
		<article>
			<img src="<?= url::base(); ?>media/img/sample_02.png"/>
			<div>50 ชม.</div>
			<a class="subscribe">สมัคร</a>
			<p>Neque tum eos illa opinio fefellit.  Nam Zeuxis ilico quaesivit  ab iis,quasnam virgines formosas haberent.  Illi autem statim hominem deduxerunt in.
			<a>[อ่านต่อ...]</a></p>
		</article>
		<article>
			<img src="<?= url::base(); ?>media/img/sample_03.png"/>
			<div>50 ชม.</div>
			<a class="subscribe">สมัคร</a>
			<p>Neque tum eos illa opinio fefellit.  Nam Zeuxis ilico quaesivit  ab iis,quasnam virgines formosas haberent.  Illi autem statim hominem deduxerunt in.
			<a>[อ่านต่อ...]</a></p>
		</article>
		<p align="center"><img src="<?= url::base(); ?>media/img/line_sponser.png"/>
		<img style="margin:10px 0 0"src="<?= url::base(); ?>media/img/partner2.png" /></p>
  </div>
</div>

<script type="text/javascript">
	jQuery(function($) {
		function generatePages() {
			var _total, i, _link;
			
			_total = $( "#carousel" ).rcarousel( "getTotalPages" );
			
			for ( i = 0; i < _total; i++ ) {
				_link = $( "<a href='#'></a>" );
				
				$(_link)
					.bind("click", {page: i},
						function( event ) {
							$( "#carousel" ).rcarousel( "goToPage", event.data.page );
							event.preventDefault();
						}
					)
					.addClass( "bullet off" )
					.appendTo( "#pages" );
			}
				
			// mark first page as active
			$( "a:eq(0)", "#pages" )
				.removeClass( "off" )
				.addClass( "on" )
				.css( "background-image", "url(<?= url::base(); ?>media/img/brown_circle.png)" );


		}
		
		function generatePages2() {
			
			var _total2, i, _link;
			
			_total2 = $( "#carouselBanner" ).rcarousel( "getTotalPages" );
			
			for ( i = 0; i < _total2; i++ ) {
				_link = $( "<a href='#'></a>" );
				
				$(_link)
					.bind("click", {page: i},
						function( event ) {
							$( "#carouselBanner" ).rcarousel( "goToPage", event.data.page );
							event.preventDefault();
						}
					)
					.addClass( "bullet off" )
					.appendTo( "#pages2" );
			}
			
			// mark first page as active
			$( "a:eq(0)", "#pages2" )
				.removeClass( "off" )
				.addClass( "on" )
				.css( "background-image", "url(<?= url::base(); ?>media/img/brown_circle.png)" );	

		}

		function pageLoaded( event, data ) {
			$( "a.on", "#pages" )
				.removeClass( "on" )
				.css( "background-image", "url(<?= url::base(); ?>media/img/brown_circle.png)" );

			$( "a", "#pages" )
				.eq( data.page )
				.addClass( "on" )
				.css( "background-image", "url(<?= url::base(); ?>media/img/brown_circle.png)" );
		}
		
		function pageLoaded2( event, data ) {
			$( "a.on", "#pages2" )
				.removeClass( "on" )
				.css( "background-image", "url(<?= url::base(); ?>media/img/brown_circle.png)" );

			$( "a", "#pages2" )
				.eq( data.page )
				.addClass( "on" )
				.css( "background-image", "url(<?= url::base(); ?>media/img/brown_circle.png)" );
				
		}
		
		$("#carousel").rcarousel(
			{
				visible: 1,
				step: 1,
				speed: 700,
				auto: {
					enabled: true
				},
				width: 350,
				height: 250,
				start: generatePages,
				pageLoaded: pageLoaded
			}
		);
		
		$("#carouselBanner").rcarousel(
			{
				visible: 1,
				step: 1,
				speed: 700,
				auto: {
					enabled: true
				},
				width: 450,
				height: 215,
				start: generatePages2,
				pageLoaded: pageLoaded2
			}
		);
		
		$( "#ui-carousel-next" )
			.add( "#ui-carousel-prev" )
			.add( ".bullet" )
			.hover(
				function() {
					$( this ).css( "opacity", 0.7 );
				},
				function() {
					$( this ).css( "opacity", 1.0 );
				}
			);
	});
</script>