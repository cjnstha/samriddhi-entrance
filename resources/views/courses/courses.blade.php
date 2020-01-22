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
                                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M1 21V.84h20.16V21z"></path> <path fill="#000" d="M8.146 14.776l3.847-3.856-3.847-3.856L9.33 5.88l5.04 5.04-5.04 5.04z"></path>
                                </g>
                            </svg>
                            <a class="tw-font-bold md:tw-text-base tw-tracking-tight tw-text-black hover:tw-text-black tw-m-0 hover:tw-underline" href="/teacher/subjects">Manage Courses
                            </a>
                        </div>
                        <div id="recipients" class="tw-p-8 tw-mt-6 tw-rounded tw-shadow tw-bg-white card tw-mt-4 hover:tw-border-blue-300">
                            <div class="tw-flex tw-justify-end tw-mb-6 tw-mt-4">
                               <button type="submit" class="tw-border tw-rounded-full tw-border-blue-600 tw-px-8 tw-py-2 tw-text-white tw-font-bold tw-bg-blue-600 button" onclick="toggle_visibility()">
                                    Add Courses
                                </button>
                             </div>
                                 <div  class="tw-p-8 tw-mt-6 tw-rounded tw-shadow tw-bg-white card tw-mt-4 exam-crud" style="display:none;width:100%;">
                                    <form method="post" action="{{url('/courses-name')}}">
                                        {{ csrf_field() }}
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-lg-offset-3">
                                            <div class="custom-form">
                                              <div class="form-group">
                                                <label class="col-form-label" for="formGroupExampleInput">Teacher Name</label>
                                                <input type="text" name="course_name" class="form-control " id="course_name" placeholder="Enter Course Name" required>
                                              </div>
                                              <div class="tw-form-group tw-flex">
                                                <label class="tw-col-form-label" for="formGroupExampleInput2">Set Name</label>
                                                    <input type="checkbox" name="set_name[]" class="form-control" id="set_name" placeholder="Enter Set Name" class="tw-flex-row" value="A">A
                                                    <input type="checkbox" name="set_name[]" class="form-control" id="set_name" placeholder="Enter Set Name" class="tw-flex-row" value="B">B
                                                    <input type="checkbox" name="set_name[]" class="form-control" id="set_name" placeholder="Enter Set Name" class="tw-flex-row" value="C">C
                                                    <input type="checkbox" name="set_name[]" class="form-control" value="D" id="set_name" placeholder="Enter Set Name" class="tw-flex-row">D
                                                    <input type="checkbox" name="set_name[]" class="form-control" id="set_name" placeholder="Enter Set Name" class="tw-flex-row" value="E">E
                                             </div>
                                             <button type="Submit" class="btn btn-success btn-block">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            <table id="example" class="tw-stripe tw-hover hoverTable tw-text-base" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                                <thead>
                                    <tr>
                                        <th data-priority="1" class="tw-text-center">S.N</th>
                                        <th data-priority="2" class="tw-text-center">Subject Name</th>
                                        <th data-priority="3" class="tw-text-center">Set Name</th>
                                        <th data-priority="4" class="tw-text-center">Action</th>
                                    </tr>
                                </thead>
                                    @foreach($coursesall as $key=>$course)
                                    <tr>
                                        <td class="tw-text-center">{{ ++$key }}</td>
                                        <td class="tw-text-center">{{$course->course_name}}</td>
                                       
                                        <td class="tw-text-center">
                                             @foreach(json_decode($course->set_name) as $setname)
                                                 {{ $setname}} , 

                                            @endforeach
                                                </td>
                                        
                                        <td class="tw-actions tw-text-center tw-flex tw-justify-center">
                                            <a href="{{url('/edit-course/'.$course->id)}}" class="tw-mr-2 tw-border tw-rounded-full tw-border-green-600 tw-px-8 tw-py-2 tw-text-green-600">
                                                Edit
                                            </a>
                                            <form action="{{url('/delete-course/'.$course->id)}}" onsubmit="return confirm('Do you really want to delete the subject?');" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="tw-border tw-rounded-full tw-border-red-600 tw-px-8 tw-py-2 tw-text-red-600 focus:tw-outline-none">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                            </table>
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





