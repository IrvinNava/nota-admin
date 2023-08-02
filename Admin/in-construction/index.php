<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<? include('../layout/header.php'); ?>
<body data-sidebar="">
    <main class="main" id="top">
        <div class="container-fluid px-0">
            <!-- Sidebar -->
            <? include('../layout/sidebar.php'); ?>
            <!-- Topbar -->
            <? include('../layout/topbar.php'); ?>

            <div class="content">
                <div class="d-flex flex-center content-min-h">
                    <div class="text-center py-9"><img class="img-fluid mb-7 d-dark-none" src="../assets/img/spot-illustrations/2.png" width="470" alt="" /><img class="img-fluid mb-7 d-light-none" src="../assets/img/spot-illustrations/dark_2.png" width="470" alt="" />
                        <img src="../assets/img/under-construction.png" width="60%" style="max-width: 300px;">
                        <h1 class="text-800 fw-normal mt-5">Under construction</h1>
                    </div>
                </div>
            </div>

            <script>
                var navbarTopStyle = window.config.config.phoenixNavbarTopStyle;
                var navbarTop = document.querySelector('.navbar-top');
                if (navbarTopStyle === 'darker') {
                    navbarTop.classList.add('navbar-darker');
                }

                var navbarVerticalStyle = window.config.config.phoenixNavbarVerticalStyle;
                var navbarVertical = document.querySelector('.navbar-vertical');
                if (navbarVertical && navbarVerticalStyle === 'darker') {
                    navbarVertical.classList.add('navbar-darker');
                }
            </script>

            <!-- assets -->
            <? include('../layout/assets.php'); ?>

        </div>

    </main>
</body>
</html>
