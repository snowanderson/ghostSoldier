<?php

/* aboutus_body.html */
class __TwigTemplate_250cb8ddcdf9451d830fd8eab85d859602cc3571a8ef0a72523afeed58e52c7f extends Twig_Template
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
        // line 1
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "aboutus_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2>About Us</h2>

<div class=\"panel\">
    <div class=\"inner\"><span class=\"corners-top\"><span></span></span>

        <div class=\"content\">
            <p>
                We were founded this year to bring you the best forum on the Internet!

                We promise to do the following:
            <ul>
                <li>Provide new content</li>
                <li>provide a friendly atmosphere</li>
                <li>Provide an environment where you can have fun!</li>
            </ul>
            </p>
        </div>

        <div class=\"pure-g\">
            <div class=\"pure-u-1-3\"><p>
                <form class=\"pure-form\">
                    <fieldset>
                        <legend>A compact inline form</legend>

                        <input type=\"email\" placeholder=\"Email\">
                        <input type=\"password\" placeholder=\"Password\">

                        <label for=\"remember\">
                            <input id=\"remember\" type=\"checkbox\"> Remember me
                        </label>

                        <button type=\"submit\" class=\"pure-button pure-button-primary\">Sign in</button>
                    </fieldset>
                </form>
            </p></div>
            <div class=\"pure-u-1-3\"><p>
                <form class=\"pure-form\">
                    <fieldset>
                        <legend>A compact inline form</legend>

                        <input type=\"email\" placeholder=\"Email\">
                        <input type=\"password\" placeholder=\"Password\">

                        <label for=\"remember\">
                            <input id=\"remember\" type=\"checkbox\"> Remember me
                        </label>

                        <button type=\"submit\" class=\"pure-button pure-button-primary\">Sign in</button>
                    </fieldset>
                </form>
            </p></div>
            <div class=\"pure-u-1-3\"><p>
                <form class=\"pure-form\">
                    <fieldset>
                        <legend>A compact inline form</legend>

                        <input type=\"email\" placeholder=\"Email\">
                        <input type=\"password\" placeholder=\"Password\">

                        <label for=\"remember\">
                            <input id=\"remember\" type=\"checkbox\"> Remember me
                        </label>

                        <button type=\"submit\" class=\"pure-button pure-button-primary\">Sign in</button>
                    </fieldset>
                </form>
            </p></div>
        </div>



        <span class=\"corners-bottom\"><span></span></span></div>
</div>

";
        // line 77
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "aboutus_body.html", 77)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 78
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "aboutus_body.html", 78)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "aboutus_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 78,  108 => 77,  31 => 2,  19 => 1,);
    }
}
