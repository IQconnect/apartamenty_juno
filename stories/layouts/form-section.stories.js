import { storiesOf } from "@storybook/html";
import "../../resources/assets/styles/main.scss";
import sectionbg from "../../resources/assets/images/form-section-bg.png";

export const formsection = `
<section class="form-section">
  <img class="form-section__bg" src="${sectionbg}" alt="background">
    <div class="container">
      <div class="form-section__content">
        <div class="form-section__desc">
          <div class="form-section-box">
            <h2 class="section-header card-block__title">
              <span class="title section-header__title--left">
                Potrzebujesz
              </span>
              <span class="section-header__sub--left subtitle ">
                pomocy?
                </span>
            </h2>
            <form id="form" action="mail.php" method="POST">
              <div class="form-section--row">
                <div>
                  <label class="form__label text">Imie i nazwisko</label>
                  <p>
                    <input class="form__input">
                  </p>
                </div>

              </div>
              <div class="form-section--row">
                <div>
                  <label class="form__label text">Mail</label>
                  <p>
                    <input class="form__input">
                  </p>
                </div>
                <div>
                  <label class = "form__label text" > Telefon </label>
                  <p>
                    <input class="form__input">
                  </p>
                </div>
              </div>
              <label class="form__label  text" for="name">
                Wiadomość
              </label>
              <p>
               <textarea class="form__textarea" rows="12" name="textarea" ></textarea>
              </p>

                <div class="form__checkcontainer">
                  <input class="form__check" type="checkbox" name="checkbox">
                  <label class="form__labelcheck small-text form__label--zgoda" for="name">
                    Zapoznałem się z Polityką prywatności serwisu apartamentyjuno.pl oraz wyrażam zgodę na przetwarzanie przez ...Nazwa firmy,  ...adres, udostępnionych przeze mnie danych osobowych na zasadach opisanych w Polityce prywatności dostępnej w Serwisie. Oświadczam, że są mi znane cele przetwarzania danych oraz moje uprawnienia. Niniejsza zgoda może być wycofana w dowolnym czasie poprzez kontakt z Administratorem pod adresem  biuro@apartamentyjuno.pl, bez wpływu na zgodność z prawem przetwarzania, którego dokonano na podstawie zgody przed jej cofnięciem. Więcej informacji dotyczących przetwarzania danych osobowych - Obowiązek Informacyjny.
                  </label>

              </div>
              </br>
              <div class="form-section--row">
              <div>
              <button href="#" class="button button--secondary text  main text--thin">
                Wyślij
              </button>
              </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
`;

storiesOf("Layouts", module).add(
  "Formsection",
  () => `
    <h2 class="subtitle bold">Form section</h2>
    <hr>
      ${formsection}
    <br>
    <br>
    <xmp>
      ${formsection}
    </xmp>

  `
);
