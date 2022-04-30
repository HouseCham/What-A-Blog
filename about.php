<?php require_once 'php/helpers.php'; ?>
<?php require_once 'php/connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Unicons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Main CSS -->
    <link href="css/main.css" rel="stylesheet" />
    <title>About</title>
</head>
<body>
    <!-- NavBar -->
    <?php include_once 'WEB-INF/pages/common/navbar.php' ?>

    <!-- About -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 about__title">
                    About me
                </h1>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-5 pb-4 pb-lg-0">
                        <img src="assets/imgs/me.jpg" alt="" class="img-fluid rounded-circle w-100 about__img">
                    </div>
                    <div class="col-lg-7 div__map">
                        <h3 class="mb-4 about__subtitle">Fullstack Jr Developer</h3>
                        <span class="about__text mb-4">
                        I am a Biomedical Engineering student with 
                        jr experience in web design and app development, 
                        with great motivations to improve my skills and 
                        to produce quality projects.
                        </span>
                        <div class="row mb-3 about__data">
                            <div class="col-sm-6 py-2">
                                <h6 class="about__sub-subtitle">
                                    <i class="uil uil-user about_icon"></i>
                                    <span class="about__subtext">
                                        Ramsés Ramírez Vallejo
                                    </span>
                                </h6>
                            </div>
                            <div class="col-sm-6 py-2">
                                <h6 class="about__sub-subtitle">
                                    <i class="uil uil-phone about_icon"></i>
                                    <span class="about__subtext">
                                        312 133 2750
                                    </span>
                                </h6>
                            </div>
                            <div class="col-sm-6 py-2">
                                <h6 class="about__sub-subtitle">
                                    <i class="uil uil-graduation-cap about_icon"></i>
                                    <span class="about__subtext">
                                        Biomedical Engineer
                                    </span>
                                </h6>
                            </div>
                            <div class="col-sm-6 py-2">
                                <h6 class="about__sub-subtitle">
                                    <i class="uil uil-envelope-alt about_icon"></i>
                                    <span class="about__subtext">
                                        A00344520@tec.mx
                                    </span>
                                </h6>
                            </div>
                        </div>
                        <!-- Personal webpage -->
                        <a href="https://housecham.github.io/Personal-WebPage/" target="blank" class="btn btn-outline-primary mr-4">More about me</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include_once 'WEB-INF/pages/common/footer.php' ?>
    <!-- Main JS -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>