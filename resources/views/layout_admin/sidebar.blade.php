<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap">--- MENU</li>
                <li> <a class="waves-effect waves-dark" href="{{ route('admin.dashboard') }}" aria-expanded="false"><i
                            class=" fas fa-tachometer-alt"></i><span class="hide-menu">Dashboard</span></a></li>
                <li> <a class="waves-effect waves-dark" href="{{ route('admin.lokasi.index') }}"
                        aria-expanded="false"><i class="fas fa-map-marker-alt"></i><span class="hide-menu">Data Rumah
                            Sakit</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="{{ route('admin.layanan.index') }}"
                        aria-expanded="false"><i class=" fas fa-hospital-alt"></i><span class="hide-menu">Layanan Rumah
                            Sakit</span></a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
