<div class="col-md-3">
    <div class="fixed-bar fl-wrap">
        <div class="user-profile-menu-wrap fl-wrap">
            <!-- user-profile-menu-->
            <div class="user-profile-menu">
                <ul>
                    <li>
                        <a href="{{url('/home')}}"
                           class="{{ Request::path() === '/entrance-exam' ? 'user-act-active' : ''}}">
                            <i class="fa fa-book"></i>
                            Home
                        </a>
                    </li>
                    @isset(auth()->user()->roles[0])
                        @if(auth()->user()->roles[0]->name == 'admin')
                            <li>
                                <a href="{{url('/entrance-exam')}}"
                                   class="{{ Request::path() === '/entrance-exam' ? 'user-act-active' : ''}}">
                                    <i class="fa fa-book"></i>
                                    Create Question
                                </a>
                            </li>
                            <li>
                                <a href="{{url('/edit-question')}}"
                                   class="{{ Request::path() === '/entrance-exam' ? 'user-act-active' : ''}}">
                                    <i class="fa fa-book"></i>
                                    Edit Question
                                </a>
                            </li>
{{--                            <li>--}}
{{--                                <a href="{{url('/merge-question')}}"--}}
{{--                                   class="{{ Request::path() === '/merge-question' ? 'user-act-active' : ''}}">--}}
{{--                                    <i class="fa fa-server"></i>--}}
{{--                                    Merge Questions--}}
{{--                                </a>--}}
{{--                            </li>--}}
                        @endif
                    @endisset
                </ul>

                <a href="{{ route('logout') }}"
                   class="tw-bg-blue-500 hover:tw-text-white tw-p-2 tw-text-white tw-rounded tw-shadow tw-text-base tw-border tw-border-gray-200"
                   onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

            </div>
        </div>
    </div>
</div>
