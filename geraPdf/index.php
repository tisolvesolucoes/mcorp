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
$codigo_html = '<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Atenção, apenas um teste</title>
<style>
* { font-family: sans-serif; }
</style>

</head>
<body>

    <p style="text-align:center">
        <img width="400px" src="../img/comparativo.jpg">
    </p>
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
    <div class="container" id="geraPDF">

    <div class="row" style=" font-size:small; font-weight: 800;">

        <div class="row" style="font-weight: 600;"></div>

        <div class="col-md-4 coluna-calculo">

            <div class="row">

                <div class="col-md-4">
                    <div class="title-calculo">
                        CONECTOR/
                        <br> TAMPA
                        <br> UNITÁRIO
                    </div>
              </div>

                <div class="col-md-4">
                    <div class="title-calculo">
                        HEPARINA - FRASCO
                    </div>
              </div>

                <div class="col-md-4">
                    <div class="title-calculo">
                        LUVA - PAR
                    </div>
              </div>

            </div>


            <div class="row ">
                <div class="col-md-auto arrumaTextoCentro coluna-head">
                    Custo por paciente
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>

                <div class="col-md-3 arrumaAlinhamento">
                    <b>Diário</b>
                </div>

                <div class="col-md-3 arrumaAlinhamento">
                    <b>Semanal</b>
                </div>

                <div class="col-md-3 arrumaAlinhamento">
                    <b>Mensal</b>
                </div>

            </div>



            <div class="row line-calculo-bg">

                <div class="col-md-3">
                    CONECTOR
                </div>

                <div class="col-md-3 arrumaAlinhamento" id="cellConectorTampa">R$&nbsp;19,74</div>

                <div class="col-md-3 arrumaAlinhamento" id="cellConectorTampaSemanal">R$&nbsp;59,22</div>

                <div class="col-md-3 arrumaAlinhamento" id="cellConectorTampaMensal">R$&nbsp;236,88</div>

            </div>




            <div class="row">

                <div class="col-md-3">
                    HEPARINA
                </div>

                <div class="col-md-3 arrumaAlinhamento" id="cellHeparina">R$&nbsp;6,58</div>

                <div class="col-md-3 arrumaAlinhamento" id="cellHeparinaSemanal">R$&nbsp;19,74</div>

                <div class="col-md-3 arrumaAlinhamento" id="cellHeparinaMensal">R$&nbsp;78,96</div>

            </div>



            <div class="row line-calculo-bg">

                <div class="col-md-3">
                    LUVA
                </div>

                <div class="col-md-3 arrumaAlinhamento" id="cellLuva">R$&nbsp;17,48</div>

                <div class="col-md-3 arrumaAlinhamento" id="cellLuvaSemanal">R$&nbsp;52,44</div>

                <div class="col-md-3 arrumaAlinhamento" id="cellLuvaMensal">R$&nbsp;209,76</div>

            </div>


            <div class="row">

                <div class="col-md-3">
                    TOTAL
                </div>

                <div class="col-md-3">

                </div>

                <div class="col-md-3 arrumaAlinhamento" id="cellTotalSemanal">R$&nbsp;151,14</div>

                <div class="col-md-3 arrumaAlinhamento" id="cellTotalMensal">R$&nbsp;604,56</div>

            </div>


            <div class="row">

                <div class="col-md-1"></div>

                <div class="col-md-12 coluna-head arrumaTextoCentro">
                    CUSTO POR PACIENTE COM CATÉTER
                </div>

            </div>


            <div class="row">

                <div class="col-md-4 arrumaAlinhamento result-paciente">
                    TOTAL
                </div>

                <div class="col-md-4 arrumaAlinhamento result-paciente" id="cellSomaTotalPacientesSemanal">R$&nbsp;755,70</div>

                <div class="col-md-4 arrumaAlinhamento result-paciente" id="cellSomaTotalPacientesMensal">R$&nbsp;3.022,80</div>

            </div>


        </div>
            <!--
                 fim estrutura comparacao  
            -->

        <!--
            inicio estrutura tego 
            -->
        <div class="col-md-4 coluna-calculo">


            <div class="row">


                <div class="col-md-4">
                    <div class="title-calculo">
                        TEGO - UNIDADE
                    </div>
               </div>

                <div class="col-md-4">
                    <div class="title-calculo">
                        HEPARINA
                    </div>
                    <input type="text" class="form-control" readonly="" value="ZERO" id="heparinaMedCorp">
                </div>

                <div class="col-md-4">
                    <div class="title-calculo">
                        LUVA - PAR
                    </div>
               </div>

            </div>

            <div class="row">

                <div class="col-md-auto arrumaTextoCentro coluna-head">
                    Custo por paciente
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-3 arrumaAlinhamento">
                    <b>Diário</b>
                </div>

                <div class="col-md-3 arrumaAlinhamento">
                    <b>Semanal</b>
                </div>

                <div class="col-md-3 arrumaAlinhamento">
                    <b>Mensal</b>
                </div>

            </div>

            <div class="row line-calculo-bg">

                <div class="col-md-3">
                    TEGO
                </div>
                <div class="col-md-3 arrumaAlinhamento" id="cellTegoUnidade">R$&nbsp;8,68</div>

                <div class="col-md-3 arrumaAlinhamento" id="cellTegoUnidadeSemanal">R$&nbsp;26,04</div>

                <div class="col-md-3 arrumaAlinhamento" id="cellTegoUnidadeMensal">R$&nbsp;104,16</div>

            </div>


            <div class="row">

                <div class="col-md-3">
                    HEPARINA
                </div>
                <div class="col-md-3 arrumaAlinhamento" id="cellHeparinaMedCorp">
                    ZERO
                </div>

                <div class="col-md-3 arrumaAlinhamento" id="cellHeparinaMedCorpSemanal">
                    ZERO
                </div>

                <div class="col-md-3 arrumaAlinhamento" id="cellHeparinaMedCorpMensal">
                    ZERO
                </div>

            </div>

            <div class="row line-calculo-bg">

                <div class="col-md-3">
                    LUVA
                </div>
                <div class="col-md-3 arrumaAlinhamento" id="cellLuvaMedCorp">R$&nbsp;4,44</div>

                <div class="col-md-3 arrumaAlinhamento" id="cellLuvaMedCorpSemanal">R$&nbsp;13,32</div>

                <div class="col-md-3 arrumaAlinhamento" id="cellLuvaMedCorpMensal">R$&nbsp;53,28</div>

            </div>

            <div class="row">

                <div class="col-md-3">TOTAL</div>

                <div class="col-md-3">

                </div>

                <div class="col-md-3 arrumaAlinhamento" id="cellTotalSemanalMedCorp">R$&nbsp;39,36</div>

                <div class="col-md-3 arrumaAlinhamento" id="cellTotalMensalMedCorp">R$&nbsp;157,44</div>

            </div>

            <div class="row">

                <div class="col-md-1"></div>

                <div class="col-md-12 coluna-head arrumaTextoCentro">
                    CUSTO POR PACIENTE COM CATÉTER
                </div>

            </div>

            <div class="row">

                <div class="col-md-4 arrumaAlinhamento result-paciente">
                    TOTAL
                </div>

                <div class="col-md-4 arrumaAlinhamento result-paciente" id="cellSomaTotalPacientesSemanalMedCorp">R$&nbsp;196,80</div>

                <div class="col-md-4 arrumaAlinhamento result-paciente" id="cellSomaTotalPacientesMensalMedCorp">R$&nbsp;787,20</div>

            </div>


        </div>
            <!--
                fim estrutura tego 
            -->


            <!--
                inicio estrutura grafico 
            -->
        <div class="col-md-4 coluna-grafico"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px none; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe>
            <canvas id="Grafico" style="display: block; width: 360px; height: 180px;" width="360" height="180"></canvas>
        </div>

            <!--
            fim estrutura grafico
            -->

    </div>


    <div class="row">

        <div class="col-md-12 diferenca-title">
            DIFERENÇA DE CUSTO POR MÊS
        </div>

        <div class="col-md-4 diferenca-txt">
            CONECTOR/TAMPA
            <div class="col-md-12 diferenca-num" id="CellDiferencaCustoConector">R$&nbsp;3.022,80</div>
        </div>

        <div class="col-md-4 x-custo"> X </div>

        <div class="col-md-4 diferenca-txt">
            MEDCORP
            <div class="col-md-12 diferenca-num" id="CellDiferencaCustoMedCorp">R$&nbsp;787,20</div>
        </div>


        <div class="col-md-6 economia-txt">
            ECONOMIA POR MÊS
            <div class="col-md-12 economia-num" id="CellEconomiaMensal">R$&nbsp;2.235,60</div>
        </div>



        <div class="col-md-6 economia-txt">
            ECONOMIA ANUAL
            <div class="col-md-12 economia-num" id="CellEconomiaAnual">R$&nbsp;26.827,20</div>
        </div>


    </div>


        <!--
        fim estrutura container 
        -->
    
</div>

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
die("<script>location.href='nome_do_arquivo.pdf';</script>");

?>