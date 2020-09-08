@extends ('layouts.app')
@section('header', 'О блоге')

@section('content')
    <!-- <p>Эксперименты с Ларавелем на Хекслете</p> -->
    @foreach ($team as $employee)
    <p>{{ $employee['name'] }} - {{ $employee['position'] }}</p>
    @endforeach
@endsection
