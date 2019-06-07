import { storiesOf } from "@storybook/html";

import "../../resources/assets/styles/main.scss";

import image from "../../resources/assets/images/sofa-bg.jpg";

const Avatar = `
<div class="avatar">
    <img class="avatar__image" src="${image}">
    <p class="avatar__name text text--bold">
      Pani kanapa
    </p>
    <p class="small-text">
      tel:
      <a class="avatar__link small-text" href="#" >
        +48 500 526 600
      </a>
      <br/>
      mail:
      <a class="avatar__link" href="mail:biuro@apartamentyjuno.pl">
        biuro@apartamentyjuno.pl
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
