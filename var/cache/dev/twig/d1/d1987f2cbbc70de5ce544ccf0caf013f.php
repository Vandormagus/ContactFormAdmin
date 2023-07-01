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

/* user/_form.html.twig */
class __TwigTemplate_910adc2cc93280813b98fa97f761af96 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_form.html.twig"));

        // line 1
        echo "

";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'form_start');
        echo "
    <div>
        
        
        <label for=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), "vars", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7), "html", null, true);
        echo "\">Név</label>
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        ";
        // line 9
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), "vars", [], "any", false, false, false, 9), "errors", [], "any", false, false, false, 9)) > 0)) {
            // line 10
            echo "            <ul class=\"alert alert-danger \" >
                ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), "vars", [], "any", false, false, false, 11), "errors", [], "any", false, false, false, 11));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 12
                echo "                    <li style=\"list-style-type: none;\" class=\"small\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 12), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "            </ul>
        ";
        }
        // line 16
        echo "    </div>
    <div>
        
        <label for=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "password", [], "any", false, false, false, 19), "vars", [], "any", false, false, false, 19), "id", [], "any", false, false, false, 19), "html", null, true);
        echo "\">Jelszó</label>
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "password", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        ";
        // line 21
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "password", [], "any", false, false, false, 21), "vars", [], "any", false, false, false, 21), "errors", [], "any", false, false, false, 21)) > 0)) {
            // line 22
            echo "            <ul class=\"alert alert-danger \" >
                ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "password", [], "any", false, false, false, 23), "vars", [], "any", false, false, false, 23), "errors", [], "any", false, false, false, 23));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 24
                echo "                    <li style=\"list-style-type: none;\" class=\"small\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 24), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "            </ul>
        ";
        }
        // line 28
        echo "    </div>
    <div>
        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "save", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        echo "
    </div>
";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), 'form_end');
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "user/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 32,  120 => 30,  116 => 28,  112 => 26,  103 => 24,  99 => 23,  96 => 22,  94 => 21,  90 => 20,  86 => 19,  81 => 16,  77 => 14,  68 => 12,  64 => 11,  61 => 10,  59 => 9,  55 => 8,  51 => 7,  44 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

{{ form_start(form) }}
    <div>
        
        
        <label for=\"{{ form.name.vars.id }}\">Név</label>
        {{ form_widget(form.name, { 'attr': { 'class': 'form-control' } }) }}
        {% if form.name.vars.errors|length > 0 %}
            <ul class=\"alert alert-danger \" >
                {% for error in form.name.vars.errors %}
                    <li style=\"list-style-type: none;\" class=\"small\">{{ error.message }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>
    <div>
        
        <label for=\"{{ form.password.vars.id }}\">Jelszó</label>
        {{ form_widget(form.password, { 'attr': { 'class': 'form-control' } }) }}
        {% if form.password.vars.errors|length > 0 %}
            <ul class=\"alert alert-danger \" >
                {% for error in form.password.vars.errors %}
                    <li style=\"list-style-type: none;\" class=\"small\">{{ error.message }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>
    <div>
        {{ form_widget(form.save, { 'attr': { 'class': 'btn btn-primary' } }) }}
    </div>
{{ form_end(form) }}", "user/_form.html.twig", "C:\\xampp2\\htdocs\\ContactFormAdmin_6_3\\templates\\user\\_form.html.twig");
    }
}
