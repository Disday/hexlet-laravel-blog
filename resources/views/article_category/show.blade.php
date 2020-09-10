@extends ('layouts.app')

@section ('header')
<p>Category articles</p>
@endsection

@section ('content')

<table>
    <th>Category</th>
    <th>Description</th>
    <tbody>
        <tr>
            <td>
                {{ $category->name}}
            </td>
            <td>
                {{ $category->description}}
            </td>
        </tr>
    </tbody>
</table>
<br>
@if (!$category->articles->isEmpty())
<ol>
    @foreach ($category->articles as $article)
    <li>
        <a href="{{ route('articles.show', $article->id) }}">{{ $article->name }}</a>
    </li>
    @endforeach
</ol>
@endif

@endsection