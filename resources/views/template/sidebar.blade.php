<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <a class="@if(request()->routeis('admin.dashboard')) active-menu @endif" href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a>
            </li>
            <li>
                <a class="@if(request()->routeis('admin.reporting.*')) active-menu @endif" href="{{route('admin.reporting.index')}}"><i class="fa fa-dashboard"></i> Pelaporan KTP</a>
            </li>
            <li class="">
                <a href="#"><i class="fa fa-sitemap"></i> Master Data<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a class="@if(request()->routeis('admin.reportingtypes.*')) active-menu @endif" href="{{route('admin.reportingtypes.index')}}">Jenis Pelaporan</a>
                    </li>
                    <li>
                        <a class="@if(request()->routeis('admin.submissiontypes.*')) active-menu @endif" href="{{route('admin.submissiontypes.index')}}">Jenis Keterangan</a>
                    </li>
                    <li>
                        <a class="@if(request()->routeis('admin.explanationtypes.*')) active-menu @endif" href="{{route('admin.explanationtypes.index')}}">Jenis Pengajuan</a>
                    </li>
                </ul>
            </li>
        </ul>

    </div>

</nav>
