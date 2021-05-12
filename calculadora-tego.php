<!DOCTYPE html>
<html lang='pt-br' itemscope itemtype='https://schema.org/Article'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <!-- FAVICON <link rel='shortcut icon' href='images/favicon.png' type='image/x-icon'>-->
    <link rel='shortcut icon' href='img/favicon.ico' />
     <script async src='https://www.googletagmanager.com/gtag/js?id=G-D5SF92WRBY'></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-D5SF92WRBY');
    </script>
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
                    </li>outros
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
                                    <h3>PACIENTES EM USO DE CATETER</h3>
                                    <div class="form-group">
                                        <input tabindex="1" type="text" value="1" maxlength="5" class="form-control"
                                            placeholder="Digite a quantidade" id="numeroPacientes">
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="col-md-6 coluna-calculo">

                            <div class="row">

                                <div class="col-md-12 box-pacientes-qtd-sessoes-mensais">
                                    <div>
                                        Protocolo Atual<br>
                                        QUANTIDADE DE SESSÕES MENSAIS
                                    </div>
                                    <input tabindex="2" value="1" type="text" maxlength="3" class="form-control"
                                        id="qtdSessoesMensais">
                                </div>


                            </div>



                            <div class="row">

                                <div class="col-md-4">
                                    <div class="title-calculo">
                                        TAMPAS E OCLUSORES
                                    </div>
                                    <input tabindex="2" type="text" maxlength="10"
                                        onkeypress="$(this).mask('#.##0,00', {reverse: true});" class="form-control"
                                        placeholder="R$:" id="conectorInfusaoUnidade">
                                </div>

                                <div class="col-md-4">
                                    <div class="title-calculo">
                                        SOLUÇÃO DE LOCK / FRASCO
                                    </div>
                                    <input tabindex="3" type="text" maxlength="10"
                                        onkeypress="$(this).mask('#.##0,00', {reverse: true});" class="form-control"
                                        placeholder="R$:" id="solucoesDeLock">
                                </div>

                                <div class="col-md-4">
                                    <div class="title-calculo">
                                        
                                        KIT MATERIAIS DESCARTÁVEIS<br>
                                        <button class="btn btn-success btn-sm" data-toggle="modal"
                                        data-target="#myModal">Somar</button>
                                        <!--<span style="cursor:pointer;"  data-toggle="modal" data-target="#myModal"><svg width="15" height="15" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="question-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-question-circle fa-w-16 fa-2x"><path fill="currentColor" d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z" class=""></path></svg></span>-->
                                    </div>
                                    <input tabindex="4" type="text" maxlength="10"
                                        onkeypress="$(this).mask('#.##0,00', {reverse: true});" class="form-control"
                                        placeholder="R$:" id="kitMateriaisDescartaveis">
                                </div>

                            </div>

                            <div class="hide-calcula">
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
                                        TAMPAS E OCLUSORES
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
                                        SOLUÇÃO DE LOCK / FRASCO
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



                                <div class="row line-calculo-bg">

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
                                        CUSTO POR PACIENTE COM CATETER
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

                        </div>
                        <!-- fim estrutura comparacao  -->




                        <!--inicio estrutura tego  -->
                        <div class="col-md-6 coluna-calculo">

                            <div class="row ">

                                <div class="col-md-12 box-pacientes-qtd-sessoes-mensais">
                                    <div class="">
                                        Protocolo Tego<br>
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
                                        SOLUÇÃO DE LOCK / FRASCO
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
                            <div class="hide-calcula">
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
                                        SOLUÇÃO DE LOCK / FRASCO
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

                                    <div class="col-md-3 arrumaAlinhamento"
                                        id="cellkitMateriaisDescartaveisMedCorpSemanal">
                                        R$ 0,00
                                    </div>

                                    <div class="col-md-3 arrumaAlinhamento"
                                        id="cellkitMateriaisDescartaveisMedCorpMensal">
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
                                        CUSTO POR PACIENTE COM CATETER
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

                        </div>
                        <!-- fim estrutura tego  -->

                        <div class="row">


                            <div class="col-md-12" style="text-align:center;">

                                <button class="btn btn-success btn-lg" id="calcula">Calcular</button>


                            </div>


                        </div>

                        <div class="hide-calcula">
                            <!-- inicio estrutura grafico -->
                            <!--<div class="col-md-8 col-md-offset-2 coluna-grafico coluna-grafico">
                                <canvas id="Grafico"></canvas>
                            </div>-->
                            <!-- fim estrutura grafico -->


                            <div class="col-md-12 diferenca-title">
                                DIFERENÇA DE CUSTO POR MÊS
                            </div>

                            <div class="col-md-4 diferenca-txt">
                                Protocolo Atual
                                <div class="col-md-12 diferenca-num diferenca-num-red" id="CellDiferencaCustoConector">
                                    R$0,00
                                </div>
                            </div>

                            <div class="col-md-4 x-custo"> X </div>

                            <div class="col-md-4 diferenca-txt">
                                Protocolo Tego
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
                      
                        <div class="hide-calcula">
                            <div class="col-md-12">
                                <!--1 linha -->
                                <!--box principal -->
                                <div class="col-md-12" class="box_principal">

                                    <h2 class="diferenca-title">Salve seu Cálculo</h2>
                                    <!--<img src="img/pdf.png" width="30px">-->
                                    <form onsubmit="return validacao();" class="shake" data-toggle="validator"
                                        id="contactForm344" name="contactForm" method="post" role="form"
                                        action="enviandoComparativoGrafico.php" target="_blank">
                                        <div class="col-md-12">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input class="form-control"
                                                        data-error="Por favor Informe Nome da Instituição"
                                                        id="NomedaInstituicao" placeholder="Nome da Instituição"
                                                        type="text" name="NomedaInstituicao">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input class="form-control" data-error="Por favor Informe seu nome"
                                                        id="name" placeholder="Seu Nome" type="text" name="nome">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input class="form-control" data-error="Por favor Informe seu email"
                                                        id="email" placeholder="E-mail" required="" type="email"
                                                        name="email">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input class="form-control"
                                                        data-error="Por favor Informe o telefone" id="telefone"
                                                        placeholder="Telefone" required="" type="text" name="telefone">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">

                                                    <select class="form-control" name="cargo" id="cargo"
                                                        data-error="Por favor Informe o Cargo">
                                                        <option value="" selected>Selecione seu Cargo</option>
                                                        <option value="CEO">Sócio/CEO/Diretor</option>
                                                        <option value="Gerente">Gerente/Coordenador</option>
                                                        <option value="Comprador">Comprador</option>
                                                        <option value="Engenheiro">Engenheiro de Segurança</option>
                                                        <option value="seguranca">Técnico de Segurança</option>
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
                                                        <option value="" selected>Selecione seu Perfil</option>
                                                        <option value="Distribuidor/Revenda">Distribuidor/Revenda
                                                        </option>
                                                        <option value="Usuário/Consumidor">Usuário/Consumidor</option>
                                                        <option value="Outro">Outro</option>
                                                    </select>

                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>



                                        </div>
                                        <div class="col-md-12" style="text-align:center;">
                                            <input type="submit" class="btn btn-success btn-lg" id="submit"
                                                value="Enviar" class="g-recaptcha" 
                                                data-sitekey="6LdvfNAaAAAAAOK1BcmzK7OkHhwfSBJsY0BW56J7" 
                                                data-callback='onSubmit' 
                                                data-action='submit'>
                                            <div class="h3 text-center hidden" id="msgSubmit">
                                            </div>
                                            <div class="clearfix"></div>

                                        </div>
                                        
                                        <input type="hidden" name="numeroPacientesFormEmail"
                                            id="numeroPacientesFormEmail">
                                        <input type="hidden" name="conectorInfusaoUnidadeFormEmail"
                                            id="conectorInfusaoUnidadeFormEmail">
                                        <input type="hidden" name="solucoesDeLockFormEmail"
                                            id="solucoesDeLockFormEmail">
                                        <input type="hidden" name="kitMateriaisDescartaveisFormEmail"
                                            id="kitMateriaisDescartaveisFormEmail">
                                        <input type="hidden" name="tegoUnidadeFormEmail" id="tegoUnidadeFormEmail">
                                        <input type="hidden" name="solucoesDeLockMedCorpFormEmail"
                                            id="solucoesDeLockMedCorpFormEmail">
                                        <input type="hidden" name="kitMateriaisDescartaveisMedCorpFormEmail"
                                            id="kitMateriaisDescartaveisMedCorpFormEmail">
                                                                                   
                                        <input type="hidden" name="somaTotalSemanalFormEmail"
                                            id="somaTotalSemanalFormEmail">
                                        <input type="hidden" name="somaTotalMensalFormEmail" 
                                        id="somaTotalMensalFormEmail">
                                        
                                        <input type="hidden" name="somaTotalSemanalMedCorpFormEmail"
                                            id="somaTotalSemanalMedCorpFormEmail">
                                        <input type="hidden" name="SomaTotalMensalMedCorpFormEmail" 
                                        id="somaTotalMensalMedCorpFormEmail">
                                                                              
                                        <input type="hidden" name="somaTotalPacientesSemanalFormEmail"
                                            id="somaTotalPacientesSemanalFormEmail">
                                        <input type="hidden" name="somaTotalPacientesMensalFormEmail"
                                            id="somaTotalPacientesMensalFormEmail">

                                        <input type="hidden" name="somaTotalPacientesSemanalMedCorpFormEmail"
                                            id="somaTotalPacientesSemanalMedCorpFormEmail">
                                        <input type="hidden" name="somaTotalPacientesMensalMedCorpFormEmail"
                                            id="somaTotalPacientesMensalMedCorpFormEmail">
      
                                        <input type="hidden" name="economiaMensalFormEmail" id="economiaMensalFormEmail">
                                        <input type="hidden" name="economiaAnualFormEmail" id="economiaAnualFormEmail">
                                        <input type="hidden" name="qtdSessoesMensaisTegoFormEmail"
                                            id="qtdSessoesMensaisTegoFormEmail">
                                        <input type="hidden" name="qtdSessoesMensaisFormEmail"
                                            id="qtdSessoesMensaisFormEmail">
                                    </form>
                                    
                                    <br>
                                      <div class="col-md-12" style="text-align:right;">
                            <a href="/calculadora-tego.php" class="btn btn-success btn-lg">Novo cálculo</a>
                        </div>
                                </div>
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
                                            <a class="facebook social-link icon-rede" data-placement="top"
                                                data-toggle="tooltip"
                                                href="https://www.facebook.com/medcorphospitalarbr" title="Facebook"
                                                target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
                                            <!--
                            <a class="linkedin social-link icon-rede" data-placement="top" data-toggle="tooltip" href="#" title="LinkedIn"><i class="fa fa-linkedin fa-2x"></i></a>

                            <a class="dribbble social-link icon-rede" data-placement="top" data-toggle="tooltip" href="#" title="Youtube"><i class="fa fa-youtube fa-2x"></i></a>-->
                                            <a class="pinterest social-link icon-rede" data-placement="top"
                                                data-toggle="tooltip"
                                                href="https://www.instagram.com/medcorphospitalarbr/" title="Instagram"
                                                target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
                                        </div>
                                </ul>
                            </div>

                            <div class="col-md-3">
                                <p class="texto_footer">
                                    <span class="b_logo_footer">Medcorp Hospitalar Ltda.<br></span>
                                    <b>ESCRITÓRIO:</b> <br>Rua Arminda, 93 - 3º andar - CEP: 04545 100 Vila Olímpia -
                                    São
                                    Paulo/SP - Brasil
                                    <br>Fone/Fax: +55 11-3849-8992 <br> <br>
                                    <b>MATRIZ/CENTRO DE DISTRIBUIÇÃO:</b><br> Av. Fagundes de Oliveira, 538 - Galpão A5
                                    - CEP
                                    09950-300 - Piraporinha Diadema/SP - Brasil <br>Tel.: +5511 4067-5011
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-11">

                            <p>© 2021 MEDCORP.Todos os direitos reservados. <a href="/politica-de-privacidade.php" style="text-decoration:underline">Política de Privacidade</a> | <a href="/termos-de-uso.php" style="text-decoration:underline">Termos de Uso</a>.</p>
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
               function onSubmit(token) {
                 document.getElementById("contactForm344").submit();
               }
             </script>
            <script src="js/calculadora-tego.js"></script>

            <div class="container">


                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">


                    <!-- inicio estrutura comparacao  -->


                    <div class="row arruma-cor-azul">

                        <div class="col-md-12">
                            <button type="button" class="close" data-dismiss="modal">
                                <span class="arruma-cor" style="position: absolute;right: 10px;top: 0;font-size: 40px;">
                                    &times;
                                </span>
                            </button>
                            <div class="box-pacientes" style="text-align:center;">
                                <h3>MATERIAIS DESCARTÁVEIS</h3>

                            </div>

                            <div class="row arrumaTextoCentro">

                                <div class="col-md-12">

                                    <div class="col-md-3 col-xs-6">
                                        <span
                                            style="color:#FFF; display:block; padding:10px 0; text-align:center;">SERINGA</span>
                                        <input tabindex="3" type="text" maxlength="10"
                                            onkeypress="$(this).mask('#.##0,00', {reverse: true});" class="form-control"
                                            placeholder="R$:" id="seringa">
                                    </div>

                                    <div class="col-md-3 col-xs-6">
                                        <span style="color:#FFF; display:block; padding:10px 0; text-align:center;">GASE
                                            ESTÉRIL</span>
                                        <input tabindex="3" type="text" maxlength="10"
                                            onkeypress="$(this).mask('#.##0,00', {reverse: true});" class="form-control"
                                            placeholder="R$:" id="gaseEsteril">
                                    </div>

                                    <div class="col-md-3 col-xs-6">
                                        <span
                                            style="color:#FFF; display:block; padding:10px 0; text-align:center;">CAMPO
                                            ESTÉRIL</span>
                                        <input tabindex="3" type="text" maxlength="10"
                                            onkeypress="$(this).mask('#.##0,00', {reverse: true});" class="form-control"
                                            placeholder="R$:" id="campoEsteril">
                                    </div>
                                    
                                    <div class="col-md-3 col-xs-6">
                                        <span style="color:#FFF; display:block; padding:10px 0; text-align:center;">LUVA
                                            ESTÉRIL</span>
                                        <input tabindex="3" type="text" maxlength="10"
                                            onkeypress="$(this).mask('#.##0,00', {reverse: true});" class="form-control"
                                            placeholder="R$:" id="luvaEsteril">
                                    </div>

                                   

                                    <div class="col-md-3 col-xs-6">
                                        <span style="color:#FFF; display:block; padding:10px 0; text-align:center;">LUVA
                                            DE PROCEDIMENTO</span>
                                        <input tabindex="3" type="text" maxlength="10"
                                            onkeypress="$(this).mask('#.##0,00', {reverse: true});" class="form-control"
                                            placeholder="R$:" id="luvaDeProcedimento">
                                    </div>

                                    <!--<div class="col-md-3 col-xs-6">
                                        <span style="color:#FFF; display:block; padding:10px 0; text-align:center;">
                                            TAMPAS E OCLUSORES
                                        </span>
                                        <input tabindex="3" type="text" maxlength="10"
                                            onkeypress="$(this).mask('#.##0,00', {reverse: true});" class="form-control"
                                            placeholder="R$:" id="tampasEOclusores">
                                    </div>-->
                                    
                                    <div class="col-md-3 col-xs-6">
                                        <span
                                            style="color:#FFF; display:block; padding:10px 0; text-align:center;">AGULHAS</span>
                                        <input tabindex="3" type="text" maxlength="10"
                                            onkeypress="$(this).mask('#.##0,00', {reverse: true});" class="form-control"
                                            placeholder="R$:" id="agulhas">
                                    </div>

                                    <div class="col-md-3 col-xs-6">
                                        <span
                                            style="color:#FFF; display:block; padding:10px 0; text-align:center;">OUTROS</span>
                                        <input tabindex="3" type="text" maxlength="10"
                                            onkeypress="$(this).mask('#.##0,00', {reverse: true});" class="form-control"
                                            placeholder="R$:" id="outros">
                                    </div>

                                </div>
                            </div>



                        </div>


                        <div class="row">
                            <div class="col-md-12" style="text-align:center;">
                                <button class="btn btn-success btn-lg" id="btSomaKit" data-dismiss="modal">SOMAR VALOR
                                    TOTAL DOS ITENS</button>
                            </div>

                        </div>
                    </div>




                </div>
            </div>
</body>

</html>