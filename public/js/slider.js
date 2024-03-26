var appSLider = {
    sliderMove: function () {
        var n = 1,
            slide = $('.slider-move-item'),
            img = $('.slider-move-list .wrap-block-item'),
            length = slide.length;

        slide.eq(n - 1).removeClass('slider-position-2');
        slide.eq(n - 1).addClass('slider-position-1');

        slide.eq(n).removeClass('slider-position-3');
        slide.eq(n).addClass('slider-position-2');

        slide.eq(n + 1).removeClass('slider-position-1');
        img.eq(n + 1).addClass('img-opacity');
        slide.eq(n + 1).addClass('slider-position-3');

        function move() {
            if(n < length){
                slide.eq(n - 1).removeClass('slider-position-1');
                img.eq(n - 1).addClass('img-opacity');
                slide.eq(n - 1).addClass('slider-position-3');

                slide.eq(n).removeClass('slider-position-2');
                slide.eq(n).addClass('slider-position-1');

                slide.eq(n + 1).removeClass('slider-position-3');
                img.eq(n + 1).removeClass('img-opacity');
                slide.eq(n + 1).addClass('slider-position-2');


                if(n === length - 1){
                    n = n - 1;
                    slide.eq(n - 1).removeClass('slider-position-3');
                    img.eq(n - 1).removeClass('img-opacity');
                    slide.eq(n - 1).addClass('slider-position-2');

                    slide.eq(n).removeClass('slider-position-1');
                    img.eq(n).addClass('img-opacity');
                    slide.eq(n).addClass('slider-position-3');

                    slide.eq(n + 1).removeClass('slider-position-2');
                    slide.eq(n + 1).addClass('slider-position-1');
                    n = 2;
                }

                n = n + 1;
            } else {
                n = 1;
                slide.eq(n - 1).removeClass('slider-position-2');
                slide.eq(n - 1).addClass('slider-position-1');

                slide.eq(n).removeClass('slider-position-3');
                img.eq(n).removeClass('img-opacity');
                slide.eq(n).addClass('slider-position-2');

                slide.eq(n + 1).removeClass('slider-position-1');
                img.eq(n + 1).addClass('img-opacity');
                slide.eq(n + 1).addClass('slider-position-3');
            }
        }
        setInterval(move, 20000);
    },

    sliderFlicker: function () {
        var n = 1,
            slide = $('.slider-flicker-item'),
            opacity = 'slider-opacity',
            length = slide.length;

        function slider() {
            if (n < length) {
                slide.eq(n - 1).removeClass(opacity);
                slide.eq(n).addClass(opacity);
                n = n + 1;
            } else {
                n = 0
                slide.eq(-1).removeClass(opacity);
                slide.eq(n).addClass(opacity);
                n = n + 1;
            }
            return n
        }
        setInterval(slider, 6000);
    },
};

$(window).on('load', function () {
    appSLider.sliderMove();
    appSLider.sliderFlicker();
});
