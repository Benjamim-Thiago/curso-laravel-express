<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('titulo')</title>
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
  </head>
<body>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">Projeto</a>
	    </div>
	 </div>
	</nav>
	<div class="container">   
		@yield('conteudo')
	</div>	
</body>
</html>