/ Other important pens.
// Map: https://codepen.io/themustafaomar/pen/ZEGJeZq
// Dashboard: https://codepen.io/themustafaomar/pen/jLMPKm

let dropdowns = document.querySelectorAll('.navbar .dropdown-toggler')
let dropdownIsOpen = false

// Handle dropdown menues
if (dropdowns.length) {
    // Usually I don't recommend doing this (adding many event listeners to elements have the same handler)
    // Instead use event delegation: https://javascript.info/event-delegation
    // Why: https://gomakethings.com/why-event-delegation-is-a-better-way-to-listen-for-events-in-vanilla-js
    // But since we only have two dropdowns, no problem with that.
    dropdowns.forEach((dropdown) => {
        dropdown.addEventListener('click', (event) => {
            let target = document.querySelector(`#${event.target.dataset.dropdown}`)

            if (target) {
                if (target.classList.contains('show')) {
                    target.classList.remove('show')
                    dropdownIsOpen = false
                } else {
                    target.classList.add('show')
                    dropdownIsOpen = true
                }
            }
        })
    })
}

// Handle closing dropdowns if a user clicked the body
window.addEventListener('mouseup', (event) => {
    if (dropdownIsOpen) {
        dropdowns.forEach((dropdownButton) => {
            let dropdown = document.querySelector(`#${dropdownButton.dataset.dropdown}`)
            let targetIsDropdown = dropdown == event.target

            if (dropdownButton == event.target) {
                return
            }

            if ((!targetIsDropdown) && (!dropdown.contains(event.target))) {
                dropdown.classList.remove('show')
            }
        })
    }
})

// Open links in mobiles
function handleSmallScreens() {
    document.querySelector('.navbar-toggler')
        .addEventListener('click', () => {
            let navbarMenu = document.querySelector('.navbar-menu')

            if (!navbarMenu.classList.contains('active')) {
                navbarMenu.classList.add('active')
            } else {
                navbarMenu.classList.remove('active')
            }
        })
}

//Part Nath

/*==================== MENU SHOW Y HIDDEN ====================*/
const navMenu = document.getElementById('nav-menu'),
    navToggle = document.getElementById('nav-toggle'),
    navClose = document.getElementById('nav-close')


/*===== MENU SHOW =====*/
/* Validate if constant exists */
if (navToggle) {
    navToggle.addEventListener('click', () => {
        navMenu.classList.add('show-menu')
    })
}
/*===== MENU HIDDEN =====*/
/* Validate if constant exists */
if (navClose) {
    navClose.addEventListener('click', () => {
        navMenu.classList.remove('show-menu')
    })
}

/*==================== REMOVE MENU MOBILE ====================*/
const navLink = document.querySelector('.nav_link')

function linkAction() {
    const navMenu = document.getElementById('nav-menu')
    navMenu.classList.remove('show-menu')

    navLink.forEach(n => n.addEventListener('click', linkAction))
}
/*==================== ACCORDION SKILLS ====================*/

const skillsContent = document.getElementsByClassName('skills_content'),
    skillsHeader = document.querySelectorAll('.skills_header')

function toggleSkills() {
    let itemClass = this.parentNode.className

    for (i = 0; i < skillsContent.length; i++) {
        skillsContent[i].className = 'skills_content skills_close'
    }
    if (itemClass === 'skills_content skills_close') {
        this.parentNode.className = 'skills_content skills_open'
    }
}
skillsHeader.forEach((el) => {
    el.addEventListener('click', toggleSkills)
})
/*==================== QUALIFICATION TABS ====================*/

const tabs = document.querySelectorAll('[data-target]'),
    tabContents = document.querySelectorAll('[data-content]')
tabs.forEach(tab =>{
    tab.addEventListener('click', () =>{
        const target = document.querySelector(tab.dataset.target)
        tabContents.forEach(tabContent =>{
            tabContent.classList.remove('qualification_active')
        })
        target.classList.add('qualification_active')
        tabs.forEach(tab =>{
            tab.classList.remove('qualification_active')
        })
        tab.classList.add('qualification_active')
    })
})
/*==================== SERVICES MODAL ====================*/
const modalViews = document.querySelectorAll('.services_modal'),
    modalBtns = document.querySelectorAll('.services_button'),
    modalCloses = document.querySelectorAll('.services_modal-close')

