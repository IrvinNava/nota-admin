<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<? include('../layout/header.php'); ?>
<body data-sidebar="menuNewProposal">
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
                      <li class="breadcrumb-item"><a href="../proposals/">Proposals</a></li>
                      <li class="breadcrumb-item active">New</li>
                    </ol>
                </nav>
                <form class="mb-9 mt-3">
                    <div class="row g-3 flex-between-end mb-5">
                        <div class="col-auto">
                            <h2 class="mb-2">New proposal</h2>
                            <h5 class="text-700 fw-semi-bold">Orders placed across your store</h5>
                        </div>
                        <div class="col-auto">
                            <a id="discardProposal" class="btn btn-phoenix-secondary me-2 mb-2 mb-sm-0" type="button"><i class="fas fa-trash me-1"></i>  Discard</a>
                            <a id="saveProposalDraft" class="btn btn-phoenix-primary me-2 mb-2 mb-sm-0" type="button"><i class="me-1 fs--1" data-feather="save"></i> Save draft</a>
                            <a id="saveSendProposal" class="btn btn-primary mb-2 mb-sm-0"><i class="me-1 fs--1" data-feather="send"></i> Save and Send</a>
                        </div>
                    </div>
                    <div class="row g-5">

                        <div class="col-12 col-xl-4">
                            <div class="sticky-top position-sticky" style="top: 100px;">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Details</h4>
                                        <div class="row g-3">
                                            <div class="col-12 col-sm-6 col-xl-12">
                                                <div class="border-bottom border-dashed border-sm-0 border-bottom-xl pb-4">
                                                    <div class="d-flex flex-wrap mb-2">
                                                        <h5 class="text-1000 me-2">Proposal Name</h5>
                                                    </div>
                                                    <input type="text" class="form-control" id="proposal_name" name="proposal_name" value="">
                                                    <small>This input is just for identification</small>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-xl-12">
                                                <div class="d-flex flex-wrap mb-2">
                                                    <h5 class="text-1000 me-2"><i class="me-1 mb-1 fs--1" data-feather="user"></i>Client Name</h5>
                                                </div>
                                                <input type="text" class="form-control" id="proposal_client" name="proposal_client" value="">
                                            </div>
                                            <div class="col-12 col-sm-6 col-xl-12">
                                                <div class="d-flex flex-wrap mb-2">
                                                    <h5 class="text-1000 me-2"><i class="me-1 mb-1 fs--1" data-feather="mail"></i> Client Email</h5>
                                                </div>
                                                <input type="email" class="form-control" id="proposal_email" name="proposal_email" placeholder="client@email.com">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-xl-8">
                            <div class="border-bottom mb-6 pb-6">
                                <h4 class="mb-3">Add speakers for category</h4>
                                <select class="form-select select2" id="proposal_speakers_categories" name="proposal_speakers_categories[]" multiple="multiple">
                                    <option value="" >DE&I (Diversity, Equity, & Inclusion)</option>
                                    <option value="">Racial Equity</option>
                                    <option value="" >Mental Health</option>
                                    <option value="">Disability Awareness</option>
                                    <option value="">Intersectionality</option>
                                    <option value="">Allyship</option>
                                    <option value="">Development</option>
                                    <option value="">Leadership</option>
                                    <option value="">LGBTQIA+ Pride Month</option>
                                    <option value="">Women's History Month</option>
                                    <option value="" >Black History Month</option>
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
                            <div class="border-bottom mb-6 pb-6">
                                <h4 class="mb-3">Add speakers for theme</h4>
                                <select class="form-select select2" id="proposal_speakers_theme" name="proposal_speakers_theme[]" multiple="multiple">
                                    <option value="0" >DEI Fundamentals</option>
                                    <option value="1">Inclusive Leadership</option>
                                    <option value="2">Personal Branding and Communication Skills</option>
                                    <option value="3">Motivational Speakers and Poets</option>
                                    <option value="4">Mental Health</option>
                                    <option value="5">Autism Acceptance Month</option>
                                    <option value="6">National Arab American Month</option>
                                    <option value="7">Asian American and Pacific Islander Heritage Month</option>
                                    <option value="8" >PRIDE Month</option>
                                    <option value="9">Hispanic Heritage Month</option>
                                    <option value="10">National Disability Employment Awareness Month</option>
                                    <option value="11">American Indian and Alaska Native Heritage Month</option>
                                    <option value="12">Military Appreciation Month</option>
                                    <option value="13">Women Empowerment </option>
                                    <option value="14">Juneteenth </option>
                                </select>
                            </div>
                            <div class="border-bottom mb-6 pb-6">
                                <h4 class="mb-3">Custom</h4>
                                <!-- Drag & Drop Speakers -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card p-3 draggable-container">
                                            <div class="row g-2 elements-list" id="speakersList">
                                                <div class="col-md-3">
                                                    <div class="speaker-item">
                                                        <div class="speaker-photo" style="background-image: url(../assets/img/speakers/s26.png)"></div>
                                                        <p>Lacey Henderson</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="speaker-item">
                                                        <div class="speaker-photo" style="background-image: url(../assets/img/speakers/eboo-patel.png)"></div>
                                                        <p>Eboo Patel</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="speaker-item">
                                                        <div class="speaker-photo" style="background-image: url(../assets/img/speakers/s1.png)"></div>
                                                        <p>Ingrid Harb</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="speaker-item">
                                                        <div class="speaker-photo" style="background-image: url(../assets/img/speakers/s24.png)"></div>
                                                        <p>Raven Solomon</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="speaker-item">
                                                        <div class="speaker-photo" style="background-image: url(../assets/img/speakers/caprice-c-jones.png)"></div>
                                                        <p>Caprice C. Jones</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="speaker-item">
                                                        <div class="speaker-photo" style="background-image: url(../assets/img/speakers/deepa-purushothaman.png)"></div>
                                                        <p>Deepa Purushothaman</p>
                                                    </div>
                                                </div>



                                                <div class="col-md-3">
                                                    <div class="speaker-item">
                                                        <div class="speaker-photo" style="background-image: url(../assets/img/speakers/heather-monahan.png)"></div>
                                                        <p>Heather Monahan</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="speaker-item">
                                                        <div class="speaker-photo" style="background-image: url(../assets/img/speakers/katrina-strohl.png)"></div>
                                                        <p>Katrina Strohl</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="speaker-item">
                                                        <div class="speaker-photo" style="background-image: url(../assets/img/speakers/mark_travis_rivera.png)"></div>
                                                        <p>Mark Travis Rivera</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="speaker-item">
                                                        <div class="speaker-photo" style="background-image: url(../assets/img/speakers/melissa-a-washington.png)"></div>
                                                        <p>Melissa A. Washington</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="speaker-item">
                                                        <div class="speaker-photo" style="background-image: url(../assets/img/speakers/ruth-rathblott.png)"></div>
                                                        <p>Ruth Rathblott</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="speaker-item">
                                                        <div class="speaker-photo" style="background-image: url(../assets/img/speakers/erin-gallagher.png)"></div>
                                                        <p>Erin Gallaghern</p>
                                                    </div>
                                                </div>



                                                <div class="col-md-3">
                                                    <div class="speaker-item">
                                                        <div class="speaker-photo" style="background-image: url(../assets/img/speakers/s39.png)"></div>
                                                        <p>Max Masure</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="speaker-item">
                                                        <div class="speaker-photo" style="background-image: url(../assets/img/speakers/stacie-carroll.png)"></div>
                                                        <p>Sstacie Carroll</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="speaker-item">
                                                        <div class="speaker-photo" style="background-image: url(../assets/img/speakers/thando-hopa.png)"></div>
                                                        <p>Thando Hopa</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="speaker-item">
                                                        <div class="speaker-photo" style="background-image: url(../assets/img/speakers/william-beaman.png)"></div>
                                                        <p>William Beaman</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="speaker-item">
                                                        <div class="speaker-photo" style="background-image: url(../assets/img/speakers/zaheer_ahmad.png)"></div>
                                                        <p>Zaheer Ahmad</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card p-3 draggable-container">
                                            <div class="row g-2 elements-list" id="speakersAdded"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="border-bottom mb-6">
                                <h4 class="mb-3"> Proposal message</h4>
                                <textarea class="tinymce" id="proposal_message" name="proposal_message" data-tinymce='{"height":"15rem","placeholder":"Write a description here..."}'></textarea>
                            </div>
                        </div>

                    </div>
                </form>

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
            <script src="../vendors/tinymce/tinymce.min.js"></script>
            <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
            <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/dragula/3.7.2/dragula.min.js"></script>
            <script src="../js/proposals.js"></script>
        </div>

    </main>
</body>
</html>
