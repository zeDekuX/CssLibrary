<nav class="navbar navbar-expand-lg bg-dark mx-auto " id="navHeader">
            <div class="container-fluid p-0">

            <!-- Logo/Nome Sito -->

            <?php
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                if ( has_custom_logo() ) {
                    echo '<a class="navbar-brand" href="'.get_home_url().'"><img src="' . esc_url( $logo[0] ) . '" class="logo-header" alt="' . get_bloginfo( 'name' ) . '"></a>';
                } else {
                    echo '<a href="'.get_home_url().'" class="text-decoration-none text-white ps-2"><h1 class="m-0 display-5 fw-bold">' . get_bloginfo('name') . '</h1></a>';
                }
            ?>

            <!-- Menu Hamburger-->
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="offcanvas offcanvas-end bg-transparent border-0" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header text-white bg-dark">
                <button type="button" class="btn-close p-4" data-bs-dismiss="offcanvas" aria-label="Close"></button>

                </div>

                <div class="offcanvas-body text-white" id="headerLinkMenu">
                    <?php
                    wp_nav_menu(array(
                    'theme_location' => 'header',
                    //'walker' => new Clean_Walker_Nav(),
                    'container' => false,
                    'items_wrap' => '<ul class="navbar-nav justify-content-end flex-grow-1 pe-3" id="navHeaderItem">%3$s</ul>',
                    ));
                    ?>
                </div>
              
            </div>
            
            </div>
        </nav>

/*----------------------------------
CSS

.glassmorphism{

    width: 85%!important;

    background: rgba(250, 250, 250, 0.26)!important;
    border-radius: 16px;
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1)!important;

    position: relative;
}

.glassmorphism::before{
    content: "";
    width: 100%;height: 100%;

    position: absolute;
    top: 0;left: 0;

    z-index: -1;

    backdrop-filter: blur(1.5rem);
    -webkit-backdrop-filter: blur(1.5rem);

}

.transition{transition: all 2s cubic-bezier(.215, .61, .355, 1)!important;}


.w-80{width: 80%!important;}

/*---------------------------------------
 HEADER 
-----------------------------------------*/


.logo-header{width: auto;height: 60px;object-fit: cover;}

#navHeader {
    width: 100%;
    transition: all 0.5s cubic-bezier(.215, .61, .355, 1)!important;
}

#navHeaderItem > li * {
    transition: color 1s cubic-bezier(.215, .61, .355, 1)!important;
}


/* MENU HAMBURGER */

/* Cambia il colore della navbar-toggler-icon in bianco */
.navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255, 255, 255, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
 
}
  
/* Cambia il colore del pulsante di chiusura in bianco e rimuovi il bordo */
.btn-close {
filter: invert(1);
border: none;
box-shadow: none;
}

/* Rimuovi il bordo e l'ombra anche quando il pulsante è attivo o ha il focus */
.btn-close:focus,
.btn-close:active {
outline: none;
border: none;
box-shadow: none;
}

/* Rimuovi il bordo nero intorno al menu hamburger quando è attivo o ha il focus */
.navbar-toggler:focus,
.navbar-toggler:active {
outline: none;
border: none;
box-shadow: none;
}



/* Aggiungi uno stile personalizzato per il bordo del pulsante di chiusura */
.btn-close-white {
border: 1px solid white;
}




/* colore il menu laterale del colore di sfondo del body per dimensioni md e superiori  */
@media (max-width: 768px) {
    #headerLinkMenu{
        background: var(--color-bg-dark);
    }
}

@media (min-width: 768px) {
    #headerLinkMenu{
        background: transparent;
    }
}

------------------------------------*/



/*----------------------------------
JQUERY
$(document).ready(function() {
    // Animazione dell'header durante lo scroll
    let scroll_pos = 0;
    $(document).scroll(function() {
        scroll_pos = $(this).scrollTop();
        if(scroll_pos > 0) {
            $("#navHeader").addClass("glassmorphism mt-3");

            $("#navHeaderItem > li *").addClass("text-white fw-medium");
            $("#navHeaderItem > li *").removeClass("text-dark");


        } else {
            $("#navHeader").removeClass("glassmorphism mt-3");

            $("#navHeaderItem > li *").removeClass("text-dark fw-medium");
            $("#navHeaderItem > li *").addClass("text-white");

        }
    });


    //aggiunge classi bootstrapt a <li> ed <a> della navbar
    $("#navHeaderItem li").addClass("nav-item");
    $("#navHeaderItem li a").addClass("nav-link active text-white link-hover");



});


if (window.matchMedia("(max-width: 992px)").matches) {
    $("#headerLinkMenu").addClass("bg-dark");
}


//Ricarica la pagina ad ogni variazione del width 
$(window).resize(function() {
    location.reload(true);
});



------------------------------------*/

