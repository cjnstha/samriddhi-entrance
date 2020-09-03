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
                            <h2 class="tw-text-center tw-text-2xl tw-font-bold">Create Questions System will redirect
                                you when set is full</h2>
                            <div id="recipients"
                                 class="tw-p-8 tw-mt-6 tw-rounded tw-shadow tw-bg-white tw-card tw-mt-4 ">
                                <div style="margin: 0 auto;">
                                    <form class="tw-w-full" method="post" action="{{route('question.store')}}">
                                        {{csrf_field()}}
                                        <div class=" tw-flex-wrap-mx-3 tw-mb-6">
                                            <div class="tw-w-full tw-px-4">
                                                <label
                                                    class="tw-block tw-uppercase tw-tracking-wide tw-text-gray-700 tw-text-2xl tw-font-bold tw-mb-2"
                                                    for="grid-password">
                                                    Question
                                                </label>
                                                <textarea
                                                    class=""
                                                    name="questions"
                                                    id="elm1" type="text" placeholder="Enter Question"
                                                ></textarea>
                                            </div>
                                        </div>
                                        <div class="tw-flex tw-flex-wrap-mx-3 tw-mb-2">
                                            <div class="tw-w-full tw-md:tw-w-1/2 tw-px-3 tw-mb-6 tw-md:tw-mb-0">
                                                <label
                                                    class="tw-block tw-uppercase tw-tracking-wide tw-text-gray-700 tw-text-2xl tw-font-bold tw-mb-2"
                                                    for="grid-city">
                                                    Option 1
                                                </label>
                                                 <textarea
                                                    class=""
                                                    name="choice1"
                                                    id="elm2" type="text" placeholder="Enter Question"
                                                ></textarea>
                                            </div>
                                            <div class="tw-w-full tw-md:tw-w-1/3 tw-px-3 tw-mb-6 tw-md:tw-mb-0">
                                                <label
                                                    class="tw-block tw-uppercase tw-tracking-wide tw-text-gray-700 tw-text-2xl tw-font-bold tw-mb-2"
                                                    for="grid-city">
                                                    Option 2
                                                </label>
                                                <textarea
                                                    class=""
                                                    name="choice2"
                                                    id="elm3" type="text" placeholder="Enter Question"
                                                ></textarea>
                                            </div>
                                        </div>
                                        <div class="tw-flex tw-flex-wrap-mx-3 tw-mb-2">
                                            <div class="tw-w-full tw-md:tw-w-1/3 tw-px-3 tw-mb-6 tw-md:tw-mb-0">
                                                <label
                                                    class="tw-block tw-uppercase tw-tracking-wide tw-text-gray-700 tw-text-2xl tw-font-bold tw-mb-2"
                                                    for="grid-zip">
                                                    Option 3
                                                </label>
                                                 <textarea
                                                    class=""
                                                    name="choice3"
                                                    id="elm4" type="text" placeholder="Enter Question"
                                                ></textarea>
                                            </div>
                                            <div class="tw-w-full tw-md:tw-w-1/3 tw-px-3 tw-mb-6 tw-md:tw-mb-0">
                                                <label
                                                    class="tw-block tw-uppercase tw-tracking-wide tw-text-gray-700 tw-text-2xl tw-font-bold tw-mb-2"
                                                    for="grid-zip">
                                                    Option 4
                                                </label>
                                                <textarea
                                                    class=""
                                                    name="choice4"
                                                    id="elm5" type="text" placeholder="Enter Question"
                                                ></textarea>
                                            </div>
                                        </div>
                                        <div class="tw-flex tw-flex-wrap-mx-3 tw-mb-6">
                                            <div class="tw-w-full tw-px-4 ">
                                                <label
                                                    class="tw-block tw-uppercase tw-tracking-wide tw-text-gray-700 tw-text-2xl tw-font-bold tw-mb-2"
                                                    for="grid-password">
                                                    Answer
                                                </label>
                                                <textarea
                                                    class=""
                                                    name="answers"
                                                    id="elm6" type="text" placeholder="Enter Question"
                                                ></textarea>
                                            </div>
                                        </div>
                                        <div class="tw-flex tw-flex-wrap-mx-3 tw-mb-6">
                                            <div class="tw-w-full tw-px-4 ">
                                                <input
                                                    type="hidden"
                                                    name="set_value" value="{{$examinfo->id}}">
                                                <input
                                                    type="hidden"
                                                    name="set_name" value="{{$examinfo->set }}">
                                                <input
                                                    type="hidden"
                                                    name="course_name" value="{{$examinfo->course }}">
                                                <input
                                                    type="hidden"
                                                    name="uniqueid" value="{{ $examinfo->uniqueid }}">
                                            </div>
                                        </div>
                                        <div class="tw-flex tw-items-center tw-justify-center">
                                            <button
                                                class="tw-bg-blue-500 tw-hover:tw-bg-blue-700 tw-text-white tw-font-bold tw-py-2 tw-px-16 tw-rounded tw-focus:tw-outline-none tw-focus:tw-shadow-outline"
                                                type="Submit">
                                                Submit
                                            </button>
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
@endsection
@section('footer')
    @include('layouts.footer')
@endsection
@section('scripts')
    <!--tinymce js-->
    <script src="{{ asset('assets/libs/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form-editor.init.js') }}"></script>
@endsection

