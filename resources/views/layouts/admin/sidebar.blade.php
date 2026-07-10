<div class="sb2-1">
    <!--== USER INFO ==-->
    <div class="sb2-12">
        <ul>
            <li><img src="{{ asset('assets/admin/images/placeholder.jpg') }}" alt="">
            </li>
            <li>
                <h5>{{ auth()->user()->name }} <span>{{ auth()->user()->email }}</span></h5>
            </li>
            <li></li>
        </ul>
    </div>
    <!--== LEFT MENU ==-->
    <div class="sb2-13">
        <ul class="collapsible" data-collapsible="accordion">
            <li><a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'menu-active' : '' }}"><i class="fa fa-bar-chart" aria-hidden="true"></i> Dashboard</a>
            </li>
            <!-- <li>
                <a href="admin-setting.html"><i class="fa fa-cogs" aria-hidden="true"></i> Site Setting</a>
            </li> -->
            
            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-user" aria-hidden="true"></i> Users</a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li><a href="{{ route('admin.users.index') }}" class="{{ request()->routeIs('admin.users.*') ? 'menu-active' : '' }}">All Users</a>
                        </li>
                        <li><a href="#">Add New user</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-bookmark-o" aria-hidden="true"></i> Page Content</a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li><a href="{{ route('admin.page-sections.index') }}" class="{{ request()->routeIs('admin.page-sections.*') ? 'menu-active' : '' }}">Page Sections</a>
                        </li>
                        <li><a href="{{ route('admin.posts.index') }}" class="{{ request()->routeIs('admin.posts.*') ? 'menu-active' : '' }}">News &amp; Updates</a>
                        </li>
                        <li><a href="{{ route('admin.gallery.index') }}" class="{{ request()->routeIs('admin.gallery.*') ? 'menu-active' : '' }}">Gallery</a>
                        </li>
                        <li><a href="{{ route('admin.sliders.index') }}" class="{{ request()->routeIs('admin.sliders.*') ? 'menu-active' : '' }}">Homepage Slider</a>
                        </li>
                        <li><a href="admin-event-all.html">Events</a>
                        </li>
                    </ul>
                </div>
            </li>
            
         
            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-users" aria-hidden="true"></i> Students</a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li><a href="#">All Students</a>
                        </li>
                        <li><a href="#">Add New Students</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-commenting-o" aria-hidden="true"></i> Enquiry</a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li><a href="#">All Enquiry</a></li>
                        <li><a href="#">Course Enquiry</a></li>
                        <li><a href="#">Admission Enquiry</a></li>
                        <li><a href="#">Seminar Enquiry</a></li>
                        <li><a href="#">Event Enquiry</a></li>
                        <li><a href="#">Common Enquiry</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-cloud-download" aria-hidden="true"></i> Import & Export</a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li><a href="#">Export all datas</a>
                        </li>
                        <li><a href="#">Import all datas</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>