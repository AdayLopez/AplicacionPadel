<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_621c6dfc35905cbca82de2661180baf132652301bee722621dd6764a2b1147eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a8404eac5e2fd572d056e09dd6d8926ea65de3d1a24ba048485c7b1209b123e = $this->env->getExtension("native_profiler");
        $__internal_4a8404eac5e2fd572d056e09dd6d8926ea65de3d1a24ba048485c7b1209b123e->enter($__internal_4a8404eac5e2fd572d056e09dd6d8926ea65de3d1a24ba048485c7b1209b123e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a8404eac5e2fd572d056e09dd6d8926ea65de3d1a24ba048485c7b1209b123e->leave($__internal_4a8404eac5e2fd572d056e09dd6d8926ea65de3d1a24ba048485c7b1209b123e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_423a6c1db4aa5539bcbd8e2f4741e9511c75b24f9e9deea12c19922c2cab1b75 = $this->env->getExtension("native_profiler");
        $__internal_423a6c1db4aa5539bcbd8e2f4741e9511c75b24f9e9deea12c19922c2cab1b75->enter($__internal_423a6c1db4aa5539bcbd8e2f4741e9511c75b24f9e9deea12c19922c2cab1b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Index";
        
        $__internal_423a6c1db4aa5539bcbd8e2f4741e9511c75b24f9e9deea12c19922c2cab1b75->leave($__internal_423a6c1db4aa5539bcbd8e2f4741e9511c75b24f9e9deea12c19922c2cab1b75_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_14429281ba159297324bf6dc57c33d9b7934fb84d1bc8dc80a74a9dd74abc354 = $this->env->getExtension("native_profiler");
        $__internal_14429281ba159297324bf6dc57c33d9b7934fb84d1bc8dc80a74a9dd74abc354->enter($__internal_14429281ba159297324bf6dc57c33d9b7934fb84d1bc8dc80a74a9dd74abc354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 7
        echo "   
";
        
        $__internal_14429281ba159297324bf6dc57c33d9b7934fb84d1bc8dc80a74a9dd74abc354->leave($__internal_14429281ba159297324bf6dc57c33d9b7934fb84d1bc8dc80a74a9dd74abc354_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a61d7f82dec8ed42f9e099c3ad98a67465b1ee2c0c69cbb42342ac34b9f2f519 = $this->env->getExtension("native_profiler");
        $__internal_a61d7f82dec8ed42f9e099c3ad98a67465b1ee2c0c69cbb42342ac34b9f2f519->enter($__internal_a61d7f82dec8ed42f9e099c3ad98a67465b1ee2c0c69cbb42342ac34b9f2f519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "    ";
        
        $__internal_a61d7f82dec8ed42f9e099c3ad98a67465b1ee2c0c69cbb42342ac34b9f2f519->leave($__internal_a61d7f82dec8ed42f9e099c3ad98a67465b1ee2c0c69cbb42342ac34b9f2f519_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 7,  65 => 6,  57 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Index{% endblock %}*/
/* */
/* {% block content %}*/
/*     {% block fos_user_content %}*/
/*     {% endblock fos_user_content %}   */
/* {% endblock %}*/
/* */
