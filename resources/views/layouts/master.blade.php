<!doctype html>

<html>

<head>
    <title>Sample Site</title>

    <style>

        header ul{
            margin: 0;
            padding: 0;
            margin-bottom: 15px;
        }

        header li{
            display: inline-block;
            margin-left: 10px;
        }

        header li a{
            padding : 10px;
            display: inline-block;
            text-decoration: none;
            background: #000;
            color: #fff;
        }

        section{
            background: #aaa;
            min-height: 150px;
        }

        footer div{
            display: inline-block;
            min-height: 50px;
            background: #bbb;
            width: 31%;
            margin-top: 25px;
        }
    </style>

</head>


<body>

<header>
    <ul>
        <li><a href="{{ url('home') }}">Home</a></li>
        <li><a href="{{ url('contact') }}">Contact</a></li>
        <li><a href="{{ url('faq') }}">FAQ</a></li>
    </ul>
</header>

<section>

    @yield('content')

</section>

<footer>

    <div>First Widget</div>
    <div>Second Widget</div>
    <div>Third Widget</div>

</footer>


</body>



</html>