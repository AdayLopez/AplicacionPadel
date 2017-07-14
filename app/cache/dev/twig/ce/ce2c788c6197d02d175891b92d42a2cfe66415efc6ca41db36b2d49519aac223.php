<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_07f29d1154663d620c5cd1a2a384e52ef3d46fc646365e36e8e92dc1fd0d274d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0641de5519fc3c00c349f9b68f9cf0519f33d268c6b397c719f3b514a97dbedf = $this->env->getExtension("native_profiler");
        $__internal_0641de5519fc3c00c349f9b68f9cf0519f33d268c6b397c719f3b514a97dbedf->enter($__internal_0641de5519fc3c00c349f9b68f9cf0519f33d268c6b397c719f3b514a97dbedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0641de5519fc3c00c349f9b68f9cf0519f33d268c6b397c719f3b514a97dbedf->leave($__internal_0641de5519fc3c00c349f9b68f9cf0519f33d268c6b397c719f3b514a97dbedf_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_57dc63fee21f1df8b45fcb40b74769f66dbd5a3970e00f1bdd1282615f228372 = $this->env->getExtension("native_profiler");
        $__internal_57dc63fee21f1df8b45fcb40b74769f66dbd5a3970e00f1bdd1282615f228372->enter($__internal_57dc63fee21f1df8b45fcb40b74769f66dbd5a3970e00f1bdd1282615f228372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <section id=\"content\">
        <div class=\"feature-box fbox-center fbox-effect\" style=\"margin-top: 100px\">
            <div class=\"fbox-icon\">
                <i class=\"icon-thumbs-up i-alt\"></i>
            </div>    
            <p>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
            ";
        // line 12
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 13
            echo "            <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
            ";
        }
        // line 15
        echo "        </div>    
    </section>
";
        
        $__internal_57dc63fee21f1df8b45fcb40b74769f66dbd5a3970e00f1bdd1282615f228372->leave($__internal_57dc63fee21f1df8b45fcb40b74769f66dbd5a3970e00f1bdd1282615f228372_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 15,  53 => 13,  51 => 12,  47 => 11,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <section id="content">*/
/*         <div class="feature-box fbox-center fbox-effect" style="margin-top: 100px">*/
/*             <div class="fbox-icon">*/
/*                 <i class="icon-thumbs-up i-alt"></i>*/
/*             </div>    */
/*             <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*             {% if targetUrl %}*/
/*             <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*             {% endif %}*/
/*         </div>    */
/*     </section>*/
/* {% endblock fos_user_content %}*/
/* */
