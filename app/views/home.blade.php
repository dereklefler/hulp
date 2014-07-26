@extends('layouts.base')

@section('body')

<div class="row">
    <div class="col-sm-6">
        <div class="home-hero">
            Property Management Software Research <span>Made Relevant</span>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="home-description">
            <p>
                Hulp is an automated consulting tool for businesses researching different property management software solutions.
            </p>
            <a class="btn btn-lg btn-primary" href="{{URL::to('explore/category')}}">Get Started</a>
        </div>
    </div>
</div>

@stop