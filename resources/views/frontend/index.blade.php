@extends('frontend.layout')

@section('content')
    <div id="app">
        <frontend-component></frontend-component>
    </div>
    <script src="{{ mix('js/app.js') }}" ></script>
@endsection

