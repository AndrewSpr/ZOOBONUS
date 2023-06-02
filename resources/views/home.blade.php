@extends('layout')

@section('content')
@include('inc.home-slider')
@include('inc.blog')
@include('inc.seo')
@foreach(config('mock.seoHome-text') as $seoInfo)
	@include('inc.seo-text')
@endforeach
</div>
@endsection