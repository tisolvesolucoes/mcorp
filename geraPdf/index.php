<?php
// chamando os arquivos necessários do DOMPdf
require_once 'dompdf/lib/html5lib/Parser.php';
require_once 'dompdf/lib/php-font-lib-master/src/FontLib/Autoloader.php';
require_once 'dompdf/lib/php-svg-lib-master/src/autoload.php';
require_once 'dompdf/src/Autoloader.php';
/*
    $numeroPacientes                    = $_REQUEST['numeroPacientes'];
    $conectorTampa                      = $_REQUEST['conectorTampa'];
    $heparina                           = $_REQUEST['heparina'];
    $luva                               = $_REQUEST['luva'];
    $tegoUnidade                        = $_REQUEST['tegoUnidade'];
    $heparinaMedCorp                    = $_REQUEST['heparinaMedCorp'];
    $luvaMedCorp                        = $_REQUEST['luvaMedCorp'];
    $economiaMensal                     = $_REQUEST['economiaMensal'];
    $economiaAnual                      = $_REQUEST['economiaAnual'];
    $SomaTotalSemanalGrafico            = $_REQUEST['SomaTotalSemanalGrafico'];
    $SomaTotalMensalGrafico             = $_REQUEST['SomaTotalMensalGrafico'];
    $somaTotalPacientesSemanalMedCorp   = $_REQUEST['somaTotalPacientesSemanalMedCorp'];
    $somaTotalPacientesMensalMedCorp    = $_REQUEST['somaTotalPacientesMensalMedCorp'];
*/
// definindo os namespaces
Dompdf\Autoloader::register();
use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();
$options->set('isRemoteEnabled', TRUE);

// inicializando o objeto Dompdf
$dompdf = new Dompdf($options);

// coloque nessa variável o código HTML que você quer que seja inserido no PDF
$codigo_html = '
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Atenção, apenas um teste</title>
<style>
* { font-family: Arial; , sans-serif}
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
                <td>
                        <p style="text-align:left">
                            <img width="250px" src="img/comparativo.jpg">
                        </p>
                </td> 
            </tr>
        <tr>
        <td class="titulo">
            <h1> Calculadora Tego</h1>
        </td> 
        </tr>
        <tr>
        <td class="box-pacientes"><h3>PACIENTES EM USO DE CATÉTER</h3></td>
        </tr>
            <tr>
            <td class="box-pacientes">'.$numeroPacientes.'</td>
            </tr>
        <tr>
        <td>
            <table>
            <tr class="head">
                <td>
                CONECTOR/
                TAMPA
                </td> 

                <td>
                HEPARINA - FRASCO
                </td>

                <td>
                LUVA - PAR 
                </td>
                
                <td>TEGO - UNIDADE 
                </td>
                <td>HEPARINA
                </td>
                <td>LUVA - PAR
                </td>
            </tr>
                
            <tr>
                <td>
               <span class="head">R$ -</span>'.$conectorTampa.'
                </td> 

                <td>
                <span class="head">R$ -</span>'.$heparina.'
                </td>

                <td>
                <span class="head">R$ -</span>'.$luva.'
                </td>
                
                <td> 
                <span class="head">R$ -</span>'.$tegoUnidade.'
                </td>
                <td>
                <span class="head">R$ -</span> ZERO
                </td>
                <td>
                <span class="head">R$ -</span>'.$luvaMedCorp.'
                </td>
            </tr>

            </table>

        </td>
        </tr>
            <tr> 
                <td>
                
                        <table border="1" width="100%">
                            <tr class="coluna-head">
                                <td>
                                CUSTO POR PACIENTE COM CATÉTER 
                                </td> 

                                <td>
                                CUSTO POR PACIENTE COM CATÉTER 
                                </td>
                            </tr>
                        </table>


                </td>
            </tr>

            <tr> 
                <td>
                
                        <table border="1" width="100%">
                            <tr class="result-paciente">
                                <td>
                                TOTAL SEMANAL
                                </td> 

                                <td> 
                                TOTAL MENSAL
                                </td>

                                <td>
                                TOTAL SEMANAL
                                </td> 

                                <td> 
                                TOTAL MENSAL
                                </td>
                               
                            </tr> 
                            <tr class="box-pacientes">
                                <td> 
                                <span class="head">R$ -</span> '.$SomaTotalSemanalGrafico.'
                                </td>
                               
                                <td> 
                                <span class="head">R$ -</span>'.$SomaTotalMensalGrafico .'
                               
                                </td> 

                                <td> 
                                <span class="head">R$ -</span>'.$somaTotalPacientesSemanalMedCorp.'
                                </td>
                               
                                <td> 
                                <span class="head">R$ -</span>'.$somaTotalPacientesMensalMedCorp.'
                                </td>
                            </tr>
                        </table>

                </td>
            </tr>
            <tr>
            <td class="diferenca-title"><h2>DIFERENÇA DE CUSTO POR MÊS</h2></td>
            </tr>
                <tr> 
                    <td>

                        <table border="1" width="100%">
                        <tr class="diferenca-txt">
                            <td>
                            CONECTOR/TAMPA 
                            </td> 

                            <td> 
                                X
                            </td>
                             <td>
                             MEDCORP
                            </td> 
                           
                        </tr> 
                        <tr class="diferenca-num">
                            <td> 
                            <span class="head">R$ -</span>'.$somaTotalPacientesSemanalMedCorp .'
                            </td> 

                            <td>
                           
                            </td> 
                            
                            <td> 
                            <span class="head">R$ -</span>'.$somaTotalPacientesMensalMedCorp.'
                            </td>
                    
                        </tr>
                     </table>
                    <td>
                </tr>


                <tr> 
                <td>

                <table border="1" width="100%" style="background-color:#1b365d;">
                <tr class="economia-txt">
                    <td>
                    ECONOMIA POR MÊS 
                    </td> 
                   
                     <td>
                         ECONOMIA ANUAL
                    </td> 
                   
                </tr> 
                <tr class="economia-num" >
                    <td> 
                    <span class="head">R$ -</span>'.$economiaMensal.'
                    </td> 
                    
                    <td> 
                    <span class="head">R$ -</span>'.$economiaAnual.'
                    </td>
            
                </tr>
                
             </table>
                <td>
            </tr>

    </table>


</body>
</html>';

// carregamos o código HTML no nosso arquivo PDF
$dompdf->loadHtml($codigo_html);

// (Opcional) Defina o tamanho (A4, A3, A2, etc) e a oritenação do papel, que pode ser 'portrait' (em pé) ou 'landscape' (deitado)
$dompdf->setPaper('A4', 'portrait');

// Renderizar o documento
$dompdf->render();

// pega o código fonte do novo arquivo PDF gerado
$output = $dompdf->output();

// defina aqui o nome do arquivo que você quer que seja salvo
file_put_contents("nome_do_arquivo.pdf", $output);

// redirecionamos o usuário para o download do arquivo
die("<script>location.href = 'nome_do_arquivo.pdf';</script>");

?>