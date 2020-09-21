@extends ('layouts.app')

@section ('header')
<p>Edit article</p>
@endsection

@section ('content')
{{ Form::model($article, ['url' => route('articles.update', $article->id), 'method' => 'PATCH']) }}
@include('article.form')
{{ Form::submit('Save')}}
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