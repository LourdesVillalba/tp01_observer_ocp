<?php

// Interfaz del Observador
interface Observador {
    public function actualizar(string $tituloPost): void;
}

// Interfaz del Sujeto (Blog)
interface Sujeto {
    public function suscribir(Observador $obs): void;
    public function desuscribir(Observador $obs): void;
    public function notificar(string $tituloPost): void;
}

// Clase Blog
class Blog implements Sujeto {
    private array $suscriptores = [];
    private array $posts = [];

    public function suscribir(Observador $obs): void {
        $this->suscriptores[] = $obs;
    }

    public function desuscribir(Observador $obs): void {
        $this->suscriptores = array_filter(
            $this->suscriptores,
            fn($s) => $s !== $obs
        );
    }

    public function notificar(string $tituloPost): void {
        foreach ($this->suscriptores as $s) {
            $s->actualizar($tituloPost);
        }
    }

    // Publicar nuevo post
    public function publicarPost(string $titulo): void {
        $this->posts[] = $titulo;
        echo "Nuevo post publicado en el blog: $titulo <br>";
        $this->notificar($titulo);
    }
}

// Clase Usuario
class Usuario implements Observador {
    private string $nombre;

    public function __construct(string $nombre) {
        $this->nombre = $nombre;
    }

    public function actualizar(string $tituloPost): void {
        echo "{$this->nombre} fue notificado: se publicó el post '$tituloPost'.<br>";
    }
}


$blog = new Blog();

// Nuevos usuarios
$juan = new Usuario("Juan");
$maria = new Usuario("María");

// Se suscriben al blog
$blog->suscribir($juan);
$blog->suscribir($maria);

// Publicación de posts
$blog->publicarPost("Patrón Observer");

$blog->desuscribir($juan);

?>