let modal = function(modalClick){
    modalViews[modalClick].classList.add('active-modal')
}
modalBtns.forEach((modalBtn, i) => {
    modalBtn.addEventListener('click', () => {
        modal(i)
    })

})
modalCloses.forEach((modalClose) =>{
    modalClose.addEventListener('click', () => {
        modalViews.forEach((modalView) =>{
            modalView.classList.remove('active-modal')
        })
    })
})



/*==================== PORTFOLIO SWIPER  ====================*/
let swiperPortfolio = new Swiper('.portfolio_container', {
    cssMode: true,
    loop: true,

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

/*==================== TESTIMONIAL ====================*/
let swiperTestimonial = new Swiper('.testimonial_container', {
    loop: true,
    grabCursor: true,
    spaceBetween: 48,

    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamiBullets: true,
    },
    breakpoints: {
        568: {
            slidesPerView: 2,
        }
    }
});


/*==================== SCROLL SECTIONS ACTIVE LINK ====================*/
const sections = document.querySelectorAll('section[id]')

function scrollActive(){
    const scrollY = window.pageYOffset

    sections.forEach(current =>{
        const sectionHeight = current.offsetHeight
        const sectionTop = current.offsetTop - 50;
        sectionId = current.getAttribute('id')

        if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.add('active-link')
        }else{
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.remove('active-link')
        }
    })
}
window.addEventListener('scroll', scrollActive)

/*==================== CHANGE BACKGROUND HEADER ====================*/
function scrollHeader(){
    const nav = document.getElementById('header')
    // When the scroll is greater than 200 viewport height, add the scroll-header class to the header tag
    if(this.scrollY >= 80) nav.classList.add('scroll-header'); else nav.classList.remove('scroll-header')
}
window.addEventListener('scroll', scrollHeader)


/*==================== SHOW SCROLL UP ====================*/
function scrollUp(){
    const scrollUp = document.getElementById('scroll-up');
    // When the scroll is higher than 560 viewport height, add the show-scroll class to the a tag with the scroll-top class
    if(this.scrollY >= 560) scrollUp.classList.add('show-scroll'); else scrollUp.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollUp)

/*==================== DARK LIGHT THEME ====================*/

const themeButton = document.getElementById('theme-button')
const darkTheme = 'dark-theme'
const iconTheme = 'uil-sun'

// Previously selected topic (if user selected)
const selectedTheme = localStorage.getItem('selected-theme')
const selectedIcon = localStorage.getItem('selected-icon')

// We obtain the current theme that the interface has by validating the dark-theme class
const getCurrentTheme = () => document.body.classList.contains(darkTheme) ? 'dark' : 'light'
const getCurrentIcon = () => themeButton.classList.contains(iconTheme) ? 'uil-moon' : 'uil-sun'

// We validate if the user previously chose a topic
if (selectedTheme) {
    // If the validation is fulfilled, we ask what the issue was to know if we activated or deactivated the dark
    document.body.classList[selectedTheme === 'dark' ? 'add' : 'remove'](darkTheme)
    themeButton.classList[selectedIcon === 'uil-moon' ? 'add' : 'remove'](iconTheme)
}

// Activate / deactivate the theme manually with the button
themeButton.addEventListener('click', () => {
    // Add or remove the dark / icon theme
    document.body.classList.toggle(darkTheme)
    themeButton.classList.toggle(iconTheme)
    // We save the theme and the current icon that the user chose
    localStorage.setItem('selected-theme', getCurrentTheme())
    localStorage.setItem('selected-icon', getCurrentIcon())
})

// Show body width on bottom page
function setBodyWidth(){
    const body = document.querySelector('body');
    const bodyWidth = body.offsetWidth;
    // Add data attribute to body
    body.setAttribute('data-width',bodyWidth);
}

// Run function
setBodyWidth();
// Run function on resize
window.addEventListener("resize", function(){
    setBodyWidth();
});

// Video card listing
const video_cards = document.querySelectorAll('.video-card');

