<!-- start categoris area -->
<div class="notice-area  ">
    <div class="section-title text-center mb-10 mt-30">
        <h1 class="uppercase">Leatest Notice</h1>
        <div class="separator my mtb-15">
            <i class="icofont icofont-hat-alt"></i>
        </div>
    </div>
    <marquee behavior="scroll" direction="left" class="pt-10 pb-10 bg-dark text-white" scrollamount="5">
        @foreach ($notices as $notice)
        <span style="font-size: 18px"><a href=""> <span class="font-weight-bold text-info ml-10 mr-10" >{{ $notice->created_at->format('d  M Y') }}</span> : {{ $notice->title }}</a> <i class="fas fa-search"></i></span>
        @endforeach
    </marquee>
</div>
<!-- End categoris area -->
