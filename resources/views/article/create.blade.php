@extends ('layouts.app')

@section ('header')
<p>Create article</p>
@endsection

@section ('content')

{{ Form::model($article, ['url' => route('article.store')]) }}
{{ Form::label('name', 'Article title')}}
{{ Form::text('name')}}
<br>
{{ Form::label('body', 'Text')}}
{{ Form::textarea('body')}}
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