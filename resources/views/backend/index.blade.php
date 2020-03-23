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

            <backend-component></backend-component>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2017 <a href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
            </div>
        </footer>
        <!-- partial -->
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

