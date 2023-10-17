<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? '' : 'collapsed' }}" href="{{ url('/') }}">
                <i class="bi bi-speedometer2"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link  {{ Request::is('category') ? '' : 'collapsed' }}" href="{{ url('/category') }}">
                <i class="bi bi-grid"></i>
                <span>Category</span>
            </a>
        </li><!-- End Category Nav -->

        <li class="nav-item">
            <a class="nav-link {{ Request::is('transactions') ? '' : 'collapsed' }}" href="{{ url('/transactions') }}">
                <i class="bi bi-arrow-repeat"></i>
                <span>Transactions</span>
            </a>
        </li><!-- End Transcations Nav -->

        <li class="nav-item">
            <a class="nav-link  {{ Request::is('report') ? '' : 'collapsed' }}" href="{{ url('/report') }}">
                <i class="bi bi-file-text   "></i>
                <span>Report</span>
            </a>
        </li><!-- End Report Nav -->

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link {{ Request::is('profile') ? '' : 'collapsed' }}" href="{{ url('/profile') }}">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link {{ Request::is('settings') ? '' : 'collapsed' }}" href="{{ url('/settings') }}">
                <i class="bi bi-gear"></i>
                <span>Settings</span>
            </a>
        </li><!-- End Profile Page Nav -->

    </ul>

</aside><!-- End Sidebar-->
