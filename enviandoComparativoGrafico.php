<?php 

    $nome		= $_REQUEST['nome'];
	$telefone 	= $_REQUEST['telefone'];
	$email		= $_REQUEST['email'];
	$cargo 		= $_REQUEST['cargo'];
    
    $numeroPacientes                    = $_REQUEST['numeroPacientesFormEmail'];
    $conectorTampa                      = $_REQUEST['conectorTampaFormEmail'];
    $heparina                           = $_REQUEST['heparinaFormEmail'];
    $luva                               = $_REQUEST['luvaFormEmail'];
    $tegoUnidade                        = $_REQUEST['tegoUnidadeFormEmail'];
    $heparinaMedCorp                    = $_REQUEST['heparinaMedCorpFormEmail'];
    $luvaMedCorp                        = $_REQUEST['luvaMedCorpFormEmail'];
    $economiaMensal                     = number_format($_REQUEST['economiaMensal'], 2,",",".");
    $economiaAnual                      = number_format($_REQUEST['economiaAnual'], 2,",",".");
    $SomaTotalSemanalGrafico            = number_format($_REQUEST['SomaTotalSemanalGrafico'], 2,",",".");
    $SomaTotalMensalGrafico             = number_format($_REQUEST['SomaTotalMensalGrafico'], 2,",",".");
    $somaTotalPacientesSemanalMedCorp   = number_format($_REQUEST['somaTotalPacientesSemanalMedCorp'], 2,",",".");
    $somaTotalPacientesMensalMedCorp    = number_format($_REQUEST['somaTotalPacientesMensalMedCorp'], 2,",",".");



	$data_envio = date('d/m/Y');
	$hora_envio = date('H:i:s');

//enviar ;
 // Adiciona o arquivo class.phpmailer.php - você deve especificar corretamente o caminho da pasta com o este arquivo.
 require_once("enviaEmail/PHPMailerAutoload.php");
 // Inicia a classe PHPMailer
 $mail = new PHPMailer();

 $mail->Host = 'smtp.office365.com';
 $mail->SMTPSecure = 'tls';

 // DEFINIÇÃO DOS DADOS DE AUTENTICAÇÃO - Você deve auterar conforme o seu domínio!
 $mail->IsSMTP(); // Define que a mensagem será SMTP
 //$mail->Host = "smtp.medcorpnet.com.br"; // Seu endereço de host SMTP
 $mail->SMTPAuth = true; // Define que será utilizada a autenticação -  Mantenha o valor "true"
 $mail->Port = 587; // Porta de comunicação SMTP - Mantenha o valor "587"
 //$mail->SMTPSecure = true; // Define se é utilizado SSL/TLS - Mantenha o valor "false"
 //$mail->SMTPAutoTLS = true; // Define se, por padrão, será utilizado TLS - Mantenha o valor "false"
 $mail->Username = 'calculadoratego@medcorpnet.com.br'; // Conta de email existente e ativa em seu domínio
 $mail->Password = 'Cal@abb123@#$'; // Senha da sua conta de email
 // DADOS DO REMETENTE
 $mail->Sender = "calculadoratego@medcorpnet.com.br"; // Conta de email existente e ativa em seu domínio
 $mail->From = "calculadoratego@medcorpnet.com.br"; // Sua conta de email que será remetente da mensagem
 $mail->FromName = "medcorpnet.com.br"; // Nome da conta de email
 // DADOS DO DESTINATÁRIO
 $mail->AddAddress('calculadoratego@medcorpnet.com.br', 'Comparativo - site'); // Define qual conta de email receberá a mensagem
 //$mail->AddAddress('recebe2@dominio.com.br'); // Define qual conta de email receberá a mensagem
 //$mail->AddCC('copia@dominio.net'); // Define qual conta de email receberá uma cópia
 //$mail->AddBCC('copiaoculta@dominio.info'); // Define qual conta de email receberá uma cópia oculta
 // Definição de HTML/codificação
 $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
 $mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)
 
 // DEFINIÇÃO DA MENSAGEM

 $mail->Subject = "Calculadora - site"; // Assunto da mensagem
 //$mail->Body .= "Nome: ".$_POST['nome'].""; // Texto da mensagem
 //$mail->Body .= "E-mail: ".$_POST['email'].""; // Texto da mensagem
 //$mail->Body .= "Assunto: ".$_POST['assunto'].""; // Texto da mensagem
 //$mail->Body .= "Mensagem: ".nl2br($_POST['mensagem']).""; // Texto da mensagem


$codigo_html = '
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Med Corp Net - Calculadora Tego</title>
<style>
* { font-family: Arial, sans-serif;}
body{font-family: Arial, sans-serif;}
    table{width: 100%;}
