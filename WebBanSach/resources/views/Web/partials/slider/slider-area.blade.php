<!-- slider-area-start -->
<div class="slider-area">
	<div class="slider-active owl-carousel">
		@foreach($Slider as $slider)
			<a href="#"><div class="single-slider pt-125 pb-130 bg-img" style="background-image:url({{ asset('images/slider/'.$slider->hinh_anh_slider) }}); width: 100%; height: 680px;"></div></a>
		@endforeach
	</div>
</div>
<!-- slider-area-end -->
