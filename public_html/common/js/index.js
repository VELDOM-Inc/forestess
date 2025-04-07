// CSSアニメーションを間隔を空けてループ再生させる処理
function looopAnimation(id, className, delay) {
  var element = document.getElementById(id);
  element.addEventListener("animationend", listener);
  
  function listener(event) {
    event.target.classList.remove(className);
    setTimeout(playAnimation, delay);
  }

  function playAnimation() {
    element.classList.add(className);
  }
}

/* ビジュアルテキスト */
document.addEventListener("DOMContentLoaded", () => {
    const objects = document.querySelectorAll('.anime-up');

    const cb = function(entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('displayed');
                observer.unobserve(entry.target);
            }
        });
    };

    const options = {
        root: null,
        rootMargin: "0px",
        threshold: 0
    };

    const io = new IntersectionObserver(cb, options);

    objects.forEach(object => {
        io.observe(object);
    });
});

const animationTargetElements = document.querySelectorAll(".anime-up");
	for( let i =0; i < animationTargetElements.length; i++ ){
		const targetElement = animationTargetElements[i]
		texts = targetElement.textContent;
		textsArray = [];

		targetElement.textContent = "";


		for(let j =0; j < texts.split("").length; j++){
			textsArray.push('<span><span style="animation-delay: '+ ((j+12) * 0.05) +'s" >' + texts.split("")[j] + '<span></span>')
		}
		for(let k =0; k < textsArray.length; k++){
			targetElement.innerHTML += textsArray[k];
		}
	}
