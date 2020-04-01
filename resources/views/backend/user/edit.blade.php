@extends('backend.layout')

@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper" id="app">
            <div class="page-header">
                <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span> User Edit </h3>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">
                            <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                        </li>
                    </ul>
                </nav>
            </div>

            <backend-user-edit-component></backend-user-edit-component>

        @include('backend._footer')
        <!-- partial -->
        </div>

        <script>
            window.backend = {
                csrf: '{!! csrf_token() !!}',
                user: {!! json_encode($user, JSON_HEX_QUOT) !!}
            };

            $(function() {
                $('#bannerClose').on('click',function() {
                    $('#sessionMessage').addClass('d-none');
                });
            });

        </script>
        <script src="{{ mix('js/app.js') }}" ></script>
@endsection

