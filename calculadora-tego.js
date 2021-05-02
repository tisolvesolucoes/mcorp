
        $(document).ready(function () {

            let numeroPacientes         = $("#numeroPacientes");
            let qtdSessoesMensais       = $("#qtdSessoesMensais");
            let qtdSessoesMensaisTego   = $("#qtdSessoesMensaisTego");

            numeroPacientes.focus();

            let custoPacienteTotalMensal;

            let conectorInfusaoUnidade          = $("#conectorInfusaoUnidade");
            let solucoesDeLock                  = $("#solucoesDeLock");
            let kitMateriaisDescartaveis        = $("#kitMateriaisDescartaveis");
            let tegoUnidade                     = $("#tegoUnidade");
            let solucoesDeLockMedCorp           = 0;
            let kitMateriaisDescartaveisMedCorp = $("#kitMateriaisDescartaveisMedCorp");
            var formulario                      = document.querySelector('form');

            //kit medico

            let seringa             = $("#seringa");
            let gaseEsteril         = $("#gaseEsteril");
            let luvaEsteril         = $("#luvaEsteril");
            let campoEsteril        = $("#campoEsteril");
            let luvaDeProcedimento  = $("#luvaDeProcedimento");
            let agulhas             = $("#agulhas");
            let outros              = $("#outros");


            function calculaTotalMensal(chart, c) {

                let numeroPacientes = parseInt(document.getElementById("numeroPacientes").value);
                let qtdSessoesMensais = parseInt(document.getElementById("qtdSessoesMensais").value);
                let qtdSessoesMensaisTego = parseInt(document.getElementById("qtdSessoesMensaisTego").value);


                let valorConectorInfusaoUnidade = conectorInfusaoUnidade.val();
                let valorsolucoesDeLock = solucoesDeLock.val();
                let vkitMateriaisDescartaveis = kitMateriaisDescartaveis.val();
                let valorTegoUnidade = tegoUnidade.val();
                let valorkitMateriaisDescartaveis = vkitMateriaisDescartaveis;

                if (c == 1) {

                    valorConectorInfusaoUnidade = limpaPonto(valorConectorInfusaoUnidade);
                    valorsolucoesDeLock = limpaPonto(valorsolucoesDeLock);
                    valorkitMateriaisDescartaveis = limpaPonto(valorkitMateriaisDescartaveis);


                    let resultadoDiarioValorConectorInfusaoUnidade  = valorConectorInfusaoUnidade * 2;
                    let resultadoSemanalValorConectorInfusaoUnidade = resultadoDiarioValorConectorInfusaoUnidade;
                    let resultadoMensalConectorInfusaoUnidade       = resultadoSemanalValorConectorInfusaoUnidade * 4;

                    let resultadoDiarioValorsolucoesDeLock      = parseFloat(valorsolucoesDeLock);
                    let resultadoSemanalValorsolucoesDeLock     = resultadoDiarioValorsolucoesDeLock * 3;
                    let resultadoMensalValorsolucoesDeLock      = resultadoSemanalValorsolucoesDeLock * 4;


                    let resultadoDiariokitMateriaisDescartaveis     = valorkitMateriaisDescartaveis * 2;
                    let resultadoSemanalkitMateriaisDescartaveis    = resultadoDiariokitMateriaisDescartaveis * 3;
                    let resultadoMensalkitMateriaisDescartaveis     = resultadoSemanalkitMateriaisDescartaveis * 4;
                    
                    let somaTotalDiario     = resultadoDiarioValorConectorInfusaoUnidade + resultadoDiarioValorsolucoesDeLock + resultadoDiariokitMateriaisDescartaveis;
                    
                    
                    let somaTotalSemanal    = resultadoSemanalValorConectorInfusaoUnidade + resultadoSemanalValorsolucoesDeLock + resultadoSemanalkitMateriaisDescartaveis;
                    let somaTotalMensal     = resultadoMensalConectorInfusaoUnidade + resultadoMensalValorsolucoesDeLock + resultadoMensalkitMateriaisDescartaveis;

                    let rsomaTotalDiario    = somaTotalDiario.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
                    let rsomaTotalSemanal   = somaTotalSemanal.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
                    let rsomaTotalMensal    = somaTotalMensal.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });

                    let rsomaTotalPacientesDiario   = somaTotalDiario * numeroPacientes * qtdSessoesMensais;
                    let rsomaTotalPacientesSemanal  = somaTotalSemanal * numeroPacientes * qtdSessoesMensais;
                    let rsomaTotalPacientesMensal   = somaTotalMensal * numeroPacientes * qtdSessoesMensais;
                   
                    rsomaTotalPacientesDiario   = rsomaTotalPacientesDiario.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
                    rsomaTotalPacientesSemanal  = rsomaTotalPacientesSemanal.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
                    rsomaTotalPacientesMensal   = rsomaTotalPacientesMensal.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
 
                    rsomaTotalPacientesSemanal  = rsomaTotalPacientesSemanal.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
                    rsomaTotalPacientesMensal   = rsomaTotalPacientesMensal.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });


                    document.getElementById("cellTotalDiario").innerHTML        = rsomaTotalDiario;
                    document.getElementById("cellTotalSemanal").innerHTML       = rsomaTotalSemanal;
                    document.getElementById("cellTotalMensal").innerHTML        = rsomaTotalMensal;
                    document.getElementById("cellSomaTotalPacientesDiario").innerHTML   = rsomaTotalPacientesDiario;
                    document.getElementById("cellSomaTotalPacientesSemanal").innerHTML  = rsomaTotalPacientesSemanal;
                    document.getElementById("cellSomaTotalPacientesMensal").innerHTML   = rsomaTotalPacientesMensal;
                    document.getElementById("CellDiferencaCustoConector").innerHTML     = rsomaTotalPacientesMensal;

                   let qtdSessoesMensaisTego = parseInt(document.getElementById("qtdSessoesMensaisTego").value);

                    let somaTotalPacientesSemanalMedCorp = somaTotalSemanal * numeroPacientes * qtdSessoesMensaisTego;
                    let somaTotalPacientesMensalMedCorp = somaTotalMensal * numeroPacientes * qtdSessoesMensaisTego;
                    
                    somaTotalPacientesSemanalMedCorp = somaTotalPacientesSemanalMedCorp.toFixed(2);
                    somaTotalPacientesMensalMedCorp = somaTotalPacientesMensalMedCorp.toFixed(2);

                    
                   add_data(chart,
                        rsomaTotalPacientesSemanal,
                        rsomaTotalPacientesMensal,
                        somaTotalPacientesSemanalMedCorp,
                        somaTotalPacientesMensalMedCorp
                    );
                
                
                }
                else if (c == 2) {

                    valorTegoUnidade = limpaPonto(valorTegoUnidade);
                    let valorkitMateriaisDescartaveisMedCorp = limpaPonto(valorkitMateriaisDescartaveis);

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

                    let numeroPacientes = parseInt(document.getElementById("numeroPacientes").value);
                    let qtdSessoesMensaisTego = parseInt(document.getElementById("qtdSessoesMensaisTego").value);

                    let somaTotalPacientesDiarioMedCorp = somaTotalDiario * numeroPacientes * qtdSessoesMensaisTego;
                    let somaTotalPacientesSemanalMedCorp = somaTotalSemanal * numeroPacientes * qtdSessoesMensaisTego;
                    let somaTotalPacientesMensalMedCorp = somaTotalMensal * numeroPacientes * qtdSessoesMensaisTego;

                    let rsomaTotalPacientesDiarioMedCorp = somaTotalPacientesDiarioMedCorp.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
                    let rsomaTotalPacientesSemanalMedCorp = somaTotalPacientesSemanalMedCorp.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
                    let rsomaTotalPacientesMensalMedCorp = somaTotalPacientesMensalMedCorp.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });


                    document.getElementById("cellTotalDiarioMedCorp").innerHTML = rsomaTotalDiario;
                    document.getElementById("cellTotalSemanalMedCorp").innerHTML = rsomaTotalSemanal;
                    document.getElementById("cellTotalMensalMedCorp").innerHTML = rsomaTotalMensal;
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

                    let SomaTotalMensalGrafico = cellEconomiaMensal;

                    let economiaMensal = parseFloat(cellEconomiaMensal - somaTotalPacientesMensalMedCorp);

                    let reconomiaMensal = economiaMensal.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });

                    document.getElementById("CellEconomiaMensal").innerHTML = reconomiaMensal;

                    economiaMensal = economiaMensal.toFixed(2);

                    let economiaAnual = economiaMensal * 12;


                    let reconomiaAnual = economiaAnual.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });

                    document.getElementById("CellEconomiaAnual").innerHTML = reconomiaAnual;
                    somaTotalPacientesSemanalMedCorp = somaTotalPacientesSemanalMedCorp.toFixed(2);
                    somaTotalPacientesMensalMedCorp = somaTotalPacientesMensalMedCorp.toFixed(2);

                    $("#numeroPacientesFormEmail").val($("#numeroPacientes").val());
                    $("#conectorInfusaoUnidadeFormEmail").val($("#conectorInfusaoUnidade").val());
                    $("#solucoesDeLockFormEmail").val($("#solucoesDeLock").val());
                    $("#kitMateriaisDescartaveisFormEmail").val($("#kitMateriaisDescartaveis").val());
                    $("#tegoUnidadeFormEmail").val($("#tegoUnidade").val());
                    $("#solucoesDeLockMedCorpFormEmail").val($("#solucoesDeLockMedCorp").val());
                    $("#kitMateriaisDescartaveisMedCorpFormEmail").val($("#kitMateriaisDescartaveisMedCorp").val());
                    $("#qtdSessoesMensaisTegoFormEmail").val($("#qtdSessoesMensaisTego").val());
                    $("#qtdSessoesMensaisFormEmail").val($("#qtdSessoesMensais").val());
                    

                    $("#economiaMensal").val(economiaMensal);
                    $("#economiaAnual").val(economiaAnual);

                    $("#SomaTotalSemanalGrafico").val(SomaTotalSemanalGrafico);
                    $("#SomaTotalMensalGrafico").val(SomaTotalMensalGrafico);
                    $("#somaTotalPacientesSemanalMedCorp").val(somaTotalPacientesSemanalMedCorp);
                    $("#somaTotalPacientesMensalMedCorp").val(somaTotalPacientesMensalMedCorp);

                    add_data(chart,
                        SomaTotalSemanalGrafico,
                        SomaTotalMensalGrafico,
                        somaTotalPacientesSemanalMedCorp,
                        somaTotalPacientesMensalMedCorp
                    );

                }

            }


            conectorInfusaoUnidade.focusout(function (chart) {

                if (numeroPacientes.val() == "" || (numeroPacientes.val().length < 1)) {
                    alert("Coloque o numero de pacientes, para o calculo. ");
                    document.getElementById("conectorInfusaoUnidade").value = "";
                    numeroPacientes.focus();
                }
                else {

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

                    calculaTotalMensal(chart, 1);

                    solucoesDeLock.focus();
                }

            });

            solucoesDeLock.focusout(function (chart) {
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
                kitMateriaisDescartaveis.focus();

                calculaTotalMensal(chart, 1);

            });

            kitMateriaisDescartaveis.focusout(function (chart) {

                let valorkitMateriaisDescartaveis = kitMateriaisDescartaveis.val();

                valorkitMateriaisDescartaveis = parseFloat(limpaPonto(valorkitMateriaisDescartaveis));

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


                let resultadovalorkitMateriaisDescartaveis = valorkitMateriaisDescartaveis * 2;
                let resultadoSemanalvalorkitMateriaisDescartaveis = resultadovalorkitMateriaisDescartaveis;
                let resultadoMensalvalorkitMateriaisDescartaveis = resultadoSemanalvalorkitMateriaisDescartaveis * 4;

                let rvalorkitMateriaisDescartaveis = resultadovalorkitMateriaisDescartaveis.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
                let rSemanalvalorkitMateriaisDescartaveis = resultadoSemanalvalorkitMateriaisDescartaveis.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
                let rMensalvalorkitMateriaisDescartaveis = resultadoMensalvalorkitMateriaisDescartaveis.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });

                document.getElementById("cellkitMateriaisDescartaveisMedCorp").innerHTML = rvalorkitMateriaisDescartaveis;
                document.getElementById("cellkitMateriaisDescartaveisMedCorpSemanal").innerHTML = rSemanalvalorkitMateriaisDescartaveis;
                document.getElementById("cellkitMateriaisDescartaveisMedCorpMensal").innerHTML = rMensalvalorkitMateriaisDescartaveis;

                valorkitMateriaisDescartaveisInput = valorkitMateriaisDescartaveisInput.replace('.', ',');
                document.getElementById("kitMateriaisDescartaveisMedCorp").value = valorkitMateriaisDescartaveisInput;


                //document.getElementById("cellkitMateriaisDescartaveisMedCorp").innerHTML = r;
                //document.getElementById("cellkitMateriaisDescartaveisMedCorpSemanal").innerHTML = rSemanal;
                //document.getElementById("cellkitMateriaisDescartaveisMedCorpMensal").innerHTML = rMensal;

                calculaTotalMensal(chart, 1);

            });

            tegoUnidade.focusout(function (chart) {


                let valorTegoUnidade = tegoUnidade.val();

                valorTegoUnidade = limpaPonto(valorTegoUnidade);

                let valorkitMateriaisDescartaveis = kitMateriaisDescartaveis.val();

                valorkitMateriaisDescartaveis = parseFloat(limpaPonto(valorkitMateriaisDescartaveis));


                let resultado = valorTegoUnidade * 2;
                let resultadoSemanal = resultado;
                let resultadoMensal = resultadoSemanal * 4;

                var r = resultado.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
                var rSemanal = resultadoSemanal.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
                var rMensal = resultadoMensal.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });

                document.getElementById("cellTegoUnidade").innerHTML = r;
                document.getElementById("cellTegoUnidadeSemanal").innerHTML = rSemanal;
                document.getElementById("cellTegoUnidadeMensal").innerHTML = rMensal;


                //valorkitMateriaisDescartaveis= limpaPonto(valorkitMateriaisDescartaveis);

                let resultadovalorkitMateriaisDescartaveis = valorkitMateriaisDescartaveis * 2;
                let resultadoSemanalvalorkitMateriaisDescartaveis = resultadovalorkitMateriaisDescartaveis;
                let resultadoMensalvalorkitMateriaisDescartaveis = resultadoSemanalvalorkitMateriaisDescartaveis * 4;

                var rvalorkitMateriaisDescartaveis = resultadovalorkitMateriaisDescartaveis.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
                var rSemanalvalorkitMateriaisDescartaveis = resultadoSemanalvalorkitMateriaisDescartaveis.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
                var rMensalvalorkitMateriaisDescartaveis = resultadoMensalvalorkitMateriaisDescartaveis.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });

                document.getElementById("cellkitMateriaisDescartaveisMedCorp").innerHTML = rvalorkitMateriaisDescartaveis;
                document.getElementById("cellkitMateriaisDescartaveisMedCorpSemanal").innerHTML = rSemanalvalorkitMateriaisDescartaveis;
                document.getElementById("cellkitMateriaisDescartaveisMedCorpMensal").innerHTML = rMensalvalorkitMateriaisDescartaveis;

                calculaTotalMensal(chart, 2);

            });


            qtdSessoesMensais.focusout(function (chart) {

                calculaTotalMensal(chart, 1);
                calculaTotalMensal(chart, 2);
            });

            qtdSessoesMensaisTego.focusout(function (chart) {
                calculaTotalMensal(chart, 1);
                calculaTotalMensal(chart, 2);
            });
            

            seringa.change(function() {
                let valorSeringa = seringa.val();
                somaKit(valorSeringa);
            });

            gaseEsteril.change(function () {
                let valorgaseEsteril = gaseEsteril.val();
                somaKit(valorgaseEsteril);
            });


            luvaEsteril.change(function () {
                let valorluvaEsteril = luvaEsteril.val();
                somaKit(valorluvaEsteril);
            });

            campoEsteril.change(function () {
                let valorcampoEsteril = campoEsteril.val();
                somaKit(valorcampoEsteril);
            });


            luvaDeProcedimento.change(function () {
                let valorluvaDeProcedimento = luvaDeProcedimento.val();
                somaKit(valorluvaDeProcedimento);
            });


            agulhas.change(function () {
                let valoragulhas = agulhas.val();
                somaKit(valoragulhas);
            });


            outros.change(function () {
                let valoroutros = outros.val();
                somaKit(valoroutros);
            });


            var ctxL = document.getElementById("Grafico").getContext('2d');

            var myLineChart = new Chart(ctxL, {
                type: 'bar',
                data:
                {
                    labels:
                        [
                            ,
                            "C. Sem",
                            "C. Men",
                            "C. Sem MedCorp",
                            "C. Men MedCorp",

                        ],

                    datasets:
                        [
                            {
                                label: "Custo",
                                data: [0],
                                backgroundColor: [
                                    , "rgba(255,206,86, 0.3)"
                                    , "rgba(75,192,192, 0.3)"
                                    , "rgba(153,102,255, 0.3)"
                                    , "rgba(255,159,64, 0.3)"
                                ],
                                borderColor: [
                                    , "rgba(255,206,86, 0.9)"
                                    , "rgba(75,192,192, 0.9)"
                                    , "rgba(153,102,255, 0.9)"
                                    , "rgba(255,159,64, 0.9)"
                                ],
                                borderWidth: 2
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
                            label: function(tooltipItem, data) { 
                                return data.datasets[tooltipItem.datasetIndex].label + ": " + tooltipItem.yLabel;
                            }
                        }
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    } 

                },

            });


            function add_data(chart, cSemanal, cMensal, cSemanalMedCorp, cMensalMedCorp) {

                myLineChart.data.datasets[0].data.push(cSemanal);
                myLineChart.data.datasets[0].data.push(cMensal);
                myLineChart.data.datasets[0].data.push(cSemanalMedCorp);
                myLineChart.data.datasets[0].data.push(cMensalMedCorp);
                myLineChart.data.datasets[0].data.push(543);
                myLineChart.update();
            }
 
            numeroPacientes.keyup(function () {
                $(this).val(this.value.replace(/\D/g, ''));
            });

            qtdSessoesMensais.keyup(function () {
                $(this).val(this.value.replace(/\D/g, ''));
            });


            qtdSessoesMensaisTego.keyup(function () {
                $(this).val(this.value.replace(/\D/g, ''));
            });


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

            /*
            kitMateriaisDescartaveis*/
            function somaKit(a) {
                a = a.replace(',', '.');
                a = parseFloat(a);

                v = document.getElementById("kitMateriaisDescartaveis").value;

                if (v != '') {
                    v = parseFloat(v);
                } else {
                    v = 0;
                }

                let t = a + v;
                t = t.toFixed(2)
                t = t.toString();
                t = t.replace('.', ',');

                document.getElementById("kitMateriaisDescartaveis").value = t;
                document.getElementById("kitMateriaisDescartaveisMedCorp").value = "R$ " + t;
                //return a;
            }

            /*
            kitMateriaisDescartaveis*/


            function limpaPonto(a) {
                a = a.replace('.', '');
                a = a.replace(',', '.');
                return a;
            }
            
            document.getElementById("myBtn").addEventListener("click", myFunction);

            function myFunction() {
            alert ("Hello World!");
            }

        });
