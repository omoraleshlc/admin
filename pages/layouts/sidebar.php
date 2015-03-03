<!-- Add "fixed" class to make the sidebar fixed always to the browser viewport. -->
<!-- Adding class "toggle-others" will keep only one menu item open at a time. -->
<!-- Adding class "collapsed" collapse sidebar root elements and show only icons. -->
<div class="sidebar-menu toggle-others fixed">

    <div class="sidebar-menu-inner">

        <header class="logo-env">

            <!-- logo -->
            <div class="logo">
                <a href="dashboard-1.html" class="logo-expanded">
                    <img src="../../resources/xenon-theme/images/logo@2x.png" width="80" alt="" />
                </a>

                <a href="dashboard-1.html" class="logo-collapsed">
                    <img src="../../resources/xenon-theme/images/logo-collapsed@2x.png" width="40" alt="" />
                </a>
            </div>

            <!-- This will toggle the mobile menu and will be visible only on mobile devices -->
            <div class="mobile-menu-toggle visible-xs">
                <a href="#" data-toggle="user-info-menu">
                        <i class="fa-bell-o"></i>
                        <span class="badge badge-success">7</span>
                </a>

                <a href="#" data-toggle="mobile-menu">
                        <i class="fa-bars"></i>
                </a>
            </div>

        </header>

        <!-- Sidebar User Info Bar - Added in 1.3 -->
        <section class="sidebar-user-info" >
            <div class="sidebar-user-info-inner">
                <a href="../dashboard" class="user-profile">
                    <img src="../../resources/xenon-theme/images/user-4.png" width="60" height="60" class="img-circle img-corona" alt="user-pic" />

                    <span>
                        <strong><?php echo $_SESSION['nombre_corto']; ?></strong>
                        Usuario
                    </span>
                </a>

                <ul class="user-links list-unstyled">
                    <li class="logout-link">
                        <a href="../../logout.php" title="Log out">
                            <i class="fa-power-off"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>
        </section>

        <ul id="main-menu" class="main-menu">
            <!-- add class "multiple-expanded" to allow multiple submenus to open -->
            <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
            <li>
                <a href="../dashboard">
                    <i class="linecons-cog"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="dashboard-1.html">
                    <i class="linecons-note"></i>
                    <span class="title">Reportes</span>
                </a>
                <ul>
                    <li>
                        <a href="dashboard-1.html">
                            <span class="title">Ventas</span>
                        </a>
                    </li>
                    <li>
                        <a href="dashboard-2.html">
                            <span class="title">Impuestos</span>
                        </a>
                    </li>
                    <li>
                        <a href="dashboard-2.html">
                            <span class="title">Polizas</span>
                        </a>
                    </li>
                    <li>
                        <a href="../reportes/honorarios.php">
                            <span class="title">Honorarios</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="../dashboard">
                    <i class="linecons-params"></i>
                    <span class="title">Transacciones</span>
                </a>
            </li>
        </ul>

    </div>
</div>