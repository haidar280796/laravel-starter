@extends('layouts.app')

@section('title', config('app.name', 'Laravel') . ' - Dashboard')

@section('content')
<!-- row 1 -->
@include('slicings.cards.admin-card-stat');

<!-- cards row 2 -->
@include('slicings.cards.admin-card-chart')

<!-- cards row 3 -->
@include('slicings.cards.admin-card-overview')
@endsection