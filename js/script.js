// ===============================
const lenis = new Lenis()

lenis.on('scroll', ScrollTrigger.update)

gsap.ticker.add((time) => {
    lenis.raf(time * 1000)
})

gsap.ticker.lagSmoothing(0)
/*======================= SHOW MENU ======================*/
const navMenu = document.getElementById('nav-menu'),
      navToggle = document.getElementById('nav-menu-icon'),
      navClose = document.getElementById('nav-close')

//buat munculin menu
if(navToggle){
    navToggle.addEventListener('click', () =>{
        navMenu.classList.add('max-lg:left-0')
    })
}

//buat close menu
if(navClose){
    navClose.addEventListener('click', () =>{
        navMenu.classList.remove('max-lg:left-0')
    })
}

/*================ REMOVE MENU MOBILE ====================*/
const navLink = document.querySelectorAll('.nav_link')

const linkAction = () =>{
    const navMenu = document.getElementById('nav-menu')
    // kalo di klik salah satu opsinya, menunya ilang
    navMenu.classList.remove('max-lg:left-0')
}
navLink.forEach(n => n.addEventListener('click', linkAction))

// ======================= SHOW CARD ===========================
const cardLogin = document.getElementById('card-login')
const userIcon = document.getElementById('user')

if(userIcon){
    userIcon.addEventListener('click', toggleCardLogin)
}

function toggleCardLogin(){
    cardLogin.classList.toggle('lg:hidden')
}

// =======================================================
const typed = new Typed('.multiple-text', {
    strings: ['Easily', 'Quickly', 'Perfectly', 'Smoothly'],
    typeSpeed: 100,
    backSpeed: 100,
    backDelay: 1000,
    loop: true
})

// const parallaxWrapper = document.querySelector('#parallax-wrapper')
// const parallaxElement = parallaxWrapper.querySelectorAll('#parallax')

// const tl = gsap.timeline({
// 	scrollTrigger: {
// 		trigger: parallaxWrapper,
// 		start: 'top top',
// 		scrub: true
// 	}
// })

// parallaxElement.forEach(bg => {
// 	const bgSpeed = bg.getAttribute('data-speed')

// 	tl.to(bg, {
// 		//jarak speed 
// 		y: 45 * bgSpeed,
// 		duration: 2
// 	}, 0)
// })
