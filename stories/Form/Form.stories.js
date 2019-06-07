import { storiesOf } from '@storybook/html';

import '../../resources/assets/styles/main.scss';



const Input = `
<div class="input">
  <label for="name">Name:</label>
  <input type="text" name="name" id="name" placeholder="John Smith" />
</div>`;

  storiesOf('Elementy/Form', module)
    .add('Forms', () => `
    <h2 class="subtitle bold">Input</h2>
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