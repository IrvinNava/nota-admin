<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<? include('../layout/header.php'); ?>

<body data-sidebar="menuRequestedProposals">
    <main class="main" id="top">
        <div class="container-fluid px-0">
            <!-- Sidebar -->
            <? include('../layout/sidebar.php'); ?>
            <!-- Topbar -->
            <? include('../layout/topbar.php'); ?>

            <div class="content">
                <nav class="mb-2" aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="../home/">Home</a></li>
                        <li class="breadcrumb-item"><a href="../proposals-requested/">Proposals requested</a></li>
                        <li class="breadcrumb-item active">Leads</li>
                    </ol>
                </nav>
                <div class="mt-3">
                    <div class="row g-3 mb-4 justify-content-between align-items-end">
                        <div class="col-auto">
                            <h2 class="mb-2">Leads</h2>
                            <h5 class="text-700 fw-semi-bold">Contacts captured from proposals requested</h5>
                        </div>
                        <div class="col-auto">
                            <a class="btn btn-success me-4" href="javascript:void(0);"><i class="fa-solid fa-file-arrow-down fs--1 me-2"></i></span>Export leads</a>
                        </div>
                    </div>

                    <div>

                        <div class="mx-n4 px-4 mx-lg-n6 p-lg-6 bg-white border-top border-bottom border-200 position-relative top-1">
                            <div class="table-responsive scrollbar mx-n1 px-1">
                                <table class="table table-sm fs--1 mb-0 align-middle table-hover table-badges dataTable">
                                    <thead>
                                        <tr>
                                            <th class="sort align-middle white-space-nowrap" scope="col">ID</th>
                                            <th class="sort align-middle" scope="col" style="min-width:120px;">NAME</th>
                                            <th class="sort align-middle" scope="col" style="min-width:120px;">EMAIL</th>
                                            <th class="sort align-middle" scope="col">REGISTERED ON</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="ps-2">001</td>
                                            <td><a href="../proposal-requested-details/">Aida Talavera</a></td>
                                            <td>aida_talavera@gmail.com</td>
                                            <td class="time">Apr 12, 7:36 PM</td>
                                        </tr>
                                        <tr>
                                            <td class="ps-2">002</td>
                                            <td><a href="../proposal-requested-details/">Nicolae del Rio</a></td>
                                            <td>nicolae_rio@outlook.com</td>
                                            <td class="time">Apr 12, 7:36 PM</td>
                                        </tr>
                                        <tr>
                                            <td class="ps-2">003</td>
                                            <td><a href="../proposal-requested-details/">Martha Cordero</a></td>
                                            <td>martha_cordero@company.com</td>
                                            <td class="time">Apr 12, 7:36 PM</td>
                                        </tr>

                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <? include('../layout/footer.php'); ?>

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