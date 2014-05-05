<?php

/* templates/footer.html.twig */
class __TwigTemplate_7a3c7939cf93e34e485adf723eb0b698131a8d39826b48fdcfe9d6682dc15ab9 extends Twig_Template
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
        echo "</div>
<footer >
\t\t\t<!-- Scripts -->
\t\t\t
\t\t\t<!-- 
\t\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
\t\t\t<script src=\"//ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular.min.js\"></script>
\t\t\t-->
\t\t\t
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->site("/public/js/vendor/jquery.min.js"), "html", null, true);
        echo "\"></script>\t\t\t
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->site("/public/js/vendor/angular.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->site("/public/js/vendor/angular-route.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->site("/public/js/angular/home-app/home.js"), "html", null, true);
        echo "\"></script>
\t\t\t<span class=\"left footer-nav\">Developed in India</a></span>
\t\t\t<span class=\"left footer-nav\"><a href=\"http://github.com/rachitrm/ceeq\"> Open source </a></span>
\t \t\t<span class=\"left footer-nav\">
\t \t\t\t<a href=\"#about\">About</a>
\t \t\t</span>
\t \t\t<span class=\"left footer-nav\">
\t \t\t\t<a href=\"#privacy\">Privacy</a>
\t \t\t</span>
\t \t\t<span class=\"left footer-nav\">
\t \t\t\t<a href=\"#faqs\">FAQs</a>
\t \t\t</span>
\t \t\t<span class=\"left footer-nav\">
\t \t\t\t<a href=\"#support\">Support</a>
\t \t\t</span>
\t \t\t<span class=\"left footer-nav\">
\t \t\t\t<a href=\"#terms\">Terms</a>
\t \t\t</span>
\t\t\t<span class=\"right footer-nav\">An <a href=\"http://rachitmishra.com\">R73</a> Project.</span></span>
\t\t\t
\t\t\t<!--<span>
\t\t\t\t<a rel=\"license\" href=\"http://creativecommons.org/licenses/by-nc/2.5/in/deed.en_GB\">
\t\t\t\t\t<img alt=\"Creative Commons Licence\" 
\t\t\t\t\t\tstyle=\"border-width:0\" src=\"http://i.creativecommons.org/l/by-nc/2.5/in/88x31.png\"/>
\t\t\t\t</a></span>-->
\t\t\t<span class=\"clear\"></span>
\t\t</footer>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "templates/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  34 => 11,  30 => 10,  50 => 27,  42 => 13,  27 => 6,  21 => 2,  19 => 1,);
    }
}
