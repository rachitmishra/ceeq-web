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
<html ng-app=\"Home\" ng-controller=\"HomeController\">
<head>

\t<!-- Meta data -->
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
\t<meta itemprop=\"name\" content=\"\">
  <meta itemprop=\"description\" content=\"\">
  <meta name=\"keywords\" content=\"mobile, security, backup, open source\">
  <meta name=\"title\" content=\"\" >
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
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->site("/public/css/home.css"), "html", null, true);
        echo "\" >
\t<link href='http://fonts.googleapis.com/css?family=Comfortaa|Roboto' rel='stylesheet' type='text/css'>

\t<link rel=\"icon\" type=\"image/png\" href=\"\">
\t</head>

\t<!-- Content Body -->
\t<body >
\t<noscript>This is embarrasing ! Javascript is OFF !</noscript>

\t<!--shadow panel -->
\t<div class=\"ajaxshadow\"></div>

\t<!-- ajax container -->
    <div class=\"ajax-wp\"></div>

\t<!-- content wrapper -->
    <div class=\"base-wp\">

\t\t<!-- Header bar -->
\t\t<header>

\t\t\t<!-- Logo -->
\t\t\t<span class=\"logo\">
\t\t\t\t<a href=\"#\">ceeq</a>
\t\t\t\t</span>

\t\t\t<!-- User account -->
\t\t\t<div class=\"account-wp right hide\">
                <ul>
                    <li class=\"name\"></li>
                     <li>
                        <input type=\"submit\" value=\"Logout\" />
                    </li>
                </ul>
\t\t\t\t</div>

\t\t\t<!-- User login -->
\t\t\t<div class=\"login-wp right\" ng-controller=\"LoginController\" >
\t\t\t\t<form ng-submit=\"login(user)\">
\t\t\t\t<ul>
\t\t\t\t\t<li>
\t\t\t\t\t\t<input type=\"text\" name=\"username\" placeholder=\"Username\"
\t\t\t\t\t\t\ttitle=\"Enter your Mobile Number.\" ng-model=\"user.username\" required/>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<input type=\"password\" name=\"password\" placeholder=\"PIN\" title=\"Enter your PIN.\" ng-model=\"user.password\" required/>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<input type=\"hidden\" name=\"csrf\" value=\"";
        // line 75
        if (isset($context["csrf_token"])) { $_csrf_token_ = $context["csrf_token"]; } else { $_csrf_token_ = null; }
        echo twig_escape_filter($this->env, $_csrf_token_, "html", null, true);
        echo "\" required/>
\t\t\t\t\t\t<input type=\"submit\" value=\"Sign In\" />
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#/password\">?</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t</form>
\t\t\t\t</div>

\t\t\t</header>
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
        return array (  98 => 75,  46 => 26,  27 => 6,  21 => 2,  19 => 1,);
    }
}
