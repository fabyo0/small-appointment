@extends('admin.pages.main')

@section('content')
    {!! $chart->container() !!}

    <script src="{{ $chart->cdn() }}"></script>

    {{ $chart->script() }}
@endsection
