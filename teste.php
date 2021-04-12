
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
        <meta name='twitter:card' content='summary'/>
        <meta name='twitter:domain' content='http://www.medcorpnet.com.br'/>
        <meta name='twitter:image:src' content='http://www.medcorpnet.com.br/images/logo.png'/>
        <link rel='canonical' href='http://www.medcorpnet.com.br'/>
        <meta itemprop='name' content='Medcorp' />
        <meta itemprop='description' content='Produtos Hospitalares' />
        <meta itemprop='image' content='http://www.medcorpnet.com.br/images/logo.png' />
        <meta itemprop='url' content='http://www.medcorpnet.com.br' /><!-- <!DOCTYPE html>
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

<section id="featured" class="bg">
    <!-- start slider -->


    <!-- start slider -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
    <!-- Slider -->
        <div id="main-slider" class="main-slider flexslider">
            <ul class="slides">
              <li>
                <img src="img/varios/home1.jpg" alt="" />
<!--                 <div class="flex-caption">
                    <h3>Modern Design</h3>
                    <p>Duis fermentum auctor ligula ac malesuada. Mauris et metus odio, in pulvinar urna</p>
                    <a href="#" class="btn btn-theme">Learn More</a>
                </div> -->
              </li>
              <li>
              <img src="img/varios/home2.jpg" alt="" />
<!--                <div class="flex-caption">
                    <h3>Fully Responsive</h3>
                    <p>Sodales neque vitae justo sollicitudin aliquet sit amet diam curabitur sed fermentum.</p>
                    <a href="#" class="btn btn-theme">Learn More</a>
                </div> -->
              </li>
              <li>
              <img src="img/varios/home3.jpg" alt="" />
<!--                 <div class="flex-caption">
                    <h3>Clean & Fast</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit donec mer lacinia.</p>
                    <a href="#" class="btn btn-theme">Learn More</a>
                </div> -->
              </li>
            </ul>
        </div>
    <!-- end slider -->
            </div>
        </div>
    </div>


    </section>
	<!-- section class="callaction">
	<div class="container">
		<div class="row">
							<div class="col-lg-8">
								<div class="cta-text">
									<h2>Awesome site template <span>corporate</span> business</h2>
									<p> Etiam adipiscing, justo quis feugiat.Suspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed interdum</p>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="cta-btn">
									<a href="#" class="btn btn-theme btn-lg">Grab it now <i class="fa fa-angle-right"></i></a>
								</div>
							</div>
		</div>
	</div>
	</section> -->

	<section id="content" style="margin-top: -30px;">
		<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="text-center"  style="margin-top: -30px;">
					<h2 style="color:#1B365D">Bem-vindo a MEDCORP</span></h2>
					<p style="font-size:1.5em; line-height: 40px;">Há mais de 25 anos oferecendo para o mercado, produtos
