@extends('layouts.app')

@section('content')
    <a href="{{ route('admin.home') }}">Go to Admin</a>
    <a href="{{ route('broker.home') }}">Go to Broker</a>
    <a href="{{ route('salesperson.home') }}">Go to Salesperson</a>
    <a href="{{ route('appraiser.home') }}">Go to Appraiser</a>
    <a href="{{ route('consultant.home') }}">Go to Consultant</a>
@endsection
