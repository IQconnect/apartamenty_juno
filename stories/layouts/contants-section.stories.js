import { storiesOf } from "@storybook/html";

import "../../resources/assets/styles/main.scss";
import { avatarsection } from "./avatar-section.stories";
import { formsection } from "./form-section.stories";

const contactsection = `
<section class="contact-section">

		<div class="contact-section__boxes">

	${avatarsection}
	${formsection}

	</div>
	</div>
</section>
`;

storiesOf("Layouts", module).add(
  "Contact-section",
  () => `
	  <h2 class="subtitle bold">Contact-section</h2>
	  <hr>
		${contactsection}
	  <br>
	  <br>
	  <xmp>
		${contactsection}
	  </xmp>
	`
);
