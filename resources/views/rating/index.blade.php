@extends ('layouts.app')

@section ('header')
<p>Articles rating</p>
@endsection

@section ('content')

<table>
    <th>ID</th>
    <th>Title</th>
    <th>Body</th>
    <th>Likes</th>
    <tbody>
        @foreach ($articles as $article)
        <tr>
            <td>{{ $article->id}}</td>
            <td>{{ $article->name}}</td>
            <td>{{ $article->body}}</td>
            <td>{{ $article->likes_count}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection