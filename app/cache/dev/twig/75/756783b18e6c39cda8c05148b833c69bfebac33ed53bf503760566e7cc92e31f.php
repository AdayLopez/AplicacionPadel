<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_fb9c291fd1f731ee2f79e0f6a5a26ed7ff73e3a1269b809abb1dc84d6683d28f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_87caacf15ecc28baa6abdb8228a7823fcf67a07fadd895ca14b296ea51a4cf27 = $this->env->getExtension("native_profiler");
        $__internal_87caacf15ecc28baa6abdb8228a7823fcf67a07fadd895ca14b296ea51a4cf27->enter($__internal_87caacf15ecc28baa6abdb8228a7823fcf67a07fadd895ca14b296ea51a4cf27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87caacf15ecc28baa6abdb8228a7823fcf67a07fadd895ca14b296ea51a4cf27->leave($__internal_87caacf15ecc28baa6abdb8228a7823fcf67a07fadd895ca14b296ea51a4cf27_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_659f9149b631cee03fded1c73ec223d6bd1443209e59d1c7bca31c1791687798 = $this->env->getExtension("native_profiler");
        $__internal_659f9149b631cee03fded1c73ec223d6bd1443209e59d1c7bca31c1791687798->enter($__internal_659f9149b631cee03fded1c73ec223d6bd1443209e59d1c7bca31c1791687798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_659f9149b631cee03fded1c73ec223d6bd1443209e59d1c7bca31c1791687798->leave($__internal_659f9149b631cee03fded1c73ec223d6bd1443209e59d1c7bca31c1791687798_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
