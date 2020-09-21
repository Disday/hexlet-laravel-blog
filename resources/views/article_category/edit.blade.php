@extends ('layouts.app')

@section ('header')
<p>Edit category</p>
@endsection

@section ('content')

{{ Form::model($category, ['url' => route('article_categories.update', $category->id),
    'method' => 'PATCH']) }}
@include('article_category.form')
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