import { storiesOf } from "@storybook/html";

import "../../resources/assets/styles/main.scss";

import sofa from "../../resources/assets/images/sofa-bg.jpg";

const Avatar = `
<div class="avatar text">
    <img class="avatar__image" src="${sofa}">
    <p class="avatar__name text--bold">
      Pani kanapa
    </p>
    <p>
    <a href="#" class="avatar__link text small-text ">
    tel: +48 500 526 600
    </a>
    <br/>
    <a href="#"  class="avatar__link text small-text ">
    mail: biuro@apartamentyjuno.pl
    </a>
    </p>
</div>`;

storiesOf("Elementy/avatar", module).add(
  "avatar",
  () => `
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

  `
);

export default Avatar;
