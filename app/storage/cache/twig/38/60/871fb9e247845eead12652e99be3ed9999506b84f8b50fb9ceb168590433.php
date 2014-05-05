<?php

/* dashboard.html.twig */
class __TwigTemplate_3860871fb9e247845eead12652e99be3ed9999506b84f8b50fb9ceb168590433 extends Twig_Template
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
        echo "<?php
\t  \$this->load->helper('url');
      \$this->load->library('session'); 
\t?>\t
\t\t  
    
\t<div class=\"container\">
    \t
    \t<div class=\"device-box\">
            <aside class=\"right remote-actions\">
                <ul>
                    <li class=\"command\" ajax=\"alarm\">Alarm</li>
                    <a href=\"<?php echo base_url('location')?>\"><li class=\"command\" ajax=\"locate\">Locate</li></a>
                    <li class=\"command\" ajax=\"ring\">Ring</li>
                    <li class=\"command\" ajax=\"wipe\">Wipe</li>
                    <li class=\"command\" ajax=\"about\">Message</li>
                    <li class=\"command\" ajax=\"about\">Lock</li>
                    <li class=\"command\" ajax=\"about\">About</li>
                </ul>
            </aside>
            <div class=\"left about-device\">
                <ul class=\"about-device-top\">
                \t<li class=\"name\"><?=\$manufacturer.\" \".\$model ?></li>
        \t\t</ul>
                <ul class=\"about-device-middle-1 clear\">
                    <li><label class=\"locate\">Locating</label></li>
                    <li class=\"loader\"><img src=\"<?php echo base_url('assets/images/s.gif')?>\" /></li>
                </ul>
                <ul class=\"about-device-middle-2 clear\">
                    <li><label>Last seen</label></li>
                    <li class=\"last-seen\"><?=\$last_seen ?></li>
                </ul>
        \t\t<ul class=\"about-device-bottom\">
                    <li><label>Registered on</label></li>
                \t<li class=\"registered-on\"><?=\$reg_on ?></li>
        \t\t</ul>
            </div>
            <div class=\"clear\"></div>
\t</div>";
    }

    public function getTemplateName()
    {
        return "dashboard.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