de alta performance e tecnologia, proporcionando maior conforto para o paciente, segurança para o
profissional de saúde e qualidade no tratamento.
</p>
				</div>
			</div>
		</div>
		</div>

		<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-sm-4 col-md-4 col-lg-4">
						<div class="box">
							<div class="aligncenter">
								<div class="icon">
								<i class="fa fa-exchange fa-5x"></i>
								</div>
								<h4>AGILIDADE</h4> <p>Entrega em todo país, de acordo com a necessidade de cada Cliente.</p>
							</div>
						</div>
					</div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
						<div class="box">
							<div class="aligncenter">
								<div class="icon">
								<i class="fa fa-thumbs-up fa-5x"></i>
								</div>
								<h4>CONFIANÇA</h4><p>São 25 anos oferecendo produtos diferenciados para atender todas as expectativas de nossos Clientes.
							</div>
						</div>
					</div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
						<div class="box">
							<div class="aligncenter">
								<div class="icon">
								<i class="fa fa-users fa-5x"></i>
								</div>
								<h4>EQUIPE</h4><p>Profissionais com larga experiência no mercado. <br> <br></h4>
							</div>
						</div>
					</div>

                    <div class="col-sm-4 col-md-4 col-lg-4">
						<div class="box">
							<div class="aligncenter">
								<div class="icon">
								<i class="fa fa-check fa-5x"></i>
								</div>
								<h4>PRESENÇA</h4><p> Participação nos melhores eventos, em busca de troca de conhecimento e constante atualização de cada especialidade.</h4>
							</div>
						</div>
					</div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="box">
                            <div class="aligncenter">
                                <div class="icon">
                                <i class="fa fa-lock fa-5x"></i>
                                </div>
                                <h4>SEGURANÇA</h4><p>  Atendimento personalizado por nossa equipe de vendas, com suporte de nossos enfermeiros no pós venda.</p></h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="box">
                            <div class="aligncenter">
                                <div class="icon">
                                <i class="fa fa-star fa-5x" ></i>
                                </div>
                                <h4>VARIEDADE</h4><p> Mais de 1.000 códigos de produtos cadastrados junto a ANVISA, para atender cada tratamento de forma personalizada.</p></h4>
                            </div>
                        </div>
                    </div>




				</div>
			</div>
		</div>
		</div>

		<!-- divider -->
		<div class="container">
		<div class="row">
			<div class="col-lg-12" style="text-align: center">

                   <hr class="hr_footer">
                   <ul class="lista_logos_rodape">
                    <li><a href="http://www.medcompnet.com/" target="_blank"><img src="img/varios/medcomp.png" alt="logo parceiros medcomp" title="Medcomp" class="logo_rodape"></a></li>
                    <li><a href="http://pt.icumed.com/"  target="_blank"  target="_blank"><img src="img/varios/icumedical.png" alt="logo parceiros icumedical" title="Icumedical" class="logo_rodape"></a></li>
                    <li><a href="https://www.tidiproducts.com/"  target="_blank"><img style="width:140px " src="img/varios/tidi.png" alt="logo parceiros tidiproducts" title="Tidi Products" class="logo_rodape"></a></li>
                    <li><a href="http://https://avanos.com//"  target="_blank"><img src="img/varios/avanos.png" alt="logo parceiros avanos" title="avanos" class="logo_rodape"></a></li>
                

                </ul>



		<!--		<div class="solidline">
				</div> -->
			</div>
		</div>
		</div>
		<!-- end divider -->


		<!-- <div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-sm-6 col-lg-6">
						<h4>About our company</h4>
						<p><strong>Meliore inciderint qui ne. Suas cotidieque vel ut lobortis reformidans duo</strong></p>
						<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae odit iste exercitationem praesentium deleniti nostrum laborum rem id nihil tempora. Adipisci ea commodi unde nam placeat cupiditate quasi a ducimus rem consequuntur ex eligendi minima voluptatem assumenda voluptas quidem sit maiores odio velit voluptate
						</p>
						<p>
						Mel explicari adipiscing consectetuer no, no mel apeirian scripserit repudiandae, ad assum mundi scribentur eam. Graecis offendit phaedrum eu his, eius ferri quidam eos ad, quis delenit vel ei. Alia modus facete te eos, eu tation appellantur per
						</p>
					</div>
					<div class="col-sm-6 col-lg-6">
						<h4>Projects</h4>
						<div class="progress">
						  <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
							40% Complete (success)
						  </div>
						</div>
						<div class="progress">
						  <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
							20% Complete
						  </div>
						</div>
						<div class="progress">
						  <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
							60% Complete (warning)
						  </div>
						</div>
						<div class="progress">
						  <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
							80% Complete
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
 -->



		<!-- divider -->
		<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="blankline">
				</div>
			</div>
		</div>
		</div>
		<!-- end divider -->




	<!-- parallax  -->
<!--	<div id="parallax1" class="parallax text-light text-center marginbot50" data-stellar-background-ratio="0.5">
           <div class="container">
	   <!-- 			<div class="row appear stats">
				<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="align-center  txt-shadow">
							<div class="icon">
								<i class="fa fa-clock-o fa-5x"></i>
							</div>
						<strong id="counter-coffee" class="number">1232</strong><br />
						<span class="text">Minutes</span>

