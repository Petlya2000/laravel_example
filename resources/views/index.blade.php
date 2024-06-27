<!DOCTYPE html>
<html>
	<head>
	 <meta charset="UTF-8">
	 <meta name="viewport"
		content="width=device-width, initial-scale=1.0">
	<title>Obyavleniya</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="annonymous">
	</head/>
	<body>
	  <div class="container">
	    <h1 class="my-3 text-center">Obyavleniya</h1>
	    @extends('layouts.app')
	    @section('title','Glavnaya')
	    @section('content')
	    @if (count($bbs) > 0)
	    <table class="table table-stripped table-borderless">
		<thead>
		  <tr>
		      <th>Tovar</th>
		      <th>Cena,rub.</th>
		      <th>&nbsp;</th>
		  </tr>
		</thead>
		<tbody>
		@foreach ($bbs as $bb) 
		<tr>
		     <td><h4>{{ $bb->title}}</h4></td>
		     <td>{{$bb->price}}</td>
		     <td>
			<a href="/laravelapp/public/{{ $bb->id}}/">Podrobnee...</a>
		     </td>
		 </tr>
		@endforeach
		</tbody>
	   </table>
	   @endif
	   @endsection('content')
	  </div>
	<script scr="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz></script>
	</body>
</html>
