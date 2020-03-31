@extends('frontend.layout')

@section('content')
    <div id="app">
        <frontend-document-show-component></frontend-document-show-component>
    </div>


    <script>
        window.frontend = {
            document: {!! json_encode($document, JSON_HEX_QUOT) !!},
            items: {!! json_encode($items, JSON_HEX_QUOT) !!}
        };

    </script>
    <script src="{{ mix('js/app.js') }}" ></script>
@endsection

