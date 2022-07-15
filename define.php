<?php
error_reporting(E_ERROR | E_PARSE);

/* Status do módulo>

    0 - Offline
    1 - Online
    2 - Em manutenção
*/
$modulos = [
    'Login' => 'Online',
];

// if(isset($_COOKIE["lang"])){
//     if($_COOKIE["lang"] == "ptbr"){
//         setcookie("lang", "ptbr", time() + (86400 * 30), "/");
//         require_once("lang/ptbr.php");
//     }else if($_COOKIE["lang"] == "en"){
//         setcookie("lang", "en", time() + (86400 * 30), "/");
//         require_once("lang/en.php");
//     }else{
//         setcookie("lang", "ptbr", time() + (86400 * 30), "/");
//         require_once("lang/ptbr.php");
//     }
// }else{
//     setcookie("lang", "ptbr", time() + (86400 * 30), "/");
//     require_once("lang/ptbr.php");
// }

function status_modulo($modulo){
    global $modulos;
    if($modulos[$modulo] == 0 || $modulos[$modulo] == "Offline"){
        // echo "Offline";
        return "Offline";
    }else if($modulos[$modulo] == 1 || $modulos[$modulo] == "Online"){
        // echo "Online";
        return "Online";
    }else if($modulos[$modulo] == 2 || $modulos[$modulo] == "Manutenção"){
        // echo "Em manutenção";
        return "Manutenção";
    }else{
        // echo "Não definido";
        return "Não definido";
    }
}

function msg_modulo($modulo){
    global $modulos;

    foreach($modulos as $key => $value){
        if($key == $modulo){
            if($modulos[$modulo] != "Online"){
                echo "<div class='row'>
                <div class='card-body'>
                    <div class='alert alert-danger alert-dismissible'>
                    <h5><i class='icon fas fa-exclamation-triangle'></i> Modulo $value</h5>
                        O Módulo <strong>$modulo</strong> está <strong>$value</strong>!
                    </div>
                </div>
            </div>";
                echo "<script>document.getElementById('execAction').disabled = true;</script>";
            }else{
                // Modulo Online, não exibir nenhuma mensagem.
            }
        }
    }
}

/* Iniciar a sessão */
session_start();

define("dashboard", "dashboard");

function hasLevel($id)
{
    $errorCode = 401;
    if ($_SESSION['user_level'] >= $id) {
        // $user_id = $_SESSION["user_id"];
        // $user_name = $_SESSION['user_name'];
        // $user_level = $_SESSION["level_id"];
        // $level_id = $_SESSION['level_id'];
        // $level_name = $_SESSION['level_name'];

        // echo "ID: <strong>$user_id</strong>, Name: <strong>$user_name</strong>, Level ID: <strong>$level_id</strong>, Nome do Level: <strong>$level_name</strong>";
        // echo "Você possui este nível de acesso para a devida página!";
    } else {
        // echo "Usuário não tem o nível requirido para está página!";
        // session_destroy();
        $url = $_SERVER['SCRIPT_NAME'] . '?' . $_SERVER['QUERY_STRING'];

        $domain = 'http://' . $_SERVER["SERVER_NAME"];

        header("Location: $domain/home.php?redirect=$url");
        // header("Location: ../error.php?code=$errorCode");
    }
}

function hasSessionON()
{
    if (isset($_SESSION['user_id'])) {
        header("Location: " . dashboard ."/index.php");
    } else {
        session_destroy();
        session_start();
    }
}

function logout(){
    session_unset();
    session_destroy();

    $domain = 'http://' . $_SERVER["SERVER_NAME"];

    header("Location: $domain/index.php");
}

/* Inicio do tipo de conexão*/
define("connection_type", "localhost");

if (connection_type == "localhost") {
    require "security/database/localhost.php";
}  else if (connection_type == "DigitalOcean") {
    require "security/digital_ocean.php";
} else if (connection_type == "aws") {
    require "security/aws.php";
} else if (connection_type == "cleardb") {
    require "security/cleardb.php";
}else {
    echo "Nenhum tipo de conexão está definido";
}
/* Fechamento do tipo de conexão*/

function get_client_ip()
{
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if (isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if (isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if (isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

define("SITE_TITLE", "SteamLogger");
define("SITE_KEYWORDS", "Steam Msg Logger");
define("SITE_OWNER", "Moisés Freitas");
define("SITE_DESCRIPTION", "Graphical interface of the SteamLogger project. Created by: " . SITE_OWNER . "");

define("SITE_THUMBNAIL", "img/thumbnails/default.png");

define("github_repository", "https://github.com/Medronic/SteamLoggerWebPanel");

define("developer_name", "Moisés Freitas");
define("developer_site", "http://estudando.me/");
define("year_created", "2022");

$protocolo = (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == "on") ? "https" : "http");
$urlBase = '://' . $_SERVER['HTTP_HOST'];
$urlCompleta = '://' . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'] . '?' . $_SERVER['QUERY_STRING'];
$urlCompletav2 = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'] . '?' . $_SERVER['QUERY_STRING'];

$domain = 'http://' . $_SERVER["SERVER_NAME"];

define("site_dominio", $domain);
define("site_url_base", $protocolo . $urlBase);
define("site_url_atual", $protocolo . $urlCompleta);
define("steam_link", "https://steamcommunity.com/profiles/76561198405044969");
define("github_link", "https://github.com/Medronic");

// Todos IDs para indentificar o tipo de conta do Usuário
define('demo_id', '1');
define("membro_id", "2");
define("vip_id", "3");
define("editor_id", "4");
define("mod_id", "5");
define("admin_id", "6");