@extends('backend.layout')

@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper" id="app">
            <div class="page-header">
                <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span> Documents </h3>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">
                            <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                        </li>
                    </ul>
                </nav>
            </div>

            @if(Session::has('message'))
            <div class="row" id="sessionMessage">
                <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                  <p>
                       {{ Session::get('message') }}
                      {{ Session::forget('message') }}
                  </p>
                  <i class="mdi mdi-close" id="bannerClose"></i>
                </span>
                </div>
            </div>
            @endif

            <backend-document-index-component></backend-document-index-component>
        </div>
        <!-- content-wrapper ends -->
        @include('backend._footer')
    </div>

    <script>
        window.backend = {
            documents: {!! json_encode($documents, JSON_HEX_QUOT) !!}
        };

        $(function() {
            $('#bannerClose').on('click',function() {
                $('#sessionMessage').addClass('d-none');
            });
        });

    </script>
    <script src="{{ mix('js/app.js') }}" ></script>
@endsection

