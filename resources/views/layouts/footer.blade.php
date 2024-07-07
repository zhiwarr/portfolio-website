<footer class="ftco-footer ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ">
                    <h2 class="ftco-heading-2 ">Follow me</h2>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate"><a href="{{$user->linkedin_url}}"><span
                                    class="icon-linkedin"></span></a></li>
                        <li class="ftco-animate"><a href="{{$user->fb_url}}"><span class="icon-facebook"></span></a>
                        </li>
                        <li class="ftco-animate"><a href="{{$user->inst_url}}"><span class="icon-instagram"></span></a>
                        </li>
                        <li class="ftco-animate"><a href="{{$user->github_url}}"><span class="icon-github"></span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">Links</h2>
                    <ul class="list-unstyled">
                        <li><a href="/#"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
                        <li><a href="/#about"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
                        <li><a href="/#skills"><span class="icon-long-arrow-right mr-2"></span>Skills</a></li>
                        <li><a href="/#projects"><span class="icon-long-arrow-right mr-2"></span>Projects</a></li>
                        <li><a href="/#courses"><span class="icon-long-arrow-right mr-2"></span>Courses</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">{{ $user->address }}</span>
                            </li>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text">+964 {{ $user->phone
                                        }}</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text">{{
                                        $user->gmail_url }}</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved
                </p>
            </div>
        </div>
    </div>
</footer>