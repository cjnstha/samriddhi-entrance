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
                                <table class="tw-table-auto tw-w-full">
                                    <thead>
                                    <tr>
                                        <th class="tw-px-4 tw-py-2">S.N</th>
                                        <th class="tw-px-4 tw-py-2">Question</th>
                                        <th class="tw-px-4 tw-py-2">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($questions as $key=>$question)
                                        <tr>
                                            <td class="tw-border tw-px-4 tw-py-2">{{ ++$key }}</td>
                                            <td class="tw-border tw-px-4 tw-py-2">{{ $question->questions }}</td>
                                            <td class="tw-border tw-px-4 tw-py-2 tw-flex">
                                                <a
                                                    href="/edit-question/{{ $question->id }}"
                                                    class="tw-bg-blue-500 hover:tw-bg-blue-700 tw-text-white tw-font-bold tw-py-2 tw-px-4 tw-rounded tw-mr-2">
                                                    Edit
                                                </a>
                                                <form action="/delete-question/{{ $question->id }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button
                                                        type="submit"
                                                        class="tw-bg-red-500 hover:tw-bg-blue-700 tw-text-white tw-font-bold tw-py-2 tw-px-4 tw-rounded">
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr >
                                            <td class="tw-border tw-px-4 tw-py-2" colspan="3">No data</td>
                                        </tr>
                                    @endforelse
                                    </tbody>
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

