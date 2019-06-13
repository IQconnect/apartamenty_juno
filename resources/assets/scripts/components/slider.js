var Flickity = require('flickity');

const CONFIG = {
    ELEM : '.gallery',
    CELL : '.gallery__cell',
};

const Slider = {
    init() { 
        const { ELEM, CELL } = CONFIG;
        this.elem = document.querySelector(ELEM);
        if(this.elem) {
            this.slider =  new Flickity( ELEM, {
                pageDots: false,
                prevNextButtons: false,
                cellSelector: CELL,
                wrapAround: true,
                autoPlay: true,
            });
    
            this.slider.resize();
        }
    },

    resize() {
        if(this.elem) {
            this.slider.resize();
        }
    },
};

export default Slider;