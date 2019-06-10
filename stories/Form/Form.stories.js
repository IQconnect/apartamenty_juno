import { storiesOf } from "@storybook/html";

import "../../resources/assets/styles/main.scss";

const Input = `
  <p>
  <label class="input__label text text--thin" for="name">Imie i Nazwisko</label></p>
  <input class="input" type="text" name="name" id="name" placeholder="" />
`;
const Message = `
  <p>
  <label class="input__label text text--thin" for="name">
 Wiadomość</label>
  </p>
  <input class="input input__message" type="text" name="name" id="name" placeholder="" />
`;

storiesOf("Elementy/Form", module).add(
  "Input",
  () => `
    <h2 class="subtitle bold">Input</h2>
    <hr>
    <br>
    <br>
    ${Input}
    <br>
    <br>
    <xmp>
    ${Input}
    </xmp>
    <h2 class="subtitle bold">Message</h2>
    <hr>
    <br>
    <br>
    ${Message}
    <br>
    <br>
    <xmp>
    ${Message}
    </xmp>

  `
);

export default Input;
