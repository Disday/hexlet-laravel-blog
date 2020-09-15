@extends ('layouts.app')

@section ('header')
<p>Article</p>
@endsection

@section ('content')

<!-- {{ Form::model($article, ['url' => route('article.index')]) }}
{{ Form::text('name', 'name')}}
{{ Form::close()}} -->

<table>
    <th>Title</th>
    <th>Body</th>
    <th>Category</th>
    <tbody>
        <tr>
            <td>{{ $article->name}}</td>
            <td>{{ Str::limit($article->body, 20)}}</td>
            @if (isset($article->category))
            <td>
                <a href="{{ route('article_categories.show', $article->category) }}">{{$article->category->name}}</a>
            </td>
            @endif
        </tr>
    </tbody>
</table>
@endsection