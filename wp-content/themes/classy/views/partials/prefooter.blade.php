@php
    $logo = get_field('logo', 'option');
    $email = get_field('email', 'option');
@endphp

<section class="prefooter">
    <div class="grid container">
        <div class="prefooter-item">
            <a href="{{get_home_url()}}" class="prefooter-item__logo">
                <img width="172" src="{{$logo['sizes']['large']}}" alt="{{$logo['alt']}}">
            </a>

            <p class="prefooter-item__descr">{{get_field('footer_description', 'option')}}</p>

            {!! wp_nav_menu(['theme-location' => 'footer-menu', 'menu_class' => 'prefooter-item__menu']) !!}
        </div>

        <div class="prefooter-item">
            <a href="#" class="button prefooter-item__btn">Связаться с нами</a>
        </div>

        <div class="prefooter-item">
            <h2 class="prefooter-item__title">Контакты</h2>

            <ul class="prefooter-item__list">
                <li class="phone">
                    <a href="tel:+">{{get_field('phone', 'option')}}</a>
                </li>

                <li class="mail">
                    <a href="mailto:{{$email}}">{{$email}}</a>
                </li>

                <li class="address">
                    {{get_field('address', 'option')}}
                </li>
            </ul>
        </div>
    </div>
</section>