import { storiesOf } from '@storybook/html';

import '../../resources/assets/styles/main.scss';



const Input = `
<div class="input">
  <p><label for="name">Name:</label></p>
  <input type="text" name="name" id="name" placeholder="John Smith" />
</div>`;

  storiesOf('Elementy/Form', module)
    .add('Input', () => `
    <h2 class="subtitle bold">Input</h2>
    <hr>
    <br>
    <br>
    ${ Input}
    <br>
    <br>
    <xmp>
        ${ Input}
    </xmp>

  `);

export default  Input;