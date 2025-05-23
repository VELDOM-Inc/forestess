(() => {
	var Main = class {
		constructor() {
			this.init()
		}
		init() {
			this.copyText(), this.calculateLoopAnimationSpeed(), this.resizeRefresh()
		}
		resizeRefresh() {
			let target = document.body;
			new ResizeObserver(entries => {
				entries.forEach(entry => {
					this.calculateLoopAnimationSpeed()
				})
			}).observe(target)
		}
		calculateLoopAnimationSpeed() {
			let targets = document.querySelectorAll(".js-tick");
			if (!targets.length) return;
			let distance = window.innerWidth,
				time = window.matchMedia("(min-width: 801px)").matches ? 40 : 40,
				speed = distance / time;
			targets.forEach(target => {
				let tickElems = target.querySelectorAll(".js-tick-item");
				if (!tickElems.length) return;
				let total = tickElems.length - 1;
				tickElems.forEach((el, i) => {
					let elWidth = el.clientWidth,
						elTime = Math.floor(elWidth / speed);
					el.style.setProperty("--tick-duration", `${elTime}s`), el.style.setProperty("--tick-delay", `${elTime/-2}s`), i === total && el.parentNode.classList.remove("no-tick")
				})
			})
		}
		copyText() {
			let targets = document.querySelectorAll(".js-tick");
			targets.length && targets.forEach(target => {
				let tickElems = target.querySelectorAll(".js-tick-item");
				if (!tickElems.length) return;
				let length = 0;
				tickElems.forEach(el => {
					length += el.clientWidth, el.insertAdjacentHTML("afterend", el.outerHTML), length > window.innerWidth
				})
			})
		}
	};
	new Main;
})();

