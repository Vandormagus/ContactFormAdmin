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

/* contact_form/new.html.twig_o */
class __TwigTemplate_f9b08a1262a62a6ae8ca14b8b4d352d2 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact_form/new.html.twig_o"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact_form/new.html.twig_o", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "New ContactForm";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <h1>Create new ContactForm</h1>

        ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["ret_data"] ?? null), "ret_message", [], "any", true, true, false, 9)) {
            // line 10
            echo "            <div class=\"alert alert-success\">
            ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ret_data"]) || array_key_exists("ret_data", $context) ? $context["ret_data"] : (function () { throw new RuntimeError('Variable "ret_data" does not exist.', 11, $this->source); })()), "ret_message", [], "any", false, false, false, 11), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 14
        echo "        ";
        echo twig_include($this->env, $context, "contact_form/_form.html.twig");
        echo "

        <!--a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact_form_index");
        echo "\">back to list</a-->
        
        
        
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "contact_form/new.html.twig_o";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 16,  89 => 14,  83 => 11,  80 => 10,  78 => 9,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New ContactForm{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1>Create new ContactForm</h1>

        {% if ret_data.ret_message is defined %}
            <div class=\"alert alert-success\">
            {{ ret_data.ret_message }}
            </div>
        {% endif %}
        {{ include('contact_form/_form.html.twig') }}

        <!--a href=\"{{ path('app_contact_form_index') }}\">back to list</a-->
        
        
        
    </div>
{% endblock %}
", "contact_form/new.html.twig_o", "C:\\xampp2\\htdocs\\ContactFormAdmin_6_3\\templates\\contact_form\\new.html.twig_o");
    }
}
