    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <a class="nav-link <?= ($_SERVER['SCRIPT_NAME'] == "/pdm/frontend/admin/index.php") ? '' : 'collapsed' ?>" href="index.php">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($_SERVER['SCRIPT_NAME'] == "/pdm/frontend/admin/user.php") ? '' : 'collapsed' ?>" href="user.php">
                    <i class="bi bi-grid"></i>
                    <span>User</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($_SERVER['SCRIPT_NAME'] == "/pdm/frontend/admin/calon.php") ? '' : 'collapsed' ?>" href="calon.php">
                    <i class="bi bi-grid"></i>
                    <span>Calon</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($_SERVER['SCRIPT_NAME'] == "/pdm/frontend/admin/setting.php") ? '' : 'collapsed' ?>" href="setting.php">
                    <i class="bi bi-grid"></i>
                    <span>Setting</span>
                </a>
            </li>
            <!-- End Dashboard Nav -->

        </ul>
    </aside>
    <!-- End Sidebar-->