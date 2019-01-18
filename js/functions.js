var DivineSlider = (function () {
    function DivineSlider() {
    }
    DivineSlider.prototype.moveSlider = function ($Slide, position) {
        if (position === void 0) { position = null; }
        var count = $Slide.data('items');
        var $parent = $Slide.parent();
        var $children = $Slide.children('.Slide-Item');
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
            var width_1 = $children.outerWidth();
            $Slide.animate({
                left: '-=' + width_1 + 'px'
            }, 500, function () {
                var x = width_1 * count * (-1);
                if ($(this).position().left <= x) {
                    $(this).css('transition', 'none').css('left', '0');
                }
            });
        }
        $Slide.siblings('.Circles').children('.Circle-Item')
            .removeClass('active')
            .eq(currentPosition).addClass('active');
    };
    DivineSlider.prototype.automoveSliders = function () {
        var $sliders = $('.Slide-Container');
        var $this = this;
        return $sliders.map(function (i, elem) {
            var milliseconds = parseInt($sliders.eq(i).data('time')) || 4000;
            return setInterval(function () {
                var $Slide = $(elem).children('.Slide');
                var position = $Slide.data('position') + 1;
                $this.moveSlider($Slide, position);
            }, milliseconds);
        });
    };
    DivineSlider.prototype.showSliders = function () {
        var $slide = $('.Slide-Container');
        $slide.each(function (i, elem) {
            var $thisElem = $(elem);
            var visibles = parseInt($thisElem.data('visible')) || 1;
            var continous = $thisElem.data('continous') || false;
            var $thisSlide = $thisElem.children('.Slide');
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
                    var $circles = $thisElem.children('.Circles');
                    for (var k = 0; k < count; k++) {
                        var active = k == 0 ? 'active' : '';
                        $circles.append('<div class="Circle-Item ' + active + '" data-position="' + (k + 1) + '" ></div>');
                    }
                }
                else {
                    $thisElem.children('.Icon, .Circles').remove();
                }
            }
        });
    };
    return DivineSlider;
}());
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
    var width = $logo.width() / 2;
    var height = $logo.height() / 2;
    $logo.css('margin-top', '-' + height + 'px')
        .css('margin-left', '-' + width + 'px');
    if (!$logo.hasClass('scale')) {
        $logo.addClass('scale');
    }
}
function showModal() {
    var modalBackground = $('.modal-background'), modal = $('.modal'), close = $('#close'), open = $('.openModal');
    open.on('click', function () {
        var url = $(this).data('url');
        var iframe = '<iframe src="' + url + '" width="100%" height="100%" style="border:0" allowfullscreen="" frameborder="0"></iframe>';
        modal.find('iframe').replaceWith(iframe);
        modalBackground.toggleClass('closed');
        modal.toggleClass('closed');
    });
    close.on('click', function () {
        modalBackground.toggleClass('closed');
        modal.toggleClass('closed');
    });
}
//# sourceMappingURL=functions.js.map