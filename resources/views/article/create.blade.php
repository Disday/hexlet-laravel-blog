@extends ('layouts.app')

@section ('header')
<p>Create article</p>
@endsection

@section ('content')

{{ Form::model($article, ['url' => route('articles.store')]) }}
@include('article.form')
{{ Form::submit('Create article')}}
{{ Form::close()}}

@if ($errors)
    @foreach ($errors->all() as $error)
        <span style='color:red;'>{{ $error}}</span>
        <br>
    @endforeach
@endif

<!-- @if (Session::has('message')) -->
    {{ Session::all()}}
    <!-- 123 -->
<!-- @endif -->

@endsection