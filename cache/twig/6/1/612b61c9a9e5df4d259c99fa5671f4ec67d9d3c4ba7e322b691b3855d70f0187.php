<?php

/* coppa_welcome_inactive.txt */
class __TwigTemplate_612b61c9a9e5df4d259c99fa5671f4ec67d9d3c4ba7e322b691b3855d70f0187 extends Twig_Template
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
        echo "Subject: Bienvenue sur « ";
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo " »

";
        // line 3
        echo (isset($context["WELCOME_MSG"]) ? $context["WELCOME_MSG"] : null);
        echo "

Conformément à la COPPA, votre compte est actuellement inactif.

Imprimez ce message et faites-le signer et dater par vos parents ou vos tuteurs. Puis, faxez-le à :

";
        // line 9
        echo (isset($context["FAX_INFO"]) ? $context["FAX_INFO"] : null);
        echo "

Ou envoyez-le à l’adresse e-mail suivante :

";
        // line 13
        echo (isset($context["MAIL_INFO"]) ? $context["MAIL_INFO"] : null);
        echo "

------------------------------ DÉCOUPEZ ICI ------------------------------
Autorisation de participer à « ";
        // line 16
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo " » - ";
        echo (isset($context["U_BOARD"]) ? $context["U_BOARD"] : null);
        echo "

Nom d’utilisateur : ";
        // line 18
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "
E-mail : ";
        // line 19
        echo (isset($context["EMAIL_ADDRESS"]) ? $context["EMAIL_ADDRESS"] : null);
        echo "

J’AI VÉRIFIÉ LES INFORMATIONS FOURNIES PAR MON ENFANT ET ACCORDE L’AUTORISATION À « ";
        // line 21
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo " » DE STOCKER CES INFORMATIONS.
JE COMPRENDS QUE CES INFORMATIONS PEUVENT ÊTRE MODIFIÉES À TOUT MOMENT EN SAISISSANT UN MOT DE PASSE.
JE COMPRENDS QUE JE PEUX DEMANDER LE RETRAIT DE CES INFORMATIONS À « ";
        // line 23
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo " » À TOUT MOMENT.


Parent ou tuteur
(Inscrivez votre nom ici) : _____________________

(Signez ici) : __________________

Date : _______________

------------------------------ DÉCOUPEZ ICI ------------------------------


Une fois que l’administrateur aura reçu le texte ci-dessus par fax ou par e-mail, votre compte sera activé.

Votre mot de passe a été stocké de manière sécurisée dans notre base de données et ne pourra pas être retrouvé. Dans le cas où vous l’auriez oublié, vous pourrez le réinitialiser en utilisant l’adresse e-mail associée à votre compte.

Merci de vous être enregistré.

";
        // line 42
        echo (isset($context["EMAIL_SIG"]) ? $context["EMAIL_SIG"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "coppa_welcome_inactive.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 42,  68 => 23,  63 => 21,  58 => 19,  54 => 18,  47 => 16,  41 => 13,  34 => 9,  25 => 3,  19 => 1,);
    }
}
