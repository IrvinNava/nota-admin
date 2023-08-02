<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<? include('../layout/header.php'); ?>

<body data-sidebar="menuNewCollection">

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
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
                        <li class="breadcrumb-item"><a href="../collections/">Collections</a></li>
                        <li class="breadcrumb-item active">New</li>
                    </ol>
                </nav>
                <form class="mb-9 mt-3">
                    <div class="row g-3 flex-between-end mb-5">
                        <div class="col-auto">
                            <h2 class="mb-2">Collections</h2>
                        </div>

                        <div class="col-auto d-flex align-items-center">

                            <div class="form-check form-switch me-3">
                                <input class="form-check-input" id="collectionStatus" type="checkbox" checked>
                                <label class="form-check-label" for="collectionStatus">Active</label>
                            </div>

                            <a id="publishCollection" class="btn btn-primary mb-2 mb-sm-0"><i class="me-1 fs--1" data-feather="check"></i> Publish collection</a>
                        </div>

                    </div>
                    <div class="row g-5">
                        <div class="col-12 col-xl-8">

                            <div class="mb-6">
                                <h4 class="mb-3"> Experiences</h4>
                                <select class="form-select select2" id="speaker_categories" name="speaker_categories[]" multiple="multiple" style="width:100%;">
                                    <option value="">Unmasking Microaggressions: An interactive Discussion</option>
                                    <option value="">Asian American and Pacific Island Heritage Month</option>
                                    <option value="">National Native American Heritage Month</option>
                                    <option value="">Workplace and Employee wellness</option>
                                    <option value="">Business leadership + management</option>
                                </select>
                            </div>

                            <div class="mb-6">
                                <h4 class="mb-3"> Collection description</h4>
                                <textarea class="tinymce" id="speaker_description" name="speaker_description" data-tinymce='{"height":"12rem","placeholder":"Write the description here..."}'></textarea>
                            </div>

                        </div>

                        <div class="col-12 col-xl-4">
                            <div class="row g-2">
                                <!-- Photo -->
                                <div class="col-12 col-xl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title mb-4">Collection photo</h4>

                                            <div class="dropzone dropzone-multiple p-0 mb-3" id="my-awesome-dropzone" data-dropzone="data-dropzone">
                                                <div class="fallback">
                                                    <input id="speaker_photo" name="speaker_photo" type="file" multiple="multiple" />
                                                </div>
                                                <div class="dz-preview d-flex flex-wrap">
                                                    <div class="border bg-white rounded-3 d-flex flex-center position-relative me-2 mb-2" style="height:80px;width:80px;">
                                                        <img class="dz-image" src="../assets/img/speakers/s24.png" alt="..." data-dz-thumbnail="data-dz-thumbnail" /><a class="dz-remove text-400" href="#!" data-dz-remove="data-dz-remove"><span data-feather="x"></span></a>
                                                    </div>
                                                </div>
                                                <div class="dz-message text-600 text-center" data-dz-message="data-dz-message">
                                                    Drag your photo here <span class="text-800">or</span>
                                                    <button class="btn btn-link p-0" type="button">Browse from device</button><br /><img class="mt-3 me-2" src="../assets/img/icons/image-icon.png" width="40" alt="" />
                                                </div>
                                            </div>

                                            <div class="alert alert-soft-primary px-3 py-2" role="alert">
                                                <small><i class="" data-feather="info"></i> Recommended measurements: 420x600</small>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
                <!-- Footer -->
                <? include('../layout/footer.php'); ?>
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

    </main>

    <!-- assets -->
    <!-- <link href="../vendors/dropzone/dropzone.min.css" rel="stylesheet"> -->
    <script src="../vendors/dropzone/dropzone.min.js"></script>
    <? include('../layout/assets.php'); ?>
    <script src="../vendors/tinymce/tinymce.min.js"></script>
    <link href="../vendors/choices/choices.min.css" rel="stylesheet">
    <script src="../vendors/choices/choices.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $(".select2-tags").select2({
                tags: true,
                tokenSeparators: [',']
            });
        });
    </script>

</body>

</html>