{{ Form::label('name', 'Category title')}}
{{ Form::text('name')}}
<br>
{{ Form::label('description', 'Description')}}
{{ Form::textarea('description')}}
<br>
{{ Form::label('state', 'State')}}
{{ Form::select('state', ['draft' => 'draft', 'published' => 'published']) }}