    <?php
    //ob_start();
    include 'config/configs.php';
    //session_start();
   // print_r($_POST);
    $nome                                                 =  strtoupper($_POST['nome']);
    $email                                                =  $_POST['email'];
    $telefone                                             =  $_POST['telefone'];
    $cargo                                                =  $_POST['cargo'];
    $empresa                                              =  strtoupper($_POST['empresa']);
    $msg                                                  =  $_POST['msg'];

    // Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
    require("config/mail/class.phpmailer.php");
    // Inicia a classe PHPMailer
    $mail                                                 = new PHPMailer();
    // Define os dados do servidor e tipo de conexão
    //                                                    =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    $mail->IsSMTP(); // Define que a mensagem será SMTP
    $mail->Host                                           = "smtp.medcorpnet.com.br"; // Endereço do servidor SMTP
    $mail->SMTPAuth                                       = true; // Usa autenticação SMTP? (opcional)
    $mail->Username                                       = 'medcorpnet@medcorpnet.com.br'; // Usuário do servidor SMTP
    $mail->Password                                       = 'dri031251'; // Senha do servidor SMTP
    $mail->Port                                           = '587';






    // Define o remetente
    //                                                    =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    $mail->From                                           =  'medcorpnet@medcorpnet.com.br'; // Seu e-mail
    $fromname                                             =  "Formulário Comparativo - MEDCORP";
    $mail->FromName                                       =  utf8_decode($fromname); // Seu nome
    // Define os destinatário(s)
    //                                                    =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    $mail->AddAddress('medcorpnet@medcorpnet.com.br',("$nome"));
    
    //$mail->AddCC('contato@gtlynx.com.br', 'Pedrinho'); // Copia
    //$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta
    // Define os dados técnicos da Mensagem
    //                                                    =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
    $mail->CharSet                                        = 'iso-8859-1'; // Charset da mensagem (opcional)
    // Define a mensagem (Texto e Assunto)
    //                                                    =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    $assunto                                              = "Comparativo tego - MEDCORP - Usuario ".$nome." através do formulário do site"; // Assunto da mensagem
    $corpodoemail                                         =
    "<strong style='font-size:16px;'>Mensagem Automatica</strong><hr><br>Foi feito contato através do formulário Comparativo site MEDCORP.<br><br>
    <strong>Contato de: </strong>".$nome."<br>
    <strong>Comparativo: </strong>
    <strong>O seu email para contato é: </strong ><a href ='mailto:".$email."'>".$email."</a><br>
    <strong>Telefone: </strong>".$telefone."<br>
    <strong>Cargo: </strong>".$cargo."<br>
    <strong>Empresa: </strong>".$empresa."<br>
    <strong>Mensagem: </strong>".$msg."<br>
    <br> Obrigado <br><br>"; // corpo da mensagem
    //$mail->Subject                                      = "GTLYNX - Contato"; // Assunto da mensagem
    $mail->Subject                                        = utf8_decode($assunto); // Assunto da mensagem
    $mail->Body                                           = utf8_decode($corpodoemail);
    $mail->AltBody                                        = "Novo Cliente";
    // Define os anexos (opcional)
    //                                                    =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    /*$mail->AddAttachment("temp/{$nome}.zip", "{$nome}.zip");  // Insere um anexo*/
    // Envia o e-mail
    $enviado                                   = $mail->Send();
    // Limpa os destinatários e os anexos
    $mail->ClearAllRecipients();
    $mail->ClearAttachments();



if ($enviado) {
include 'estrutura/header.php';

    echo'

    <section id="content">

    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <!--1 linha -->
                <!--box principal -->
                <div class="col-md-12" class="box_principal">
                    <div class="contact-info-wrapper clearfix">
                    <h2>CONTATO ENVIADO COM SUCESSO!</h2>
                    <hr>

                    </div><!-- Contact Info End -->

                <br>
            </div>
        </div>
    </div>
</div>
        </div>
    </div>
    </section>';

include 'estrutura/footer.php';



}













    ?>