<?php

/* home.html.twig */
class __TwigTemplate_93e177bcc7d1bb87d234f1240902677a3aa1e9e993025837e8d246a228bd2e93 extends Twig_Template
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
        $this->env->loadTemplate("templates/header.html.twig")->display($context);
        // line 2
        echo "
<div class=\"container-fluid\" ng-view>
</div>

";
        // line 6
        $this->env->loadTemplate("templates/footer.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 6,  21 => 2,  19 => 1,);
    }
}
