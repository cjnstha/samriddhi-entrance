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
                            <div id="recipients" class="tw-p-8 tw-mt-6 tw-rounded tw-shadow tw-bg-white card tw-mt-4">
                                <div class="tw-flex tw-justify-center  tw-mb-6 tw-mt-4">
                                    <h1 class="tw-font-bold">Welcome</h1>
                                </div>
                                <div class="tw-flex tw-justify-center  tw-mb-4 ">
                                    <h2 class="tw-font-bold">To</h2>
                                </div>
                                <div class="tw-flex tw-justify-center tw-mb-4 tw-font-bold tw-text-4xl">
                                    <h3 class="tw-font-bold">Samriddhi Online Entrance Exam</h3>
                                </div>
                                <div class="tw-flex tw-justify-center">
                                    <button
                                        class="tw-bg-blue-500 hover:tw-bg-blue-400 tw-text-white tw-font-bold tw-py-2 tw-px-6 tw-border-b-4 tw-border-blue-700 hover:tw-border-blue-500 tw-rounded tw-mr-2 button"
                                        onclick="toggle_visibility()">
                                        Create Exam
                                    </button>
                                    <a class="tw-bg-blue-500 hover:tw-bg-blue-400 tw-text-white tw-font-bold tw-py-2 tw-px-6 tw-border-b-4 tw-border-blue-700 hover:tw-border-blue-500 tw-rounded tw-mr-2"
                                       href="{{url('/student')}}">
                                        Give Exam
                                    </a>
                                    <a
                                        href="/results"
                                        class="tw-bg-blue-500 hover:tw-bg-blue-400 tw-text-white tw-font-bold tw-py-2 tw-px-6 tw-border-b-4 tw-border-blue-700 hover:tw-border-blue-500 tw-rounded tw-mr-2">
                                        Result
                                    </a>
                                </div>
                            </div>
                            <div class="tw-p-8 tw-mt-6 tw-rounded tw-shadow tw-bg-white card tw-mt-4 exam-crud"
                                 style="display:none;width:100%;">
                                <form method="post" action="{{url('/entrance-exam')}}">
                                    {{ csrf_field() }}
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-lg-offset-3">
                                        <div class="custom-form">
                                            <div class="form-group">
                                                <label class="col-form-label" for="formGroupExampleInput">Teacher
                                                    Name</label>
                                                <input type="text" name="teacher_name" class="form-control "
                                                       id="exam_teacher" placeholder="Enter Teacher Name"
                                                       autocomplete="off" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label" for="formGroupExampleInput2">Course
                                                    Name</label>
                                                <select name="course" class="form-control sumoselect">
                                                    <option disabled="" selected="" value="Select Name">Select Name
                                                    </option>
                                                    <option value="English">English</option>
                                                    <option value="Mathematics">Mathematics</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label" for="formGroupExampleInput2">Set</label>
                                                <select name="set" class="form-control sumoselect">
                                                    <option disabled="" selected="" value="Select Name">Select Name
                                                    </option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label" for="formGroupExampleInput2">Question
                                                    Length</label>
                                                <input type="text" name="question_length" class="form-control"
                                                       id="formGroupExampleInput2" placeholder="E.g 10"
                                                       autocomplete="off" required>
                                            </div>
                                            {{-- <div class="form-group">
                                                <input type="hidden" value="{{substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 5)), 0, 5)}}" name="uniqueid" class="form-control" id="formGroupExampleInput2">
                                            </div> --}}
                                            <button type="Submit" class="btn btn-success btn-block">Submit</button>
                                        </div>
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

