<div class="component-block">
    <div class="component-block__img">
        <img src="{{$component['image']['sizes']['large']}}" alt="{{$component['image']['alt']}}">
    </div>

    <div class="component-block-header">
        <h3 class="component-block-header__title">{{$component['title']}}</h3>

        @if($component['subtitle'])
            <p class="component-block-header__subtitle">{{$component['subtitle']}}</p>
        @endif
    </div>

    <div class="component-block-footer">
        <p>{{$component['description']}}</p>

        <button class="button component-block-footer__btn">Заказать цепи</button>
    </div>
</div>