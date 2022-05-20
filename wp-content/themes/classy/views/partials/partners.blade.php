<section class="partners" style="background-image: url({{$tab_partners['background']['sizes']['large']}})">
    <div class="container">
        <h3 class="partners__subtitle">{{$tab_partners['subtitle']}}</h3>

        <h2 class="partners__title">{{$tab_partners['title']}}</h2>

        <div class="partners__descr">{!! $tab_partners['description'] !!}</div>

        <div class="partners-slider__block">
            <div class="partners-slider__btns">
                <svg class="partners-slider__btn prev" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.9999 13H6.74994L11.9999 18.25L11.3359 19L4.83594 12.5L11.3359 6L11.9999 6.75L6.74994 12H18.9999V13Z" fill="white"/>
                </svg>

                <svg class="partners-slider__btn next" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 12H16.25L11 6.75L11.664 6L18.164 12.5L11.664 19L11 18.25L16.25 13H4V12Z" fill="white"/>
                </svg>
            </div>

            <div class="swiper partners-slider">
                <div class="swiper-wrapper">
                    @each('partials.partner', $tab_partners_slider, 'partner')
                </div>
            </div>
        </div>
    </div>
</section>