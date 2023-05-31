<div class="countdown-area bg-1 ptb-110 bg-opacity bg-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-12 ">
                <section class="about-area pt-100">
                    <div class="">
                        <div class="row">
                            <div class="col-lg-12 mb-60 mrg-btm-about col-md-12">
                                <div class="book-img">
                                    <img alt="#" src="{{ asset('') }}uploads/content/{{ $content->about_image }}">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="about-text">
                                    <h2>Welcome To {{ $content->website_name }}</h2>
                                    <p>{!! $content->about_content !!} </p>


                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-5 col-md-5 col-12">
                <div class="register-from">
                    <div class="register-top">
                        <h3>Fil The Register Form</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicng elit, sed do eiusmod tempor </p>
                    </div>
                    <form action="{{ route('admissions.store') }}" method="POST" class="ordering">
                        @csrf
                        <input class="form-control2" required="" placeholder="Name*" name="reservation_name" type="text">
                        <input class="form-control2" required="" name="reservation_email" placeholder="Email*" type="email">
                        <input class="form-control2" required="" name="reservation_phone" placeholder="phone*" type="phone">
                        <div class="orderby-wrapper">
                            <select name="reservation_course" class="orderby">
                                @foreach ($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->name }}</option>

@endforeach
                            </select>
                        </div>

                        <input cols="30" rows="10" class="form-control2" required="" name="reservation_message" placeholder="message"></input>
                        <div class="sent text-center">
                            <button class="submit" type="submit">
                                submit
                            </button>
                        </div>
                    </form>
                    <img src="{{ asset('') }}assets/web/images/icons/c6.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
