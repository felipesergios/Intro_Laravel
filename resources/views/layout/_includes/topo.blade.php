
<head>
<title>@yield('titulo')</title>
<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import materialize.css-->
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<header>
<nav>
    <div class="nav-wrapper deep-orange">
      <a href="#!" class="brand-logo">Curso de Laravel</a>
      <a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="/">Home</a></li>
        @if(Auth::guest())
        <li><a href="{{route('site.login')}}">Login</a></li>
        @else
        <li><a href="#">{{Auth::user()->name}}</a></li>
        <li><a href="{{route('admin.cursos')}}">Cursos</a></li>
        <li><a href="{{route('site.login.sair')}}">LogOut</a></li>
        @endif
        
        
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile">
  <li><a href="/">Home</a></li>
  @if(Auth::guest())
        <li><a href="{{route('site.login')}}">Login</a></li>
        @else
        <li><a href="#">{{Auth::user()->name}}</a></li>
        <li><a href="{{route('admin.cursos')}}">Cursos</a></li>
        <li><a href="{{route('site.login.sair')}}">LogOut</a></li>
        @endif
  </ul>
</header>
<!-- Start of Rocket.Chat Livechat Script -->
<script type="text/javascript">
(function(w, d, s, u) {
	w.RocketChat = function(c) { w.RocketChat._.push(c) }; w.RocketChat._ = []; w.RocketChat.url = u;
	var h = d.getElementsByTagName(s)[0], j = d.createElement(s);
	j.async = true; j.src = 'https://chat.rn.gov.br/livechat/rocketchat-livechat.min.js?_=201903270000';
	h.parentNode.insertBefore(j, h);
})(window, document, 'script', 'https://chat.rn.gov.br/livechat');
</script>
<!-- End of Rocket.Chat Livechat Script -->

