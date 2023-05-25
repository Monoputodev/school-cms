<section class="divider parallax layer-overlay overlay-dark-8 text-center"
data-bg-img="{{ asset('/') }}assets/web/images/bg/bg5.jpg" data-parallax-ratio="0.7">
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h2 class="mt-0 text-white">Unlimited Support &amp; Easily Customizable</h2>
            <h4 class="text-white">Subscribe to Connect with us</h4>

            <!-- Mailchimp Subscription Form-->
            <form id="mailchimp-subscription-form3" class="newsletter-form mt-30">
                <label for="mce-EMAIL"></label>
                <div class="input-group">
                    <input type="email" id="mce-EMAIL" data-height="50px"
                        class="form-control input-lg" placeholder="Your Email" name="EMAIL"
                        value="">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-colored btn-theme-colored btn-lg m-0"
                            data-height="50px"><i class="fa fa-paper-plane-o font-20"
                                aria-hidden="true"></i>
                        </button>
                    </span>
                </div>
            </form>

            <!-- Mailchimp Subscription Form Validation-->
            <script>
                $('#mailchimp-subscription-form3').ajaxChimp({
                    callback: mailChimpCallBack,
                    url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
                });

                function mailChimpCallBack(resp) {
                    // Hide any previous response text
                    var $mailchimpform = $('#mailchimp-subscription-form3'),
                        $response = '';
                    $mailchimpform.children(".alert").remove();
                    if (resp.result === 'success') {
                        $response =
                            '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                            resp.msg + '</div>';
                    } else if (resp.result === 'error') {
                        $response =
                            '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                            resp.msg + '</div>';
                    }
                    $mailchimpform.prepend($response);
                }
            </script>
        </div>
    </div>
</div>
</section>