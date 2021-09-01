@extends('Fronted.layouts.master')

@section('title')
    {{trans('main.home')}}
@endsection

@section('content')
    @include('Fronted.layouts.slider')

    <section id="content">
        <div id="content-wrap">
            @include('Fronted.layouts.about')
            @include('Fronted.layouts.spicalAqar')
            @include('Fronted.layouts.whyUs')
            @include('Fronted.layouts.consaltent')
        </div>
    </section>
@endsection