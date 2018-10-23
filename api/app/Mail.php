<?php
class Mail{
    protected $sendTo = '';
    protected $subject = '';
    protected $body = '';

    protected $_sender = 'noreply@abdi.com.br';
    protected $_sender_pass = 'Cc0M@!MKT';
    protected $_sender_email_reply =  "noreply@abdi.com.br";
    protected $_sender_email_name = "Cidades Inteligentes";

    public function sendSuccessTo($to){
        $this->sendTo = $to;
        $this->subject = utf8_decode('Cidades Inteligentes - OBRIGADO PELO CADASTRO ');
        $this->body =  '<html class="no-js" lang="en">
                            <head>
                                <meta charset="utf-8" />
                                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                                <title>Cidades Inteligentes</title>
                            </head>
                            <body>
                                <h5>OBRIGADO PELO CADASTRO</h5>
                                <p>Recebemos no nosso banco de dados o registro da sua empresa e solução.</p>
                                
                                Qualquer dúvida entre em contato com:<br>
                                Carlos Venícius Frees<br>
                                Coordenação de Difusão Tecnológica<br>
                                carlos.frees@abdi.com.br<br>
                                (61) 3962.8683<br><br>
                                Até logo!
                                <hr>
                            </body>
                        </html>';
        $this->sendMail();
    }
    public function sendMail(){
        $mail = new PHPMailer();
        $result = array();
        $emailReply = $this->_sender_email_reply;
        $nomeReply  = $this->_sender_email_name;;

        $mail->IsSMTP();                                      // Set mailer to use SMTP
        // $mail->Host         = 'smtp.zoho.com';  // Specify main and backup server
        $mail->Host         = "correio.abdi.com.br";  // Specify main and backup server
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
        $mail->SMTPDebug  = 4;

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