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
        @foreach ($articleCategories as $articleCategory)
        <tr>
            <td>
            <a href="{{ route('article_categories.show', $articleCategory->id) }}">{{ $articleCategory->name}}</a>
            </td>
            <td>{{ Str::limit($articleCategory->description, 20)}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $articleCategories->links()}}
@endsection