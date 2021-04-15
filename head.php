<?php
error_reporting(0);
    include 'config/configs.php';
    //BUSCA
    $informacoes_site = mysqli_query($con,'SELECT * FROM informacoes_site');
    $info_site = mysqli_fetch_assoc($informacoes_site);

    echo"
    <!DOCTYPE html>
    <html lang='pt-br' itemscope itemtype='https://schema.org/Article'>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <!-- FAVICON <link rel='shortcut icon' href='images/favicon.png' type='image/x-icon'>-->
                    <link rel='shortcut icon' href='img/favicon.ico' />
       ";


        //CSS
        include('estrutura/css.php');
        echo"
        <!-- METAS GENERICAS -->
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
        <meta http-equiv='content-language' content='pt-br'>
        <meta name='rating' content='General'>
        <meta name='author' content='{$info_site[autor_site]}'>
        <meta name='robots' content='index fallow'>
        <meta property='og:locale' content='pt_BR' />
        <meta property='og:type' content='article' />
        <meta property='og:site_name' content='{$info_site[nome_site]}' />
        <meta property='og:image' content='{$info_site[url_site]}/images/logo.png' />
        <meta name='twitter:card' content='summary'/>
        <meta name='twitter:domain' content='{$info_site[url_site]}'/>
        <meta name='twitter:image:src' content='{$info_site[url_site]}/images/logo.png'/>
        <link rel='canonical' href='{$info_site[url_site]}'/>
        <meta itemprop='name' content='{$info_site[nome_site]}' />
        <meta itemprop='description' content='{$info_site[descricao_site]}' />
        <meta itemprop='image' content='{$info_site[url_site]}/images/logo.png' />
        <meta itemprop='url' content='{$info_site[url_site]}' />";
