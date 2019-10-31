const CONFIG = {
  CELL: '[nav-cell]',
  CLASS: 'navigation__cell--active',
};

const active = {
	init() {
		const { CELL } = CONFIG;
		this.$cell = document.querySelectorAll(CELL);
		this.current = window.location.href;

		this.addEvent();
	},


	addEvent() {
		const { CLASS } = CONFIG;

		this.$cell.forEach(element => {
			const adres = element.href;
			if(this.current == adres){
				element.classList.add(CLASS);
			}
		});
	},
}

export default active;
