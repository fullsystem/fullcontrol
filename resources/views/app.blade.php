@extends('skeleton::empty')

@section('body-class', 'hold-transition sidebar-mini')

@section('page-content')
    <div class="wrapper">
        @include('skeleton::app.sidebar')
        @include('skeleton::app.navbar')

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">@yield('page-title')</h1>
                        </div>

                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                @yield('breadcrumbs')
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>

        @include('skeleton::app.footer')
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('skeleton/css/app.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('skeleton/js/app.js') }}"></script>
@endpush