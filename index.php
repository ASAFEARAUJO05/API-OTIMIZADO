<?php
function verificarurl($url) {
 return $url == parse_url($_SERVER ['REQUEST_URI'],
 PHP_URL_PATH); 
}

function verificarMetodo($metodo){
return $metodo == $_SERVER['REQUEST_METHOD'];

}
$ROTAS = [
[
    "url" => "/",
    "metodo" => "GET",
    "conteudo" => "pagina principal"
],
[
    "url" => "/amigos",
    "metodo" => "GET",
    "conteudo" => "pagina principal"
]
];
foreach ($ROTAS as $rota){
if(verificarurl($rota['url']) && verificarMetodo($rota['metodo'])){
    echo $rota['conteudo'];
}



}

?>