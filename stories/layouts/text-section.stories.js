import { storiesOf } from '@storybook/html';

import '../../resources/assets/styles/main.scss';

import sofaBG from '../../resources/assets/images/sofa-bg.jpg';
import productBlock from '../blocks/product-block.stories';

const textSection = `
    ...section
`

storiesOf('Layouts', module)
  .add('Text section', () => `
    <h2 class="subtitle bold">Text section</h2>
    <hr>
    <br>
    <br>
    ${textSection}
    <br>
    <br>
    <xmp>
    ${textSection}
    </xmp>
  `);
