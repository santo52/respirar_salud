var DivineSlider = (function () {
    function DivineSlider() {
        var $this = this;
        $(document).ready(function () {
            $('#divine-slider').rbtSlider({
                height: '100vh',
                'dots': true,
                'arrows': true,
                'auto': 10
            });
            // $('.Slide-Container .Icon').on('click', function(){
            //     var $Slide = $(this).parents('.Slide-Container').children('.Slide');
            //     var position = $Slide.data('position');
            //     $(this).hasClass('left') ? position-- : position++;
            //     $this.move($Slide, position);
            // });
        });
    }
    DivineSlider.prototype.move = function ($Slide, position) {
        if (position === void 0) { position = null; }
        var count = $Slide.data('items');
        var $parent = $Slide.parents('.Slide-Container');
        var $children = $Slide.children('.Slide-Item');
        //let visible = $parent.data('visible') || 1;
        var continous = $parent.data('continous') || false;
        if (continous != true) {
            if (position == 0) {
                position = count;
            }
            else if (position > count) {
                position = 1;
            }
        }
        var currentPosition = (position - 1);
        if (continous == false) {
            $Slide
                .data('position', position)
                .css('left', '-' + (currentPosition * 100) + '%');
            $children.removeClass('active')
                .eq(currentPosition).addClass('active');
        }
        else {
            $Slide.addClass('notransition');
            var width = $children.outerWidth();
            var x = ($children.eq((count + 1)).position().left - width) * (-1);
            if ($Slide.position().left <= x) {
                $Slide.css('left', '0');
            }
            $Slide.animate({
                left: '-=' + width + 'px'
            });
        }
        $parent.find('.Circles').children('.Circle-Item')
            .removeClass('active')
            .eq(currentPosition).addClass('active');
    };
    DivineSlider.prototype.automove = function () {
        var $sliders = $('.Slide-Container');
        var $this = this;
        return $sliders.map(function (i, elem) {
            var milliseconds = parseInt($sliders.eq(i).data('time')) || 4000;
            var interval_id;
            $(window).on('load focus mouseover', function () {
                if (!interval_id) {
                    interval_id = setInterval(function () {
                        var $Slide = $(elem).find('.Slide');
                        var position = $Slide.data('position') + 1;
                        $this.move($Slide, position);
                    }, milliseconds);
                }
            });
            $(window).blur(function () {
                clearInterval(interval_id);
                interval_id = 0;
            });
        });
    };
    DivineSlider.prototype.show = function () {
        var $this = this;
        var $slide = $('.Slide-Container');
        $slide.each(function (i, elem) {
            var $thisElem = $(elem);
            var visibles = parseInt($thisElem.data('visible')) || 1;
            var continous = $thisElem.data('continous') || false;
            var $thisSlide = $thisElem.find('.Slide');
            var $thisSlideItem = $thisSlide.children('.Slide-Item');
            var count = $thisSlideItem.length / visibles;
            if (count == 0) {
                $slide.eq(i).remove();
            }
            else {
                var j = 1;
                var items = Math.ceil(count);
                if (continous == true) {
                    items = $thisSlideItem.length;
                    var mod = count % visibles;
                    if (mod > 0) {
                        var copyHTML = $thisSlide.html();
                        for (; j <= (visibles - mod); j++) {
                            $thisSlide.append(copyHTML);
                        }
                    }
                }
                $thisSlide
                    .css('width', (count * j * 100) + '%')
                    .data('items', items)
                    .data('position', 1)
                    .children('.Slide-Item')
                    .css('width', (100 / (count * j)) + '%')
                    .eq(0).addClass('active');
                if (count > 1) {
                    var $circles = $thisElem.find('.Circles');
                    for (var k = 0; k < count; k++) {
                        var active = k == 0 ? 'active' : '';
                        $circles.append('<div class="Circle-Item ' + active + '" data-position="' + (k + 1) + '" ></div>');
                    }
                    $this.loadIconEvent();
                }
                else {
                    $thisElem.find('.Icon, .Circles').remove();
                }
            }
        });
    };
    DivineSlider.prototype.loadIconEvent = function () {
        var $this = this;
        $('.Slide-Container .Circles .Circle-Item').on('click', function () {
            var $Slide = $(this).parents('.Slide-Container').children('.Slide');
            var position = $(this).data('position');
            $this.move($Slide, position);
        });
    };
    return DivineSlider;
})();
;
$ = jQuery.noConflict();
$.fn.parallax = function (resistance, mouse) {
    var $el = $(this);
    TweenLite.to($el, 0.2, {
        x: -((mouse.clientX - (window.innerWidth / 2)) / resistance),
        y: -((mouse.clientY - (window.innerHeight / 2)) / resistance)
    });
};
$.fn.centerBox = function (type) {
    var $el = $(this);
    if (type == 'horizontal' || type == 'vertical' || type == 'both') {
        $el.css('position', 'absolute');
    }
    if (type == 'horizontal' || type == 'both') {
        var width = $el.width();
        $el.css('left', '50%');
        $el.css('margin-left', '-' + (width / 2) + 'px');
    }
    if (type == 'vertical' || type == 'both') {
        var height = $el.height();
        $el.css('top', '50%');
        $el.css('margin-top', '-' + (height / 2) + 'px');
    }
};
function resizeLogo() {
    var $logo = $('#logo-header');
    // $logo.css('transform: scale(1)')
    // let width = $logo.width() / 2;
    // $logo.css('margin-left', '-' + width + 'px');
    if (!$logo.hasClass('scale')) {
        $logo.addClass('scale');
    }
}
function showModal() {
    var modalBackground = $('.modal-background'), modal = $('.modal'), close = $('#close'), open = $('.openModal');
    // open modal
    open.on('click', function () {
        var url = $(this).data('url');
        var iframe = '<iframe src="' + url + '" width="100%" height="100%" style="border:0" allowfullscreen="" frameborder="0"></iframe>';
        modal.find('iframe').replaceWith(iframe);
        modalBackground.toggleClass('closed');
        modal.toggleClass('closed');
    });
    // cancel;
    close.on('click', function () {
        modalBackground.toggleClass('closed');
        modal.toggleClass('closed');
    });
}
function addHeaderColor() {
    var $Header = $('#Home .Header');
    if ($Header.length && $('body,html').outerWidth() >= 1024) {
        var scroll = $(window).scrollTop();
        var height = $Header.height();
        if (scroll > height && !$Header.hasClass('white')) {
            $Header.addClass('white');
        }
        else if (scroll <= height) {
            $Header.removeClass('white');
        }
    }
    else {
        $Header.removeClass('white');
    }
}
// function changeCallTitle(message : string){
// 	$('#Call').find('.Call-Title').html(message);
// } 
//# sourceMappingURL=functions.js.map