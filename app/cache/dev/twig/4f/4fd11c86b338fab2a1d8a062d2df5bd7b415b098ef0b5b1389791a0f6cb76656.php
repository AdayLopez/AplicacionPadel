<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_4ec73017ae1ebbbaec04d2cfd14ec920e01aece4dc54b8096e6907a02078deb2 extends Twig_Template
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
        $__internal_3d33f446cb08b4e4ef4506856a87f3935d9bcd74f4278e93d7d515afbceb9ce3 = $this->env->getExtension("native_profiler");
        $__internal_3d33f446cb08b4e4ef4506856a87f3935d9bcd74f4278e93d7d515afbceb9ce3->enter($__internal_3d33f446cb08b4e4ef4506856a87f3935d9bcd74f4278e93d7d515afbceb9ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

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
        
        $__internal_3d33f446cb08b4e4ef4506856a87f3935d9bcd74f4278e93d7d515afbceb9ce3->leave($__internal_3d33f446cb08b4e4ef4506856a87f3935d9bcd74f4278e93d7d515afbceb9ce3_prof);

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
