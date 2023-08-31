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

<h2>Student-list</h2>
<div style="margin-right:10%;float: right;">
    <a href="{{url('add-student')}}">Add</a>
</div>
<table>
  <tr>
    <th>#</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Address</th>
    <th>Action</th>
  </tr>
@foreach ($data as $i=> $blog)
      
  
  <tr>
    <td>{{ $i+= 1}}</td>
    <td>{{ $blog->title }}</td>
    <td>{{ $blog->content }}</td>
    <td>{{ $blog->published_at }}</td>
    <td>{{ $blog->postcreated_at }}</td>
    <td> <a href="{{url('edit-post/'.$blog->id)}}">edit</a> | <td> <a href="{{url('delete-post/'.$blog->id)}}">delete</a> </td>
    
  </tr>
  
  @endforeach
</table>

@endsection 