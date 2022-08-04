<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website Informasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <section class="h-100 w-100 bg-white" style="box-sizing: border-box; ">
        <style scoped>
            @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

            .header-2-1 .modal-item.modal {
                top: 2rem;
            }

            .header-2-1 .navbar,
            .header-2-1 .hero {
                padding: 3rem 2rem;
            }

            .header-2-1 .navbar-light .navbar-nav .nav-link {
                font: 300 18px/1.5rem Poppins, sans-serif;
                color: #1d1e3c;
                transition: 0.3s;
            }

            .header-2-1 .navbar-light .navbar-nav .nav-link:hover {
                font: 600 18px/1.5rem Poppins, sans-serif;
                color: #1d1e3c;
                transition: 0.3s;
            }

            .header-2-1 .navbar-light .navbar-nav .active>.nav-link,
            .header-2-1 .navbar-light .navbar-nav .nav-link.active,
            .header-2-1 .navbar-light .navbar-nav .nav-link.show,
            .header-2-1 .navbar-light .navbar-nav .show>.nav-link {
                font-weight: 600;
                transition: 0.3s;
            }

            .header-2-1 .navbar-light .navbar-toggler-icon {
                background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(0, 0, 0, 1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
            }

            .header-2-1 .btn:focus,
            .header-2-1 .btn:active {
                outline: none !important;
            }

            .header-2-1 .btn-fill {
                font: 600 18px/normal Poppins, sans-serif;
                background-color: #ff7c57;
                border-radius: 12px;
                padding: 12px 32px;
                transition: 0.3s;
            }

            .header-2-1 .btn-fill:hover {
                --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
                    0 4px 6px -2px rgba(0, 0, 0, 0.05);
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
                    var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
                transition: 0.3s;
            }

            .header-2-1 .btn-no-fill {
                font: 300 18px/1.75rem Poppins, sans-serif;
                color: #1d1e3c;
                padding: 12px 32px;
                transition: 0.3s;
            }

            .header-2-1 .modal-item .modal-dialog .modal-content {
                border-radius: 8px;
            }

            .header-2-1 .responsive li a {
                padding: 1rem;
            }

            .header-2-1 .text-caption {
                font: 600 0.875rem/1.625 Poppins, sans-serif;
                margin-bottom: 2rem;
                color: #ff7c57;
            }

            .header-2-1 .left-column {
                margin-bottom: 2.75rem;
                width: 100%;
            }

            .header-2-1 .right-column {
                width: 100%;
            }

            .header-2-1 .title-text-big {
                font: 600 2.25rem/2.5rem Poppins, sans-serif;
                margin-bottom: 2rem;
                color: #272e35;
            }

            .header-2-1 .btn-try {
                font: 600 1rem/1.5rem Poppins, sans-serif;
                padding: 1rem 1.5rem;
                border-radius: 0.75rem;
                background-color: #ff7c57;
                transition: 0.3s;
            }

            .header-2-1 .btn-try:hover {
                --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
                    0 4px 6px -2px rgba(0, 0, 0, 0.05);
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
                    var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
                transition: 0.3s;
            }

            .header-2-1 .btn-outline {
                font: 400 1rem/1.5rem Poppins, sans-serif;
                border: 1px solid #555b61;
                color: #555b61;
                padding: 1rem 1.5rem;
                border-radius: 0.75rem;
                background-color: transparent;
                transition: 0.3s;
            }

            .header-2-1 .btn-outline:hover {
                border: 1px solid #ff7c57;
                color: #ff7c57;
                transition: 0.3s;
            }

            .header-2-1 .btn-outline:hover div path {
                fill: #ff7c57;
                transition: 0.3s;
            }

            @media (min-width: 576px) {
                .header-2-1 .modal-item .modal-dialog {
                    max-width: 95%;
                    border-radius: 12px;
                }

                .header-2-1 .navbar {
                    padding: 3rem 2rem;
                }

                .header-2-1 .hero {
                    padding: 3rem 2rem 5rem;
                }

                .header-2-1 .title-text-big {
                    font-size: 3rem;
                    line-height: 1.2;
                }
            }

            @media (min-width: 768px) {
                .header-2-1 .navbar {
                    padding: 3rem 4rem;
                }

                .header-2-1 .hero {
                    padding: 3rem 4rem 5rem;
                }

                .header-2-1 .left-column {
                    margin-bottom: 3rem;
                }
            }

            @media (min-width: 992px) {
                .header-2-1 .navbar-expand-lg .navbar-nav .nav-link {
                    padding-right: 1.25rem;
                    padding-left: 1.25rem;
                }

                .header-2-1 .navbar {
                    padding: 3rem 6rem;
                }

                .header-2-1 .hero {
                    padding: 3rem 6rem 5rem;
                }

                .header-2-1 .left-column {
                    width: 50%;
                    margin-bottom: 0;
                }

                .header-2-1 .right-column {
                    width: 50%;
                }

                .header-2-1 .title-text-big {
                    font-size: 3.75rem;
                    line-height: 1.2;
                }

            }
        </style>
        <div class="container-xxl mx-auto p-0  position-relative header-2-1" style="font-family: 'Poppins', sans-serif">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a href="#">
                    <img style="margin-right: 0.75rem" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header2/Header-2-2.png" alt="" />
                </a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="modal" data-bs-target="#targetModal-item">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="modal-item modal fade" id="targetModal-item" tabindex="-1" role="dialog" aria-labelledby="targetModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content bg-white border-0">
                            <div class="modal-header border-0" style="padding: 2rem; padding-bottom: 0">
                                <a class="modal-title" id="targetModalLabel">
                                    <img style="margin-top: 0.5rem" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header2/Header-2-2.png" alt="" />
                                </a>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body" style="padding: 2rem; padding-top: 0; padding-bottom: 0">
                                <ul class="navbar-nav responsive me-auto mt-2 mt-lg-0">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Feature</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="modal-footer border-0 gap-3" style="padding: 2rem; padding-top: 0.75rem">
                                <button class="btn btn-default btn-no-fill">
                                    Log In
                                </button>
                                <button class="btn btn-fill text-white">Try Now</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">About Me</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('skill') ?>">Skill</a>
                        </li>

                    </ul>

                </div>
            </nav>

            <div>
                <div class="mx-auto d-flex flex-lg-row flex-column hero">
                    <!-- Left Column -->
                    <div class="left-column d-flex flex-lg-grow-1 flex-column align-items-lg-start text-lg-start align-items-center text-center">
                        <h1 class="title-text-big">
                            Eko Budiarto<br class="d-lg-block d-none" />
                            Mahasiswa Gunadarma
                        </h1>
                        <div class="d-flex flex-sm-row flex-column align-items-center mx-lg-0 mx-auto justify-content-center gap-3">

                        </div>
                    </div>
                    <!-- Right Column -->

                </div>
            </div>
        </div>
    </section>
    <section class="h-100 w-100 bg-white" style="box-sizing: border-box">
        <style scoped>
            @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

            .content-2-2 .btn:focus,
            .content-2-2 .btn:active {
                outline: none !important;
            }

            .content-2-2 .title-text {
                padding-top: 5rem;
                margin-bottom: 3rem;
            }

            .content-2-2 .text-title {
                font: 600 2.25rem/2.5rem Poppins, sans-serif;
                color: #121212;
                margin-bottom: 0.625rem;
            }

            .content-2-2 .text-caption {
                color: #121212;
                font-weight: 300;
            }

            .content-2-2 .column {
                padding: 2rem 2.25rem;
            }

            .content-2-2 .icon {
                margin-bottom: 1.5rem;
            }

            .content-2-2 .icon-title {
                font: 500 1.5rem/2rem Poppins, sans-serif;
                margin-bottom: 0.625rem;
                color: #121212;
            }

            .content-2-2 .icon-caption {
                font: 400 1rem/1.625 Poppins, sans-serif;
                letter-spacing: 0.025em;
                color: #565656;
            }

            .content-2-2 .card-block {
                padding: 1rem 1rem 5rem;
            }

            .content-2-2 .card {
                padding: 1.75rem;
                background-color: #eef6f4;
                border-radius: 0.75rem;
                border: 1px solid #27c499;
            }

            .content-2-2 .card-title {
                font: 600 1.5rem/2rem Poppins, sans-serif;
                margin-bottom: 0.625rem;
                color: #000000;
            }

            .content-2-2 .card-caption {
                font: 300 1rem/1.5rem Poppins, sans-serif;
                color: #565656;
                letter-spacing: 0.025em;
                margin-bottom: 0;
            }

            .content-2-2 .btn-card {
                font: 700 1rem/1.5rem Poppins, sans-serif;
                background-color: #27c499;
                padding-top: 1rem;
                padding-bottom: 1rem;
                width: 100%;
                border-radius: 0.75rem;
                margin-bottom: 1.25rem;
            }

            .content-2-2 .btn-card:hover {
                --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
                    0 4px 6px -2px rgba(0, 0, 0, 0.05);
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
                    var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }

            .content-2-2 .btn-outline {
                font: 400 1rem/1.5rem Poppins, sans-serif;
                color: #979797;
                border: 1px solid #979797;
                padding-top: 1rem;
                padding-bottom: 1rem;
                width: 100%;
                border-radius: 0.75rem;
            }

            .content-2-2 .btn-outline:hover {
                border: 1px solid #27c499;
                color: #27c499;
            }

            .content-2-2 .card-text {
                padding-top: 1.5rem;
                padding-bottom: 1.5rem;
            }

            .content-2-2 .grid-padding {
                padding: 0rem 1rem 3rem;
            }

            @media (min-width: 576px) {
                .content-2-2 .grid-padding {
                    padding: 0rem 2rem 3rem;
                }

                .content-2-2 .card-block {
                    padding: 3rem 2rem 5rem;
                }
            }

            @media (min-width: 768px) {
                .content-2-2 .grid-padding {
                    padding: 0rem 4rem 3rem;
                }

                .content-2-2 .card-block {
                    padding: 3rem 4rem 5rem;
                }
            }

            @media (min-width: 992px) {
                .content-2-2 .grid-padding {
                    padding: 1rem 6rem 3rem;
                }

                .content-2-2 .card-block {
                    padding: 3rem 6rem 5rem;
                }

                .content-2-2 .column {
                    padding: 0rem 2.25rem;
                }
            }

            @media (min-width: 1200px) {
                .content-2-2 .grid-padding {
                    padding: 1rem 10rem 3rem;
                }

                .content-2-2 .card-block {
                    padding: 3rem 6rem 5rem;
                }

                .content-2-2 .card-btn-space {
                    margin-top: 15px;
                    margin-bottom: 15px;
                }

                .content-2-2 .btn-card,
                .content-2-2 .btn-outline {
                    width: 95%;
                    float: right;
                }
            }

            @media (max-width: 980px) {
                .content-2-2 .card-btn-space {
                    width: 100%;
                }
            }
        </style>
        <div class="content-2-2 container-xxl mx-auto p-0  position-relative" style="font-family: 'Poppins', sans-serif">


            <div class="grid-padding text-center">
                <div class="row">
                    <div class="bg-white pt-5 pb-5 mb-4 px-md-5 px-4" id="about">
                        <div class="row">
                            <div class="col-md-6">
                                <h3>About</h3>
                                <p style="font-size: 14px; text-align: justify;">I am a mobile developer, I like to learn new things, especially in the programming world, and am interested in learning about websites.</p>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-5">
                                <h3>Basic Information</h3>
                                <table style="font-size: 14px;">
                                    <tr>
                                        <th>Address</th>
                                        <td>Jl.H.Samanhudi No 32 cc</td>
                                    </tr>

                                    <tr>
                                        <th>Date of Birth</th>
                                        <td>14 januari, 2000</td>
                                    </tr>

                                    <tr>
                                        <th>Place of Birth</th>
                                        <td>Brebes, Indonesia</td>
                                    </tr>

                                    <tr>
                                        <th>Gender</th>
                                        <td>Male</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <section class="h-100 w-100 bg-white" style="box-sizing: border-box">
        <style>
            @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

            .footer-2-1 .list-space {
                margin-bottom: 1.25rem;
            }

            .footer-2-1 .footer-text-title {
                font: 600 1.5rem Poppins, sans-serif;
                margin-bottom: 1.5rem;
            }

            .footer-2-1 .list-menu {
                color: #c7c7c7;
                text-decoration: none !important;
            }

            .footer-2-1 .list-menu:hover {
                color: #555252;
            }

            .footer-2-1 hr.hr {
                margin: 0;
                border: 0;
                border-top: 1px solid rgba(0, 0, 0, 0.1);
            }

            .footer-2-1 .border-color {
                color: #c7c7c7;
            }

            .footer-2-1 .footer-link {
                color: #c7c7c7;
            }

            .footer-2-1 .footer-link:hover {
                color: #555252;
            }

            .footer-2-1 .social-media-c:hover circle,
            .footer-2-1 .social-media-p:hover path {
                fill: #555252;
            }

            .footer-2-1 .footer-info-space {
                padding-top: 3rem;
            }

            .footer-2-1 .list-footer {
                padding: 5rem 1rem 3rem 1rem;
            }

            .footer-2-1 .info-footer {
                padding: 0 1rem 3rem;
            }

            @media (min-width: 576px) {
                .footer-2-1 .list-footer {
                    padding: 5rem 2rem 3rem 2rem;
                }

                .footer-2-1 .info-footer {
                    padding: 0 2rem 3rem;
                }
            }

            @media (min-width: 768px) {
                .footer-2-1 .list-footer {
                    padding: 5rem 4rem 6rem 4rem;
                }

                .footer-2-1 .info-footer {
                    padding: 0 4rem 3rem;
                }
            }

            @media (min-width: 992px) {
                .footer-2-1 .list-footer {
                    padding: 5rem 6rem 6rem 6rem;
                }

                .footer-2-1 .info-footer {
                    padding: 0 6rem 3rem;
                }
            }
        </style>


    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>