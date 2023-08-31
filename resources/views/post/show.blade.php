
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

<h2>Details of single blog</h2>
<div style="margin-right:10%;float: right;">
    <a href="{{url('addpost')}}">Add</a>
</div>
<table>
  <tr>
    <th>#</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Address</th>
    <!-- <th colspan="3">ACTION</th> -->
  </tr>
@foreach ($show as $i=> $blog)
@if ($blog)
    <tr>
      <td>{{ ++$i }}</td>
      <td>{{ $blog->title }}</td>
      <td>{{ $blog->content }}</td>
      <td>{{ $blog->published_at }}</td>
      <td>{{ $blog->postcreated_at }}</td>
    </tr>
  @else
    <tr>
      <td colspan="5">No blog data available.</td>
    </tr>
  @endif
</table>

@endsection 