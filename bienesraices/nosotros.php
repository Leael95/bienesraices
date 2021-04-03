<?php 

    require 'includes/funciones.php';

    incluirTemplate('header'); 
?>

    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 Años de experiencia
                </blockquote>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, vel earum fugit libero dolorem officiis et, iste molestias tempora accusamus ducimus repudiandae temporibus? Numquam eveniet accusamus dolores sapiente modi cum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat distinctio, perspiciatis iste quasi laudantium quas! Numquam exercitationem fuga quae magni, voluptate soluta aliquid provident dicta nisi voluptatibus dolorum accusamus neque.

                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos at quod repellat perspiciatis, explicabo quos magni consequatur quibusdam ut, mollitia, nesciunt eveniet? Quod quaerat ab ea blanditiis dolor laboriosam vero.
                </p>
            </div>
        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore laudantium optio deserunt incidunt dolores repudiandae esse, eum sed in aliquam fugit odio suscipit nostrum, unde ex fugiat sit fuga officiis?</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore laudantium optio deserunt incidunt dolores repudiandae esse, eum sed in aliquam fugit odio suscipit nostrum, unde ex fugiat sit fuga officiis?</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore laudantium optio deserunt incidunt dolores repudiandae esse, eum sed in aliquam fugit odio suscipit nostrum, unde ex fugiat sit fuga officiis?</p>
            </div>
        </div>
    </section>

<?php incluirTemplate('footer'); ?>