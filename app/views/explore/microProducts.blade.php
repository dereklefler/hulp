@section('content')

<ol class="breadcrumb">
    <li>
        <a href="{{URL::to('explore/category')}}">Category</a>
    </li>
    <li>
        <a href="{{URL::to('explore/category/'.$products[0]->category_id)}}">{{$products[0]->category_name}}</a>
    </li>
    <li class="active">{{$products[0]->micro_name}}</li>
    <span class="badge pull-right">{{count($products)}}</span>
</ol>
<div class="clearfix"></div>

@foreach($products as $product)
<div class="product-list">
    <a href="{{URL::to('explore/product/'.$product->id)}}">
        <img src="@if($product->logo) {{URL::to('resources/img/'.$product->logo)}} @else {{URL::to('resources/img/default.jpg')}} @endif">
    </a>
    <div class="name">
        <a href="{{URL::to('explore/product/'.$product->id)}}">{{$product->product_name}}</a> <small>by <a href="#" class="grey">{{$product->company_name}}</a></small>
    </div>
    <div class="clearfix"></div>
</div>
@endforeach

@stop