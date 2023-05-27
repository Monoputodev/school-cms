<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-xs-9">
            <section id="home" class="divider">
                <div class="container-fluid p-0">

                    <!-- START REVOLUTION SLIDER 5.0.7 -->
                    <div id="rev_slider_home_wrapper" class="rev_slider_wrapper fullwidthbanner-container"
                        data-alias="news-gallery34"
                        style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
                        <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
                        <div id="rev_slider_home" class="rev_slider fullwidthabanner" style="display:none;"
                            data-version="5.0.7">
                            <ul>
                                @foreach($sliders as $slider)
                                                                  <!-- SLIDE 1 -->
                                <li data-index="rs-1" data-transition="slidingoverlayhorizontal"
                                data-slotamount="default" data-easein="default" data-easeout="default"
                                data-masterspeed="default" data-thumb="{{ asset('/') }}uploads/hero/{{ $slider->image }}" data-rotate="0"
                                data-fstransition="fade" data-fxsasterspeed="1500" data-fsslotamount="7"
                                data-saveperformance="off" data-title="Make an Impact">
                                <!-- MAIN IMAGE -->
                                <img src="{{ asset('/') }}uploads/hero/{{ $slider->image }}" alt=""
                                    data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                    data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0"
                                    id="slide-1-layer-2" data-x="['center','center','center','center']"
                                    data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                                    data-voffset="['200','195','160','150']" data-fontsize="['60','50','40','35']"
                                    data-lineheight="['80','75','70','45']"
                                    data-fontweight="['800','700','700','700']"
                                    data-textalign="['center','center','center','center']"
                                    data-width="['800','650','600','420']" data-height="none"
                                    data-whitespace="normal" data-transform_idle="o:1;"
                                    data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                    data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                    data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000"
                                    data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                    style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;">
                                    <span class="text-theme-colored2">{{ $slider->title }}</span>
                                </div>
                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0"
                                    id="slide-1-layer-3" data-x="['center','center','center','center']"
                                    data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                                    data-voffset="['290','260','220','220']" data-fontsize="['16','16',16',16']"
                                    data-lineheight="['24','24','24','24']"
                                    data-fontweight="['400','400','400','400']"
                                    data-textalign="['center','center','center','center']"
                                    data-width="['800','650','600','460']" data-height="none"
                                    data-whitespace="nowrap" data-transform_idle="o:1;"
                                    data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                    data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                    data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="700"
                                    data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                    style="z-index: 5; white-space: nowrap;">{{ $slider->subtitle }}
                                </div>
                            </li>  
                                @endforeach

                            </ul>
                        </div>
                        <div class="tp-bannertimer tp-bottom"
                            style="height: 5px; background-color: rgba(166, 216, 236, 1.00);"></div>
                    </div>
                </div>
                <!-- END REVOLUTION SLIDER -->
                <script>
                    var tpj = jQuery;
                    var revapi34;
                    tpj(document).ready(function() {
                        if (tpj("#rev_slider_home").revolution == undefined) {
                            revslider_showDoubleJqueryError("#rev_slider_home");
                        } else {
                            revapi34 = tpj("#rev_slider_home").show().revolution({
                                sliderType: "standard",
                                jsFileLocation: "js/revolution-slider/js/",
                                //   sliderLayout:"fullwidth",
                                dottedOverlay: "none",
                                delay: 9000,
                                navigation: {
                                    keyboardNavigation: "on",
                                    keyboard_direction: "horizontal",
                                    mouseScrollNavigation: "off",
                                    onHoverStop: "on",
                                    touch: {
                                        touchenabled: "on",
                                        swipe_threshold: 75,
                                        swipe_min_touches: 1,
                                        swipe_direction: "horizontal",
                                        drag_block_vertical: false
                                    },
                                    arrows: {
                                        style: "zeus",
                                        enable: true,
                                        hide_onmobile: true,
                                        hide_under: 600,
                                        hide_onleave: true,
                                        hide_delay: 200,
                                        hide_delay_mobile: 1200,
                                        tmp: '<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                                        left: {
                                            h_align: "left",
                                            v_align: "center",
                                            h_offset: 30,
                                            v_offset: 0
                                        },
                                        right: {
                                            h_align: "right",
                                            v_align: "center",
                                            h_offset: 30,
                                            v_offset: 0
                                        }
                                    },
                                    bullets: {
                                        enable: true,
                                        hide_onmobile: true,
                                        hide_under: 600,
                                        style: "metis",
                                        hide_onleave: true,
                                        hide_delay: 200,
                                        hide_delay_mobile: 1200,
                                        direction: "horizontal",
                                        h_align: "center",
                                        v_align: "bottom",
                                        h_offset: 0,
                                        v_offset: 30,
                                        space: 5,
                                        tmp: '<span class="tp-bullet-img-wrap"><span class="tp-bullet-image"></span></span>'
                                    }
                                },
                                viewPort: {
                                    enable: true,
                                    outof: "pause",
                                    visible_area: "80%"
                                },
                                responsiveLevels: [1240, 1024, 778, 480],
                                gridwidth: [1240, 1024, 778, 480],
                                gridheight: [750, 550, 500, 450],
                                lazyType: "none",
                                parallax: {
                                    type: "scroll",
                                    origo: "enterpoint",
                                    speed: 400,
                                    levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50],
                                },
                                shadow: 0,
                                spinner: "off",
                                stopLoop: "off",
                                stopAfterLoops: -1,
                                stopAtSlide: -1,
                                shuffle: "off",
                                autoHeight: "off",
                                hideThumbsOnMobile: "off",
                                hideSliderAtLimit: 0,
                                hideCaptionAtLimit: 0,
                                hideAllCaptionAtLilmit: 0,
                                debugMode: false,
                                fallbacks: {
                                    simplifyAll: "off",
                                    nextSlideOnWindowFocus: "off",
                                    disableFocusListener: false,
                                }
                            });
                        }
                    }); /*ready*/
                </script>
                <!-- END REVOLUTION SLIDER -->
            </section>
        </div>

        <div class="col-md-2 col-xs-3">
          
                <img src="{{ asset('/') }}assets/web/images/banner/01.png" alt=""
                    class="img-fluid banner-image mx-auto">
          
        </div>
    </div>


</div>
