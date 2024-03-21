<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2T Hotel - CONTACT</title>
    <?php require ('inc/links.php'); ?>
    <style>
        .pop:hover {
            border-top-color: var(--teal) !important;
            transform: scale(1.03);
            transition: all 0.3s;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        @media screen and (max-width: 575px) {
            .availability-form {
                margin: 25px;
                padding: 0 35px;
            }
        }
    </style>
</head>

<body class="bg-light">
    <?php require ('inc/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">CONTACT US</h2>
        <div class="h-line bg-dark"></div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum quae tempora placeat commodi nulla ipsam
            laborum quo <br> rerum autem nobis dolorum delectus at porro iste, odio rem? Ipsa, eos!</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">

                <div class="bg-white rounded shadow p-4 ">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1387.4586037672818!2d107.14647667339156!3d10.395697334627467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31756fd4554f0cf5%3A0xb24fd23bf641fa40!2zVsWpbmcgVMOgdSwgQsOgIFLhu4thIC0gVsWpbmcgVMOgdSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1710661690680!5m2!1svi!2s"
                        class="w-100 rounded rounded mb-4" height="320px" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                    <h5>Address</h5>
                    <a href="https://maps.app.goo.gl/21SFMe4NnyXLEMTh8" target="_blank"
                        class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-geo-alt-fill"></i> XYZ, Vũng Tàu...
                    </a>

                    <h5 class="mt-4">Call us</h5>
                    <a href="tel: +84398897449" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i>+84398897449
                    </a>

                    <br>
                    <a href="tel: +84902034018" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i>+84902034018
                    </a>

                    <h5 class="mt-4 ">Email</h5>
                    <a href="gmail: phannhattruong8291@gmail.com"
                        class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-envelope-fill"></i>phannhattruong8291@gmail.com
                    </a>

                    <h5 class="mt-4">Follow us</h5>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-youtube"></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5 ">
                        <i class="bi bi-instagram"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 ">
                    <form>
                        <h5>Send a message</h5>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Name</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Email</label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Subject</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Message</label>
                            <textarea class="form-control shadow-none" rows="1" style="resize: none;"></textarea>
                        </div>
                        <button type="submit" class="btn text-white custom-bg mt-3">SEND</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php require ('inc/footer.php'); ?>




    <!-- <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script> -->
    <!-- <script>
    var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        }
    });
    var swiper = new Swiper(".swiper-testimonials", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        slidesPerView: "3",
        loop: true,
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: false,
        },
        pagination: {
            el: ".swiper-pagination",
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
            },
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        }
    });
    </script> -->
</body>

</html>