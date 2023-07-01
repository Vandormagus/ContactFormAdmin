<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* user/new.html.twig */
class __TwigTemplate_4a523144a93623fe0e14e5971166cc87 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "New User";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <h1>Új felhasználó</h1>

            ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["ret_data"] ?? null), "error_message", [], "any", true, true, false, 10)) {
            // line 11
            echo "                <div class=\"alert alert-danger\">
                    ";
            // line 12
            echo twig_get_attribute($this->env, $this->source, (isset($context["ret_data"]) || array_key_exists("ret_data", $context) ? $context["ret_data"] : (function () { throw new RuntimeError('Variable "ret_data" does not exist.', 12, $this->source); })()), "error_message", [], "any", false, false, false, 12);
            echo "
                </div>
            ";
        }
        // line 15
        echo "
            ";
        // line 16
        echo twig_include($this->env, $context, "user/_form.html.twig");
        echo "

            <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        echo "\">Vissza a listához!</a>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "user/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 18,  93 => 16,  90 => 15,  84 => 12,  81 => 11,  79 => 10,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New User{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <h1>Új felhasználó</h1>

            {% if ret_data.error_message is defined %}
                <div class=\"alert alert-danger\">
                    {{ ret_data.error_message | raw }}
                </div>
            {% endif %}

            {{ include('user/_form.html.twig') }}

            <a href=\"{{ path('app_user_index') }}\">Vissza a listához!</a>
        </div>
    </div>
{% endblock %}
", "user/new.html.twig", "C:\\xampp2\\htdocs\\ContactFormAdmin_6_3\\templates\\user\\new.html.twig");
    }
}
