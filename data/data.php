<?php
// Mapeo de etiquetas a clases Bootstrap y CSS custom
$tagClasses = [
    "JavaScript" => "btn-warning tech-btn",
    "React" => "btn-info-2 tech-btn",
    "Negocios" => "btn-secondary tech-btn",
    "Startups" => "btn-danger tech-btn"
];

$tagLinks = [
    "React" => "https://es.react.dev/learn",
    "JavaScript" => "https://lenguajejs.com/javascript/",
    "Negocios" => "https://www.argentina.gob.ar/produccion/capacitar/como-crear-y-definir-tu-modelo-de-negocio",
    "Startups" => "https://www.argentina.gob.ar/produccion/financiamiento/perfiles-de-aceleradoras"
];

$oradores = [
    [
        "img" => "assets/img/steve.jpg",
        "nombre" => "Steve Jobs",
        "tags" => ["JavaScript", "React"],
        "descripcion" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Voluptates possimus ad cupiditate. Commodi at rem sed dolor id,
            deserunt velit tempora dolorem totam? Autem cumque ratione vel
            eum ipsam animi?"
    ],
    [
        "img" => "assets/img/bill.jpg",
        "nombre" => "Bill Gates",
        "tags" => ["JavaScript", "React"],
        "descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem
            unde soluta, fugiat minus, rem totam debitis veniam libero
            excepturi hic necessitatibus illum cumque neque quo quisquam
            obcaecati repudiandae incidunt distinctio."
    ],
    [
        "img" => "assets/img/ada.jpeg",
        "nombre" => "Ada Lovelace",
        "tags" => ["Negocios", "Startups"],
        "descripcion" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Obcaecati molestiae ipsum cupiditate voluptate repudiandae,
            tempora dolore! Modi, minima possimus. Ad, aliquid sed. Magnam
            similique aspernatur vitae sint sunt? Officiis, ab."
    ],
];
?>