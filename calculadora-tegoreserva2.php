<!DOCTYPE html>
<html lang='pt-br' itemscope itemtype='https://schema.org/Article'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <!-- FAVICON <link rel='shortcut icon' href='images/favicon.png' type='image/x-icon'>-->
    <link rel='shortcut icon' href='img/favicon.ico' />

    <!-- METAS GENERICAS -->
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
    <meta http-equiv='content-language' content='pt-br'>
    <meta name='rating' content='General'>
    <meta name='author' content='Medcorp'>
    <meta name='robots' content='index fallow'>
    <meta property='og:locale' content='pt_BR' />
    <meta property='og:type' content='article' />
    <meta property='og:site_name' content='Medcorp' />
    <meta property='og:image' content='http://www.medcorpnet.com.br/images/logo.png' />
    <meta name='twitter:card' content='summary' />
    <meta name='twitter:domain' content='http://www.medcorpnet.com.br' />
    <meta name='twitter:image:src' content='http://www.medcorpnet.com.br/images/logo.png' />
    <link rel='canonical' href='http://www.medcorpnet.com.br' />
    <meta itemprop='name' content='Medcorp' />
    <meta itemprop='description' content='Produtos Hospitalares' />
    <meta itemprop='image' content='http://www.medcorpnet.com.br/images/logo.png' />
    <meta itemprop='url' content='http://www.medcorpnet.com.br' />
    <!-- <!DOCTYPE html>
        <html lang="en">
        
        <head>
            <meta charset="utf-8">
            <title>Medcorp®</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <meta name="description" content="Bootstrap 3 template for corporate business" /> -->
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <link href="plugins/flexslider/flexslider.css" rel="stylesheet" media="screen" />
    <link href="css/cubeportfolio.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />

    <!-- Theme skin -->
    <link id="t-colors" href="skins/default.css" rel="stylesheet" />
    <style>
        .footer ul>li {
            list-style: none;
        }

        .lista_logos_rodape>li {
            list-style: none;
            display: inline
        }

        .lista_logos_rodape img {
            width: 120px;
            margin: 10px;
        }

        .lista_logos_rodape .logo_rodape_bio {
            width: 50px;
            margin: 10px;
        }

        .social-links {
            margin-right: 20px;
        }

        .fa-2x {
            margin-right: 10px;
        }

        .icon {
            color: #1B365D;
        }

        .highlight {
            background: #8A009F
        }

        a:hover {
            color: #FAF9B8;
        }

        #container-submenu {
            width: 75%;
            background: #3e6193;
            position: absolute;
            z-index: 999;
            left: 10%;
            padding: 10px;
            display: none
        }

        #container-submenu a {
            color: #fff;
        }

        #container-submenu a:visited {
            color: #fff;
        }

        #container-submenu a:link {
            color: #fff;
        }



        #menu-mobile>li {
            list-style: none;
            height: 50px;
            border-bottom: 1px solid #fff;
            font-weight: bold;
            margin-left: -30px;
            padding: 10px;
        }

        #bloco-produtos {
            display: none;
            position: relative
        }


        #container-catalogo {
            width: 75%;
            background: #3e6193;
            position: absolute;
            z-index: 999;
            left: 10%;
            padding: 10px;
            display: none
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src='js/menu.js'></script>
</head>

