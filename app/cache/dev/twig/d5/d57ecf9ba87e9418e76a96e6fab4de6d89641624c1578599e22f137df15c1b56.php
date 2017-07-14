<?php

/* ::forms.html.twig */
class __TwigTemplate_914b695588201b04d75aca417822720a52e17bfd14fdf72022c821620ad6edb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b0ccefd909d7c765a5b6e1e77650ff3ed551dfb8eea6b940dda99c1d448c9f52 = $this->env->getExtension("native_profiler");
        $__internal_b0ccefd909d7c765a5b6e1e77650ff3ed551dfb8eea6b940dda99c1d448c9f52->enter($__internal_b0ccefd909d7c765a5b6e1e77650ff3ed551dfb8eea6b940dda99c1d448c9f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::forms.html.twig"));

        // line 1
        $this->displayBlock('form_row', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_b0ccefd909d7c765a5b6e1e77650ff3ed551dfb8eea6b940dda99c1d448c9f52->leave($__internal_b0ccefd909d7c765a5b6e1e77650ff3ed551dfb8eea6b940dda99c1d448c9f52_prof);

    }

    // line 1
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_54b206b68818ac4521f91f37314d39021e2c2cc3149dc0a801fd829eb57ad1d4 = $this->env->getExtension("native_profiler");
        $__internal_54b206b68818ac4521f91f37314d39021e2c2cc3149dc0a801fd829eb57ad1d4->enter($__internal_54b206b68818ac4521f91f37314d39021e2c2cc3149dc0a801fd829eb57ad1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 2
        ob_start();
        // line 3
        echo "    <div>
        ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_54b206b68818ac4521f91f37314d39021e2c2cc3149dc0a801fd829eb57ad1d4->leave($__internal_54b206b68818ac4521f91f37314d39021e2c2cc3149dc0a801fd829eb57ad1d4_prof);

    }

    // line 11
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_7393bd107e8ad92dff1746173839170781b9ac860be3d2e75daf9bcab51da988 = $this->env->getExtension("native_profiler");
        $__internal_7393bd107e8ad92dff1746173839170781b9ac860be3d2e75daf9bcab51da988->enter($__internal_7393bd107e8ad92dff1746173839170781b9ac860be3d2e75daf9bcab51da988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 12
        ob_start();
        // line 13
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 14
            echo "        <div class=\"style-msg errormsg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t
            <div class=\"sb-msg\"> <i class=\"icon-remove\"></i>
                ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 18
                echo "                    ";
                echo twig_escape_filter($this->env, (((null === $this->getAttribute(                // line 19
$context["error"], "messagePluralization", array()))) ? ($this->env->getExtension('translator')->trans($this->getAttribute(                // line 20
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messageParameters", array()), "validators")) : ($this->env->getExtension('translator')->transchoice($this->getAttribute(                // line 21
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messagePluralization", array()), $this->getAttribute($context["error"], "messageParameters", array()), "validators"))), "html", null, true);
                // line 22
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "            </div>
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7393bd107e8ad92dff1746173839170781b9ac860be3d2e75daf9bcab51da988->leave($__internal_7393bd107e8ad92dff1746173839170781b9ac860be3d2e75daf9bcab51da988_prof);

    }

    public function getTemplateName()
    {
        return "::forms.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  99 => 24,  92 => 22,  90 => 21,  89 => 20,  88 => 19,  86 => 18,  82 => 17,  77 => 14,  74 => 13,  72 => 12,  66 => 11,  55 => 6,  51 => 5,  47 => 4,  44 => 3,  42 => 2,  36 => 1,  29 => 11,  26 => 10,  24 => 1,);
    }
}
/* {% block form_row %}*/
/* {% spaceless %}*/
/*     <div>*/
/*         {{ form_label(form) }}*/
/*         {{ form_errors(form) }}*/
/*         {{ form_widget(form) }}*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock form_row %}*/
/* */
/* {% block form_errors %}*/
/* {% spaceless %}*/
/*     {% if errors|length > 0 %}*/
/*         <div class="style-msg errormsg">*/
/* 													*/
/*             <div class="sb-msg"> <i class="icon-remove"></i>*/
/*                 {% for error in errors %}*/
/*                     {{*/
/*                         error.messagePluralization is null*/
/*                             ? error.messageTemplate|trans(error.messageParameters, 'validators')*/
/*                             : error.messageTemplate|transchoice(error.messagePluralization, error.messageParameters, 'validators')*/
/*                     }}*/
/*                 {% endfor %}*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock form_errors %}*/
