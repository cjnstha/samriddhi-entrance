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
                                <a href="{{url('/merge-question')}}"
                                   class="{{ Request::path() === '/merge-question' ? 'user-act-active' : ''}}">
                                    <i class="fa fa-server"></i>
                                    Merge Questions
                                </a>
                            </li>
                            <li><a href="/account"><i class="fa fa-unlock-alt"></i>Change Password</a></li>
                        @endif
                    @endisset
                </ul>
            </div>
        </div>
    </div>
</div>