<body>
    <div id="wrapper">
        <!-- start header -->
        <header>
            <div class="top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="topleft-info">
                                <li><i class="fa fa-envelope"></i>&nbsp&nbsp<a style="color:#000"
                                        href="mailto:medcorpnet@medcorpnet.com.br">medcorpnet@medcorpnet.com.br</a></li>
                            </ul>

                            <ul class="topleft-info">
                                <li><i class="fa fa-phone"></i>&nbsp&nbsp<a style="color:#000">+55 11-3849-8992</a></li>
                                <li style="cursor: pointer;"><a href="about.php"><img src="img/flag.png" width="30"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <div id="sb-search" class="sb-search">
                                <form method="post" action="busca.php">
                                    <input class="sb-search-input" placeholder="Digite aqui" type="text" value=""
                                        name="palavrachave" id="search">
                                    <input class="sb-search-submit" type="submit" value="">
                                    <span class="sb-icon-search" style="background:#1B365D"
                                        title="Clique aqui para pesquisar"></span>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" id="btn-menu-mobile">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php"><img src="img/varios/logo.png" alt=""
                                width="250" /></a>
                    </div>
                    <div class="navbar-collapse collapse ">

                        <ul class="nav navbar-nav" id="menu-desktop" style="width:70%;">
                            <!--                      <li><a href="#">HOME</a></li>
                         <li><a href="#">QUEM SOMOS</a></li>
                            -->
                            <li class="dropdown">
                                <a href="#" id="btn-produtos" class="dropdown-toggle " data-toggle="dropdown"
                                    data-hover="dropdown" data-delay="0" data-close-others="false">PRODUTOS <i
                                        class="fa fa-angle-down"></i></a>
                            </li>
                            <!--                   <li><a href="novidades.php">NOVIDADES</a></li>
                    <li><a href="videos.php">VÍDEOS</a></li> -->
                            <li class="dropdown">
                                <a href="#" id="btn-catalogo" class="dropdown-toggle " data-toggle="dropdown"
                                    data-hover="dropdown" data-delay="0" data-close-others="false">CATÁLOGOS <i
                                        class="fa fa-angle-down"></i></a>
                            </li>

                            <li><a href="fornecedores.php">FORNECEDORES</a></li>

                            <li><a href="contato.php">CONTATOS</a></li>

                        </ul>

                    </div>
                </div>
            </div>
        </header>


        <!-- CARREGA MENU MOBILE SE FOR  -->


        <!-- end header -->

        <div id="container-submenu">
            <div style="width:25%;float: left; color:#fff;">
                <!-- 1 bloco -->
                <ul style="list-style:none;">
                    <h5 style="color:#fff">PRODUTOS</h5>
                    <li id="btn-acessos-vasculares" style="padding:5px;border-bottom:1px solid #fff; cursor:pointer;">
                        ACESSOS VASCULARES &nbsp<i class="fa fa-angle-right" style="float:right"></i></li>
                    <li id="btn-sistema-fechado" style="padding:5px;border-bottom:1px solid #fff; cursor:pointer;">
                        SISTEMA FECHADO &nbsp<i class="fa fa-angle-right" style="float:right"></i></li>
                    <li id="btn-infusor" style="padding:5px;border-bottom:1px solid #fff; cursor:pointer;">INFUSOR
                        ELASTOMÉRICO &nbsp<i class="fa fa-angle-right" style="float:right"></i></li>
                    <li id="btn-pediatrico" style="padding:5px;border-bottom:1px solid #fff; cursor:pointer;">LINHA
                        PEDIÁTRICA &nbsp<i class="fa fa-angle-right" style="float:right"></i></li>

                    <!--
            <li id="btn-laser" style ="padding:5px;border-bottom:1px solid #fff; cursor:pointer;">LASER ENDOVENOSO &nbsp<i class="fa fa-angle-right" style="float:right"></i></li>
            -->

                    <li id="btn-ccih" style="padding:5px;border-bottom:1px solid #fff; cursor:pointer;">CONTROLE DE
                        INFECÇÃO &nbsp<i class="fa fa-angle-right" style="float:right"></i></li>
                    <li id="btn-estab" style="padding:5px;border-bottom:1px solid #fff; cursor:pointer;">DISPOSITIVO DE
                        ESTABILIZAÇÃO E SEGURANÇA &nbsp<i class="fa fa-angle-right" style="float:right"></i></li>
                    <!--

            <li id="btn-eletrocirurgia" style ="padding:5px;border-bottom:1px solid #fff; cursor:pointer;">ELETROCIRURGIA &nbsp<i class="fa fa-angle-right" style="float:right"></i></li>

            -->




                </ul>
            </div>


            <!-- 2 bloco -->
            <!--ACESSOS VASCULARES -->
            <div id="bloco-acessos-vasculares" style="width:25%;float: left; color:#fff;display:none">
                <ul style="list-style:none;">
                    <h5 style="color:#fff">ACESSOS VASCULARES</h5>
                    <li id="btn-hemodialise" style="padding:5px;border-bottom:1px solid #fff;cursor:pointer;">
                        HEMODIÁLISE &nbsp<i class="fa fa-angle-right" style="float:right"></i></li>
                    <li id="btn-dialise" style="padding:5px;border-bottom:1px solid #fff;cursor:pointer;">DIÁLISE
                        PERITONEAL&nbsp<i class="fa fa-angle-right" style="float:right"></i></li>
                    <li id="btn-terapia" style="padding:5px;border-bottom:1px solid #fff;cursor:pointer;">TERAPIA
                        INTENSIVA&nbsp<i class="fa fa-angle-right" style="float:right"></i></li>
                    <li id="btn-hemaeonco" style="padding:5px;border-bottom:1px solid #fff;cursor:pointer;">HEMATOLOGIA
                        E ONCOLOGIA&nbsp&nbsp<i class="fa fa-angle-right" style="float:right"></i></li>
                    <li id="btn-acessorio" style="padding:5px;border-bottom:1px solid #fff;cursor:pointer;">
                        ACESSÓRIOS&nbsp<i class="fa fa-angle-right" style="float:right"></i></li>
                </ul>
            </div>
            <!--ELETROCIRURGIA -->
            <div id="bloco-eletrocirugia" style="width:25%;float: left; color:#fff; display:none">
                <ul style="list-style:none;">
                    <h5 style="color:#fff">ELETROCIRURGIA</h5>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="eletrocirurgia.php?post=26">PLACA DE
                            RETORNO<BR> MEGASOFT</a></i></li>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="eletrocirurgia.php?post=7">ELETRODOS
                            EZ-CLEAN&nbsp</a></i></li>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="eletrocirurgia.php?post=1">CANETA
                            ELETROCIRÚRGICA<BR> EZ-CLEAN &nbsp&nbsp</a></i></li>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="eletrocirurgia.php?post=36">BISTURI
                            ELÉTRICO<BR> MEGA POWER</a></i></li>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="eletrocirurgia.php?post=29">CABOS
                            &nbsp&nbsp</a></i></li>
                </ul>
            </div>
            <!--SISTEMA FECHADO -->
            <div id="bloco-sistema-fechado" style="width:25%;float: left; color:#fff; display:none">
                <ul style="list-style:none;">
                    <h5 style="color:#fff">SISTEMA FECHADO</h5>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="sistema-fechado.php?post=80">TEGO</a>
                    </li>
                </ul>
            </div>
            <!--INFUSOR ELETROSTATICO -->
            <div id="bloco-infusor" style="width:25%;float: left; color:#fff; display:none">
                <ul style="list-style:none;">
                    <h5 style="color:#fff">INFUSOR ELASTOMÉRICO</h5>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a
                            href="infusor-elastomerico.php?post=82">HOMEPUMP C-SERIES</a></li>
                </ul>
            </div>
            <!--LASER ENDOVENOSO  -->
            <div id="bloco-laser" style="width:25%;float: left; color:#fff; display:none">
                <ul style="list-style:none;">
                    <h5 style="color:#fff">LASER ENDOVENOSO </h5>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="laser-endovenoso.php?post=83">LEONARDO
                            DUAL 45</a></li>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="laser-endovenoso.php?post=84">FIBRAS
                            RADIAIS ELVES</a></li>
                </ul>
            </div>
            <!--LINHA PEDIÁTRICA  -->
            <div id="bloco-pediatrico" style="width:25%;float: left; color:#fff; display:none">
                <ul style="list-style:none;">
                    <h5 style="color:#fff">LINHA PEDIÁTRICA </h5>
                    <li id="btn-prodpediacesso" style="padding:5px;border-bottom:1px solid #fff;cursor: pointer;">ACESSO
                        TEMPORÁRIO<i class="fa fa-angle-right" style="float:right"></i></li>
                    <li id="btn-prodpedilonga" style="padding:5px;border-bottom:1px solid #fff;cursor: pointer;">LONGA
                        PERMANÊNCIA<i class="fa fa-angle-right" style="float:right"></i></li>
                    <li id="btn-prodpedidiase" style="padding:5px;border-bottom:1px solid #fff;cursor: pointer;">DIÁLISE
                        PERITONEAL<i class="fa fa-angle-right" style="float:right"></i></li>
                    <li id="btn-prodpedicvc" style="padding:5px;border-bottom:1px solid #fff;cursor: pointer;">CVC<i
                            class="fa fa-angle-right" style="float:right"></i></li>
                    <li id="btn-prodpedipicc" style="padding:5px;border-bottom:1px solid #fff;cursor: pointer;">PICC<i
                            class="fa fa-angle-right" style="float:right"></i></li>
                    <li id="btn-prodpedicatim" style="padding:5px;border-bottom:1px solid #fff;cursor: pointer;">CATETER
                        TOTALMENTE IMPLANTÁVEL<i class="fa fa-angle-right" style="float:right"></i></li>
                    <li id="btn-prodpedicatisemi" style="padding:5px;border-bottom:1px solid #fff;cursor: pointer;">
                        CATETER SEMI IMPLANTÁVEL<i class="fa fa-angle-right" style="float:right"></i></li>
                    <!--   <li  id="btn-prodpediacess"  style ="padding:5px;border-bottom:1px solid #fff;cursor: pointer;">ACESSÓRIOS<i class="fa fa-angle-right" style="float:right"></i></li> -->
                    <li id="btn-prodpedifechado" style="padding:5px;border-bottom:1px solid #fff;cursor: pointer;">
                        SISTEMA FECHADO<i class="fa fa-angle-right" style="float:right"></i></li>

                </ul>
            </div>
            <!--CCIH&nbsp&nbsp  -->
            <div id="bloco-ccih" style="width:25%;float: left; color:#fff; display:none">
                <ul style="list-style:none;">
                    <h5 style="color:#fff">CONTROLE DE INFECÇÃO&nbsp&nbsp</h5>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="ccih.php?post=80">TEGO </a></li>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="ccih.php?post=81">ROO DEFENDER </a>
                    </li>

                </ul>
            </div>

            <div id="bloco-estab" style="width:25%;float: left; color:#fff; display:none">
                <ul style="list-style:none;">
                    <h5 style="color:#fff">DISPOSITIVO DE ESTABILIZAÇÃO E SEGURANÇA&nbsp&nbsp</h5>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="estab.php?post=85">GRIPLOCK </a></li>

                </ul>
            </div>

            <!-- 3 bloco -->

            <!-- prodpediacesso -->
            <div id="bloco-prodpediacesso" style="width:25%;float: left; color:#fff; display:none">
                <ul style="list-style:none;">
                    <h5 style="color:#fff">ACESSO TEMPORÁRIO</h5>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="linha-pediatrica.php?post=71">DUO
                            FLOW</a></li>
                </ul>
            </div>


            <!-- prodpedilonga -->
            <div id="bloco-prodpedilonga" style="width:25%;float: left; color:#fff; display:none">
                <ul style="list-style:none;">
                    <h5 style="color:#fff">LONGA PERMANÊNCIA</h5>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="linha-pediatrica.php?post=72">HEMO
                            CATH SILICONE
                        </a></li>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="linha-pediatrica.php?post=73">ASH
                            SPLIT CATH III
                        </a></li>
                </ul>
            </div>



            <!-- prodpedidiase -->
            <div id="bloco-prodpedidiase" style="width:25%;float: left; color:#fff; display:none">
                <ul style="list-style:none;">
                    <h5 style="color:#fff">DIÁLISE PERITONEAL</h5>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="linha-pediatrica.php?post=74">PD
                            CATH</a></li>
                </ul>
            </div>


            <!-- prodpedicvc -->
            <div id="bloco-prodpedicvc" style="width:25%;float: left; color:#fff; display:none">
                <ul style="list-style:none;">
                    <h5 style="color:#fff">CVC</h5>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="linha-pediatrica.php?post=75">MULTI
                            CATH</a></li>
                </ul>
            </div>


            <!-- prodpedipicc -->
            <div id="bloco-prodpedipicc" style="width:25%;float: left; color:#fff; display:none">
                <ul style="list-style:none;">
                    <h5 style="color:#fff">PICC</h5>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a
                            href="linha-pediatrica.php?post=76">VASCU-PICC II</a></li>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a
                            href="linha-pediatrica.php?post=77">PRO-PICC</a></li>

                </ul>
            </div>


            <!-- prodpedicatim -->
            <div id="bloco-prodpedicatim" style="width:25%;float: left; color:#fff; display:none">
                <ul style="list-style:none;">
                    <h5 style="color:#fff">TOTALMENTE IMPLANTÁVEL</h5>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="linha-pediatrica.php?post=70">PORT</a>
                    </li>
                </ul>
            </div>


            <!-- prodpedicatisemi -->
            <div id="bloco-prodpedicatisemi" style="width:25%;float: left; color:#fff; display:none">
                <ul style="list-style:none;">
                    <h5 style="color:#fff">SEMI IMPLANTÁVEL</h5>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="linha-pediatrica.php?post=79">LT
                            SILICONE CVC</a></li>
                </ul>
            </div>


            <!-- prodpediacess -->
            <div id="bloco-prodpediacess" style="width:25%;float: left; color:#fff; display:none">
                <ul style="list-style:none;">
                    <h5 style="color:#fff">ACESSÓRIOS</h5>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a
                            href="linha-pediatrica.php?post=53">INTRODUTOR PERCUTÂNEO</a></li>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="linha-pediatrica.php?post=53">FIO GUIA
                            METÁLICO</a></li>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="linha-pediatrica.php?post=53">AGULHA
                            DE PUNÇÃO</a></li>
                </ul>
            </div>

            <!-- prodpediafechado -->
            <div id="bloco-prodpedifechado" style="width:25%;float: left; color:#fff; display:none">
                <ul style="list-style:none;">
                    <h5 style="color:#fff">SISTEMA FECHADO</h5>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="linha-pediatrica.php?post=80">TEGO</a>
                    </li>
                </ul>
            </div>

            <!-- PRODUTOS PEDIÁTRICOS -->
            <div id="bloco-prodpedi" style="width:25%;float: left; color:#fff;display:none">
                <ul style="list-style:none;">
                    <h5 style="color:#fff">LINHA PEDIÁTRICA</h5>
                    <li id="btn-acessotemporario2" style="padding:5px;border-bottom:1px solid #fff;cursor:pointer;">
                        ACESSO TEMPORÁRIO &nbsp<i class="fa fa-angle-right" style="float:right"></i></li>
                    <li id="btn-longapermanencia2" style="padding:5px;border-bottom:1px solid #fff;cursor:pointer;">
                        LONGA PERMANÊNCIA &nbsp<i class="fa fa-angle-right" style="float:right"></i></li>
                </ul>
            </div>


            <!-- ACESSOS VASCULARES -->
            <div id="bloco-hemodialise" style="width:25%;float: left; color:#fff;display:none">
                <ul style="list-style:none;">
                    <h5 style="color:#fff">HEMODIÁLISE</h5>
                    <li id="btn-acessotemporario" style="padding:5px;border-bottom:1px solid #fff;cursor:pointer;">
                        ACESSO TEMPORÁRIO &nbsp<i class="fa fa-angle-right" style="float:right"></i></li>
                    <li id="btn-longapermanencia" style="padding:5px;border-bottom:1px solid #fff;cursor:pointer;">LONGA
                        PERMANÊNCIA &nbsp<i class="fa fa-angle-right" style="float:right"></i></li>
                </ul>
            </div>
            <!-- DIÁLISE PERITONEAL -->
            <div id="bloco-dialise" style="width:25%;float: left; color:#fff;  display:none">
                <ul style="list-style:none;">
                    <h5 style="color:#fff">DIÁLISE PERITONEAL</h5>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="acessos-vasculares.php?post=57">PD
                            CATH</a></li>
                </ul>
            </div>
            <!-- TERAPIA INTENSIVA -->
            <div id="bloco-terapia" style="width:25%;float: left; color:#fff;  display:none">
                <ul style="list-style:none;">
                    <h5 style="color:#fff">TERAPIA INTENSIVA</h5>
                    <li id="btn-cvc" style="padding:5px;border-bottom:1px solid #fff;cursor:pointer;">CVC &nbsp<i
                            class="fa fa-angle-right" style="float:right"></i></li>
                    <li id="btn-picc" style="padding:5px;border-bottom:1px solid #fff;cursor:pointer;">PICC &nbsp<i
                            class="fa fa-angle-right" style="float:right"></i></li>
                </ul>
            </div>
            <!-- ONCOLOGIA E HEMATOLOGIA -->
            <div id="bloco-hemaeonco" style="width:25%;float: left; color:#fff;  display:none">
                <ul style="list-style:none;">
                    <h5 style="color:#fff">HEMATOLOGIA E ONCOLOGIA</h5>
                    <li id="btn-catetersemi" style="padding:5px;border-bottom:1px solid #fff;cursor:pointer;">CATETER
                        SEMI IMPLANTÁVEL<i class="fa fa-angle-right" style="float:right"></i></li>
                    <li id="btn-catetertotalmenteimplantavel"
                        style="padding:5px;border-bottom:1px solid #fff;cursor:pointer;">CATETER TOTALMENTE
                        IMPLANTÁVEL<i class="fa fa-angle-right" style="float:right"></i></li>
                    <li id="btn-agulhahuber" style="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a
                            href="admfluid.php?post=86">AGULHA HUBER</a></li>
                </ul>
            </div>
            <!-- ACESSÓRIOS -->
            <div id="bloco-acessorio" style="width:25%;float: left; color:#fff;  display:none">
                <ul style="list-style:none;">
                    <h5 style="color:#fff">ACESSÓRIOS</h5>
                    <li id="btn-" style="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a
                            href="acessos-vasculares.php?post=46">MICRO STICK</a></li>
                </ul>
            </div>
            <!-- ELETROCIRURGIA -->
            <!-- PLACA DE RETORNO -->
            <div id="bloco-placa" style="width:25%;float: left; color:#fff;  display:none">
                <ul style="list-style:none;">
                    <h5 style="color:#fff">PLACA DE RETORNO MEGASOFT</h5>
                    <li id="btn-" style="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a
                            href="eletrocirurgia.php?post=24">0830</a></li>
                    <li id="btn-" style="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a
                            href="eletrocirurgia.php?post=25">0835</a></li>
                    <li id="btn-" style="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a
                            href="eletrocirurgia.php?post=26">0840</a></li>
                    <li id="btn-" style="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a
                            href="eletrocirurgia.php?post=27">0845</a></li>
                    <li id="btn-" style="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a
                            href="eletrocirurgia.php?post=28">0846</a></li>
                </ul>
            </div>
            <!-- ELETRODOS -->
            <div id="bloco-eletrodos" style="width:18%;float: left; color:#fff;  display:none">

                <ul style="list-style:none;float: left">
                    <h5 style="color:#fff;">ELETRODOS</h5>
                    <li id="btn-eletrododescartavel" style="padding:5px;border-bottom:1px solid #fff;cursor:pointer;">
                        DESCARTÁVEIS &nbsp&nbsp<i class="fa fa-angle-right" style="float:right"></i></li>
                    <li id="btn-eletrodoespecial" style="padding:5px;border-bottom:1px solid #fff;cursor:pointer;">
                        ESPECIAIS &nbsp&nbsp<i class="fa fa-angle-right" style="float:right"></i></li>
                </ul>

            </div>

            <!-- CABOS -->
            <div id="bloco-cabos" style="width:20%;float: left; color:#fff;  display:none">


                <ul style="list-style:none;float: left">
                    <h5 style="color:#fff;">CABOS</h5>
                    <li id="btn-cabosmega" style="padding:5px;border-bottom:1px solid #fff;cursor:pointer;">CABOS
                        MEGASOFT&nbsp&nbsp<i class="fa fa-angle-right" style="float:right"></i></li>
                    <li id="btn-cabosdiversos" style="padding:5px;border-bottom:1px solid #fff;cursor:pointer;">CABOS
                        DIVERSOS&nbsp&nbsp<i class="fa fa-angle-right" style="float:right"></i></li>
                </ul>

            </div>

            <!-- BISTURI ELÉTRICO -->
            <div id="bloco-bisturi" style="width:25%;float: left; color:#fff;  display:none">
                <ul style="list-style:none;">
                    <h5 style="color:#fff">BISTURI ELÉTRICO</h5>
                    <li id="btn-" style="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a
                            href="eletrocirurgia.php?post=36">GERADOR ELETROCIRÚRGICO</a></li>
                    <li id="btn-" style="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a
                            href="eletrocirurgia.php?post=37">ADAPTADOR MONOPOLAR</a></li>
                    <li id="btn-" style="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a
                            href="eletrocirurgia.php?post=38">PEDAL MONOPOLAR</a></li>
                    <li id="btn-" style="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a
                            href="eletrocirurgia.php?post=39">PEDAL BIPOLAR</a></li>
                    <li id="btn-" style="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a
                            href="eletrocirurgia.php?post=40">CARRO DE TRANSPORTE</a></li>
                </ul>
            </div>
            <!-- CANETAS -->
            <div id="bloco-caneta" style="width:25%;float: left; color:#fff;  display:none">
                <ul style="list-style:none;">
                    <h5 style="color:#fff">CANETA ELETROCIRÚRGICA</h5>
                    <li id="btn-acoinox" style="padding:5px;border-bottom:1px solid #fff;cursor:pointer;">REVESTIDAS
                        PTFE<i class="fa fa-angle-right" style="float:right"></i></li>
                    <li id="btn-ptfe" style="padding:5px;border-bottom:1px solid #fff;cursor:pointer;">DESCARTÁVEIS EM
                        AÇO INOX<i class="fa fa-angle-right" style="float:right"></i></li>

                </ul>
            </div>
            <!-- 4 bloco -->
            <!-- ACESSOS VASCULARES -->
            <div id="bloco-acessotemporario" style="width:25%;float: left; color:#fff;display:none">
                <ul style="list-style:none;">
                    <h5 style="color:#fff">ACESSO TEMPORÁRIO</h5>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="acessos-vasculares.php?post=50">DUO
                            FLOW</a></li>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="acessos-vasculares.php?post=47">TRI
                            FLOW</a></li>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="acessos-vasculares.php?post=48">T3</a>
                    </li>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="acessos-vasculares.php?post=51">DUO
                            FLOW ALTO FLUXO</a></li>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="acessos-vasculares.php?post=55">DUO
                            SPLIT </a></li>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="acessos-vasculares.php?post=54">FREE
                            FLOW</a></li>
                </ul>
            </div>
            <div id="bloco-longapermanencia" style="width:25%;float: left; color:#fff; display:none">
                <ul style="list-style:none;">
                    <h5 style="color:#fff">LONGA PERMANÊNCIA</h5>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="acessos-vasculares.php?post=53">HEMO
                            CATH SILICONE</a></li>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="acessos-vasculares.php?post=49">HEMO
                            FLOW</a></li>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="acessos-vasculares.php?post=56">ASH
                            SPLIT CATH III</a></li>

                </ul>
            </div>
            <div id="bloco-cvc" style="width:25%;float: left; color:#fff; display:none">
                <ul style="list-style:none;">
                    <h5 style="color:#fff">CVC</h5>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="acessos-vasculares.php?post=59">MULTI
                            CATH</a></li>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="acessos-vasculares.php?post=62">PRO
                            LINE CT</a></li>
                </ul>
            </div>
            <div id="bloco-picc" style="width:25%;float: left; color:#fff; display:none">
                <ul style="list-style:none;">
                    <h5 style="color:#fff">PICC</h5>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="acessos-vasculares.php?post=61">PICC
                            NEONATAL</a></li>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="acessos-vasculares.php?post=58">VASCU
                            PICC</a></li>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="acessos-vasculares.php?post=60">PRO
                            PICC</a></li>

                </ul>
            </div>
            <div id="bloco-catetersemi" style="width:25%;float: left; color:#fff; display:none">
                <ul style="list-style:none;">
                    <h5 style="color:#fff">CATETER SEMI IMPLANTÁVEL</h5>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="acessos-vasculares.php?post=45">LT
                            SILICONE CVC</a></li>
                </ul>
            </div>

            <div id="bloco-catetertotalimplantavel" style="width:25%;float: left; color:#fff; display:none">
                <ul style="list-style:none;">
                    <h5 style="color:#fff">CATETER TOTALMENTE IMPLANTÁVEL</h5>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="acessos-vasculares.php?post=43">PORT
                            DIGNITY</a></li>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="acessos-vasculares.php?post=44">MINI
                            DIGNITY</a></li>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="acessos-vasculares.php?post=42">PORT
                            PROFUSE</a></li>

                </ul>
            </div>

            <div id="bloco-acoinox" style="width:25%;float: left; color:#fff;display:none">
                <ul style="list-style:none;">
                    <h5 style="color:#fff">PTFE</h5>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="eletrocirurgia.php?post=1">0030</a>
                    </li>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="eletrocirurgia.php?post=2">0035</a>
                    </li>
                </ul>
            </div>
            <div id="bloco-ptfe" style="width:25%;float: left; color:#fff;display:none">
                <ul style="list-style:none;">
                    <h5 style="color:#fff">AÇO INOX</h5>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="eletrocirurgia.php?post=4">0038</a>
                    </li>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="eletrocirurgia.php?post=5">0039</a>
                    </li>
                </ul>
            </div>

            <div id="bloco-cabosmega" style="width:20%;float: left; color:#fff;display:none;margin-right:0px;">
                <ul style="list-style:none;">
                    <h5 style="color:#fff">CABOS MEGASOFT</h5>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="eletrocirurgia.php?post=29">M2K-02</a>
                    </li>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="eletrocirurgia.php?post=30">M2K-05</a>
                    </li>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="eletrocirurgia.php?post=31">M2K-06</a>
                    </li>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="eletrocirurgia.php?post=32">M2K-09</a>
                    </li>
                </ul>
            </div>

            <div id="bloco-cabosdiversos" style="width:20%;float: left; color:#fff;display:none;margin-right:0px;">
                <ul style="list-style:none;">
                    <h5 style="color:#fff">CABOS DIVERSOS</h5>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="eletrocirurgia.php?post=33">0875</a>
                    </li>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="eletrocirurgia.php?post=34">4000</a>
                    </li>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="eletrocirurgia.php?post=35">4005</a>
                    </li>
                </ul>
            </div>


            <div id="bloco-eletrododescartavel"
                style="width:25%;float: left; color:#fff;display:none;margin-right:0px;">
                <ul style="list-style:none;float: left">
                    <h5 style="color:#fff;">ELETRODOS DESCARTÁVEIS</h5>
                    <li id="btn-" style="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a
                            href="eletrocirurgia.php?post=14">0009</a></li>
                    <li id="btn-" style="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a
                            href="eletrocirurgia.php?post=6">0012</a></li>
                    <li id="btn-" style="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a
                            href="eletrocirurgia.php?post=66">0012M</a></li>
                    <li id="btn-" style="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a
                            href="eletrocirurgia.php?post=7">0012AM</a></li>
                    <li id="btn-" style="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a
                            href="eletrocirurgia.php?post=67">0013</a></li>
                    <li id="btn-" style="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a
                            href="eletrocirurgia.php?post=8">0014</a></li>
                    <li id="btn-" style="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a
                            href="eletrocirurgia.php?post=9">0014A</a></li>
                    <li id="btn-" style="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a
                            href="eletrocirurgia.php?post=10">0014M</a></li>
                    <li id="btn-" style="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a
                            href="eletrocirurgia.php?post=68">0015</a></li>
                    <li id="btn-" style="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a
                            href="eletrocirurgia.php?post=13">0016</a></li>
                    <li id="btn-" style="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a
                            href="eletrocirurgia.php?post=12">0016A</a></li>
                    <li id="btn-" style="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a
                            href="eletrocirurgia.php?post=69">0016AM</a></li>
                    <li id="btn-" style="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a
                            href="eletrocirurgia.php?post=16">0028</a></li>
                    <li id="btn-" style="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a
                            href="eletrocirurgia.php?post=17">0028M</a></li>
                    <li id="btn-" style="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a
                            href="eletrocirurgia.php?post=18">0029M</a></li>
                    <li id="btn-" style="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a
                            href="eletrocirurgia.php?post=15">0121</a></li>
                </ul>

            </div>

            <div id="bloco-eletrodoespecial" style="width:25%;float: left; color:#fff;display:none;margin-right:0px;">
                <ul style="list-style:none;">
                    <h5 style="color:#fff">ELETRODOS ESPECIAIS</h5>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="eletrocirurgia.php?post=19">0118</a>
                    </li>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="eletrocirurgia.php?post=20">0118A</a>
                    </li>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="eletrocirurgia.php?post=21">0119A</a>
                    </li>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="eletrocirurgia.php?post=22">0120</a>
                    </li>
                    <li style="padding:5px;border-bottom:1px solid #fff"><a href="eletrocirurgia.php?post=23">ACE12A</a>
                    </li>

                </ul>
            </div>

        </div>


        <div id="container-catalogo">
            <div style="width:25%;float: left; color:#fff;">
                <!-- 1 bloco -->
                <ul style="list-style:none;">
                    <h5 style="color:#fff">CATÁLOGOS</h5>

                    <li id="btn-sistema-fechado" style="padding:5px;border-bottom:1px solid #fff; cursor:pointer;"><a
                            target="_blank" href="pdf/hemodialise.pdf">HEMODIÁLISE E DIÁLISE PERITONEAL</a></li>
                    <li id="btn-sistema-fechado" style="padding:5px;border-bottom:1px solid #fff; cursor:pointer;"><a
                            target="_blank" href="pdf/tego.pdf">TEGO</a></li>
                    <li id="btn-sistema-fechado" style="padding:5px;border-bottom:1px solid #fff; cursor:pointer;"><a
                            target="_blank" href="pdf/roo-defender.pdf">ROO DEFENDER</a></li>
                    <li id="btn-sistema-fechado" style="padding:5px;border-bottom:1px solid #fff; cursor:pointer;"><a
                            target="_blank" href="pdf/griplock.pdf">GRIPLOCK</a></li>
                    <li id="btn-sistema-fechado" style="padding:5px;border-bottom:1px solid #fff; cursor:pointer;"><a
                            target="_blank" href="pdf/cvc.pdf">CATETER VENOSO CENTRAL E PERIFÉRICO</a></li>
                    <li id="btn-sistema-fechado" style="padding:5px;border-bottom:1px solid #fff; cursor:pointer;"><a
                            target="_blank" href="pdf/hematologia.pdf">HEMATOLOGIA E ONCOLOGIA</a></li>
                    <li id="btn-sistema-fechado" style="padding:5px;border-bottom:1px solid #fff; cursor:pointer;"><a
                            target="_blank" href="pdf/pediatrico.pdf">LINHA PEDIÁTRICA</a></li>
                    <li id="btn-sistema-fechado" style="padding:5px;border-bottom:1px solid #fff; cursor:pointer;"><a
                            target="_blank" href="pdf/halyard_homepump.pdf">INFUSOR ELASTOMÉRICO</a></li>
                    <li id="btn-sistema-fechado" style="padding:5px;border-bottom:1px solid #fff; cursor:pointer;"><a
                            target="_blank" href="pdf/agulha_huber.pdf">AGULHA HUBER</a></li>



                </ul>
            </div>
        </div>

        <style>
            a {
                color: #fff;
            }


            #link {
                color: #000;
            }

            #link a:hover,
            #link a:visited {
                color: #000;
            }
        </style>
        <section id="content">

            <section id="content" style="margin-top: -30px;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center" style="margin-top: -30px;">
                                <h2 style="color:#1B365D">Calculadora Tego</span></h2>

                            </div>
                        </div>
                    </div>
                </div>


                <!-- FIM DA ESTRUTURA TEGO -->

                <div class="container" id="geraPDF">

                    <div class="row" style=" font-size:small; font-weight: 800;">


                        <div class="row arrumaTextoCentro">

                            <div class="col-md-12">
                                <div class="box-pacientes">
                                    <h3>PACIENTES EM USO DE CATÉTER</h3>
                                    <div class="form-group">
                                        <input tabindex="1" type="text" maxlength="5" class="form-control"
                                            placeholder="Digite a quantidade" id="numeroPacientes">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row"></div>


                        <!-- inicio estrutura comparacao  -->


                        <div class="row arruma-cor-azul">

                            <div class="col-md-12">
                                <div class="box-pacientes">
                                    <h3>KIT DESCARTÁVEIS</h3>

                                </div>

                                <div class="row arrumaTextoCentro">

                                    <div class="col-md-12">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-1"><span class="arruma-cor">SERINGA:</span></div>
                                        <div class="col-md-1"><span class="arruma-cor">GASE ESTÉRIL:</span></div>
                                        <div class="col-md-1"><span class="arruma-cor">LUVA ESTÉRIL:</span></div>
                                        <div class="col-md-1"><span class="arruma-cor">CAMPO ESTÉRIL:</span></div>
                                        <div class="col-md-2"><span class="arruma-cor">LUVA DE PROCEDIMENTO:</span>
                                        </div>
                                        <div class="col-md-1"><span class="arruma-cor">AGULHAS:</span> </div>
                                        <div class="col-md-1"><span class="arruma-cor">OUTROS:</span></div>
                                        <div class="col-md-2"></div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-12">

                                        <div class="col-md-2"></div>

                                        <div class="form-group col-md-1">
                                            <input tabindex="3" type="text" maxlength="10"
                                                onkeypress="$(this).mask('#.##0,00', {reverse: true});"
                                                class="form-control" placeholder="R$:" id="seringa">
                                        </div>

                                        <div class="form-group col-md-1">
                                            <input tabindex="3" type="text" maxlength="10"
                                                onkeypress="$(this).mask('#.##0,00', {reverse: true});"
                                                class="form-control" placeholder="R$:" id="gaseEsteril">
                                        </div>

                                        <div class="form-group col-md-1">
                                            <input tabindex="3" type="text" maxlength="10"
                                                onkeypress="$(this).mask('#.##0,00', {reverse: true});"
                                                class="form-control" placeholder="R$:" id="luvaEsteril">
                                        </div>

                                        <div class="form-group col-md-1">
                                            <input tabindex="3" type="text" maxlength="10"
                                                onkeypress="$(this).mask('#.##0,00', {reverse: true});"
                                                class="form-control" placeholder="R$:" id="campoEsteril">
                                        </div>

                                        <div class="form-group col-md-2">
                                            <input tabindex="3" type="text" maxlength="10"
                                                onkeypress="$(this).mask('#.##0,00', {reverse: true});"
                                                class="form-control" placeholder="R$:" id="luvaDeProcedimento">
                                        </div>

                                        <div class="form-group col-md-1">
                                            <input tabindex="3" type="text" maxlength="10"
                                                onkeypress="$(this).mask('#.##0,00', {reverse: true});"
                                                class="form-control" placeholder="R$:" id="agulhas">
                                        </div>

                                        <div class="form-group col-md-1">
                                            <input tabindex="3" type="text" maxlength="10"
                                                onkeypress="$(this).mask('#.##0,00', {reverse: true});"
                                                class="form-control" placeholder="R$:" id="outros">
                                        </div>

                                        <div class="col-md-2"></div>

                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="col-md-6 coluna-calculo">

                            <div class="row">

                                <div class="col-md-12 box-pacientes-qtd-sessoes-mensais">
                                    <div class="" style="">
                                        QUANTIDADE DE SESSÕES MENSAIS
                                    </div>
                                    <input tabindex="2" value="1" type="text" maxlength="3" class="form-control"
                                        id="qtdSessoesMensais">
                                </div>


                            </div>



                            <div class="row">

                                <div class="col-md-4">
                                    <div class="title-calculo">
                                        CONECTORES INFUSÃO UNIDADE
                                    </div>
                                    <input tabindex="2" type="text" maxlength="10"
                                        onkeypress="$(this).mask('#.##0,00', {reverse: true});" class="form-control"
                                        placeholder="R$:" id="conectorInfusaoUnidade">
                                </div>

                                <div class="col-md-4">
                                    <div class="title-calculo">
                                        SOLUÇÕES DE LOCK
                                    </div>
                                    <input tabindex="3" type="text" maxlength="10"
                                        onkeypress="$(this).mask('#.##0,00', {reverse: true});" class="form-control"
                                        placeholder="R$:" id="solucoesDeLock">
                                </div>

                                <div class="col-md-4">
                                    <div class="title-calculo">
                                        KIT MATERIAIS DESCARTÁVEIS
                                    </div>
                                    <input tabindex="4" type="text" maxlength="10"
                                        onkeypress="$(this).mask('#.##0,00', {reverse: true});" class="form-control"
                                        placeholder="R$:" id="kitMateriaisDescartaveis">
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

                                <div class="col-md-3" style="font-size:11px; line-height:15px;">
                                    CONECTORES DE INFUSÃO UNIDADE
                                </div>

                                <div class="col-md-3 arrumaAlinhamento" id="cellConectorInfusaoUnidade">
                                    R$ 0,00
                                </div>

                                <div class="col-md-3 arrumaAlinhamento" id="cellConectorInfusaoUnidadeSemanal">
                                    R$ 0,00
                                </div>

                                <div class="col-md-3 arrumaAlinhamento" id="cellConectorInfusaoUnidadeMensal">
                                    R$ 0,00
                                </div>

                            </div>



                            <div class="row">

                                <div class="col-md-3" style="font-size:11px; line-height:15px;">
                                    SOLUÇÕES DE LOCK
                                </div>

                                <div class="col-md-3 arrumaAlinhamento" id="cellsolucoesDeLock">
                                    R$ 0,00
                                </div>

                                <div class="col-md-3 arrumaAlinhamento" id="cellsolucoesDeLockSemanal">
                                    R$ 0,00
                                </div>

                                <div class="col-md-3 arrumaAlinhamento" id="cellsolucoesDeLockMensal">
                                    R$ 0,00
                                </div>

                            </div>



                            <div class="row line-calculo-bg" >

                                <div class="col-md-3" style="font-size:11px; line-height:15px;">
                                    KIT MATERIAIS DESCARTÁVEIS
                                </div>

                                <div class="col-md-3 arrumaAlinhamento" id="cellkitMateriaisDescartaveis">
                                    R$ 0,00
                                </div>

                                <div class="col-md-3 arrumaAlinhamento" id="cellkitMateriaisDescartaveisSemanal">
                                    R$ 0,00
                                </div>

                                <div class="col-md-3 arrumaAlinhamento" id="cellkitMateriaisDescartaveisMensal">
                                    R$ 0,00
                                </div>

                            </div>


                            <div class="row">

                                <div class="col-md-3" style="font-size:11px; line-height:15px;">
                                    TOTAL
                                </div>

                                <div class="col-md-3 arrumaAlinhamento" id="cellTotalDiario">
                                    R$ 0,00
                                </div>

                                <div class="col-md-3 arrumaAlinhamento" id="cellTotalSemanal">
                                    R$ 0,00
                                </div>

                                <div class="col-md-3 arrumaAlinhamento" id="cellTotalMensal">
                                    R$ 0,00
                                </div>

                            </div>


                            <div class="row">

                                <div class="col-md-1"></div>

                                <div class="col-md-12 coluna-head arrumaTextoCentro">
                                    CUSTO POR PACIENTE COM CATÉTER
                                </div>

                            </div>


                            <div class="row">

                                <div class="col-md-3 arrumaAlinhamento result-paciente">
                                    TOTAL
                                </div>

                                <div class="col-md-3 arrumaAlinhamento result-paciente"
                                    id="cellSomaTotalPacientesDiario">
                                    R$ 0,00
                                </div>

                                <div class="col-md-3 arrumaAlinhamento result-paciente"
                                    id="cellSomaTotalPacientesSemanal">
                                    R$ 0,00
                                </div>

                                <div class="col-md-3 arrumaAlinhamento result-paciente"
                                    id="cellSomaTotalPacientesMensal">
                                    R$ 0,00
                                </div>

                            </div>


                        </div>
                        <!-- fim estrutura comparacao  -->




                        <!--inicio estrutura tego  -->
                        <div class="col-md-6 coluna-calculo">

                            <div class="row ">

                                <div class="col-md-12 box-pacientes-qtd-sessoes-mensais">
                                    <div class="">
                                        QUANTIDADE DE SESSÕES MENSAIS
                                    </div>
                                    <input tabindex="2" value="1" type="text" maxlength="3" class="form-control"
                                        id="qtdSessoesMensaisTego">
                                </div>


                            </div>

                            <div class="row">



                                <div class="col-md-4">
                                    <div class="title-calculo">
                                        CONECTOR </br>TEGO UNIDADE
                                    </div>
                                    <input tabindex="5" type="text" maxlength="10"
                                        onkeypress="$(this).mask('#.##0,00', {reverse: true});" class="form-control"
                                        placeholder="R$:" id="tegoUnidade">
                                </div>

                                <div class="col-md-4">
                                    <div class="title-calculo">
                                        SOLUÇÕES DE LOCK
                                    </div>
                                    <input type="text" class="form-control" readonly value="ZERO"
                                        id="solucoesDeLockMedCorp">
                                </div>

                                <div class="col-md-4">
                                    <div class="title-calculo">
                                        KIT MATERIAIS </br>DESCARTÁVEIS
                                    </div>
                                    <input type="text" tabindex="6" maxlength="10" readonly class="form-control"
                                        placeholder="R$:" id="kitMateriaisDescartaveisMedCorp">
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

                                <div class="col-md-3" style="font-size:11px; line-height:15px;">
                                    CONECTOR TEGO UNIDADE
                                </div>
                                <div class="col-md-3 arrumaAlinhamento" id="cellTegoUnidade">
                                    R$ 0,00
                                </div>

                                <div class="col-md-3 arrumaAlinhamento" id="cellTegoUnidadeSemanal">
                                    R$ 0,00
                                </div>

                                <div class="col-md-3 arrumaAlinhamento" id="cellTegoUnidadeMensal">
                                    R$ 0,00
                                </div>

                            </div>



                            <div class="row">

                                <div class="col-md-3" style="font-size:11px; line-height:15px;">
                                    SOLUÇÕES DE LOCK
                                </div>
                                <div class="col-md-3 arrumaAlinhamento" id="cellsolucoesDeLockMedCorp">
                                    ZERO
                                </div>

                                <div class="col-md-3 arrumaAlinhamento" id="cellsolucoesDeLockMedCorpSemanal">
                                    ZERO
                                </div>

                                <div class="col-md-3 arrumaAlinhamento" id="cellsolucoesDeLockMedCorpMensal">
                                    ZERO
                                </div>

                            </div>


                            <div class="row line-calculo-bg">

                                <div class="col-md-3" style="font-size:11px; line-height:15px;">
                                    KIT MATERIAIS DESCARTÁVEIS
                                </div>
                                <div class="col-md-3 arrumaAlinhamento" id="cellkitMateriaisDescartaveisMedCorp">
                                    R$ 0,00
                                </div>

                                <div class="col-md-3 arrumaAlinhamento" id="cellkitMateriaisDescartaveisMedCorpSemanal">
                                    R$ 0,00
                                </div>

                                <div class="col-md-3 arrumaAlinhamento" id="cellkitMateriaisDescartaveisMedCorpMensal">
                                    R$ 0,00
                                </div>

                            </div>


                            <div class="row">

                                <div class="col-md-3" style="font-size:11px; line-height:15px;">TOTAL</div>

                                <div class="col-md-3 arrumaAlinhamento" id="cellTotalDiarioMedCorp">
                                    R$ 0,00
                                </div>

                                <div class="col-md-3 arrumaAlinhamento" id="cellTotalSemanalMedCorp">
                                    R$ 0,00
                                </div>

                                <div class="col-md-3 arrumaAlinhamento" id="cellTotalMensalMedCorp">
                                    R$ 0,00
                                </div>

                            </div>


                            <div class="row">

                                <div class="col-md-1"></div>

                                <div class="col-md-12 coluna-head arrumaTextoCentro">
                                    CUSTO POR PACIENTE COM CATÉTER
                                </div>

                            </div>


                            <div class="row">



                                <div class="col-md-3 arrumaAlinhamento result-paciente">
                                    TOTAL
                                </div>

                                <div class="col-md-3 arrumaAlinhamento result-paciente"
                                    id="cellSomaTotalPacientesDiarioMedCorp">
                                    R$ 0,00
                                </div>

                                <div class="col-md-3 arrumaAlinhamento result-paciente"
                                    id="cellSomaTotalPacientesSemanalMedCorp">
                                    R$ 0,00
                                </div>

                                <div class="col-md-3 arrumaAlinhamento result-paciente"
                                    id="cellSomaTotalPacientesMensalMedCorp">
                                    R$ 0,00
                                </div>

                            </div>


                        </div>
                        <!-- fim estrutura tego  -->
                        
                            <div class="row">
                                <div class="col-md-4">
                                    
                                </div>

                                <div class="col-md-8">
                                    
                                    <button id="myBtn">Try it</button>


                                </div>

                                <div class="col-md-4">
                                    
                                </div>
                            </div>


                        <!-- inicio estrutura grafico -->
                        <div class="col-md-8 col-md-offset-2 coluna-grafico coluna-grafico">
                            <canvas id="Grafico"></canvas>
                        </div>
                        <!-- fim estrutura grafico -->

                    </div>


                    <div class="row">

                        <div class="col-md-12 diferenca-title">
                            DIFERENÇA DE CUSTO POR MÊS
                        </div>

                        <div class="col-md-4 diferenca-txt">
                            CONECTOR/TAMPA
                            <div class="col-md-12 diferenca-num diferenca-num-red" id="CellDiferencaCustoConector">
                                R$0,00
                            </div>
                        </div>

                        <div class="col-md-4 x-custo"> X </div>

                        <div class="col-md-4 diferenca-txt">
                            MEDCORP
                            <div class="col-md-12 diferenca-num diferenca-num-green" id="CellDiferencaCustoMedCorp">
                                R$0,00
                            </div>
                        </div>





                        <div class="col-md-6 economia-txt">
                            ECONOMIA POR MÊS
                            <div class="col-md-12 economia-num" id="CellEconomiaMensal">
                                R$0,00
                            </div>
                        </div>



                        <div class="col-md-6 economia-txt">
                            ECONOMIA ANUAL
                            <div class="col-md-12 economia-num" id="CellEconomiaAnual">
                                R$0,00
                            </div>
                        </div>


                    </div>


                    <!-- fim estrutura container  -->


                    <!--FIM  DIV CONTAINER-->



                    <div class="col-md-12">
                        <!--1 linha -->
                        <!--box principal -->
                        <div class="col-md-12" class="box_principal">

                            <h2 class="diferenca-title">Salve seu Cálculo</h2>
                            <!--<img src="img/pdf.png" width="30px">-->
                            <form onsubmit="return validacao();" class="shake" data-toggle="validator"
                                id="contactForm344" name="contactForm" method="post" role="form"
                                action="enviandoComparativoGrafico.php">
                                <div class="col-md-12">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control"
                                                data-error="Por favor Informe Nome da Instituição"
                                                id="NomedaInstituicao" placeholder="Nome da Instituição" type="text"
                                                name="NomedaInstituicao">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" data-error="Por favor Informe seu nome"
                                                id="name" placeholder="Seu nome" type="text" name="nome">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" data-error="Por favor Informe seu email"
                                                id="email" placeholder="E-mail" required="" type="email" name="email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" data-error="Por favor Informe o telefone"
                                                id="telefone" placeholder="Telefone" required="" type="text"
                                                name="telefone">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <select class="form-control" name="cargo" id="cargo"
                                                data-error="Por favor Informe o Cargo">
                                                <option value="" selected>Selecione o cargo</option>
                                                <option value="Vendedor">Vendedor</option>
                                                <option value="Representante">Representante</option>
                                                <option value="Almoxarifado">Almoxarifado</option>
                                                <option value="Estudante">Estudante</option>
                                                <option value="Outro">Outros Cargos</option>
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>



                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <select class="form-control" name="perfil" id="perfil"
                                                data-error="Por favor Informe seu perfil">
                                                <option value="" selected>Selecione o Perfil</option>
                                                <option value="Distribuidor/Revenda">Distribuidor/Revenda</option>
                                                <option value="Usuário/Consumidor">Usuário/Consumidor</option>
                                                <option value="Outro">Outro</option>
                                            </select>

                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>



                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-success" id="submit" value="Enviar">
                                    <div class="h3 text-center hidden" id="msgSubmit">
                                    </div>
                                    <div class="clearfix"></div>

                                </div>
                                <input type="hidden" name="numeroPacientesFormEmail" id="numeroPacientesFormEmail">
                                <input type="hidden" name="conectorInfusaoUnidadeFormEmail"
                                    id="conectorInfusaoUnidadeFormEmail">
                                <input type="hidden" name="solucoesDeLockFormEmail" id="solucoesDeLockFormEmail">
                                <input type="hidden" name="kitMateriaisDescartaveisFormEmail"
                                    id="kitMateriaisDescartaveisFormEmail">
                                <input type="hidden" name="tegoUnidadeFormEmail" id="tegoUnidadeFormEmail">
                                <input type="hidden" name="solucoesDeLockMedCorpFormEmail"
                                    id="solucoesDeLockMedCorpFormEmail">
                                <input type="hidden" name="kitMateriaisDescartaveisMedCorpFormEmail"
                                    id="kitMateriaisDescartaveisMedCorpFormEmail">
                                <input type="hidden" name="SomaTotalSemanalGrafico" id="SomaTotalSemanalGrafico">
                                <input type="hidden" name="SomaTotalMensalGrafico" id="SomaTotalMensalGrafico">
                                <input type="hidden" name="somaTotalPacientesSemanalMedCorp"
                                    id="somaTotalPacientesSemanalMedCorp">
                                <input type="hidden" name="somaTotalPacientesMensalMedCorp"
                                    id="somaTotalPacientesMensalMedCorp">
                                <input type="hidden" name="economiaMensal" id="economiaMensal">
                                <input type="hidden" name="economiaAnual" id="economiaAnual">
                                <input type="hidden" name="qtdSessoesMensaisTegoFormEmail" id="qtdSessoesMensaisTegoFormEmail">
                                <input type="hidden" name="qtdSessoesMensaisFormEmail" id="qtdSessoesMensaisFormEmail">
                            </form>
                            <br>
                        </div>
                    </div>

                </div>


    </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-11">

                    <div class="col-md-3">
                        <ul>
                            <li><b>QUEM SOMOS</b></li>
                            <li><a href="noticias.php">Nóticias</a></li>
                            <li><a href="contato.php">Fale conosco</a></li>
                            <li><a href="trabalhe-conosco.php">Trabalhe conosco</a></li>
                            <li><a href="eventos.php">Eventos</a></li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <ul>
                            <li><b>ESPECIALIDADES</b></li>
                            <li><a href="acessos.php">Acessos Vasculares</a></li>
                            <li><a href="sistema_fechado.php">Sistema Fechado</a></li>
                            <li><a href="infusor.php">Infusor Elastomérico</a></li>
                            <!--    <li><a href="pediatrica.php">Linha Pediátrica</a></li> -->
                            <!--        <li><a href="laser.php">Laser Endovenoso</a></li> -->
                            <li><a href="controle_infeccao.php">Controle de Infecção</a></li>
                            <!--     <li><a href="eletrocir.php">Eletrocirurgia</a></li>-->
                        </ul>
                    </div>



                    <div class="col-md-3">
                        <ul>
                            <li><b>SIGA-NOS</b></li>
                            <div class="footer-inner text-center">
                                <div class="social-links">

                                    <!--
                            <a class="twitter social-link icon-rede" data-placement="top" data-toggle="tooltip" href="#" title="Twitter"><i class="fa fa-twitter fa-2x"></i></a> -->
                                    <a class="facebook social-link icon-rede" data-placement="top" data-toggle="tooltip"
                                        href="https://www.facebook.com/medcorphospitalarbr" title="Facebook"
                                        target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
                                    <!--
                            <a class="linkedin social-link icon-rede" data-placement="top" data-toggle="tooltip" href="#" title="LinkedIn"><i class="fa fa-linkedin fa-2x"></i></a>

                            <a class="dribbble social-link icon-rede" data-placement="top" data-toggle="tooltip" href="#" title="Youtube"><i class="fa fa-youtube fa-2x"></i></a>-->
                                    <a class="pinterest social-link icon-rede" data-placement="top"
                                        data-toggle="tooltip" href="https://www.instagram.com/medcorphospitalarbr/"
                                        title="Instagram" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
                                </div>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <p class="texto_footer">
                            <span class="b_logo_footer">Medcorp Hospitalar Ltda.<br></span>
                            <b>ESCRITÓRIO:</b> <br>Rua Arminda, 93 - 3º andar - CEP: 04545 100 Vila Olímpia - São
                            Paulo/SP - Brasil
                            <br>Fone/Fax: +55 11-3849-8992 <br> <br>
                            <b>MATRIZ/CENTRO DE DISTRIBUIÇÃO:</b><br> Av. Fagundes de Oliveira, 538 - Galpão A5 - CEP
                            09950-300 - Piraporinha Diadema/SP - Brasil <br>Tel.: +5511 4067-5011
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </footer>




    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

    <!-- Placed at the end of the document so the pages load faster -->

    <script src="js/modernizr.custom.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="plugins/flexslider/jquery.flexslider-min.js"></script>
    <script src="plugins/flexslider/flexslider.config.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/stellar.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/uisearch.js"></script>
    <script src="js/jquery.cubeportfolio.min.js"></script>
    <script src="js/google-code-prettify/prettify.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>


    <script>

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
    </script>


</body>

</html>