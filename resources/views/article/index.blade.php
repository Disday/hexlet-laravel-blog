@extends ('layouts.app')

@section ('header')
<p>Articles index</p>
@endsection

@section ('content')

<table>
    <!-- <th>ID</th> -->
    <th>Title</th>
    <th>Body</th>
    <!-- <th>Likes</th> -->
    <tbody>
        @foreach ($articles as $article)
        <tr>
            <!-- <td>{{ $article->id}}</td> -->
            <td>{{ $article->name}}</td>
            <td>{{ Str::limit($article->body, 20)}}</td>
            <!-- <td>{{ $article->likes_count}}</td> -->
        </tr>
        @endforeach
    </tbody>
</table>
{{ $articles->links()}}
@endsection