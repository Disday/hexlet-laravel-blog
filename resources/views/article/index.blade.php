@extends ('layouts.app')

@section ('header')
<p>Articles index</p>
@endsection

@section ('content')
@if(Session::has('message'))
<div style='margin-bottom:20px; color:green;'>{{ Session::get('message')}}</div>
@endif

<a href='{{ route("articles.create") }}' style='margin-bottom:20px;'>Create new article</a>

{{ Form::open(['url' => route('articles.index'), 'method' => 'GET'])}}
<!-- {{ Form::label('q', 'search')}} -->
{{ Form::text('q' , $query, ['class' => 'form-control'])}}
{{ Form::submit('search')}}
{{ Form::close()}}
<br>
<table>
    <!-- <th>ID</th> -->
    <th>Title</th>
    <th>Body</th>
    <!-- <th>Likes</th> -->
    <tbody>
        @foreach ($articles as $article)
        <tr>
            <!-- <td>{{ $article->id}}</td> -->
            <td><a href="{{ route('articles.show', $article->id) }}">{{ $article->name}}</a></td>
            <td>{{ Str::limit($article->body, 20)}}</td>
            <td><a href="{{ route('articles.edit', $article->id) }}">edit</a></td>
            <td>
                {{ Form::open(['url' => route('articles.destroy', $article->id), 'method' => 'DELETE'])}}
                {{ Form::submit('delete', ['onclick' => "return confirm('Are you sure?')"])}}
                {{ Form::close()}}

            </td>
            <!-- <td>{{ $article->likes_count}}</td> -->
        </tr>
        @endforeach
    </tbody>
</table>
{{ $articles->links()}}
@endsection