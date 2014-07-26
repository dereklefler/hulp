@extends('layouts.base')

@section('body')
<div class="row">
    <div class="col-md-3">
        <ul class="nav nav-pills nav-stacked" style="margin-bottom: 20px;">
            <li class="@if(Request::is('explore/category/*') || Request::is('explore/category')) active @endif">
                <a href="{{URL::to('explore/category')}}">
                    <span class="badge pull-right">{{$count['category']}}</span>
                    Category
                </a>
            </li>
            <!-- don't need niche right now
            <li class="--@if(Request::is('explore/niche/*')) active @endif--">
                <a href="#">
                    <span class="badge pull-right">{{--$count['niche']--}}</span>
                    Niche
                </a>
            </li>-->
            <li class="@if(Request::is('explore/product/*') || Request::is('explore/product')) active @endif">
                <a href="{{URL::to('explore/product')}}">
                    <span class="badge pull-right">{{$count['product']}}</span>
                    All Products
                </a>
            </li>
        </ul>

    </div>
    <div class="col-md-9">
        @yield('content')
    </div>
</div>

@stop
