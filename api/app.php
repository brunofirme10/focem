<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");

//PRODUCTION OPTIONS

require_once('./env.php');

define('DB_CHARSET', 'utf8');
define('ROOT', $_SERVER['DOCUMENT_ROOT']);
require_once('app/helpers/PHPMailer/class.phpmailer.php');
require_once('app/Model.php');
require_once('app/Mail.php');
require_once('app/UploadHelper.php');

$_POST = json_decode(file_get_contents("php://input"), true);

if (isset($_POST) && !empty($_POST['action']) && ($_POST['action'] == 'save')) {
    
    $result = new stdClass();
    $result->success = false;
    $result->message = "Erro ao inserir!";
    
    $_registers = new Model();
    $_registers->_tabela = "registers";
    
    $data = $_POST;   
    $payload = [];

    foreach($data as $key => $array_inputs) {
        if(is_array($array_inputs)) {
            foreach($array_inputs as $name => $value) {
                $payload[$key . '_' . $name] = utf8_decode($value);
            }
        }
    }
    $inserted = $_registers->insert($payload);
    if(!empty ($inserted)) {
        $result = new stdClass();
        $result->success = true;
        $result->message = "Dados inseridos com sucesso!";
        $result->id = $inserted;
    }

    if(!empty ($data['user']['email'])) {
        $mail = new Mail();
        // $mail->sendToUser($data['user']['email']);

        $email = "ediano.gama@wavez.com.br";
        echo $mail->sendToUser($email, $_POST['user']);
    }

    echo json_encode($result);
    return;
}