<h3 class="align-center ">Nossa solidez vem de parcerias com as melhores fabricantes internacionais de produtos médico-hospitalares, nossa qualidade de atendimento e entrega de produtos para nossos clientes, sejam eles públicos ou privados.</h3>
                        </div>
					</div>-->
				<!-- 	<div class="col-xs-6 col-sm-3 col-md-3">
						<div class="align-center color-white txt-shadow">
							<div class="icon">
								<i class="fa fa-music fa-5x"></i>
							</div>
						<strong id="counter-music" class="number">345</strong><br />
						<span class="text">MP3 Songs</span>
						</div>
					</div>
					<div class="col-xs-6 col-sm-3 col-md-3">
						<div class="align-center color-white txt-shadow">
							<div class="icon">
								<i class="fa fa-coffee fa-5x"></i>
							</div>
						<strong id="counter-clock" class="number">501</strong><br />
						<span class="text">Coffee Cups</span>
						</div>
					</div>
					<div class="col-xs-6 col-sm-3 col-md-3">
						<div class="align-center color-white txt-shadow">
							<div class="icon">
								<i class="fa fa-trophy fa-5x"></i>
							</div>
						<strong id="counter-heart" class="number">378</strong><br />
						<span class="text">Awwards</span>
						</div>
					</div>
				</div>
            </div>
	</div> -->

	<!-- 	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-sm-6 col-md-6">
					<h4>Testimonials</h4>
						<div class="testimonialslide clearfix flexslider">
							<ul class="slides">
								<li><blockquote>
								Usu ei porro deleniti similique, per no consetetur necessitatibus. Ut sed augue docendi alienum, ex oblique scaevola inciderint pri, unum movet cu cum. Et cum impedit epicuri
									</blockquote>
									<h4>Daniel Dan <span>&#8213; MA System</span></h4>
								</li>
								<li><blockquote>
								Usu ei porro deleniti similique, per no consetetur necessitatibus. Ut sed augue docendi alienum, ex oblique scaevola inciderint pri, unum movet cu cum. Et cum impedit epicuri
									</blockquote>
									<h4>Mark Wellbeck <span>&#8213; AC Software </span></h4>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6 col-lg-6">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#one" data-toggle="tab"><i class="icon-briefcase"></i> One</a></li>
							<li><a href="#two" data-toggle="tab">Two</a></li>
							<li><a href="#three" data-toggle="tab">Three</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="one">
								<p><img src="img/dummy1.jpg" class="pull-left" alt="" />
									<strong>Augue iriure</strong> dolorum per ex, ne iisque ornatus veritus duo. Ex nobis integre lucilius sit, pri ea falli ludus appareat. Eum quodsi fuisset id, nostro patrioque qui id. Nominati eloquentiam in mea.
								</p>
								<p>
									 No eum sanctus vituperata reformidans, dicant abhorreant ut pro. Duo id enim iisque praesent, amet intellegat per et, solet referrentur eum et.
								</p>
							</div>
							<div class="tab-pane" id="two">
								<p><img src="img/dummy1.jpg" class="pull-right" alt="" />
									 Tale dolor mea ex, te enim assum suscipit cum, vix aliquid omittantur in. Duo eu cibo dolorum menandri, nam sumo dicit admodum ei. Ne mazim commune honestatis cum, mentitum phaedrum sit et.
								</p>
								<p>Lorem ipsum dolor sit amet, vel laoreet pertinacia at, nam ea ornatus ocurreret gubergren. Per facete graecis eu.</p>
							</div>
							<div class="tab-pane" id="three">
								<p>Lorem ipsum dolor sit amet, vel laoreet pertinacia at, nam ea ornatus ocurreret gubergren. Per facete graecis eu. </p>
								<p>
									 Cu cum commodo regione definiebas. Cum ea eros laboramus, audire deseruisse his at, munere aeterno ut quo. Et ius doming causae philosophia, vitae bonorum intellegat usu cu.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div> -->

		<!-- divider
		<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>