@media print {
  selector{
    font-family: Arial, sans-serif; 
  }
}
td{padding:5px;}
    .box-pacientes {
        background: #1b365d;
        width: 45%;
        padding: 30px;
        margin: 0 auto;
        color:#fff;
        font-weight: 800;
        text-align: center;
    }
    .titulo{
        color: #1B365D;
        text-align: center;
    }

    .head{
        font-size: 12px;
        font-weight: bold;
    }



    .coluna-calculo{
        padding: 10px;
    }
    
    .coluna-calculo .row{
        margin: 0;
        padding: 7px 0;
    }
    
    .line-calculo-bg{
        background: #f6f7ff;
    }
    
    .coluna-grafico .row{
        
    }
    .coluna-head{
        background: #1b365d;
        padding: 10px 0;
        color: #FFF;
        text-transform: uppercase;
    }
    
    .arrumaTextoCentro{
        text-align: center;
    }
    
    .arrumaAlinhamento{
        white-space: nowrap;
        font-size: small;
        text-align: center;
        font-weight: 300!important;
    }
    
     .arrumaInput input{
        font-size: small;
    }
    
    .box-pacientes {
        background: #1b365d;
        width: 45%;
        padding: 30px;
        margin: 0 auto;
    }
    
    .box-pacientes h3{
        color: #FFF;
    }
    
    .box-pacientes input{
        width: 250px;
        text-align: center;
        margin: 0 auto;
    }
    
    .title-calculo {
        height: 80px;
        vertical-align: bottom;
        padding-bottom: 10px;
        display: table-cell;
    } 
    
    .coluna-grafico{
        margin-top:115px;
    }
    
    .result-paciente{
        font-size: 18px;
    }
    
    .diferenca-title {
        text-align: center;
        font-size: 20px;
        font-weight: bold;
        line-height: 35px;
        border-top: 3px solid #1B365D;
        padding-top: 40px;
        margin-top: 40px;
        color: #1B365D;
        margin-bottom: 30px;
    }
    
    .diferenca-txt{
        text-align: center;
        font-size: 25px;
        padding-top: 20px;
    }
    
    .diferenca-num{
        text-align: center;
        font-size: 35px;
        font-weight: bold;
        padding-top: 20px;
        color: #656565;
    }
    
    .x-custo {
        text-align: center;
        font-size: 50px;
        padding: 40px 0 20px;
    }
    
    .economia-txt {
        font-size: 30px;
        text-align: center;
        background: #1b365d;
        padding: 50px 0;
        margin-top: 60px;
        color: #FFF;
    }
    
    .economia-num {
        font-size: 40px;
        margin-top: 20px;
        font-weight: bold;
        color: #66e566;
    }


