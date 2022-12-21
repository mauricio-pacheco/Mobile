<?php
//INVERTER DATAS AMERICANA E BRASILEIRA
//AUTOR: MAURÍCIO PACHECO

//FUNÇÃO PARA DETECTAR DISPOSITIVO MÓVEL
function isMobileDevice() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

//VERIFICA SE É UM DISPOSITIVO MÓVEL
if(isMobileDevice()) {
    echo "É um Dispositivo Móvel!";
} else {
    echo "Não é um Dispositivo Móvel!";
}

?>