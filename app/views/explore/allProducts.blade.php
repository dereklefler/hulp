@section('content')

<div class="list-head">
    All Products
    <a href="#" class="icon pull-right">
        <i class="glyphicon glyphicon-th-large"></i>
    </a>
    <a href="#" class="pull-right icon active">
        <i class="glyphicon glyphicon-th-list"></i>
    </a>
</div>
<div class="clearfix"></div>
@foreach($products as $product)
<div class="product-list">
    <a href="{{URL::to('explore/product/'.$product->id)}}"><img src="@if($product->logo) {{URL::to('resources/img/'.$product->logo)}} @else {{URL::to('resources/img/default.jpg')}} @endif"></a>
    <div class="name">
        <a href="{{URL::to('explore/product/'.$product->id)}}">{{$product->name}}</a> <small>by <a href="#" class="grey">{{$product->company->name}}</a></small>
    </div>
    <div class="clearfix"></div>
</div>
@endforeach

@stop