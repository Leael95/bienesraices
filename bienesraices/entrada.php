<?php 

    require 'includes/funciones.php';

    incluirTemplate('header'); 
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Guia para la decoracion de tu hogar</h1>
        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada2.jpg" alt="Imagen de la propiedad">
        </picture>
        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>

        <div class="resumen-propiedad">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, vel earum fugit libero dolorem officiis et, iste molestias tempora accusamus ducimus repudiandae temporibus? Numquam eveniet accusamus dolores sapiente modi cum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat distinctio, perspiciatis iste quasi laudantium quas! Numquam exercitationem fuga quae magni, voluptate soluta aliquid provident dicta nisi voluptatibus dolorum accusamus neque.

            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos at quod repellat perspiciatis, explicabo quos magni consequatur quibusdam ut, mollitia, nesciunt eveniet? Quod quaerat ab ea blanditiis dolor laboriosam vero.
            </p>
        </div>
    </main>

<?php incluirTemplate('footer'); ?>