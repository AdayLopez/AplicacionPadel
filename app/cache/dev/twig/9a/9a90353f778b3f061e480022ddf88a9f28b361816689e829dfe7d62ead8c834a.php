<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_fca382c0a6fc1829bc00a972e4d41c5759d3a582213392c1252caa64a21c26d8 extends Twig_Template
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
        $__internal_fdb69a4232a040cb290a1b62cd97db0ed66e259d9e8211c0ef37ffa5898bb637 = $this->env->getExtension("native_profiler");
        $__internal_fdb69a4232a040cb290a1b62cd97db0ed66e259d9e8211c0ef37ffa5898bb637->enter($__internal_fdb69a4232a040cb290a1b62cd97db0ed66e259d9e8211c0ef37ffa5898bb637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p><b>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ":</b> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p><b>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ":</b> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
    <p><b>Nombre:</b> ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nombre", array()), "html", null, true);
        echo "</p>
    <p><b>Apellidos:</b> ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "apellidos", array()), "html", null, true);
        echo "</p>
    <p><b>Fecha de nacimiento:</b> ";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "fechaNacimiento", array()), "d/m/Y"), "html", null, true);
        echo "</p>
    <p><b>Teléfono:</b> ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "telefono", array()), "html", null, true);
        echo "</p>
    
    
    
</div>
";
        
        $__internal_fdb69a4232a040cb290a1b62cd97db0ed66e259d9e8211c0ef37ffa5898bb637->leave($__internal_fdb69a4232a040cb290a1b62cd97db0ed66e259d9e8211c0ef37ffa5898bb637_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 9,  46 => 8,  42 => 7,  38 => 6,  32 => 5,  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_user_show">*/
/*     <p><b>{{ 'profile.show.username'|trans }}:</b> {{ user.username }}</p>*/
/*     <p><b>{{ 'profile.show.email'|trans }}:</b> {{ user.email }}</p>*/
/*     <p><b>Nombre:</b> {{ user.nombre }}</p>*/
/*     <p><b>Apellidos:</b> {{ user.apellidos }}</p>*/
/*     <p><b>Fecha de nacimiento:</b> {{ user.fechaNacimiento|date('d/m/Y') }}</p>*/
/*     <p><b>Teléfono:</b> {{ user.telefono }}</p>*/
/*     */
/*     */
/*     */
/* </div>*/
/* */
