@extends('auth.dashbord')
@section('content')
<body>
<h2>Edit student</h2>
  {{-- @if(session::('success')):
 <div class="alert alert-success" role="alert"> 
    {{ session::get('success') }}
</div>
@endif   --}}
<form action="{{ url('update-post',$data->id) }}" method="post">
    @csrf
   
    <input type="hidden" name ='id' value="{{ $data->id }}">
    title: <input type="text" name="title" value="{{$data->title}}"><br>
    content: <input type="text" name="content" value="{{$data->content}}"><br>
    published_at: <input type="date" name="published_at" value="{{$data->published_at}}"><br>
    postcreated_at: <input type="date" name="postcreated_at"value="{{$data->postcreated_at}}"><br>
<button type="submit" class="btn btn-primary">Submit</button>
<a href="{{url('allblogs')}}" class="btn btn-dange">Back</a>

</form>

@endsection 