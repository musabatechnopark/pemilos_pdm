    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <a class="nav-link <?= ( $_SERVER['REQUEST_URI'] == "/admin/index.php" || $_SERVER['REQUEST_URI'] == "/admin/") ? '' : 'collapsed' ?>" href="index.php">
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ( $_SERVER['REQUEST_URI'] == "/admin/user.php") ? '' : 'collapsed' ?>" href="user.php">
                    <i class="bi bi-people-fill"></i>
                    <span>User</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ( $_SERVER['REQUEST_URI'] == "/admin/calon.php") ? '' : 'collapsed' ?>" href="calon.php">
                    <i class="bi bi-person-square"></i>
                    <span>Calon</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ( $_SERVER['REQUEST_URI'] == "/admin/setting.php") ? '' : 'collapsed' ?>" href="setting.php">
                    <i class="bi bi-gear-fill"></i>
                    <span>Setting</span>
                </a>
            </li>
            <!-- End Dashboard Nav -->

        </ul>
    </aside>
    <!-- End Sidebar-->