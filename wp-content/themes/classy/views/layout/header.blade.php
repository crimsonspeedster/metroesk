@php
	$header = get_field('header');
	$header_bg = $header['background'];
    $subtitle = $header['subtitle'];
    $title = $header['title'];
	$description = $header['description'];
@endphp

<header class="header" style="background-image: url({{$header_bg['sizes']['large']}})">
	<div class="container">
		<h2 class="header__subtitle">{{$subtitle}}</h2>

		<div class="header__title">{!! $title !!}</div>

		@if(function_exists('yoast_breadcrumb'))
			{!!  yoast_breadcrumb( '<div class="header-breadcrumbs">','</div>' ) !!}
		@endif

		@if($description)
			<div class="header__description">{!! $description !!}</div>
		@endif
	</div>
</header>