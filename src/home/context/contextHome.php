<?php

function contextHome($nombre, $apellido, $especialidad){
    return ("
        <span class='testimonial-item style-2' style='cursor:pointer;'>
            <span class='post-thumbnail'>
                <i class='fa fa-user fa-4x'></i>
            </span>
            <span class='testimonial-desc'>
                <p>".ucfirst(strtolower($nombre))." ".ucfirst(strtolower($apellido))."</p>
                <small><b>Especialidad</b><br>{$especialidad}</small>
            </span>
            <span class='testimonial-info'>
                <!-- <h6 class='testimonial-name'>Barney Smith</h6>
                <span class='testimonial-by-line'>/&nbsp;PR Officer</span> -->
            </span>
        </span>
    ");
}