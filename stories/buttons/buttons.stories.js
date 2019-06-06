import { storiesOf } from "@storybook/html";

import "../../resources/assets/styles/main.scss";

const buttonblue = `
<div class="button">
    <a href="#" class="button button-blue text  main text--thin">Lorem ipsum</a>
    
</div>`;
const buttonlight = `
<div class="button">
    <a href="#" class="button button-light text  main text--thin">Lorem ipsum</a>
    
</div>`;

const buttonwhite = `
<div class="button">
    <a href="#" class="button button-white button--secondary text  main text--thin">Lorem ipsum</a>
    
</div>`;

const buttonicon = `
<div class="button">
    <a href="#" class="button button-blue text main text--thin">
    <i class="fa fa-cloud"></i>Lorem ipsum</a>
    
</div>`;

storiesOf("Elementy/przyciski", module).add(
  "buttonforsite",
  () => `
    <h2 class="subtitle bold">Button-primary</h2>
    <hr>
    <br>
    <br>
    ${buttonblue}
    <br>
    <br>
    <xmp>
        ${buttonblue}
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
