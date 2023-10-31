<section class="cta-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="cta-con">
                        <h3 class="sec-head white" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">
                            Ready to transform your business
                        </h3>
                        <p class="para white" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                            Take control of your company’s finances and manage your payment cards - all from a single account. That's the power of all-in-one finance.
                        </p>
                        <h5 class="white" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">Get the App</h5>
                        <div class="cta-wrap" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                            <a href="">
                                <img src="assets/images/google-play.svg" alt="">
                            </a>
                            <a href="">
                                <img src="assets/images/app-store.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="cta-img">
                        <img src="assets/images/cta-im.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
<footer class="main-footer">
        <div class="container">
        <div class="row">
                <div class="col-lg-4 col-12">
                    <a href="" class="ft-logo">
                        <img src="assets/images/ft-logo.svg" alt="">
                    </a>
                    <p class="para mt-20 mb-20">
                        At Flovation, we’re bringing IoT to the world, making it simpler, smarter and sustainable.
                    </p>
                    <ul class="soc-li">
                        <li>
                            <a href="">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 offset-lg-1 col-6">
                    <h3 class="ft-head">
                        Quick Links
                    </h3>
                    <ul class="ft-list">
                        <li>
                            <a href="">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Pricing
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Services
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Careers
                            </a>
                        </li>
                        <li>
                            <a href="">
                                FAQs
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Products
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-6">
                    <h3 class="ft-head">
                        Other Links
                    </h3>
                    <ul class="ft-list">
                        <li>
                            <a href="">
                                Contact Us
                            </a>
                        </li>
                        <li>
                            <a href="">
                                terms & Conditions
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Privacy Policy
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Disclaimer
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-6">
                    <h3 class="ft-head">
                        Contact Us
                    </h3>
                    <ul class="ft-list">
                        <li>
                            <a href="">
                                Contact Us
                            </a>
                        </li>
                        <li>
                            <a href="">
                                terms & Conditions
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Privacy Policy
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Disclaimer
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="ft-btm">
            <div class="container">
                <p>2023 Copyright Flovation All Rights Reserved</p>
            </div>
        </div>
    </footer>

    <!-- validate cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>


    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- swiper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.4/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="assets/js/form.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput-jquery.min.js"></script>
    <!-- custom js -->


    <script>
       
        $("#phone").intlTelInput({
            initialCountry: "in",
            separateDialCode: true,
            // utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.4/js/utils.js"
        });
        AOS.init();
        $('.menu-btn').click(function () {
            $('.mobile-nav').addClass('active');
        })
        $('.menu-close').click(function () {
            $('.mobile-nav').removeClass('active');
        })
        var bnswiper = new Swiper(".logo-swiper", {
            loop: false,
            autoplay: {
                delay: 5000
            },
            navigation: {
                nextEl: ".c-next",
                prevEl: ".c-prev",
            },
            spaceBetween: 0,
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
            breakpoints: {
                0: {
                    slidesPerView: 2,
                    spaceBetween: 15,
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 15,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 50,
                },
            },
        });
      

        function handleScroll() {
            const sections = document.querySelectorAll('.scroll-sec');
            sections.forEach(section => {
                const top = section.offsetTop - document.querySelector('.main-nav').offsetHeight;
                const bottom = top + section.clientHeight;
                if (window.scrollY >= top && window.scrollY < bottom) {
                    document.querySelectorAll('.vr-nav li').forEach(link => {
                        link.classList.remove('active');
                    });
                    document.querySelector(`.vr-nav a[href="#${section.id}"]`).parentElement.classList.add('active');
                }
            });
        }

        // Call the function on page load
        window.addEventListener('load', handleScroll);

        // Call the function on scroll
        window.addEventListener('scroll', handleScroll);
    </script>
</body>

</html>