<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <link href="{{ asset('images/favicon.png') }}" rel="icon"/>
    <title>Ahmed M. Ibrahim</title>
    <meta name="description" content="">
    @include('layout.links')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
</head>

<body>

<!-- Preloader -->
<div class="preloader preloader-dark">
    <div class="lds-ellipsis">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>

<div class="bg-dark-1" style="padding-bottom: 5%;">

    <a href="{{ url('portfolio') }}"
       style="font-size: 34px;margin-left: 1%;margin-top: 1%;display: inline-block;color: #20c997;">
        <i class="fas fa-arrow-circle-left"></i>
    </a>

    <div class="container px-lg-5" style="min-height: 100vh;text-align: center;margin-top: 5%;">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">

                <div class="slider-for">
                    @foreach($details as $detail)
                        <a href="{{ asset('images/projects/' . $detail->pic_one) }}" class="item-slick">
                            <img src="{{ asset('images/projects/' . $detail->pic_one) }}" alt="{{ $detail->title }}">
                        </a>
                        <a href="{{ asset('images/projects/' . $detail->pic_two) }}" class="item-slick">
                            <img src="{{ asset('images/projects/' . $detail->pic_two) }}" alt="{{ $detail->title }}">
                        </a>
                        <a href="{{ asset('images/projects/' . $detail->pic_three) }}" class="item-slick">
                            <img src="{{ asset('images/projects/' . $detail->pic_three) }}" alt="{{ $detail->title }}">
                        </a>
                        <a href="{{ asset('images/projects/' . $detail->pic_four) }}" class="item-slick">
                            <img src="{{ asset('images/projects/' . $detail->pic_four) }}" alt="{{ $detail->title }}">
                        </a>
                        <a href="{{ asset('images/projects/' . $detail->pic_five) }}" class="item-slick">
                            <img src="{{ asset('images/projects/' . $detail->pic_five) }}" alt="{{ $detail->title }}">
                        </a>
                    @endforeach
                </div>
                <div class="slider-nav">
                    @foreach($details as $detail)
                        <div class="item-slick">
                            <img src="{{ asset('images/projects/' . $detail->pic_one) }}" alt="{{ $detail->title }}">
                        </div>
                        <div class="item-slick">
                            <img src="{{ asset('images/projects/' . $detail->pic_two) }}" alt="{{ $detail->title }}">
                        </div>
                        <div class="item-slick">
                            <img src="{{ asset('images/projects/' . $detail->pic_three) }}" alt="{{ $detail->title }}">
                        </div>
                        <div class="item-slick">
                            <img src="{{ asset('images/projects/' . $detail->pic_four) }}" alt="{{ $detail->title }}">
                        </div>
                        <div class="item-slick">
                            <img src="{{ asset('images/projects/' . $detail->pic_five) }}" alt="{{ $detail->title }}">
                        </div>
                    @endforeach
                </div>
                <div class="prev" style="right: 100%;color: #20c997;"><i class="fas fa-arrow-alt-left"></i></div>
                <div class="next" style="left: 100%;color: #20c997;"><i class="fas fa-arrow-alt-right"></i></div>
            </div>
        </div>
        <h3 style="color: white;text-align: left;font-size: 26px;font-weight: bold;">{{ $detail->title }}</h3>
        <p style="color: white;text-align: left;font-size: 16px;">{{ $detail->description }}</p>
        <a href="{{ $detail->url }}" class="btn btn-primary rounded-pill smooth-scroll"
           style="width: 150px;padding: 10px;margin-top: 5%;">
            Live Preview
        </a>
    </div>
</div>
@include('layout.scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script>
    $(function () {
// Card's slider
        var $carousel = $('.slider-for');

        $carousel
            .slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                adaptiveHeight: true,
                asNavFor: '.slider-nav'
            })
            .magnificPopup({
                type: 'image',
                delegate: 'a:not(.slick-cloned)',
                closeOnContentClick: false,
                tLoading: 'Загрузка...',
                mainClass: 'mfp-zoom-in mfp-img-mobile',
                image: {
                    verticalFit: true,
                    tError: '<a href="%url%">Фото #%curr%</a> не загрузилось.'
                },
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    tCounter: '<span class="mfp-counter">%curr% из %total%</span>', // markup of counte
                    preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
                },
                zoom: {
                    enabled: true,
                    duration: 300
                },
                removalDelay: 300, //delay removal by X to allow out-animation
                callbacks: {
                    open: function () {
                        //overwrite default prev + next function. Add timeout for css3 crossfade animation
                        $.magnificPopup.instance.next = function () {
                            var self = this;
                            self.wrap.removeClass('mfp-image-loaded');
                            setTimeout(function () {
                                $.magnificPopup.proto.next.call(self);
                            }, 120);
                        };
                        $.magnificPopup.instance.prev = function () {
                            var self = this;
                            self.wrap.removeClass('mfp-image-loaded');
                            setTimeout(function () {
                                $.magnificPopup.proto.prev.call(self);
                            }, 120);
                        };
                        var current = $carousel.slick('slickCurrentSlide');
                        $carousel.magnificPopup('goTo', current);
                    },
                    imageLoadComplete: function () {
                        var self = this;
                        setTimeout(function () {
                            self.wrap.addClass('mfp-image-loaded');
                        }, 16);
                    },
                    beforeClose: function () {
                        $carousel.slick('slickGoTo', parseInt(this.index));
                    }
                }
            });
        $('.slider-nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: false,
            centerMode: false,
            focusOnSelect: true,
            variableWidth: true,
            prevArrow: $('.prev'),
            nextArrow: $('.next'),
        });
    });
</script>
</body>
</html>
