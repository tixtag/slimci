<?php

/* LoginCustomer.twig */
class __TwigTemplate_b1cb9209f8f89e0b416e3e8f0ad87b78cd417dd58f50918d431a2f168c583068 extends Twig_Template
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
        echo "<!-- All the files that are required -->
<link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\">
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js\"></script>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />

<!-- Where all the magic happens -->
<!-- LOGIN FORM -->
<div class=\"text-center\" style=\"padding:50px 0\">
\t<div class=\"logo\">login</div>
\t<!-- Main Form -->
\t<div class=\"login-form-1\">
\t\t<form id=\"login-form\" class=\"text-left\">
\t\t\t<div class=\"login-form-main-message\"></div>
\t\t\t<div class=\"main-login-form\">
\t\t\t\t<div class=\"login-group\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"lg_username\" class=\"sr-only\">Username</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"lg_username\" name=\"lg_username\" placeholder=\"username\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"lg_password\" class=\"sr-only\">Password</label>
\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"lg_password\" name=\"lg_password\" placeholder=\"password\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group login-group-checkbox\">
\t\t\t\t\t\t<input type=\"checkbox\" id=\"lg_remember\" name=\"lg_remember\">
\t\t\t\t\t\t<label for=\"lg_remember\">remember</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<button type=\"submit\" class=\"login-button\"><i class=\"fa fa-chevron-right\"></i></button>
\t\t\t</div>
\t\t\t<div class=\"etc-login-form\">
\t\t\t\t<p>forgot your password? <a href=\"#\">click here</a></p>
\t\t\t\t<p>new user? <a href=\"#\">create new account</a></p>
\t\t\t</div>
\t\t</form>
\t</div>
\t<!-- end:Main Form -->
</div>

<!-- REGISTRATION FORM -->
<div class=\"text-center\" style=\"padding:50px 0\">
\t<div class=\"logo\">register</div>
\t<!-- Main Form -->
\t<div class=\"login-form-1\">
\t\t<form id=\"register-form\" class=\"text-left\">
\t\t\t<div class=\"login-form-main-message\"></div>
\t\t\t<div class=\"main-login-form\">
\t\t\t\t<div class=\"login-group\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"reg_username\" class=\"sr-only\">Email address</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"reg_username\" name=\"reg_username\" placeholder=\"username\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"reg_password\" class=\"sr-only\">Password</label>
\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"reg_password\" name=\"reg_password\" placeholder=\"password\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"reg_password_confirm\" class=\"sr-only\">Password Confirm</label>
\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"reg_password_confirm\" name=\"reg_password_confirm\" placeholder=\"confirm password\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"reg_email\" class=\"sr-only\">Email</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"reg_email\" name=\"reg_email\" placeholder=\"email\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"reg_fullname\" class=\"sr-only\">Full Name</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"reg_fullname\" name=\"reg_fullname\" placeholder=\"full name\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group login-group-checkbox\">
\t\t\t\t\t\t<input type=\"radio\" class=\"\" name=\"reg_gender\" id=\"male\" placeholder=\"username\">
\t\t\t\t\t\t<label for=\"male\">male</label>

\t\t\t\t\t\t<input type=\"radio\" class=\"\" name=\"reg_gender\" id=\"female\" placeholder=\"username\">
\t\t\t\t\t\t<label for=\"female\">female</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group login-group-checkbox\">
\t\t\t\t\t\t<input type=\"checkbox\" class=\"\" id=\"reg_agree\" name=\"reg_agree\">
\t\t\t\t\t\t<label for=\"reg_agree\">i agree with <a href=\"#\">terms</a></label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<button type=\"submit\" class=\"login-button\"><i class=\"fa fa-chevron-right\"></i></button>
\t\t\t</div>
\t\t\t<div class=\"etc-login-form\">
\t\t\t\t<p>already have an account? <a href=\"#\">login here</a></p>
\t\t\t</div>
\t\t</form>
\t</div>
\t<!-- end:Main Form -->
</div>

<!-- FORGOT PASSWORD FORM -->
<div class=\"text-center\" style=\"padding:50px 0\">
\t<div class=\"logo\">forgot password</div>
\t<!-- Main Form -->
\t<div class=\"login-form-1\">
\t\t<form id=\"forgot-password-form\" class=\"text-left\">
\t\t\t<div class=\"etc-login-form\">
\t\t\t\t<p>When you fill in your registered email address, you will be sent instructions on how to reset your password.</p>
\t\t\t</div>
\t\t\t<div class=\"login-form-main-message\"></div>
\t\t\t<div class=\"main-login-form\">
\t\t\t\t<div class=\"login-group\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"fp_email\" class=\"sr-only\">Email address</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"fp_email\" name=\"fp_email\" placeholder=\"email address\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<button type=\"submit\" class=\"login-button\"><i class=\"fa fa-chevron-right\"></i></button>
\t\t\t</div>
\t\t\t<div class=\"etc-login-form\">
\t\t\t\t<p>already have an account? <a href=\"#\">login here</a></p>
\t\t\t\t<p>new user? <a href=\"#\">create new account</a></p>
\t\t\t</div>
\t\t</form>
\t</div>
\t<!-- end:Main Form -->
</div>
";
    }

    public function getTemplateName()
    {
        return "LoginCustomer.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "LoginCustomer.twig", "C:\\xampp\\htdocs\\slimci\\application\\View\\LoginCustomer.twig");
    }
}
