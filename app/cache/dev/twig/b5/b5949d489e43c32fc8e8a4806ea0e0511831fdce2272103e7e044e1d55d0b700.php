<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_900ed8b5515ede02977afdfc8408f0c68b34928362408c09147738d888cc7e4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85f05c67960251962fef38a8da25694df3ee5993d4cc0c6e5be2b9a56a1575b5 = $this->env->getExtension("native_profiler");
        $__internal_85f05c67960251962fef38a8da25694df3ee5993d4cc0c6e5be2b9a56a1575b5->enter($__internal_85f05c67960251962fef38a8da25694df3ee5993d4cc0c6e5be2b9a56a1575b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85f05c67960251962fef38a8da25694df3ee5993d4cc0c6e5be2b9a56a1575b5->leave($__internal_85f05c67960251962fef38a8da25694df3ee5993d4cc0c6e5be2b9a56a1575b5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c342b5a9130dd6660cf4ace5559b0e74b8e9061a1ef16e32ed6d220af98b609a = $this->env->getExtension("native_profiler");
        $__internal_c342b5a9130dd6660cf4ace5559b0e74b8e9061a1ef16e32ed6d220af98b609a->enter($__internal_c342b5a9130dd6660cf4ace5559b0e74b8e9061a1ef16e32ed6d220af98b609a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c342b5a9130dd6660cf4ace5559b0e74b8e9061a1ef16e32ed6d220af98b609a->leave($__internal_c342b5a9130dd6660cf4ace5559b0e74b8e9061a1ef16e32ed6d220af98b609a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_02e2d88972702e3a1702ed03c3f006a0f9472a54685c9f5134f3c02ed118c26b = $this->env->getExtension("native_profiler");
        $__internal_02e2d88972702e3a1702ed03c3f006a0f9472a54685c9f5134f3c02ed118c26b->enter($__internal_02e2d88972702e3a1702ed03c3f006a0f9472a54685c9f5134f3c02ed118c26b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_02e2d88972702e3a1702ed03c3f006a0f9472a54685c9f5134f3c02ed118c26b->leave($__internal_02e2d88972702e3a1702ed03c3f006a0f9472a54685c9f5134f3c02ed118c26b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e25bb3dd91124f34e18855e76e111c6121f645199dde0bdd0d15fc3683ff678a = $this->env->getExtension("native_profiler");
        $__internal_e25bb3dd91124f34e18855e76e111c6121f645199dde0bdd0d15fc3683ff678a->enter($__internal_e25bb3dd91124f34e18855e76e111c6121f645199dde0bdd0d15fc3683ff678a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e25bb3dd91124f34e18855e76e111c6121f645199dde0bdd0d15fc3683ff678a->leave($__internal_e25bb3dd91124f34e18855e76e111c6121f645199dde0bdd0d15fc3683ff678a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
