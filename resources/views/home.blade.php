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
                            <div class="tw-bg-gray-300 hover:tw-rounded-lg md:tw-flex-row md:tw-mb-0 md:tw-mx-0 md:tw-px-0 md:tw-px-6 md:tw-py-0 md:tw-py-2 tw--mx-2 tw-cursor-pointer tw-flex tw-flex-col  tw-px-4 tw-py-2 tw-rounded-lg tw-transition-all tw-mb-2">
                                <a class="tw-font-bold md:tw-text-base tw-tracking-tight tw-text-black hover:tw-text-black tw-m-0 hover:tw-underline" href="/home">Home</a>
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
                                    <g fill="none" fill-rule="evenodd" opacity="1">
                                        <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M1 21V.84h20.16V21z"></path>
                                        <path fill="#000" d="M8.146 14.776l3.847-3.856-3.847-3.856L9.33 5.88l5.04 5.04-5.04 5.04z"></path>
                                    </g>
                                </svg>
                                <a class="tw-font-bold md:tw-text-base tw-tracking-tight tw-text-black hover:tw-text-black tw-m-0 hover:tw-underline" href="/home">Profile</a>
                            </div>
                            <div id="recipients" class="tw-mt-6 tw-pb-64">
                                <div class="tw-bg-white tw-shadow-md">
                                    <div class="md:tw-flex tw-bg-white tw-rounded-lg tw-p-6">
                                        <div class="tw-text-center md:tw-text-left">
                                            {{-- @hasrole('student') --}}
                                            <div class="tw-flex">
                                                <h2 class="tw-mr-2">{{-- {{ ucwords(Auth::user()->student->student_name) }} --}}</h2>
                                                <p class="tw-text-purple-500 tw-text-lg tw-pl-2 tw-pr-2 tw-border tw-rounded-full tw-p-1 ">Student</p>
                                            </div>
                                            <div class = "tw-text-2xl">
                                                <div class="tw-text-gray-600">Roll No : {{-- {{ auth()->user()->name }} --}}</div>
                                                <div class="tw-text-gray-600">Grade : {{-- {{ auth()->user()->student->grade }} --}}</div>
                                                <div class="tw-text-gray-600">Batch: {{-- {{ auth()->user()->student->batch }} --}}</div>

                                            </div>
                                            {{-- @endhasrole
                                            @hasrole('teacher') --}}
                                                <h2 class="">{{-- {{ ucwords(Auth::user()->teacher->teacher_name) }} --}}</h2>
                                                <div class="tw-text-purple-500 tw-text-lg">Role : Teacher</div>
                                                <div class="tw-text-gray-600">Username : {{-- {{ Auth::user()->name }} --}}</div>
                                            {{-- @endhasrole
                                            @hasrole('admin') --}}
                                                <h2 class="">{{-- {{ ucwords(Auth::user()->name) }} --}}</h2>
                                                <div class="tw-text-purple-500 tw-text-lg">Role : Admin</div>
                                            {{-- @endhasrole --}}
                                        </div>
                                    </div>
                                </div>
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
