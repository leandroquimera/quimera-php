?php

function load(){
    $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRING);

    $page = (!$page) ? "/index.php" : "paginas/{$page}.php";

    if (!file_exists($page)) {
        throw new \Exception("Opa, algo deu errado!");
    }

    return $page;
    


}