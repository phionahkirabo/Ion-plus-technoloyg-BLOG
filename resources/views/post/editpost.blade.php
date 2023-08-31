@extends('auth.dashbord')
@section('content')
<body>
<h2>Edit student</h2>
  {{-- @if(session::('success')):
 <div class="alert alert-success" role="alert"> 
    {{ session::get('success') }}
</div>
@endif   --}}
<form action="{{ url('update-student',$blog->id) }}" method="post">
    @csrf
    method="put"
    <input type="hidden" name ='id' value="{{ $blog->id }}">
    title: <input type="text" name="title" value="{{$blog->title}}"><br>
    content: <input type="text" name="content" value="{{$blog->content}}"><br>
    published_at: <input type="date" name="published_at" value="{{$blog->published_at}}"><br>
    postcreated_at: <input type="date" name="postcreated_at"value="{{$blog->postcreated_at}}"><br>
<button type="submit" class="btn btn-primary">Submit</button>
<a href="{{url('allblogs')}}" class="btn btn-dange">Back</a>

</form>

@endsection 