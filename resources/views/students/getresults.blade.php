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
                                <div class="tw-w-full tw-flex">
                                    <div class="tw-w-full tw-flex">
                                        <form method="GET" action="/results" autocomplete="off"
                                              class="tw-w-full tw-flex"
                                              style="height: 100%;">
                                            @csrf
                                            <div
                                                class=" tw-bg-grey-panel search-form tw-rounded-full hidden md:tw-block md:tw-w-52 tw-mr-4"
                                                style="border-radius: 9999px;background-color:#f6f6f6;">
                                                <input name="q"
                                                       autocomplete="off"
                                                       placeholder="Enter the code to get the results"
                                                       class=" tw-rounded-full focus:tw-outline-none tw-pt-0 tw-text-sm tw-w-full tw-h-8 tw-pl-2"
                                                       style="background-color:#f6f6f6;width: 366px;"
                                                >
                                            </div>
                                            <div>
                                                <button type="submit"
                                                        class="tw-border tw-border-2 tw-border-gray-400 tw-px-4 tw-py-2 tw-rounded-full hover:tw-border-blue-400 tw-shadow-2xl hover:tw-text-blue-400">
                                                    Search
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                @isset($students)
                                    <table class="tw-stripe tw-hover hoverTable tw-text-base tw-mt-5"
                                           style="width: 100%; padding-top: 1em; padding-bottom: 1em;">
                                        <thead>
                                        <tr>
                                            <th data-priority="1">S.N</th>
                                            <th data-priority="2">Student Name</th>
                                            <th data-priority="2">ID No.</th>
                                            <th data-priority="2">Marks gained</th>
                                            <th data-priority="2">Created Date</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($students as $key=>$student)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td> {{ $student->student_name }}</td>
                                                <td> {{ $student->uniqueid }}</td>
                                                <td> {{ $student->marks }}</td>
                                                <td> {{ $student->created_at->diffForHumans() }}</td>
                                            </tr>
                                        @empty
                                            <h2>Sorry, No result found.</h2>
                                        @endforelse
                                        </tbody>
                                    </table>
                                @endisset
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
