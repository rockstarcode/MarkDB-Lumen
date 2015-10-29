<!DOCTYPE html>
<html class="uk-height-1-1">
<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>My Blog Title {{isset($title) ?  ' - ' . $title: ''}}</title>

    <meta name="HandheldFriendly" content="True" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/uikit/2.22.0/css/uikit.min.css">
</head>
<body>
<div class="uk-container uk-container-center">


    <nav class="uk-navbar uk-margin-large-bottom">

        <ul class="uk-navbar-nav uk-hidden-small">
            <li>
                <a href="{{route('welcome')}}"><i class="uk-icon uk-icon-home"></i> MyBlog</a>
            </li>
            @foreach($pages as $page)
                <li>
                    <a href="{{route('page',['slug'=>$page->slug])}}">{{ $page->title }}</a>
                </li>
            @endforeach
        </ul>
        <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
        <div class="uk-navbar-brand uk-navbar-center uk-visible-small">MyBlog</div>
    </nav>

    @yield('body')
</div>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/uikit/2.22.0/js/uikit.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/vue/0.12.15/vue.min.js"></script>
@yield('scripts')
</body>
</html>
