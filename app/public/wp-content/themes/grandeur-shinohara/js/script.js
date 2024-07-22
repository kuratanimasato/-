
window.onload = function() {
	const nav = document.getElementById('nav-wrapper');
	const hamburger = document.getElementById('js-hamburger');
	const blackBg = document.getElementById('js-black-bg');
	hamburger.addEventListener('click', function() {
		nav.classList.toggle('open');
		document.body.classList.toggle('no-scroll');
	});
	blackBg.addEventListener('click', function() {
		nav.classList.remove('open');
		document.body.classList.remove('no-scroll');
	});
};
//scroll
document.addEventListener('DOMContentLoaded', function() {
	const footerBtnWrap = document.querySelector('.footer-btn__wrap');
	const lazyLoadTriggered = false;

	if (footerBtnWrap) {
		if (window.location.href.indexOf('about') === -1) {
			window.addEventListener('scroll', function onScroll() {
				if (!lazyLoadTriggered) {
					footerBtnWrap.classList.add('visible');
					window.removeEventListener('scroll', onScroll);
				}
			});
		}

		window.addEventListener('scroll', function() {
			const scroll = window.pageYOffset || document.documentElement.scrollTop;
			if (scroll + window.innerHeight >= document.body.scrollHeight) {
				footerBtnWrap.classList.add('hidden');
			} else {
				footerBtnWrap.classList.remove('hidden');
			}
		});
	}

	window.addEventListener('load', function() {
		if (footerBtnWrap) {
			if (window.innerWidth <= 768) {
				footerBtnWrap.classList.add('visible');
			}
		}
	});
});

function restoreFooterButtonState() {
	const isHidden = localStorage.getItem('footerButtonHidden');
	const footerBtn = document.querySelector('.footer-btn');
	if (footerBtn && isHidden === 'true') {
		footerBtn.classList.add('hidden');
	}
}

function toggleFooterButton() {
	let scroll = window.pageYOffset || document.documentElement.scrollTop;
	let footerBtn = document.querySelector('.footer-btn');
	if (footerBtn && !footerBtn.classList.contains('permanently-hidden')) {
		if (scroll > 200) {
			footerBtn.classList.remove('hidden');
		} else {
			footerBtn.classList.add('hidden');
		}
	}
}

window.addEventListener('scroll', function() {
	toggleFooterButton();
});

window.addEventListener('load', function() {
	restoreFooterButtonState();
	toggleFooterButton();
	const closeBtn = document.querySelector('.footer-btn .close-btn');
	const footerBtn = document.querySelector('.footer-btn');
	if (closeBtn) {
		closeBtn.addEventListener('click', function() {
			if (footerBtn) {
				footerBtn.classList.add('permanently-hidden');
				footerBtn.classList.add('hidden');
				localStorage.setItem('footerButtonHidden', 'true');
			}
		});
	}
});

//swiper menu
  const swipeOption = {
	loop: true,
	effect: 'fade',
	autoplay: {
		delay: 4000,
		disableOnInteraction: false,
	},
	speed: 2000,
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	}
}

new Swiper('.swiper-container-4', swipeOption);
const mySwiper = new Swiper('.swiper', {
	slidesPerView: 1,
	breakpoints: {
		600: {
			slidesPerView: 2,
			spaceBetween: 20
		},
		1024: {
			slidesPerView: 3,
			spaceBetween: 30
		}
	}
});
//ナビゲーションスクロール
const header = document.querySelector('#header');
let prevY = window.pageYOffset;

window.addEventListener('scroll', () => {
	const currentY = window.pageYOffset;
	if (currentY < prevY) {
		header.classList.remove('hidden');
	} else {
		if (currentY > 0) {
			header.classList.add('hidden');
		}
	}
	prevY = currentY;
});

const element = document.querySelector('.main-navigation__list')

  const scroll = new SmoothScroll('a[href*="#"]', {
            speed: 800,
            speedAsDuration: true
	});

//カーテンアニメーション

document.addEventListener('DOMContentLoaded', function () { 
	const tl = gsap.timeline({ delay: 0.1 });
	const firstBg = document.querySelectorAll(".slide-bg");
	const word = document.querySelectorAll(".slide-title");
	const word2 = document.querySelectorAll(".slide__title-tow");
	tl.to(firstBg, {
    scaleX: 1,
    duration: 0.5,
    ease: Power2.easeOut,
  })
  .to(word, {
    opacity: 1,
    duration: 0.6,
  }, "-=0.1")
  .to(firstBg, {
    scaleX: 0,
    duration: 0.7,
    ease: Power2.easeOut,
	}, "-=0.5");
	const secondBg = document.querySelectorAll(".slide-bg-tow");
	tl.to(secondBg, {
    scaleX: 1,
    duration: 0.7,
    ease: Power2.easeOut,
  })
  .to(word2, {
    opacity: 1,
    duration: 0.6,
  }, "-=0.1")
  .to(secondBg, {
    scaleX: 0,
    duration: 0.7,
    ease: Power2.easeOut,
	},"-=0.7");
});
//アニメーションフェードイン
gsap.registerPlugin(ScrollTrigger);
function fadeInAnimation(selector) {
    gsap.fromTo(selector,
        {
            autoAlpha: 0,
            y: 50
        },
        {
            autoAlpha: 1,
            y: 0,
            duration: 0.8,
						ease: "power2.inOut",
            scrollTrigger: {
								trigger: selector,
                start: "top 80%",
                end: "bottom 20%",
                toggleActions: "play none none none"
            }
			}
	);
	if(window.innerWidth <= 768) {
		gsap.fromTo(selector,
			{
				autoAlpha: 0,
				y: 30
			},
			{
				autoAlpha: 1,
				x: 0,
				duration: 0.3,
				ease: "power2.inOut",
				scrollTrigger: {
					trigger: selector,
					start: "top 80%",
					end: "bottom 20%",
					toggleActions: "play none none none"
				}
			}
		);
	}
}
//適用させるセレクター
document.addEventListener("DOMContentLoaded", function () {
		fadeInAnimation(".access");
	fadeInAnimation(".environment");
	fadeInAnimation(".concept-title");
	fadeInAnimation(".concept-subtitle");
	fadeInAnimation(".concept__text");
	fadeInAnimation(".concept__picture-1");
	fadeInAnimation(".features-title");
	fadeInAnimation(".information-title");
	fadeInAnimation(".information__list");
	fadeInAnimation(".features__box-item");
	fadeInAnimation(".profile");
	fadeInAnimation(".rooms");
	fadeInAnimation(".roomplan");
	fadeInAnimation(".propertyinfo");
	fadeInAnimation(".contact");
	fadeInAnimation(".news");
	fadeInAnimation(".page-404");
	fadeInAnimation(".policy");
});
