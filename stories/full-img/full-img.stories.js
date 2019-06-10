import { storiesOf } from "@storybook/html";

import "../../resources/assets/styles/main.scss";

import image from "../../resources/assets/images/full-img.png";

storiesOf("Elementy/full-img", module).add(
  "full-img",
  () => `
    <section class="full-img">
      <img class="full-img__bg" src="${image}" alt="background">
    </section>
    <br>
    <br>
    <xmp>
      <section class="full-img">
        <img class="full-img__bg" src="${image}" alt="background">
      </section>
    </xmp>

  `
);