<!-- SnapWidget
<script src="https://snapwidget.com/js/snapwidget.js"></script>
<iframe src="https://snapwidget.com/embed/471065" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; "></iframe>
			</div>
		</div>
		</div>-->
		<!-- end divider -->

		<!-- Portfolio Projects -->
	<!-- 	<div class="container marginbot50">
		<div class="row">
			<div class="col-lg-12">
				<h4 class="heading">Recent Works</h4>

				<div id="filters-container" class="cbp-l-filters-button">
					<div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All<div class="cbp-filter-counter"></div></div>
					<div data-filter=".identity" class="cbp-filter-item">Identity<div class="cbp-filter-counter"></div></div>
					<div data-filter=".web-design" class="cbp-filter-item">Web Design<div class="cbp-filter-counter"></div></div>
					<div data-filter=".graphic" class="cbp-filter-item">Graphic<div class="cbp-filter-counter"></div></div>
					<div data-filter=".logo" class="cbp-filter-item">Logo<div class="cbp-filter-counter"></div></div>
				</div>


				<div id="grid-container" class="cbp-l-grid-projects">
					<ul>
						<li class="cbp-item graphic">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
									<img src="img/works/1.jpg" alt="" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">
											<a href="img/works/1big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Dashboard<br>by Paul Flavius Nechita">view larger</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">Dashboard</div>
							<div class="cbp-l-grid-projects-desc">Web Design / Graphic</div>
						</li>
						<li class="cbp-item web-design logo">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
									<img src="img/works/2.jpg" alt="" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">
											<a href="img/works/2big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="World Clock Widget<br>by Paul Flavius Nechita">view larger</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">World Clock Widget</div>
							<div class="cbp-l-grid-projects-desc">Logo / Web Design</div>
						</li>
						<li class="cbp-item graphic logo">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
									<img src="img/works/3.jpg" alt="" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">

											<a href="http://vimeo.com/14912890" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="To-Do Dashboard<br>by Tiberiu Neamu">view video</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">To-Do Dashboard</div>
							<div class="cbp-l-grid-projects-desc">Graphic / Logo</div>
						</li>
						<li class="cbp-item web-design graphic">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
									<img src="img/works/4.jpg" alt="" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">

											<a href="img/works/4big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Events and  More<br>by Tiberiu Neamu">view larger</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">Events and More</div>
							<div class="cbp-l-grid-projects-desc">Web Design / Graphic</div>
						</li>
						<li class="cbp-item identity web-design">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
									<img src="img/works/5.jpg" alt="" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">

											<a href="img/works/5big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="WhereTO App<br>by Tiberiu Neamu">view larger</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">WhereTO App</div>
							<div class="cbp-l-grid-projects-desc">Web Design / Identity</div>
						</li>
						<li class="cbp-item identity web-design">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
									<img src="img/works/6.jpg" alt="" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">

											<a href="img/works/6big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Ski * Buddy<br>by Tiberiu Neamu">view larger</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">Ski * Buddy</div>
							<div class="cbp-l-grid-projects-desc">Identity / Web Design</div>
						</li>
						<li class="cbp-item graphic logo">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
									<img src="img/works/7.jpg" alt="" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">

											<a href="img/works/7big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Seemple* Music for iPad<br>by Tiberiu Neamu">view larger</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">Seemple* Music for iPad</div>
							<div class="cbp-l-grid-projects-desc">Graphic / Logo</div>
						</li>
						<li class="cbp-item graphic logo">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
									<img src="img/works/8.jpg" alt="" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">

											<a href="img/works/8big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Seemple* Music for iPad<br>by Tiberiu Neamu">view larger</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">Seemple* Music for iPad</div>
							<div class="cbp-l-grid-projects-desc">Graphic / Logo</div>
						</li>
					</ul>
				</div>

				<div class="cbp-l-loadMore-button">
					<a href="ajax/loadMore.html" class="cbp-l-loadMore-button-link">LOAD MORE</a>
				</div>

			</div>
		</div>
		</div> -->


		<!-- divider -->
		<div class="container">
		<div class="row">


				<div class="solidline">
				</div>
			</div>
		</div>
		</div>
		<!-- end divider -->

		<!-- clients -->
<!-- 		<div class="container">
				<div class="row">
								<div class="col-xs-6 col-md-2 aligncenter client">
									<img alt="logo" src="img/clients/logo1.png" class="img-responsive" />
								</div>

								<div class="col-xs-6 col-md-2 aligncenter client">
									<img alt="logo" src="img/clients/logo2.png" class="img-responsive" />
								</div>

								<div class="col-xs-6 col-md-2 aligncenter client">
									<img alt="logo" src="img/clients/logo3.png" class="img-responsive" />
								</div>

								<div class="col-xs-6 col-md-2 aligncenter client">
									<img alt="logo" src="img/clients/logo4.png" class="img-responsive" />
								</div>

								<div class="col-xs-6 col-md-2 aligncenter client">
									<img alt="logo" src="img/clients/logo5.png" class="img-responsive" />
								</div>
								<div class="col-xs-6 col-md-2 aligncenter client">
									<img alt="logo" src="img/clients/logo6.png" class="img-responsive" />
								</div>

				</div>
		</div> -->

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
                            <a class="facebook social-link icon-rede" data-placement="top" data-toggle="tooltip" href="https://www.facebook.com/medcorphospitalarbr" title="Facebook" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
                            <!--
                            <a class="linkedin social-link icon-rede" data-placement="top" data-toggle="tooltip" href="#" title="LinkedIn"><i class="fa fa-linkedin fa-2x"></i></a>

                            <a class="dribbble social-link icon-rede" data-placement="top" data-toggle="tooltip" href="#" title="Youtube"><i class="fa fa-youtube fa-2x"></i></a>-->
                            <a class="pinterest social-link icon-rede" data-placement="top" data-toggle="tooltip" href="https://www.instagram.com/medcorphospitalarbr/" title="Instagram" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
                            </div>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <p class="texto_footer">
                        <span class="b_logo_footer">Medcorp Hospitalar Ltda.<br></span>
                        <b>ESCRITÓRIO:</b> <br>Rua Arminda, 93 - 3º andar - CEP: 04545 100 Vila Olímpia - São Paulo/SP - Brasil
                        <br>Fone/Fax: +55 11-3849-8992 <br> <br>
                        <b>MATRIZ/CENTRO DE DISTRIBUIÇÃO:</b><br> Av. Fagundes de Oliveira, 538 - Galpão A5 - CEP 09950-300 - Piraporinha Diadema/SP - Brasil <br>Tel.: +5511 4067-5011
                        </p>
                    </div>

        </div>
    </div>
</div>
</footer>




<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.min.js"></script>
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


</body>
</html>

