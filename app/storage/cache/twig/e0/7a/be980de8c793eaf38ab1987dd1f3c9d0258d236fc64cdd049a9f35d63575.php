<?php

/* home.html */
class __TwigTemplate_e07abe980de8c793eaf38ab1987dd1f3c9d0258d236fc64cdd049a9f35d63575 extends Twig_Template
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
<html ng-app=\"home\">
<head>
    
    <!-- Meta data -->
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta itemprop=\"name\" content=\"\">
    <meta itemprop=\"description\" content=\"\">
    <meta name=\"keywords\" content=\"mobile, security, backup, open source\">
    <meta name=\"title\" content=\"\" >
    <meta name=\"subject\" content=\"\" >
    <meta name=\"robots\" content=\"index,follow\" >
    <meta content=\"Ceeq\" name=\"author\">
    <meta content=\"text ; still image\" name=\"type\">
    <meta content=\"text/html\" name=\"format\">
    <meta content=\"\" name=\"identifier\">
    <meta content=\"en-GB\" name=\"language\">
    <meta content=\"World\" name=\"coverage\">
    <meta content=\"\" name=\"Owner\">
    <meta content=\"ATW Labs, India\" name=\"copyright\">
    
    ";
        // line 24
        echo "
        <title>{{ title }}</title>
    ";
        echo "
    
    <!-- Styles and fonts -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->site("/public/css/home.css"), "html", null, true);
        echo "\" >
    <link href='http://fonts.googleapis.com/css?family=Comfortaa|Roboto' rel='stylesheet' type='text/css'>
    
    <link rel=\"icon\" type=\"image/png\" href=\"\">  
    </head>
    
    <!-- Content Body -->
    <body>
    <noscript>This is embarrasing ! Javascript is OFF !</noscript>

    <!--shadow panel -->
    <div class=\"ajaxshadow\"></div>
    
    <!-- ajax container -->
    <div class=\"ajax-wp\"></div>
    
    <!-- content wrapper -->
    <div class=\"base-wp\">
        
        <!-- Header bar -->
        <header>
            
            <!-- Logo -->
            <span class=\"logo\">
                <a href=\"/\">ceeq</a>
                </span>
            
            <!-- User account -->
            <div class=\"account-wp right hide\">
                <ul>
                    <li class=\"name\"></li>
                     <li>
                        <input type=\"submit\" value=\"Logout\" />
                    </li>
                </ul>
                </div>
            
            <!-- User login -->
            <div class=\"login-wp right\" >
                <ul>
                    <li>
                        <input type=\"text\" name=\"username\" placeholder=\"Username\" title=\"Enter your Mobile Number.\" ng-model=\"name\" required/>
                    </li>
                    <li>
                        <input type=\"password\" name=\"password\" placeholder=\"PIN\" title=\"Enter your PIN.\" ng-model=\"password\" required/>
                    </li>
                    <li>
                        <input type=\"submit\" value=\"Sign In\" ng-submit=\"login()\"/>
                    </li>
                </ul>
                </div>
            
            </header>

<div class=\"container\" ng-view>  \t
</div>

</div>
<footer >
            <!-- Scripts -->
            
            <!-- 
            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
            <script src=\"//ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular.min.js\"></script>
            -->
            
            <script type=\"text/javascript\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->site("/public/js/vendor/jquery.min.js"), "html", null, true);
        echo "\"></script>         
            <script type=\"text/javascript\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->site("/public/js/vendor/angular.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->site("/public/js/vendor/angular-route.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->site("/public/js/angular/home-app/home.js"), "html", null, true);
        echo "\"></script>
            <span class=\"left footer-nav\">Developed in India</a></span>
            <span class=\"left footer-nav\"><a href=\"http://github.com/rachitrm/ceeq\"> Open source </a></span>
            <span class=\"left footer-nav\">
                <a href=\"about\">About</a>
            </span>
            <span class=\"left footer-nav\">
                <a href=\"privacy\">Privacy</a>
            </span>
            <span class=\"left footer-nav\">
                <a href=\"faqs\">FAQs</a>
            </span>
            <span class=\"left footer-nav\">
                <a href=\"support\">Support</a>
            </span>
            <span class=\"left footer-nav\">
                <a href=\"terms\">Terms</a>
            </span>
            <span class=\"right footer-nav\">An <a href=\"http://rachitmishra.com\">R73</a> Project.</span></span>
            
            <!--<span>
                <a rel=\"license\" href=\"http://creativecommons.org/licenses/by-nc/2.5/in/deed.en_GB\">
                    <img alt=\"Creative Commons Licence\" 
                        style=\"border-width:0\" src=\"http://i.creativecommons.org/l/by-nc/2.5/in/88x31.png\"/>
                </a></span>-->
            <span class=\"clear\"></span>
        </footer>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "home.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 96,  127 => 95,  123 => 94,  119 => 93,  50 => 27,  42 => 24,  19 => 1,);
    }
}
