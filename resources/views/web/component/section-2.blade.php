
<div class="notice-area">

    <marquee behavior="scroll" direction="left" class="pt-10 pb-10" scrollamount="5">
        @foreach ($notices as $notice)
        <span style="font-size: 18px"><a href=""> <span class="font-weight-bold text-info ml-10 mr-10" >{{ $notice->created_at->format('d  M Y') }}</span> : {{ $notice->title }}</a></span>
        @endforeach
    </marquee>

</div>

