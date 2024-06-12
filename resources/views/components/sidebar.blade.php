<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header d-flex align-items-center">
            <a class="navbar-brand" href="/">
                <img src="/public/logo.png" class="navbar-brand-img" alt="...">
            </a>
            <div class="ml-auto">
                <!-- Sidenav toggler -->
                <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    {{-- <li class="nav-item">
                        <a class="nav-link active" href="#navbar-dashboards" data-toggle="collapse" role="button"
                            aria-expanded="true" aria-controls="navbar-dashboards">
                            <i class="ni ni-shop text-primary"></i>
                            <span class="nav-link-text">Dashboards</span>
                        </a>
                        <div class="collapse show" id="navbar-dashboards">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="../../pages/dashboards/dashboard.html" class="nav-link">Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/dashboards/alternative.html"
                                        class="nav-link active">Alternative</a>
                                </li>
                            </ul>
                        </div>
                    </li> --}}
                    @if (auth()->guard('staff')->user() != null)
                        <li class="nav-item">
                            <a class="nav-link active" href="#navbar-dashboards" data-toggle="collapse" role="button"
                                aria-expanded="true" aria-controls="navbar-dashboards">
                                <i class="ni ni-archive-2 text-green"></i>
                                <span class="nav-link-text">Platinum</span>
                            </a>
                            <div class="collapse show" id="navbar-dashboards">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="/create" class="nav-link">Add Platinum</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    @elseif(auth()->guard('mentor')->user() != null)
                        <li class="nav-item">
                            <a class="nav-link" href="/">
                                <i class="ni ni-archive-2 text-green"></i>
                                <span class="nav-link-text">Platinum</span>
                            </a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link active" href="#navbar-dashboards" data-toggle="collapse" role="button"
                                aria-expanded="true" aria-controls="navbar-dashboards">
                                <i class="ni ni-archive-2 text-green"></i>
                                <span class="nav-link-text">Publications</span>
                            </a>
                            <div class="collapse show" id="navbar-dashboards">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="/" class="nav-link">Add Publication</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/" class="nav-link active">Edit Publication</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#navbar-dashboards" data-toggle="collapse" role="button"
                                aria-expanded="true" aria-controls="navbar-dashboards">
                                <i class="ni ni-chart-pie-35 text-info"></i>
                                <span class="nav-link-text">Expert Domain</span>
                            </a>
                            <div class="collapse show" id="navbar-dashboards">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="/" class="nav-link">Add Expert Domain</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/" class="nav-link active">Edit Expert Domain</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</nav>
