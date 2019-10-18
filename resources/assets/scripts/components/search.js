import 'jquery';
import 'jquery-ui';

require('jquery-ui/ui/widgets/slider');

const CONFIG = {
    TRIGGER: '[data-toggle-search]',
    ELEM: '[data-search]',
    CLASS: '-is-active',
    BILDING_BUTTON: '[data-bilding-button]',
    BILDING: '[data-search-bilding]',
    SLIDER: '[data-ui-slider]',
    SLIDER_FROM: (name) => `[data-ui-slider-from="${name}"]`,
    SLIDER_TO: (name) => `[data-ui-slider-to="${name}"]`,
}

const search = {
    init() {
        const { TRIGGER, ELEM, CLASS, BILDING_BUTTON, BILDING, SLIDER, SLIDER_FROM, SLIDER_TO } = CONFIG;
        this.trigger = document.querySelectorAll(TRIGGER);
        this.elem = document.querySelector(ELEM);
        this.bildingButton = document.querySelectorAll(BILDING_BUTTON);
        this.bilding = document.querySelector(BILDING);
        this.uiSlider = SLIDER;
        this.uiSliderFrom = SLIDER_FROM;
        this.uiSliderTo = SLIDER_TO;

        this.class = CLASS;

        this.addEvents();
        this.initSlider();

        console.log('search init');
    },

    addEvents() {
        this.trigger.forEach(element => {
            element.addEventListener('click', e => {
                e.preventDefault();
                this.elem.classList.toggle(this.class);
            })
        });

        this.bildingButton.forEach(element => {
            element.addEventListener('click', e => {
                e.preventDefault();
                const $this = e.currentTarget;
                $this.classList.toggle(this.class);

                this.changeBilding();
            })
        });
    },

    changeBilding() {
        let empty = 1;
        let val = '';

        this.bildingButton.forEach(element => {
            if (element.classList.contains(this.class)) {
                empty = 0;
                const name = element.dataset.bildingButton;
                val += `${name},`;
            }
        });

        if (empty) {
            this.bilding.value = 'all';
        }

        else {
            this.bilding.value = val;
        }

        console.log(this.bilding.value);
    },

    initSlider() {
        const sliderFrom = this.uiSliderFrom;
        const sliderTo = this.uiSliderTo;
        //console.log( $(this.uiSlider).data().uiSlider);
        $(this.uiSlider).slider({
            range: true,
            min: 0,
            create: function () {
                $(this).slider('option', 'max', $(this).data('ui-slider-max'));
                $(this).slider('option', 'min', $(this).data('ui-slider-min'));
                
                let minVal = $(this).data('ui-slider-max') > 10 ? Math.round($(this).data('ui-slider-max') * 0.1) : $(this).data('ui-slider-min') + 1;
                let maxVal = $(this).data('ui-slider-max') > 10 ? Math.round($(this).data('ui-slider-max') * 0.9) : $(this).data('ui-slider-max') - 1;
                
                if(maxVal == minVal) {
                    minVal = $(this).data('ui-slider-min');
                    maxVal = $(this).data('ui-slider-max');
                }

                $(this).slider('option', 'values', [minVal, maxVal]);
                
                $(sliderFrom(this.dataset.uiSlider)).val( minVal + ` ${this.dataset.uiSliderSign}`);
                $(sliderTo(this.dataset.uiSlider)).val( maxVal + ` ${this.dataset.uiSliderSign}`);

                const from = $(this).children('.ui-slider-handle').eq(0);
                const fromInput = $(sliderFrom(this.dataset.uiSlider));
                const to = $(this).children('.ui-slider-handle').eq(1);
                const toInput = $(sliderTo(this.dataset.uiSlider));

                setTimeout(function () {
                    fromInput.css('left', from.css('left'));
                    toInput.css('left', to.css('left'));
                }, 100);
            },
            slide: function (event, ui) {
                $(sliderFrom(this.dataset.uiSlider)).val(ui.values[0] + ` ${this.dataset.uiSliderSign}`);
                $(sliderTo(this.dataset.uiSlider)).val(ui.values[1] + ` ${this.dataset.uiSliderSign}`);

                const from = $(this).children('.ui-slider-handle').eq(0);
                const fromInput = $(sliderFrom(this.dataset.uiSlider));
                const to = $(this).children('.ui-slider-handle').eq(1);
                const toInput = $(sliderTo(this.dataset.uiSlider));

                setTimeout(function () {
                    fromInput.css('left', from.css('left'));
                    toInput.css('left', to.css('left'));
                }, 1);
            },
        });
    },
}

export default search;