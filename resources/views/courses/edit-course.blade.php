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
                            <div class="tw-bg-gray-300 hover:tw-rounded-lg md:tw-flex-row md:tw-mb-0 md:tw-mx-0 md:tw-px-0 md:tw-px-6 md:tw-py-0 md:tw-py-2 tw--mx-2  tw-cursor-pointer tw-flex tw-flex-col  tw-px-4 tw-py-2 tw-rounded-lg tw-transition-all tw-mb-2">
                                <a class="tw-font-bold md:tw-text-base tw-tracking-tight tw-text-black hover:tw-text-black tw-m-0 hover:tw-underline" href="/home">Home</a>
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
                                    <g fill="none" fill-rule="evenodd" opacity="1">
                                        <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M1 21V.84h20.16V21z"></path>
                                        <path fill="#000" d="M8.146 14.776l3.847-3.856-3.847-3.856L9.33 5.88l5.04 5.04-5.04 5.04z"></path>
                                    </g>
                                </svg>
                                <a class="tw-font-bold md:tw-text-base tw-tracking-tight tw-text-black hover:tw-text-black tw-m-0 hover:tw-underline" href="/teacher/addstudent">Add Students</a>
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
                                    <g fill="none" fill-rule="evenodd" opacity="1">
                                        <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M1 21V.84h20.16V21z"></path>
                                        <path fill="#000" d="M8.146 14.776l3.847-3.856-3.847-3.856L9.33 5.88l5.04 5.04-5.04 5.04z"></path>
                                    </g>
                                </svg>
                                <a class="tw-font-bold md:tw-text-base tw-tracking-tight tw-text-black hover:tw-text-black tw-m-0 hover:tw-underline" href="/teacher/students//edit">Update Student</a>
                            </div>
                            <div id="recipients" class="tw-p-8 tw-mt-6 tw-rounded tw-shadow tw-bg-white card tw-mt-4 hover:tw-border-blue-300">
                                <h1>Update Student</h1>
                                <form action="{{url('/edit-course/'.$course->id)}}" method="post" class="tw-w-full tw-max-w-sm">
                                    @csrf
                                    <div class="tw-relative tw-text-left tw-mb-6">
                                        <label for="" class="tw-m-0 tw-pl-2 tw-text-gray-600">Course Name *</label>
                                        <div class="tw-flex tw-items-center tw-border-b tw-border-b-2 tw-border-teal-500 tw-py-2">
                                            <input type="text" name="course_name" value="{{$course->course_name}}" class="tw-appearance-none tw-bg-transparent tw-border-none tw-w-full tw-text-xl tw-text-gray-700 tw-mr-3 tw-py-1 tw-px-2 tw-leading-tight focus:tw-outline-none">
                                        </div>
                                    </div>
                                    <div class="tw-relative tw-text-left tw-mb-6">
                                        <label for="" class="tw-m-0 tw-pl-2 tw-text-gray-600">Set Name * 
                                        </label>
                                        <div class="tw-flex tw-items-center tw-border-b tw-border-b-2 tw-border-teal-500 tw-py-2">

                                            <input type="checkbox" name="set_name[]" class="form-control" id="set_name" class="tw-flex-row" value="A" 
                                            {{ checkerA(json_decode($course->set_name)) == 'A' ? ' checked' : '' }}>A
                                            <input type="checkbox" name="set_name[]" class="form-control" id="set_name" 
                                            {{ checkerB(json_decode($course->set_name)) == 'B' ? ' checked' : '' }}
                                             class="tw-flex-row" value="B">B
                                            <input type="checkbox" name="set_name[]" class="form-control" id="set_name" 
                                             {{ checkerC(json_decode($course->set_name)) == 'C' ? ' checked' : '' }}
                                             class="tw-flex-row" value="C">C

                                            <input type="checkbox" name="set_name[]" class="form-control" value="D" id="set_name" {{ checkerD(json_decode($course->set_name)) == 'D' ? ' checked' : '' }} class="tw-flex-row">D
                                            <input type="checkbox" name="set_name[]" class="form-control" id="set_name" {{ checkerE(json_decode($course->set_name)) == 'E' ? ' checked' : '' }} class="tw-flex-row" value="E">E
                                        </div>
                                    </div>
                                    <div class="tw-relative tw-text-right">
                                        <button type="submit" class="tw-btn tw-btn-blue">Update</button>
                                    </div>
                                </form>
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