video_cards.forEach(function (video, index) {

    // Check if dialog is open
    // function openCheck(dialog) {
    //   if (dialog.open) {
    //     console.log("Dialog open");
    //   } else {
    //     console.log("Dialog closed");
    //   }
    // }

    const button = video.querySelector('.video-card__button');
    const dialog = video.querySelector('.modal');
    const close = video.querySelector('.modal__close');
    const videoEl = video.querySelector('.modal__video');

    function closeDialog(){
        if(dialog){
            dialog.setAttribute('data-state','fade');
            // openCheck(dialog);
            setTimeout(function(){
                dialog.setAttribute('data-state','close');
                dialog.close();
                if(videoEl){
                    videoEl.pause();
                    videoEl.currentTime = 0;
                }
            }, 200);
        }
    }

    function openDialog(){
        if(dialog){
            dialog.showModal();
            dialog.setAttribute('data-state','open');
            if(videoEl){
                videoEl.play();
            }
            // openCheck(dialog);
        }
    }

    if(button){
        button.addEventListener("click", function(){
            openDialog();
        });
    }

    if(close){
        close.addEventListener("click", function(){
            closeDialog();
        });
    }

    if(dialog){
        dialog.addEventListener("click", function(event){
            if(event.target.classList == 'modal'){
                closeDialog();
            }
        });
    }

});




// Video card listing
const text_videos = document.querySelectorAll('.text-video');

text_videos.forEach(function (video, index) {

    // function openCheck(dialog) {
    //   if (dialog.open) {
    //     console.log("Dialog open");
    //   } else {
    //     console.log("Dialog closed");
    //   }
    // }

    const button = video.querySelector('.text-video__video-button');
    const dialog = video.querySelector('.modal');
    const close = video.querySelector('.modal__close');
    const videoEl = video.querySelector('.modal__video');

    function closeDialog(){
        if(dialog){
            dialog.setAttribute('data-state','fade');
            // openCheck(dialog);
            setTimeout(function(){
                dialog.setAttribute('data-state','close');
                dialog.close();
                if(videoEl){
                    videoEl.pause();
                    videoEl.currentTime = 0;
                }
            }, 200);
        }
    }

    function openDialog(){
        if(dialog){
            dialog.showModal();
            dialog.setAttribute('data-state','open');
            if(videoEl){
                videoEl.play();
            }
            // openCheck(dialog);
        }
    }

    if(button){
        button.addEventListener("click", function(){
            openDialog();
        });
    }

    if(close){
        close.addEventListener("click", function(){
            closeDialog();
        });
    }

    if(dialog){
        dialog.addEventListener("click", function(event){
            if(event.target.classList == 'modal'){
                closeDialog();
            }
        });
    }

});



// faq

const faqs = document.querySelectorAll('.faq-list');

faqs.forEach(function(faq, index){

    const items = faq.querySelectorAll('.faq-item');

    items.forEach(function(item, index){

        const button = item.querySelector('.faq-item__question');

        console.log(button);

        button.addEventListener("click", function(){

            // First close all items
            // items.forEach(function(item, index){
            //   const button = item.querySelector('.faq-item__question');
            //   button.setAttribute('aria-expanded','false');
            // });

            setTimeout(function(){
                const status = button.getAttribute('aria-expanded');
                if(status == 'false'){
                    button.setAttribute('aria-expanded','true')
                }
                if(status == 'true'){
                    button.setAttribute('aria-expanded','false')
                }
            }, 0);

        });

    });
});

const carrouselSlider = document.querySelectorAll('.carrousel-slider');

carrouselSlider.forEach(function(slider, index){
    const slides = slider.querySelector('.carrousel-slider__list');
    var splide = new Splide(slides, {
        type   : 'loop',
        perPage: 3,
        perMove: 1,
        rewind : true,
        gap    : '20px',
        pagination: true,
        breakpoints: {
            992: {
                perPage: 2,
            },
            768: {
                perPage: 1,
            },
        }
    });
    splide.mount();
});

const reviewSlider = document.querySelectorAll('.review-slider');

reviewSlider.forEach(function(slider, index){
    const slides = slider.querySelector('.review-slider__list');
    var splide = new Splide(slides, {
        type   : 'loop',
        updateOnMove : true,
        perPage: 3,
        perMove: 1,
        focus: "center",
        rewind : true,
        gap    : '20px',
        // padding: '60px',
        pagination: true,
        breakpoints: {
            992: {
                perPage: 1,
                // gap    : '40px',
            }
        }
    });
    splide.mount();
});


var swiper = new Swiper(".slide-content", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    breakpoints:{
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },
    },
});





handleSmallScreens()