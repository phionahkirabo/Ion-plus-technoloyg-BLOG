




<h2>helloo</h2>
<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Logout form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
    <!-- main -->
    <div class="main-w3layouts wrapper">
        <h1>Login Form</h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
            @if($errors->any())
           <ul> @foreach($errors->all() as $error)
           <li>{{$error}}</li>
          @endforeach </ul> @endif
                <form action="{{route('logout')}}" method="post">
                   @csrf
                   <button type="submit">Logout</button>
                </form>
               
            </div>
        </div>
        <!-- copyright -->
        <div class="colorlibcopy-agile">
            <p> <a href="https://colorlib.com/" target="_blank"></a></p>
        </div>
        <!-- //copyright -->
        <ul class="colorlib-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <!-- //main -->
    
</body>
</html>