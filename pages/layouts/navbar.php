<nav class="navbar user-info-navbar"  role="navigation"><!-- User Info, Notifications and Menu Bar -->

    <!-- Left links for user info navbar -->
    <ul class="user-info-menu left-links list-inline list-unstyled">

        <li class="hidden-sm hidden-xs">
            <a href="#" data-toggle="sidebar">
                    <i class="fa-bars"></i>
            </a>
        </li>

        <!-- Added in v1.2 -->
        <li class="dropdown hover-line language-switcher">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="../../resources/xenon-theme/images/flags/flag-uk.png" alt="flag-uk" />
                English
            </a>

            <ul class="dropdown-menu languages">
                <li class="active">
                    <a href="?lang=en">
                        <img src="../../resources/xenon-theme/images/flags/flag-uk.png" alt="flag-uk" />
                            English
                    </a>
                </li>
                <li>
                    <a href="?lang=es">
                        <img src="../../resources/xenon-theme/images/flags/flag-es.png" alt="flag-es" />
                            Espa&ntilde;ol
                    </a>
                </li>
            </ul>
        </li>
    </ul>


    <!-- Right links for user info navbar -->
    <ul class="user-info-menu right-links list-inline list-unstyled">

        <li class="dropdown user-profile">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="../../resources/xenon-theme/images/user-4.png" alt="user-image" class="img-circle img-inline userpic-32" width="28" />
                <span>
                        <?php echo $_SESSION['nombre_completo']; ?>
                        <i class="fa-angle-down"></i>
                </span>
            </a>

            <ul class="dropdown-menu user-profile-menu list-unstyled">
                <li class="last">
                    <a href="../../logout.php">
                        <i class="fa-lock"></i>
                        Logout
                    </a>
                </li>
            </ul>
        </li>


    </ul>

</nav>