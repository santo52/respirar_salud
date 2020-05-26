declare let $ : any;

class DivineSlider{

    constructor(){
        
        var $this = this;
        $(document).ready(function(){
            
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

    public move($Slide : any, position : any = null){

        let count = $Slide.data('items');
        let $parent = $Slide.parents('.Slide-Container');
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

            $Slide.addClass('notransition');
            var width = $children.outerWidth();
            let x = ($children.eq( (count+1) ).position().left - width) * (-1);
            
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
    }

    public automove(){
        var $sliders = $('.Slide-Container');
        var $this = this;
        return $sliders.map(function(i : any, elem : any){
            let milliseconds = parseInt($sliders.eq(i).data('time')) || 4000;
            var interval_id : any;

            $(window).on('load focus mouseover', function(){
                if(!interval_id){
                    interval_id = setInterval(function(){
                        let $Slide = $(elem).find('.Slide');
                        let position = $Slide.data('position') + 1;
                        $this.move($Slide, position);
                    }, milliseconds);
                }
            });
            
            $(window).blur(function() {
                clearInterval(interval_id);
                interval_id = 0;
            });
        });
    }

    public show(){
        var $this = this;
        let $slide = $('.Slide-Container');
    
        $slide.each(function(i : any, elem : any){
            let $thisElem = $(elem);
            let visibles = parseInt($thisElem.data('visible')) || 1;
            let continous = $thisElem.data('continous') || false;
            let $thisSlide = $thisElem.find('.Slide');
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
                    
                    var $circles = $thisElem.find('.Circles');
                    
                    for(var k = 0; k < count; k++){
                        var active = k == 0 ? 'active' : '';
                        $circles.append('<div class="Circle-Item ' + active + '" data-position="' + (k+1) + '" ></div>');
                    }

                    $this.loadIconEvent();
    
                } else {
                    $thisElem.find('.Icon, .Circles').remove();
                }
            }
        });
    }

    public loadIconEvent(){
        var $this = this;
        $('.Slide-Container .Circles .Circle-Item').on('click', function(){
            var $Slide = $(this).parents('.Slide-Container').children('.Slide');
            var position = $(this).data('position');
            $this.move($Slide, position);
        });
    }
}





