@extends('layouts.base')

@section('body')

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <section class="product">
                <img class="logo pull-left" src="@if($product->logo) {{URL::to('resources/img/'.$product->logo)}} @else {{URL::to('resources/img/default.jpg')}} @endif">
                <div class="info">
                    <div class="name">
                        {{$product->name}}
                        <a href="{{$product->url}}" target="_blank">
                            <i class="glyphicon glyphicon-link"></i>
                        </a>
                    </div>
                    <div class="company">
                        by <a href="#" class="grey">{{$product->company->name}}</a>
                    </div>
                </div>
                <div class="clearfix"></div>
                @if ($product->description)
                    <div class="well well-sm">
                        {{$product->description}}
                    </div>
                @endif
                <div class="alert alert-warning">
                    Is {{$product->name}} missing info? <a href="mailto:info@hulp.co" target="_blank">Contact Us</a> to update it. 
                </div>
            </section>
        </div>
    
        <!-- SIMILAR PRODUCTS --
        <div class="col-md-6">    
        <h4>Similar Products</h4>
        <div class="list-group">
            <div class="list-group-item active">
                <span class="badge">#</span>
                <a href="#/explore/category/#">Name</a> / <a href="#/explore/micros/#">Name</a>
            </div>
            <a href="#/product/#" class="list-group-item">
                product name
            </a>
            <a href="#/product/#/similar" class="list-group-item">
                <strong>View All</strong>
            </a>
        </div>
        </div>
        -->
    </div>
</div>

@stop