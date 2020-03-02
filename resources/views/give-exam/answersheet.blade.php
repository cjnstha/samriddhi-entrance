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
                    <div class="col-md-12">
                        <!-- Dashboard-container-->
                        <div>
                            <div id="recipients"
                                 class="tw-ml-32 tw-mr-32 tw-p-8 tw-mt-6 tw-rounded tw-shadow tw-bg-white tw-card tw-hover:tw-border-blue-300">
                                <div class="tw-flex tw-w-full tw-justify-center tw-mb-4">
                                    <div
                                        class="tw-border-2 tw-p-2 tw-border-purple-500 tw-border-dashed tw-rounded-full tw-shadow-lg">
                                        <p class="tw-font-bold tw-text-base tw-text-black tw-mb-0 tw-pb-0">
                                            Answer Sheet
                                        </p>
                                    </div>
                                </div>
                                <div class="js-change-after-ajax">
                                    @foreach($questions as $key=>$question)
                                        <div class="tw-w-full tw-flex tw-justify-center tw-mb-4 js-content"
                                             id="content">
                                            <form method="post" action="{{url('/answer')}}" class="ansform tw-w-3/5">
                                                {{csrf_field()}}
                                                <div class="tw-mb-6 tw-flex">
                                                    <p class="tw-font-bold tw-text-black tw-text-lg">{{ ++$key }})</p>
                                                    <h3 class="tw-font-bold tw-text-black tw-text-lg tw-ml-2 ">{{$question->questions}}</h3>
                                                </div>
                                                <div class="tw-flex tw-flex-wrap-mx-3 tw-mb-4 tw-text-left">
                                                    <div class="tw-w-full tw-md:tw-w-1/3 tw-px-3 tw-mb-4 tw-md:tw-mb-0">
                                                        <input class="asdsds" name="answers"
                                                               value="{{$question->choice1}}"
                                                               type="radio">
                                                        {{$question->choice1}}
                                                    </div>
                                                    <div class="tw-w-full tw-md:tw-w-1/3 tw-px-3 tw-mb-6 tw-md:tw-mb-0">
                                                        <input class="tw-mr-1" name="answers"
                                                               value="{{$question->choice2}}"
                                                               type="radio">
                                                        {{$question->choice2}}
                                                    </div>
                                                </div>
                                                <div class="tw-flex tw-flex-wrap-mx-3 tw-mb-4 tw-text-left">
                                                    <div class="tw-w-full tw-md:tw-w-1/3 tw-px-3 tw-mb-6 tw-md:tw-mb-0">
                                                        <input class="" name="answers" value="{{$question->choice3}}"
                                                               type="radio">
                                                        {{$question->choice3}}
                                                    </div>
                                                    <div class="tw-w-full tw-md:tw-w-1/3 tw-px-3 tw-mb-6 tw-md:tw-mb-0">
                                                        <input class="tw-mr-1" name="answers"
                                                               value="{{$question->choice4}}"
                                                               type="radio">
                                                        {{$question->choice4}}
                                                    </div>
                                                </div>
                                                <input type="hidden" name="questions" value="{{$question->questions}} ">
                                                <input type="hidden" name="student_name" id="js-student-name"
                                                       value="{{$student_id}}">
                                                <input type="hidden" name="true_answer" value="{{$question->answers}}">
                                                <input type="hidden" name="exam_code" id="js-exam-code"
                                                       value="{{$examCodeForValidate}}">
                                                <div class="">
                                                    <button type="submit" class="tw-btn tw-btn-primary js-increment"
                                                            id="submitbtn">
                                                        Submit
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    @endforeach
                                    <input type="hidden" id="hiddenVal" value="0">
                                    <input type="hidden" id="merge_count"
                                           value="{{ \App\Merge::where('unique_id',$examCodeForValidate)->count()}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script type="text/javascript">
        $('.ansform').on('submit', function (e) {
            var form = $(this);
            var submit = form.find("[type=submit]");
            var submitOriginalText = submit.attr("value");

            e.preventDefault();
            var data = form.serialize();
            var url = form.attr('action');
            var post = form.attr('method');
            $.ajax({
                type: post,
                url: url,
                data: data,
                success: function (data) {
                    submit.attr("value", "Submitted");

                },
                beforeSend: function () {
                    submit.attr("value", "Loading...");
                    submit.prop("disabled", true);
                    submit.addClass("text-gray");
                },
                error: function () {
                    submit.attr("value", submitOriginalText);
                    submit.prop("disabled", false);
                    // show error to end user
                }
            });
        });
        $('.js-increment').on('click', function (e) {
            let total_val = $("#merge_count").val();
            var counter = $("#hiddenVal").val();
            counter++;
            $("#hiddenVal").val(counter);
            if (total_val == counter) {
                let student = $("#js-student-name").val();
                let examcode = $("#js-exam-code").val();
                $(".js-content").fadeOut("slow");
                $(".js-change-after-ajax").append(`
                    <div class="tw-w-full tw-justify-center tw-flex">
                        <div class="loader"></div>
                    </div>
                        <p class="tw-font-bold tw-mt-4">Loading result...</p>
                        <div class="tw-w-full tw-justify-center tw-flex">
                            <button id="js-view-result" class="tw-btn tw-bg-grey-panel tw-border-grey-panel tw-mb-4 lg:tw-py-4 tw-w-full lg:tw-w-64 tw-h-14 tw-inline-block btn-pulse wait-1s">CLICK TO View Result</button>
                        </div>
                `);
                $("#js-view-result").click(function () {
                    $.ajax({
                        url: '/api/review-answer',
                        data: {student_name: student, code: examcode,total_val:total_val},
                        type: 'GET',
                        success: function (data) {
                            $('.js-change-after-ajax').html(data);
                        }
                    });
                });
            }
        });
    </script>
@endsection
