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

/* user/edit.html.twig */
class __TwigTemplate_6f61aeb2087205f7f9777ea89cc97f8f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Edit User";
        
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
            <h1>Felhasználó szerkesztése</h1>

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
        echo twig_include($this->env, $context, "user/_form.html.twig", ["button_label" => "Update"]);
        echo "

            <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        echo "\">Vissza a listához!</a>

            ";
        // line 20
        echo twig_include($this->env, $context, "user/_delete_form.html.twig");
        echo "
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "user/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 20,  98 => 18,  93 => 16,  90 => 15,  84 => 12,  81 => 11,  79 => 10,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit User{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <h1>Felhasználó szerkesztése</h1>

            {% if ret_data.error_message is defined %}
                <div class=\"alert alert-danger\">
                    {{ ret_data.error_message | raw }}
                </div>
            {% endif %}

            {{ include('user/_form.html.twig', {'button_label': 'Update'}) }}

            <a href=\"{{ path('app_user_index') }}\">Vissza a listához!</a>

            {{ include('user/_delete_form.html.twig') }}
        </div>
    </div>
{% endblock %}
", "user/edit.html.twig", "C:\\xampp2\\htdocs\\ContactFormAdmin_6_3\\templates\\user\\edit.html.twig");
    }
}
