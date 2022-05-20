{{-- Template Name: Contacts Page --}}

@extends('layout.default')

@section('content')
    <section class="contacts">
        <div class="container">
            <h2 class="contacts__title">{{$tab_contacts['title']}}</h2>

            <div class="contacts-row">
                @each('partials.contacts-item', $tab_contacts_repeater, 'row')
            </div>
        </div>
    </section>
@stop