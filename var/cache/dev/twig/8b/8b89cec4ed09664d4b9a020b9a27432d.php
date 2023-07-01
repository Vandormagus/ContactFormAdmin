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

/* contact_form/new.html.twig */
class __TwigTemplate_af5713fc2eb009fac276ead125aa6de3 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact_form/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact_form/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Új üzenet";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    
        
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1>Új üzenet</h1>

                ";
        // line 12
        if (twig_get_attribute($this->env, $this->source, ($context["ret_data"] ?? null), "success_message", [], "any", true, true, false, 12)) {
            // line 13
            echo "                    <div class=\"alert alert-success\">
                        ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ret_data"]) || array_key_exists("ret_data", $context) ? $context["ret_data"] : (function () { throw new RuntimeError('Variable "ret_data" does not exist.', 14, $this->source); })()), "success_message", [], "any", false, false, false, 14), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 17
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, ($context["ret_data"] ?? null), "error_message", [], "any", true, true, false, 17)) {
            // line 18
            echo "                    <div class=\"alert alert-danger\">
                        ";
            // line 19
            echo twig_get_attribute($this->env, $this->source, (isset($context["ret_data"]) || array_key_exists("ret_data", $context) ? $context["ret_data"] : (function () { throw new RuntimeError('Variable "ret_data" does not exist.', 19, $this->source); })()), "error_message", [], "any", false, false, false, 19);
            echo "
                    </div>
                ";
        }
        // line 22
        echo "                ";
        echo twig_include($this->env, $context, "contact_form/_form.html.twig");
        echo "



            </div>
        </div>
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "contact_form/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 22,  98 => 19,  95 => 18,  92 => 17,  86 => 14,  83 => 13,  81 => 12,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Új üzenet{% endblock %}

{% block body %}
    
        
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1>Új üzenet</h1>

                {% if ret_data.success_message is defined %}
                    <div class=\"alert alert-success\">
                        {{ ret_data.success_message }}
                    </div>
                {% endif %}
                {% if ret_data.error_message is defined %}
                    <div class=\"alert alert-danger\">
                        {{ ret_data.error_message | raw }}
                    </div>
                {% endif %}
                {{ include('contact_form/_form.html.twig') }}



            </div>
        </div>
    
{% endblock %}
", "contact_form/new.html.twig", "C:\\xampp2\\htdocs\\ContactFormAdmin_6_3\\templates\\contact_form\\new.html.twig");
    }
}
