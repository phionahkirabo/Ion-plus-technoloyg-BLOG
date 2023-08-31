@extends('auth.dashbord')
@section('content')
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Blogs-list</h2>
<div style="margin-right:10%;float: right;">
    <a href="{{url('addpost')}}">Add</a>
</div>
<table>
  <tr>
    <th>#</th>
    <th>Title</th>
    <th>Content</th>
    <th>published date</th>
    <th>postcreated date</th>
    <th colspan="3">ACTION</th>
  </tr>
@foreach ($datas as $i=> $blog)
      
  
  <tr>
    <td>{{ $i+= 1}}</td>
    <td>{{ $blog->title }}</td>
    <td>{{ $blog->content }}</td>
    <td>{{ $blog->published_at }}</td>
    <td>{{ $blog->postcreated_at }}</td>
    <td> <a href="{{url('edit-post/'.$blog->id)}}">edit</a> <td> <a href="{{url('delete-post/'.$blog->id)}}">delete</a> </td><td> <a href="{{url('show/'.$blog->id)}}">Show</a> </td>
    
    
  </tr>
  
  @endforeach
</table>

@endsection 