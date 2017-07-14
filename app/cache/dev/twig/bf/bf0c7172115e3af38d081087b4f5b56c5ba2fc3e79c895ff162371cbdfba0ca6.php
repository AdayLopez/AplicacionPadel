<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_dc0133458fbbf7cc350098ba2ae4a74c941197a5e7473da61fb3363d8a759c49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'scripts' => array($this, 'block_scripts'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_12e807d11343b5e27e96831bac57f4388c2d407c631f6df9f0722c2c71382b9a = $this->env->getExtension("native_profiler");
        $__internal_12e807d11343b5e27e96831bac57f4388c2d407c631f6df9f0722c2c71382b9a->enter($__internal_12e807d11343b5e27e96831bac57f4388c2d407c631f6df9f0722c2c71382b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12e807d11343b5e27e96831bac57f4388c2d407c631f6df9f0722c2c71382b9a->leave($__internal_12e807d11343b5e27e96831bac57f4388c2d407c631f6df9f0722c2c71382b9a_prof);

    }

    // line 3
    public function block_css($context, array $blocks = array())
    {
        $__internal_a89ff793aaa8fbd9aa23bcfa264054ad4d9e95839a33e253a7ca048f8d330d85 = $this->env->getExtension("native_profiler");
        $__internal_a89ff793aaa8fbd9aa23bcfa264054ad4d9e95839a33e253a7ca048f8d330d85->enter($__internal_a89ff793aaa8fbd9aa23bcfa264054ad4d9e95839a33e253a7ca048f8d330d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/css/components/datepicker.css"), "html", null, true);
        echo "\"/>    
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/css/components/bs-filestyle.css"), "html", null, true);
        echo "\"/>        
    <style>

        input::-webkit-inner-spin-button,
        input::-webkit-calendar-picker-indicator {
            display: none;
            -webkit-appearance: none;
        }
    </style>
";
        
        $__internal_a89ff793aaa8fbd9aa23bcfa264054ad4d9e95839a33e253a7ca048f8d330d85->leave($__internal_a89ff793aaa8fbd9aa23bcfa264054ad4d9e95839a33e253a7ca048f8d330d85_prof);

    }

    // line 16
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_d891a14ce3127e314dd653072a25c13c07581a7d29e275a25853854a0cad64ce = $this->env->getExtension("native_profiler");
        $__internal_d891a14ce3127e314dd653072a25c13c07581a7d29e275a25853854a0cad64ce->enter($__internal_d891a14ce3127e314dd653072a25c13c07581a7d29e275a25853854a0cad64ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        echo " 
     
     <!-- Include Date Range Picker -->
     <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/js/components/moment.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/js/components/datepicker.js"), "html", null, true);
        echo "\"></script>
     
     <!-- Upload js -->
     <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/js/components/bs-filestyle.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_d891a14ce3127e314dd653072a25c13c07581a7d29e275a25853854a0cad64ce->leave($__internal_d891a14ce3127e314dd653072a25c13c07581a7d29e275a25853854a0cad64ce_prof);

    }

    // line 26
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6670c2000dbb8ab0ccebdadfd45f536b0b3465f57ad07b53624ae016a1f23e11 = $this->env->getExtension("native_profiler");
        $__internal_6670c2000dbb8ab0ccebdadfd45f536b0b3465f57ad07b53624ae016a1f23e11->enter($__internal_6670c2000dbb8ab0ccebdadfd45f536b0b3465f57ad07b53624ae016a1f23e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 27
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 27)->display($context);
        
        $__internal_6670c2000dbb8ab0ccebdadfd45f536b0b3465f57ad07b53624ae016a1f23e11->leave($__internal_6670c2000dbb8ab0ccebdadfd45f536b0b3465f57ad07b53624ae016a1f23e11_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 27,  93 => 26,  84 => 23,  78 => 20,  74 => 19,  64 => 16,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block css %}*/
/*     <link rel="stylesheet" href="{{asset('bundles/padelschedulemain/css/components/datepicker.css')}}"/>    */
/*     <link rel="stylesheet" href="{{asset('bundles/padelschedulemain/css/components/bs-filestyle.css')}}"/>        */
/*     <style>*/
/* */
/*         input::-webkit-inner-spin-button,*/
/*         input::-webkit-calendar-picker-indicator {*/
/*             display: none;*/
/*             -webkit-appearance: none;*/
/*         }*/
/*     </style>*/
/* {% endblock css %}*/
/* */
/* {% block scripts %} */
/*      */
/*      <!-- Include Date Range Picker -->*/
/*      <script src="{{asset('bundles/padelschedulemain/js/components/moment.js')}}"></script>*/
/*      <script src="{{asset('bundles/padelschedulemain/js/components/datepicker.js')}}"></script>*/
/*      */
/*      <!-- Upload js -->*/
/*      <script src="{{asset('bundles/padelschedulemain/js/components/bs-filestyle.js')}}"></script>*/
/* {% endblock %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
