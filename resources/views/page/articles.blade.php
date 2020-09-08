@extends ('layouts.app')

@section ('header', 'Статьи')

@section ('content')
<!-- <p>Тут будут статьи</p> -->
<table>
    <th>ID</th>
    <th>Title</th>
    <th>Body</th>
    <tbody>
        @foreach ($articles as $article)
        <tr>
            <td>{{ $article->id}}</td>
            <td>{{ $article->name}}</td>
            <td>{{ $article->body}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection