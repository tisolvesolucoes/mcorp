<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>MedCorp</title>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/teste.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>

    <div class="container" style="border: 1px solid #000;">
        <h1>MedCorp</h1>
        <p>Comparativo.</p>
        <div class="row" style=" font-size:small; font-weight: 800;">
            <form action="/action_page.php">

                <div class="row arrumaTextoCentro">

                    <div class="col-md-12" style="background-color:lavender;">
                        PACIENTES EM USO DE CATÉTER:
                    </div>

                    <div class="col-md-5"></div>

                    <div class="form-group col-md-2">
                        <input type="text" class="form-control" placeholder="PACIENTES" id="numeroPacientes">
                    </div>

                </div>

                <div class="row" style="font-weight: 800;"></div>

                <div class="col-md-4" style="background-color:cornflowerblue;">

                    <div class="row">

                        <div class="col-md-3">
                        </div>

                        <div class="col-md-3">
                            CONECTOR/
                            <br> TAMPA
                            <br> UNITÁRIO
                        </div>

                        <div class="col-md-3">
                            HEPARINA - FRASCO
                        </div>

                        <div class="col-md-3">
                            LUVA - PAR
                        </div>

                    </div>


                    <div class="row arrumaInput">

                        <div class="col-md-3"></div>

                        <div class="form-group col-md-3">
                            <input type="text" 
                            onkeypress="$(this).mask('#.##0,00', {reverse: true});"
                            class="form-control" 
                            placeholder="R$:"
                            id="conectorTampa">
                        </div>

                        <div class="form-group col-md-3">
                            <input type="text" 
                            onkeypress="$(this).mask('#.##0,00', {reverse: true});"
                            class="form-control" 
                            placeholder="R$:"
                            id="heparina">
                        </div>

                        <div class="form-group col-md-3">
                            <input type="text" 
                            onkeypress="$(this).mask('#.##0,00', {reverse: true});"
                            class="form-control" 
                            placeholder="R$:"
                            id="luva">
                        </div>

                    </div>


                    <div class="row ">
                        <div class="col-md-auto arrumaTextoCentro" style="background-color:hotpink;">
                            Custo por paciente
                        </div>

                        <div class="col-md-3">
                        </div>
                        <div class="col-md-3 arrumaAlinhamento">
                            Custo Diário
                        </div>

                        <div class="col-md-3 arrumaAlinhamento">
                            Custo Semanal
                        </div>

                        <div class="col-md-3 arrumaAlinhamento">
                            Custo Mensal
                        </div>

                    </div>



                    <div class="row">

                        <div class="col-md-3">
                            CONECTOR
                        </div>

                        <div class="col-md-3 arrumaAlinhamento" id="cellConectorTampa">
                            R$
                        </div>

                        <div class="col-md-3 arrumaAlinhamento" id="cellHeparina">
                            R$oi
                        </div>

                        <div class="col-md-3 arrumaAlinhamento" id="cellLuva">
                            R$
                        </div>

                    </div>




                    <div class="row">

                        <div class="col-md-3">
                            HEPARINA
                        </div>
                        
                        <div class="col-md-3 arrumaAlinhamento">
                            R$ 24,00
                        </div>

                        <div class="col-md-3 arrumaAlinhamento">
                            R$ 12,00
                        </div>

                        <div class="col-md-3 arrumaAlinhamento">
                            R$ 10,00
                        </div>

                    </div>



                    <div class="row">

                        <div class="col-md-3">
                            LUVA
                        </div>
                        
                        <div class="col-md-3 arrumaAlinhamento">
                            R$ 4,00
                        </div>

                        <div class="col-md-3 arrumaAlinhamento">
                            R$ 1,00
                        </div>

                        <div class="col-md-3 arrumaAlinhamento">
                            R$ 4,00
                        </div>

                    </div>


                    <div class="row">

                        <div class="col-md-3">
                        </div>
                        
                        <div class="col-md-3">
                        TOTAL
                        </div>

                        <div class="col-md-3 arrumaAlinhamento">
                            R$ 231,00
                        </div>

                        <div class="col-md-3 arrumaAlinhamento">
                            R$ 43,00
                        </div>

                    </div>


                    <div class="row">

                        <div class="col-md-1"></div>

                        <div class="col-md-11">
                            CUSTO POR PACIENTE COM CATÉTER
                        </div>

                    </div>


                    <div class="row">

                        <div class="col-md-3"></div>
                        
                        <div class="col-md-3 arrumaAlinhamento">
                        TOTAL
                        </div>

                        <div class="col-md-3 arrumaAlinhamento">
                            R$ 1,00
                        </div>

                        <div class="col-md-3 arrumaAlinhamento">
                            R$ 4,00
                        </div>

                    </div>


                </div>

                <div class="col-md-4" style="background-color:greenyellow;">



                    <div class="row">

                        <div class="col-md-3"></div>

                        <div class="col-md-3">
                            TEGO - UNIDADE
                            <br><br>
                        </div>

                        <div class="col-md-3">
                            HEPARINA
                        </div>

                        <div class="col-md-3">
                            LUVA - PAR
                        </div>

                    </div>

                    <div class="row arrumaInput">

                        <div class="col-md-3"></div>

                        <div class="form-group col-md-3">
                            <input type="text" 
                            onkeypress="$(this).mask('#.##0,00', {reverse: true});"
                            class="form-control" 
                            placeholder="R$:"
                            id="tegoUnidade">
                        </div>

                        <div class="form-group col-md-3">
                            <input type="text" 
                            onkeypress="$(this).mask('#.##0,00', {reverse: true});"
                            class="form-control"
                            placeholder="R$:"
                            id="heparinaMedCOrp">
                        </div>

                        <div class="form-group col-md-3">
                            <input type="text" 
                            onkeypress="$(this).mask('#.##0,00', {reverse: true});"
                            class="form-control" 
                            placeholder="R$:"
                            id="luvaMedCOrp">
                        </div>

                    </div>

                    <div class="row">
                        
                        <div class="col-md-auto arrumaTextoCentro">
                            Custo por paciente
                        </div>

                        <div class="col-md-3">
                        </div>
                        <div class="col-md-3 arrumaAlinhamento">
                            Custo Diário
                        </div>

                        <div class="col-md-3 arrumaAlinhamento">
                            Custo Semanal
                        </div>

                        <div class="col-md-3 arrumaAlinhamento">
                            Custo Mensal
                        </div>

                    </div>


                    <div class="row">

                        <div class="col-md-3">
                        TEGO
                        </div>
                        <div class="col-md-3 arrumaAlinhamento">
                            R$ 24,00
                        </div>

                        <div class="col-md-3 arrumaAlinhamento">
                            R$ 12,00
                        </div>

                        <div class="col-md-3 arrumaAlinhamento">
                            R$ 10,00
                        </div>

                    </div>



                    <div class="row">

                        <div class="col-md-3">
                        HEPARINA
                        </div>
                        <div class="col-md-3 arrumaAlinhamento">
                            R$ 24,00
                        </div>

                        <div class="col-md-3 arrumaAlinhamento">
                            R$ 12,00
                        </div>

                        <div class="col-md-3 arrumaAlinhamento">
                            R$ 10,00
                        </div>

                    </div>

                    
                    <div class="row">

                        <div class="col-md-3">
                        LUVA
                        </div>
                        <div class="col-md-3 arrumaAlinhamento">
                            R$ 24,00
                        </div>

                        <div class="col-md-3 arrumaAlinhamento">
                            R$ 12,00
                        </div>

                        <div class="col-md-3 arrumaAlinhamento">
                            R$ 10,00
                        </div>

                    </div>

                    
                    <div class="row">

                        <div class="col-md-3"></div>

                        <div class="col-md-3">
                        TOTAL
                        </div>

                        <div class="col-md-3 arrumaAlinhamento">
                            R$ 231,00
                        </div>

                        <div class="col-md-3 arrumaAlinhamento">
                            R$ 43,00
                        </div>

                    </div>


                    <div class="row">

                        <div class="col-md-1"></div>

                        <div class="col-md-11">
                            CUSTO POR PACIENTE COM CATÉTER
                        </div>

                    </div>


                    <div class="row">

                        <div class="col-md-3"></div>
                        
                        <div class="col-md-3 arrumaAlinhamento">
                        TOTAL
                        </div>

                        <div class="col-md-3 arrumaAlinhamento">
                            R$ 1,00
                        </div>

                        <div class="col-md-3 arrumaAlinhamento">
                            R$ 4,00
                        </div>

                    </div>


                </div>


                <div class="col-md-4" style="background-color:mediumaquamarine;">
                    div 3
                </div>

        </div>

        <button type="submit" id="botao" class="btn btn-primary">Submit</button>

        </form>

    </div>
    <div class="col-6" style="background-color:lavenderblush;">
        <canvas id="primeiroGrafico"></canvas>
    </div>

    </div>

    <button id="myBtn">Try it</button>

