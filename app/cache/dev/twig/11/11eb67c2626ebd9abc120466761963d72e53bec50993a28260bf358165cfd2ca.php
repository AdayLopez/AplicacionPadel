<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_48a5f13f2441c6d811d1b4f49fad8e9c5779e3bf4b214d6cb7eef0f8abf687de extends Twig_Template
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
        $__internal_0a0c4400a8ee4ab2b9b702f013a0785c7ed4a8aba1b86d3b89f5ba32732c208e = $this->env->getExtension("native_profiler");
        $__internal_0a0c4400a8ee4ab2b9b702f013a0785c7ed4a8aba1b86d3b89f5ba32732c208e->enter($__internal_0a0c4400a8ee4ab2b9b702f013a0785c7ed4a8aba1b86d3b89f5ba32732c208e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_0a0c4400a8ee4ab2b9b702f013a0785c7ed4a8aba1b86d3b89f5ba32732c208e->leave($__internal_0a0c4400a8ee4ab2b9b702f013a0785c7ed4a8aba1b86d3b89f5ba32732c208e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include 'TwigBundle:Exception:trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
