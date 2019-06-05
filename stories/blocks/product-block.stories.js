import { storiesOf } from '@storybook/html';

import '../../resources/assets/styles/main.scss';

import sofa from '../../resources/assets/images/sofa.jpg'

const productBlock = `
<div class="icon-box">
    <img class="icon-box__icon" src="${sofa}" alt="Sofa">
    <p class="icon-box__dsc text bold"> Lorem ipsum </p>
</div>`;

const IconBoxCenter = `
<div class="icon-box icon-box--center">
    <img class="icon-box__icon" src="${sofa}" alt="Sofa">
    <p class="icon-box__dsc text bold"> Lorem ipsum </p>
</div>`;

storiesOf('Elementy/przyciski', module)
    .add('Button', () => `
    <h2 class="subtitle bold">Product block</h2>
    <hr>
    <br>
    <br>
    ${productBlock}
    <br>
    <br>
    <xmp>
        ${productBlock}
    </xmp>

  `);

  storiesOf('Elementy/przyciski', module)
    .add('icon center', () => `
    <h2 class="subtitle bold">Product block</h2>
    <hr>
    <br>
    <br>
    ${IconBoxCenter}
    <br>
    <br>
    <xmp>
        ${IconBoxCenter}
    </xmp>

  `);

export default productBlock;