<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_b33e832f9119786f8f34be952459f72591cf2475247fe87402b07d1cb84884ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_cce5a24443fb4aaf2d1fd24e9d0aff4dc531a7fa2f4d15f99438289d08a05dfc = $this->env->getExtension("native_profiler");
        $__internal_cce5a24443fb4aaf2d1fd24e9d0aff4dc531a7fa2f4d15f99438289d08a05dfc->enter($__internal_cce5a24443fb4aaf2d1fd24e9d0aff4dc531a7fa2f4d15f99438289d08a05dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cce5a24443fb4aaf2d1fd24e9d0aff4dc531a7fa2f4d15f99438289d08a05dfc->leave($__internal_cce5a24443fb4aaf2d1fd24e9d0aff4dc531a7fa2f4d15f99438289d08a05dfc_prof);

    }

    // line 3
    public function block_css($context, array $blocks = array())
    {
        $__internal_e6096c28c3119cd57925c36f9dc40fd650e2bef9b00cc98ce87536a08ad3f35e = $this->env->getExtension("native_profiler");
        $__internal_e6096c28c3119cd57925c36f9dc40fd650e2bef9b00cc98ce87536a08ad3f35e->enter($__internal_e6096c28c3119cd57925c36f9dc40fd650e2bef9b00cc98ce87536a08ad3f35e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

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
        
        $__internal_e6096c28c3119cd57925c36f9dc40fd650e2bef9b00cc98ce87536a08ad3f35e->leave($__internal_e6096c28c3119cd57925c36f9dc40fd650e2bef9b00cc98ce87536a08ad3f35e_prof);

    }

    // line 16
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_bbb54d94f41c419201746f8d205faa1fe2124d758ec2db652ca50947f9c53ad4 = $this->env->getExtension("native_profiler");
        $__internal_bbb54d94f41c419201746f8d205faa1fe2124d758ec2db652ca50947f9c53ad4->enter($__internal_bbb54d94f41c419201746f8d205faa1fe2124d758ec2db652ca50947f9c53ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

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
        
        $__internal_bbb54d94f41c419201746f8d205faa1fe2124d758ec2db652ca50947f9c53ad4->leave($__internal_bbb54d94f41c419201746f8d205faa1fe2124d758ec2db652ca50947f9c53ad4_prof);

    }

    // line 26
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ad350d12cc91e75479fc220ff99bb362fa6485eb5eac568b9b8d57bef33a235c = $this->env->getExtension("native_profiler");
        $__internal_ad350d12cc91e75479fc220ff99bb362fa6485eb5eac568b9b8d57bef33a235c->enter($__internal_ad350d12cc91e75479fc220ff99bb362fa6485eb5eac568b9b8d57bef33a235c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 27
        echo "    <section id=\"content\">
\t<div class=\"content-wrap\">
            <div class=\"container clearfix divcenter\" style=\"max-width: 550px;\">
                <div class=\"fancy-title title-bottom-border title-center\"><h2><i class=\"icon-user\"></i>   Registro de nuevo usuario</h2></div>
                ";
        // line 31
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 31)->display($context);
        // line 32
        echo "                </div>\t\t\t\t\t\t
            </div>
        </div>
</section>

";
        
        $__internal_ad350d12cc91e75479fc220ff99bb362fa6485eb5eac568b9b8d57bef33a235c->leave($__internal_ad350d12cc91e75479fc220ff99bb362fa6485eb5eac568b9b8d57bef33a235c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 32,  105 => 31,  99 => 27,  93 => 26,  84 => 23,  78 => 20,  74 => 19,  64 => 16,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
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
/*     <section id="content">*/
/* 	<div class="content-wrap">*/
/*             <div class="container clearfix divcenter" style="max-width: 550px;">*/
/*                 <div class="fancy-title title-bottom-border title-center"><h2><i class="icon-user"></i>   Registro de nuevo usuario</h2></div>*/
/*                 {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/*                 </div>						*/
/*             </div>*/
/*         </div>*/
/* </section>*/
/* */
/* {% endblock fos_user_content %}*/
/* */
