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
                            <a  class="tw-font-bold md:tw-text-base tw-tracking-tight tw-text-black hover:tw-text-black tw-m-0 hover:tw-underline" href="{{ url()->current() }}">Reassign Controller</a>
                        </div>
                        <div id="recipients" class="tw-p-8 tw-mt-6 tw-rounded tw-shadow tw-bg-white card tw-mt-4 hover:tw-border-blue-300">
                            <div class="tw-flex tw-w-full tw-justify-center tw-mb-4">
                                <div class="tw-border-2 tw-p-2 tw-border-purple-500 tw-border-dashed tw-rounded-full tw-shadow-lg">
                                    <p class="tw-font-bold tw-text-base tw-text-black tw-mb-0 tw-pb-0">
                                        Question Merger Lists
                                    </p>
                                </div>
                            </div>
                            <div class="tw-w-full tw-flex">
                                <div class="form-row tw-w-1/2">
                                    <div class="form-group col-md-6">
                                        <label for="garde_selector" class="tw-table tw-font-black tw-text-blue-800 tw-text-base">Select Course :</label>
                                        <select id="garde_selector" class="form-control js-course">
                                            <option>Select Course</option>
                                            @foreach(\App\ExamInfo::orderBy('course')->get() as $course)
                                                <option value="{{ $course->course }}">{{ $course->course }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="result" class="tw-table tw-font-black tw-text-blue-800 tw-text-base">Select Set : </label>
                                        <select id="result" class="form-control section_selector">
                                        </select>
                                    </div>
                                    <div class="filtered_list">
                                        
                                    </div>
                                </div>

                                <div class="tw-w-1/2">
                                    <div class="form-group col-md-6">
                                        <label for="js-garde_selector" class="tw-table tw-font-black tw-text-blue-800 tw-text-base">Select Course :</label>
                                        <select id="js-garde_selector" class="form-control js-coursesecod">
                                            <option>Select Course</option>
                                            @foreach(\App\ExamInfo::orderBy('course')->get() as $course)
                                            <option value="{{ $course->course }}">{{ $course->course }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="second-set" class="tw-table tw-font-black tw-text-blue-800 tw-text-base">Select Set : </label>
                                        <select id="second-set" class="form-control course_selector">
                                        </select>
                                    </div>
                                    <div class="final_list">
                                        
                                    </div>
                                
                                </div>  

                            </div>
                            <div class="">
                                <form action="" method="post">
                                    @csrf
                                    <input type="text" type="hidden" id="js-first">    
                                    <input type="text" type="hidden" id="js-second">  
                                    <div class="tw-flex tw-flex-row">
                                     <div class="tw-w-full tw-px-3 tw-mb-6 tw-md:tw-mb-0 tw-text-left">
                                      <label class="tw-block tw-uppercase tw-tracking-wide tw-text-gray-700 tw-text-xs tw-font-bold tw-mb-2" for="grid-city">
                                        Question Collection Name
                                      </label>
                                      <input class="tw-appearance-none tw-block tw-w-2/5 tw-bg-gray-200 tw-text-gray-700 tw-border tw-border-gray-200 tw-rounded tw-py-3 tw-px-4 tw-leading-tight tw-focus:tw-outline-none tw-focus:tw-bg-white tw-focus:tw-border-gray-500" id="js-collection" type="text" placeholder="Collection Name" name="collection">
                                    </div>   
                                    <div class="tw-w-1/2 tw-px-3 tw-mb-6 tw-md:tw-mb-0 tw-mt-6">
                                    <button type="submit" class=" tw-rounded-full tw-py-4 tw-px-4 tw-bg-red-400" id="js-merge">Merge Question</button>
                                </div>
                                </div>
                                </form>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    {{-- Modal --}}
    <div id="myModal" class="modal">
      <div class="modal-content">
        <span class="close" id="closemodal">&times;</span>
        <p class="tw-text-red-500 tw-text-xl">Please copy the text below before closing me.</p>
        <h1 id="string" class="tw-text-5xl tw-text-green-500"></h1>
      </div>
    </div>

@endsection
@section('scripts')
<script>
//Merge Question Script//
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.js-course').on('change', function (e) {
        // alert( $(this).val());
        $.ajax({
            url: './api/course',
            data: {set_name: $(this).val() },
            type: 'GET',
            success: function(data){
                $('.section_selector').html(data);
            }
        });
    });
    $('#result').on('change', function(){
        let subject_name = $("#garde_selector").val();
        let set_name = $("#result").val();
        $.ajax({
            url: './api/getresult',
            data: {subject_name:subject_name,set_name:set_name},
            type: 'GET',
            success: function(data){
                $('.filtered_list').html(data);
            }
        });
    });
        $('.js-coursesecod').on('change', function (e) {
        $.ajax({
            url: './api/course',
            data: {set_name: $(this).val() },
            type: 'GET',
            success: function(data){
                $('.course_selector').html(data);
            }
        });
    });
        $('#second-set').on('change', function(){
        let subject_name = $("#js-garde_selector").val();
        let set_name = $("#second-set").val();
        $.ajax({

            url: './api/getresult',
            url: './api/getsecondresult',
            data: {subject_name:subject_name,set_name:set_name},
            type: 'GET',
            success: function(data){
                $('.final_list').html(data);
            }
        });
    });

        // Merge Question Logic js-firstquestion js-secondquestion
    $('#js-merge').on('click', function(event){
        event.preventDefault();
        let firstquestion = $("#js-firstquestion").attr('js-firstquestion');
        let secondquestion = $("#js-secondquestion").attr('js-secondquestion');
        let collection = $("#js-collection").val();
        
        $.ajax({
            url: './api/mergequestions',
            data: {firstquestion:firstquestion,secondquestion:secondquestion,collection:collection},
            type: 'GET',
            success: function(data){
                 modal.style.display = "block";
                 $("#string").text(data);
            }
        });
    });
});
</script>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  location.reload();
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
@endsection
