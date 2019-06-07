import { storiesOf } from '@storybook/html';

import '../../resources/assets/styles/main.scss';

import sofa from '../../resources/assets/images/sofa-bg.jpg'

const Avatar = `
<div class="avatar">
    <img src="${sofa}" class="avatar--image--cover">
    <p class="avatar--name text main text--thin text--left"> Pani kanapa</p>
   <br/>
    <p class=" text small-text ">tel: +48 500 526 600</p>
    <p class=" text small-text ">mail: biuro@apartamentyjuno.pl</p>
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