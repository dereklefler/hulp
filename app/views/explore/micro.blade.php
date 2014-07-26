@section('content')

<ol class="breadcrumb">
    <li>
        <a href="{{URL::to('explore/category')}}">
            Category
        </a>
    </li>
    <li class="active">{{$micros[0]->category_name}}</li>
    <span class="badge pull-right">{{count($micros)}}</span>
</ol>

<ul class="nav nav-pills nav-stacked">
    @foreach($micros as $micro)
    <li>
        <a href="{{URL::to('explore/category/'.$micro->category_id.'/micro/'.$micro->id)}}">
            {{$micro->name}}
        </a>
    </li>
    @endforeach
</ul>


@stop