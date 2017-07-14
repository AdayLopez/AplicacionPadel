<?php

/* PadelScheduleMainBundle:Competitions:debug.html.twig */
class __TwigTemplate_223a69b8d4f54e3756625de8a217686e52f7a42a0e258ceee9f746bfb9412b3c extends Twig_Template
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
        $__internal_f5ee3507877b9e09d4f7e1328ccf6aeddd18b2df7417a017bd7fc44d43373561 = $this->env->getExtension("native_profiler");
        $__internal_f5ee3507877b9e09d4f7e1328ccf6aeddd18b2df7417a017bd7fc44d43373561->enter($__internal_f5ee3507877b9e09d4f7e1328ccf6aeddd18b2df7417a017bd7fc44d43373561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PadelScheduleMainBundle:Competitions:debug.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, twig_var_dump($this->env, $context, (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data"))), "html", null, true);
        echo "
";
        
        $__internal_f5ee3507877b9e09d4f7e1328ccf6aeddd18b2df7417a017bd7fc44d43373561->leave($__internal_f5ee3507877b9e09d4f7e1328ccf6aeddd18b2df7417a017bd7fc44d43373561_prof);

    }

    public function getTemplateName()
    {
        return "PadelScheduleMainBundle:Competitions:debug.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {{ dump(data) }}*/
/* */
