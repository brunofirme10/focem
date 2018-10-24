<?php

class Mail {
    protected $sendTo;
    protected $subject;
    protected $body;

    protected $_sender = MAIL_USER;
    protected $_sender_pass = MAIL_PASSWORD;
    protected $_sender_email_reply =  MAIL_USER;
    protected $_sender_email_name = MAIL_USER_NAME;
    protected $_admin_email = MAIL_NOTIFICATION_ADMIN;

    public function sendToUser($to, $user) {
        $this->sendTo = $to;
        $this->subject = utf8_decode('FOCEM ABDI - OBRIGADO PELO CADASTRO');
        $this->body = $this->handleMail($user, file_get_contents(ROOT . '/app/helpers/resources/email/register_success.html'));
        $this->sendMail();
        $this->notificationToAdmin($user);
    }

    protected function notificationToAdmin($user) {
        $this->sendTo = $this->_admin_email;
        $this->subject = utf8_decode('FOCEM ABDI - Novo cadastro no site');
        $this->body = $this->handleMail($user, file_get_contents(ROOT . '/app/helpers/resources/email/notification.html'));
        $this->sendMail();
    }

    protected function handleMail($data, $file) {
        !empty ($data['name']) ? $file = str_replace('%name%', $data['name'], $file) : '';
        !empty ($data['email']) ? $file = str_replace('%email%', $data['email'], $file) : '';
        return $file;
    }

    public function sendMail(){
        $mail = new PHPMailer();
        $result = array();
        $emailReply = $this->_sender_email_reply;
        $nomeReply  = $this->_sender_email_name;

        $mail->IsSMTP();                                      // Set mailer to use SMTP
        // $mail->Host         = 'smtp.zoho.com';  // Specify main and backup server
        $mail->Host         = MAIL_HOST;  // Specify main and backup server
        $mail->SMTPAuth     = true;  
        $mail->Username     = $this->_sender;                            // SMTP username
        $mail->Password     = $this->_sender_pass;                           // SMTP password
        $mail->SMTPSecure   = 'ssl';                            // Enable encryption, 'ssl' also accepted
        $mail->Port         = 465;

        
        $mail->SetFrom($emailReply, $nomeReply);
        $mail->From     = $emailReply;
        $mail->FromName = $nomeReply;
        $mail->AddAddress($this->sendTo , $this->subject); // Add a recipient
        $mail->AddReplyTo($emailReply, $nomeReply);
        $mail->SMTPDebug  = 0; // 4 = FULL

        $mail->WordWrap = 50;                                 // Set word wrap to 50 characters
        $mail->IsHTML(true);      

        $mail->Subject  = ($this->subject); // Assunto da mensagem

        $mail->Body     = $this->body;
        $mail->AltBody  = "Este é o corpo da mensagem de teste, em Texto Plano! \r\n :)";

        $enviado = $mail->Send();

        // Limpa os destinatários e os anexos
        $mail->ClearAllRecipients();
        $mail->ClearAttachments();

        if ($enviado) {
            $result = array(
                "success" => true,
                "message" => "Email Enviado com sucesso"
            );
        } else {
            $result = array(
                "success" => false,
                "message" => "Não foi possível enviar o e-mail.",
                "erro"    => "<b>Informações do erro:</b> " . $mail->ErrorInfo
            );
        }
        return $result;
    }
}