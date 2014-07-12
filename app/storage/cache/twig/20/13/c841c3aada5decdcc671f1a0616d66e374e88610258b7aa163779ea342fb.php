<?php

/* templates/header.html.twig */
class __TwigTemplate_2013c841c3aada5decdcc671f1a0616d66e374e88610258b7aa163779ea342fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html >
<html lang=\"en\" ng-app=\"Home\" ng-controller=\"HomeController\">
<head>

\t<!-- Meta data -->
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
\t<meta itemprop=\"name\" content=\"\">
  \t<meta itemprop=\"description\" content=\"\">
  \t<meta name=\"keywords\" content=\"mobile, security, backup, open source\">
  \t<meta name=\"title\" content=\"\" >
\t<meta name=\"subject\" content=\"\" >
\t<meta name=\"robots\" content=\"index,follow\" >
\t<meta content=\"Ceeq\" name=\"author\">
\t<meta content=\"text ; still image\" name=\"type\">
\t<meta content=\"text/html\" name=\"format\">
\t<meta content=\"\" name=\"identifier\">
\t<meta content=\"en-GB\" name=\"language\">
\t<meta content=\"World\" name=\"coverage\">
\t<meta content=\"\" name=\"Owner\">
\t<meta content=\"ATW Labs, India\" name=\"copyright\">
\t<base href=\"/ceeq/\">

\t<title ng-bind=\"title\">Ceeq Mobile Application - Device Security &amp; Backup</title>

\t<!-- Styles and fonts -->

\t<link rel=\"stylesheet\" href=\"http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->site("/public/css/home.css"), "html", null, true);
        echo "\" >
\t<link href='http://fonts.googleapis.com/css?family=Comfortaa|Roboto' rel='stylesheet' type='text/css'>

\t<link rel=\"icon\" type=\"image/png\" href=\"\">
\t<script type=\"text/javascript\">
    \t(function () {
      \t\tvar po = document.createElement('script');
      \t\tpo.type = 'text/javascript';
      \t\tpo.async = true;
      \t\tpo.src = 'https://plus.google.com/js/client:plusone.js?onload=start';
      \t\tvar s = document.getElementsByTagName('script')[0];
      \t\ts.parentNode.insertBefore(po, s);
    \t})();
  \t</script>
\t</head>

\t<!-- Content Body -->
\t<body >
\t<noscript>This is embarassing ! Javascript is OFF !</noscript>

\t<!-- content wrapper -->
    <div class=\"container-fluid wrapper\">

\t\t<!-- Header bar -->
\t\t<nav class=\"navbar navbar-default nav\" role=\"navigation\">

\t\t\t<!-- Logo -->
\t\t\t<div class=\"navbar-left\">
\t\t\t\t<a class=\"navbar-brand\" href=\"#\">ceeq</a>
\t\t\t</div>
\t\t\t<!-- User account -->
\t\t\t<div class=\"account-wp hidden navbar-right\">
                <ul>
                    <li class=\"name\"></li>
                     <li>
                        <input type=\"submit\" value=\"Logout\" />
                    </li>
                </ul>
\t\t\t</div>

\t\t\t<!-- User login -->
\t\t\t<div class=\"plus navbar-right\">
\t\t\t\t<div id=\"signinButton \">
\t\t\t\t  \t<span class=\"g-signin\"
\t\t\t\t    \tdata-scope=\"https://www.googleapis.com/auth/plus.login\"
\t\t\t\t    \tdata-clientid=\"YOUR_CLIENT_ID\"
\t\t\t\t    \tdata-redirecturi=\"postmessage\"
\t\t\t\t    \tdata-accesstype=\"offline\"
\t\t\t\t    \tdata-cookiepolicy=\"single_host_origin\"
\t\t\t\t    \tdata-callback=\"signInCallback\">
\t\t\t\t  \t</span>
\t\t\t\t</div>
\t\t\t\t<div id=\"result\"></div>
\t\t\t</div>
\t\t</nav>
";
    }

    public function getTemplateName()
    {
        return "templates/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 28,  19 => 1,);
    }
}
