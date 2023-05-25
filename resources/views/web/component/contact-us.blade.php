<section id="reservation" class="bg-silver-light">
    <div class="container pt-sm-30 pb-sm-50">
        <div class="section-title text-center">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                    <h2 class="mt-0 line-height-1 text-center">Contact <span
                            class="text-theme-colored3">Us</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem temporibus
                        quisquam voluptas natus, provident porro et odio perferendis ipsam, amet sint</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="mt-10 mt-sm-40">
                    <!-- Reservation Form Start-->
                    <form id="reservation_form_new" name="reservation_form" class="reservation-form"
                        method="post"
                        action="https://kodesolution.com/html/2017/edupoints-html/demo/includes/reservation.php"
                        novalidate>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group mb-20">
                                    <input placeholder="Enter Name" name="reservation_name"
                                        required="" class="form-control" aria-required="true"
                                        type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-20">
                                    <input placeholder="Your Email" name="reservation_email"
                                        class="form-control" required="" aria-required="true"
                                        type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-20">
                                    <input placeholder="Phone" name="reservation_phone"
                                        class="form-control" required="" aria-required="true"
                                        type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-20">
                                    <div class="styled-select">
                                        <select id="car_select" name="car_select" class="form-control"
                                            required aria-required="true">
                                            <option value="">- Select Your Categories -</option>
                                            <option value="Toyota">Business</option>
                                            <option value="Jeep">Consulting</option>
                                            <option value="Audi">Finance</option>
                                            <option value="Truck">Professional</option>
                                            <option value="Land Rover">Marketing</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group mb-20">
                                    <textarea class="form-control" name="message" placeholder="Discuss with us about consulting" rows="3"
                                        required></textarea>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group mb-0 mt-0">
                                    <input name="form_botcheck" class="form-control" value=""
                                        type="hidden">
                                    <button type="submit" class="btn btn-default btn-block pt-10 pb-10"
                                        data-loading-text="Please wait...">Submit Now</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- Reservation Form End-->

                    <!-- Reservation Form Validation Start-->
                    <script>
                        $("#reservation_form_new").validate({
                            submitHandler: function(form) {
                                var form_btn = $(form).find('button[type="submit"]');
                                var form_result_div = '#form-result';
                                $(form_result_div).remove();
                                form_btn.before(
                                    '&amp;lt;div id="form-result" class="alert alert-success" role="alert" style="display: none;"&amp;gt;&amp;lt;/div&amp;gt;'
                                );
                                var form_btn_old_msg = form_btn.html();
                                form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                                $(form).ajaxSubmit({
                                    dataType: 'json',
                                    success: function(data) {
                                        if (data.status == 'true') {
                                            $(form).find('.form-control').val('');
                                        }
                                        form_btn.prop('disabled', false).html(form_btn_old_msg);
                                        $(form_result_div).html(data.message).fadeIn('slow');
                                        setTimeout(function() {
                                            $(form_result_div).fadeOut('slow')
                                        }, 6000);
                                    }
                                });
                            }
                        });
                    </script>
                    <!-- Reservation Form Validation Start -->
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-sm-6 col-md-12">
                        <div class="icon-box icon-left iconbox-theme-colored">
                            <a class="icon icon-gray icon-circled icon-border-effect effect-circled icon-sm pull-left flip"
                                href="#">
                                <i class="fa fa-phone-square"></i>
                            </a>
                            <h4 class="icon-box-title mb-5">Call us today!</h4>
                            <p class="text-gray">+(012) 345 6789</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-12">
                        <div class="icon-box icon-left iconbox-theme-colored">
                            <a class="icon icon-gray icon-circled icon-border-effect effect-circled icon-sm pull-left flip"
                                href="#">
                                <i class="fa fa-envelope"></i>
                            </a>
                            <h5 class="icon-box-title mb-5">Mail Us</h5>
                            <p class="text-gray">info@yourdomain.com</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-12">
                        <div class="icon-box icon-left iconbox-theme-colored">
                            <a class="icon icon-gray icon-circled icon-border-effect effect-circled icon-sm pull-left flip"
                                href="#">
                                <i class="fa fa-map-marker"></i>
                            </a>
                            <h4 class="icon-box-title mb-5">Location</h4>
                            <p class="text-gray">Behind Alis Steet, Australia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>