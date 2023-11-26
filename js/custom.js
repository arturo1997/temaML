
jQuery(document).ready(function ($) {
    $('.owl-carousel-1').owlCarousel({
        stagePadding: 20,
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            900: {
                items: 2
            },
            1400: {
                items: 3
            }
        },
        navText: ["<div class='nav-btn prev-slide'></div>", "<div class='nav-btn next-slide'></div>"],


    });

});
jQuery(document).ready(function ($) {
    $('.owl-carousel-2').owlCarousel({
        stagePadding: 20,
        loop: true,
        margin: 10,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 3,
                nav: true
            },
            1000: {
                items: 6,
                nav: true,
                loop: false
            }
        },
        nav: true,
        navText: ["<div class='nav-btn prev-slide'></div>", "<div class='nav-btn next-slide'></div>"],
    });
});

// --------------Acordion Script
document.addEventListener("DOMContentLoaded", function () {
    var buttons = document.querySelectorAll(".accordion-button");

    buttons.forEach(function (button) {
        button.addEventListener("click", function () {
            var content = this.nextElementSibling;
            var icon = this.querySelector(".accordion-icon");

            if (content.classList.contains("open")) {
                content.classList.remove("open");
                content.style.height = "0";
                icon.textContent = "+";
                this.parentElement.classList.remove("active"); // Remueve la clase "active" al cerrar el acordeón
            } else {
                // Cerrar todos los acordeones abiertos antes de abrir este
                var allContents = document.querySelectorAll(".accordion-content");
                var allIcons = document.querySelectorAll(".accordion-icon");
                var allItems = document.querySelectorAll(".accordion-item");

                allContents.forEach(function (item) {
                    item.classList.remove("open");
                    item.style.height = "0";
                });

                allIcons.forEach(function (item) {
                    item.textContent = "+";
                });

                allItems.forEach(function (item) {
                    item.classList.remove("active"); // Remueve la clase "active" de todos los acordeones
                });

                content.classList.add("open");
                content.style.height = content.scrollHeight + "px";
                icon.textContent = "-";
                this.parentElement.classList.add("active"); // Agrega la clase "active" al abrir el acordeón
            }
        });
    });
});
/** --------------MENU MOBILE SCRIPTS---------------- */
document.addEventListener("DOMContentLoaded", function () {
    //Meganebu links
    const megamenuLink = document.querySelectorAll(".megamenu");
    console.log(megamenuLink)
    megamenuLink.forEach((link) => {
        link.children[0].addEventListener("click", function () {
            console.log(link.children[0]);
            if (link.children[1].classList.contains("open-link")) {
                console.log('open')
                link.children[1].style.height = "0";
                link.children[1].classList.remove('open-link');
                link.classList.remove('active');
            } else {
                const linkContents = document.querySelectorAll(".sub-menu");
                const linksMenu = document.querySelectorAll(".megamenu");

                linksMenu.forEach((linkmenu) => {
                    linkmenu.classList.remove('active');
                })

                linkContents.forEach(function (item) {
                    item.classList.remove("open-link");
                    item.style.height = "0";
                });

                link.children[1].style.height = link.children[1].scrollHeight + "px";
                link.children[1].classList.add('open-link');
                link.classList.add('active');
            }

            const submenuLink = document.querySelectorAll(".submenu");
            submenuLink.forEach((sublink) => {

                sublink.children[0].addEventListener('click', () => {

                    if (sublink.children[1].classList.contains("open-link")) {
                        sublink.children[1].style.height = "0";
                        sublink.children[1].classList.remove("open-link");
                        link.children[1].style.height = (link.children[1].scrollHeight - sublink.children[1].scrollHeight) + "px";
                    } else {
                        sublink.children[1].style.height = sublink.children[1].scrollHeight + "px";
                        sublink.children[1].classList.add("open-link");
                        link.children[1].style.height = (link.children[1].scrollHeight + sublink.children[1].scrollHeight) + "px";
                    }
                })
            })



        });
    })
    // //Submenus Links
    // const submenuLink = document.querySelectorAll(".submenu");
    // console.log(submenuLink)
    // submenuLink.forEach((link2) => {
    //     link2.children[0].addEventListener("click", function () {
    //         console.log(link2.children[1]);
    //         if (link2.children[1].classList.contains("open-link")) {
    //             console.log('open')
    //             link2.children[1].style.height = "0";
    //             link2.children[1].classList.remove('open-link');
    //             link2.classList.remove('active');
    //         } else {
    //             const linkContents = document.querySelectorAll(".sub-menu-2");
    //             const linksMenu = document.querySelectorAll(".submenu");

    //             linksMenu.forEach((linkmenu) => {
    //                 linkmenu.classList.remove('active');
    //             })

    //             linkContents.forEach(function (item) {
    //                 item.classList.remove("open-link");
    //                 item.style.height = "0";
    //             });
    //             const linkContent = document.querySelectorAll(".sub-menu");

    //             linkContent.forEach(function (item) {
    //                 item.style.height = "0";
    //             });

    //             link2.children[1].style.height = link2.children[1].scrollHeight + "px";
    //             link.children[1].style.height = (link.children[1].scrollHeight + link2.children[1].scrollHeight) + "px";
    //             link2.children[1].classList.add('open-link');
    //             link2.classList.add('active');
    //         }


    //     });
    // })

    /**
     * BUTTON MENU MOBILE
     */
    let buttonMenu = document.getElementById('lanzador');
    let menuContent = document.getElementById('site-navigation')
    console.log(buttonMenu.checked)


    buttonMenu.addEventListener('click', () => {

        console.log(buttonMenu.checked)
        if (buttonMenu.checked) {
            menuContent.classList.add('active-content');
        } else {
            menuContent.classList.remove('active-content');
        }

    })

})

