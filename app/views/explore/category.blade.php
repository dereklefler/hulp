@section('content')

<ol class="breadcrumb">
    <li class="active">Category</li>
</ol>
<ul class="nav nav-pills nav-stacked">
    @foreach($categories as $category)
    <li>
        <a href="{{URL::to('explore/category/'.$category->category_id)}}">
            {{$category->name}}
        </a>
    </li>
    @endforeach
</ul>


@stop