</style>
<link href="https://www.medcorpnet.com.br/css/style.css" rel="stylesheet" />
</head>
<body>

    <table>        
        <tr>
            <td style="text-align:left; width:50%;">
                <p style="text-align:left">
                    <img width="250px" src="https://www.medcorpnet.com.br/img/medcorp-logo-pdf.jpg">
                </p>
            </td> 
            <td style="text-align:right; width:50%;">
            Medcorp Hospitalar Ltda.<br>
			ESCRITÓRIO:<br>
			Rua Arminda, 93 - 3º andar - CEP: 04545 100 Vila Olímpia - São Paulo/SP - Brasil<br>
			Fone/Fax: +55 11-3849-8992</td>
				
        </tr>
        <tr>
            <td class="titulo" colspan="4">
                <h1> Calculadora Tego</h1>
            </td> 
        </tr>
        <tr>
            <td class="coluna-head" colspan="4" style="padding:0;" ><h3 style="text-align:center;">PACIENTES EM USO DE CATÉTER - '.$numeroPacientes.'</h3></td>
        </tr>
    </table>
    <table>
        <tr>
            <td class="coluna-head" style="text-align:center; width:50%;">
            ATUAL
            </td> 

            <td class="coluna-head" style="text-align:center;  width:50%;">
            MEDCORP
            </td>
        </tr>
    </table>
    <table>        
      <tr>
        <td style="text-align:center; width:50%;">
           
            CONECTOR/ TAMPA <br>
            <span class="head">R$</span> <b>'.$conectorTampa.'</b>
            <br><br>
            HEPARINA - FRASCO <br>
            <span class="head">R$</span> <b>'.$heparina.'</b>
            <br><br>
            LUVA - PAR <br>
            <span class="head">R$</span> <b>'.$luva.'</b>
                 
        </td>
        <td style="text-align:center; width:50%;">
           
            TEGO - UNIDADE<br>
            <span class="head">R$</span> <b>'.$tegoUnidade.'</b>
            <br><br>
            HEPARINA<br>
            <span class="head">R$</span> ZERO
            <br><br>
            LUVA - PAR<br>
            <span class="head">R$</span> <b>'.$luvaMedCorp.'</b>

        </td>
    </tr>
    </table>
    <table>
        <tr> 
            <td class="coluna-head" style="text-align:center; width:50%;">
                CUSTO POR PACIENTE COM CATÉTER 
            </td> 
                
                    
            <td class="coluna-head" style="text-align:center; width:50%;">
            CUSTO POR PACIENTE COM CATÉTER 
            </td>
         </tr>
    </table>
    <table>
        <tr class="result-paciente"> 
            
            <td colspan="1" style="text-align:center; width:25%;">
                TOTAL SEMANAL
            </td> 

            <td colspan="1" style="text-align:center; width:25%;"> 
                TOTAL MENSAL
            </td>
                
           <td colspan="1" style="text-align:center; width:25%;">
                TOTAL SEMANAL
            </td> 

            <td colspan="1" style="text-align:center; width:25%;"> 
                TOTAL MENSAL
            </td>

        </tr> 
    </table>
    <table>
        <tr>
            <td style="text-align:center; width:25%;"> 
            <span colspan="1">R$ </span> <b>'.$SomaTotalSemanalGrafico.'</b>
            </td>

            <td style="text-align:center; width:25%;"> 
            <span>R$ </span> <b>'.$SomaTotalMensalGrafico.'</b>

            </td> 

            <td style="text-align:center; width:25%;"> 
            <span>R$ </span> <b>'.$somaTotalPacientesSemanalMedCorp.'</b>
            </td>

            <td style="text-align:center; width:25%;"> 
            <span>R$ </span> <b>'.$somaTotalPacientesMensalMedCorp.'</b>
            </td>
        </tr>
    </table>
    <table>

        <tr>
            <td class="diferenca-title" style="margin-bottom: 0;padding-top: 0px;">
            <h2>DIFERENÇA DE CUSTO POR MÊS</h2></td>
        </tr>
    </table>
    <table>
        <tr class="diferenca-txt"> 

            <td class="diferenca-num" style="text-align:center; width:33%;">
                <span style="font-size:20px;">CONECTOR/TAMPA</span> <br>
                <span class="head">R$</span> <b>'.$somaTotalPacientesSemanalMedCorp .'</b>
            </td> 

            <td style="text-align:center; width:33%;"> 
                <span>X</span>
            </td>
                <td class="diferenca-num" style="text-align:center; width:33%;">
                <span style="font-size:20px;">MEDCORP</span><br>
                <span class="head">R$</span> <b>'.$somaTotalPacientesMensalMedCorp.'</b>
            </td> 


        </tr>
    </table>
    
       

    <table  width="100%" style="background-color:#1b365d;">
        <tr class="economia-txt">
            <td>
            ECONOMIA POR MÊS 
            </td> 

             <td>
                 ECONOMIA ANUAL
            </td> 

        </tr> 
        <tr class="economia-num" >
            <td style="text-align:center; width:50%;"> 
            <span class="head">R$</span> <b>'.$economiaMensal.'</b>
            </td> 

            <td style="text-align:center; width:50%;"> 
            <span class="head">R$</span> <b>'.
            $economiaAnual.'</b>
            </td>

        </tr>

     </table>

	</body>
</html>';



  $mail->Body = '<table width="510" border="1" cellpadding="1" cellspacing="1">
				<tr>
				   <td width="500">Nome:'.$nome.'</td>
					  </tr>
					  <tr>
					<td width="320">E-mail:<b>'.$email.'</b></td>
					   </tr>
					<tr>
					<td width="320">Telefone:<b>'.$telefone.'</b></td>
					  </tr>
					  <tr>
					<td width="320">Cargo:'.$cargo.'</td>
				  </tr>
				  </td>
			</tr>
			<tr>
			  <td>Este e-mail foi enviado em <b>'.$data_envio.'</b> às <b>'.$hora_envio.'</b></td>
			</tr>
			<tr>
			  <td>				
			  <a href="https://www.medcorpnet.com.br/calculadora-tego.php">Calculadora Tego</a>	
			  </td>
			</tr>
			
		  </table>';

  $mail->Body .= $codigo_html;

 // ENVIO DO EMAIL
 //$enviado = $mail->Send();
 // Limpa os destinatários e os anexos
 $mail->ClearAllRecipients();
 // Exibe uma mensagem de resultado do envio (sucesso/erro)
 if (1 == 1) {//$enviado
   //echo "E-mail enviado com sucesso!";
   include("geraPdf/index.php");
 } else {
   echo "Não foi possível enviar o e-mail.";
   echo "Detalhes do erro: " . $mail->ErrorInfo;
 }
 ?>
 