@extends('auth.dashbord')
@section('content')
<body>
<h2>Add post</h2>
  {{-- @if(session::('success')):
 <div class="alert alert-success" role="alert"> 
    {{ session::get('success') }}
</div>
@endif   --}}
<form action="{{ url('save-post') }}" method="post">
    @csrf
Title: <input type="text" name="title"><br>
Content: <input type="text" name="content"><br>

published date: <input type="date" name="published_at"><br>
post createddate: <input type="date" name="postcreated_at"><br>

<button type="submit" class="btn btn-primary">Submit</button>
<a href="{{url('allblogs')}}" class="btn btn-dange">Back</a>

</form>

@endsection 