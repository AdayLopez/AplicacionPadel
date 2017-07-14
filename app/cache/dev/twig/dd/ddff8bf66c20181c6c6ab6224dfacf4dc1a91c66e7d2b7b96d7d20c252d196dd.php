<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_4ad18a2237b209f5167d25c4b5de5bbf2e8a09c4358f1127d2e6f8b8e2da0085 extends Twig_Template
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
        $__internal_1c3259230e7dd187444b10d6ae04099db060bbff158f8d5ea2f347899e241f6d = $this->env->getExtension("native_profiler");
        $__internal_1c3259230e7dd187444b10d6ae04099db060bbff158f8d5ea2f347899e241f6d->enter($__internal_1c3259230e7dd187444b10d6ae04099db060bbff158f8d5ea2f347899e241f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c3259230e7dd187444b10d6ae04099db060bbff158f8d5ea2f347899e241f6d->leave($__internal_1c3259230e7dd187444b10d6ae04099db060bbff158f8d5ea2f347899e241f6d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b6305471748cd51efa226e257ada90a2a3c6551878e4bc337847e0229666c04a = $this->env->getExtension("native_profiler");
        $__internal_b6305471748cd51efa226e257ada90a2a3c6551878e4bc337847e0229666c04a->enter($__internal_b6305471748cd51efa226e257ada90a2a3c6551878e4bc337847e0229666c04a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b6305471748cd51efa226e257ada90a2a3c6551878e4bc337847e0229666c04a->leave($__internal_b6305471748cd51efa226e257ada90a2a3c6551878e4bc337847e0229666c04a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d172db4bd239616f8c2bf8cfbea922a5a5e0602addba2c4745180021965f64d = $this->env->getExtension("native_profiler");
        $__internal_9d172db4bd239616f8c2bf8cfbea922a5a5e0602addba2c4745180021965f64d->enter($__internal_9d172db4bd239616f8c2bf8cfbea922a5a5e0602addba2c4745180021965f64d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9d172db4bd239616f8c2bf8cfbea922a5a5e0602addba2c4745180021965f64d->leave($__internal_9d172db4bd239616f8c2bf8cfbea922a5a5e0602addba2c4745180021965f64d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1212b4c71e203a569c2c8665d25739b6c22db3072527ebe4a9594f7fb71c173e = $this->env->getExtension("native_profiler");
        $__internal_1212b4c71e203a569c2c8665d25739b6c22db3072527ebe4a9594f7fb71c173e->enter($__internal_1212b4c71e203a569c2c8665d25739b6c22db3072527ebe4a9594f7fb71c173e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_1212b4c71e203a569c2c8665d25739b6c22db3072527ebe4a9594f7fb71c173e->leave($__internal_1212b4c71e203a569c2c8665d25739b6c22db3072527ebe4a9594f7fb71c173e_prof);

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
