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
                                 class="tw-p-8 tw-mt-6 tw-rounded tw-shadow tw-bg-white tw-card tw-mt-4 ">
                                <div style="width: 700px; margin: 0 auto;">
                                    <h2 class="tw-text-2xl">Update Questions</h2>
                                </div>
                                <form class="tw-w-full" method="post"
                                >
                                    @csrf
                                    @method('PATCH')
                                    <div class="tw-flex tw-flex-wrap-mx-3 tw-mb-6">
                                        <div class="tw-w-full tw-px-4">
                                            <label
                                                class="tw-block tw-uppercase tw-tracking-wide tw-text-gray-700 tw-text-xs tw-font-bold tw-mb-2"
                                                for="grid-password">
                                                Question
                                            </label>
                                            <textarea
                                                class="tw-appearance-none tw-block tw-w-full tw-bg-gray-200 tw-text-gray-700 tw-border tw-border-gray-200 tw-rounded tw-py-3 tw-px-4 tw-mb-3 tw-leading-tight tw-focus:tw-outline-none tw-focus:tw-bg-white tw-focus:tw-border-gray-500"
                                                id="grid-password" type="text" placeholder="Enter Question"
                                                name="questions">{{ $question->questions }}</textarea>
                                        </div>
                                    </div>
                                    <div class="tw-flex tw-flex-wrap-mx-3 tw-mb-2">
                                        <div class="tw-w-full tw-md:tw-w-1/2 tw-px-3 tw-mb-6 tw-md:tw-mb-0">
                                            <label
                                                class="tw-block tw-uppercase tw-tracking-wide tw-text-gray-700 tw-text-xs tw-font-bold tw-mb-2"
                                                for="grid-city">
                                                Option 1
                                            </label>
                                            <input
                                                class="tw-appearance-none tw-block tw-w-full tw-bg-gray-200 tw-text-gray-700 tw-border tw-border-gray-200 tw-rounded tw-py-3 tw-px-4 tw-leading-tight tw-focus:tw-outline-none tw-focus:tw-bg-white tw-focus:tw-border-gray-500"
                                                id="grid-city" type="text" placeholder="Option 1" name="choice1"
                                                value="{{ $question->choice1 }}">
                                        </div>
                                        <div class="tw-w-full tw-md:tw-w-1/3 tw-px-3 tw-mb-6 tw-md:tw-mb-0">
                                            <label
                                                class="tw-block tw-uppercase tw-tracking-wide tw-text-gray-700 tw-text-xs tw-font-bold tw-mb-2"
                                                for="grid-city">
                                                Option 2
                                            </label>
                                            <input
                                                class="tw-appearance-none tw-block tw-w-full tw-bg-gray-200 tw-text-gray-700 tw-border tw-border-gray-200 tw-rounded tw-py-3 tw-px-4  tw-focus:tw-outline-none tw-focus:tw-bg-white tw-focus:tw-border-gray-500"
                                                id="grid-city" type="text" placeholder="Option 2" name="choice2"
                                                value="{{ $question->choice2 }}">
                                        </div>
                                    </div>
                                    <div class="tw-flex tw-flex-wrap-mx-3 tw-mb-2">
                                        <div class="tw-w-full tw-md:tw-w-1/3 tw-px-3 tw-mb-6 tw-md:tw-mb-0">
                                            <label
                                                class="tw-block tw-uppercase tw-tracking-wide tw-text-gray-700 tw-text-xs tw-font-bold tw-mb-2"
                                                for="grid-zip">
                                                Option 3
                                            </label>
                                            <input
                                                class="tw-appearance-none tw-block tw-w-full tw-bg-gray-200 tw-text-gray-700 tw-border tw-border-gray-200 tw-rounded tw-py-3 tw-px-4 tw-leading-tight tw-focus:tw-outline-none tw-focus:tw-bg-white tw-focus:tw-border-gray-500"
                                                id="grid-zip" type="text" placeholder="Option 3" name="choice3"
                                                value="{{ $question->choice3 }}">
                                        </div>
                                        <div class="tw-w-full tw-md:tw-w-1/3 tw-px-3 tw-mb-6 tw-md:tw-mb-0">
                                            <label
                                                class="tw-block tw-uppercase tw-tracking-wide tw-text-gray-700 tw-text-xs tw-font-bold tw-mb-2"
                                                for="grid-zip">
                                                Option 4
                                            </label>
                                            <input
                                                class="tw-appearance-none tw-block tw-w-full tw-bg-gray-200 tw-text-gray-700 tw-border tw-border-gray-200 tw-rounded tw-py-3 tw-px-4 tw-leading-tight tw-focus:tw-outline-none tw-focus:tw-bg-white tw-focus:tw-border-gray-500"
                                                id="grid-zip" type="text" placeholder="Option 4" name="choice4"
                                                value="{{ $question->choice4 }}">
                                        </div>
                                    </div>
                                    <div class="tw-flex tw-flex-wrap-mx-3 tw-mb-6">
                                        <div class="tw-w-full tw-px-4 ">
                                            <label
                                                class="tw-block tw-uppercase tw-tracking-wide tw-text-gray-700 tw-text-xs tw-font-bold tw-mb-2"
                                                for="grid-password">
                                                Answer
                                            </label>
                                            <input
                                                class=" tw-appearance-none tw-block tw-w-full tw-bg-gray-200 tw-text-gray-700 tw-border tw-border-gray-200 tw-rounded tw-py-3 tw-px-4 tw-mb-3 tw-leading-tight tw-focus:tw-outline-none tw-focus:tw-bg-white tw-focus:tw-border-gray-500"
                                                id="grid-password" type="text" placeholder="Enter Question"
                                                name="answers" value="{{ $question->answers }}">
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
    </section>
@endsection
@section('footer')
    @include('layouts.footer')
@endsection

