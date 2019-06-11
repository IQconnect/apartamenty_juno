import { storiesOf } from '@storybook/html';

import '../../resources/assets/styles/main.scss';
import bg from '../../resources/assets/images/footer.png';
import logo from '../../resources/assets/images/footer-logo.png';

const footer = `
<footer class="footer overlay">
  <img class="footer__bg" src="${bg}" alt="background">
  <div class="footer__content">
    <img class="footer__logo" src="${logo}" alt="logo">
  </div>
</footer>
`;

storiesOf('Layouts', module)
    .add('Footer', () => `
    <h2 class="subtitle bold">Footer</h2>
    <hr>
    <br>
    <br>
    ${footer}
    <br>
    <br>
    <xmp>
    ${footer}
    </xmp>
  `);
