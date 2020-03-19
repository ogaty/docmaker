@extends('backend.layout')

@section('content')
    <div id="app">
        <backend-component></backend-component>
    </div>
    <script src="{{ mix('js/app.js') }}" ></script>
@endsection

