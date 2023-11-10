document.addEventListener('DOMContentLoaded', function () {
    // Asociar animación de chincheta1 al elemento
    const chincheta1Element = document.querySelector('.ch1');
    chincheta1Element.classList.add('mueveChincheta1');
  
    // Asociar animación de article1 al elemento
    const article1Element = document.querySelector('.art1');
    article1Element.classList.add('animArticle1');
  
    // Asociar animación de chincheta2 al elemento después de completar la animación de article1
    article1Element.addEventListener('animationend', function () {
      const chincheta2Element = document.querySelector('.ch2');
      chincheta2Element.classList.add('mueveChincheta2');
    });
  
    // Asociar animación de article2 al elemento después de completar la animación de chincheta2
    const chincheta2Element = document.querySelector('.ch2');
    chincheta2Element.addEventListener('animationend', function () {
      const article2Element = document.querySelector('.art2');
      article2Element.classList.add('animArticle2');
    });
  
    // Asociar animación de chincheta3 al elemento después de completar la animación de article2
    article2Element.addEventListener('animationend', function () {
      const chincheta3Element = document.querySelector('.ch3');
      chincheta3Element.classList.add('mueveChincheta3');
    });
  
    // Asociar animación de article3 al elemento después de completar la animación de chincheta3
    const chincheta3Element = document.querySelector('.ch3');
    chincheta3Element.addEventListener('animationend', function () {
      const article3Element = document.querySelector('.art3');
      article3Element.classList.add('animArticle3');
    });
  });
  