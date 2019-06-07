import { storiesOf } from '@storybook/html';

import '../../resources/assets/styles/main.scss';
import boat from  '../../resources/assets/images/boat.png';

storiesOf('Elementy/header', module)
    .add('Header', () => `
    <h2 class="subtitle">
      Header
    </h2>
    <hr />
    <div class="header">
      <h2 class="header__title title text--center">
        Doskonała lokalizacja
      </h2>
      <h3 class="header__sub subtitle text--center">
        Wysoki standard
      </h3>
    </div>
    <xmp>
      <div class="header">
        <h2 class="header__title title text--center">
          Doskonała lokalizacja
        </h2>
        <h3 class="header__sub subtitle text--center">
          Wysoki standard
        </h3>
      </div>
    </xmp>
    <br><br>
    <h2 class="subtitle">
      Header Special
    </h2>
    <hr />
    <div class="header">
      <img class="header__img" src="${boat}">
      <h2 class="header__title title text--center">
        Doskonała lokalizacja
      </h2>
    </div>
    <xmp>
      <div class="header">
        <img class="header__img" src="${boat}">
        <h2 class="header__title title text--center">
          Doskonała lokalizacja
        </h2>
      </div>
    </xmp>
    <br><br>
    <h2 class="subtitle">
      Header Left
    </h2>
    <hr />
    <div class="header" style="background: #364ea2">
      <h2 class="title header__title--left">
        Dlaczego warto
      </h2>
      <h2 class="header__sub--left subtitle">
        tu zamieszkać?
      </h2>
    </div>
    <xmp>
    <div class="header">
      <h2 class="title header__title--left">
        Dlaczego warto
      </h2>
      <h2 class="header__sub--left subtitle">
        tu zamieszkać?
      </h2>
    </div>
    </xmp>
    <br><br>
    `);