/* IMAGEN PERSONALIZABLE PARA CADA ENTRADA */
window.onload = function () {
    // Obtener todas las pestañas
    const tabsAcordeon = document.querySelectorAll('.tab-acordeon');
    const tabsDesktop = document.querySelectorAll('.tab-desktop');

    const tabContents = document.querySelectorAll('.tab-content');
    const iconsOpen = document.querySelectorAll('.acordeon-icon');

    tabsAcordeon.forEach((tab => {
        tab.addEventListener('click', () => {
            const menuContent = document.getElementById(tab.getAttribute("data-tab"));
            console.log(tab)
            if (tab.classList.contains('active')) {
                tab.classList.remove('active');
                menuContent.style.height = "0";
                menuContent.classList.remove('active-content')
                console.log(tab)

            } else {
                const tabs = document.querySelectorAll('.' + tab.getAttribute("data-tab"));

                tabContents.forEach((e) => {
                    //e.style.height = "0";
                    e.classList.remove('active-content')
                })
                tabsAcordeon.forEach((i) => {
                    i.classList.remove('active')
                })
                tabsDesktop.forEach((u) => {
                    u.classList.remove('active')
                })
                tabs.forEach(l => {
                    l.classList.add('active');
                })
                menuContent.style.height = menuContent.scrollHeight + "px";
                menuContent.classList.add('active-content')


            }

        })
    }))

    tabsDesktop.forEach((tabdesk) => {
        tabdesk.addEventListener('click', () => {
            const menuContent = document.getElementById(tabdesk.getAttribute("data-tab"));
            const tabs = document.querySelectorAll('.' + tabdesk.getAttribute("data-tab"));

            tabContents.forEach((e) => {
                e.classList.remove('active-content')
                menuContent.style.height = "0";

            })
            tabsDesktop.forEach((i) => {
                i.classList.remove('active')
                console.log(i)
            })
            tabsAcordeon.forEach((i) => {
                i.classList.remove('active')
            })

            tabs.forEach(l => {
                l.classList.add('active');
            })
            menuContent.style.height = "auto";
            menuContent.classList.add('active-content')
            console.log(tabs)
        })
    })
    window.addEventListener('resize', () => {
        tabContents.forEach(e => {
            if (e.classList.contains('active-content')) {
                e.style.height = e.scrollHeight + "px";
                console.log('1');
            } else {
                e.style.height = "0";
                console.log('2');
            }
        })

    });

    //Whatsapp Button
    const whatsappButton = document.getElementById('whatsapp-button');
    const whatsappContent = document.getElementById('whatsapp-content');

    whatsappButton.addEventListener('click', () => {
        console.log(whatsappContent);
        whatsappButton.classList.toggle('active');
        whatsappContent.classList.toggle('active-whatsapp-content');
    })
    //Eliminar P vacias
    document.addEventListener('DOMContentLoaded', (event) => {
        const paragraphs = document.querySelectorAll('p');

        paragraphs.forEach(p => {
            // Comprueba si el párrafo está vacío o contiene solo espacios en blanco o un espacio duro (&nbsp;)
            if (p.innerHTML.trim() === '' || p.innerHTML === '&nbsp;') {
                p.parentNode.removeChild(p);
            }
        });
    });

};





