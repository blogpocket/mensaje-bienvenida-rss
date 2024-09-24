<?php
/*
Plugin Name: Mensaje de Bienvenida para Lectores RSS
Description: Muestra un mensaje de bienvenida personalizado a los lectores que acceden al contenido a través de RSS. Gracias a https://jeremy.hu/thanking-my-rss-readers/
Version: 1.0
Author: Antonio Cambronero Blogpocket.com
*/

function jeherve_welcome_rss_readers( $content ) {
    $welcome_messages = array(
        'Gracias por leer esta publicación a través de RSS. RSS es genial y tú eres genial por usarlo. ♥️',
        '¡Felicitaciones por ser un lector RSS! Formas parte de un grupo selecto de personas que saben cómo mantenerse actualizado con estilo.',
        '¡Hola, lector RSS! Eres uno de los pocos especiales que elige esta forma tradicional pero increíble de mantenerse informado. ¡Felicitaciones!',
        '¡Eres un verdadero aficionado a RSS! Mientras otros se ahogan en el ruido de las redes sociales, tú disfrutas de la simplicidad y el control de RSS. ¡Felicitaciones!',
        'Los lectores RSS como tú son los héroes anónimos de Internet. ¡Sigue con el buen trabajo!',
        '¡Eres un maestro de la eficiencia! Al usar RSS, ahorras tiempo y evitas distracciones. 👏',
        'Los lectores RSS como tú son la fórmula secreta de Internet. ¡Sigue adelante y mantente informado!',
        '¡Hola, lector RSS! Eres genial. ¡Sigue siendo increíble! 😎',
    );

    $welcome_message = $welcome_messages[ wp_rand( 0, count( $welcome_messages ) - 1 ) ];

    return sprintf(
        '%1$s<p>%2$s</p>',
        $content,
        $welcome_message
    );
}
add_filter( 'the_content_feed', 'jeherve_welcome_rss_readers' );
