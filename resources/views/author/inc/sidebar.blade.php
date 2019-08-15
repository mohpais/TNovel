<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li>
                    <a href="/dashboard">
                        <i class="lnr lnr-home"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="/profile">
                        <i class="lnr lnr-user"></i> <span>Profile</span>
                    </a>
                </li>
                @if (auth()->user()->role == 'superadmin')
                <li>
                    <a href="#subPages" data-toggle="collapse" class="active" aria-expanded="true">
                        <i class="lnr lnr-license"></i> <span>User Data</span> <i class="icon-submenu lnr lnr-chevron-left"></i>
                    </a>
                    <div id="subPages" class="collapse in" aria-expanded="true" style="">
                        <ul class="nav">
                            <li><a href="/admin" class="">Admin</a></li>
                            <li><a href="#" class="">User</a></li>
                        </ul>
                    </div>
                </li>
                @endif
                <li>
                    <a href="/novel" class="">
                        <i class="lnr lnr-code"></i> <span>List Novel</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="lnr lnr-envelope"></i> <span> Request</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>