@extends ('layouts.app')

@section ('header')
<p>Create category</p>
@endsection

@section ('content')

{{ Form::model($category, ['url' => route('article_categories.store')]) }}
{{ Form::label('name', 'Category title')}}
{{ Form::text('name')}}
<br>
{{ Form::label('description', 'Description')}}
{{ Form::textarea('description')}}
<br>
{{ Form::label('state', 'State')}}
{{ Form::select('state', ['null' => 'null', 'draft' => 'draft', 'published' => 'published']) }}
{{ Form::submit('Create category')}}
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