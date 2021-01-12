********************************************************************************
*** ESTIMATE CUSTOMER LAW PROTECTION - READ ME (english)
********************************************************************************

*** Objectives

The objective of this module is to present the terms of acceptance so that the client
continue browsing the site, according to the site's guidelines and policies regarding the
use of cookies and saved data.

*** Version 1.0.0

What we have in this version:
- possibility to inform a personalized message;
- decide where to present the message (top or footer);
- box configuration using CSS and JS;
- cookie lifetime of the acceptance term.

*** Tested

Version: 2.4.1 Open

PHP: 7.3.9

Theme: LUMA

*** Install

Move the <CustomerLawProtection> folder to the directory:
app/code/MarioSAM/ (create the directory if it doesn't exist)

At the command prompt, Magento installation directory, type:
$ bin/magento module:enable MarioSAM_CustomerLawProtection
$ bin/magento setup:upgrade
$ bin/magento cache:clean

Access the Magento panel and navigate to:
Stores > [Settings] Configuration > Mario SAM > GDPR Settings

********************************************************************************
*** MODULO CUSTOMER LAW PROTECTION - LEIA ME (portugues)
********************************************************************************

*** Objetivos

Objetivo deste modulo é apresentar os termos de aceite para que o cliente
continue navegando no site, conforme diretrizes e politicas do site quanto ao
uso de cookies e dados salvos.

*** Versao 1.0.0 : https://mariosam.com.br/versao2/modulo-m2-lgpd

O que temos nesta versao:
- possibilidade de informar uma mensagem personalizada;
- decidir local de apresentacao da mensagem (topo ou rodape);
- configuracao do box usando CSS e JS;
- tempo de vida do cookie do termo de aceite.

*** Testado

Versao: 2.4.1 Open

PHP: 7.3.9

Tema: LUMA

*** Instalacao

Mova a pasta <CustomerLawProtection> para o diretorio:
app/code/MarioSAM/ (crie o diretorio se nao existir)

No prompt de comando, diretorio de instalacao do Magento, digite:
$ bin/magento module:enable MarioSAM_CustomerLawProtection
$ bin/magento setup:upgrade
$ bin/magento cache:clean

Acesse o painel do Magento e navegue em:
Lojas > [Configuracao] Configuracoes > Mario SAM > Termos LGPD