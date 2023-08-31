@extends('auth.dashbord')
@section('content')
<div style="text-align: center; margin: 20px; padding: 10px; background-color: #f0f0f0;">
    <h1>This is Centered Text</h1>
    <p>This text is centered within the div and has margin and padding.</p>

     
        <h1>Title:{{ $show->title }}</h1>
        <p>Content:{{$show->content}}</p>
        <p>published date:{{$show->published_at }}</p>
        <p>postcreated date:{{$show->published_at }}</p>
       
        <a href="{{url('allblogs')}}" class="btn btn-dange"><button>Back</button></a>
</div>
@endsection 