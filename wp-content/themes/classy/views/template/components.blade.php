{{-- Template Name: Components Page --}}

@extends('layout.default')

@section('content')
    <section class="components">
        <div class="container grid components__row">
            @each('partials.component', $components['repeater'], 'component')
        </div>
    </section>

    <section class="steps">
        <div class="container grid steps__row">
            @for($i=0; $i<count($steps); $i++)
                <div class="steps-block">
                    <p class="steps-block__number">{{$i+1 <= 9 ? '0'.$i+1 : $i+1}}</p>

                    <h2 class="steps-block__title">{{$steps[$i]['title']}}</h2>

                    <p class="steps-block__descr">{{$steps[$i]['description']}}</p>
                </div>
            @endfor
        </div>
    </section>

    <section class="causes">
        <div class="container grid causes__row">
            <div class="causes-part">
                <h2 class="causes-part__title">{{$causes['title']}}</h2>

                <div class="swiper causes-part__slider">
                    <div class="swiper-wrapper">
                        @foreach($causes_slider as $slide)
                            <div class="swiper-slide causes-part__slide">
                                <img width="445" src="{{$slide['image']['sizes']['large']}}" alt="{{$slide['image']['alt']}}">
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="causes-part__btns">
                    <svg class="causes-part__btn prev" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.0001 13.3325H6.75006L12.0001 18.5825L11.3361 19.3325L4.83606 12.8325L11.3361 6.33252L12.0001 7.08252L6.75006 12.3325H19.0001V13.3325Z" fill="#030F27"/>
                    </svg>

                    <svg class="causes-part__btn next" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 12.3325H16.25L11 7.08252L11.664 6.33252L18.164 12.8325L11.664 19.3325L11 18.5825L16.25 13.3325H4V12.3325Z" fill="#030F27"/>
                    </svg>
                </div>
            </div>

            <div class="causes-description">
                @for($i=0; $i<count($causes_slider); $i++)
                    <div class="causes-description__text {{$i === 0 ? 'active' : ''}}">{!! $causes_slider[$i]['description'] !!}</div>
                @endfor
            </div>
        </div>
    </section>
@stop