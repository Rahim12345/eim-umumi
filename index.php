<?php
require 'config.php';
require 'header.php';

if (!isset($_GET['menu']) || empty($_GET['menu']))
{
    require 'home.php';
}
elseif ($_GET['menu'] == 'resmi-senedler')
{
    require 'resmi-senedler.php';
}
elseif ($_GET['menu'] == 'fondun-nizamnamesi')
{
    require 'fondun-nizamnamesi.php';
}
elseif ($_GET['menu'] == 'himayedarlar-surasi')
{
    require 'himayedarlar-surasi.php';
}
elseif ($_GET['menu'] == 'icraci-direksiya')
{
    require 'icraci-direksiya.php';
}
elseif ($_GET['menu'] == 'yaranma-tarixi')
{
    require 'yaranma-tarixi.php';
}
elseif ($_GET['menu'] == 'esas-istiqametler')
{
    require 'esas-istiqametler.php';
}
elseif ($_GET['menu'] == 'fondun-maliyyelesmesi')
{
    require 'fondun-maliyyelesmesi.php';
}
elseif ($_GET['menu'] == 'beynelxalq-elaqeler')
{
    require 'beynelxalq-elaqeler.php';
}
elseif ($_GET['menu'] == 'dovlet-proqraminda-istirak')
{
    require 'dovlet-proqraminda-istirak.php';
}
elseif ($_GET['menu'] == 'sazisler')
{
    require 'sazisler.php';
}
elseif ($_GET['menu'] == 'beynelxalq-qrantlar')
{
    require 'beynelxalq-qrantlar.php';
}
elseif ($_GET['menu'] == 'fondun-tedbirleri')
{
    require 'fondun-tedbirleri.php';
}
elseif ($_GET['menu'] == 'meslehet-seminarlari')
{
    require 'meslehet-seminarlari.php';
}
elseif ($_GET['menu'] == 'fond-kivde')
{
    require 'fond-kivde.php';
}
elseif ($_GET['menu'] == 'foto-ve-video-arxiv')
{
    require 'foto-ve-video-arxiv.php';
}
elseif ($_GET['menu'] == 'press-relizler')
{
    require 'press-relizler.php';
}
elseif ($_GET['menu'] == 'media-kit')
{
    require 'media-kit.php';
}
elseif ($_GET['menu'] == 'video-carx')
{
    require 'video-carx.php';
}
elseif ($_GET['menu'] == 'azerbaycanin-elmi-potensiali')
{
    require 'azerbaycanin-elmi-potensiali.php';
}
elseif ($_GET['menu'] == 'azerbaycanda-elmi-qurumlar')
{
    require 'azerbaycanda-elmi-qurumlar.php';
}
elseif ($_GET['menu'] == 'analitik-informasiya')
{
    require 'analitik-informasiya.php';
}
elseif ($_GET['menu'] == 'elmi-yenilikler')
{
    require 'elmi-yenilikler.php';
}
elseif ($_GET['menu'] == 'bas-tutacaq-konfranslar')
{
    require 'bas-tutacaq-konfranslar.php';
}
elseif ($_GET['menu'] == 'elmi-jurnallar')
{
    require 'elmi-jurnallar.php';
}
elseif ($_GET['menu'] == 'elmin-tebligi')
{
    require 'elmin-tebligi.php';
}
elseif ($_GET['menu'] == 'azerbaycanin-dahi-alimleri')
{
    require 'azerbaycanin-dahi-alimleri.php';
}
elseif ($_GET['menu'] == 'diasporadaki-alimler')
{
    require 'diasporadaki-alimler.php';
}
elseif ($_GET['menu'] == 'diasporadaki-alimler')
{
    require 'diasporadaki-alimler.php';
}
elseif ($_GET['menu'] == 'faydali-linkler')
{
    require 'faydali-linkler.php';
}
elseif ($_GET['menu'] == 'xeberler')
{
    require 'xeberler.php';
}
elseif ($_GET['menu'] == 'elanlar')
{
    require 'elanlar.php';
}
elseif ($_GET['menu'] == 'unvan')
{
    require 'unvan.php';
}
elseif ($_GET['menu'] == 'fond-ile-elaqe-vasiteleri')
{
    require 'fond-ile-elaqe-vasiteleri.php';
}
elseif ($_GET['menu'] == 'qebul-gunleri')
{
    require 'qebul-gunleri.php';
}
elseif ($_GET['menu'] == 'elektron-muraciet')
{
    require 'elektron-muraciet.php';
}

require 'footer.php';