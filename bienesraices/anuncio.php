<?php 

    require 'includes/funciones.php';

    incluirTemplate('header'); 
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en venta frente al bosque</h1>
        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen de la propiedad">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
                    <p>4</p>
                </li>
            </ul>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, vel earum fugit libero dolorem officiis et, iste molestias tempora accusamus ducimus repudiandae temporibus? Numquam eveniet accusamus dolores sapiente modi cum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat distinctio, perspiciatis iste quasi laudantium quas! Numquam exercitationem fuga quae magni, voluptate soluta aliquid provident dicta nisi voluptatibus dolorum accusamus neque.

            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos at quod repellat perspiciatis, explicabo quos magni consequatur quibusdam ut, mollitia, nesciunt eveniet? Quod quaerat ab ea blanditiis dolor laboriosam vero.
            </p>
        </div>
    </main>

<?php incluirTemplate('footer'); ?>