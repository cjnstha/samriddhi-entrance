@extends('layouts.app')
@section('header')
    @include('layouts.header')
@endsection
@section('content')
    <section id="sec1" class="tw-pt-3" style="padding-bottom: 357px;">
        <!-- container -->
        <div class="container-fluid">
            <!-- profile-edit-wrap -->
            <div class="profile-edit-wrap">
                <div class="row">
                    @include('layouts.sidebar')
                    <div class="col-md-9">
                        <!-- Dashboard-container-->
                        <div class="jumbotron">
                            <h1 class="tw-font-bold " style="font-size: 2.5rem;">Samriddhi Online Entrance Exam</h1>
                            <div class="tw-w-full tw-flex tw-justify-center tw-mt-4">
                                <a
                                    href="/results"
                                    class="tw-btn tw-bg-grey-panel tw-border-grey-panel tw-mb-4 lg:tw-py-4 tw-w-full lg:tw-w-64 tw-h-14 tw-inline-block btn-pulse wait-1s">
                                    View Results
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('footer')
    @include('layouts.footer')
@endsection
