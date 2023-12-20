
    document.addEventListener("DOMContentLoaded", function () {
        var navLinks = document.querySelectorAll('.nav-link');
        var covers = document.querySelectorAll('.div1_2, .div2_2, .div3_2, .div4_2, .div5_2, .div6_2, .div7_2');

        navLinks.forEach(function (link, index) {
            link.addEventListener('click', function (event) {
                event.preventDefault();

                // Elimina la clase 'active' de todas las portadas
                covers.forEach(function (cover) {
                    cover.classList.remove('active');
                });

                // Agrega la clase 'active' a la portada correspondiente
                covers[index].classList.add('active');
            });
        });
    });

