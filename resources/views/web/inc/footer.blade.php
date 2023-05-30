        <!-- Start footer area -->
        <footer class="footer-area" id="contact">
            <div class="footer-top ptb-110">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="footer-text footer-social">
                                <a href="index.html">
                                    <img alt="" class="logo"
                                        src="{{ asset('') }}uploads/content/{{ $content->website_logo }}">
                                </a>
                                <p>{{ $content->website_description }}</p>
                                <ul>
                                    <li>

                                            <i class="zmdi zmdi-phone"></i>

                                        {{ $content->website_phone }}
                                    </li>
                                    <li>

                                            <i class="zmdi zmdi-globe"></i>
                                            {{ $content->website_email }}

                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14598.96687018524!2d90.44370743967298!3d23.82778181212984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c646a7f89c33%3A0xd632032ce04b6c71!2sInternational%20Convention%20City%20Bashundhara%20(ICCB)!5e0!3m2!1sen!2sbd!4v1685271928197!5m2!1sen!2sbd"
                                style="width: 100%;height:300px;" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="footer-bottom-text ptb-20">
                                <p>
                                    Copyrights © <a href="https://monoputo.com/" target="_blank"> Monoputo </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End footer area -->
