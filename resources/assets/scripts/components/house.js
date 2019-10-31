var Flickity = require('flickity');
import 'flickity-fade';

const CONFIG = {
  ELEM: '.house-gallery__carousel',
  CELL: '.house-gallery__cell',
};

const Hero = {
  init() {
    const { ELEM, CELL } = CONFIG;
    this.elem = document.querySelectorAll(ELEM);
    console.log('Init house', this.elem);
    if (this.elem) {
      this.elem.forEach(element => {
        this.slider = new Flickity(element, {
          pageDots: true,
          prevNextButtons: false,
          cellSelector: CELL,
          wrapAround: true,
          autoPlay: false,
          fade: true,
        });

        setTimeout(() => {
          this.slider.resize();
        }, 1000);
      });
    }
  },
};

export default Hero;
