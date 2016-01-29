@extends('layout.master')

@section('titulo','Home')

@section('conteudo')
<table>
	<tr>
		@foreach($dados as $d)
			<div class="bloco"><a href="#"><img src="{{ URL::asset('imgs')}}/{{$d}}"  alt="" width="280" height="320"></a></div>
		@endforeach
	</tr>
</table>
@endsection
