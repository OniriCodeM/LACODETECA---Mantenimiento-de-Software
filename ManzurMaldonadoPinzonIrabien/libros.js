
function popup(url, ancho, alto) {
    var posicion_x;
    var posicion_y;
    posicion_x = (screen.width / 2) - (ancho / 2);
    posicion_y = (screen.height / 2) - (alto / 2);
    window.open(url, "documento", "width=" + ancho + ",height=" + alto + ",menubar=0,toolbar=0,directories=0,scrollbars=no,resizable=no,left=" + posicion_x + ",top=" + posicion_y);
}



/*boton switch */
const btnSwitch = document.querySelector('#switch');

btnSwitch.addEventListener('click', () => {
	document.body.classList.toggle('dark');
	btnSwitch.classList.toggle('active');

	// Guardamos el modo en localstorage.
	if(document.body.classList.contains('dark')){
		localStorage.setItem('dark-mode', 'true');
	} else {
		localStorage.setItem('dark-mode', 'false');
	}
});

// Obtenemos el modo actual.
if(localStorage.getItem('dark-mode') === 'true'){
	document.body.classList.add('dark');
	btnSwitch.classList.add('active');
} else {
	document.body.classList.remove('dark');
	btnSwitch.classList.remove('active');
}

document.querySelector('.dropdown-button').addEventListener('click', function() {
    document.querySelector('.dropdown-content').classList.toggle('show');
});


//boton drop

window.addEventListener('click', function(event) {
    if (!event.target.matches('.dropdown-button')) {
        const dropdowns = document.getElementsByClassName('dropdown-content');
        for (let i = 0; i < dropdowns.length; i++) {
            const openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
});


const track = document.querySelector('.carousel-track');
const slides = document.querySelectorAll('.carousel-slide');
const prevButton = document.querySelector('.prev');
const nextButton = document.querySelector('.next');
const dotsContainer = document.querySelector('.dots-container');

let currentIndex = 0;
let startPos = 0;
let currentTranslate = 0;
let prevTranslate = 0;

// Crear los puntos indicadores
slides.forEach((_, index) => {
    const dot = document.createElement('div');
    dot.classList.add('dot');
    if (index === 0) dot.classList.add('active');
    dot.addEventListener('click', () => goToSlide(index));
    dotsContainer.appendChild(dot);
});

function updateDots() {
    document.querySelectorAll('.dot').forEach((dot, index) => {
        dot.classList.toggle('active', index === currentIndex);
    });
}

function goToSlide(index) {
    currentIndex = index;
    updateDots();
    track.style.transform = `translateX(-${currentIndex * 320}px)`;
}

prevButton.addEventListener('click', () => {
    if (currentIndex > 0) {
        goToSlide(currentIndex - 1);
    }
});

nextButton.addEventListener('click', () => {
    if (currentIndex < slides.length - 1) {
        goToSlide(currentIndex + 1);
    }
});

// Autoplay
let autoplayInterval = setInterval(() => {
    if (currentIndex < slides.length - 1) {
        goToSlide(currentIndex + 1);
    } else {
        goToSlide(0);
    }
}, 3000);

// Pausar autoplay cuando el mouse está sobre el carrusel
track.addEventListener('mouseenter', () => {
    clearInterval(autoplayInterval);
});

track.addEventListener('mouseleave', () => {
    autoplayInterval = setInterval(() => {
        if (currentIndex < slides.length - 1) {
            goToSlide(currentIndex + 1);
        } else {
            goToSlide(0);
        }
    }, 3000);
});

