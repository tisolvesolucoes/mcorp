$(document).ready(function () {

    //let custoPacienteTotalMensal;

    var formulario = document.querySelector('form');
    let numeroPacientes = $("#numeroPacientes");
    numeroPacientes.focus();

    let qtdSessoesMensais = $("#qtdSessoesMensais");
    let qtdSessoesMensaisTego = $("#qtdSessoesMensaisTego");

    let conectorInfusaoUnidade = $("#conectorInfusaoUnidade");
    let solucoesDeLock = $("#solucoesDeLock");
    let kitMateriaisDescartaveis = $("#kitMateriaisDescartaveis");
    let tegoUnidade = $("#tegoUnidade");
    let solucoesDeLockMedCorp = 0;
    let kitMateriaisDescartaveisMedCorp = $("#kitMateriaisDescartaveisMedCorp");



    document.getElementById("calcula").addEventListener("click", calcula);
    document.getElementById("btSomaKit").addEventListener("click", somaKit);


    function calcula(chart) {
        //validar os dados
        // encher os campos com calculos
        // montar o grafico
            
                validacaoCalc();
                encheCampo();

                let soma = somaTotal();
                let somaTotalPacientes = somaTotalPaciente(soma);
        
                let somaMedCorp = somaTotalMedCorp();

                let somaTotalPacientesMedCorp = somaTotalPacienteMedCorp(somaMedCorp, chart);


                somaTotalPacientesMedCorp[0] = parseFloat(somaTotalPacientesMedCorp[0]);
                somaTotalPacientesMedCorp[0] = parseFloat(somaTotalPacientesMedCorp[1]);                
                somaTotalPacientesMedCorp[0] = parseFloat(somaTotalPacientesMedCorp[2]);
                
                


                    add_data(chart,
                        somaTotalPacientes[0],
                        somaTotalPacientes[1],
                        somaTotalPacientes[2],
                        //somaTotalPacientes[3],
                        somaTotalPacientesMedCorp[1],
                        somaTotalPacientesMedCorp[1],
                        somaTotalPacientesMedCorp[2]
                    );

    }


    var ctxL = document.getElementById("Grafico").getContext('2d');

    var myLineChart = new Chart(ctxL, {
        type: 'bar',
        data:
        {
            labels:
                [
                    "Diário Atual", 
                    "Semanal Atual",
                    "Mensal Atual",
                    "Diário Tego", 
                    "Semanal Tego",
                    "Mensal Tego"
                ], 

            datasets:
                [
                    {
                        label: "Custo Atual",
                        data: [],
                        backgroundColor: [
                            "rgba(255,0,0, 1)" 
                            , "rgba(255,0,0, 1)"
                            , "rgba(255,0,0, 1)"
                            , "rgba(27,54,93, 1)"
                            , "rgba(27,54,93, 1)"
                            , "rgba(27,54,93, 1)"
                        ]
                       
                    }
                   
                ]
        },

        options: {
            legend: { display: true },
            title: {
                display: true,
                text: 'Calculadora Tego'
            },
            responsive: true,
            animation: {
                duration: 10,
            },

            tooltips: {
                mode: 'label',
                callbacks: {
                    label: function (tooltipItem, data) {
                        return data.datasets[tooltipItem.datasetIndex].label + ": " + tooltipItem.yLabel;
                    }
                }
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: false
                    }
                }]
            }

        },

    });


    function add_data(chart, cDiario, cSemanal, cMensal, cDiarioMedCorp,cSemanalMedCorp, cMensalMedCorp) {
        console.log(chart, cDiario, cSemanal, cMensal, cDiarioMedCorp,cSemanalMedCorp, cMensalMedCorp);
        myLineChart.data.datasets[0].data.push(cDiario);
        myLineChart.data.datasets[0].data.push(cSemanal);
        myLineChart.data.datasets[0].data.push(cMensal);
        myLineChart.data.datasets[0].data.push(cDiarioMedCorp);
        myLineChart.data.datasets[0].data.push(cSemanalMedCorp);
        myLineChart.data.datasets[0].data.push(cMensalMedCorp);

         myLineChart.update();
    }
    
    
    


    function validacao() {
        var formulario = document.contactForm;
        var nome = formulario.nome;
        var email = formulario.email;

        if (nome.value == "") {
            alert("Insira um nome válido.");
            return false;
        }

        if (email.value.indexOf("@") == -1 || email.value.indexOf(".") == -1) {
            alert("Insira um email válido");
            return false;
        }

        return true;
    }


    function encheCampo() {

        calculaConectorInfusaoUnidade();
        calculaSolucoesDeLock();
        calculakitMateriaisDescartaveis();
        calculaTegoUnidade();

    }



    function calculaConectorInfusaoUnidade() {

        let valorConectorInfusaoUnidade = conectorInfusaoUnidade.val();
        valorConectorInfusaoUnidade = limpaPonto(valorConectorInfusaoUnidade);

        let resultado = valorConectorInfusaoUnidade * 2;
        let resultadoSemanal = resultado;
        let resultadoMensal = resultadoSemanal * 4;

        var r = resultado.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
        var rSemanal = resultadoSemanal.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
        var rMensal = resultadoMensal.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });

        document.getElementById("cellConectorInfusaoUnidade").innerHTML = r;
        document.getElementById("cellConectorInfusaoUnidadeSemanal").innerHTML = rSemanal;
        document.getElementById("cellConectorInfusaoUnidadeMensal").innerHTML = rMensal;

        //calculaTotalMensal(chart, 1);
    }


    function calculaSolucoesDeLock() {

        let valorsolucoesDeLock = solucoesDeLock.val();

        valorsolucoesDeLock = limpaPonto(valorsolucoesDeLock);


        let resultado = valorsolucoesDeLock * 1;
        let resultadoSemanal = resultado * 3;
        let resultadoMensal = resultadoSemanal * 4;

        var r = resultado.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
        var rSemanal = resultadoSemanal.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
        var rMensal = resultadoMensal.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });


        document.getElementById("cellsolucoesDeLock").innerHTML = r;
        document.getElementById("cellsolucoesDeLockSemanal").innerHTML = rSemanal;
        document.getElementById("cellsolucoesDeLockMensal").innerHTML = rMensal;

        //calculaTotalMensal(chart, 1);
    }

    function calculakitMateriaisDescartaveis() {

        let valorkitMateriaisDescartaveis = kitMateriaisDescartaveis.val();

        valorkitMateriaisDescartaveis = limpaPonto(valorkitMateriaisDescartaveis);

        let resultado = valorkitMateriaisDescartaveis * 2;
        let resultadoSemanal = resultado * 3;
        let resultadoMensal = resultadoSemanal * 4;

        let valorkitMateriaisDescartaveisInput = valorkitMateriaisDescartaveis.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
        let r = resultado.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
        let rSemanal = resultadoSemanal.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
        let rMensal = resultadoMensal.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });


        document.getElementById("cellkitMateriaisDescartaveis").innerHTML = r;
        document.getElementById("cellkitMateriaisDescartaveisSemanal").innerHTML = rSemanal;
        document.getElementById("cellkitMateriaisDescartaveisMensal").innerHTML = rMensal;


        let resultadovalorkitMateriaisDescartaveisMedCorp = valorkitMateriaisDescartaveis * 2;
        let resultadoSemanalvalorkitMateriaisDescartaveisMedCorp = resultadovalorkitMateriaisDescartaveisMedCorp;
        let resultadoMensalvalorkitMateriaisDescartaveisMedCorp = resultadoSemanalvalorkitMateriaisDescartaveisMedCorp * 4;

        let rvalorkitMateriaisDescartaveisMedCorp = resultadovalorkitMateriaisDescartaveisMedCorp.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
        let rSemanalvalorkitMateriaisDescartaveisMedCorp = resultadoSemanalvalorkitMateriaisDescartaveisMedCorp.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
        let rMensalvalorkitMateriaisDescartaveisMedCorp = resultadoMensalvalorkitMateriaisDescartaveisMedCorp.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });

        document.getElementById("cellkitMateriaisDescartaveisMedCorp").innerHTML = rvalorkitMateriaisDescartaveisMedCorp;
        document.getElementById("cellkitMateriaisDescartaveisMedCorpSemanal").innerHTML = rSemanalvalorkitMateriaisDescartaveisMedCorp;
        document.getElementById("cellkitMateriaisDescartaveisMedCorpMensal").innerHTML = rMensalvalorkitMateriaisDescartaveisMedCorp;

        valorkitMateriaisDescartaveisInput = valorkitMateriaisDescartaveisInput.replace('.', ',');
        document.getElementById("kitMateriaisDescartaveisMedCorp").value = valorkitMateriaisDescartaveisInput;

        //calculaTotalMensal(chart, 1);
    }

    function calculaTegoUnidade() {

        let valorTegoUnidade = tegoUnidade.val();

        valorTegoUnidade = limpaPonto(valorTegoUnidade);

        let resultado = valorTegoUnidade * 2;
        let resultadoSemanal = resultado;
        let resultadoMensal = resultadoSemanal * 4;

        var r = resultado.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
        var rSemanal = resultadoSemanal.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
        var rMensal = resultadoMensal.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });

        document.getElementById("cellTegoUnidade").innerHTML = r;
        document.getElementById("cellTegoUnidadeSemanal").innerHTML = rSemanal;
        document.getElementById("cellTegoUnidadeMensal").innerHTML = rMensal;


        //calculaTotalMensal(chart, 1);
    }

    function somaTotal() {

        let valorConectorInfusaoUnidade = conectorInfusaoUnidade.val();
        let valorsolucoesDeLock = solucoesDeLock.val();
        let vkitMateriaisDescartaveis = kitMateriaisDescartaveis.val();
        let valorTegoUnidade = tegoUnidade.val();
        let valorkitMateriaisDescartaveis = vkitMateriaisDescartaveis;


        valorConectorInfusaoUnidade = limpaPonto(valorConectorInfusaoUnidade);
        valorsolucoesDeLock = limpaPonto(valorsolucoesDeLock);
        valorkitMateriaisDescartaveis = limpaPonto(valorkitMateriaisDescartaveis);


        let resultadoDiarioValorConectorInfusaoUnidade = valorConectorInfusaoUnidade * 2;
        let resultadoSemanalValorConectorInfusaoUnidade = resultadoDiarioValorConectorInfusaoUnidade;
        let resultadoMensalConectorInfusaoUnidade = resultadoSemanalValorConectorInfusaoUnidade * 4;

        let resultadoDiarioValorsolucoesDeLock = 0;

        if(valorsolucoesDeLock != ""){
            resultadoDiarioValorsolucoesDeLock = parseFloat(valorsolucoesDeLock);
        }

        let resultadoSemanalValorsolucoesDeLock = resultadoDiarioValorsolucoesDeLock * 3;
        let resultadoMensalValorsolucoesDeLock = resultadoSemanalValorsolucoesDeLock * 4;


        let resultadoDiariokitMateriaisDescartaveis = valorkitMateriaisDescartaveis * 2;
        let resultadoSemanalkitMateriaisDescartaveis = resultadoDiariokitMateriaisDescartaveis * 3;
        let resultadoMensalkitMateriaisDescartaveis = resultadoSemanalkitMateriaisDescartaveis * 4;


        let somaTotalDiario = resultadoDiarioValorConectorInfusaoUnidade + resultadoDiarioValorsolucoesDeLock + resultadoDiariokitMateriaisDescartaveis;
        let somaTotalSemanal = resultadoSemanalValorConectorInfusaoUnidade + resultadoSemanalValorsolucoesDeLock + resultadoSemanalkitMateriaisDescartaveis;
        let somaTotalMensal = resultadoMensalConectorInfusaoUnidade + resultadoMensalValorsolucoesDeLock + resultadoMensalkitMateriaisDescartaveis;

        let rsomaTotalDiario = somaTotalDiario.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
        let rsomaTotalSemanal = somaTotalSemanal.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
        let rsomaTotalMensal = somaTotalMensal.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });

        document.getElementById("cellTotalDiario").innerHTML = rsomaTotalDiario;
        document.getElementById("cellTotalSemanal").innerHTML = rsomaTotalSemanal;
        document.getElementById("cellTotalMensal").innerHTML = rsomaTotalMensal;

        document.getElementById("somaTotalSemanalFormEmail").innerHTML = somaTotalSemanal;
        document.getElementById("somaTotalMensalFormEmail").innerHTML = somaTotalMensal;
        

        var s = [somaTotalDiario, somaTotalSemanal, somaTotalMensal];

        return s;

    }




    function somaTotalMedCorp() {


        let valorkitMateriaisDescartaveis = kitMateriaisDescartaveis.val();
        let valorTegoUnidade = tegoUnidade.val();

        let valorkitMateriaisDescartaveisMedCorp = limpaPonto(valorkitMateriaisDescartaveis);
        valorTegoUnidade = limpaPonto(valorTegoUnidade);


        let resultadoTegoUnidade = valorTegoUnidade * 2;
        let resultadoDiarioTegoUnidade = resultadoTegoUnidade;
        let resultadoSemanalTegoUnidade = resultadoTegoUnidade;
        let resultadoMensalTegoUnidade = resultadoSemanalTegoUnidade * 4;


        let resultadoDiariokitMateriaisDescartaveisMedCorp = valorkitMateriaisDescartaveisMedCorp * 2;
        let resultadoSemanalkitMateriaisDescartaveisMedCorp = resultadoDiariokitMateriaisDescartaveisMedCorp;
        let resultadoMensalkitMateriaisDescartaveisMedCorp = resultadoSemanalkitMateriaisDescartaveisMedCorp * 4;

        let somaTotalDiario = resultadoDiarioTegoUnidade + resultadoDiariokitMateriaisDescartaveisMedCorp;
        let somaTotalSemanal = resultadoSemanalTegoUnidade + resultadoSemanalkitMateriaisDescartaveisMedCorp;
        let somaTotalMensal = resultadoMensalTegoUnidade + resultadoMensalkitMateriaisDescartaveisMedCorp;


        let rsomaTotalDiario = somaTotalDiario.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
        let rsomaTotalSemanal = somaTotalSemanal.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
        let rsomaTotalMensal = somaTotalMensal.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });

        document.getElementById("cellTotalDiarioMedCorp").innerHTML = rsomaTotalDiario;
        document.getElementById("cellTotalSemanalMedCorp").innerHTML = rsomaTotalSemanal;
        document.getElementById("cellTotalMensalMedCorp").innerHTML = rsomaTotalMensal;
 

        $("#somaTotalSemanalMedCorpFormEmail").val(somaTotalSemanal);
        $("#somaTotalMensalMedCorpFormEmail").val(somaTotalMensal);

        
        var s = [somaTotalDiario, somaTotalSemanal, somaTotalMensal];

        return s;

    }


    function somaTotalPaciente(soma) {

        let somaTotalDiario = soma[0];
        let somaTotalSemanal = soma[1];
        let somaTotalMensal = soma[2];

        let numeroPacientes = parseInt(document.getElementById("numeroPacientes").value);
        let qtdSessoesMensais = parseInt(document.getElementById("qtdSessoesMensais").value);

        let rsomaTotalDiario = somaTotalDiario.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
        let rsomaTotalSemanal = somaTotalSemanal.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
        let rsomaTotalMensal = somaTotalMensal.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });


        let somaTotalPacientesDiario = somaTotalDiario * numeroPacientes * qtdSessoesMensais;
        let somaTotalPacientesSemanal = somaTotalSemanal * numeroPacientes * qtdSessoesMensais;
        let somaTotalPacientesMensal = somaTotalMensal * numeroPacientes * qtdSessoesMensais;


        rsomaTotalPacientesDiario = somaTotalPacientesDiario.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
        rsomaTotalPacientesSemanal = somaTotalPacientesSemanal.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
        rsomaTotalPacientesMensal = somaTotalPacientesMensal.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });

        document.getElementById("cellSomaTotalPacientesDiario").innerHTML = rsomaTotalPacientesDiario;
        document.getElementById("cellSomaTotalPacientesSemanal").innerHTML = rsomaTotalPacientesSemanal;
        document.getElementById("cellSomaTotalPacientesMensal").innerHTML = rsomaTotalPacientesMensal;
        document.getElementById("CellDiferencaCustoConector").innerHTML = rsomaTotalPacientesMensal;


        $("#somaTotalPacientesSemanalFormEmail").val(somaTotalPacientesSemanal);
        $("#somaTotalPacientesMensalFormEmail").val(somaTotalPacientesMensal);


        var s = [somaTotalDiario, somaTotalSemanal, somaTotalMensal];

        return s;

    }


    function somaTotalPacienteMedCorp(soma, chart) {

        let somaTotalDiario = soma[0];
        let somaTotalSemanal = soma[1];
        let somaTotalMensal = soma[2];

        let numeroPacientes = parseInt(document.getElementById("numeroPacientes").value);
        let qtdSessoesMensaisTego = parseInt(document.getElementById("qtdSessoesMensaisTego").value);

        let somaTotalPacientesDiarioMedCorp = somaTotalDiario * numeroPacientes * qtdSessoesMensaisTego;
        let somaTotalPacientesSemanalMedCorp = somaTotalSemanal * numeroPacientes * qtdSessoesMensaisTego;
        let somaTotalPacientesMensalMedCorp = somaTotalMensal * numeroPacientes * qtdSessoesMensaisTego;

        let rsomaTotalPacientesDiarioMedCorp = somaTotalPacientesDiarioMedCorp.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
        let rsomaTotalPacientesSemanalMedCorp = somaTotalPacientesSemanalMedCorp.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
        let rsomaTotalPacientesMensalMedCorp = somaTotalPacientesMensalMedCorp.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });


        document.getElementById("cellSomaTotalPacientesDiarioMedCorp").innerHTML = rsomaTotalPacientesDiarioMedCorp;
        document.getElementById("cellSomaTotalPacientesSemanalMedCorp").innerHTML = rsomaTotalPacientesSemanalMedCorp;
        document.getElementById("cellSomaTotalPacientesMensalMedCorp").innerHTML = rsomaTotalPacientesMensalMedCorp;
        document.getElementById("CellDiferencaCustoMedCorp").innerHTML = rsomaTotalPacientesMensalMedCorp;



        let cellSomaTotalPacientesSemanal = document.getElementById("cellSomaTotalPacientesSemanal").innerHTML;
        let resSomaTotalPacientesSemanal = cellSomaTotalPacientesSemanal.split(";");


        let SomaTotalSemanalGrafico = resSomaTotalPacientesSemanal[1].replace('.', '');
        SomaTotalSemanalGrafico = SomaTotalSemanalGrafico.replace(',', '.');


        let cellSomaTotalPacientesMensal = document.getElementById("cellSomaTotalPacientesMensal").innerHTML;
        let res = cellSomaTotalPacientesMensal.split(";");


        let cellEconomiaMensal = res[1].replace('.', '');
        cellEconomiaMensal = cellEconomiaMensal.replace(',', '.');

        let economiaMensal = parseFloat(cellEconomiaMensal - somaTotalPacientesMensalMedCorp);

        let reconomiaMensal = economiaMensal.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });

        document.getElementById("CellEconomiaMensal").innerHTML = reconomiaMensal;

        economiaMensal = economiaMensal.toFixed(2);

        let economiaAnual = economiaMensal * 12;


        let reconomiaAnual = economiaAnual.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });

        document.getElementById("CellEconomiaAnual").innerHTML = reconomiaAnual;


        $("#numeroPacientesFormEmail").val($("#numeroPacientes").val());
        $("#conectorInfusaoUnidadeFormEmail").val($("#conectorInfusaoUnidade").val());
        $("#solucoesDeLockFormEmail").val($("#solucoesDeLock").val());
        $("#kitMateriaisDescartaveisFormEmail").val($("#kitMateriaisDescartaveis").val());
        $("#tegoUnidadeFormEmail").val($("#tegoUnidade").val());
        $("#solucoesDeLockMedCorpFormEmail").val($("#solucoesDeLockMedCorp").val());
        $("#kitMateriaisDescartaveisMedCorpFormEmail").val($("#kitMateriaisDescartaveisMedCorp").val());
        $("#qtdSessoesMensaisTegoFormEmail").val($("#qtdSessoesMensaisTego").val());
        $("#qtdSessoesMensaisFormEmail").val($("#qtdSessoesMensais").val());
        $("#somaTotalSemanalFormEmail").val(somaTotalSemanal);
        $("#somaTotalMensalFormEmail").val(somaTotalMensal); 
        $("#somaTotalPacientesSemanalMedCorpFormEmail").val(somaTotalPacientesSemanalMedCorp);
        $("#somaTotalPacientesMensalMedCorpFormEmail").val(somaTotalPacientesMensalMedCorp);
        $("#economiaMensalFormEmail").val(economiaMensal);
        $("#economiaAnualFormEmail").val(economiaAnual);


        var s = [somaTotalDiario, somaTotalSemanal, somaTotalMensal];

        return s;
    }



    function validacaoCalc() {

        let b = true;

        if (numeroPacientes.val() == "" || (numeroPacientes.val().length < 1)) {
            alert("Coloque o numero de pacientes, para o calculo. ");
            document.getElementById("conectorInfusaoUnidade").value = "";
            numeroPacientes.focus();
            b = false;
        }
        if (qtdSessoesMensais.val() == "" || (qtdSessoesMensais.val().length < 1)) {
            alert("Coloque QUANTIDADE DE SESSÕES MENSAIS, para o calculo. ");
            document.getElementById("qtdSessoesMensais").value = "";
            qtdSessoesMensais.focus();
            b = false;
        }

        if (qtdSessoesMensaisTego.val() == "" || (qtdSessoesMensaisTego.val().length < 1)) {
            alert("Coloque QUANTIDADE DE SESSÕES MENSAIS Tego, para o calculo. ");
            document.getElementById("qtdSessoesMensaisTego").value = "";
            qtdSessoesMensaisTego.focus();
            b = false;
        }
        if (conectorInfusaoUnidade.val() == "" || (conectorInfusaoUnidade.val().length < 1)) {
            alert("Coloque CONECTORES DE INFUSÃO UNIDADE, para o calculo. ");
            document.getElementById("conectorInfusaoUnidade").value = "";
            conectorInfusaoUnidade.focus();
            b = false;
        }

        if (solucoesDeLock.val() == "" || (solucoesDeLock.val().length < 1)) {
            alert("Coloque SOLUÇÕES DE LOCK, para o calculo. ");
            document.getElementById("solucoesDeLock").value = "";
            solucoesDeLock.focus();
            b = false;

        }

        if (kitMateriaisDescartaveis.val() == "" || (kitMateriaisDescartaveis.val().length < 1)) {
            alert("Coloque KIT MATERIAIS DESCARTÁVEIS, para o calculo. ");
            document.getElementById("kitMateriaisDescartaveis").value = "";
            kitMateriaisDescartaveis.focus();
            b = false;
        }

        if (tegoUnidade.val() == "" || (tegoUnidade.val().length < 1)) {
            alert("Coloque CONECTOR TEGO UNIDADE, para o calculo. ");
            document.getElementById("tegoUnidade").value = "";
            tegoUnidade.focus();
            b = false;
        }
            return b;
    }


    function somaKit(a) {

        let seringa             = document.getElementById("seringa").value;
        let gaseEsteril         = document.getElementById("gaseEsteril").value;
        let luvaEsteril         = document.getElementById("luvaEsteril").value;
        let campoEsteril        = document.getElementById("campoEsteril").value;
        let luvaDeProcedimento  = document.getElementById("luvaDeProcedimento").value;
        let tampasEOclusores    = document.getElementById("tampasEOclusores").value;
        let agulhas             = document.getElementById("agulhas").value;
        let outros              = document.getElementById("outros").value;

        if(seringa == ""){
            seringa = 0;
        }
       

        if(gaseEsteril == ""){
            gaseEsteril = 0;
        }
    

        if(luvaEsteril == ""){
            luvaEsteril = 0;
        }
            

        if(campoEsteril == ""){
            campoEsteril = 0;
        }
           
        if(luvaDeProcedimento == ""){
           luvaDeProcedimento  = 0;
        }

        if(tampasEOclusores == ""){
            tampasEOclusores  = 0;
        }

        if(agulhas == ""){
            agulhas = 0;
        }
        
        if(outros == ""){
            outros = 0;
        }       
        
        seringa = seringa.replace(',', '.');
        seringa = parseFloat(seringa);

        gaseEsteril = gaseEsteril.replace(',', '.');
        gaseEsteril = parseFloat(gaseEsteril);

        luvaEsteril = luvaEsteril.replace(',', '.');
        luvaEsteril = parseFloat(luvaEsteril);

        campoEsteril = campoEsteril.replace(',', '.');
        campoEsteril = parseFloat(campoEsteril);

        luvaDeProcedimento = luvaDeProcedimento.replace(',', '.');
        luvaDeProcedimento  = parseFloat(luvaDeProcedimento);

        tampasEOclusores = tampasEOclusores.replace(',', '.');
        tampasEOclusores  = parseFloat(tampasEOclusores);

        agulhas= agulhas.replace(',', '.');
        agulhas = parseFloat(agulhas);

        outros= outros.replace(',', '.');
        outros = parseFloat(outros);

        v = document.getElementById("kitMateriaisDescartaveis").value;

        let t = seringa + gaseEsteril + luvaEsteril + campoEsteril + luvaDeProcedimento + tampasEOclusores + agulhas + outros;

        t = t.toFixed(2)
        t = t.toString();
        t = t.replace('.', ',');

        document.getElementById("kitMateriaisDescartaveis").value = t;
        document.getElementById("kitMateriaisDescartaveisMedCorp").value = "R$ " + t;
        //return a;
    }


    function limpaPonto(a) {
        a = a.replace('.', '');
        a = a.replace(',', '.');
        return a;
    }


    kitMateriaisDescartaveis.change(function (chart) {

        let valorkitMateriaisDescartaveis = document.getElementById("kitMateriaisDescartaveis").value;

        valorkitMateriaisDescartaveis = parseFloat(limpaPonto(valorkitMateriaisDescartaveis));

        let valorkitMateriaisDescartaveisInput = valorkitMateriaisDescartaveis.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });


        valorkitMateriaisDescartaveisInput = valorkitMateriaisDescartaveisInput.replace('.', ',');
        document.getElementById("kitMateriaisDescartaveisMedCorp").value = valorkitMateriaisDescartaveisInput;




    });


    numeroPacientes.keyup(function () {
        $(this).val(this.value.replace(/\D/g, ''));
    });

    qtdSessoesMensais.keyup(function () {
        $(this).val(this.value.replace(/\D/g, ''));
    });


    qtdSessoesMensaisTego.keyup(function () {
        $(this).val(this.value.replace(/\D/g, ''));
    });

});