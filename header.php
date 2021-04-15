<?php include 'head.php' ?>
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
        .footer ul>li{list-style: none;}
        .lista_logos_rodape >li{list-style: none;display: inline}
        .lista_logos_rodape img{width:120px; margin: 10px;}
        .lista_logos_rodape .logo_rodape_bio{width:50px; margin: 10px;}
        .social-links{margin-right: 20px;}
        .fa-2x{margin-right: 10px;}
        .icon{color:#1B365D;}
        .highlight{background: #8A009F}
        a:hover{color:#FAF9B8;}
        #container-submenu{width:75%; background:#3e6193; position:absolute; z-index:999; left:10%;padding:10px; display: none}
 #container-submenu a{color:#fff;}
 #container-submenu a:visited{color:#fff;}
 #container-submenu a:link{color:#fff;}



#menu-mobile>li{list-style: none; height: 50px; border-bottom: 1px solid #fff; font-weight: bold; margin-left: -30px;padding:10px;}

#bloco-produtos{display: none;position: relative}


#container-catalogo{width:75%; background:#3e6193; position:absolute; z-index:999; left:10%;padding:10px; display: none}

    </style>
    <script src="js/jquery.min.js"></script>

 <?php
    $iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
    $ipad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
    $android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
    $palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
    $berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
    $ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
    $symbian =  strpos($_SERVER['HTTP_USER_AGENT'],"Symbian");
    if ($iphone || $ipad || $android || $palmpre || $ipod || $berry || $symbian == true) {
        echo "<script src='js/menu-mobile.js'></script>";
    } else {
        echo "<script src='js/menu.js'></script>";
    }
    ?>

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
                                <li><i class="fa fa-envelope"></i>&nbsp&nbsp<a style="color:#000" href="mailto:medcorpnet@medcorpnet.com.br">medcorpnet@medcorpnet.com.br</a></li>
                            </ul>

                            <ul class="topleft-info">
                                <li><i class="fa fa-phone"></i>&nbsp&nbsp<a style="color:#000">+55 11-3849-8992</a></li>
                                <li style="cursor: pointer;"><a href="about.php"><img src="img/flag.png" width="30"></a></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <div id="sb-search" class="sb-search" >
                                <form method="post" action="busca.php">
                                    <input class="sb-search-input" placeholder="Digite aqui" type="text" value="" name="palavrachave" id="search">
                                    <input class="sb-search-submit" type="submit" value="">
                                    <span class="sb-icon-search" style="background:#1B365D" title="Clique aqui para pesquisar"></span>
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
                        <a class="navbar-brand" href="index.php"><img src="img/varios/logo.png" alt="" width="250"  /></a>
                    </div>
                    <div class="navbar-collapse collapse " >

                        <ul class="nav navbar-nav" id="menu-desktop" style="width:70%;">
  <!--                      <li><a href="#">HOME</a></li>
                         <li><a href="#">QUEM SOMOS</a></li>
                     -->
                     <li class="dropdown">
                        <a href="#" id="btn-produtos" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">PRODUTOS <i class="fa fa-angle-down"></i></a>
                    </li>
  <!--                   <li><a href="novidades.php">NOVIDADES</a></li>
                    <li><a href="videos.php">VÍDEOS</a></li> -->
                    <li class="dropdown">
                        <a href="#"  id="btn-catalogo" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">CATÁLOGOS <i class="fa fa-angle-down"></i></a>
                    </li>

                    <li><a href="fornecedores.php">FORNECEDORES</a></li>

                    <li><a href="contato.php">CONTATOS</a></li>

                </ul>

            </div>
        </div>
    </div>
</header>


<!-- CARREGA MENU MOBILE SE FOR  -->
 <?php
    $iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
    $ipad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
    $android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
    $palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
    $berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
    $ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
    $symbian =  strpos($_SERVER['HTTP_USER_AGENT'],"Symbian");
    if ($iphone || $ipad || $android || $palmpre || $ipod || $berry || $symbian == true) {
       include 'estrutura/menu-mobile.php';
    }
    ?>


<!-- end header -->

<div id="container-submenu">
    <div style="width:25%;float: left; color:#fff;">
        <!-- 1 bloco -->
        <ul style="list-style:none;">
            <h5  style="color:#fff">PRODUTOS</h5>
            <li id="btn-acessos-vasculares" style ="padding:5px;border-bottom:1px solid #fff; cursor:pointer;">ACESSOS VASCULARES &nbsp<i class="fa fa-angle-right" style="float:right"></i></li>
            <li id="btn-sistema-fechado" style ="padding:5px;border-bottom:1px solid #fff; cursor:pointer;">SISTEMA FECHADO &nbsp<i class="fa fa-angle-right" style="float:right"></i></li>
            <li id="btn-infusor" style ="padding:5px;border-bottom:1px solid #fff; cursor:pointer;">INFUSOR ELASTOMÉRICO &nbsp<i class="fa fa-angle-right" style="float:right"></i></li>
            <li id="btn-pediatrico" style ="padding:5px;border-bottom:1px solid #fff; cursor:pointer;">LINHA PEDIÁTRICA &nbsp<i class="fa fa-angle-right" style="float:right"></i></li>
           
           <!--
            <li id="btn-laser" style ="padding:5px;border-bottom:1px solid #fff; cursor:pointer;">LASER ENDOVENOSO &nbsp<i class="fa fa-angle-right" style="float:right"></i></li>
            -->
           
            <li id="btn-ccih" style ="padding:5px;border-bottom:1px solid #fff; cursor:pointer;">CONTROLE DE INFECÇÃO &nbsp<i class="fa fa-angle-right" style="float:right"></i></li>
            <li id="btn-estab" style ="padding:5px;border-bottom:1px solid #fff; cursor:pointer;">DISPOSITIVO DE ESTABILIZAÇÃO E SEGURANÇA &nbsp<i class="fa fa-angle-right" style="float:right"></i></li>
            <!--

            <li id="btn-eletrocirurgia" style ="padding:5px;border-bottom:1px solid #fff; cursor:pointer;">ELETROCIRURGIA &nbsp<i class="fa fa-angle-right" style="float:right"></i></li>

            -->




        </ul>
    </div>


    <!-- 2 bloco -->
    <!--ACESSOS VASCULARES -->
    <div id="bloco-acessos-vasculares" style="width:25%;float: left; color:#fff;display:none">
        <ul style="list-style:none;">
            <h5  style="color:#fff">ACESSOS VASCULARES</h5>
            <li  id="btn-hemodialise" style ="padding:5px;border-bottom:1px solid #fff;cursor:pointer;">HEMODIÁLISE &nbsp<i class="fa fa-angle-right" style="float:right"></i></li>
            <li  id="btn-dialise" style ="padding:5px;border-bottom:1px solid #fff;cursor:pointer;">DIÁLISE PERITONEAL&nbsp<i class="fa fa-angle-right" style="float:right"></i></li>
            <li  id="btn-terapia" style ="padding:5px;border-bottom:1px solid #fff;cursor:pointer;">TERAPIA INTENSIVA&nbsp<i class="fa fa-angle-right" style="float:right"></i></li>
            <li  id="btn-hemaeonco" style ="padding:5px;border-bottom:1px solid #fff;cursor:pointer;">HEMATOLOGIA E ONCOLOGIA&nbsp&nbsp<i class="fa fa-angle-right" style="float:right"></i></li>
            <li  id="btn-acessorio" style ="padding:5px;border-bottom:1px solid #fff;cursor:pointer;">ACESSÓRIOS&nbsp<i class="fa fa-angle-right" style="float:right"></i></li>
        </ul>
    </div>
    <!--ELETROCIRURGIA -->
    <div id="bloco-eletrocirugia" style="width:25%;float: left; color:#fff; display:none">
        <ul style="list-style:none;">
            <h5  style="color:#fff">ELETROCIRURGIA</h5>
           <li style ="padding:5px;border-bottom:1px solid #fff"><a href="eletrocirurgia.php?post=26">PLACA DE RETORNO<BR> MEGASOFT</a></i></li>
            <li style ="padding:5px;border-bottom:1px solid #fff"><a href="eletrocirurgia.php?post=7">ELETRODOS EZ-CLEAN&nbsp</a></i></li>
            <li style ="padding:5px;border-bottom:1px solid #fff"><a href="eletrocirurgia.php?post=1">CANETA ELETROCIRÚRGICA<BR> EZ-CLEAN &nbsp&nbsp</a></i></li>
            <li style ="padding:5px;border-bottom:1px solid #fff"><a href="eletrocirurgia.php?post=36">BISTURI ELÉTRICO<BR> MEGA POWER</a></i></li>
           <li style ="padding:5px;border-bottom:1px solid #fff"><a href="eletrocirurgia.php?post=29">CABOS &nbsp&nbsp</a></i></li>
        </ul>
    </div>
    <!--SISTEMA FECHADO -->
    <div id="bloco-sistema-fechado" style="width:25%;float: left; color:#fff; display:none">
        <ul style="list-style:none;">
            <h5  style="color:#fff">SISTEMA FECHADO</h5>
            <li style ="padding:5px;border-bottom:1px solid #fff"><a href="sistema-fechado.php?post=80">TEGO</a></li>
        </ul>
    </div>
    <!--INFUSOR ELETROSTATICO -->
    <div id="bloco-infusor" style="width:25%;float: left; color:#fff; display:none">
        <ul style="list-style:none;">
            <h5  style="color:#fff">INFUSOR ELASTOMÉRICO</h5>
            <li style ="padding:5px;border-bottom:1px solid #fff"><a href="infusor-elastomerico.php?post=82">HOMEPUMP C-SERIES</a></li>
        </ul>
    </div>
    <!--LASER ENDOVENOSO  -->
    <div id="bloco-laser" style="width:25%;float: left; color:#fff; display:none">
        <ul style="list-style:none;">
            <h5  style="color:#fff">LASER ENDOVENOSO  </h5>
            <li style ="padding:5px;border-bottom:1px solid #fff"><a href="laser-endovenoso.php?post=83">LEONARDO DUAL 45</a></li>
            <li style ="padding:5px;border-bottom:1px solid #fff"><a href="laser-endovenoso.php?post=84">FIBRAS RADIAIS ELVES</a></li>
        </ul>
    </div>
    <!--LINHA PEDIÁTRICA  -->
    <div id="bloco-pediatrico" style="width:25%;float: left; color:#fff; display:none">
        <ul style="list-style:none;">
            <h5  style="color:#fff">LINHA PEDIÁTRICA  </h5>
            <li  id="btn-prodpediacesso" style ="padding:5px;border-bottom:1px solid #fff;cursor: pointer;">ACESSO TEMPORÁRIO<i class="fa fa-angle-right" style="float:right"></i></li>
            <li  id="btn-prodpedilonga"  style ="padding:5px;border-bottom:1px solid #fff;cursor: pointer;">LONGA PERMANÊNCIA<i class="fa fa-angle-right" style="float:right"></i></li>
            <li  id="btn-prodpedidiase"  style ="padding:5px;border-bottom:1px solid #fff;cursor: pointer;">DIÁLISE PERITONEAL<i class="fa fa-angle-right" style="float:right"></i></li>
            <li  id="btn-prodpedicvc"    style ="padding:5px;border-bottom:1px solid #fff;cursor: pointer;">CVC<i class="fa fa-angle-right" style="float:right"></i></li>
            <li  id="btn-prodpedipicc"   style ="padding:5px;border-bottom:1px solid #fff;cursor: pointer;">PICC<i class="fa fa-angle-right" style="float:right"></i></li>
            <li  id="btn-prodpedicatim"  style ="padding:5px;border-bottom:1px solid #fff;cursor: pointer;">CATETER TOTALMENTE IMPLANTÁVEL<i class="fa fa-angle-right" style="float:right"></i></li>
            <li  id="btn-prodpedicatisemi" style ="padding:5px;border-bottom:1px solid #fff;cursor: pointer;">CATETER SEMI IMPLANTÁVEL<i class="fa fa-angle-right" style="float:right"></i></li>
         <!--   <li  id="btn-prodpediacess"  style ="padding:5px;border-bottom:1px solid #fff;cursor: pointer;">ACESSÓRIOS<i class="fa fa-angle-right" style="float:right"></i></li> -->
			<li  id="btn-prodpedifechado"  style ="padding:5px;border-bottom:1px solid #fff;cursor: pointer;">SISTEMA FECHADO<i class="fa fa-angle-right" style="float:right"></i></li>

        </ul>
    </div>
    <!--CCIH&nbsp&nbsp  -->
    <div id="bloco-ccih" style="width:25%;float: left; color:#fff; display:none">
        <ul style="list-style:none;">
            <h5  style="color:#fff">CONTROLE DE INFECÇÃO&nbsp&nbsp</h5>
            <li style ="padding:5px;border-bottom:1px solid #fff"><a href="ccih.php?post=80">TEGO </a></li>
            <li style ="padding:5px;border-bottom:1px solid #fff"><a href="ccih.php?post=81">ROO DEFENDER </a></li>

        </ul>
    </div>

    <div id="bloco-estab" style="width:25%;float: left; color:#fff; display:none">
        <ul style="list-style:none;">
            <h5  style="color:#fff">DISPOSITIVO DE ESTABILIZAÇÃO E SEGURANÇA&nbsp&nbsp</h5>
            <li style ="padding:5px;border-bottom:1px solid #fff"><a href="estab.php?post=85">GRIPLOCK </a></li>

        </ul>
    </div>



    <!-- 3 bloco -->




<!-- aquiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii -->

    <!-- prodpediacesso -->
    <div id="bloco-prodpediacesso" style="width:25%;float: left; color:#fff; display:none">
        <ul style="list-style:none;">
            <h5  style="color:#fff">ACESSO TEMPORÁRIO</h5>
            <li  style ="padding:5px;border-bottom:1px solid #fff"><a href="linha-pediatrica.php?post=71">DUO FLOW</a></li>
        </ul>
    </div>


    <!-- prodpedilonga -->
    <div id="bloco-prodpedilonga" style="width:25%;float: left; color:#fff; display:none">
        <ul style="list-style:none;">
            <h5  style="color:#fff">LONGA PERMANÊNCIA</h5>
            <li  style ="padding:5px;border-bottom:1px solid #fff"><a href="linha-pediatrica.php?post=72">HEMO CATH SILICONE
			</a></li>
			<li  style ="padding:5px;border-bottom:1px solid #fff"><a href="linha-pediatrica.php?post=73">ASH SPLIT CATH III
			</a></li>
        </ul>
    </div>



    <!-- prodpedidiase -->
    <div id="bloco-prodpedidiase" style="width:25%;float: left; color:#fff; display:none">
        <ul style="list-style:none;">
            <h5  style="color:#fff">DIÁLISE PERITONEAL</h5>
            <li  style ="padding:5px;border-bottom:1px solid #fff"><a href="linha-pediatrica.php?post=74">PD CATH</a></li>
        </ul>
    </div>


    <!-- prodpedicvc -->
    <div id="bloco-prodpedicvc" style="width:25%;float: left; color:#fff; display:none">
        <ul style="list-style:none;">
            <h5  style="color:#fff">CVC</h5>
            <li  style ="padding:5px;border-bottom:1px solid #fff"><a href="linha-pediatrica.php?post=75">MULTI CATH</a></li>
        </ul>
    </div>


    <!-- prodpedipicc -->
    <div id="bloco-prodpedipicc" style="width:25%;float: left; color:#fff; display:none">
        <ul style="list-style:none;">
            <h5  style="color:#fff">PICC</h5>
            <li  style ="padding:5px;border-bottom:1px solid #fff"><a href="linha-pediatrica.php?post=76">VASCU-PICC II</a></li>
			<li  style ="padding:5px;border-bottom:1px solid #fff"><a href="linha-pediatrica.php?post=77">PRO-PICC</a></li>

        </ul>
    </div>


    <!-- prodpedicatim -->
    <div id="bloco-prodpedicatim" style="width:25%;float: left; color:#fff; display:none">
        <ul style="list-style:none;">
            <h5  style="color:#fff">TOTALMENTE IMPLANTÁVEL</h5>
            <li  style ="padding:5px;border-bottom:1px solid #fff"><a href="linha-pediatrica.php?post=70">PORT</a></li>
        </ul>
    </div>


    <!-- prodpedicatisemi -->
    <div id="bloco-prodpedicatisemi" style="width:25%;float: left; color:#fff; display:none">
        <ul style="list-style:none;">
            <h5  style="color:#fff">SEMI IMPLANTÁVEL</h5>
            <li  style ="padding:5px;border-bottom:1px solid #fff"><a href="linha-pediatrica.php?post=79">LT SILICONE CVC</a></li>
        </ul>
    </div>


    <!-- prodpediacess -->
    <div id="bloco-prodpediacess" style="width:25%;float: left; color:#fff; display:none">
        <ul style="list-style:none;">
            <h5  style="color:#fff">ACESSÓRIOS</h5>
            <li  style ="padding:5px;border-bottom:1px solid #fff"><a href="linha-pediatrica.php?post=53">INTRODUTOR PERCUTÂNEO</a></li>
            <li  style ="padding:5px;border-bottom:1px solid #fff"><a href="linha-pediatrica.php?post=53">FIO GUIA METÁLICO</a></li>
            <li  style ="padding:5px;border-bottom:1px solid #fff"><a href="linha-pediatrica.php?post=53">AGULHA DE PUNÇÃO</a></li>
        </ul>
    </div>

    <!-- prodpediafechado -->
    <div id="bloco-prodpedifechado" style="width:25%;float: left; color:#fff; display:none">
        <ul style="list-style:none;">
            <h5  style="color:#fff">SISTEMA FECHADO</h5>
            <li  style ="padding:5px;border-bottom:1px solid #fff"><a href="linha-pediatrica.php?post=80">TEGO</a></li>
        </ul>
    </div>

<!-- aquiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii -->





























    <!-- PRODUTOS PEDIÁTRICOS -->
    <div id="bloco-prodpedi" style="width:25%;float: left; color:#fff;display:none">
        <ul style="list-style:none;">
            <h5  style="color:#fff">LINHA PEDIÁTRICA</h5>
            <li id="btn-acessotemporario2" style ="padding:5px;border-bottom:1px solid #fff;cursor:pointer;">ACESSO TEMPORÁRIO &nbsp<i class="fa fa-angle-right" style="float:right"></i></li>
            <li id="btn-longapermanencia2" style ="padding:5px;border-bottom:1px solid #fff;cursor:pointer;">LONGA PERMANÊNCIA &nbsp<i class="fa fa-angle-right" style="float:right"></i></li>
        </ul>
    </div>






    <!-- ACESSOS VASCULARES -->
    <div id="bloco-hemodialise" style="width:25%;float: left; color:#fff;display:none">
        <ul style="list-style:none;">
            <h5  style="color:#fff">HEMODIÁLISE</h5>
            <li id="btn-acessotemporario" style ="padding:5px;border-bottom:1px solid #fff;cursor:pointer;">ACESSO TEMPORÁRIO &nbsp<i class="fa fa-angle-right" style="float:right"></i></li>
            <li id="btn-longapermanencia" style ="padding:5px;border-bottom:1px solid #fff;cursor:pointer;">LONGA PERMANÊNCIA &nbsp<i class="fa fa-angle-right" style="float:right"></i></li>
        </ul>
    </div>
    <!-- DIÁLISE PERITONEAL -->
    <div id="bloco-dialise" style="width:25%;float: left; color:#fff;  display:none">
        <ul style="list-style:none;">
            <h5  style="color:#fff">DIÁLISE PERITONEAL</h5>
            <li style ="padding:5px;border-bottom:1px solid #fff"><a href="acessos-vasculares.php?post=57">PD CATH</a></li>
        </ul>
    </div>
    <!-- TERAPIA INTENSIVA -->
    <div id="bloco-terapia" style="width:25%;float: left; color:#fff;  display:none">
        <ul style="list-style:none;">
            <h5  style="color:#fff">TERAPIA INTENSIVA</h5>
            <li id="btn-cvc" style ="padding:5px;border-bottom:1px solid #fff;cursor:pointer;">CVC &nbsp<i class="fa fa-angle-right" style="float:right"></i></li>
            <li id="btn-picc" style ="padding:5px;border-bottom:1px solid #fff;cursor:pointer;">PICC &nbsp<i class="fa fa-angle-right" style="float:right"></i></li>
        </ul>
    </div>
    <!-- ONCOLOGIA E HEMATOLOGIA -->
    <div id="bloco-hemaeonco" style="width:25%;float: left; color:#fff;  display:none">
        <ul style="list-style:none;">
            <h5  style="color:#fff">HEMATOLOGIA E ONCOLOGIA</h5>
            <li id="btn-catetersemi" style ="padding:5px;border-bottom:1px solid #fff;cursor:pointer;">CATETER SEMI IMPLANTÁVEL<i class="fa fa-angle-right" style="float:right"></i></li>
            <li id="btn-catetertotalmenteimplantavel" style ="padding:5px;border-bottom:1px solid #fff;cursor:pointer;">CATETER TOTALMENTE IMPLANTÁVEL<i class="fa fa-angle-right" style="float:right"></i></li>
            <li id="btn-agulhahuber" style ="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a href="admfluid.php?post=86">AGULHA HUBER</a></li>
        </ul>
    </div>
    <!-- ACESSÓRIOS -->
    <div id="bloco-acessorio" style="width:25%;float: left; color:#fff;  display:none">
        <ul style="list-style:none;">
            <h5  style="color:#fff">ACESSÓRIOS</h5>
            <li id="btn-" style ="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a href="acessos-vasculares.php?post=46">MICRO STICK</a></li>
        </ul>
    </div>
    <!-- ELETROCIRURGIA -->
    <!-- PLACA DE RETORNO -->
    <div id="bloco-placa" style="width:25%;float: left; color:#fff;  display:none">
        <ul style="list-style:none;">
            <h5  style="color:#fff">PLACA DE RETORNO MEGASOFT</h5>
            <li id="btn-" style ="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a href="eletrocirurgia.php?post=24">0830</a></li>
            <li id="btn-" style ="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a href="eletrocirurgia.php?post=25">0835</a></li>
            <li id="btn-" style ="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a href="eletrocirurgia.php?post=26">0840</a></li>
            <li id="btn-" style ="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a href="eletrocirurgia.php?post=27">0845</a></li>
            <li id="btn-" style ="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a href="eletrocirurgia.php?post=28">0846</a></li>
        </ul>
    </div>
    <!-- ELETRODOS -->
    <div id="bloco-eletrodos" style="width:18%;float: left; color:#fff;  display:none">

        <ul style="list-style:none;float: left">
        <h5  style="color:#fff;">ELETRODOS</h5>
            <li id="btn-eletrododescartavel" style ="padding:5px;border-bottom:1px solid #fff;cursor:pointer;">DESCARTÁVEIS &nbsp&nbsp<i class="fa fa-angle-right" style="float:right"></i></li>
            <li id="btn-eletrodoespecial" style ="padding:5px;border-bottom:1px solid #fff;cursor:pointer;">ESPECIAIS &nbsp&nbsp<i class="fa fa-angle-right" style="float:right"></i></li>
        </ul>

    </div>

    <!-- CABOS -->
    <div id="bloco-cabos" style="width:20%;float: left; color:#fff;  display:none">


        <ul style="list-style:none;float: left">
        <h5  style="color:#fff;">CABOS</h5>
            <li id="btn-cabosmega" style ="padding:5px;border-bottom:1px solid #fff;cursor:pointer;">CABOS MEGASOFT&nbsp&nbsp<i class="fa fa-angle-right" style="float:right"></i></li>
            <li id="btn-cabosdiversos" style ="padding:5px;border-bottom:1px solid #fff;cursor:pointer;">CABOS DIVERSOS&nbsp&nbsp<i class="fa fa-angle-right" style="float:right"></i></li>
        </ul>

    </div>



    <!-- BISTURI ELÉTRICO -->
    <div id="bloco-bisturi" style="width:25%;float: left; color:#fff;  display:none">
        <ul style="list-style:none;">
            <h5  style="color:#fff">BISTURI ELÉTRICO</h5>
            <li id="btn-" style ="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a href="eletrocirurgia.php?post=36">GERADOR ELETROCIRÚRGICO</a></li>
            <li id="btn-" style ="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a href="eletrocirurgia.php?post=37">ADAPTADOR MONOPOLAR</a></li>
            <li id="btn-" style ="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a href="eletrocirurgia.php?post=38">PEDAL MONOPOLAR</a></li>
            <li id="btn-" style ="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a href="eletrocirurgia.php?post=39">PEDAL BIPOLAR</a></li>
            <li id="btn-" style ="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a href="eletrocirurgia.php?post=40">CARRO DE TRANSPORTE</a></li>
        </ul>
    </div>
    <!-- CANETAS -->
    <div id="bloco-caneta" style="width:25%;float: left; color:#fff;  display:none">
        <ul style="list-style:none;">
            <h5  style="color:#fff">CANETA ELETROCIRÚRGICA</h5>
            <li id="btn-acoinox" style ="padding:5px;border-bottom:1px solid #fff;cursor:pointer;">REVESTIDAS PTFE<i class="fa fa-angle-right" style="float:right"></i></li>
            <li id="btn-ptfe" style ="padding:5px;border-bottom:1px solid #fff;cursor:pointer;">DESCARTÁVEIS EM AÇO INOX<i class="fa fa-angle-right" style="float:right"></i></li>

        </ul>
    </div>
    <!-- 4 bloco -->
    <!-- ACESSOS VASCULARES -->
    <div id="bloco-acessotemporario" style="width:25%;float: left; color:#fff;display:none">
        <ul style="list-style:none;">
            <h5  style="color:#fff">ACESSO TEMPORÁRIO</h5>
            <li style ="padding:5px;border-bottom:1px solid #fff"><a href="acessos-vasculares.php?post=50">DUO FLOW</a></li>
            <li style ="padding:5px;border-bottom:1px solid #fff"><a href="acessos-vasculares.php?post=47">TRI FLOW</a></li>
            <li style ="padding:5px;border-bottom:1px solid #fff"><a href="acessos-vasculares.php?post=48">T3</a></li>
            <li style ="padding:5px;border-bottom:1px solid #fff"><a href="acessos-vasculares.php?post=51">DUO FLOW ALTO FLUXO</a></li>
            <li style ="padding:5px;border-bottom:1px solid #fff"><a href="acessos-vasculares.php?post=55">DUO SPLIT </a></li>
            <li style ="padding:5px;border-bottom:1px solid #fff"><a href="acessos-vasculares.php?post=54">FREE FLOW</a></li>
        </ul>
    </div>
    <div id="bloco-longapermanencia" style="width:25%;float: left; color:#fff; display:none">
        <ul style="list-style:none;">
            <h5  style="color:#fff">LONGA PERMANÊNCIA</h5>
            <li  style ="padding:5px;border-bottom:1px solid #fff"><a href="acessos-vasculares.php?post=53">HEMO CATH SILICONE</a></li>
            <li  style ="padding:5px;border-bottom:1px solid #fff"><a href="acessos-vasculares.php?post=49">HEMO FLOW</a></li>
            <li  style ="padding:5px;border-bottom:1px solid #fff"><a href="acessos-vasculares.php?post=56">ASH SPLIT CATH III</a></li>

        </ul>
    </div>
    <div id="bloco-cvc" style="width:25%;float: left; color:#fff; display:none">
        <ul style="list-style:none;">
            <h5  style="color:#fff">CVC</h5>
            <li  style ="padding:5px;border-bottom:1px solid #fff"><a href="acessos-vasculares.php?post=59">MULTI CATH</a></li>
            <li  style ="padding:5px;border-bottom:1px solid #fff"><a href="acessos-vasculares.php?post=62">PRO LINE CT</a></li>
        </ul>
    </div>
    <div id="bloco-picc" style="width:25%;float: left; color:#fff; display:none">
        <ul style="list-style:none;">
            <h5  style="color:#fff">PICC</h5>
            <li  style ="padding:5px;border-bottom:1px solid #fff"><a href="acessos-vasculares.php?post=61">PICC NEONATAL</a></li>
            <li  style ="padding:5px;border-bottom:1px solid #fff"><a href="acessos-vasculares.php?post=58">VASCU PICC</a></li>
            <li  style ="padding:5px;border-bottom:1px solid #fff"><a href="acessos-vasculares.php?post=60">PRO PICC</a></li>

        </ul>
    </div>
    <div id="bloco-catetersemi" style="width:25%;float: left; color:#fff; display:none">
        <ul style="list-style:none;">
            <h5  style="color:#fff">CATETER SEMI IMPLANTÁVEL</h5>
            <li  style ="padding:5px;border-bottom:1px solid #fff"><a href="acessos-vasculares.php?post=45">LT SILICONE  CVC</a></li>
        </ul>
    </div>

    <div id="bloco-catetertotalimplantavel" style="width:25%;float: left; color:#fff; display:none">
        <ul style="list-style:none;">
            <h5  style="color:#fff">CATETER TOTALMENTE IMPLANTÁVEL</h5>
            <li style ="padding:5px;border-bottom:1px solid #fff"><a href="acessos-vasculares.php?post=43">PORT DIGNITY</a></li>
            <li  style ="padding:5px;border-bottom:1px solid #fff"><a href="acessos-vasculares.php?post=44">MINI DIGNITY</a></li>
            <li style ="padding:5px;border-bottom:1px solid #fff"><a href="acessos-vasculares.php?post=42">PORT PROFUSE</a></li>

        </ul>
    </div>

    <div id="bloco-acoinox" style="width:25%;float: left; color:#fff;display:none">
        <ul style="list-style:none;">
            <h5  style="color:#fff">PTFE</h5>
            <li style ="padding:5px;border-bottom:1px solid #fff"><a href="eletrocirurgia.php?post=1">0030</a></li>
            <li style ="padding:5px;border-bottom:1px solid #fff"><a href="eletrocirurgia.php?post=2">0035</a></li>
        </ul>
    </div>
    <div id="bloco-ptfe" style="width:25%;float: left; color:#fff;display:none">
        <ul style="list-style:none;">
            <h5  style="color:#fff">AÇO INOX</h5>
            <li style ="padding:5px;border-bottom:1px solid #fff"><a href="eletrocirurgia.php?post=4">0038</a></li>
            <li style ="padding:5px;border-bottom:1px solid #fff"><a href="eletrocirurgia.php?post=5">0039</a></li>
         </ul>
    </div>

    <div id="bloco-cabosmega" style="width:20%;float: left; color:#fff;display:none;margin-right:0px;">
        <ul style="list-style:none;">
            <h5  style="color:#fff">CABOS MEGASOFT</h5>
            <li style ="padding:5px;border-bottom:1px solid #fff"><a href="eletrocirurgia.php?post=29">M2K-02</a></li>
            <li style ="padding:5px;border-bottom:1px solid #fff"><a href="eletrocirurgia.php?post=30">M2K-05</a></li>
            <li style ="padding:5px;border-bottom:1px solid #fff"><a href="eletrocirurgia.php?post=31">M2K-06</a></li>
            <li style ="padding:5px;border-bottom:1px solid #fff"><a href="eletrocirurgia.php?post=32">M2K-09</a></li>
         </ul>
    </div>

    <div id="bloco-cabosdiversos" style="width:20%;float: left; color:#fff;display:none;margin-right:0px;">
        <ul style="list-style:none;">
            <h5  style="color:#fff">CABOS DIVERSOS</h5>
            <li style ="padding:5px;border-bottom:1px solid #fff"><a href="eletrocirurgia.php?post=33">0875</a></li>
            <li style ="padding:5px;border-bottom:1px solid #fff"><a href="eletrocirurgia.php?post=34">4000</a></li>
            <li style ="padding:5px;border-bottom:1px solid #fff"><a href="eletrocirurgia.php?post=35">4005</a></li>
         </ul>
    </div>


    <div id="bloco-eletrododescartavel" style="width:25%;float: left; color:#fff;display:none;margin-right:0px;">
        <ul style="list-style:none;float: left">
<h5  style="color:#fff;">ELETRODOS DESCARTÁVEIS</h5>
            <li id="btn-" style ="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a href="eletrocirurgia.php?post=14">0009</a></li>
            <li id="btn-" style ="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a href="eletrocirurgia.php?post=6">0012</a></li>
            <li id="btn-" style ="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a href="eletrocirurgia.php?post=66">0012M</a></li>
            <li id="btn-" style ="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a href="eletrocirurgia.php?post=7">0012AM</a></li>
            <li id="btn-" style ="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a href="eletrocirurgia.php?post=67">0013</a></li>
            <li id="btn-" style ="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a href="eletrocirurgia.php?post=8">0014</a></li>
            <li id="btn-" style ="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a href="eletrocirurgia.php?post=9">0014A</a></li>
            <li id="btn-" style ="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a href="eletrocirurgia.php?post=10">0014M</a></li>
            <li id="btn-" style ="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a href="eletrocirurgia.php?post=68">0015</a></li>
            <li id="btn-" style ="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a href="eletrocirurgia.php?post=13">0016</a></li>
            <li id="btn-" style ="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a href="eletrocirurgia.php?post=12">0016A</a></li>
            <li id="btn-" style ="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a href="eletrocirurgia.php?post=69">0016AM</a></li>
            <li id="btn-" style ="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a href="eletrocirurgia.php?post=16">0028</a></li>
            <li id="btn-" style ="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a href="eletrocirurgia.php?post=17">0028M</a></li>
            <li id="btn-" style ="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a href="eletrocirurgia.php?post=18">0029M</a></li>
            <li id="btn-" style ="padding:5px;border-bottom:1px solid #fff;cursor:pointer;"><a href="eletrocirurgia.php?post=15">0121</a></li>
        </ul>

    </div>

    <div id="bloco-eletrodoespecial" style="width:25%;float: left; color:#fff;display:none;margin-right:0px;">
        <ul style="list-style:none;">
            <h5  style="color:#fff">ELETRODOS ESPECIAIS</h5>
            <li style ="padding:5px;border-bottom:1px solid #fff"><a href="eletrocirurgia.php?post=19">0118</a></li>
            <li style ="padding:5px;border-bottom:1px solid #fff"><a href="eletrocirurgia.php?post=20">0118A</a></li>
            <li style ="padding:5px;border-bottom:1px solid #fff"><a href="eletrocirurgia.php?post=21">0119A</a></li>
            <li style ="padding:5px;border-bottom:1px solid #fff"><a href="eletrocirurgia.php?post=22">0120</a></li>
            <li style ="padding:5px;border-bottom:1px solid #fff"><a href="eletrocirurgia.php?post=23">ACE12A</a></li>

         </ul>
    </div>







</div>


<div id="container-catalogo">
    <div style="width:25%;float: left; color:#fff;">
        <!-- 1 bloco -->
        <ul style="list-style:none;">
          <h5  style="color:#fff">CATÁLOGOS</h5>

         <li id="btn-sistema-fechado" style ="padding:5px;border-bottom:1px solid #fff; cursor:pointer;"><a target="_blank" href="pdf/hemodialise.pdf">HEMODIÁLISE E DIÁLISE PERITONEAL</a></li>
         <li id="btn-sistema-fechado" style ="padding:5px;border-bottom:1px solid #fff; cursor:pointer;"><a target="_blank" href="pdf/tego.pdf">TEGO</a></li>
         <li id="btn-sistema-fechado" style ="padding:5px;border-bottom:1px solid #fff; cursor:pointer;"><a target="_blank" href="pdf/roo-defender.pdf">ROO DEFENDER</a></li>
         <li id="btn-sistema-fechado" style ="padding:5px;border-bottom:1px solid #fff; cursor:pointer;"><a target="_blank" href="pdf/griplock.pdf">GRIPLOCK</a></li>
         <li id="btn-sistema-fechado" style ="padding:5px;border-bottom:1px solid #fff; cursor:pointer;"><a target="_blank" href="pdf/cvc.pdf">CATETER VENOSO CENTRAL E PERIFÉRICO</a></li>
         <li id="btn-sistema-fechado" style ="padding:5px;border-bottom:1px solid #fff; cursor:pointer;"><a target="_blank" href="pdf/hematologia.pdf">HEMATOLOGIA E ONCOLOGIA</a></li>
         <li id="btn-sistema-fechado" style ="padding:5px;border-bottom:1px solid #fff; cursor:pointer;"><a target="_blank" href="pdf/pediatrico.pdf">LINHA PEDIÁTRICA</a></li>
         <li id="btn-sistema-fechado" style ="padding:5px;border-bottom:1px solid #fff; cursor:pointer;"><a target="_blank" href="pdf/halyard_homepump.pdf">INFUSOR ELASTOMÉRICO</a></li>
         <li id="btn-sistema-fechado" style ="padding:5px;border-bottom:1px solid #fff; cursor:pointer;"><a target="_blank" href="pdf/agulha_huber.pdf">AGULHA HUBER</a></li>



      </ul>
  </div>
</div>

