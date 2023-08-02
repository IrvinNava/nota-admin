<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<? include('../layout/header.php'); ?>

<body data-sidebar="menuSpeakers">
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
                        <li class="breadcrumb-item active">Speakers</li>
                    </ol>
                </nav>
                <div class="mt-3">
                    <div class="row g-3 mb-4 justify-content-between">
                        <div class="col-auto">
                            <h2 class="mb-0">Speakers</h2>
                        </div>
                        <div class="col-auto">
                            <!-- <button class="btn btn-link text-900 me-4 px-0"><span class="fa-solid fa-file-export fs--1 me-2"></span>Export</button> -->
                            <a class="btn btn-primary" href="../add-speaker/"><span class="fas fa-user-plus me-2"></span>Add speaker</a>
                        </div>
                    </div>

                    <div>
                        <div class="mx-n4 px-4 mx-lg-n6 p-lg-6 bg-white border-top border-bottom border-200 position-relative top-1">
                            <div class="table-responsive scrollbar mx-n1 px-1">
                                <table class="table table-sm fs--1 mb-0 align-middle table-hover dataTable">
                                    <thead>
                                        <tr>
                                            <th class="sort align-middle white-space-nowrap" scope="col">ID</th>
                                            <th></th>
                                            <th class="sort align-middle" scope="col">NAME</th>
                                            <th class="sort align-middle" scope="col">TOPIC</th>
                                            <th class="sort align-middle" scope="col" style="width:80px;"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="ps-2">001</td>
                                            <td>
                                                <div class="speaker-photo" style="background-image: url(../assets/img/speakers/s26.png)"></div>
                                            </td>
                                            <td><a href="../speaker/">Lacey Henderson</a></td>
                                            <td>Paralympian, advocate, speaker, host, storyteller, comedian, influenced, Model, and person.</td>
                                            <td class="btn-reveal-trigger">
                                                <div class="font-sans-serif btn-reveal-trigger position-static">
                                                    <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                                                    <div class="dropdown-menu dropdown-menu-end py-2">
                                                        <a class="dropdown-item" href="../speaker/"><i class="fas fa-pen me-1"></i> View / Edit</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item text-danger delete-speaker-item" href="javascript:void(0);"><i class="fas fa-trash me-1"></i> Remove</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-2">002</td>
                                            <td>
                                                <div class="speaker-photo" style="background-image: url(../assets/img/speakers/eboo-patel.png)"></div>
                                            </td>
                                            <td><a href="../speaker/">Eboo Patel</a></td>
                                            <td>Interfaith Cooperation, Bridgebuilder, Potluck Nation</td>
                                            <td class="btn-reveal-trigger">
                                                <div class="font-sans-serif btn-reveal-trigger position-static">
                                                    <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                                                    <div class="dropdown-menu dropdown-menu-end py-2">
                                                        <a class="dropdown-item" href="../speaker/"><i class="fas fa-pen me-1"></i> View / Edit</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item text-danger delete-speaker-item" href="javascript:void(0);"><i class="fas fa-trash me-1"></i> Remove</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-2">003</td>
                                            <td>
                                                <div class="speaker-photo" style="background-image: url(../assets/img/speakers/s1.png)"></div>
                                            </td>
                                            <td><a href="../speaker/">Ingrid Harb</a></td>
                                            <td>Overcoming Limiting Beliefs, Career Mapping, Building Resilience, Empowering Latinas</td>
                                            <td class="btn-reveal-trigger">
                                                <div class="font-sans-serif btn-reveal-trigger position-static">
                                                    <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                                                    <div class="dropdown-menu dropdown-menu-end py-2">
                                                        <a class="dropdown-item" href="../speaker/"><i class="fas fa-pen me-1"></i> View / Edit</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item text-danger delete-speaker-item" href="javascript:void(0);"><i class="fas fa-trash me-1"></i> Remove</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-2">004</td>
                                            <td>
                                                <div class="speaker-photo" style="background-image: url(../assets/img/speakers/s24.png)"></div>
                                            </td>
                                            <td><a href="../speaker/">Raven Solomon</a></td>
                                            <td>Generations, Racial Equity, and The Intersection</td>
                                            <td class="btn-reveal-trigger">
                                                <div class="font-sans-serif btn-reveal-trigger position-static">
                                                    <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                                                    <div class="dropdown-menu dropdown-menu-end py-2">
                                                        <a class="dropdown-item" href="../speaker/"><i class="fas fa-pen me-1"></i> View / Edit</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item text-danger delete-speaker-item" href="javascript:void(0);"><i class="fas fa-trash me-1"></i> Remove</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-2">005</td>
                                            <td>
                                                <div class="speaker-photo" style="background-image: url(../assets/img/speakers/erin-gallagher.png)"></div>
                                            </td>
                                            <td><a href="../speaker/">Erin Gallaghern</a></td>
                                            <td>Entrepreneurship, Diversity, Workplace culture, Equity for women, Gender parity, Abortion</td>
                                            <td class="btn-reveal-trigger">
                                                <div class="font-sans-serif btn-reveal-trigger position-static">
                                                    <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                                                    <div class="dropdown-menu dropdown-menu-end py-2">
                                                        <a class="dropdown-item" href="../speaker/"><i class="fas fa-pen me-1"></i> View / Edit</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item text-danger delete-speaker-item" href="javascript:void(0);"><i class="fas fa-trash me-1"></i> Remove</a>
                                                    </div>
                                                </div>
                                            </td>
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
            <script src="../js/speakers.js"></script>
        </div>

    </main>
</body>

</html>