<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<? include('../layout/header.php'); ?>

<body data-sidebar="">

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
                        <li class="breadcrumb-item"><a href="../experiences/">Experiences</a></li>
                        <li class="breadcrumb-item active">[Experience name]</li>
                    </ol>
                </nav>
                <form class="mb-9 mt-3">
                    <div class="row g-3 flex-between-end mb-5">
                        <div class="col-auto">
                            <h2 class="mb-2">[Experience name]</h2>
                            <h5 class="text-700 fw-semi-bold">Experience</h5>
                        </div>
                        <div class="col-auto d-flex align-items-center">

                            <div class="form-check form-switch me-3">
                                <input class="form-check-input" id="expereinceStatus" type="checkbox" checked>
                                <label class="form-check-label" for="expereinceStatus">Active</label>
                            </div>

                            <a id="updateExperience" class="btn btn-primary mb-2 mb-sm-0">Update experience</a>
                        </div>
                    </div>
                    <div class="row g-5">
                        <div class="col-12 col-xl-8">

                            <div class="row">
                                <div class="col-12">
                                    <h4 class="mb-3">Name</h4>
                                    <input id="speaker_name" name="speaker_name" class="form-control mb-5" type="text" placeholder="Write the name here..." value="Unmasking Microaggressions: An Interactive Discussion" />
                                </div>
                            </div>

                            <div class="mb-6">
                                <h4 class="mb-3"> Speaker description</h4>
                                <textarea class="tinymce" id="speaker_description" name="speaker_description" data-tinymce='{"height":"15rem","placeholder":"Write the description here..."}'>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam porro omnis ex, nulla quas aliquam voluptas accusantium dolorum asperiores optio, laborum deserunt. Similique voluptate rerum incidunt ratione quia maiores deleniti!</textarea>
                            </div>

                            <div class="mb-6">
                                <h4 class="mb-3"> Collections</h4>
                                <select class="form-select select2" id="speaker_categories" name="speaker_categories[]" multiple="multiple" style="width:100%;">
                                    <option value="" selected>DE&I (Diversity, Equity, & Inclusion)</option>
                                    <option value="">Racial Equity</option>
                                    <option value="">Mental Health</option>
                                    <option value="">Disability Awareness</option>
                                    <option value="">Black History Month</option>
                                    <option value="">Hispanic Heritage Month</option>
                                    <option value="">Asian American and Pacific Island Heritage Month</option>
                                </select>
                            </div>

                            <div class="mb-6">

                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    <h4 class="mb-0">Key takeaways</h4>
                                    <a id="addKeyBtn" href="javascript:void(0);" class="btn btn-sm btn-primary"><span class="fa-solid fa-plus fs--2"></span></a>
                                </div>
                                <div id="keyList" class="mt-3">
                                    <div class="key-item mb-2">
                                        <input type="text" class="form-control key-input" name="key_input" value="Key takeawayDemo">
                                        <a href="javascript:void(0);" class="btn btn-soft-danger remove-key"><span class="fa-solid fa-trash fs--"></span></a>
                                    </div>
                                    <div class="key-item mb-2">
                                        <input type="text" class="form-control key-input" name="key_input" value="Key takeawayDemo">
                                        <a href="javascript:void(0);" class="btn btn-soft-danger remove-key"><span class="fa-solid fa-trash fs--"></span></a>
                                    </div>
                                    <div class="key-item mb-2">
                                        <input type="text" class="form-control key-input" name="key_input" value="Key takeawayDemo">
                                        <a href="javascript:void(0);" class="btn btn-soft-danger remove-key"><span class="fa-solid fa-trash fs--"></span></a>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="col-12 col-xl-4">
                            <div class="row g-2">
                                <div class="col-12 col-xl-12">
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <h4 class="card-title mb-4">Information</h4>
                                            <div class="row g-3">

                                                <div class="col-12 col-sm-6 col-xl-12">
                                                    <h5 class="mb-3 text-1000">Experience formats</h5>
                                                    <div class="row g-3">
                                                        <div class="col-6">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="flexChecked" type="checkbox" checked="checked">
                                                                <label class="form-check-label fw-bold fs-0 mb-3" for="flexChecked">Virtual</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="flexChecked" type="checkbox" checked="checked">
                                                                <label class="form-check-label fw-bold fs-0 mb-3" for="flexChecked">In person</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-sm-6 col-xl-12 mt-0">
                                                    <h5 class="mb-2 text-1000">People count</h5>
                                                    <input id="" name="" class="form-control mb-0" type="text" value="Best for teams up to 60 people" />
                                                </div>

                                                <div class="col-12 col-sm-6 col-xl-12">
                                                    <h5 class="mb-2 text-1000">Duration</h5>
                                                    <input id="" name="" class="form-control mb-0" type="text" value="90 min" />
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Photo -->
                                <div class="col-12 col-xl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title mb-4">Experience cover</h4>
                                            <div class="dropzone dropzone-multiple p-0 mb-3" id="my-awesome-dropzone" data-dropzone="data-dropzone">
                                                <div class="fallback">
                                                    <input id="speaker_photo" name="speaker_photo" type="file" multiple="multiple" />
                                                </div>
                                                <div class="dz-preview d-flex flex-wrap">
                                                    <div class="border bg-white rounded-3 d-flex flex-center position-relative me-2 mb-2" style="height:80px;width:80px;">
                                                        <img class="dz-image" src="../../../assets/img/23.png" alt="..." data-dz-thumbnail="data-dz-thumbnail" /><a class="dz-remove text-400" href="#!" data-dz-remove="data-dz-remove"><span data-feather="x"></span></a>
                                                    </div>
                                                </div>
                                                <div class="dz-message text-600 text-center" data-dz-message="data-dz-message">
                                                    Drag your photo here <span class="text-800">or</span>
                                                    <button class="btn btn-link p-0" type="button">Browse from device</button><br /><img class="mt-3 me-2" src="../../../assets/img/icons/image-icon.png" width="40" alt="" />
                                                </div>
                                            </div>

                                            <div class="alert alert-soft-primary px-3 py-2" role="alert">
                                                <small><i class="" data-feather="info"></i> Recommended measurements: 1000x450</small>
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