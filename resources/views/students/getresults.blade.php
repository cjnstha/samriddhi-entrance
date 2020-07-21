@extends('layouts.app')
@section('header')
    @include('layouts.header')
@endsection
@section('content')
    <section id="sec1" class="tw-pt-3">
        <!-- container -->
        <div class="container-fluid">
            <!-- profile-edit-wrap -->
            <div class="profile-edit-wrap">
                <div class="row">
                    @include('layouts.sidebar')
                    <div class="col-md-9">
                        <!-- Dashboard-container-->
                        <div>
                            <div id="recipients"
                                 class="tw-p-8 tw-mt-6 tw-rounded tw-shadow tw-bg-white card tw-mt-4 hover:tw-border-blue-300">
                                <div class="tw-flex tw-w-full tw-justify-center tw-mb-4">
                                    <div
                                        class="tw-border-2 tw-p-2 tw-border-purple-500 tw-border-dashed tw-rounded-full tw-shadow-lg">
                                        <p class="tw-font-bold tw-text-base tw-text-black tw-mb-0 tw-pb-0">
                                            Results Section
                                        </p>
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="garde_selector"
                                           class="tw-table tw-font-black tw-text-blue-800 tw-text-base">Select
                                        Year :</label>
                                    <select id="garde_selector" class="form-control">
                                        <option selected disabled>Select Year</option>
                                        @foreach($dates as $item=>$value)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="section_selector"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#garde_selector').on('change', function (e) {
                $.ajax({
                    url: 'api/filter-results',
                    data: {year: $(this).val()},
                    type: 'GET',
                    success: function (data) {
                        $('.section_selector').html(data);
                    }
                });
            });

        });
    </script>
@endsection
