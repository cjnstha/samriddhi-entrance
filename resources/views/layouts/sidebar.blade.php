<div class="col-md-3">
    <div class="fixed-bar fl-wrap">
        <div class="user-profile-menu-wrap fl-wrap">
            <!-- user-profile-menu-->
            <div class="user-profile-menu">
                <ul>
                    <li>
                        <a href="{{url('/home')}}" class="{{ Request::path() === '/entrance-exam' ? 'user-act-active' : ''}}">
                            <i class="fa fa-book"></i>
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="{{url('/entrance-exam')}}" class="{{ Request::path() === '/entrance-exam' ? 'user-act-active' : ''}}">
                            <i class="fa fa-book"></i>
                            Questions
                        </a>
                    </li>
                     <li>
                        <a href="{{url('/merge-question')}}" class="{{ Request::path() === '/merge-question' ? 'user-act-active' : ''}}">
                            <i class="fa fa-server"></i>
                            Merge Questions
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/entrance-exam')}}" class="{{ Request::path() === '/entrance-exam' ? 'user-act-active' : ''}}">
                            <i class="fa fa-book"></i>
                            Survey Results
                        </a>
                    </li>
                    <li><a href="/account"><i class="fa fa-unlock-alt"></i>Change Password</a></li>
                </ul>
            </div>
            <!-- user-profile-menu end-->
            <!-- user-profile-menu-->
{{--            <div class="user-profile-menu">--}}
{{--                <h3>Listings</h3>--}}
{{--                <ul>--}}
{{--                    <li><a href="dashboard-listing-table.html"><i class="fa fa-th-list"></i> My listigs  </a></li>--}}
{{--                    <li><a href="dashboard-review.html"><i class="fa fa-comments-o"></i> Reviews </a></li>--}}
{{--                    <li><a href="dashboard-add-listing.html"><i class="fa fa-plus-square-o"></i> Add New</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
            <!-- user-profile-menu end-->
            {{-- <a class="log-out-btn"
                href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form1').submit();">
                {{ __('Logout') }}
                    </a>
                <form id="logout-form1" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form> --}}
        </div>
    </div>
</div>
