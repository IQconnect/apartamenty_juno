import { storiesOf } from '@storybook/html';

import '../../resources/assets/styles/main.scss';

const buttonprimary = `
<div class="button">
    <a href="#" class="button button-special">Lorem ipsum</a>
    
</div>`;
const buttonlight = `
<div class="button">
    <a href="#" class="button button-light">Lorem ipsum</a>
    
</div>`;

const buttondark = `
<div class="button">
    <a href="#" class="button button-dark">Lorem ipsum</a>
    
</div>`;






storiesOf('Elementy/przyciski', module)
    .add('button', () => `
    <h2 class="subtitle bold">Button-primary</h2>
    <hr>
    <br>
    <br>
    ${ buttonprimary}
    <br>
    <br>
    <xmp>
        ${ buttonprimary}
    </xmp>
    <h2 class="subtitle bold">Button-light</h2>
    <hr>
    <br>
    <br>
    ${ buttonlight}
    <br>
    <br>
    <xmp>
        ${ buttonlight}
    </xmp>
    <h2 class="subtitle bold">Button-dark</h2>
    <hr>
    <br>
    <br>
    ${ buttondark}
    <br>
    <br>
    <xmp>
        ${ buttondark}
    </xmp>


  `);



export default  buttonprimary;