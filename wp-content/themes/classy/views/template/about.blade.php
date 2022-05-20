{{-- Template Name: About Page --}}

@extends('layout.default')

@section('content')
    <section class="making">
        <div class="container">
            <div class="grid making-row">
                <div class="making-item">
                    <h3 class="making-item__subtitle">{{$tab_about['subtitle']}}</h3>

                    <h2 class="making-item__title">{{$tab_about['title']}}</h2>

                    <div class="description making-item__descr">{!! $tab_about['description'] !!}</div>
                </div>
                
                <div class="making-img">
                    <img width="445" src="{{$tab_about['image']['sizes']['large']}}" alt="{{$tab_about['image']['alt']}}">
                </div>
            </div>
        </div>
    </section>

    <section class="opportunities">
        <div class="container">
            <h2 class="opportunities__title">{{$tab_opportunities['title']}}</h2>

            <div class="opportunities__descr">{!! $tab_opportunities['description'] !!}</div>

            <div class="grid opportunities-row">@each('partials.about-opportunity', $tab_opportunities_repeater, 'opportunity')</div>
        </div>
    </section>

    <section class="licensing">
        <div class="container" style="background-image: url({{$tab_license['background']['sizes']['large']}})">
            <h2 class="licensing__title">{!! $tab_license['text'] !!}</h2>

            <a href="#" class="button licensing__btn">Связаться с нами</a>
        </div>
    </section>

    @include('partials.certificates')

    <section class="team">
        <div class="container">
            <div class="grid team-row">
                <div class="team-item">
                    <h2 class="team-item__title">{{$tab_team['title']}}</h2>

                    <div class="description team-item__descr">{!! $tab_team['descr'] !!}</div>

                    <div class="team-item__wrapper">@each('partials.team-item', $tab_team_repeater, 'block')</div>
                </div>

                <div class="team-group">
                    <div class="team-group__img">
                        <img width="380" height="600" src="{{$tab_team_group['image']['sizes']['large']}}" alt="{{$tab_team_group['image']['alt']}}">
                    </div>

                    <div class="team-group__descr">
                        <h3>{{$tab_team_group['amount']}}</h3>

                        <p>{{$tab_team_group['text']}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.partners')
@stop