<script>
        let numeroPacientes;    
        let custoPacienteTotalMensal;
        let x = document.getElementById("numeroPacientes");

$(document).ready(function(){

    let conectorTampa       = $("#conectorTampa");
    let heparina            = $("#heparina");
    let luva                = $("#luva");
    let tegoUnidade         = $("#tegoUnidade");
    let heparinaMedCOrp     = $("#heparinaMedCOrp");
    let luvaMedCOrp         = $("#luvaMedCOrp");


        let valorConectorTampa  = conectorTampa.val();
        let valorHeparina       = heparina.val();
        let valorLuva           = luva.val();
        let valorTegoUnidade    = tegoUnidade.val();
        let valorHeparinaMedCOrp= heparinaMedCOrp; 
        let valorLuvaMedCOrp    = luvaMedCOrp.val();

            valorConectorTampa = valorConectorTampa.replace(',','');
            valorConectorTampa = valorConectorTampa.replace('.','');

            valorHeparina = valorHeparina.replace(',','');
            valorHeparina = valorHeparina.replace('.','');

            valorLuva = valorLuva.replace(',','');
            valorLuva = valorLuva.replace('.','');

            valorTegoUnidade = valorTegoUnidade.replace(',','');
            valorTegoUnidade = valorTegoUnidade.replace('.','');

            valorLuvaMedCOrp = valorLuvaMedCOrp.replace(',','');
            valorLuvaMedCOrp = valorLuvaMedCOrp.replace('.','');


        conectorTampa.focusout( function(){

            let resultado = valorConectorTampa * 2;

            var r = resultado.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'});
                document.getElementById("cellConectorTampa").innerHTML = r;
                console.log(r);
        });

        /*
        heparina.focusout( function(){
            let resultado = valorHeparina * 2;
            var r = resultado.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'});
                document.getElementById("cellHeparina").innerHTML = r;
        });

        luva.focusout( function(){
            let resultado = valorLuva * 2;
            var r = resultado.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'});
                document.getElementById("cellLuva").innerHTML = r;
        });

        tegoUnidade.focusout( function(){
            let resultado = valorTegoUnidade * 2;
            var r = resultado.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'});
                document.getElementById("cellValorTegoUnidade").innerHTML = r;
        });

        heparinaMedCOrp.focusout( function(){
            let resultado = valorHeparinaMedCOrp * 2;
            var r = resultado.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'});
                document.getElementById("cellValorHeparinaMedCOrp").innerHTML = r;
        });

        luvaMedCOrp.focusout( function(){
            let resultado = valorLuvaMedCOrp * 2;
            var r = resultado.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'});
                document.getElementById("cellValorLuvaMedCOrp").innerHTML = r;
        });
        
        */
});

</script>
</body>

</html>