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
                      <li class="breadcrumb-item"><a href="../speakers/">Speakers</a></li>
                        <li class="breadcrumb-item active">Ingrid Harb</li>
                    </ol>
                </nav>
                <form class="mb-9 mt-3">
                    <div class="row g-3 flex-between-end mb-5">
                        <div class="col-auto">
                            <h2 class="mb-2">Ingrid Harb</h2>
                            <h5 class="text-700 fw-semi-bold">Nota's speaker</h5>
                        </div>
                        <div class="col-auto">
                            <a id="discardSpeaker" class="btn btn-phoenix-secondary me-2 mb-2 mb-sm-0"><i class="fas fa-trash me-1"></i> Delete</a>
                            <a id="saveSpeaker" class="btn btn-primary mb-2 mb-sm-0"><i class="me-1 fs--1" data-feather="check"></i> Save</a>
                        </div>
                    </div>
                    <h4 class="mb-3">Name</h4>
                    <div class="row g-5">
                        <div class="col-12 col-xl-8">
                            <input class="form-control mb-5" type="text" value="Ingrid Harb" />
                            <div class="mb-6">
                                <h4 class="mb-3"> Speaker description</h4>
                                <textarea class="tinymce" id="edit_speaker_description" name="edit_speaker_description" data-tinymce='{"height":"15rem","placeholder":"Write the description here..."}'>Ingrid never really fit in a box or category. She was born and raised in Mexico and then went to Texas for boarding school. So at time, she was too Mexican for the norms of an American boarding school. And in returning to Mexico, she was almost too American for her Mexican colleagues. Either she was Mexican or she was an American.</textarea>
                            </div>

                            <div class="mb-6">
                                <h4 class="mb-3"> Topics abstract</h4>
                                <textarea class="form-control" id="edit_speaker_topics_abs" name="edit_speaker_topics_abs" rows="4" cols="80" placeholder="Topics:">Overcoming Limiting Beliefs, Career Mapping, Building Resilience, Empowering Latinas</textarea>
                            </div>

                            <div class="mb-6">
                                <h4 class="mb-3">Information</h4>
                                <div class="row g-0 border-top border-bottom border-300">
                                    <div class="col-sm-4">


                                        <div class="nav flex-sm-column border-bottom border-bottom-sm-0 border-end-sm border-300 fs--1 vertical-tab h-100 justify-content-between" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link border-end border-end-sm-0 border-bottom-sm border-300 text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center active" id="topicsTab" data-bs-toggle="tab" data-bs-target="#topicsTabContent" role="tab" aria-controls="topicsTabContent" aria-selected="true">
                                                <span class="me-sm-2 fs-4 nav-icons" data-feather="award"></span>
                                                <span class="d-none d-sm-inline">Topics</span>
                                            </a>
                                            <a class="nav-link border-end border-end-sm-0 border-bottom-sm border-300 text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center" id="videosTab" data-bs-toggle="tab" data-bs-target="#videosTabContent" role="tab" aria-controls="videosTabContent" aria-selected="false">
                                                <span class="me-sm-2 fs-4 nav-icons" data-feather="play-circle"></span>
                                                <span class="d-none d-sm-inline">Videos</span>
                                            </a>
                                            <a class="nav-link border-end border-end-sm-0 border-bottom-sm border-300 text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center" id="servicesTab" data-bs-toggle="tab" data-bs-target="#servicesTabContent" role="tab" aria-controls="servicesTabContent" aria-selected="false">
                                                <span class="me-sm-2 fs-4 nav-icons" data-feather="list"></span>
                                                <span class="d-none d-sm-inline">Services</span>
                                            </a>
                                            <a class="nav-link text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center" id="testimonialsTab" data-bs-toggle="tab" data-bs-target="#testimonialsTabContent" role="tab" aria-controls="testimonialsTabContent" aria-selected="false">
                                                <span class="me-sm-2 fs-4 nav-icons" data-feather="message-square"></span>
                                                <span class="d-none d-sm-inline">Testimonials</span>
                                            </a>
                                        </div>


                                    </div>
                                    <div class="col-sm-8">
                                        <div class="tab-content py-3 ps-sm-4 h-100">
                                            <div class="tab-pane fade show active" id="topicsTabContent" role="tabpanel">
                                                <h4 class="mb-3 d-sm-none">Topics</h4>
                                                <div class="">

                                                    <textarea class="tinymce" id="edit_speaker_topics" name="edit_speaker_topics" data-tinymce='{"height":"15rem","placeholder":"Write the topics here..."}'></textarea>

                                                </div>
                                            </div>
                                            <div class="tab-pane fade h-100 pe-3" id="videosTabContent" role="tabpanel" aria-labelledby="videosTab">
                                                <div class="d-flex flex-column h-100">
                                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                                        <h5 class="m-0 text-1000">Add the iframe code</h5>
                                                        <a id="addVideoBtn" href="javascript:void(0);" class="btn btn-sm btn-primary"><span class="fa-solid fa-plus fs--2"></span></a>
                                                    </div>
                                                    <div id="videosList" class="mt-3">
                                                        <div class="video-item mb-2">
                                                            <textarea class="form-control video-textarea speaker-item-video" name="speaker_item_video" rows="4"></textarea>
                                                            <a href="javascript:void(0);" class="btn btn-soft-danger remove-video" type="button"><span class="fa-solid fa-trash fs--"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade h-100" id="servicesTabContent" role="tabpanel" aria-labelledby="servicesTab">
                                                <div class="d-flex flex-column h-100">

                                                    <textarea class="tinymce" id="edit_speaker_services" name="edit_speaker_services" data-tinymce='{"height":"15rem","placeholder":"Write the services here..."}'></textarea>

                                                </div>
                                            </div>

                                            <div class="tab-pane fade pe-3" id="testimonialsTabContent" role="tabpanel" aria-labelledby="testimonialsTab">
                                                <div class="d-flex flex-row justify-content-between align-items-center">
                                                    <h5 class="m-0 text-1000">Add testimonial</h5>
                                                    <a id="addTestimonialsBtn" href="javascript:void(0);" class="btn btn-sm btn-primary"><span class="fa-solid fa-plus fs--2"></span></a>
                                                </div>
                                                <div id="testimonialsList" class="mt-3">
                                                    <div class="card p-2 testimonial-item mb-2">
                                                        <textarea class="form-control" name="speaker_item_testimonial" rows="4" cols="80" placeholder="Testimonial text..."></textarea>
                                                        <input type="text" name="speaker_item_author" class="form-control" placeholder="Testimonial autor">
                                                        <a href="javascript:void(0);" class="btn btn-soft-danger remove-testimonial" type="button"><span class="fa-solid fa-trash fs--"></span></a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-6">
                                <h4 class="mb-3"> Categories</h4>
                                <select class="form-select select2" id="edit_speaker_categories" name="edit_speaker_categories[]" multiple="multiple" style="width:100%;">
                                    <option value="" selected>DE&I (Diversity, Equity, & Inclusion)</option>
                                    <option value="">Racial Equity</option>
                                    <option value="" selected>Mental Health</option>
                                    <option value="">Disability Awareness</option>
                                    <option value="">Intersectionality</option>
                                    <option value="">Allyship</option>
                                    <option value="">Development</option>
                                    <option value="">Leadership</option>
                                    <option value="">LGBTQIA+ Pride Month</option>
                                    <option value="">Women's History Month</option>
                                    <option value="" selected>Black History Month</option>
                                    <option value="">Hispanic Heritage Month</option>
                                    <option value="">Asian American and Pacific Island Heritage Month</option>
                                    <option value="">Military Family Month</option>
                                    <option value="">Breast Cancer Awareness Month</option>
                                    <option value="">Micro-aggressions</option>
                                    <option value="">Juneteenth</option>
                                    <option value="">Unconscious Bias</option>
                                    <option value="">Arab Heritage Month</option>
                                    <option value="">Social Activism</option>
                                    <option value="">Empathy in the Workplace</option>
                                    <option value="">National Native American Heritage Month</option>
                                    <option value="">Female Empowerment</option>
                                    <option value="">Women in Leadership</option>
                                    <option value="">Self-love</option>
                                    <option value="">Healing</option>
                                    <option value="">Health and wellness</option>
                                    <option value="">Workplace and Employee wellness</option>
                                    <option value="">Business leadership + management</option>
                                </select>
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
                                                    <div class="mb-xl-4">
                                                        <h5 class="mb-2 text-1000">Tags</h5>
                                                        <select id="edit_speaker_tags" name="edit_speaker_tags" class="form-control form-control-sm select2-tags" multiple="multiple" style="width:100%;">
                                                            <option value="" selected>TEDx Speaker</option>
                                                            <option value="" selected>Founder and CEO</option>
                                                            <option value="" selected>Global DE&I leader</option>
                                                            <option value="" selected>Consultant</option>
                                                            <option value="" selected>Keynote Speaker</option>
                                                        </select>
                                                        <small>Add tags separate with coma (,). This tags will be appear under speaker photo</small>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-sm-6 col-xl-12">
                                                    <div class="">
                                                        <div class="d-flex flex-wrap mb-2">
                                                            <h5 class="mb-0 text-1000 me-2">Quote</h5>
                                                        </div>
                                                        <textarea class="form-control" id="edit_speaker_quote" name="edit_speaker_quote" rows="6" cols="80">I was born to change the narrative and as long as I live, I will continue to empower women internationally and locally to pursue their career goals regardless of social, economic, racial or cultural background.</textarea>
                                                        <small>Without the quotes.</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Photo -->
                                <div class="col-12 col-xl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title mb-4">Speaker photo</h4>
                                            <div class="dropzone dropzone-multiple p-0 mb-5" id="my-awesome-dropzone" data-dropzone="data-dropzone">
                                                <div class="fallback">
                                                    <input id="edit_speaker_photo" name="edit_speaker_photo" type="file" multiple="multiple" />
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
    <script src="../js/speakers.js"></script>

    <script type="text/javascript">
        $(document).ready( function(){
            $(".select2-tags").select2({
                tags: true,
                tokenSeparators: [',']
            });
        });
    </script>

</body>

</html>
