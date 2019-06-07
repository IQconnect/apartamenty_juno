import { storiesOf } from "@storybook/html";

import "../../resources/assets/styles/main.scss";
import phone from '../../resources/assets/images/phone-icon.png'

const buttonprimary = `
<div class="button">
    <a href="#" class="button button--primary text  main text--thin">Lorem ipsum</a>
    
</div>`;
const buttonlight = `
<div class="button">
    <a href="#" class="button button--light text  main text--thin">Lorem ipsum</a>
    
</div>`;

const buttonwhite = `
<div class="button">
    <a href="#" class="button button--white button--secondary text  main text--thin">Lorem ipsum</a>
    
</div>`;

const buttonicon = `
<div class="button">

    <a href="#" class="button button--primary text main text--thin">
    <img class="button__icon"src="${phone}" alt="icon">
    Lorem ipsum</a>
    
</div>`;

storiesOf("Elementy/przyciski", module).add(
  "buttonforsite",
  () => `
    <h2 class="subtitle bold">Button-primary</h2>
    <hr>
    <br>
    <br>
    ${buttonprimary}
    <br>
    <br>
    <xmp>
        ${buttonprimary}
    </xmp>
    <h2 class="subtitle bold">Button-light</h2>
    <hr>
    <br>
    <br>
    ${buttonlight}
    <br>
    <br>
    <xmp>
     ${buttonlight}
    </xmp>
    <h2 class="subtitle bold">Button-white</h2>
    <hr>
    <br>
    <br>
    ${buttonwhite}
    <br>
    <br>
    <xmp>
    ${buttonwhite}
    </xmp>
    <h2 class="subtitle bold">Button-icon</h2>
    <hr>
    <br>
    <br>
    ${buttonicon}
    <br>
    <br>
    <xmp>
    ${buttonicon}
    </xmp>


  `
);

export default buttonprimary;
