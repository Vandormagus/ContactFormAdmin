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

/* contact_form/index.html.twig */
class __TwigTemplate_3ca68178e1cf53d6c397413e075ba9d4 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact_form/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact_form/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Üzenet lista";
        
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
            <h1>Üzenet lista</h1>

            <table class=\"table\">
                <thead>
                    <tr>
                        <th style=\"width:10%;\">ID</th>
                        <th style=\"width:20%;\">Név</th>
                        <th style=\"width:20%;\">E-mail</th>
                        <th style=\"width:50%;\">Üzenet</th>
                        <!--th>actions</th-->
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contact_forms"]) || array_key_exists("contact_forms", $context) ? $context["contact_forms"] : (function () { throw new RuntimeError('Variable "contact_forms" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contact_form"]) {
            // line 23
            echo "                        <tr>
                            <td style=\"width:10%;\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact_form"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                            <td style=\"width:20%;\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact_form"], "Name", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                            <td style=\"width:20%;\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact_form"], "Email", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                            <td style=\"width:50%;\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact_form"], "Note", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                            <!--td>
                                <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact_form_show", ["id" => twig_get_attribute($this->env, $this->source, $context["contact_form"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\">show</a>
                                <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact_form_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["contact_form"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\">edit</a>
                            </td-->
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "                        <tr>
                            <td colspan=\"4\">Nincs találat!</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact_form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                </tbody>
            </table>

        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["max_page"]) || array_key_exists("max_page", $context) ? $context["max_page"] : (function () { throw new RuntimeError('Variable "max_page" does not exist.', 45, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 46
            echo "                ";
            if (($context["i"] != (isset($context["act_page"]) || array_key_exists("act_page", $context) ? $context["act_page"] : (function () { throw new RuntimeError('Variable "act_page" does not exist.', 46, $this->source); })()))) {
                // line 47
                echo "                    <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact_form_index");
                echo "?page=";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">[";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "]</a>
                ";
            } else {
                // line 48
                echo "    
                    [";
                // line 49
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "]
                ";
            }
            // line 51
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "contact_form/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 53,  172 => 51,  167 => 49,  164 => 48,  154 => 47,  151 => 46,  147 => 45,  138 => 38,  129 => 34,  120 => 30,  116 => 29,  111 => 27,  107 => 26,  103 => 25,  99 => 24,  96 => 23,  91 => 22,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Üzenet lista{% endblock %}

{% block body %}

    <div class=\"row\">
        <div class=\"col-md-12\">
            <h1>Üzenet lista</h1>

            <table class=\"table\">
                <thead>
                    <tr>
                        <th style=\"width:10%;\">ID</th>
                        <th style=\"width:20%;\">Név</th>
                        <th style=\"width:20%;\">E-mail</th>
                        <th style=\"width:50%;\">Üzenet</th>
                        <!--th>actions</th-->
                    </tr>
                </thead>
                <tbody>
                    {% for contact_form in contact_forms %}
                        <tr>
                            <td style=\"width:10%;\">{{ contact_form.id }}</td>
                            <td style=\"width:20%;\">{{ contact_form.Name }}</td>
                            <td style=\"width:20%;\">{{ contact_form.Email }}</td>
                            <td style=\"width:50%;\">{{ contact_form.Note }}</td>
                            <!--td>
                                <a href=\"{{ path('app_contact_form_show', {'id': contact_form.id}) }}\">show</a>
                                <a href=\"{{ path('app_contact_form_edit', {'id': contact_form.id}) }}\">edit</a>
                            </td-->
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"4\">Nincs találat!</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>

        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            {% for i in 1..max_page %}
                {% if( i != act_page )%}
                    <a href=\"{{ path('app_contact_form_index') }}?page={{ i }}\">[{{ i }}]</a>
                {%  else %}    
                    [{{ i }}]
                {% endif %}

            {% endfor %}
        </div>
    </div>

{% endblock %}
", "contact_form/index.html.twig", "C:\\xampp2\\htdocs\\ContactFormAdmin_6_3\\templates\\contact_form\\index.html.twig");
    }
}
