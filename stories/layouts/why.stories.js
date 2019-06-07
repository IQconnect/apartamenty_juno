import { storiesOf } from '@storybook/html';

import '../../resources/assets/styles/main.scss';
import sectionbg from '../../resources/assets/images/info-section-bg.png';
import iconbox from '../../resources/assets/images/icon-box.png';

storiesOf('Layouts', module)
  .add('Why', () => `
    <h2 class="subtitle bold">Why section</h2>
    <hr>
    <section class="info-section">
      <img class="info-section__bg" src="${sectionbg}" alt="background">

      <div class="info-section__content">
        <div class="info-section__boxes">
          <div class="icon-box">
            <h3 class="text text--light">
              Rodzinnie i komfortowo
            </h3>
            <div>
              <img class="icon-box__icon" src="${iconbox}" alt="icon">
            </div>
            <hr class="icon-box__hr">
            <h3 class="text text--light">
            Rodzina, komfort, <br>
            bezpieczeństwo
            </h3>
            <p class="small-text icon-box__desc">
            Nasze apartamenty na Osiedlu Juno są doskonałą propozycją dla rodzin, turystów marzących o mieszkaniu na Mazurach, a także dla ludzi, którzy cenią sobie komfort. 
            </p>  
          </div>
          <div class="icon-box">
            <h3 class="text text--light">
              Rodzinnie i komfortowo
            </h3>
            <div>
              <img class="icon-box__icon" src="${iconbox}" alt="icon">
            </div>
            <hr class="icon-box__hr">
            <h3 class="text text--light">
            Rodzina, komfort, <br>
            bezpieczeństwo
            </h3>
            <p class="small-text icon-box__desc">
            Nasze apartamenty na Osiedlu Juno są doskonałą propozycją dla rodzin, turystów marzących o mieszkaniu na Mazurach, a także dla ludzi, którzy cenią sobie komfort. 
            </p>  
          </div>
          <div class="icon-box">
            <h3 class="text text--light">
              Rodzinnie i komfortowo
            </h3>
            <div>
              <img class="icon-box__icon" src="${iconbox}" alt="icon">
            </div>
            <hr class="icon-box__hr">
            <h3 class="text text--light">
            Rodzina, komfort, <br>
            bezpieczeństwo
            </h3>
            <p class="small-text icon-box__desc">
            Nasze apartamenty na Osiedlu Juno są doskonałą propozycją dla rodzin, turystów marzących o mieszkaniu na Mazurach, a także dla ludzi, którzy cenią sobie komfort. 
            </p>  
          </div>
        </div>
        <div class="info-section__desc">
          opisik
        </div>
      </div>
    </section>
    <br>
    <br>
    <xmp>
    </xmp>

  `);
