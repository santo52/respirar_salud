declare let $ : any;

class DivineSlider{

    public move($Slide : any, position : any = null){
        console.log('move');
        let count = $Slide.data('items');
        let $parent = $Slide.parent();
        let $children = $Slide.children('.Slide-Item');
        //let visible = $parent.data('visible') || 1;
        let continous = $parent.data('continous') || false;
        
        if(continous!=true){
            if(position == 0){
                position = count;
            } else if(position > count) {
                position = 1;
            }
        }
    
        let currentPosition = (position-1);
    
        if(continous==false){
            $Slide
            .data('position', position)
            .css('left', '-' + (currentPosition * 100) + '%');
    
            $children.removeClass('active')
            .eq(currentPosition).addClass('active');
    
        } else {
    
            let width = $children.outerWidth();
            $Slide.animate({
                left: '-=' + width + 'px'
            }, 500, function() {
                let x = width * count * (-1);
                if($(this).position().left <= x){
                    $(this).css('transition', 'none').css('left', '0');
                }
            });
        }
    
        
        $Slide.siblings('.Circles').children('.Circle-Item')
        .removeClass('active')
        .eq(currentPosition).addClass('active');
    }

    public automove(){
        var $sliders = $('.Slide-Container');
        var $this = this;
        return $sliders.map(function(i : any, elem : any){
            let milliseconds = parseInt($sliders.eq(i).data('time')) || 4000;
            
            return setInterval(function(){
                let $Slide = $(elem).children('.Slide');
                let position = $Slide.data('position') + 1;
                $this.move($Slide, position);
            }, milliseconds);
        });
    }

    public show(){
        let $slide = $('.Slide-Container');
    
        $slide.each(function(i : any, elem : any){
            let $thisElem = $(elem);
            let visibles = parseInt($thisElem.data('visible')) || 1;
            let continous = $thisElem.data('continous') || false;
            let $thisSlide = $thisElem.children('.Slide');
            let $thisSlideItem = $thisSlide.children('.Slide-Item');
            let count = $thisSlideItem.length / visibles;
    
            if(count == 0){
                $slide.eq(i).remove();
            } else {
    
                var j = 1;
                var items = Math.ceil(count);
                if(continous == true){
                    items = $thisSlideItem.length;
                    let mod = count % visibles;
                    if(mod > 0){
                        let copyHTML = $thisSlide.html();
                        for(; j <= (visibles - mod); j++){
                            $thisSlide.append(copyHTML);
                        }
                    }
                }
    
                
                $thisSlide	
                .css('width', (count * j * 100) + '%')
                .data('items', items)
                .data('position', 1)
                .children('.Slide-Item')
                .css('width', (100 / (count * j) ) + '%')
                .eq(0).addClass('active');
    
                if(count > 1 ){
                    
                    var $circles = $thisElem.children('.Circles');
                    for(var k = 0; k < count; k++){
                        var active = k == 0 ? 'active' : '';
                        $circles.append('<div class="Circle-Item ' + active + '" data-position="' + (k+1) + '" ></div>');
                    }
    
                } else {
                    $thisElem.children('.Icon, .Circles').remove();
                }
            }
        });
    }

    
}