<?php
// chamando os arquivos necessários do DOMPdf
require_once 'dompdf/lib/html5lib/Parser.php';
require_once 'dompdf/lib/php-font-lib-master/src/FontLib/Autoloader.php';
require_once 'dompdf/lib/php-svg-lib-master/src/autoload.php';
require_once 'dompdf/src/Autoloader.php';

// definindo os namespaces
Dompdf\Autoloader::register();
use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();
$options->set('isRemoteEnabled', TRUE);

// inicializando o objeto Dompdf
$dompdf = new Dompdf($options);

// coloque nessa variável o código HTML que você quer que seja inserido no PDF

/*
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
<link href="style.css" rel="stylesheet" />
</head>
<body>

    <table>        
        <tr>
            <td style="text-align:left; width:50%;">
                <p style="text-align:left">
                    <img width="250px" src="img/medcorp-logo-pdf.jpg">
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
            <span colspan="1">R$ </span> <b>'.number_format($SomaTotalSemanalGrafico, 2,",",".").'</b>
            </td>

            <td style="text-align:center; width:25%;"> 
            <span>R$ </span> <b>'.number_format($SomaTotalMensalGrafico, 2,",",".").'</b>

            </td> 

            <td style="text-align:center; width:25%;"> 
            <span>R$ </span> <b>'.number_format($somaTotalPacientesSemanalMedCorp, 2,",",".").'</b>
            </td>

            <td style="text-align:center; width:25%;"> 
            <span>R$ </span> <b>'.number_format($somaTotalPacientesMensalMedCorp, 2,",",".").'</b>
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
*/

// carregamos o código HTML no nosso arquivo PDF
$dompdf->loadHtml($codigo_html);

// (Opcional) Defina o tamanho (A4, A3, A2, etc) e a oritenação do papel, que pode ser 'portrait' (em pé) ou 'landscape' (deitado)
$dompdf->setPaper('A4', 'portrait');
$dompdf->set_option('defaultFont', 'Arial');
// Renderizar o documento
$dompdf->render();

// pega o código fonte do novo arquivo PDF gerado
$output = $dompdf->output();

// defina aqui o nome do arquivo que você quer que seja salvo
file_put_contents("geraPdf/calculo-tego.pdf", $output);

// redirecionamos o usuário para o download do arquivo
die("<script>location.href = 'geraPdf/calculo-tego.pdf';</script>");

?>