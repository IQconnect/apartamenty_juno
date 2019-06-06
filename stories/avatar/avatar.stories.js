import { storiesOf } from '@storybook/html';

import '../../resources/assets/styles/main.scss';

import sofa from '../../resources/assets/images/sofa-bg.jpg'

const Avatar = `
<div class="avatar">
    <img src="${sofa}" class="avatar--image--cover">
    <p class="avatar--center text bold"> Lorem ipsum </p>
    <br/>
    <p class="avatar--center text bold"> number </p>
    <p class="avatar--center text bold"> mail </p>
</div>`;


  storiesOf('Elementy/avatar', module)
    .add('avatar', () => `
    <h2 class="subtitle bold">Avatar</h2>
    <hr>
    <br>
    <br>
    ${Avatar}
    <br>
    <br>
    <xmp>
        ${Avatar}
    </xmp>

  `);

export default Avatar;