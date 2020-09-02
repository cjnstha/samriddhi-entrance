@extends('layouts.app')
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
                                            Best Of Luck {{ ucwords($student_id) }}
                                        </p>
                                    </div>
                                </div>
                                <div id="clock"
                                     class="lg:tw-fixed lg:tw-w-full tw-z-10 tw-font-bold tw-text-3xl tw-text-black"
                                     style="display: flex;top: 46px;left: 80rem;">
                                </div>
                                <div class="js-change-after-ajax" id="exam">
                                    @foreach($questions as $key=>$question)
                                        <div
                                            class="tw-w-full tw-flex tw-justify-center tw-mb-4 js-content tw-border-2 tw-shadow-md tw-py-4 hover:tw-bg-gray-400"
                                            id="content">
                                            <form method="post" action="{{url('/answer')}}" class="ansform tw-w-3/5">
                                                {{csrf_field()}}
                                                <p class=" tw-text-lg tw-underline">Question {{ ++$key }}</p>
                                                <div class="tw-mb-6 tw-flex">
                                                    <h3 class="tw-font-bold tw-text-black tw-text-lg tw-ml-2 ">{!! $question->questions !!}</h3>
                                                </div>
                                                <div class="tw-flex tw-flex-wrap-mx-3 tw-mb-4 tw-text-left">
                                                    <div
                                                        class="tw-w-full tw-md:tw-w-1/3 tw-px-3 tw-mb-4 tw-md:tw-mb-0 tw-text-base">
                                                        <input class="asdsds" name="answers"
                                                               value="{{ $question->choice1  }}"
                                                               type="radio" required>
                                                        {!! $question->choice1  !!}
                                                    </div>
                                                    <div
                                                        class="tw-w-full tw-md:tw-w-1/3 tw-px-3 tw-mb-6 tw-md:tw-mb-0 tw-text-base">
                                                        <input class="tw-mr-1" name="answers"
                                                               value="{{ $question->choice2 }}"
                                                               type="radio" required>
                                                        {!! $question->choice2 !!}
                                                    </div>
                                                </div>
                                                <div class="tw-flex tw-flex-wrap-mx-3 tw-mb-4 tw-text-left">
                                                    <div
                                                        class="tw-w-full tw-md:tw-w-1/3 tw-px-3 tw-mb-6 tw-md:tw-mb-0 tw-text-base">
                                                        <input class="" name="answers" value="{{ $question->choice3  }}"
                                                               type="radio" required>
                                                        {!! $question->choice3  !!}
                                                    </div>
                                                    <div
                                                        class="tw-w-full tw-md:tw-w-1/3 tw-px-3 tw-mb-6 tw-md:tw-mb-0 tw-text-base">
                                                        <input class="tw-mr-1" name="answers"
                                                               value="{{ $question->choice4 }}"
                                                               type="radio" required>
                                                        {!! $question->choice4  !!}
                                                    </div>
                                                </div>
                                                <input type="hidden" name="questions" value="{{$question->questions}} ">
                                                <input type="hidden" name="student_name" id="js-student-name"
                                                       value="{{$student_id}}">
                                                <input type="hidden" name="true_answer" value="{{$question->answers}}">
                                                <input type="hidden" name="exam_code" id="js-exam-code"
                                                       value="{{$student_unique_id}}">
                                                <div class="">
                                                    <button type="submit"
                                                            class="tw-bg-blue-500 hover:tw-bg-blue-700 tw-text-white tw-font-bold tw-py-2 tw-px-4 tw-border tw-border-blue-700 tw-rounded"
                                                            id="submitbtn">
                                                        Submit
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    @endforeach
                                    <input type="hidden" id="hiddenVal" value="0">
                                    <input type="hidden" id="merge_count"
                                           value="{{ $countedQuestion }}">
                                </div>
                                <div id="js-display">
                                    <div
                                        class="question container tw-overflow-auto lg:tw-mx-auto lg:tw-px-0 tw-w-full lg:tw-max-h-4/5 tw-mt-10">
                                        <div
                                            class=""
                                        >
                                            <h2 class="tw-w-full tw-flex tw-items-center tw-text-grey-dark tw-text-3xl tw-justify-center">Time's up</h2>
                                            <h2 class="tw-w-full tw-flex tw-items-center tw-text-grey-dark tw-text-3xl tw-justify-center tw-mt-2">
                                                We will contact you soon. Thank you for participating in exam.
                                            </h2>
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
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"></script>
    <script>
        $(document).ready(function () {
            var fiveSeconds = new Date().getTime() + 5000;
            $('#clock').countdown(fiveSeconds, {elapse: true})
                .on('update.countdown', function (event) {
                    var $this = $(this);
                    if (event.elapsed) {
                        $("#exam").hide("slow", function () {
                            $("#js-display").show()
                                .delay(3000);
                        });
                    } else {
                        $this.html(event.strftime('<span>%H:%M:%S</span>'));
                    }
                });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            function extracted() {
                let total_val = $("#merge_count").val();
                let counter = $("#hiddenVal").val();
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
                            data: {student_name: student, code: examcode, total_val: total_val},
                            type: 'GET',
                            success: function (data) {
                                $('.js-change-after-ajax').html(data);
                            }
                        });
                    });
                }
            }

            $('.ansform').on('submit', function (e) {
                e.preventDefault();
                var form = $(this);
                var submit = form.find("[type=submit]");
                var submitOriginalText = submit.attr("value");
                var data = form.serialize();
                var url = form.attr('action');
                var post = form.attr('method');
                $.ajax({
                    type: post,
                    url: url,
                    data: data,
                    success: function (data) {
                        submit.attr("value", "Submitted");
                        extracted();
                    },
                    beforeSend: function () {
                        submit.attr("value", "Loading...");
                        submit.prop("disabled", true);
                        submit.addClass("tw-opacity-50 tw-cursor-not-allowed");
                    },
                    error: function () {
                        submit.attr("value", submitOriginalText);
                        submit.prop("disabled", false);
                        // show error to end user
                    }
                });
            });

        });
    </script>

@endsection
