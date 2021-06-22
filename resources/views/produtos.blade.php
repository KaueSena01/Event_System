@extends('layouts.main')

@section('title', 'Produtos - Loja Virtual')

@section('content')

	
	@if($busca != "")
		<p>{{ $busca }}</p>
	@else
		<p>Digite algum produto</p>
	@endif

@endsection