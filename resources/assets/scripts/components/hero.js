var Flickity = require('flickity');
import 'flickity-fade';

const CONFIG = {
    ELEM: '.hero__carousel',
    CELL: '.hero__cell',
};

const Hero = {
    init() {
        const { ELEM, CELL } = CONFIG;
        this.elem = document.querySelectorAll(ELEM);
        console.log('Init hero', this.elem)
        if (this.elem) {
            this.elem.forEach(element => {
                this.slider = new Flickity(element, {
                    pageDots: false,
                    prevNextButtons: false,
                    cellSelector: CELL,
                    wrapAround: true,
                    autoPlay: 3000,
                    fade: true,
                });

                setTimeout(()=> {
                    this.slider.resize();
                }, 1000)
            });
        }
    },
};

export default Hero;