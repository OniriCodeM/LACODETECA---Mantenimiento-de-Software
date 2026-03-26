
/*botnoces comunidad */
document.addEventListener('DOMContentLoaded', function() {
  // Obtener referencias a los elementos
  const openDiscussions = document.getElementById('openDiscussions');
  const openEvents = document.getElementById('openEvents');
  const openProjects = document.getElementById('openProjects');
  const discussionsModal = document.getElementById('discussionsModal');
  const eventsModal = document.getElementById('eventsModal');
  const projectsModal = document.getElementById('projectsModal');
  const closeButtons = document.querySelectorAll('.close-button');
  const joinButtons = document.querySelectorAll('.btn-join');

  // Funciones para abrir modales
  openDiscussions.addEventListener('click', () => {
      discussionsModal.style.display = 'block';
  });

  openEvents.addEventListener('click', () => {
      eventsModal.style.display = 'block';
  });

  openProjects.addEventListener('click', () => {
      projectsModal.style.display = 'block';
  });

  // Cerrar modales con el botón X
  closeButtons.forEach(button => {
      button.addEventListener('click', () => {
          button.closest('.modal').style.display = 'none';
      });
  });

  // Cerrar modal al hacer clic fuera
  window.addEventListener('click', (event) => {
      if (event.target.classList.contains('modal')) {
          event.target.style.display = 'none';
      }
  });

  // Eventos para los botones de unirse
  joinButtons.forEach(button => {
      button.addEventListener('click', () => {
          alert('¡Gracias por tu interés! Te hemos enviado un correo con más información.');
      });
  });
});


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



/*boton drop */

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

/*slider de index */
    // Crear efecto de partículas
    function createParticles() {
      const particles = document.querySelector('.particles');
      const particleCount = 50;

      for (let i = 0; i < particleCount; i++) {
        const particle = document.createElement('div');
        particle.className = 'particle';
        particle.style.left = Math.random() * 100 + '%';
        particle.style.top = Math.random() * 100 + '%';
        particle.style.animation = `float ${Math.random() * 3 + 2}s ease-in-out infinite`;
        particle.style.opacity = Math.random() * 0.5 + 0.2;
        particles.appendChild(particle);
      }
    }

    // Crear efecto de código cayendo
    function createCodeRain() {
      const container = document.querySelector('.code-container');
      const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789{}[]()<>/?|=+-*';
      
      setInterval(() => {
        const column = document.createElement('div');
        column.style.position = 'absolute';
        column.style.left = Math.random() * 100 + '%';
        column.style.color = '#0ff';
        column.style.fontSize = '14px';
        column.style.opacity = '0.3';
        column.style.animation = 'codeRain 2s linear forwards';
        
        let code = '';
        for (let i = 0; i < 20; i++) {
          code += characters[Math.floor(Math.random() * characters.length)] + '<br>';
        }
        
        column.innerHTML = code;
        container.appendChild(column);
        
        setTimeout(() => column.remove(), 2000);
      }, 100);
    }

    // Control del slider
    let currentSlide = 0;
    const slides = document.querySelectorAll('.hero-content');
    const floatingElements = document.querySelectorAll('.floating-element');
    const dots = document.querySelectorAll('.dot');
    const [prevButton, nextButton] = document.querySelectorAll('.nav-arrow');

    function showSlide(index) {
      slides.forEach(slide => slide.classList.remove('active'));
      floatingElements.forEach(element => element.classList.remove('active'));
      dots.forEach(dot => dot.classList.remove('active'));

      slides[index].classList.add('active');
      floatingElements[index].classList.add('active');
      dots[index].classList.add('active');
    }

    function nextSlide() {
      currentSlide = (currentSlide + 1) % slides.length;
      showSlide(currentSlide);
    }

    function prevSlide() {
      currentSlide = (currentSlide - 1 + slides.length) % slides.length;
      showSlide(currentSlide);
    }

    // Event listeners
    nextButton.addEventListener('click', nextSlide);
    prevButton.addEventListener('click', prevSlide);

    dots.forEach((dot, index) => {
      dot.addEventListener('click', () => {
        currentSlide = index;
        showSlide(currentSlide);
      });
    });

    // Auto-rotate slides
    setInterval(nextSlide, 3000);

    // Inicializar efectos
    document.addEventListener('DOMContentLoaded', () => {
      createParticles();
      createCodeRain();
    });








    

  
  
   