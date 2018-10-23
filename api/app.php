api/app.phpapi/app.php<?php
//PRODUCTION OPTIONS
define('DB_TYPE', 'dblib');
define('DB_HOST', 'wavezdigital.c5haejo7j0gc.sa-east-1.rds.amazonaws.com');
define('DB_USER', 'wavezdigital');
define('DB_PASS', 'Wzx8bF-C');
define('DB_NAME', 'cidades_inteligentes');


define('DB_CHARSET', 'utf8');
define('ROOT', $_SERVER['DOCUMENT_ROOT']);
require_once('app/helpers/PHPMailer/class.phpmailer.php');
require_once('app/Model.php');
require_once('app/Mail.php');
require_once('app/UploadHelper.php');

if (isset($_POST) && !empty($_POST['action']) && ($_POST['action'] == "cadastro-solucao")) {
    
    $result = new stdClass();
    $result->success = false;
    $result->message = "Erro ao inserir!";
    
    $_perfilEmpresarial = new Model();
    $_perfilEmpresarial->_tabela = "perfil_empresarial";
    
    $post  = $_POST;   
    
    $files = $_FILES;
   
    $post['solucao']['modelo_dados']     = implode(',', $post['solucao']['modelo_dados']);
    $post['solucao']['area_aplicacao']   = implode(',',  $post['solucao']['area_aplicacao']);
    $post['solucao']['cenario_aplicado'] = implode(',', $post['solucao']['cenario_aplicado']);

    $_solucao = $post['solucao'];
  
    unset($post['solucao']);
    unset($post['id_pai']);

    $obj_solucao = array();
    foreach ($_solucao as $key => $value) {
        if ((!isset($value)) || ($value != "") && ($value != 'undefined')) {
            $obj_solucao[$key] = trim($value);
        }
    }
   

    if(isset( $obj_solucao['id_empresa']) &&  !empty($obj_solucao['id_empresa'])){
        $_inscreva_solucoes = new Model();
        $_inscreva_solucoes->_tabela = "inscreva_solucoes";
        $responseSolucoes = $_inscreva_solucoes->insert($obj_solucao);
        if( !empty($responseSolucoes) ){
            $result = new stdClass();
            $result->success = true;
            $result->message = "Dados inseridos com sucesso!";
            $result->id = $responseSolucoes;
        }
        $id_empresa =  $_solucao['id_empresa'];
    }else{
       
        $perfil_empresarial = array();
        foreach ($post as $key => $value) {
            if ((!isset($value)) || ($value != "") && ($value != 'undefined')) {
                $perfil_empresarial[$key] = trim($value);
            }
        }
        unset($perfil_empresarial['action']);
        unset($perfil_empresarial['empresa_pesquisa']);

        $upload = new UploadHelper();
        $upload->setPath( ROOT.'/uploads/');
        $logomarca = "";

        if (isset($files['file']) && !empty($files['file']['size'])) { 
            $logomarca = $upload->setFile($files['file'])->uploadFile();
        }
        if(isset($perfil_empresarial['file'])){ unset($perfil_empresarial['file']); }
       
        $perfil_empresarial['file_url'] = $logomarca;
       
        $responsePerfil = $_perfilEmpresarial->insert($perfil_empresarial);
        
        if(!empty($responsePerfil) ){
            $obj_solucao["id_empresa"] = $responsePerfil;
            
            $_inscreva_solucoes = new Model();
            $_inscreva_solucoes->_tabela = "inscreva_solucoes";
            $responseSolucoes = $_inscreva_solucoes->insert($obj_solucao);
           
            if( !empty($responseSolucoes) ){
                $result = new stdClass();
                $result->success = true;
                $result->message = "Dados inseridos com sucesso!";
                $result->id = $responseSolucoes;              
            }
            $id_empresa =  $obj_solucao["id_empresa"];
        }
    }
    $email = "";
    if(isset( $post['email'])){
        $email = $post['email'];
    }else{
        $_response =  $_perfilEmpresarial->query( 'select email from perfil_empresarial where id='.$id_empresa);
        $email     =  $_response[0]['email'] ? $_response[0]['email'] : '';
    }
    
    if($email){
        $mail = new Mail();
        $email = "ediano.gama@wavez.com.br";
        $mail->sendSuccessTo($email);
        echo "send ?";
        die;
    }
    echo json_encode($result);
}

if (isset($_POST) && !empty($_POST['action']) && ($_POST['action'] == "upload")) {
    $conexao = new Model();
    $conexao->_tabela = "inscreva_solucoes_anexos";

    $id_pai = isset($_POST['id_pai']) ? $_POST['id_pai'] : '0';

    $upload = new UploadHelper();
    $upload->setPath( ROOT.'/uploads/anexos/');
 
    $post = $_POST;
    $files = $_FILES;

    $anexo = $upload->setFile($files['file'])->uploadFile();
    
    $obj = array(
        "id_pai" => $post['id_pai'],
        "url_file" => $anexo,
    );
    $response = $conexao->insert($obj);

    $result = new stdClass();
    
    if($response){
        $result->success = true;
        $result->message = "Dados inseridos com sucesso!";
    }else{
        $result->success = false;
        $result->message = "Erro ao inserir!";
    }
    echo json_encode($result);
}
if ( isset($_POST) && !empty($_POST['empresa_pesquisa']) && ($_POST['action'] == "search") ) {
    $conexao = new Model();
    $empresa_pesquisa = $_POST['empresa_pesquisa'];


    $query = "SELECT * FROM perfil_empresarial where cpf_cpnj = '". $empresa_pesquisa ."'";
    $response = $conexao->query($query);
    
    $result = new stdClass();
    
    if($response){
        $result->success = true;
        $result->data = $response[0];
        $result->message = "Cadastro, proxima etapa!";
    }else{
        $result->success = false;
        $result->data = [];
        $result->message = "Ainda não cadastrado";
    }
    echo json_encode($result);
}

