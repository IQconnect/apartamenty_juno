import { storiesOf } from '@storybook/html';

import '../../resources/assets/styles/main.scss';

import sofa from '../../resources/assets/images/sofa.jpg'

const productBlock = `
<button class="button">
    Hello
</button>`;

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

export default productBlock;