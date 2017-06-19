<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>مدیریت محتوای سون لرن</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-+ENW/yibaokMnme+vBLnHMphUYxHs34h9lpdbSLuAwGkOKFRl4C34WkjazBtb7eT" crossorigin="anonymous">
    <link href="/css/bootstrap-rtl.min.css" rel="stylesheet">
    <link href="/css/frontend.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
@include('layout.user_nav')
<div class="container">
    <div class="row">
       <div class="col-xs-12 col-md-4">
           <div class="panel panel-default">
               <div class="panel-heading">دسته بندی ها</div>
               <div class="panel-body">
                   @if($categories && count($categories) > 0)
                       @foreach($categories as $cat)
                           <a class="cat" href="{{ route('home.cat',$cat->category_id) }}">{{ $cat->name  }}</a>
                           @endforeach
                       @endif
               </div>
           </div>
       </div>
       <div class="col-xs-12 col-md-8">
           @yield('content')
       </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>