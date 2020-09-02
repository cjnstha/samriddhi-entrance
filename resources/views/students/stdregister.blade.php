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
                                 class="tw-p-8 tw-mt-6 tw-rounded tw-shadow tw-bg-white card tw-mt-4 hover:tw-border-blue-300">
                                <div class="tw-flex tw-w-full tw-justify-center tw-mb-4">
                                    <div
                                        class="tw-border-2 tw-p-2 tw-border-purple-500 tw-border-dashed tw-rounded-full tw-shadow-lg">
                                        <p class="tw-font-bold tw-text-base tw-text-black tw-mb-0 tw-pb-0">
                                            Registration Form
                                        </p>
                                    </div>
                                </div>
                                <p class="tw-text-2xl tw-font-bold">Please carefully fill up the form.</p>
                                <div class=" tw-flex">
                                    <div class="tw-w-1/2 tw-px-8">
                                        <form
                                            class="tw-bg-white tw-shadow-md tw-border-dashed tw-border-2 tw-rounded tw-px-8 tw-pt-6 tw-pb-8 tw-mb-6 tw-mt-4"
                                            method="post" action="{{url('/student/answersheet')}}">
                                            {{csrf_field()}}
                                            <div class="tw-mb-4">
                                                <label class="tw-block tw-text-gray-700 tw-text-sm tw-font-bold tw-mb-2"
                                                       for="username">
                                                    Student Full Name
                                                </label>
                                                <input
                                                    class="tw-shadow tw-appearance-none tw-border tw-rounded  tw-py-2 tw-px-3 tw-text-gray-700 tw-leading-tight tw-focus:tw-outline-none tw-focus:tw-shadow-outline"
                                                    id="username" type="text" placeholder="Student Name"
                                                    name="student_name" autocomplete="off">
                                                @error('student_name')
                                                <p class="tw-text-red-500 tw-pb-0">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="tw-mb-4">
                                                <label class="tw-block tw-text-gray-700 tw-text-sm tw-font-bold tw-mb-2"
                                                       for="email">
                                                    Student Email
                                                </label>
                                                <input
                                                    class="tw-shadow tw-appearance-none tw-border tw-rounded  tw-py-2 tw-px-3 tw-text-gray-700 tw-leading-tight tw-focus:tw-outline-none tw-focus:tw-shadow-outline"
                                                    id="email" type="email" placeholder="Student Email" name="email"
                                                    autocomplete="off">
                                                @error('email')
                                                <p class="tw-text-red-500 tw-pb-0">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="tw-mb-4">
                                                <label class="tw-block tw-text-gray-700 tw-text-sm tw-font-bold tw-mb-2"
                                                       for="see_no">
                                                    Student SEE No.
                                                </label>
                                                <input
                                                    class="tw-shadow tw-appearance-none tw-border tw-rounded  tw-py-2 tw-px-3 tw-text-gray-700 tw-leading-tight tw-focus:tw-outline-none tw-focus:tw-shadow-outline"
                                                    id="see_no" type="text" placeholder="Student See Number"
                                                    name="see_no" autocomplete="off">
                                                @error('see_no')
                                                <p class="tw-text-red-500 tw-pb-0">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="tw-mb-4">
                                                <label class="tw-block tw-text-gray-700 tw-text-sm tw-font-bold tw-mb-2"
                                                       for="school_name">
                                                    Previous School Name
                                                </label>
                                                <input
                                                    class="tw-shadow tw-appearance-none tw-border tw-rounded  tw-py-2 tw-px-3 tw-text-gray-700 tw-leading-tight tw-focus:tw-outline-none tw-focus:tw-shadow-outline"
                                                    id="school_name" type="text" placeholder="Previous School Name"
                                                    name="school_name" autocomplete="off">
                                                @error('school_name')
                                                <p class="tw-text-red-500 tw-pb-0">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="tw-mb-4">
                                                <label class="tw-block tw-text-gray-700 tw-text-sm tw-font-bold tw-mb-2"
                                                       for="contact">
                                                    Student Contact No.
                                                </label>
                                                <input
                                                    class="tw-shadow tw-appearance-none tw-border tw-rounded  tw-py-2 tw-px-3 tw-text-gray-700 tw-leading-tight tw-focus:tw-outline-none tw-focus:tw-shadow-outline"
                                                    id="contact" type="number" placeholder="Student Contact No"
                                                    name="contact_no" autocomplete="off">
                                                @error('contact_no')
                                                <p class="tw-text-red-500 tw-pb-0">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="flex tw-items-center tw-justify-between">
                                                <button
                                                    class="tw-bg-blue-500 tw-hover:bg-blue-700 tw-text-white tw-font-bold tw-py-2 tw-px-8 tw-rounded tw-focus:tw-outline-none tw-focus:tw-shadow-outline"
                                                    type="submit">
                                                    Get In
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div
                                        class="tw-w-1/2 tw-bg-white tw-shadow-md tw-border-dashed tw-border-2 tw-rounded tw-px-8 tw-pt-6 tw-pb-8 tw-mb-6 tw-mt-4">
                                        <h2 class="tw-text-2md tw-font-bold tw-mb-4 tw-text-2xl">Points to Remember
                                            Before Register</h2>
                                        <p class="tw-text-left tw-text-black">1. Fill up the registration form to start the exam. </p>
                                        <p class="tw-text-left tw-text-black">2. After registration, student will get
                                           1 hour time to solve the answer paper on the screen. </p>
                                        <h2 class="tw-text-xl tw-text-black tw-font-bold tw-mt-4">Best Wishes for your
                                            Exam</h2>
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
