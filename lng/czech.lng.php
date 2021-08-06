<?php

/**
 * This file is part of the Froxlor project.
 * Copyright (c) 2003-2009 the SysCP Team (see authors).
 * Copyright (c) 2010 the Froxlor Team (see authors).
 *
 * For the full copyright and license information, please view the COPYING
 * file that was distributed with this source code. You can also view the
 * COPYING file online at http://files.froxlor.org/misc/COPYING.txt
 *
 * @copyright  (c) the authors
 * @author     Florian Lippert <flo@syscp.org>
 * @author     Froxlor Team <team@froxlor.org>
 * @license    GPLv2 http://files.froxlor.org/misc/COPYING.txt
 * @package    Language
 *
 */

/**
 * Global
 */
$lng['translator'] = '';
$lng['panel']['edit'] = 'Upravit';
$lng['panel']['delete'] = 'Smazat';
$lng['panel']['create'] = 'Vytvořit';
$lng['panel']['save'] = 'Uložit';
$lng['panel']['yes'] = 'Ano';
$lng['panel']['no'] = 'Ne';
$lng['panel']['emptyfornochanges'] = 'empty for no changes';
$lng['panel']['emptyfordefault'] = 'empty for defaults';
$lng['panel']['path'] = 'Cesta';
$lng['panel']['toggle'] = 'Toggle';
$lng['panel']['next'] = 'Další';
$lng['panel']['dirsmissing'] = 'Nemůžu najít nebo přečíst adresář!';

/**
 * Login
 */

$lng['login']['username'] = 'Uživatelské jméno';
$lng['login']['password'] = 'Heslo';
$lng['login']['language'] = 'Jazyk';
$lng['login']['login'] = 'Přihlásit se';
$lng['login']['logout'] = 'Odhlásit se';
$lng['login']['profile_lng'] = 'Jazyk profilu';

/**
 * Customer
 */

$lng['customer']['documentroot'] = 'Domovský adresář';
$lng['customer']['name'] = 'Název';
$lng['customer']['firstname'] = 'Křestní jméno';
$lng['customer']['company'] = 'Společnost';
$lng['customer']['street'] = 'Ulice';
$lng['customer']['zipcode'] = 'PSČ';
$lng['customer']['city'] = 'Město';
$lng['customer']['phone'] = 'Telefon';
$lng['customer']['fax'] = 'Fax';
$lng['customer']['email'] = 'Email';
$lng['customer']['customernumber'] = 'ID Zákazníka';
$lng['customer']['diskspace'] = 'Webový prostor (MiB)';
$lng['customer']['traffic'] = 'Provoz (GiB)';
$lng['customer']['mysqls'] = 'MySQL-databáze';
$lng['customer']['emails'] = 'Email-adresy';
$lng['customer']['accounts'] = 'Email-účty';
$lng['customer']['forwarders'] = 'Email-forwarders';
$lng['customer']['ftps'] = 'FTP-účty';
$lng['customer']['subdomains'] = 'Subdomény';
$lng['customer']['domains'] = 'Domény';
$lng['customer']['unlimited'] = '∞';
$lng['customer']['mib'] = 'MiB';

/**
 * Customermenue
 */

$lng['menue']['main']['main'] = 'Hlavní';
$lng['menue']['main']['changepassword'] = 'Změnit heslo';
$lng['menue']['main']['changelanguage'] = 'Změnit jazyk';
$lng['menue']['email']['email'] = 'Email';
$lng['menue']['email']['emails'] = 'Adresy';
$lng['menue']['email']['webmail'] = 'Webmail';
$lng['menue']['mysql']['mysql'] = 'MySQL';
$lng['menue']['mysql']['databases'] = 'Databáze';
$lng['menue']['mysql']['phpmyadmin'] = 'phpMyAdmin';
$lng['menue']['domains']['domains'] = 'Domény';
$lng['menue']['domains']['settings'] = 'Nastavení';
$lng['menue']['ftp']['ftp'] = 'FTP';
$lng['menue']['ftp']['accounts'] = 'Účty';
$lng['menue']['ftp']['webftp'] = 'WebFTP';
$lng['menue']['extras']['extras'] = 'Extra';
$lng['menue']['extras']['directoryprotection'] = 'Ochrana adresáře';
$lng['menue']['extras']['pathoptions'] = 'Možnosti cesty';

/**
 * Index
 */

$lng['index']['customerdetails'] = 'Detaily zákazníka';
$lng['index']['accountdetails'] = 'Detaily účtu';

/**
 * Change Password
 */

$lng['changepassword']['old_password'] = 'Staré heslo';
$lng['changepassword']['new_password'] = 'Nové heslo';
$lng['changepassword']['new_password_confirm'] = 'Potvrdit heslo';
$lng['changepassword']['new_password_ifnotempty'] = 'Nové heslo (prázdné = beze změny)';
$lng['changepassword']['also_change_ftp'] = ' také změní heslo hlavního FTP účtu';

/**
 * Domains
 */

$lng['domains']['description'] = 'Zde můžeš vytvořit a upravit (sub-)domémny a změnit jejich cesty.<br />Systém bude chtít nějaký čas pro aplikování nového nastavení po každé změně.';
$lng['domains']['domainsettings'] = 'Nastavení domény';
$lng['domains']['domainname'] = 'Název domény';
$lng['domains']['subdomain_add'] = 'Vytvořit subdoménu';
$lng['domains']['subdomain_edit'] = 'Upravit (sub)doménu';
$lng['domains']['wildcarddomain'] = 'Vytvořit jako wildcarddoménu?';
$lng['domains']['aliasdomain'] = 'Alias pro doménu';
$lng['domains']['noaliasdomain'] = 'Doména bez aliasu';

/**
 * E-mails
 */

$lng['emails']['description'] = 'Zde můžeš vytvořit a upravit tvé emailové adresy.<br />Účet je jako poštovní schránka před tvým domem. Pokud ti někdo odešle email, přijde ti do tvého účtu.<br /><br />Pro stažení tvých emailů použij následující nastavení v tvém emailovém klientovi: (Data v <i>italském fontu</i> na ekvivalenty, které jsi vepsal/a!)<br />Název hostitele: <b><i>názevdomény</i></b><br />Uživatel: <b><i>název účtu / emailová addresa</i></b><br />heslo: <b><i>heslo, které jsi si zvolil/a</i></b>';
$lng['emails']['emailaddress'] = 'Emailová adresa';
$lng['emails']['emails_add'] = 'Vytvořit emailové adresy';
$lng['emails']['emails_edit'] = 'Upravit emailovou adresu';
$lng['emails']['catchall'] = 'Catchall';
$lng['emails']['iscatchall'] = 'Definovat jako catchall-adresu?';
$lng['emails']['account'] = 'Účet';
$lng['emails']['account_add'] = 'Vytvořit účet';
$lng['emails']['account_delete'] = 'Smazat účet';
$lng['emails']['from'] = 'Zdroj';
$lng['emails']['to'] = 'Cíl';
$lng['emails']['forwarders'] = 'Forwarders';
$lng['emails']['forwarder_add'] = 'Vytvořit forwarder';

/**
 * FTP
 */

$lng['ftp']['description'] = 'Zde můžeš tvořit a upravovat tvé FTP-účty.<br />Změny jsou uskutečněny okamžitě a účty mohou být použity ihned.';
$lng['ftp']['account_add'] = 'Vytvořit účet';

/**
 * MySQL
 */

$lng['mysql']['databasename'] = 'Název uživetele/databáze';
$lng['mysql']['databasedescription'] = 'Popis databáze';
$lng['mysql']['database_create'] = 'Vytvořit databázi';

/**
 * Extras
 */

$lng['extras']['description'] = 'Zde můžeš přidat dodatečné věci, např. ochranu odresáře.<br />Systém bude potřebovat nějaký čas pro aplikování změn.';
$lng['extras']['directoryprotection_add'] = 'Přidat ocrhanu adresáře';
$lng['extras']['view_directory'] = 'Zobrazit obsah adresáře';
$lng['extras']['pathoptions_add'] = 'Přidat možnosti cesty';
$lng['extras']['directory_browsing'] = 'Procházení obsahu adresáře';
$lng['extras']['pathoptions_edit'] = 'Upravit možnosti cesty';
$lng['extras']['error404path'] = '404';
$lng['extras']['error403path'] = '403';
$lng['extras']['error500path'] = '500';
$lng['extras']['error401path'] = '401';
$lng['extras']['errordocument404path'] = 'ErrorDocument 404';
$lng['extras']['errordocument403path'] = 'ErrorDocument 403';
$lng['extras']['errordocument500path'] = 'ErrorDocument 500';
$lng['extras']['errordocument401path'] = 'ErrorDocument 401';

/**
 * Errors
 */

$lng['error']['error'] = 'Chyba';
$lng['error']['directorymustexist'] = 'Adresář %s musí existovat. Vytvoř jej prosím v FTP klientovi.';
$lng['error']['filemustexist'] = 'Soubor %s musí existovat.';
$lng['error']['allresourcesused'] = 'Již jsi využil všechny svoje zdroje.';
$lng['error']['domains_cantdeletemaindomain'] = 'Nemůžeš smazat doménu, která je využívána pro emailovou doménu.';
$lng['error']['domains_canteditdomain'] = 'Tuto doménu nemůžeš měnit. Administrátor tuto možnost vypnul.';
$lng['error']['domains_cantdeletedomainwithemail'] = 'Nemůžeš smazat doménu, která je využívána pro emailovou doménu. Nejříve smaž všechny emailové adresy.';
$lng['error']['firstdeleteallsubdomains'] = 'Nejdříve musíš smazat všechny subdomény, než vytvoříš wildcard doménu.';
$lng['error']['youhavealreadyacatchallforthisdomain'] = 'Již jsi definoval catchall pro tuto doménu.';
$lng['error']['ftp_cantdeletemainaccount'] = 'Nemůžeš smazat svůj hlavní FTP účet';
$lng['error']['login'] = 'Zadané uživatelské jméno nebo heslo je špatné. Zkus to prosím za chvíli!';
$lng['error']['login_blocked'] = 'Tento účet byl zablokován po příliš mnoho selhaných pokusech o přihlášení. <br />Zkus to znovu za %s sekund.';
$lng['error']['notallreqfieldsorerrors'] = 'Nic jsi nevyplnil nebo jsi vyplnil některé kolonky špatně.';
$lng['error']['oldpasswordnotcorrect'] = 'Staré heslo není správné.';
$lng['error']['youcantallocatemorethanyouhave'] = 'Nemůžeš přiřadit více prostředků, než vlastníš.';
$lng['error']['mustbeurl'] = 'Nenapsal jsi správnou nebo kompletí odkaz (např. http://somedomain.com/error404.htm)';
$lng['error']['invalidpath'] = 'Nevybral jsi správný odkaz (možná se jedná o problém s dirlisting?)';
$lng['error']['stringisempty'] = 'Chybějící vstup v poli';
$lng['error']['stringiswrong'] = 'Špatný vstup v poli';
$lng['error']['newpasswordconfirmerror'] = 'Nové heslo a jeho potvrzení neodpovídá';
$lng['error']['mydomain'] = '\'Doména\'';
$lng['error']['mydocumentroot'] = '\'Documentroot\'';
$lng['error']['loginnameexists'] = 'Přihlašovací jméno %s již existuje';
$lng['error']['emailiswrong'] = 'Email. adresa %s neplatné znaky nebo není kompletní';
$lng['error']['alternativeemailiswrong'] = 'Zadaná alternativní email. adresa %s k odeslání údajů se zdá být neplatná';
$lng['error']['loginnameiswrong'] = 'Přihlašovací jméno "%s" obsahuje nepovolené znaky.';
$lng['error']['loginnameiswrong2'] = 'Přihlašovací jméno obsahuje příliš mnoho znaků. Jen %s znaky jsou povoleny.';
$lng['error']['userpathcombinationdupe'] = 'Kombinace přihlašovacího jména a cesty již existuje';
$lng['error']['patherror'] = 'Obecná chyba! Cesta nesmí být prázdná';
$lng['error']['errordocpathdupe'] = 'Možnost u cesty %s již existuje';
$lng['error']['adduserfirst'] = 'Nejdřív vytvoř zákazníka, prosím';
$lng['error']['domainalreadyexists'] = 'Doména %s je již přiřazena k zákazníkovi';
$lng['error']['nolanguageselect'] = 'Není vybrán žádný jazyk.';
$lng['error']['nosubjectcreate'] = 'Musíš definovat téma k této emailové šabloně.';
$lng['error']['nomailbodycreate'] = 'Musíš definovat text emailu pro tuto emailovou šablonu.';
$lng['error']['templatenotfound'] = 'Šablona nebyla nalezena.';
$lng['error']['alltemplatesdefined'] = 'Nemůžeš nadefinovat více šablon, všechny jazyky jsou již podporovány.';
$lng['error']['wwwnotallowed'] = 'www není povolena pro subdomény.';
$lng['error']['subdomainiswrong'] = 'Subdoména %s nemůže obsahovat neplatné znaky.';
$lng['error']['domaincantbeempty'] = 'Název domény nemůže být prázdná.';
$lng['error']['domainexistalready'] = 'Doména %s již existuje.';
$lng['error']['domainisaliasorothercustomer'] = 'The selected alias domain is either itself an alias domain, has a different ip/port combination or belongs to another customer.';
$lng['error']['emailexistalready'] = 'Emailová adresa %s již existuje.';
$lng['error']['maindomainnonexist'] = 'Hlavní doména %s neexistuje.';
$lng['error']['destinationnonexist'] = 'Please create your forwarder in the field \'Destination\'.';
$lng['error']['destinationalreadyexistasmail'] = 'The forwarder to %s already exists as active email-address.';
$lng['error']['destinationalreadyexist'] = 'You have already defined a forwarder to "%s"';
$lng['error']['destinationiswrong'] = 'The forwarder %s contains invalid character(s) or is incomplete.';
$lng['error']['backupfoldercannotbedocroot'] = 'The folder for backups cannot be your homedir, please chose a folder within your homedir, e.g. /backups';

/**
 * Questions
 */

$lng['question']['question'] = 'Bezpečnostní otázka';
$lng['question']['admin_customer_reallydelete'] = 'Opravdu chceš smazat zákazníka %s? Tuto akci nelze vrátit zpět!';
$lng['question']['admin_domain_reallydelete'] = 'Opravdu chceš smazat doménu %s?';
$lng['question']['admin_domain_reallydisablesecuritysetting'] = 'Do you really want to disable this security setting OpenBasedir?';
$lng['question']['admin_admin_reallydelete'] = 'Do you really want to delete the admin %s? Every customer and domain will be reassigned to your account.';
$lng['question']['admin_template_reallydelete'] = 'Do you really want to delete the template \'%s\'?';
$lng['question']['domains_reallydelete'] = 'Do you really want to delete the domain %s?';
$lng['question']['email_reallydelete'] = 'Do you really want to delete the email-address %s?';
$lng['question']['email_reallydelete_account'] = 'Do you really want to delete the email-account of %s?';
$lng['question']['email_reallydelete_forwarder'] = 'Do you really want to delete the forwarder %s?';
$lng['question']['extras_reallydelete'] = 'Do you really want to delete the directory protection for %s?';
$lng['question']['extras_reallydelete_pathoptions'] = 'Do you really want to delete the path options for %s?';
$lng['question']['ftp_reallydelete'] = 'Do you really want to delete the FTP-account %s?';
$lng['question']['mysql_reallydelete'] = 'Opravdu chceš smazat databázi %s? Tento krok je nevratný!';
$lng['question']['admin_configs_reallyrebuild'] = 'Do you really want to rebuild all config files?';
$lng['question']['admin_customer_alsoremovefiles'] = 'Smazat i soubory uživatelů?';
$lng['question']['admin_customer_alsoremovemail'] = 'Completely remove email data from filesystem?';
$lng['question']['admin_customer_alsoremoveftphomedir'] = 'Also remove FTP-user homedir?';

/**
 * Mails
 */

$lng['mails']['pop_success']['mailbody'] = 'Hello,\n\nyour mail account {EMAIL}\nwas set up successfully.\n\nThis is an automatically created\ne-mail, please do not answer!\n\nYours sincerely, your administrator';
$lng['mails']['pop_success']['subject'] = 'Emailový účet nastaven úspěšně';
$lng['mails']['createcustomer']['mailbody'] = 'Hello {FIRSTNAME} {NAME},\n\nhere is your account information:\n\nUsername: {USERNAME}\nPassword: {PASSWORD}\n\nThank you,\nyour administrator';
$lng['mails']['createcustomer']['subject'] = 'Informace o účtu';

/**
 * Admin
 */

$lng['admin']['overview'] = 'Přehled';
$lng['admin']['ressourcedetails'] = 'Využité zdroje';
$lng['admin']['systemdetails'] = 'Detaily systému';
$lng['admin']['froxlordetails'] = 'Froxlor detaily';
$lng['admin']['installedversion'] = 'Nainstalovaná verze';
$lng['admin']['latestversion'] = 'Poslední verze';
$lng['admin']['lookfornewversion']['clickhere'] = 'Hledat pomocí webové služby';
$lng['admin']['lookfornewversion']['error'] = 'Chyba při čtení';
$lng['admin']['resources'] = 'Zdroje';
$lng['admin']['customer'] = 'Zákazník';
$lng['admin']['customers'] = 'Zákazníci';
$lng['admin']['customer_add'] = 'Vytvořit zákazníka';
$lng['admin']['customer_edit'] = 'Upravit zákazníka';
$lng['admin']['domains'] = 'Domény';
$lng['admin']['domain_add'] = 'Vytvořit doménu';
$lng['admin']['domain_edit'] = 'Upravit doménu';
$lng['admin']['subdomainforemail'] = 'Subdomény jako emailové domény';
$lng['admin']['admin'] = 'Admin';
$lng['admin']['admins'] = 'Admini';
$lng['admin']['admin_add'] = 'Vytvořit admina';
$lng['admin']['admin_edit'] = 'Upravit admina';
$lng['admin']['customers_see_all'] = 'Může vidět všechny zákazníky?';
$lng['admin']['domains_see_all'] = 'Může vidět všechny domény?';
$lng['admin']['change_serversettings'] = 'Může vidět nastavení serveru?';
$lng['admin']['server'] = 'Systém';
$lng['admin']['serversettings'] = 'Nastavení';
$lng['admin']['rebuildconf'] = 'Znovu setstavit konfigurační soubory';
$lng['admin']['stdsubdomain'] = 'Standartní subdoména';
$lng['admin']['stdsubdomain_add'] = 'Vytvořit standartní subdoménu';
$lng['admin']['phpenabled'] = 'PHP povoleno';
$lng['admin']['deactivated'] = 'Deaktivováno';
$lng['admin']['deactivated_user'] = 'Deaktivovat uživatele';
$lng['admin']['sendpassword'] = 'Odeslat heslo';
$lng['admin']['ownvhostsettings'] = 'Vlastní vHost-nastavení';
$lng['admin']['configfiles']['serverconfiguration'] = 'Konfigurace';
$lng['admin']['templates']['templates'] = 'Email-šablony';
$lng['admin']['templates']['template_add'] = 'Přidat šablonu';
$lng['admin']['templates']['template_edit'] = 'Upravit šablonu';
$lng['admin']['templates']['action'] = 'Akce';
$lng['admin']['templates']['email'] = 'Email & šablony souborů';
$lng['admin']['templates']['subject'] = 'Předmět';
$lng['admin']['templates']['mailbody'] = 'Tělo emailu';
$lng['admin']['templates']['createcustomer'] = 'Uvítací email pro nové zákazníky';
$lng['admin']['templates']['pop_success'] = 'Uvítací email pro nově založene emaily';
$lng['admin']['templates']['template_replace_vars'] = 'Variables to be replaced in the template:';
$lng['admin']['templates']['SALUTATION'] = 'Replaced with a correct salutation (name or company)';
$lng['admin']['templates']['FIRSTNAME'] = 'Replaced with the customer\'s first name.';
$lng['admin']['templates']['NAME'] = 'Nahrazeno jménem zákazníka.';
$lng['admin']['templates']['COMPANY'] = 'Replaces with the customer\'s company name';
$lng['admin']['templates']['USERNAME'] = 'Replaced with the customer\'s account username.';
$lng['admin']['templates']['PASSWORD'] = 'Replaced with the customer\'s account password.';
$lng['admin']['templates']['EMAIL'] = 'Replaced with the address of the POP3/IMAP account.';
$lng['admin']['templates']['CUSTOMER_NO'] = 'Replaces with the customer number';
$lng['admin']['webserver'] = 'Webový server';
$lng['admin']['bindzonewarning'] = $lng['panel']['emptyfordefault'] . '<br /><strong class="red">ATTENTION:</strong> If you use a zonefile you will have to manage all required records for all sub-zones manually as well.';

/**
 * Serversettings
 */

$lng['serversettings']['session_timeout']['title'] = 'Session Timeout';
$lng['serversettings']['session_timeout']['description'] = 'How long does a user have to be inactive before a session gets invalid (seconds)?';
$lng['serversettings']['accountprefix']['title'] = 'Customer prefix';
$lng['serversettings']['accountprefix']['description'] = 'Which prefix should customer accounts have?';
$lng['serversettings']['mysqlprefix']['title'] = 'SQL Prefix';
$lng['serversettings']['mysqlprefix']['description'] = 'Which prefix should MySQL accounts have?</br>Use "RANDOM" as value to get a 3-digit random prefix';
$lng['serversettings']['ftpprefix']['title'] = 'FTP Prefix';
$lng['serversettings']['ftpprefix']['description'] = 'Which prefix should ftp accounts have?<br/><b>If you change this you also have to change the Quota SQL Query in your FTP Server config file in case you use it!</b> ';
$lng['serversettings']['documentroot_prefix']['title'] = 'Domovský adresář';
$lng['serversettings']['documentroot_prefix']['description'] = 'Where should all home directories be stored?';
$lng['serversettings']['logfiles_directory']['title'] = 'Logfiles directory';
$lng['serversettings']['logfiles_directory']['description'] = 'Where should all log files be stored?';
$lng['serversettings']['logfiles_script']['title'] = 'Custom script to pipe log-files to';
$lng['serversettings']['logfiles_script']['description'] = 'You can specify a script here and use the placeholders <strong>{LOGFILE}, {DOMAIN} and {CUSTOMER}</strong> if needed. In case you want to use it you will need to activate the <strong>Pipe webserver logfiles</strong> option too. No prefixed pipe-character is needed.';
$lng['serversettings']['logfiles_format']['title'] = 'Access-log format';
$lng['serversettings']['logfiles_format']['description'] = 'Enter a custom log-format here according to your webservers specifications, leave empty for default. Depending on your format the string must be quoted.<br/>If used with nginx, it will look like <i>log_format frx_custom {CONFIGURED_VALUE}</i>.<br/>If used with Apache, it will look like <i>LogFormat {CONFIGURED_VALUE} frx_custom</i>.<br/><strong>Attention</strong>: The code won\'t be checked for any errors. If it contains errors, webserver might not start again!';
$lng['serversettings']['logfiles_type']['title'] = 'Access-log type';
$lng['serversettings']['logfiles_type']['description'] = 'Choose between <strong>combined</strong> or <strong>vhost_combined</strong> here.';
$lng['serversettings']['logfiles_piped']['title'] = 'Pipe webserver logfiles to specified script (see above)';
$lng['serversettings']['logfiles_piped']['description'] = 'When using a custom script for the logfiles you need to activate this in order for it to be executed';
$lng['serversettings']['ipaddress']['title'] = 'IP-address';
$lng['serversettings']['ipaddress']['description'] = 'What\'s the main IP-address of this server?';
$lng['serversettings']['hostname']['title'] = 'Hostname';
$lng['serversettings']['hostname']['description'] = 'What\'s the Hostname of this server?';
$lng['serversettings']['apachereload_command']['title'] = 'Webserver reload command';
$lng['serversettings']['apachereload_command']['description'] = 'What\'s the webserver command to reload configfiles?';
$lng['serversettings']['bindenable']['title'] = 'Enable Nameserver';
$lng['serversettings']['bindenable']['description'] = 'Here the Nameserver can be enabled and disabled globally.';
$lng['serversettings']['bindconf_directory']['title'] = 'Dns server config directory';
$lng['serversettings']['bindconf_directory']['description'] = 'Where should dns-server config files be saved?';
$lng['serversettings']['bindreload_command']['title'] = 'Příkaz pro znovu načtení DNS serveru';
$lng['serversettings']['bindreload_command']['description'] = 'Jaký je příkaz pro znovu načtení dns serveru?';
$lng['serversettings']['vmail_uid']['title'] = 'Mails-UID';
$lng['serversettings']['vmail_uid']['description'] = 'Jaké uživatelsk=e ID by měly emaily mít?';
$lng['serversettings']['vmail_gid']['title'] = 'Mails-GID';
$lng['serversettings']['vmail_gid']['description'] = 'Jaké skupinové ID by měly emaily mít?';
$lng['serversettings']['vmail_homedir']['title'] = 'Domovská složka pro emaily';
$lng['serversettings']['vmail_homedir']['description'] = 'Kde by všechny emaily měly být uloženy?';
$lng['serversettings']['adminmail']['title'] = 'Odesílatel';
$lng['serversettings']['adminmail']['description'] = 'Jaká je adresa odesílatele na emaily odeslané z panelu?';
$lng['serversettings']['phpmyadmin_url']['title'] = 'phpMyAdmin URL';
$lng['serversettings']['phpmyadmin_url']['description'] = 'Jaké je URL do phpMyAdmin? (musí začínat with http(s)://)';
$lng['serversettings']['webmail_url']['title'] = 'Webový mail URL';
$lng['serversettings']['webmail_url']['description'] = 'Jaké je URL do webového mailu? (musí začínath http(s)://)';
$lng['serversettings']['webftp_url']['title'] = 'WebFTP URL';
$lng['serversettings']['webftp_url']['description'] = 'Jaké je URL do WebFTP? (musí začínat http(s)://)';
$lng['serversettings']['language']['description'] = 'Jaký je tvůj standartní jazyk serveru?';
$lng['serversettings']['maxloginattempts']['title'] = 'Max. pokusů o přihlášení';
$lng['serversettings']['maxloginattempts']['description'] = 'Maximum pokusů o přihlášení do deaktivace účtu.';
$lng['serversettings']['deactivatetime']['title'] = 'Čas deaktivace';
$lng['serversettings']['deactivatetime']['description'] = 'Čas (v sek.) po kterých se účet deaktivuje po několika neúspěšných pokusech o přihlášení.';
$lng['serversettings']['pathedit']['title'] = 'Typ obsahu cesty';
$lng['serversettings']['pathedit']['description'] = 'Měla by cesta být na výběr z rozbalovací nabídky nebo jen zadána do textového pole?';
$lng['serversettings']['nameservers']['title'] = 'Názvy serverů';
$lng['serversettings']['nameservers']['description'] = 'Seznam oddělený čárkami obsahující názvy hostitelů všech jmenných serverů. První bude primární.';
$lng['serversettings']['mxservers']['title'] = 'MX servery';
$lng['serversettings']['mxservers']['description'] = 'Seznam oddělený čárkami obsahující dvojici čísla a jméno hostitele oddělené mezerou (např. \ '10 mx.example.com \ ') obsahující servery mx.';

/**
 * CHANGED BETWEEN 1.2.12 and 1.2.13
 */

$lng['mysql']['description'] = 'Here you can create and change your MySQL-databases.<br />The changes are made instantly and the database can be used immediately.<br />At the menu on the left side you find the tool phpMyAdmin with which you can easily administer your database.<br /><br />To use your databases in your own php-scripts use the following settings: (The data in <i>italics</i> have to be changed into the equivalents you typed in!)<br />Hostname: <b><SQL_HOST></b><br />Username: <b><i>databasename</i></b><br />Password: <b><i>the password you\'ve chosen</i></b><br />Database: <b><i>databasename</i></b>';

/**
 * ADDED BETWEEN 1.2.12 and 1.2.13
 */

$lng['serversettings']['paging']['title'] = 'Entries per page';
$lng['serversettings']['paging']['description'] = 'How many entries shall be shown on one page? (0 = disable paging)';
$lng['error']['ipstillhasdomains'] = 'The IP/Port combination you want to delete still has domains assigned to it, please reassign those to other IP/Port combinations before deleting this IP/Port combination.';
$lng['error']['cantdeletedefaultip'] = 'You cannot delete the default IP/Port combination, please make another IP/Port combination default for before deleting this IP/Port combination.';
$lng['error']['cantdeletesystemip'] = 'You cannot delete the last system IP, either create a new IP/Port combination for the system IP or change the system IP.';
$lng['error']['myipaddress'] = '\'IP\'';
$lng['error']['myport'] = '\'Port\'';
$lng['error']['myipdefault'] = 'You need to select an IP/Port combination that should become default.';
$lng['error']['myipnotdouble'] = 'Tato IP/Port kombinace již existuje.';
$lng['error']['admin_domain_emailsystemhostname'] = 'The server-hostname cannot be used as customer-domain.';
$lng['question']['admin_ip_reallydelete'] = 'Opravdu chceš odebrat IP adresu %s?';
$lng['admin']['ipsandports']['ipsandports'] = 'IPs and Ports';
$lng['admin']['ipsandports']['add'] = 'Přidat IP/Port';
$lng['admin']['ipsandports']['edit'] = 'Upravit IP/Port';
$lng['admin']['ipsandports']['ipandport'] = 'IP/Port';
$lng['admin']['ipsandports']['ip'] = 'IP';
$lng['admin']['ipsandports']['ipnote'] = '<div id="ipnote" class="red">Note: Although private ip addresses are allowed, some features like DNS might not behave correctly.<br>Only use private ip addresses if you are sure.</div>';
$lng['admin']['ipsandports']['port'] = 'Port';

// ADDED IN 1.2.13-rc3

$lng['error']['cantchangesystemip'] = 'You cannot change the last system IP, either create another new IP/Port combination for the system IP or change the system IP.';
$lng['question']['admin_domain_reallydocrootoutofcustomerroot'] = 'Are you sure, you want the document root for this domain, not being within the customer root of the customer?';

// ADDED IN 1.2.14-rc1

$lng['admin']['memorylimitdisabled'] = 'Vypnuto';
$lng['domain']['openbasedirpath'] = 'OpenBasedir-cesta';
$lng['domain']['docroot'] = 'Path from field above';
$lng['domain']['homedir'] = 'Domovský adresář';
$lng['admin']['valuemandatory'] = 'Tato hodnota je důležitá';
$lng['admin']['valuemandatorycompany'] = 'Either "name" and "firstname" or "company" must be filled';
$lng['menue']['main']['username'] = 'Přihlášen/a jako: ';
$lng['panel']['urloverridespath'] = 'URL (overrides path)';
$lng['panel']['pathorurl'] = 'Cesta nebo URL';
$lng['error']['sessiontimeoutiswrong'] = 'Only numerical "session timeout" is allowed.';
$lng['error']['maxloginattemptsiswrong'] = 'Only numerical "max login attempts" are allowed.';
$lng['error']['deactivatetimiswrong'] = 'Only numerical "deactivation time" is allowed.';
$lng['error']['accountprefixiswrong'] = 'The "customerprefix" is wrong.';
$lng['error']['mysqlprefixiswrong'] = 'The "SQL prefix" is wrong.';
$lng['error']['ftpprefixiswrong'] = 'The "FTP prefix" is wrong.';
$lng['error']['ipiswrong'] = 'The "IP-address" is wrong. Only a valid IP-address is allowed.';
$lng['error']['vmailuidiswrong'] = 'The "mails-uid" is wrong. Only a numerical UID is allowed.';
$lng['error']['vmailgidiswrong'] = 'The "mails-gid" is wrong. Only a numerical GID is allowed.';
$lng['error']['adminmailiswrong'] = 'The "sender-address" is wrong. Only a valid email-address is allowed.';
$lng['error']['pagingiswrong'] = 'The "entries per page"-value is wrong. Only numerical characters are allowed.';
$lng['error']['phpmyadminiswrong'] = 'The phpMyAdmin-link is not a valid link.';
$lng['error']['webmailiswrong'] = 'The webmail-link is not a valid link.';
$lng['error']['webftpiswrong'] = 'The WebFTP-link is not a valid link.';
$lng['domains']['hasaliasdomains'] = 'Has alias domain(s)';
$lng['serversettings']['defaultip']['title'] = 'Výchozí IP/Port';
$lng['serversettings']['defaultip']['description'] = 'Select all IP-addresses you want to use as default for new domains';
$lng['serversettings']['defaultsslip']['title'] = 'Výchozí SSL IP/Port';
$lng['serversettings']['defaultsslip']['description'] = 'Select all ssl-enabled IP-addresses you want to use as default for new domains';
$lng['domains']['statstics'] = 'Statistiky využití';
$lng['panel']['ascending'] = 'vzestupně';
$lng['panel']['descending'] = 'sestupně';
$lng['panel']['search'] = 'Hledat';
$lng['panel']['used'] = 'použito';

// ADDED IN 1.2.14-rc3

$lng['panel']['translator'] = 'Překladač';

// ADDED IN 1.2.14-rc4

$lng['error']['stringformaterror'] = 'Hodnota pro pole "%s" není v očekávaném formátu.';

// ADDED IN 1.2.15-rc1

$lng['admin']['serversoftware'] = 'Serversoftware';
$lng['admin']['phpversion'] = 'PHP-Verze';
$lng['admin']['mysqlserverversion'] = 'MySQL verze serveru';
$lng['admin']['webserverinterface'] = 'Rozhraní webového serveru';
$lng['domains']['isassigneddomain'] = 'Je přiřazenou doménou';
$lng['serversettings']['phpappendopenbasedir']['title'] = 'Paths to append to OpenBasedir';
$lng['serversettings']['phpappendopenbasedir']['description'] = 'These paths (separated by colons) will be added to the OpenBasedir-statement in every vHost-container.';

// CHANGED IN 1.2.15-rc1

$lng['error']['loginnameissystemaccount'] = 'You cannot create accounts which are similar to system accounts (as for example begin with "%s"). Please enter another account name.';
$lng['error']['youcantdeleteyourself'] = 'Z bezpečnostních důvodů nemůžeš smazat sám sebe.';
$lng['error']['youcanteditallfieldsofyourself'] = 'POZNÁMKA: Nemůžeš upravit všechna pole tvého vlastního účtu kvůli bezpečnosti.';

// ADDED IN 1.2.16-svn1

$lng['serversettings']['natsorting']['title'] = 'Use natural human sorting in list view';
$lng['serversettings']['natsorting']['description'] = 'Sorts lists as web1 -> web2 -> web11 instead of web1 -> web11 -> web2.';

// ADDED IN 1.2.16-svn2

$lng['serversettings']['deactivateddocroot']['title'] = 'Docroot pro deaktivované uživatele';
$lng['serversettings']['deactivateddocroot']['description'] = 'When a user is deactivated this path is used as his docroot. Leave empty for not creating a vHost at all.';

// ADDED IN 1.2.16-svn4

$lng['panel']['reset'] = 'Zahodit změny';
$lng['admin']['accountsettings'] = 'Nastavení účtu';
$lng['admin']['panelsettings'] = 'Nastavení panelu';
$lng['admin']['systemsettings'] = 'Nastavení systému';
$lng['admin']['webserversettings'] = 'Nastavení webového serveru';
$lng['admin']['mailserversettings'] = 'Nastavení mailového serveru';
$lng['admin']['nameserversettings'] = 'Nameserver settings';
$lng['admin']['updatecounters'] = 'Přepočítat využití zdrojů';
$lng['question']['admin_counters_reallyupdate'] = 'Opravdu chceš přepočítat využití zdrojů?';
$lng['panel']['pathDescription'] = 'Pokud adresář neexistuje, bude automaticky vytvořen.';
$lng['panel']['pathDescriptionEx'] = '<br /><br />If you want a redirect to another domain than this entry has to start with http:// or https://.';
$lng['panel']['pathDescriptionSubdomain'] = $lng['panel']['pathDescription'] . $lng['panel']['pathDescriptionEx'] . "<br /><br />If the URL ends with / it is considered a folder, if not, it is treated as file.";

// ADDED IN 1.2.16-svn6

$lng['admin']['templates']['TRAFFIC'] = 'Replaced with the traffic in MB, which was assigned to the customer.';
$lng['admin']['templates']['TRAFFICUSED'] = 'Replaced with the traffic in MB, which was exhausted by the customer.';

// ADDED IN 1.2.16-svn7

$lng['admin']['subcanemaildomain']['never'] = 'Nikdy';
$lng['admin']['subcanemaildomain']['choosableno'] = 'Volitelné, výchozí ne';
$lng['admin']['subcanemaildomain']['choosableyes'] = 'Volitelné, výchozí ano';
$lng['admin']['subcanemaildomain']['always'] = 'Vždy';
$lng['changepassword']['also_change_stats'] = ' také změní heslo na stránku k statistikám';

// ADDED IN 1.2.16-svn8

$lng['serversettings']['mailpwcleartext']['title'] = 'Také ukládat hesla emailů nezašifrované v databázi';
$lng['serversettings']['mailpwcleartext']['description'] = 'If this is set to yes, all passwords will also be saved unencrypted (clear text, plain readable for everyone with database access) in the mail_users-table. Only activate this if you intend to use SASL!';
$lng['admin']['wipecleartextmailpwd'] = 'Clear plaintext passwords';
$lng['question']['admin_cleartextmailpws_reallywipe'] = 'Do you really want to wipe all unencrypted mail account passwords from the table mail_users? This cannot be reverted! The setting to store email passwords unencrypted will also be set to OFF';
$lng['admin']['configfiles']['overview'] = 'Přehled';
$lng['admin']['configfiles']['wizard'] = 'Průvodce';
$lng['admin']['configfiles']['distribution'] = 'Distribuce';
$lng['admin']['configfiles']['service'] = 'Služba';
$lng['admin']['configfiles']['daemon'] = 'Daemon';
$lng['admin']['configfiles']['http'] = 'Webserver (HTTP)';
$lng['admin']['configfiles']['dns'] = 'Nameserver (DNS)';
$lng['admin']['configfiles']['mail'] = 'Mailserver (IMAP/POP3)';
$lng['admin']['configfiles']['smtp'] = 'Mailserver (SMTP)';
$lng['admin']['configfiles']['ftp'] = 'FTP-server';
$lng['admin']['configfiles']['etc'] = 'Ostatní (System)';
$lng['admin']['configfiles']['choosedistribution'] = '-- Vyber distribuci --';
$lng['admin']['configfiles']['chooseservice'] = '-- Vyber službu --';
$lng['admin']['configfiles']['choosedaemon'] = '-- Choose a daemon --';

// ADDED IN 1.2.16-svn10

$lng['serversettings']['ftpdomain']['title'] = 'FTP účty @domain';
$lng['serversettings']['ftpdomain']['description'] = 'Zákazníci mohou vytvářet FTP účty user@customerdomain?';
$lng['panel']['back'] = 'Zpět';

// ADDED IN 1.2.16-svn12

$lng['serversettings']['mod_fcgid']['title'] = 'Povolit FCGID';
$lng['serversettings']['mod_fcgid']['description'] = 'Use this to run PHP with the corresponding user account.<br /><br /><b>This needs a special webserver configuration for Apache, see <a target="blank" href="https://github.com/Froxlor/Froxlor/wiki/apache2-with-fcgid">FCGID - handbook</a></b>';
$lng['serversettings']['sendalternativemail']['title'] = 'Use alternative email-address';
$lng['serversettings']['sendalternativemail']['description'] = 'Send the password-email to a different address during email-account-creation';
$lng['emails']['alternative_emailaddress'] = 'Alternativní emailová adresa';
$lng['mails']['pop_success_alternative']['mailbody'] = 'Hello,\n\nyour Mail account {EMAIL}\nwas set up successfully.\nYour password is {PASSWORD}.\n\nThis is an automatically created\ne-mail, please do not answer!\n\nYours sincerely, your administrator';
$lng['mails']['pop_success_alternative']['subject'] = 'Mail account set up successfully';
$lng['admin']['templates']['pop_success_alternative'] = 'Welcome mail for new email accounts sent to alternative address';
$lng['admin']['templates']['EMAIL_PASSWORD'] = 'Nahrazeno POP3/IMAP heslem účtu.';

// ADDED IN 1.2.16-svn13

$lng['error']['documentrootexists'] = 'Adresář "%s" pro tohoto zázaníka již existuje. Odeber to před znovu přidáním tohoto zákazníka.';

// ADDED IN 1.2.16-svn14

$lng['serversettings']['apacheconf_vhost']['title'] = 'Webserver vHost configuration file/dirname';
$lng['serversettings']['apacheconf_vhost']['description'] = 'Where should the vHost configuration be stored? You could either specify a file (all vHosts in one file) or directory (each vHost in his own file) here.';
$lng['serversettings']['apacheconf_diroptions']['title'] = 'Webserver diroptions configuration file/dirname';
$lng['serversettings']['apacheconf_diroptions']['description'] = 'Where should the diroptions configuration be stored? You could either specify a file (all diroptions in one file) or directory (each diroption in his own file) here.';
$lng['serversettings']['apacheconf_htpasswddir']['title'] = 'Webserver htpasswd dirname';
$lng['serversettings']['apacheconf_htpasswddir']['description'] = 'Where should the htpasswd files for directory protection be stored?';

// ADDED IN 1.2.16-svn15

$lng['error']['formtokencompromised'] = 'The request seems to be compromised. For security reasons you were logged out.';
$lng['serversettings']['mysql_access_host']['title'] = 'MySQL-Access-Hosts';
$lng['serversettings']['mysql_access_host']['description'] = 'A comma separated list of hosts from which users should be allowed to connect to the MySQL-Server. To allow a subnet the netmask or cidr syntax is valid.';

// ADDED IN 1.2.18-svn1

$lng['admin']['ipsandports']['create_listen_statement'] = 'Create Listen statement';
$lng['admin']['ipsandports']['create_namevirtualhost_statement'] = 'Create NameVirtualHost statement';
$lng['admin']['ipsandports']['create_vhostcontainer'] = 'Create vHost-Container';
$lng['admin']['ipsandports']['create_vhostcontainer_servername_statement'] = 'Create ServerName statement in vHost-Container';

// ADDED IN 1.2.18-svn2

$lng['admin']['webalizersettings'] = 'Webalizer nastavení';
$lng['admin']['webalizer']['normal'] = 'Normální';
$lng['admin']['webalizer']['quiet'] = 'Tiché';
$lng['admin']['webalizer']['veryquiet'] = 'Bez výstupu';
$lng['serversettings']['webalizer_quiet']['title'] = 'Webalizer výstup';
$lng['serversettings']['webalizer_quiet']['description'] = 'Verbosity of the webalizer-program';

// ADDED IN 1.2.18-svn4

$lng['admin']['domain_nocustomeraddingavailable'] = 'Momentálně není možné přidat doménu. Nejdříve musíš přidat alespoň jednoho zákazníka.';
$lng['error']['norepymailiswrong'] = 'The "Noreply-address" is wrong. Only a valid email-address is allowed.';

// ADDED IN 1.2.19-svn1

$lng['serversettings']['mod_fcgid']['configdir']['title'] = 'Konfigurace adresářů';
$lng['serversettings']['mod_fcgid']['configdir']['description'] = 'Kde by fcgid-konfigurační soubory měly být uloženy? Pokud nepoužíváš vlastně kompilovanou suexec knihovnu, tak tato cesta musí být pod /var/www/<br /><br /><div class="red">POZNÁMKA: Obsah této složky se pravidělně promazává, takže se vyhýbej manuálnímu uklání dat zde.</div>';
$lng['serversettings']['mod_fcgid']['tmpdir']['title'] = 'Dočasný adresář';

// ADDED IN 1.2.19-svn4

$lng['menue']['traffic']['traffic'] = 'Provoz';
$lng['menue']['traffic']['current'] = 'Momentální měsíc';
$lng['traffic']['month'] = "Měsíc";
$lng['traffic']['day'] = "Den";
$lng['traffic']['months'][1] = "Leden";
$lng['traffic']['months'][2] = "Únor";
$lng['traffic']['months'][3] = "Březen";
$lng['traffic']['months'][4] = "Duben";
$lng['traffic']['months'][5] = "Květen";
$lng['traffic']['months'][6] = "Červen";
$lng['traffic']['months'][7] = "Červenec";
$lng['traffic']['months'][8] = "Srpen";
$lng['traffic']['months'][9] = "Září";
$lng['traffic']['months'][10] = "Říjen";
$lng['traffic']['months'][11] = "Listopad";
$lng['traffic']['months'][12] = "Prosinec";
$lng['traffic']['mb'] = "Provoz (MiB)";
$lng['traffic']['distribution'] = '<font color="#019522">FTP</font> | <font color="#0000FF">HTTP</font> | <font color="#800000">Mail</font>';
$lng['traffic']['sumhttp'] = 'Celkový HTTP-Provoz';
$lng['traffic']['sumftp'] = 'Celkový FTP-Provoz';
$lng['traffic']['summail'] = 'Celkový Mail-Provoz';

// ADDED IN 1.2.19-svn6

$lng['admin']['loggersettings'] = 'Log nastavení';
$lng['serversettings']['logger']['enable'] = 'Logging zapnuto/vypnuto';
$lng['serversettings']['logger']['severity'] = 'Logging úroveň';
$lng['admin']['logger']['normal'] = 'normální';
$lng['admin']['logger']['paranoid'] = 'paranoidní';
$lng['serversettings']['logger']['types']['title'] = 'Log-type(s)';
$lng['serversettings']['logger']['types']['description'] = 'Specify logtypes. To select multiple types, hold down CTRL while selecting.<br />Available logtypes are: syslog, file, mysql';
$lng['serversettings']['logger']['logfile'] = 'Logfile path including filename';
$lng['error']['logerror'] = 'Log-Chyba: %s';
$lng['serversettings']['logger']['logcron'] = 'Log cronjobs';
$lng['serversettings']['logger']['logcronoption']['never'] = 'Nikdy';
$lng['serversettings']['logger']['logcronoption']['once'] = 'Jednou';
$lng['serversettings']['logger']['logcronoption']['always'] = 'Vždy';
$lng['question']['logger_reallytruncate'] = 'Do you really want to truncate the table "%s"?';
$lng['admin']['loggersystem'] = 'Systémový log';
$lng['logger']['date'] = 'Datum';
$lng['logger']['type'] = 'Typ';
$lng['logger']['action'] = 'Akce';
$lng['logger']['user'] = 'Uživatel';
$lng['logger']['truncate'] = 'Prázdný log';

// ADDED IN 1.2.19-svn7

$lng['serversettings']['ssl']['use_ssl']['title'] = 'Povolit SSL využití';
$lng['serversettings']['ssl']['use_ssl']['description'] = 'Tohle zaškrtni, pokud chceš používat SSL pro tvůj webový server';
$lng['serversettings']['ssl']['ssl_cert_file']['title'] = 'Cesta k SSL certifikátu';
$lng['serversettings']['ssl']['ssl_cert_file']['description'] = 'Specifikujte cestu k souboru obsahující v názvu .crt nebo .pem koncovku (hlavní certifikát)';
$lng['serversettings']['ssl']['openssl_cnf'] = 'Výchozí nastavení pro tvorbu Cert souboru';
$lng['panel']['reseller'] = 'prodejce';
$lng['panel']['admin'] = 'admin';
$lng['panel']['customer'] = 'zákazník/ci';
$lng['error']['nomessagetosend'] = 'Nezadal/a jsi zprávu.';
$lng['error']['norecipientsgiven'] = 'Nespecifikoval/a jsi žádného příjemce';
$lng['admin']['emaildomain'] = 'Emailová doména';
$lng['admin']['email_only'] = 'Jen email?';
$lng['admin']['wwwserveralias'] = 'Přidat "www." ServerAlias';
$lng['admin']['ipsandports']['enable_ssl'] = 'Je tohle SSL port?';
$lng['admin']['ipsandports']['ssl_cert_file'] = 'Cesta k SSL certifikátu';
$lng['panel']['send'] = 'odeslat';
$lng['admin']['subject'] = 'Předmět';
$lng['admin']['recipient'] = 'Příjemce';
$lng['admin']['message'] = 'Napsat zprávu';
$lng['admin']['text'] = 'Zpráva';
$lng['menu']['message'] = 'Zprávy';
$lng['error']['errorsendingmail'] = 'Zpráva uživateli "%s" selhala';
$lng['error']['cannotreaddir'] = 'Nelze přečíst adresář "%s"';
$lng['message']['success'] = 'Zpráva úspěšně odeslána %s příjemcům,';
$lng['message']['norecipients'] = 'Email nebyl odeslán, protože databáze neobsahuje žádné příjemce';
$lng['admin']['sslsettings'] = 'SSL nastavení';
$lng['cronjobs']['notyetrun'] = 'Ještě nespuštěno';
$lng['serversettings']['default_vhostconf']['title'] = 'Výchozí vHost-nastavení';
$lng['admin']['specialsettings_replacements'] = "You can use the following variables:<br/><code>{DOMAIN}</code>, <code>{DOCROOT}</code>, <code>{CUSTOMER}</code>, <code>{IP}</code>, <code>{PORT}</code>, <code>{SCHEME}</code><br/>";
$lng['serversettings']['default_vhostconf']['description'] = 'The content of this field will be included into this ip/port vHost container directly. ' . $lng['admin']['specialsettings_replacements'] . ' Attention: The code won\'t be checked for any errors. If it contains errors, webserver might not start again!';
$lng['serversettings']['apache_globaldiropt']['title'] = 'Directory options for customer-prefix';
$lng['serversettings']['apache_globaldiropt']['description'] = 'The content of this field will be included into the 05_froxlor_dirfix_nofcgid.conf apache config. If empty, the default value is used:<br><br>apache >=2.4<br><code>Require all granted<br>AllowOverride All</code><br><br>apache <=2.2<br><code>Order allow,deny<br>allow from all</code>';
$lng['serversettings']['default_vhostconf_domain']['description'] = 'The content of this field will be included into the domain vHost container directly. ' . $lng['admin']['specialsettings_replacements'] . ' Attention: The code won\'t be checked for any errors. If it contains errors, webserver might not start again!';
$lng['error']['invalidip'] = 'Neplatná IP adresa: %s';
$lng['serversettings']['decimal_places'] = 'Number of decimal places in traffic/webspace output';

// ADDED IN 1.2.19-svn8

$lng['admin']['dkimsettings'] = 'DomainKey nastavení';
$lng['dkim']['dkim_prefix']['title'] = 'Prefix';
$lng['dkim']['dkim_prefix']['description'] = 'Please specify the path to the DKIM RSA-files as well as to the configuration files for the Milter-plugin';
$lng['dkim']['dkim_domains']['title'] = 'Domains filename';
$lng['dkim']['dkim_domains']['description'] = '<em>Filename</em> of the DKIM Domains parameter specified in the dkim-milter configuration';
$lng['dkim']['dkim_dkimkeys']['title'] = 'KeyList filename';
$lng['dkim']['dkim_dkimkeys']['description'] = '<em>Filename</em> of the  DKIM KeyList parameter specified in the dkim-milter configuration';
$lng['dkim']['dkimrestart_command']['title'] = 'Milter restart command';
$lng['dkim']['dkimrestart_command']['description'] = 'Please specify the restart command for the DKIM milter service';

// ADDED IN 1.2.19-svn9

$lng['admin']['caneditphpsettings'] = 'Může změnit doménové nastavení spojené s php?';

// ADDED IN 1.2.19-svn12

$lng['admin']['allips'] = 'Všechny IP';
$lng['panel']['nosslipsavailable'] = 'Momentálně zde nejsou žádné ssl ip/port kombinace pro tento server';
$lng['dkim']['use_dkim']['title'] = 'Aktivovat DKIM podporu?';
$lng['dkim']['use_dkim']['description'] = 'Would you like to use the Domain Keys (DKIM) system?<br/><em class="red">Note: DKIM is only supported using dkim-filter, not opendkim (yet)</em>';
$lng['error']['invalidmysqlhost'] = 'Invalid MySQL host address: %s';
$lng['error']['cannotuseawstatsandwebalizeratonetime'] = 'You cannot enable Webalizer and AWstats at the same time, please chose one of them';
$lng['serversettings']['webalizer_enabled'] = 'Povolit webalizer statistiky';
$lng['serversettings']['awstats_enabled'] = 'Povolit AWstats statistiky';
$lng['admin']['awstatssettings'] = 'AWstats nastavení';

// ADDED IN 1.2.19-svn16

$lng['admin']['domain_dns_settings'] = 'DNS nastavení domény';
$lng['dns']['destinationip'] = 'Domain IP(s)';
$lng['dns']['standardip'] = 'Server standard IP';
$lng['dns']['a_record'] = 'A-Záznam (IPv6 volitelný)';
$lng['dns']['cname_record'] = 'CNAME-Záznam';
$lng['dns']['mxrecords'] = 'Definovat MX záznamy';
$lng['dns']['standardmx'] = 'Server standard MX record';
$lng['dns']['mxconfig'] = 'Vlastní MX záznamy';
$lng['dns']['priority10'] = 'Priorita 10';
$lng['dns']['priority20'] = 'Priorita 20';
$lng['dns']['txtrecords'] = 'Definovat TXT záznamy';
$lng['dns']['txtexample'] = 'Example (SPF-entry):<br />v=spf1 ip4:xxx.xxx.xx.0/23 -all';
$lng['serversettings']['selfdns']['title'] = 'Customer domain dns settings';
$lng['serversettings']['selfdnscustomer']['title'] = 'Povolit zákazníkům upravovat dns nastavení domén';
$lng['admin']['activated'] = 'Aktivováno';
$lng['admin']['statisticsettings'] = 'Nastavení statistik';
$lng['admin']['or'] = 'or';

// ADDED IN 1.2.19-svn17

$lng['serversettings']['unix_names']['title'] = 'Použít kompatibilní přezdívky s UNIX ';
$lng['serversettings']['unix_names']['description'] = 'Allows you to use <strong>-</strong> and <strong>_</strong> in usernames if <strong>No</strong>';
$lng['error']['cannotwritetologfile'] = 'Nelze otevřít log soubor %s pro zápis';
$lng['admin']['sysload'] = 'Systémové zatížení';
$lng['admin']['noloadavailable'] = 'nedostupné';
$lng['admin']['nouptimeavailable'] = 'nedostupné';
$lng['panel']['backtooverview'] = 'Zpět na přehled';
$lng['admin']['nosubject'] = '(Bez předmětu)';
$lng['admin']['configfiles']['statistics'] = 'Statistics';
$lng['login']['forgotpwd'] = 'Zapomněl jsi heslo?';
$lng['login']['presend'] = 'Resetovat heslo';
$lng['login']['email'] = 'Emailová addresa';
$lng['login']['remind'] = 'Resetovat mé heslo';
$lng['login']['usernotfound'] = 'Uživatel nenalezen!';
$lng['mails']['password_reset']['subject'] = 'Resetovat heslo';
$lng['mails']['password_reset']['mailbody'] = 'Hello {SALUTATION},\n\nhere is your link for setting a new password. This link is valid for the next 24 hours.\n\n{LINK}\n\nThank you,\nyour administrator';
$lng['pwdreminder']['success'] = 'Žádost o reset hesla úspěšně odeslána. Následuj prosím instrukce v emailu, který jsi obdržel/a.';

// ADDED IN 1.2.19-svn18

$lng['serversettings']['allow_password_reset']['title'] = 'Povolit resetování hesla pro zákazníky';
$lng['pwdreminder']['notallowed'] = 'Resetování hesla je vypnuto';

// ADDED IN 1.2.19-svn21

$lng['customer']['title'] = 'Oslovení';
$lng['customer']['country'] = 'Země';
$lng['panel']['dateformat'] = 'RRRR-MM-DD';
$lng['panel']['dateformat_function'] = 'R-m-d';

// Y = Year, m = Month, d = Day

$lng['panel']['timeformat_function'] = 'H:i:s';

// H = Hour, i = Minute, s = Second

$lng['panel']['default'] = 'Výchozí';
$lng['panel']['never'] = 'Nikdy';
$lng['panel']['active'] = 'Aktivní';
$lng['panel']['please_choose'] = 'Zvol prosím';
$lng['panel']['allow_modifications'] = 'Povolit modifikace';
$lng['domains']['add_date'] = 'Added to Froxlor';
$lng['domains']['registration_date'] = 'Přidáno do registru';
$lng['domains']['topleveldomain'] = 'Top-Level-Domain';

// ADDED IN 1.2.19-svn22

$lng['serversettings']['allow_password_reset']['description'] = 'Customers can reset their password and an activation link will be sent to their e-mail address';
$lng['serversettings']['allow_password_reset_admin']['title'] = 'Povolit reset hesla pro adminy';
$lng['serversettings']['allow_password_reset_admin']['description'] = 'Admins/reseller can reset their password and an activation link will be sent to their e-mail address';

// ADDED IN 1.2.19-svn25

$lng['emails']['quota'] = 'Kvóta';
$lng['emails']['noquota'] = 'Bez kvóty';
$lng['emails']['updatequota'] = 'Aktualizovat kvótu';
$lng['serversettings']['mail_quota']['title'] = 'Mailbox-quota';
$lng['serversettings']['mail_quota']['description'] = 'The default quota for a new created mailboxes (MegaByte).';
$lng['serversettings']['mail_quota_enabled']['title'] = 'Use mailbox-quota for customers';
$lng['serversettings']['mail_quota_enabled']['description'] = 'Activate to use quotas on mailboxes. Default is <b>No</b> since this requires a special setup.';
$lng['serversettings']['mail_quota_enabled']['removelink'] = 'Click here to wipe all quotas for mail accounts.';
$lng['serversettings']['mail_quota_enabled']['enforcelink'] = 'Click here to enforce default quota to all User mail accounts.';
$lng['question']['admin_quotas_reallywipe'] = 'Do you really want to wipe all quotas on table mail_users? This cannot be reverted!';
$lng['question']['admin_quotas_reallyenforce'] = 'Do you really want to enforce the default quota to all Users? This cannot be reverted!';
$lng['error']['vmailquotawrong'] = 'The quotasize must be positive number.';
$lng['customer']['email_quota'] = 'E-mail quota (MiB)';
$lng['customer']['email_imap'] = 'E-mail IMAP';
$lng['customer']['email_pop3'] = 'E-mail POP3';
$lng['customer']['mail_quota'] = 'Mailquota';
$lng['panel']['megabyte'] = 'MegaByte';
$lng['panel']['not_supported'] = 'Nepodporováno v: ';
$lng['emails']['quota_edit'] = 'Change E-Mail Quota';
$lng['error']['allocatetoomuchquota'] = 'You tried to allocate %s MB Quota, but you do not have enough left.';

$lng['error']['missingfields'] = 'Not all required fields were filled out.';
$lng['error']['accountnotexisting'] = 'The given email account doesn\'t exist.';
$lng['admin']['security_settings'] = 'Security Options';
$lng['admin']['know_what_youre_doing'] = 'Change only, if you know what you\'re doing!';
$lng['admin']['show_version_login']['title'] = 'Show Froxlor version on login';
$lng['admin']['show_version_login']['description'] = 'Show the Froxlor version in the footer on the login page';
$lng['admin']['show_version_footer']['title'] = 'Show Froxlor version in footer';
$lng['admin']['show_version_footer']['description'] = 'Show the Froxlor version in the footer on the rest of the pages';
$lng['admin']['froxlor_graphic']['title'] = 'Header graphic for Froxlor';
$lng['admin']['froxlor_graphic']['description'] = 'What graphic should be shown in the header';

// improved froxlor

$lng['menue']['phpsettings']['maintitle'] = 'PHP konfigurace';
$lng['admin']['phpsettings']['title'] = 'PHP konfigurace';
$lng['admin']['phpsettings']['description'] = 'Krátký popis';
$lng['admin']['phpsettings']['actions'] = 'Akce';
$lng['admin']['phpsettings']['activedomains'] = 'In use for domain(s)';
$lng['admin']['phpsettings']['notused'] = 'Configuration not in use';
$lng['admin']['misc'] = 'Miscellaneous';
$lng['admin']['phpsettings']['editsettings'] = 'Změnit PHP nastavení';
$lng['admin']['phpsettings']['addsettings'] = 'Vytvořit nové PHP nastavení';
$lng['admin']['phpsettings']['viewsettings'] = 'Zobrazit PHP nastavení';
$lng['admin']['phpsettings']['phpinisettings'] = 'php.ini nastavení';
$lng['error']['nopermissionsorinvalidid'] = 'You don\'t have enough permissions to change these settings or an invalid id was given.';
$lng['panel']['view'] = 'view';
$lng['question']['phpsetting_reallydelete'] = 'Do you really want to delete these settings? All domains which use these settings currently will be changed to the default config.';
$lng['question']['fpmsetting_reallydelete'] = 'Do you really want to delete these php-fpm settings? All php configurations which use these settings currently will be changed to the default config.';
$lng['admin']['phpsettings']['addnew'] = 'Vytvořit novou PHP konfiguraci';
$lng['admin']['fpmsettings']['addnew'] = 'Vytvořit novou PHP verzi';
$lng['error']['phpsettingidwrong'] = 'Konfigurace s tímto ID neexistuje';
$lng['error']['descriptioninvalid'] = 'Popis je moc krátký, dlouhý nebo obsahuje nepovolené znaky.';
$lng['error']['info'] = 'Info';
$lng['admin']['phpconfig']['template_replace_vars'] = 'Variables that will be replaced in the configs';
$lng['admin']['phpconfig']['pear_dir'] = 'Will be replaced with the global setting for the pear directory.';
$lng['admin']['phpconfig']['open_basedir_c'] = 'Will insert a ; (semicolon) to comment-out/disable open_basedir when set';
$lng['admin']['phpconfig']['open_basedir'] = 'Will be replaced with the open_basedir setting of the domain.';
$lng['admin']['phpconfig']['tmp_dir'] = 'Will be replaced with the temporary directory of the domain.';
$lng['admin']['phpconfig']['open_basedir_global'] = 'Will be replaced with the global value of the path which will be attached to the open_basedir.';
$lng['admin']['phpconfig']['customer_email'] = 'Will be replaced with the e-mail address of the customer who owns this domain.';
$lng['admin']['phpconfig']['admin_email'] = 'Will be replaced with e-mail address of the admin who owns this domain.';
$lng['admin']['phpconfig']['domain'] = 'Will be replaced with the domain.';
$lng['admin']['phpconfig']['customer'] = 'Will be replaced with the loginname of the customer who owns this domain.';
$lng['admin']['phpconfig']['admin'] = 'Will be replaced with the loginname of the admin who owns this domain.';
$lng['admin']['phpconfig']['docroot'] = 'Will be replaced with the domain\'s document-root.';
$lng['admin']['phpconfig']['homedir'] = 'Will be replaced with the customer\'s home-directory.';
$lng['login']['backtologin'] = 'Back to login';
$lng['serversettings']['mod_fcgid']['starter']['title'] = 'Processes per domain';
$lng['serversettings']['mod_fcgid']['starter']['description'] = 'How many processes should be started/allowed per domain? The value 0 is recommended cause PHP will then manage the amount of processes itself very efficiently.';
$lng['serversettings']['mod_fcgid']['wrapper']['title'] = 'Wrapper in Vhosts';
$lng['serversettings']['mod_fcgid']['wrapper']['description'] = 'How should the wrapper be included in the Vhosts';
$lng['serversettings']['mod_fcgid']['tmpdir']['description'] = 'Where should the temp directories be stored';
$lng['serversettings']['mod_fcgid']['peardir']['title'] = 'Global PEAR directories';
$lng['serversettings']['mod_fcgid']['peardir']['description'] = 'Which global PEAR directories should be replaced in every php.ini config? Different directories must be separated by a colon.';

// improved Froxlor 2

$lng['admin']['templates']['index_html'] = 'index file for newly created customer directories';
$lng['admin']['templates']['SERVERNAME'] = 'Replaced with the servername.';
$lng['admin']['templates']['CUSTOMER'] = 'Replaced with the loginname of the customer.';
$lng['admin']['templates']['ADMIN'] = 'Replaced with the loginname of the admin.';
$lng['admin']['templates']['CUSTOMER_EMAIL'] = 'Replaced with the e-mail address of the customer.';
$lng['admin']['templates']['ADMIN_EMAIL'] = 'Replaced with the e-mail address of the admin.';
$lng['admin']['templates']['filetemplates'] = 'File templates';
$lng['admin']['templates']['filecontent'] = 'Öbsah souboru';
$lng['error']['filecontentnotset'] = 'Soubor nemůže být prázdný!';
$lng['serversettings']['index_file_extension']['description'] = 'Which file extension should be used for the index file in newly created customer directories? This file extension will be used, if you or one of your admins has created its own index file template.';
$lng['serversettings']['index_file_extension']['title'] = 'File extension for index file in newly created customer directories';
$lng['error']['index_file_extension'] = 'The file extension for the index file must be between 1 and 6 characters long. The extension can only contain characters like a-z, A-Z and 0-9';
$lng['admin']['expert_settings'] = 'Expertní nastavení!';
$lng['admin']['mod_fcgid_starter']['title'] = 'PHP Processes for this domain (empty for default value)';

$lng['error']['customerdoesntexist'] = 'Zvolený zákazník neexistuje.';
$lng['error']['admindoesntexist'] = 'Zvolený administrátor neexistuje.';

// ADDED IN 1.2.19-svn37

$lng['serversettings']['session_allow_multiple_login']['title'] = 'Allow multiple login';
$lng['serversettings']['session_allow_multiple_login']['description'] = 'If activated a user could login multiple times.';
$lng['serversettings']['panel_allow_domain_change_admin']['title'] = 'Allow moving domains between admins';
$lng['serversettings']['panel_allow_domain_change_admin']['description'] = 'If activated you can change the admin of a domain at domainsettings.<br /><b>Attention:</b> If a customer isn\'t assigned to the same admin as the domain, the admin can see every other domain of that customer!';
$lng['serversettings']['panel_allow_domain_change_customer']['title'] = 'Allow moving domains between customers';
$lng['serversettings']['panel_allow_domain_change_customer']['description'] = 'If activated you can change the customer of a domain at domainsettings.<br /><b>Attention:</b> Froxlor won\'t change any paths. This could render a domain unusable!';
$lng['domains']['associated_with_domain'] = 'Associated';
$lng['domains']['aliasdomains'] = 'Alias domén';
$lng['error']['ipportdoesntexist'] = 'The ip/port combination you have chosen doesn\'t exist.';

// ADDED IN 1.2.19-svn38

$lng['admin']['phpserversettings'] = 'PHP nastavení';
$lng['admin']['phpsettings']['binary'] = 'PHP Binary';
$lng['admin']['phpsettings']['fpmdesc'] = 'PHP-FPM konfigurace';
$lng['admin']['phpsettings']['file_extensions'] = 'Přípony souborů';
$lng['admin']['phpsettings']['file_extensions_note'] = '(bez tečky, oddělené mezerou)';
$lng['admin']['mod_fcgid_maxrequests']['title'] = 'Maximum php žádostí pro tuto doménu (ponechte prázdné pro výchozí hodnotu)';
$lng['serversettings']['mod_fcgid']['maxrequests']['title'] = 'Maximum požadavků na doménu';
$lng['serversettings']['mod_fcgid']['maxrequests']['description'] = 'Kolik požadavků na doménu by mělo být povoleno?';

// ADDED IN 1.4.2.1-1

$lng['mysql']['mysql_server'] = 'MySQL-Server';

// ADDED IN 1.4.2.1-2

$lng['admin']['ipsandports']['webserverdefaultconfig'] = 'Výchozí konfigurace Webserveru';
$lng['admin']['ipsandports']['webserverdomainconfig'] = 'Webserver domain config';
$lng['admin']['ipsandports']['webserverssldomainconfig'] = 'Webserver SSL config';
$lng['admin']['ipsandports']['ssl_key_file'] = 'Path to the SSL Keyfile';
$lng['admin']['ipsandports']['ssl_ca_file'] = 'Path to the SSL CA certificate';
$lng['admin']['ipsandports']['default_vhostconf_domain'] = 'Default vHost-settings for every domain container';
$lng['serversettings']['ssl']['ssl_key_file']['title'] = 'Path to the SSL Keyfile';
$lng['serversettings']['ssl']['ssl_key_file']['description'] = 'Specify the path including the filename for the private-key file (.key mostly)';
$lng['serversettings']['ssl']['ssl_ca_file']['title'] = 'Path to the SSL CA certificate (optional)';
$lng['serversettings']['ssl']['ssl_ca_file']['description'] = 'Client authentication, set this only if you know what it is.';

$lng['error']['usernamealreadyexists'] = 'The username %s already exists.';

$lng['error']['plausibilitychecknotunderstood'] = 'Answer of plausibility check not understood.';
$lng['error']['errorwhensaving'] = 'An error occurred when saving the field %s';

$lng['success']['success'] = 'Informace';
$lng['success']['clickheretocontinue'] = 'Klikni zde pro pokračování';
$lng['success']['settingssaved'] = 'Nastavení bylo úspěšně uloženo.';

// ADDED IN FROXLOR 0.9

$lng['admin']['spfsettings'] = 'Domain SPF settings';
$lng['spf']['use_spf'] = 'Activate SPF for domains?';
$lng['spf']['spf_entry'] = 'SPF entry for all domains';
$lng['panel']['toomanydirs'] = 'Too many subdirectories. Falling back to manual path-select.';
$lng['panel']['abort'] = 'Abort';
$lng['serversettings']['cron']['debug']['title'] = 'Cronscript debugging';
$lng['serversettings']['cron']['debug']['description'] = 'Activate to keep the lockfile after a cron-run for debugging.<br /><b>Attention:</b>Keeping the lockfile can cause the next scheduled cron not to run properly.';
$lng['panel']['not_activated'] = 'not activated';
$lng['panel']['off'] = 'off';
$lng['update']['updateinprogress_onlyadmincanlogin'] = 'A newer version of Froxlor has been installed but not yet set up.<br />Only the administrator can log in and finish the update.';
$lng['update']['update'] = 'Froxlor update';
$lng['update']['proceed'] = 'Proceed';
$lng['update']['update_information']['part_a'] = 'The Froxlor files have been updated to version <strong>%newversion</strong>. The installed version is <strong>%curversion</strong>.';
$lng['update']['update_information']['part_b'] = '<br /><br />Customers will not be able to log in until the update has been finished.<br /><strong>Proceed?</strong>';
$lng['update']['noupdatesavail'] = '<strong>You already have the latest Froxlor version.</strong>';
$lng['admin']['specialsettingsforsubdomains'] = 'Apply specialsettings to all subdomains (*.example.com)';
$lng['serversettings']['specialsettingsforsubdomains']['description'] = 'If yes these custom vHost-settings will be added to all subdomains; if no subdomain-specialsettings are being removed.';
$lng['tasks']['outstanding_tasks'] = 'Outstanding cron-tasks';
$lng['tasks']['rebuild_webserverconfig'] = 'Rebuilding webserver-configuration';
$lng['tasks']['adding_customer'] = 'Adding new customer %loginname%';
$lng['tasks']['rebuild_bindconfig'] = 'Rebuilding bind-configuration';
$lng['tasks']['creating_ftpdir'] = 'Creating directory for new ftp-user';
$lng['tasks']['deleting_customerfiles'] = 'Deleting customer-files %loginname%';
$lng['tasks']['noneoutstanding'] = 'There are currently no outstanding tasks for Froxlor';

// ADDED IN FROXLOR 0.9.1

$lng['admin']['accountdata'] = 'Account Data';
$lng['admin']['contactdata'] = 'Kontaktní data';
$lng['admin']['servicedata'] = 'Service Data';

// ADDED IN FROXLOR 0.9.2

$lng['admin']['newerversionavailable'] = 'Nová verze Froxloru je dostupná';

// ADDED IN FROXLOR 0.9.3

$lng['emails']['noemaildomainaddedyet'] = 'You do not have a (email-)domain in your account yet.';
$lng['error']['hiddenfieldvaluechanged'] = 'The value for the hidden field "%s" changed while editing the settings.<br /><br />This is usually not a big problem but the settings could not be saved because of this.';

// ADDED IN FROXLOR 0.9.3-svn1

$lng['serversettings']['panel_password_min_length']['title'] = 'Minimální délka hesla';
$lng['serversettings']['panel_password_min_length']['description'] = 'Here you can set a minimum length for passwords. \'0\' means: no minimum length required.';
$lng['error']['notrequiredpasswordlength'] = 'The given password is too short. Please enter at least %s characters.';
$lng['serversettings']['system_store_index_file_subs']['title'] = 'Store default index file also to new subfolders';
$lng['serversettings']['system_store_index_file_subs']['description'] = 'If enabled, the default index-file is being stored to every subdomain-path newly created (not if the folder already exists!)';

// ADDED IN FROXLOR 0.9.3-svn2

$lng['serversettings']['adminmail_return']['title'] = 'Reply-To address';
$lng['serversettings']['adminmail_return']['description'] = 'Define an e-mail address as reply-to-address for mails sent by the panel.';
$lng['serversettings']['adminmail_defname'] = 'Panel e-mail sender name';

// ADDED IN FROXLOR 0.9.3-svn3
$lng['dkim']['dkim_algorithm']['title'] = 'Allowed Hash Algorithms';
$lng['dkim']['dkim_algorithm']['description'] = 'Define allowed hash algorithms, chose "All" for all algorithms or one or more from the other available algorithms';
$lng['dkim']['dkim_servicetype'] = 'Service Types';
$lng['dkim']['dkim_keylength']['title'] = 'Key-length';
$lng['dkim']['dkim_keylength']['description'] = 'Attention: If you change this values, you need to delete all the private/public keys in "%s"';
$lng['dkim']['dkim_notes']['title'] = 'DKIM Notes';
$lng['dkim']['dkim_notes']['description'] = 'Notes that might be of interest to a human, e.g. a URL like http://www.dnswatch.info. No interpretation is made by any program. This tag should be used sparingly due to space limitations in DNS. This is intended for use by administrators, not end users.';

$lng['admin']['cron']['cronsettings'] = 'Cronjob settings';
$lng['cron']['cronname'] = 'cronjob-name';
$lng['cron']['lastrun'] = 'naposledy spušteno';
$lng['cron']['interval'] = 'interval';
$lng['cron']['isactive'] = 'povoleno';
$lng['cron']['description'] = 'popis';
$lng['crondesc']['cron_unknown_desc'] = 'no description given';
$lng['admin']['cron']['add'] = 'Add cronjob';
$lng['crondesc']['cron_tasks'] = 'generating of configfiles';
$lng['crondesc']['cron_legacy'] = 'legacy (old) cronjob';
$lng['crondesc']['cron_traffic'] = 'traffic calculation';
$lng['cronmgmt']['minutes'] = 'minutes';
$lng['cronmgmt']['hours'] = 'hours';
$lng['cronmgmt']['days'] = 'days';
$lng['cronmgmt']['weeks'] = 'weeks';
$lng['cronmgmt']['months'] = 'months';
$lng['admin']['cronjob_edit'] = 'Edit cronjob';
$lng['cronjob']['cronjobsettings'] = 'Cronjob settings';
$lng['cronjob']['cronjobintervalv'] = 'Runtime interval value';
$lng['cronjob']['cronjobinterval'] = 'Runtime interval';
$lng['panel']['options'] = 'Options';
$lng['admin']['warning'] = 'WARNING - Please note!';
$lng['cron']['changewarning'] = 'Changing these values can have a negative cause to the behavior of Froxlor and its automated tasks.<br /><br />Please only change values here, if you are sure you know what you are doing.';

$lng['serversettings']['stdsubdomainhost']['title'] = 'Customer standard subdomain';
$lng['serversettings']['stdsubdomainhost']['description'] = 'What hostname should be used to create standard subdomains for customer. If empty, the system-hostname is used.';

// ADDED IN FROXLOR 0.9.4-svn1
$lng['ftp']['account_edit'] = 'Upravit ftp účet';
$lng['ftp']['editpassdescription'] = 'Set new password or leave blank for no change.';
$lng['customer']['sendinfomail'] = 'Send data via email to me';
$lng['mails']['new_database_by_customer']['subject'] = '[Froxlor] New database created';
$lng['mails']['new_database_by_customer']['mailbody'] = "Hello {CUST_NAME},\n\nyou have just added a new database. Here is the entered information:\n\nDatabasename: {DB_NAME}\nPassword: {DB_PASS}\nDescription: {DB_DESC}\nDB-Hostname: {DB_SRV}\nphpMyAdmin: {PMA_URI}\nYours sincerely, your administrator";
$lng['serversettings']['awstats_path'] = 'Path to AWStats \'awstats_buildstaticpages.pl\'';
$lng['serversettings']['awstats_conf'] = 'AWStats configuration path';
$lng['error']['overviewsettingoptionisnotavalidfield'] = 'Whoops, a field that should be displayed as an option in the settings-overview is not an excepted type. You can blame the developers for this. This should not happen!';
$lng['admin']['configfiles']['compactoverview'] = 'Compact-overview';
$lng['admin']['lastlogin_succ'] = 'Posledníí přihlášení';
$lng['panel']['neverloggedin'] = 'Zatím bez přihlášení';

// ADDED IN FROXLOR 0.9.6-svn1
$lng['serversettings']['defaultttl'] = 'Domain TTL for bind in seconds (default \'604800\' = 1 week)';

// ADDED IN FROXLOR 0.9.6-svn3
$lng['serversettings']['defaultwebsrverrhandler_enabled'] = 'Enable default errordocuments for all customers';
$lng['serversettings']['defaultwebsrverrhandler_err401']['title'] = 'File/URL for error 401';
$lng['serversettings']['defaultwebsrverrhandler_err401']['description'] = '<div class="red">Not supported in: lighttpd</div>';
$lng['serversettings']['defaultwebsrverrhandler_err403']['title'] = 'File/URL for error 403';
$lng['serversettings']['defaultwebsrverrhandler_err403']['description'] = '<div class="red">Not supported in: lighttpd</div>';
$lng['serversettings']['defaultwebsrverrhandler_err404'] = 'File/URL for error 404';
$lng['serversettings']['defaultwebsrverrhandler_err500']['title'] = 'File/URL for error 500';
$lng['serversettings']['defaultwebsrverrhandler_err500']['description'] = '<div class="red">Not supported in: lighttpd</div>';

// ADDED IN FROXLOR 0.9.6-svn5
$lng['serversettings']['mod_fcgid']['defaultini'] = 'Default PHP configuration for new domains';

// ADDED IN FROXLOR 0.9.6-svn6
$lng['admin']['ftpserver'] = 'FTP Server';
$lng['admin']['ftpserversettings'] = 'Nastavení FTP serveru';
$lng['serversettings']['ftpserver']['desc'] = 'If pureftpd is selected the .ftpquota files for user quotas are created and updated daily';

// ADDED IN FROXLOR 0.9.7-svn1
$lng['mails']['new_ftpaccount_by_customer']['subject'] = 'New ftp-user created';
$lng['mails']['new_ftpaccount_by_customer']['mailbody'] = "Hello {CUST_NAME},\n\nyou have just added a new ftp-user. Here is the entered information:\n\nUsername: {USR_NAME}\nPassword: {USR_PASS}\nPath: {USR_PATH}\n\nYours sincerely, your administrator";
$lng['domains']['redirectifpathisurl'] = 'Redirect code (default: empty)';
$lng['domains']['redirectifpathisurlinfo'] = 'You only need to select one of these if you entered an URL as path<br/><strong class="red">NOTE:</strong>Changes are only applied if the given path is an URL.';
$lng['serversettings']['customredirect_enabled']['title'] = 'Allow customer redirects';
$lng['serversettings']['customredirect_enabled']['description'] = 'Allow customers to choose the http-status code for redirects which will be used';
$lng['serversettings']['customredirect_default']['title'] = 'Default redirect';
$lng['serversettings']['customredirect_default']['description'] = 'Set the default redirect-code which should be used if the customer does not set it himself';

// ADDED IN FROXLOR 0.9.7-svn2
$lng['error']['pathmaynotcontaincolon'] = 'The path you have entered should not contain a colon (":"). Please enter a correct path value.';

// ADDED IN FROXLOR 0.9.7-svn3

// these stay only in english.lng.php - they are the same
// for all other languages and are used if not found there
$lng['redirect_desc']['rc_default'] = 'default';
$lng['redirect_desc']['rc_movedperm'] = 'permanentně přesunuto';
$lng['redirect_desc']['rc_found'] = 'found';
$lng['redirect_desc']['rc_seeother'] = 'see other';
$lng['redirect_desc']['rc_tempred'] = 'temporary redirect';

// ADDED IN FROXLOR 0.9.8
$lng['error']['exception'] = '%s';

// ADDED IN FROXLOR 0.9.9-svn1
$lng['serversettings']['mail_also_with_mxservers'] = 'Create mail-, imap-, pop3- and smtp-"A record" also with MX-Servers set';

// ADDED IN FROXLOR 0.9.10-svn1
$lng['admin']['webserver_user'] = 'Webserver user-name';
$lng['admin']['webserver_group'] = 'Webserver group-name';

// ADDED IN FROXLOR 0.9.10
$lng['serversettings']['froxlordirectlyviahostname'] = 'Access Froxlor directly via the hostname';

// ADDED IN FROXLOR 0.9.11-svn1
$lng['serversettings']['panel_password_regex']['title'] = 'Regular expression for passwords';
$lng['serversettings']['panel_password_regex']['description'] = 'Here you can set a regular expression for passwords-complexity.<br />Empty = no specific requirement';
$lng['error']['notrequiredpasswordcomplexity'] = 'The specified password-complexity was not satisfied.<br />Please contact your administrator if you have any questions about the complexity-specification';

// ADDED IN FROXLOR 0.9.11-svn2
$lng['extras']['execute_perl'] = 'Spustit perl/CGI';
$lng['admin']['perlenabled'] = 'Perl povolen';

// ADDED IN FROXLOR 0.9.11-svn3
$lng['serversettings']['perl_path']['title'] = 'Cesta k perl';
$lng['serversettings']['perl_path']['description'] = 'Výchozí je /usr/bin/perl';

// ADDED IN FROXLOR 0.9.12-svn1
$lng['admin']['fcgid_settings'] = 'FCGID';
$lng['serversettings']['mod_fcgid_ownvhost']['title'] = 'Enable FCGID for the Froxlor vHost';
$lng['serversettings']['mod_fcgid_ownvhost']['description'] = 'If enabled, Froxlor will also be running under a local user';
$lng['admin']['mod_fcgid_user'] = 'Local user to use for FCGID (Froxlor vHost)';
$lng['admin']['mod_fcgid_group'] = 'Local group to use for FCGID (Froxlor vHost)';

// ADDED IN FROXLOR 0.9.12-svn2
$lng['admin']['perl_settings'] = 'Perl/CGI';
$lng['serversettings']['perl']['suexecworkaround']['title'] = 'Enable SuExec workaround';
$lng['serversettings']['perl']['suexecworkaround']['description'] = 'Enable only if customer docroots are not within the apache suexec path.<br />If enabled, Froxlor will generate a symlink from the customers perl-enabled directory + /cgi-bin/ to the given path.<br />Note that perl will then only work in the folders subdirectory /cgi-bin/ and not in the folder itself (as it does without this fix!)';
$lng['serversettings']['perl']['suexeccgipath']['title'] = 'Path for customer perl-enabled directory symlinks';
$lng['serversettings']['perl']['suexeccgipath']['description'] = 'You only need to set this if the SuExec-workaround is enabled.<br />ATTENTION: Be sure this path is within the suexec path or else this workaround is useless';
$lng['panel']['descriptionerrordocument'] = 'Can be an URL, path to a file or just a string wrapped around " "<br />Leave empty to use server default value.';
$lng['error']['stringerrordocumentnotvalidforlighty'] = 'A string as ErrorDocument does not work in lighttpd, please specify a path to a file';
$lng['error']['urlerrordocumentnotvalidforlighty'] = 'An URL as ErrorDocument does not work in lighttpd, please specify a path to a file';

// ADDED IN FROXLOR 0.9.12-svn3
$lng['question']['remove_subbutmain_domains'] = 'Also remove domains which are added as full domains but which are subdomains of this domain?';
$lng['domains']['issubof'] = 'This domain is a subdomain of another domain';
$lng['domains']['issubofinfo'] = 'You have to set this to the correct domain if you want to add a subdomain as full-domain (e.g. you want to add "www.domain.tld", you have to select "domain.tld" here)';
$lng['domains']['nosubtomaindomain'] = 'Žádná subdoména celé domény';
$lng['admin']['templates']['new_database_by_customer'] = 'Customer-notification when a database has been created';
$lng['admin']['templates']['new_ftpaccount_by_customer'] = 'Customer-notification when a ftp-user has been created';
$lng['admin']['templates']['newdatabase'] = 'Emailové notifikace o nových databázích';
$lng['admin']['templates']['newftpuser'] = 'Emailové notifikace o nových ftp uživatelů';
$lng['admin']['templates']['CUST_NAME'] = 'Jméno zákazníka';
$lng['admin']['templates']['DB_NAME'] = 'Název databáze';
$lng['admin']['templates']['DB_PASS'] = 'Heslo databáze';
$lng['admin']['templates']['DB_DESC'] = 'Popis databáze';
$lng['admin']['templates']['DB_SRV'] = 'Databázový server';
$lng['admin']['templates']['PMA_URI'] = 'Odkaz k phpMyAdmin (pokud je postytnut)';
$lng['admin']['notgiven'] = '[not given]';
$lng['admin']['templates']['USR_NAME'] = 'FTP uživatelské jméno';
$lng['admin']['templates']['USR_PASS'] = 'FTP heslo';
$lng['admin']['templates']['USR_PATH'] = 'FTP homedir (relative to customer-docroot)';

// ADDED IN FROXLOR 0.9.12-svn4
$lng['serversettings']['awstats_awstatspath'] = 'Path to AWStats \'awstats.pl\'';

// ADDED IN FROXLOR 0.9.12-svn6
$lng['extras']['htpasswdauthname'] = 'Authentication reason (AuthName)';
$lng['extras']['directoryprotection_edit'] = 'edit directory protection';
$lng['admin']['templates']['forgotpwd'] = 'Notification-mails for password-reset';
$lng['admin']['templates']['password_reset'] = 'Customer-notification for passwort-reset';
$lng['admin']['store_defaultindex'] = 'Store default index-file to customers docroot';

// ADDED IN FROXLOR 0.9.14
$lng['serversettings']['mod_fcgid']['defaultini_ownvhost'] = 'Default PHP configuration for Froxlor-vHost';
$lng['serversettings']['awstats_icons']['title'] = 'Path to AWstats icons folder';
$lng['serversettings']['awstats_icons']['description'] = 'e.g. /usr/share/awstats/htdocs/icon/';
$lng['admin']['ipsandports']['ssl_cert_chainfile']['title'] = 'Path to the SSL CertificateChainFile';
$lng['admin']['ipsandports']['ssl_cert_chainfile']['description'] = 'Mostly CA_Bundle, or similar, you probably want to set this if you bought a SSL certificate.';
$lng['admin']['ipsandports']['docroot']['title'] = 'Custom docroot (empty = point to Froxlor)';
$lng['admin']['ipsandports']['docroot']['description'] = 'You can define a custom document-root (the destination for a request) for this ip/port combination here.<br /><strong>ATTENTION:</strong> Please be careful with what you enter here!';
$lng['serversettings']['login_domain_login'] = 'Allow login with domains';
$lng['panel']['unlock'] = 'Unlock';
$lng['question']['customer_reallyunlock'] = 'Do you really want to unlock customer %s?';

// ADDED IN FROXLOR 0.9.15
$lng['serversettings']['perl_server']['title'] = 'Perl umístění na serveru';
$lng['serversettings']['perl_server']['description'] = 'Default is set for using the guide found at: <a target="blank" href="http://wiki.nginx.org/SimpleCGI">http://wiki.nginx.org/SimpleCGI</a>';
$lng['serversettings']['nginx_php_backend']['title'] = 'Nginx PHP backend';
$lng['serversettings']['nginx_php_backend']['description'] = 'this is where the PHP process is listening for requests from nginx, can be a unix socket of ip:port combination<br />*NOT used with php-fpm';
$lng['serversettings']['phpreload_command']['title'] = 'PHP reload command';
$lng['serversettings']['phpreload_command']['description'] = 'this is used to reload the PHP backend if any is used<br />Default: blank<br />*NOT used with php-fpm';

// ADDED IN FROXLOR 0.9.16
$lng['error']['intvaluetoolow'] = 'Zadané číslo je přiliš malé (pole %s)';
$lng['error']['intvaluetoohigh'] = 'Zadané číslo je příliš vysoké (pole %s)';
$lng['admin']['phpfpm_settings'] = 'PHP-FPM';
$lng['serversettings']['phpfpm']['title'] = 'Zapnout php-fpm';
$lng['serversettings']['phpfpm']['description'] = '<b>This needs a special webserver configuration see FPM-handbook for <a target="blank" href="https://github.com/Froxlor/Froxlor/wiki/apache2-with-php-fpm">Apache2</a> or <a target="blank" href="https://github.com/Froxlor/Froxlor/wiki/nginx-with-php-fpm">nginx</a></b>';
$lng['serversettings']['phpfpm_settings']['configdir'] = 'Configuration directory of php-fpm';
$lng['serversettings']['phpfpm_settings']['aliasconfigdir'] = 'Configuration Alias-directory of php-fpm';
$lng['serversettings']['phpfpm_settings']['reload'] = 'php-fpm restart command';
$lng['serversettings']['phpfpm_settings']['pm'] = 'Process manager control (pm)';
$lng['serversettings']['phpfpm_settings']['max_children']['title'] = 'The number of child processes';
$lng['serversettings']['phpfpm_settings']['max_children']['description'] = 'The number of child processes to be created when pm is set to \'static\' and the maximum number of child processes to be created when pm is set to \'dynamic/ondemand\'<br />Equivalent to the PHP_FCGI_CHILDREN';
$lng['serversettings']['phpfpm_settings']['start_servers']['title'] = 'The number of child processes created on startup';
$lng['serversettings']['phpfpm_settings']['start_servers']['description'] = 'Note: Used only when pm is set to \'dynamic\'';
$lng['serversettings']['phpfpm_settings']['min_spare_servers']['title'] = 'The desired minimum number of idle server processes';
$lng['serversettings']['phpfpm_settings']['min_spare_servers']['description'] = 'Note: Used only when pm is set to \'dynamic\'<br />Note: Mandatory when pm is set to \'dynamic\'';
$lng['serversettings']['phpfpm_settings']['max_spare_servers']['title'] = 'The desired maximum number of idle server processes';
$lng['serversettings']['phpfpm_settings']['max_spare_servers']['description'] = 'Note: Used only when pm is set to \'dynamic\'<br />Note: Mandatory when pm is set to \'dynamic\'';
$lng['serversettings']['phpfpm_settings']['max_requests']['title'] = 'Requests per child before respawning';
$lng['serversettings']['phpfpm_settings']['max_requests']['description'] = 'For endless request processing specify \'0\'. Equivalent to PHP_FCGI_MAX_REQUESTS.';
$lng['error']['phpfpmstillenabled'] = 'PHP-FPM is currently active. Please deactivate it before activating FCGID';
$lng['error']['fcgidstillenabled'] = 'FCGID is currently active. Please deactivate it before activating PHP-FPM';
$lng['phpfpm']['vhost_httpuser'] = 'Local user to use for PHP-FPM (Froxlor vHost)';
$lng['phpfpm']['vhost_httpgroup'] = 'Local group to use for PHP-FPM (Froxlor vHost)';
$lng['phpfpm']['ownvhost']['title'] = 'Enable PHP-FPM for the Froxlor vHost';
$lng['phpfpm']['ownvhost']['description'] = 'If enabled, Froxlor will also be running under a local user';

// ADDED IN FROXLOR 0.9.17
$lng['crondesc']['cron_usage_report'] = 'Web- and traffic-reports';
$lng['serversettings']['report']['report'] = 'Enable sending of reports about web- and traffic-usage';
$lng['serversettings']['report']['webmax']['title'] = 'Warning-level in percent for webspace';
$lng['serversettings']['report']['webmax']['description'] = 'Valid values are 0 up to 150. Setting this value to 0 disables this report.';
$lng['serversettings']['report']['trafficmax']['title'] = 'Warning-level in percent for traffic';
$lng['serversettings']['report']['trafficmax']['description'] = 'Valid values are 0 up to 150. Setting this value to 0 disables this report.';
$lng['mails']['trafficmaxpercent']['mailbody'] = 'Dear {NAME},\n\nyou used {TRAFFICUSED} MB of your available {TRAFFIC} MB of traffic.\nThis is more than {MAX_PERCENT}%.\n\nYours sincerely, your administrator';
$lng['mails']['trafficmaxpercent']['subject'] = 'Reaching your traffic limit';
$lng['admin']['templates']['trafficmaxpercent'] = 'Notification mail for customers when given maximum of percent of traffic is exhausted';
$lng['admin']['templates']['MAX_PERCENT'] = 'Replaced with the diskusage/traffic limit for sending reports in percent.';
$lng['admin']['templates']['USAGE_PERCENT'] = 'Replaced with the diskusage/traffic, which was exhausted by the customer in percent.';
$lng['admin']['templates']['diskmaxpercent'] = 'Notification mail for customers when given maximum of percent of diskspace is exhausted';
$lng['admin']['templates']['DISKAVAILABLE'] = 'Replaced with the diskusage in MB, which was assigned to the customer.';
$lng['admin']['templates']['DISKUSED'] = 'Replaced with the diskusage in MB, which was exhausted by the customer.';
$lng['serversettings']['dropdown'] = 'Dropdown';
$lng['serversettings']['manual'] = 'Manual';
$lng['mails']['diskmaxpercent']['mailbody'] = 'Dear {NAME},\n\nyou used {DISKUSED} MB of your available {DISKAVAILABLE} MB of diskspace.\nThis is more than {MAX_PERCENT}%.\n\nYours sincerely, your administrator';
$lng['mails']['diskmaxpercent']['subject'] = 'Reaching your diskspace limit';
$lng['mysql']['database_edit'] = 'Edit database';

// ADDED IN FROXLOR 0.9.18
$lng['error']['domains_cantdeletedomainwithaliases'] = 'You cannot delete a domain which is used for alias-domains. You have to delete the aliases first.';
$lng['serversettings']['default_theme'] = 'Výchozí téma';
$lng['menue']['main']['changetheme'] = 'Změnit téma';
$lng['panel']['theme'] = 'Téma';
$lng['success']['rebuildingconfigs'] = 'Successfully inserted tasks for rebuild configfiles';
$lng['panel']['variable'] = 'Variable';
$lng['panel']['description'] = 'Popis';
$lng['emails']['back_to_overview'] = 'Zpět na přehled';

// ADDED IN FROXLOR 0.9.20
$lng['error']['user_banned'] = 'Your account has been locked. Please contact your administrator for further information.';
$lng['serversettings']['validate_domain'] = 'Validate domain names';
$lng['login']['combination_not_found'] = 'Combination of user and email address not found.';
$lng['customer']['generated_pwd'] = 'Navrhnutí hesla';
$lng['customer']['usedmax'] = 'Použito / Max';
$lng['admin']['traffic'] = 'Provoz';
$lng['admin']['domaintraffic'] = 'Domény';
$lng['admin']['customertraffic'] = 'Zákazníci';
$lng['traffic']['customer'] = 'Zákazník';
$lng['traffic']['domain'] = 'Doména';
$lng['traffic']['trafficoverview'] = 'Shrnutí provozu podle';
$lng['traffic']['months']['jan'] = 'Led';
$lng['traffic']['months']['feb'] = 'Úno';
$lng['traffic']['months']['mar'] = 'Bře';
$lng['traffic']['months']['apr'] = 'Dub';
$lng['traffic']['months']['may'] = 'Kvě';
$lng['traffic']['months']['jun'] = 'Čer';
$lng['traffic']['months']['jul'] = 'Čer';
$lng['traffic']['months']['aug'] = 'Srp';
$lng['traffic']['months']['sep'] = 'Zář';
$lng['traffic']['months']['oct'] = 'Říj';
$lng['traffic']['months']['nov'] = 'Lis';
$lng['traffic']['months']['dec'] = 'Pro';
$lng['traffic']['months']['total'] = 'Celkem';
$lng['traffic']['details'] = 'Detaily';
$lng['menue']['traffic']['table'] = 'Provoz';

// ADDED IN FROXLOR 0.9.21
$lng['gender']['title'] = 'Titul';
$lng['gender']['male'] = 'Pan.';
$lng['gender']['female'] = 'Paní.';
$lng['gender']['undef'] = '';

// Country code (ISO-3166-2)
$lng['country']['AF'] = "Afghanistan";
$lng['country']['AX'] = "Aland Islands";
$lng['country']['AL'] = "Albania";
$lng['country']['DZ'] = "Algeria";
$lng['country']['AS'] = "American Samoa";
$lng['country']['AD'] = "Andorra";
$lng['country']['AO'] = "Angola";
$lng['country']['AI'] = "Anguilla";
$lng['country']['AQ'] = "Antarctica";
$lng['country']['AG'] = "Antigua and Barbuda";
$lng['country']['AR'] = "Argentina";
$lng['country']['AM'] = "Armenia";
$lng['country']['AW'] = "Aruba";
$lng['country']['AU'] = "Australia";
$lng['country']['AT'] = "Austria";
$lng['country']['AZ'] = "Azerbaijan";
$lng['country']['BS'] = "Bahamas";
$lng['country']['BH'] = "Bahrain";
$lng['country']['BD'] = "Bangladesh";
$lng['country']['BB'] = "Barbados";
$lng['country']['BY'] = "Belarus";
$lng['country']['BE'] = "Belgium";
$lng['country']['BZ'] = "Belize";
$lng['country']['BJ'] = "Benin";
$lng['country']['BM'] = "Bermuda";
$lng['country']['BT'] = "Bhutan";
$lng['country']['BO'] = "Bolivia, Plurinational State of";
$lng['country']['BQ'] = "Bonaire, Saint Eustatius and Saba";
$lng['country']['BA'] = "Bosnia and Herzegovina";
$lng['country']['BW'] = "Botswana";
$lng['country']['BV'] = "Bouvet Island";
$lng['country']['BR'] = "Brazil";
$lng['country']['IO'] = "British Indian Ocean Territory";
$lng['country']['BN'] = "Brunei Darussalam";
$lng['country']['BG'] = "Bulgaria";
$lng['country']['BF'] = "Burkina Faso";
$lng['country']['BI'] = "Burundi";
$lng['country']['KH'] = "Cambodia";
$lng['country']['CM'] = "Cameroon";
$lng['country']['CA'] = "Canada";
$lng['country']['CV'] = "Cape Verde";
$lng['country']['KY'] = "Cayman Islands";
$lng['country']['CF'] = "Central African Republic";
$lng['country']['TD'] = "Chad";
$lng['country']['CL'] = "Chile";
$lng['country']['CN'] = "China";
$lng['country']['CX'] = "Christmas Island";
$lng['country']['CC'] = "Cocos (Keeling) Islands";
$lng['country']['CO'] = "Colombia";
$lng['country']['KM'] = "Comoros";
$lng['country']['CG'] = "Congo";
$lng['country']['CD'] = "Congo, The Democratic Republic of the";
$lng['country']['CK'] = "Cook Islands";
$lng['country']['CR'] = "Costa Rica";
$lng['country']['CI'] = "Cote D'ivoire";
$lng['country']['HR'] = "Croatia";
$lng['country']['CU'] = "Cuba";
$lng['country']['CW'] = "Curacao";
$lng['country']['CY'] = "Cyprus";
$lng['country']['CZ'] = "Česká republika";
$lng['country']['DK'] = "Denmark";
$lng['country']['DJ'] = "Djibouti";
$lng['country']['DM'] = "Dominica";
$lng['country']['DO'] = "Dominican Republic";
$lng['country']['EC'] = "Ecuador";
$lng['country']['EG'] = "Egypt";
$lng['country']['SV'] = "El Salvador";
$lng['country']['GQ'] = "Equatorial Guinea";
$lng['country']['ER'] = "Eritrea";
$lng['country']['EE'] = "Estonia";
$lng['country']['ET'] = "Ethiopia";
$lng['country']['FK'] = "Falkland Islands (Malvinas)";
$lng['country']['FO'] = "Faroe Islands";
$lng['country']['FJ'] = "Fiji";
$lng['country']['FI'] = "Finland";
$lng['country']['FR'] = "France";
$lng['country']['GF'] = "French Guiana";
$lng['country']['PF'] = "French Polynesia";
$lng['country']['TF'] = "French Southern Territories";
$lng['country']['GA'] = "Gabon";
$lng['country']['GM'] = "Gambia";
$lng['country']['GE'] = "Georgia";
$lng['country']['DE'] = "Germany";
$lng['country']['GH'] = "Ghana";
$lng['country']['GI'] = "Gibraltar";
$lng['country']['GR'] = "Greece";
$lng['country']['GL'] = "Greenland";
$lng['country']['GD'] = "Grenada";
$lng['country']['GP'] = "Guadeloupe";
$lng['country']['GU'] = "Guam";
$lng['country']['GT'] = "Guatemala";
$lng['country']['GG'] = "Guernsey";
$lng['country']['GN'] = "Guinea";
$lng['country']['GW'] = "Guinea-Bissau";
$lng['country']['GY'] = "Guyana";
$lng['country']['HT'] = "Haiti";
$lng['country']['HM'] = "Heard Island and McDonald Islands";
$lng['country']['VA'] = "Holy See (Vatican City State)";
$lng['country']['HN'] = "Honduras";
$lng['country']['HK'] = "Hong Kong";
$lng['country']['HU'] = "Hungary";
$lng['country']['IS'] = "Iceland";
$lng['country']['IN'] = "India";
$lng['country']['ID'] = "Indonesia";
$lng['country']['IR'] = "Iran, Islamic Republic of";
$lng['country']['IQ'] = "Iraq";
$lng['country']['IE'] = "Ireland";
$lng['country']['IM'] = "Isle of Man";
$lng['country']['IL'] = "Israel";
$lng['country']['IT'] = "Italy";
$lng['country']['JM'] = "Jamaica";
$lng['country']['JP'] = "Japan";
$lng['country']['JE'] = "Jersey";
$lng['country']['JO'] = "Jordan";
$lng['country']['KZ'] = "Kazakhstan";
$lng['country']['KE'] = "Kenya";
$lng['country']['KI'] = "Kiribati";
$lng['country']['KP'] = "Korea, Democratic People's Republic of";
$lng['country']['KR'] = "Korea, Republic of";
$lng['country']['KW'] = "Kuwait";
$lng['country']['KG'] = "Kyrgyzstan";
$lng['country']['LA'] = "Lao People's Democratic Republic";
$lng['country']['LV'] = "Latvia";
$lng['country']['LB'] = "Lebanon";
$lng['country']['LS'] = "Lesotho";
$lng['country']['LR'] = "Liberia";
$lng['country']['LY'] = "Libyan Arab Jamahiriya";
$lng['country']['LI'] = "Liechtenstein";
$lng['country']['LT'] = "Lithuania";
$lng['country']['LU'] = "Luxembourg";
$lng['country']['MO'] = "Macao";
$lng['country']['MK'] = "Macedonia, The Former Yugoslav Republic of";
$lng['country']['MG'] = "Madagascar";
$lng['country']['MW'] = "Malawi";
$lng['country']['MY'] = "Malaysia";
$lng['country']['MV'] = "Maldives";
$lng['country']['ML'] = "Mali";
$lng['country']['MT'] = "Malta";
$lng['country']['MH'] = "Marshall Islands";
$lng['country']['MQ'] = "Martinique";
$lng['country']['MR'] = "Mauritania";
$lng['country']['MU'] = "Mauritius";
$lng['country']['YT'] = "Mayotte";
$lng['country']['MX'] = "Mexico";
$lng['country']['FM'] = "Micronesia, Federated States of";
$lng['country']['MD'] = "Moldova, Republic of";
$lng['country']['MC'] = "Monaco";
$lng['country']['MN'] = "Mongolia";
$lng['country']['ME'] = "Montenegro";
$lng['country']['MS'] = "Montserrat";
$lng['country']['MA'] = "Morocco";
$lng['country']['MZ'] = "Mozambique";
$lng['country']['MM'] = "Myanmar";
$lng['country']['NA'] = "Namibia";
$lng['country']['NR'] = "Nauru";
$lng['country']['NP'] = "Nepal";
$lng['country']['NL'] = "Netherlands";
$lng['country']['NC'] = "New Caledonia";
$lng['country']['NZ'] = "New Zealand";
$lng['country']['NI'] = "Nicaragua";
$lng['country']['NE'] = "Niger";
$lng['country']['NG'] = "Nigeria";
$lng['country']['NU'] = "Niue";
$lng['country']['NF'] = "Norfolk Island";
$lng['country']['MP'] = "Northern Mariana Islands";
$lng['country']['NO'] = "Norway";
$lng['country']['OM'] = "Oman";
$lng['country']['PK'] = "Pakistan";
$lng['country']['PW'] = "Palau";
$lng['country']['PS'] = "Palestinian Territory, Occupied";
$lng['country']['PA'] = "Panama";
$lng['country']['PG'] = "Papua New Guinea";
$lng['country']['PY'] = "Paraguay";
$lng['country']['PE'] = "Peru";
$lng['country']['PH'] = "Philippines";
$lng['country']['PN'] = "Pitcairn";
$lng['country']['PL'] = "Poland";
$lng['country']['PT'] = "Portugal";
$lng['country']['PR'] = "Puerto Rico";
$lng['country']['QA'] = "Qatar";
$lng['country']['RE'] = "Reunion";
$lng['country']['RO'] = "Romania";
$lng['country']['RU'] = "Russian Federation";
$lng['country']['RW'] = "Rwanda";
$lng['country']['BL'] = "Saint Barthelemy";
$lng['country']['SH'] = "Saint Helena, Ascension and Tristan Da Cunha";
$lng['country']['KN'] = "Saint Kitts and Nevis";
$lng['country']['LC'] = "Saint Lucia";
$lng['country']['MF'] = "Saint Martin (French Part)";
$lng['country']['PM'] = "Saint Pierre and Miquelon";
$lng['country']['VC'] = "Saint Vincent and the Grenadines";
$lng['country']['WS'] = "Samoa";
$lng['country']['SM'] = "San Marino";
$lng['country']['ST'] = "Sao Tome and Principe";
$lng['country']['SA'] = "Saudi Arabia";
$lng['country']['SN'] = "Senegal";
$lng['country']['RS'] = "Serbia";
$lng['country']['SC'] = "Seychelles";
$lng['country']['SL'] = "Sierra Leone";
$lng['country']['SG'] = "Singapore";
$lng['country']['SX'] = "Sint Maarten (Dutch Part)";
$lng['country']['SK'] = "Slovakia";
$lng['country']['SI'] = "Slovenia";
$lng['country']['SB'] = "Solomon Islands";
$lng['country']['SO'] = "Somalia";
$lng['country']['ZA'] = "South Africa";
$lng['country']['GS'] = "South Georgia and the South Sandwich Islands";
$lng['country']['ES'] = "Spain";
$lng['country']['LK'] = "Sri Lanka";
$lng['country']['SD'] = "Sudan";
$lng['country']['SR'] = "Suriname";
$lng['country']['SJ'] = "Svalbard and Jan Mayen";
$lng['country']['SZ'] = "Swaziland";
$lng['country']['SE'] = "Sweden";
$lng['country']['CH'] = "Switzerland";
$lng['country']['SY'] = "Syrian Arab Republic";
$lng['country']['TW'] = "Taiwan, Province of China";
$lng['country']['TJ'] = "Tajikistan";
$lng['country']['TZ'] = "Tanzania, United Republic of";
$lng['country']['TH'] = "Thailand";
$lng['country']['TL'] = "Timor-Leste";
$lng['country']['TG'] = "Togo";
$lng['country']['TK'] = "Tokelau";
$lng['country']['TO'] = "Tonga";
$lng['country']['TT'] = "Trinidad and Tobago";
$lng['country']['TN'] = "Tunisia";
$lng['country']['TR'] = "Turkey";
$lng['country']['TM'] = "Turkmenistan";
$lng['country']['TC'] = "Turks and Caicos Islands";
$lng['country']['TV'] = "Tuvalu";
$lng['country']['UG'] = "Uganda";
$lng['country']['UA'] = "Ukraine";
$lng['country']['AE'] = "United Arab Emirates";
$lng['country']['GB'] = "United Kingdom";
$lng['country']['US'] = "United States";
$lng['country']['UM'] = "United States Minor Outlying Islands";
$lng['country']['UY'] = "Uruguay";
$lng['country']['UZ'] = "Uzbekistan";
$lng['country']['VU'] = "Vanuatu";
$lng['country']['VE'] = "Venezuela, Bolivarian Republic of";
$lng['country']['VN'] = "Viet Nam";
$lng['country']['VG'] = "Virgin Islands, British";
$lng['country']['VI'] = "Virgin Islands, U.S.";
$lng['country']['WF'] = "Wallis and Futuna";
$lng['country']['EH'] = "Western Sahara";
$lng['country']['YE'] = "Yemen";
$lng['country']['ZM'] = "Zambia";
$lng['country']['ZW'] = "Zimbabwe";

// ADDED IN FROXLOR 0.9.22-svn1
$lng['diskquota'] = 'Quota';
$lng['serversettings']['diskquota_enabled'] = 'Kvóta aktivována?';
$lng['serversettings']['diskquota_repquota_path']['description'] = 'Path to repquota';
$lng['serversettings']['diskquota_quotatool_path']['description'] = 'Path to quotatool';
$lng['serversettings']['diskquota_customer_partition']['description'] = 'Partition, on which the customer files are stored';
$lng['tasks']['diskspace_set_quota'] = 'Set quota on filesystem';
$lng['error']['session_timeout'] = 'Moc nízká hodnota';
$lng['error']['session_timeout_desc'] = 'You should not set the session timeout lower than 1 minute.';

// ADDED IN FROXLOR 0.9.24-svn1
$lng['admin']['assignedmax'] = 'Přiřazeno / Max';
$lng['admin']['usedmax'] = 'Použito / Max';
$lng['admin']['used'] = 'Použito';
$lng['mysql']['size'] = 'Velikost';

$lng['error']['invalidhostname'] = 'Hostname needs to be a valid domain. It can\'t be empty nor can it consist only of whitespaces';

$lng['traffic']['http'] = 'HTTP (MiB)';
$lng['traffic']['ftp'] = 'FTP (MiB)';
$lng['traffic']['mail'] = 'Mail (MiB)';

// ADDED IN 0.9.27-svn1
$lng['serversettings']['mod_fcgid']['idle_timeout']['title'] = 'Idle Timeout';
$lng['serversettings']['mod_fcgid']['idle_timeout']['description'] = 'Timeout setting for Mod FastCGI.';
$lng['serversettings']['phpfpm_settings']['idle_timeout']['title'] = 'Idle Timeout';
$lng['serversettings']['phpfpm_settings']['idle_timeout']['description'] = 'Timeout setting for PHP FPM FastCGI.';

// ADDED IN 0.9.27-svn2
$lng['panel']['cancel'] = 'Zrušit';
$lng['admin']['delete_statistics'] = 'Promazat statistiky';
$lng['admin']['speciallogwarning'] = 'WARNING: By changing this setting you will lose all your old statistics for this domain. If you are sure you wish to change this type "%s" in the field below and click the "delete" button.<br /><br />';

// ADDED IN 0.9.28-svn2
$lng['serversettings']['vmail_maildirname']['title'] = 'Maildir name';
$lng['serversettings']['vmail_maildirname']['description'] = 'Maildir directory into user\'s account. Normally \'Maildir\', in some implementations \'.maildir\', and directly into user\'s directory if left blank.';
$lng['tasks']['remove_emailacc_files'] = 'Delete customer e-mail data.';

// ADDED IN 0.9.28-svn5
$lng['error']['operationnotpermitted'] = 'Operace nepovolena!';
$lng['error']['featureisdisabled'] = 'Funkce %s je vypnuta. Kontaktuj prosím providera.';
$lng['serversettings']['catchall_enabled']['title'] = 'Use Catchall';
$lng['serversettings']['catchall_enabled']['description'] = 'Do you want to provide your customers the catchall-feature?';

// ADDED IN 0.9.28.svn6
$lng['serversettings']['apache_24']['title'] = 'Použít modifikace pro Apache 2.4';
$lng['serversettings']['apache_24']['description'] = '<strong class="red">ATTENTION:</strong> use only if you actually have apache version 2.4 or higher installed<br />otherwise your webserver will not be able to start';
$lng['serversettings']['nginx_fastcgiparams']['title'] = 'Path to fastcgi_params file';
$lng['serversettings']['nginx_fastcgiparams']['description'] = 'Specify the path to nginx\'s fastcgi_params file including filename';

// Added in Froxlor 0.9.28-rc2
$lng['serversettings']['documentroot_use_default_value']['title'] = 'Use domain name as default value for DocumentRoot path';
$lng['serversettings']['documentroot_use_default_value']['description'] = 'If enabled and DocumentRoot path is empty, default value will be the (sub)domain name.<br /><br />Examples: <br />/var/customers/customer_name/example.com/<br />/var/customers/customer_name/subdomain.example.com/';

$lng['error']['usercurrentlydeactivated'] = 'Uživatel %s je momentálně deaktivován';
$lng['admin']['speciallogfile']['title'] = 'Oddělit log soubor';
$lng['admin']['speciallogfile']['description'] = 'Enable this to get a separate access-log file for this domain';
$lng['error']['setlessthanalreadyused'] = 'You cannot set less resources of \'%s\' than this user already used<br />';
$lng['error']['stringmustntbeempty'] = 'The value for the field %s must not be empty';
$lng['admin']['domain_editable']['title'] = 'Povolit upravování domény';
$lng['admin']['domain_editable']['desc'] = 'If set to yes, the customer is allowed to change several domain-settings.<br />If set to no, nothing can be changed by the customer.';
$lng['admin']['writeaccesslog']['title'] = 'Write an access log';
$lng['admin']['writeaccesslog']['description'] = 'Enable this to get an access-log file for this domain';
$lng['admin']['writeerrorlog']['title'] = 'Write an error log';
$lng['admin']['writeerrorlog']['description'] = 'Enable this to get an error-log file for this domain';

// Added in Froxlor 0.9.29-dev
$lng['serversettings']['panel_phpconfigs_hidestdsubdomain']['title'] = 'Hide standard-subdomains in PHP-configuration overview';
$lng['serversettings']['panel_phpconfigs_hidestdsubdomain']['description'] = 'If activated the standard-subdomains for customers will not be displayed in the php-configurations overview<br /><br />Note: This is only visible if you have enabled FCGID or PHP-FPM';
$lng['serversettings']['passwordcryptfunc']['title'] = 'Choose which password-crypt method is to be used';
$lng['serversettings']['systemdefault'] = 'Základní systém. nastavení';
$lng['serversettings']['panel_allow_theme_change_admin'] = 'Povolit amdinům změnit téma';
$lng['serversettings']['panel_allow_theme_change_customer'] = 'Allow customers to change the theme';
$lng['serversettings']['axfrservers']['title'] = 'AXFR servery';
$lng['serversettings']['axfrservers']['description'] = 'A comma separated list of IP addresses allowed to transfer (AXFR) dns zones.';
$lng['panel']['ssleditor'] = 'SSL nastavené pro tuto doménu';
$lng['admin']['ipsandports']['ssl_paste_description'] = 'Paste your complete certificate content in the textbox';
$lng['admin']['ipsandports']['ssl_cert_file_content'] = 'Content of the ssl certificate';
$lng['admin']['ipsandports']['ssl_key_file_content'] = 'Content of the ssl (private-) key file';
$lng['admin']['ipsandports']['ssl_ca_file_content'] = 'Content of the ssl CA file (optional)';
$lng['admin']['ipsandports']['ssl_ca_file_content_desc'] = '<br /><br />Client authentication, set this only if you know what it is.';
$lng['admin']['ipsandports']['ssl_cert_chainfile_content'] = 'Content of the certificate chain file (optional)';
$lng['admin']['ipsandports']['ssl_cert_chainfile_content_desc'] = '<br /><br />Mostly CA_Bundle, or similar, you probably want to set this if you bought a SSL certificate.';
$lng['error']['sslcertificateismissingprivatekey'] = 'You need to specify a private key for your certificate';
$lng['error']['sslcertificatewrongdomain'] = 'The given certificate does not belong to this domain';
$lng['error']['sslcertificateinvalidcert'] = 'The given certificate-content does not seem to be a valid certificate';
$lng['error']['sslcertificateinvalidcertkeypair'] = 'The given private-key does not belong to the given certificate';
$lng['error']['sslcertificateinvalidca'] = 'The given CA certificate data does not seem to be a valid certificate';
$lng['error']['sslcertificateinvalidchain'] = 'The given certificate chain data does not seem to be a valid certificate';
$lng['serversettings']['customerssl_directory']['title'] = 'Webserver customer-ssl certificates-directory';
$lng['serversettings']['customerssl_directory']['description'] = 'Where should customer-specified ssl-certificates be created?<br /><br /><div class="red">NOTE: This folder\'s content gets deleted regularly so avoid storing data in there manually.</div>';
$lng['admin']['phpfpm.ininote'] = 'Not all values you may want to define can be used in the php-fpm pool configuration';

// Added in Froxlor 0.9.30
$lng['crondesc']['cron_mailboxsize'] = 'Calculating of mailbox-sizes';
$lng['domains']['ipandport_multi']['title'] = 'IP adresa(y)';
$lng['domains']['ipandport_multi']['description'] = 'Specify one or more IP address for the domain.<br /><br /><div class="red">NOTE: IP addresses cannot be changed when the domain is configured as <strong>alias-domain</strong> of another domain.</div>';
$lng['domains']['ipandport_ssl_multi']['title'] = 'SSL IP adresa(y)';
$lng['domains']['ssl_redirect']['title'] = 'SSL přesměrování';
$lng['domains']['ssl_redirect']['description'] = 'This option creates redirects for non-ssl vhosts so that all requests are redirected to the SSL-vhost.<br /><br />e.g. a request to <strong>http</strong>://domain.tld/ will redirect you to <strong>https</strong>://domain.tld/';
$lng['admin']['phpinfo'] = 'PHPinfo()';
$lng['admin']['selectserveralias'] = 'ServerAlias value for the domain';
$lng['admin']['selectserveralias_desc'] = 'Choose whether froxlor should create a wildcard-entry (*.domain.tld), a WWW-alias (www.domain.tld) or no alias at all';
$lng['domains']['serveraliasoption_wildcard'] = 'Wildcard (*.domain.tld)';
$lng['domains']['serveraliasoption_www'] = 'WWW (www.domain.tld)';
$lng['domains']['serveraliasoption_none'] = 'Bez aliasu';
$lng['error']['givendirnotallowed'] = 'The given directory in field %s is not allowed.';
$lng['serversettings']['ssl']['ssl_cipher_list']['title'] = 'Configure the allowed SSL ciphers';
$lng['serversettings']['ssl']['ssl_cipher_list']['description'] = 'This is a list of ciphers that you want (or don\'t want) to use when talking SSL. For a list of ciphers and how to include/exclude them, see sections "CIPHER LIST FORMAT" and "CIPHER STRINGS" on <a href="https://www.openssl.org/docs/manmaster/man1/openssl-ciphers.html">the man-page for ciphers</a>.<br /><br /><b>Default value is:</b><pre>ECDH+AESGCM:ECDH+AES256:!aNULL:!MD5:!DSS:!DH:!AES128</pre>';

// Added in Froxlor 0.9.31
$lng['panel']['dashboard'] = 'Nástěnka';
$lng['panel']['assigned'] = 'Přiřazen';
$lng['panel']['available'] = 'Dostupný';
$lng['customer']['services'] = 'Služby';
$lng['serversettings']['phpfpm_settings']['ipcdir']['title'] = 'FastCGI IPC directory';
$lng['serversettings']['phpfpm_settings']['ipcdir']['description'] = 'The directory where the php-fpm sockets will be stored by the webserver.<br />This directory has to be readable for the webserver';
$lng['panel']['news'] = 'News';
$lng['error']['sslredirectonlypossiblewithsslipport'] = 'Using the SSL redirect is only possible when the domain has at least one ssl-enabled IP/port combination assigned.';
$lng['error']['fcgidstillenableddeadlock'] = 'FCGID is currently active.<br />Please deactivate it before switching to another webserver than Apache2 or lighttpd';
$lng['error']['send_report_title'] = 'Send error report';
$lng['error']['send_report_desc'] = 'Thank you for reporting this error and helping us to improve Froxlor.<br />This is the email which will be sent to the Froxlor developer team:';
$lng['error']['send_report'] = 'Send report';
$lng['error']['send_report_error'] = 'Error when sending report: <br />%s';
$lng['error']['notallowedtouseaccounts'] = 'Your account does not allow using IMAP/POP3. You cannot add email accounts.';
$lng['pwdreminder']['changed'] = 'Your password has been updated successfully. You can now login with your new password.';
$lng['pwdreminder']['wrongcode'] = 'Sorry, your activation-code does not exist or has already expired.';
$lng['admin']['templates']['LINK'] = 'Replaced with the customers password reset link.';
$lng['pwdreminder']['choosenew'] = 'Set new password';
$lng['serversettings']['allow_error_report_admin']['title'] = 'Allow administrators/resellers to report database-errors to Froxlor';
$lng['serversettings']['allow_error_report_admin']['description'] = 'Please note: Never send any personal (customer-)data to us!';
$lng['serversettings']['allow_error_report_customer']['title'] = 'Allow customers to report database-errors to Froxlor';
$lng['serversettings']['allow_error_report_customer']['description'] = 'Please note: Never send any personal (customer-)data to us!';
$lng['admin']['phpsettings']['enable_slowlog'] = 'Enable slowlog (per domain)';
$lng['admin']['phpsettings']['request_terminate_timeout'] = 'Request terminate-timeout';
$lng['admin']['phpsettings']['request_slowlog_timeout'] = 'Request slowlog-timeout';
$lng['admin']['templates']['SERVER_HOSTNAME'] = 'Replaces the system-hostname (URL to froxlor)';
$lng['admin']['templates']['SERVER_IP'] = 'Replaces the default server ip-address';
$lng['admin']['templates']['SERVER_PORT'] = 'Replaces the default server port';
$lng['admin']['templates']['DOMAINNAME'] = 'Replaces the customers standard-subdomain (can be empty if none is generated)';
$lng['admin']['show_news_feed']['title'] = 'Show news-feed on admin-dashboard';
$lng['admin']['show_news_feed']['description'] = 'Enable this to show the official Froxlor newsfeed (https://inside.froxlor.org/news/) on your dashboard and never miss important information or release-announcements.';
$lng['panel']['newsfeed_disabled'] = 'The newsfeed is disabled. Click the edit icon to go to the settings.';

// Added in Froxlor 0.9.32
$lng['logger']['reseller'] = "Reseller";
$lng['logger']['admin'] = "Administrátor";
$lng['logger']['cron'] = "Cronjob";
$lng['logger']['login'] = "Přihlášení";
$lng['logger']['intern'] = "Interní";
$lng['logger']['unknown'] = "Neznámý";
$lng['serversettings']['mailtraffic_enabled']['title'] = "Analyzovat mailový provoz";
$lng['serversettings']['mailtraffic_enabled']['description'] = "Enable analysing of mailserver logs to calculate the traffic";
$lng['serversettings']['mdaserver']['title'] = "MDA typ";
$lng['serversettings']['mdaserver']['description'] = "Type of the Mail Delivery Server";
$lng['serversettings']['mdalog']['title'] = "MDA log";
$lng['serversettings']['mdalog']['description'] = "Logfile of the Mail Delivery Server";
$lng['serversettings']['mtaserver']['title'] = "MTA type";
$lng['serversettings']['mtaserver']['description'] = "Type of the Mail Transfer Agent";
$lng['serversettings']['mtalog']['title'] = "MTA log";
$lng['serversettings']['mtalog']['description'] = "Logfile of the Mail Transfer Agent";
$lng['panel']['ftpdesc'] = 'FTP description';
$lng['admin']['cronsettings'] = 'Cronjob settings';
$lng['serversettings']['system_cronconfig']['title'] = 'Cron configuration file';
$lng['serversettings']['system_cronconfig']['description'] = 'Path to the cron-service configuration-file. This file will be updated regularly and automatically by froxlor.<br />Note: Please <b>be sure</b> to use the same filename as for the main froxlor cronjob (default: /etc/cron.d/froxlor)!<br><br>If you are using <b>FreeBSD</b>, please specify <i>/etc/crontab</i> here!';
$lng['tasks']['remove_ftpacc_files'] = 'Delete customer ftp-account data.';
$lng['tasks']['regenerating_crond'] = 'Rebuilding the cron.d-file';
$lng['serversettings']['system_crondreload']['title'] = 'Cron-daemon reload command';
$lng['serversettings']['system_crondreload']['description'] = 'Specify the command to execute in order to reload your systems cron-daemon';
$lng['admin']['integritycheck'] = 'Ověření databáze';
$lng['admin']['integrityid'] = '#';
$lng['admin']['integrityname'] = 'Název';
$lng['admin']['integrityresult'] = 'Výsledek';
$lng['admin']['integrityfix'] = 'Opravit problémy automaticky';
$lng['question']['admin_integritycheck_reallyfix'] = 'Do you really want to try fixing all database integrity problems automatically?';
$lng['serversettings']['system_croncmdline']['title'] = 'Cron execution command (php-binary)';
$lng['serversettings']['system_croncmdline']['description'] = 'Command to execute our cronjobs. Change this only if you know what you are doing (default: "/usr/bin/nice -n 5 /usr/bin/php -q")!';
$lng['error']['cannotdeletehostnamephpconfig'] = 'This PHP-configuration is used by the Froxlor-vhost and cannot be deleted.';
$lng['error']['cannotdeletedefaultphpconfig'] = 'This PHP-configuration is set as default and cannot be deleted.';
$lng['serversettings']['system_cron_allowautoupdate']['title'] = 'Allow automatic database updates';
$lng['serversettings']['system_cron_allowautoupdate']['description'] = '<div class="red"><b>ATTENTION:</b></div> This settings allows the cronjob to bypass the version-check of froxlors files and database and runs the database-updates in case a version-mismatch occurs.<br><br><div class="red">Auto-update will always set default values for new settings or changes. This might not always suite your system. Please think twice before activating this option</div>';
$lng['error']['passwordshouldnotbeusername'] = 'The password should not be the same as the username.';

// Added in Froxlor 0.9.33
$lng['admin']['customer_show_news_feed'] = "Show newsfeed on customer-dashboard";
$lng['admin']['customer_news_feed_url']['title'] = "Use custom RSS-feed";
$lng['admin']['customer_news_feed_url']['description'] = "Specify a custom RSS-feed that will be shown to your customers on their dashboard.<br /><small>Leave this empty to use the official froxlor newsfeed (https://inside.froxlor.org/news/).</small>";
$lng['serversettings']['dns_createhostnameentry'] = "Create bind-zone/config for system hostname";
$lng['serversettings']['panel_password_alpha_lower']['title'] = 'Lowercase character';
$lng['serversettings']['panel_password_alpha_lower']['description'] = 'Password must contain at least one lowercase letter (a-z).';
$lng['serversettings']['panel_password_alpha_upper']['title'] = 'Uppercase character';
$lng['serversettings']['panel_password_alpha_upper']['description'] = 'Password must contain at least one  uppercase letter (A-Z).';
$lng['serversettings']['panel_password_numeric']['title'] = 'Numbers';
$lng['serversettings']['panel_password_numeric']['description'] = 'Password must contain at least one number (0-9).';
$lng['serversettings']['panel_password_special_char_required']['title'] = 'Special character';
$lng['serversettings']['panel_password_special_char_required']['description'] = 'Password must contain at least one of the characters defined below.';
$lng['serversettings']['panel_password_special_char']['title'] = 'Special characters list';
$lng['serversettings']['panel_password_special_char']['description'] = 'One of these characters is required if the above option is set.';
$lng['phpfpm']['use_mod_proxy']['title'] = 'Použít mod_proxy / mod_proxy_fcgi';
$lng['phpfpm']['use_mod_proxy']['description'] = '<strong class="red">Must be enabled when using Debian 9.x (Stretch)</strong>. Activate to use php-fpm via mod_proxy_fcgi. Requires at least apache-2.4.9';
$lng['error']['no_phpinfo'] = 'Omlouváme se, ale phpinfo() nelze načíst';

$lng['admin']['movetoadmin'] = 'Přesunout zákazníka';
$lng['admin']['movecustomertoadmin'] = 'Move customer to the selected admin/reseller<br /><small>Leave this empty for no change.<br />If the desired admin does not show up in the list, his customer-limit has been reached.</small>';
$lng['error']['moveofcustomerfailed'] = 'Moving the customer to the selected admin/reseller failed. Keep in mind that all other changes to the customer were applied successfully at this stage.<br><br>Error-message: %s';

$lng['domains']['domain_import'] = 'Importovat domény';
$lng['domains']['import_separator'] = 'Oddělovač';
$lng['domains']['import_offset'] = 'Offset';
$lng['domains']['import_file'] = 'CSV-Soubor';
$lng['success']['domain_import_successfully'] = 'Úspěšně importováno %s domén.';
$lng['error']['domain_import_error'] = 'Following error occurred while importing domains: %s';
$lng['admin']['note'] = 'Poznámka';
$lng['domains']['import_description'] = 'Detailed information about the structure of the import-file and how to import successfully, please visit <a href="https://github.com/Froxlor/Froxlor/wiki/Domain-import-documenation" target="_blank">https://github.com/Froxlor/Froxlor/wiki/Domain-import-documenation</a>';
$lng['usersettings']['custom_notes']['title'] = 'Custom notes';
$lng['usersettings']['custom_notes']['description'] = 'Feel free to put any notes you want/need in here. They will show up in the admin/customer overview for the corresponding user.';
$lng['usersettings']['custom_notes']['show'] = 'Show your notes on the dashboard of the user';
$lng['error']['fcgidandphpfpmnogoodtogether'] = 'FCGID and PHP-FPM cannot be activated at the same time';

// Added in Froxlor 0.9.34
$lng['admin']['configfiles']['legend'] = '<h3>You are about to configure a service/daemon</h3>';
$lng['admin']['configfiles']['commands'] = '<span class="red">Commands:</span> These commands are to be executed line by line as root-user in a shell. It is safe to copy the whole block and paste it into the shell.';
$lng['admin']['configfiles']['files'] = '<span class="red">Config files:</span> The commands before the textfields should open an editor with the target file. Just copy and paste the contents into the editor and save the file.<br><span class="red">Please note:</span> The MySQL-password has not been replaced for security reasons. Please replace "FROXLOR_MYSQL_PASSWORD" on your own or use the javascript form below to replace it on-site. If you forgot your MySQL-password you\'ll find it in "lib/userdata.inc.php"';
$lng['serversettings']['apache_itksupport']['title'] = 'Use modifications for Apache ITK-MPM';
$lng['serversettings']['apache_itksupport']['description'] = '<strong class="red">ATTENTION:</strong> use only if you actually have apache itk-mpm enabled<br />otherwise your webserver will not be able to start';
$lng['integrity_check']['databaseCharset'] = 'Character set of database (should be UTF-8)';
$lng['integrity_check']['domainIpTable'] = 'IP &lt;&dash;&gt; domain references';
$lng['integrity_check']['subdomainSslRedirect'] = 'False SSL-redirect flag for non-ssl domains';
$lng['integrity_check']['froxlorLocalGroupMemberForFcgidPhpFpm'] = 'froxlor-user in the customer groups (for FCGID/php-fpm)';
$lng['integrity_check']['webserverGroupMemberForFcgidPhpFpm'] = 'Webserver-user in the customer groups (for FCGID/php-fpm)';
$lng['integrity_check']['subdomainLetsencrypt'] = 'Main domains with no SSL-Port assigned don\'t have any subdomains with active SSL redirect';
$lng['admin']['mod_fcgid_umask']['title'] = 'Umask (default: 022)';

// Added for apcuinfo
$lng['admin']['apcuinfo'] = 'APCu info';
$lng['error']['no_apcuinfo'] = 'No cache info available. APCu does not appear to be running.';
$lng['apcuinfo']['clearcache'] = 'Vyčistit APCu cache';
$lng['apcuinfo']['generaltitle'] = 'General Cache Information';
$lng['apcuinfo']['version'] = 'APCu verze';
$lng['apcuinfo']['phpversion'] = 'PHP verze';
$lng['apcuinfo']['host'] = 'APCu Host';
$lng['apcuinfo']['sharedmem'] = 'Sdílená pamět';
$lng['apcuinfo']['sharedmemval'] = '%d Segment(s) with %s (%s memory)';
$lng['apcuinfo']['start'] = 'Čas zapnutí';
$lng['apcuinfo']['uptime'] = 'Uptime';
$lng['apcuinfo']['upload'] = 'Podpora nahrávání souborů';
$lng['apcuinfo']['cachetitle'] = 'Cache Information';
$lng['apcuinfo']['cvar'] = 'Cached Variables';
$lng['apcuinfo']['hit'] = 'Hits';
$lng['apcuinfo']['miss'] = 'Misses';
$lng['apcuinfo']['reqrate'] = 'Request Rate (hits, misses)';
$lng['apcuinfo']['creqsec'] = 'cache requests/second';
$lng['apcuinfo']['hitrate'] = 'Hit Rate';
$lng['apcuinfo']['missrate'] = 'Miss Rate';
$lng['apcuinfo']['insrate'] = 'Insert Rate';
$lng['apcuinfo']['cachefull'] = 'Cache full count';
$lng['apcuinfo']['runtime'] = 'Runtime Settings';
$lng['apcuinfo']['memnote'] = 'Využití paměti <font size=-2>(několik krajíců indikuje fragmenty)</font>';
$lng['apcuinfo']['free'] = 'Volné';
$lng['apcuinfo']['used'] = 'Využité';
$lng['apcuinfo']['hitmiss'] = 'Hits & Misses';
$lng['apcuinfo']['detailmem'] = 'Detailní využití paměti a fragmentace';
$lng['apcuinfo']['fragment'] = 'Fragmentace';

// Added for opcache info
$lng['admin']['opcacheinfo'] = 'OPcache Info';
$lng['error']['no_opcacheinfo'] = 'No cache info available. OPCache does not appear to be running.';
$lng['opcacheinfo']['generaltitle'] = 'General Information';
$lng['opcacheinfo']['resetcache'] = 'Resetovat OPcache';
$lng['opcacheinfo']['version'] = 'OPCache verze';
$lng['opcacheinfo']['phpversion'] = 'PHP verze';
$lng['opcacheinfo']['runtimeconf'] = 'Runtime Configuration';
$lng['opcacheinfo']['start'] = 'Čas zapnutí';
$lng['opcacheinfo']['lastreset'] = 'Poslední restart';
$lng['opcacheinfo']['oomrestarts'] = 'OOM restart count';
$lng['opcacheinfo']['hashrestarts'] = 'Hash restart count';
$lng['opcacheinfo']['manualrestarts'] = 'Manual restart count';
$lng['opcacheinfo']['hitsc'] = 'Hits count';
$lng['opcacheinfo']['missc'] = 'Miss count';
$lng['opcacheinfo']['blmissc'] = 'Blacklist miss count';
$lng['opcacheinfo']['status'] = 'Stav';
$lng['opcacheinfo']['never'] = 'never';
$lng['opcacheinfo']['enabled'] = 'OPcache Enabled';
$lng['opcacheinfo']['cachefull'] = 'Cache je plný';
$lng['opcacheinfo']['restartpending'] = 'Pending restart';
$lng['opcacheinfo']['restartinprogress'] = 'Restart právě probíhá';
$lng['opcacheinfo']['cachedscripts'] = 'Cached scripts count';
$lng['opcacheinfo']['memusage'] = 'Využití paměti';
$lng['opcacheinfo']['totalmem'] = 'Celková pamět';
$lng['opcacheinfo']['usedmem'] = 'Využitá paměť';
$lng['opcacheinfo']['freemem'] = 'Volná pamět';
$lng['opcacheinfo']['wastedmem'] = 'Wasted memory';
$lng['opcacheinfo']['maxkey'] = 'Maximum keys';
$lng['opcacheinfo']['usedkey'] = 'Used keys';
$lng['opcacheinfo']['wastedkey'] = 'Wasted keys';
$lng['opcacheinfo']['strinterning'] = 'String interning';
$lng['opcacheinfo']['strcount'] = 'String count';
$lng['opcacheinfo']['keystat'] = 'Cached keys statistic';
$lng['opcacheinfo']['used'] = 'Využité';
$lng['opcacheinfo']['free'] = 'Volné';
$lng['opcacheinfo']['blacklist'] = 'Černá listina';
$lng['opcacheinfo']['novalue'] = '<i>bez hodnoty</i>';
$lng['opcacheinfo']['true'] = '<i>true</i>';
$lng['opcacheinfo']['false'] = '<i>false</i>';

// Added for let's encrypt
$lng['admin']['letsencrypt']['title'] = 'Používat Let\'s Encrypt';
$lng['admin']['letsencrypt']['description'] = 'Get a free certificate from <a href="https://letsencrypt.org">Let\'s Encrypt</a>. The certificate will be created and renewed automatically.<br><strong class="red">ATTENTION:</strong> If wildcards are enabled, this option will automatically be disabled. This feature is still in beta.';
$lng['customer']['letsencrypt']['title'] = 'Use Let\'s Encrypt';
$lng['customer']['letsencrypt']['description'] = 'Get a free certificate from <a href="https://letsencrypt.org">Let\'s Encrypt</a>. The certificate will be created and renewed automatically.<br><strong class="red">ATTENTION:</strong> This feature is still in beta.';
$lng['error']['sslredirectonlypossiblewithsslipport'] = 'Using Let\'s Encrypt is only possible when the domain has at least one ssl-enabled IP/port combination assigned.';
$lng['error']['nowildcardwithletsencrypt'] = 'Let\'s Encrypt cannot handle wildcard-domains using ACME in froxlor (requires dns-challenge), sorry. Please set the ServerAlias to WWW or disable it completely';
$lng['panel']['letsencrypt'] = 'Používá Let\'s encrypt';
$lng['crondesc']['cron_letsencrypt'] = 'aktualizuji Let\'s Encrypt certifikáty';
$lng['serversettings']['letsencryptca']['title'] = "Let's Encrypt environment";
$lng['serversettings']['letsencryptca']['description'] = "Environment to be used for Let's Encrypt certificates.";
$lng['serversettings']['letsencryptcountrycode']['title'] = "Let's Encrypt country code";
$lng['serversettings']['letsencryptcountrycode']['description'] = "2 letter country code used to generate Let's Encrypt certificates.";
$lng['serversettings']['letsencryptstate']['title'] = "Let's Encrypt status";
$lng['serversettings']['letsencryptstate']['description'] = "State used to generate Let's Encrypt certificates.";
$lng['serversettings']['letsencryptchallengepath']['title'] = "Path for Let's Encrypt challenges";
$lng['serversettings']['letsencryptchallengepath']['description'] = "Directory where the Let's Encrypt challenges should be offered from via a global alias.";
$lng['serversettings']['letsencryptkeysize']['title'] = "Key size for new Let's Encrypt certificates";
$lng['serversettings']['letsencryptkeysize']['description'] = "Size of the key in Bits for new Let's Encrypt certificates.";
$lng['serversettings']['letsencryptreuseold']['title'] = "Re-use Let's Encrypt key";
$lng['serversettings']['letsencryptreuseold']['description'] = "If activated, the same key will be used for every renew, otherwise a new key will be generated every time.";
$lng['serversettings']['leenabled']['title'] = "Zapnout Let's Encrypt";
$lng['serversettings']['leenabled']['description'] = "If activated, customers are able to let froxlor automatically generate and renew Let's Encrypt ssl-certificates for domains with a ssl IP/port.<br /><br />Please remember that you need to go through the webserver-configuration when enabled because this feature needs a special configuration.";
$lng['domains']['ssl_redirect_temporarilydisabled'] = "<br>The SSL redirect is temporarily deactivated while a new Let's Encrypt certificate is generated. It will be activated again after the certificate was generated.";

// Added for CAA record support
$lng['serversettings']['caa_entry']['title'] = 'Generovat CAA DNS záznamy';
$lng['serversettings']['caa_entry']['description'] = 'Automatically generates CAA records for SSL-enabled domains that are using Let\'s Encrypt';
$lng['serversettings']['caa_entry_custom']['title'] = 'Additional CAA DNS records';
$lng['serversettings']['caa_entry_custom']['description'] = 'DNS Certification Authority Authorization (CAA) is an Internet security policy mechanism which allows domain name holders to indicate to certificate authorities<br>whether they are authorized to issue digital certificates for a particular domain name. It does this by means of a new "CAA" Domain Name System (DNS) resource record.<br><br>The content of this field will be included into the DNS zone directly (each line results in a CAA record).<br>If Let\'s Encrypt is enabled for this domain, this entry will always be added automatically and does not need to be added manually:<br><code>0 issue "letsencrypt.org"</code> (If domain is a wildcard domain, issuewild will be used instead).<br>To enable Incident Reporting, you can add an <code>iodef</code> record. An example for sending such report to <code>me@example.com</code> would be:<br><code>0 iodef "mailto:me@example.com"</code><br><br><strong>Attention:</strong> The code won\'t be checked for any errors. If it contains errors, your CAA records might not work!';

// Autoupdate
$lng['admin']['autoupdate'] = 'Auto-Aktualizace';
$lng['error']['customized_version'] = 'Vypadá to, že tvá instalace Froxloru byla upravována, podpora byla zrušena, promiň.';
$lng['error']['autoupdate_0'] = 'Neznámá chyba';
$lng['error']['autoupdate_1'] = 'PHP nastavení allow_url_fopen je vypnuté. Automatická aktualizace toto nastavení potřebuje v php.ini';
$lng['error']['autoupdate_2'] = 'PHP zip rozšíření nebylo nalezeno, ujisti se, že je nainstalované a aktivované';
$lng['error']['autoupdate_4'] = 'Froxlor archiv nemohl být uložen na disku :(';
$lng['error']['autoupdate_5'] = 'version.froxlor.org vrátila nepřijatelné hodnoty :(';
$lng['error']['autoupdate_6'] = 'Uf, nebyla nalezena (platná) verze ke stažení :(';
$lng['error']['autoupdate_7'] = 'Stažený archiv nebyl nalezen :(';
$lng['error']['autoupdate_8'] = 'Archiv nemohl být extrahován :(';
$lng['error']['autoupdate_9'] = 'Stažený soubor neprošel testem integrity. Zkus aktualizaci znovu.';
$lng['error']['autoupdate_10'] = 'Minimální podporovaná verze PHP je 7.0';

$lng['admin']['server_php'] = 'PHP';
$lng['domains']['termination_date'] = 'Datum zrušení';
$lng['domains']['termination_date_overview'] = 'zrušeno datem ';
$lng['panel']['set'] = 'Použít';
$lng['customer']['selectserveralias_addinfo'] = 'This option can be set when editing the domain. Its initial value is inherited from the parent-domain.';
$lng['error']['mailaccistobedeleted'] = "Another account with the same name (%s) is currently being deleted and can therefore not be added at this moment.";

$lng['menue']['extras']['backup'] = 'Záloha';
$lng['extras']['backup'] = 'Vytvořit zálohu';
$lng['extras']['backup_web'] = 'Zálohovat web-data';
$lng['extras']['backup_mail'] = 'Zálohovat mail-data';
$lng['extras']['backup_dbs'] = 'Zálohovat databáze';
$lng['error']['customerhasongoingbackupjob'] = 'There is already a backup job waiting to be processed, please be patient.';
$lng['success']['backupscheduled'] = 'Your backup job has been scheduled. Please wait for it to be processed';
$lng['success']['backupaborted'] = 'Your scheduled backup has been cancelled';
$lng['crondesc']['cron_backup'] = 'Process backup jobs';
$lng['error']['backupfunctionnotenabled'] = 'The backup function is not enabled';
$lng['serversettings']['backupenabled']['title'] = "Povolit zálohy pro zákazníky";
$lng['serversettings']['backupenabled']['description'] = "If activated, the customer will be able to schedule backup jobs (cron-backup) which generates an archive within his docroot (subdirectory chosable by customer)";
$lng['extras']['path_protection_label'] = '<strong class="red">Important</strong>';
$lng['extras']['path_protection_info'] = '<strong class="red">We strongly recommend protecting the given path, see "Extras" -> "Directory protection"</strong>';
$lng['tasks']['backup_customerfiles'] = 'Backup job for customer %loginname%';

$lng['error']['dns_domain_nodns'] = 'DNS pro tuto doménu je vypnuto';
$lng['error']['dns_content_empty'] = 'No content given';
$lng['error']['dns_content_invalid'] = 'DNS content invalid';
$lng['error']['dns_arec_noipv4'] = 'No valid IP address for A-record given';
$lng['error']['dns_aaaarec_noipv6'] = 'No valid IP address for AAAA-record given';
$lng['error']['dns_mx_prioempty'] = 'Invalid MX priority given';
$lng['error']['dns_mx_needdom'] = 'The MX content value must be a valid domain-name';
$lng['error']['dns_mx_noalias'] = 'The MX-content value cannot be an CNAME entry.';
$lng['error']['dns_cname_invaliddom'] = 'Invalid domain-name for CNAME record';
$lng['error']['dns_cname_nomorerr'] = 'There already exists a resource-record with the same record-name. It can not be used as CNAME.';
$lng['error']['dns_ns_invaliddom'] = 'Invalid domain-name for NS record';
$lng['error']['dns_srv_prioempty'] = 'Invalid SRV priority given';
$lng['error']['dns_srv_invalidcontent'] = 'Invalid SRV content, must contain of fields weight, port and target, e.g.: 5 5060 sipserver.example.com.';
$lng['error']['dns_srv_needdom'] = 'The SRV target value must be a valid domain-name';
$lng['error']['dns_srv_noalias'] = 'The SRV-target value cannot be an CNAME entry.';
$lng['error']['dns_duplicate_entry'] = 'Record already exists';
$lng['success']['dns_record_added'] = 'Record added successfully';
$lng['success']['dns_record_deleted'] = 'Record deleted successfully';
$lng['dnseditor']['edit'] = 'upravit DNS';
$lng['dnseditor']['records'] = 'záznamy';
$lng['error']['dns_notfoundorallowed'] = 'Domain not found or no permission';
$lng['serversettings']['dnseditorenable']['title'] = 'Enable DNS editor';
$lng['serversettings']['dnseditorenable']['description'] = 'Allows admins and customer to manage domain dns entries';
$lng['dns']['howitworks'] = 'Here you can manage DNS entries for your domain. Note that froxlor will automatically generate NS/MX/A/AAAA records for you. The custom entries are preferred, only missing entries will be automatically generated.';
$lng['serversettings']['dns_server']['title'] = 'DNS server daemon';
$lng['serversettings']['dns_server']['description'] = 'Remember that daemons have to be configured using froxlors configuration templates';

$lng['error']['domain_nopunycode'] = 'You must not specify punycode (IDNA). The domain will automatically be converted';
$lng['admin']['dnsenabled'] = 'Povolit DNS editor';
$lng['error']['dns_record_toolong'] = 'Records/labels can only be up to 63 characters';

// Added in froxlor 0.9.37-rc1
$lng['serversettings']['panel_customer_hide_options']['title'] = 'Hide menu items and traffic charts in customer panel';
$lng['serversettings']['panel_customer_hide_options']['description'] = 'Select items to hide in customer panel. To select multiple options, hold down CTRL while selecting.';

// Added in froxlor 0.9.38-rc1
$lng['serversettings']['allow_allow_customer_shell']['title'] = 'Allow customers to enable shell access for ftp-users';
$lng['serversettings']['allow_allow_customer_shell']['description'] = '<strong class="red">Please note: Shell access allows the user to execute various binaries on your system. Use with extreme caution. Please only activate this if you REALLY know what you are doing!!!</strong>';
$lng['serversettings']['available_shells']['title'] = 'List of available shells';
$lng['serversettings']['available_shells']['description'] = 'Comma separated list of shells that are available for the customer to chose from for their ftp-users.<br><br>Note that the default shell <strong>/bin/false</strong> will always be a choice (if enabled), even if this setting is empty. It is the default value for ftp-users in any case';
$lng['panel']['shell'] = 'Shell';
$lng['serversettings']['le_froxlor_enabled']['title'] = "Enable Let's Encrypt for the froxlor vhost";
$lng['serversettings']['le_froxlor_enabled']['description'] = "If activated, the froxlor vhost will automatically be secured using a Let's Encrypt certificate.";
$lng['serversettings']['le_froxlor_redirect']['title'] = "Enable SSL-redirect for the froxlor vhost";
$lng['serversettings']['le_froxlor_redirect']['description'] = "If activated, all http requests to your froxlor will be redirected to the corresponding SSL site.";
$lng['admin']['froxlorvhost'] = 'Froxlor VirtualHost settings';
$lng['serversettings']['option_unavailable_websrv'] = '<br><em class="red">Available only for: %s</em>';
$lng['serversettings']['option_unavailable'] = '<br><em class="red">Option not available due to other settings.</em>';
$lng['serversettings']['letsencryptacmeconf']['title'] = "Path to the acme.conf snippet";
$lng['serversettings']['letsencryptacmeconf']['description'] = "File name of the config snippet which allows the web server to serve the acme challenge.";
$lng['admin']['hostname'] = 'Hostname';
$lng['admin']['memory'] = 'Memory usage';
$lng['serversettings']['mail_use_smtp'] = 'Set mailer to use SMTP';
$lng['serversettings']['mail_smtp_host'] = 'Specify SMTP server';
$lng['serversettings']['mail_smtp_usetls'] = 'Enable TLS encryption';
$lng['serversettings']['mail_smtp_auth'] = 'Enable SMTP authentication';
$lng['serversettings']['mail_smtp_port'] = 'TCP port to connect to';
$lng['serversettings']['mail_smtp_user'] = 'SMTP username';
$lng['serversettings']['mail_smtp_passwd'] = 'SMTP heslo';
$lng['domains']['ssl_certificates'] = 'SSL certificates';
$lng['domains']['ssl_certificate_removed'] = 'The certificate with the id #%s has been removed successfully';
$lng['domains']['ssl_certificate_error'] = "Error reading certificate for domain: %s";
$lng['domains']['no_ssl_certificates'] = "There are no domains with SSL certificate";
$lng['admin']['webserversettings_ssl'] = 'Webserver SSL settings';
$lng['admin']['domain_hsts_maxage']['title'] = 'HTTP Strict Transport Security (HSTS)';
$lng['admin']['domain_hsts_maxage']['description'] = 'Specify the max-age value for the Strict-Transport-Security header<br>The value <i>0</i> will disable HSTS for the domain. Most user set a value of <i>31536000</i> (one year).';
$lng['admin']['domain_hsts_incsub']['title'] = 'Include HSTS for any subdomain';
$lng['admin']['domain_hsts_incsub']['description'] = 'The optional "includeSubDomains" directive, if present, signals the UA that the HSTS Policy applies to this HSTS Host as well as any subdomains of the host\'s domain name.';
$lng['admin']['domain_hsts_preload']['title'] = 'Include domain in <a href="https://hstspreload.appspot.com/" target="_blank">HSTS preload list</a>';
$lng['admin']['domain_hsts_preload']['description'] = 'If you would like this domain to be included in the HSTS preload list maintained by Chrome (and used by Firefox and Safari), then use activate this.<br>Sending the preload directive from your site can have PERMANENT CONSEQUENCES and prevent users from accessing your site and any of its subdomains.<br>Please read the details at <a href="https://hstspreload.appspot.com/#removal" target="_blank">hstspreload.appspot.com/#removal</a> before sending the header with "preload".';

$lng['serversettings']['http2_support']['title'] = 'HTTP2 Support';
$lng['serversettings']['http2_support']['description'] = 'enable HTTP2 support for ssl.<br><em class="red">ENABLE ONLY IF YOUR WEBSERVER SUPPORTS THIS FEATURE (nginx version 1.9.5+, apache2 version 2.4.17+)</em>';

$lng['error']['noipportgiven'] = 'No IP/port given';

// Added in froxlor 0.9.38.8
$lng['admin']['domain_ocsp_stapling']['title'] = 'OCSP stapling';
$lng['admin']['domain_ocsp_stapling']['description'] = 'See <a target="_blank" href="https://en.wikipedia.org/wiki/OCSP_stapling">Wikipedia</a> for a detailed explanation of OCSP stapling';
$lng['admin']['domain_ocsp_stapling']['nginx_version_warning'] = '<br /><strong class="red">WARNING:</strong> Nginx version 1.3.7 or above is required for OCSP stapling. If your version is older, the webserver will NOT start correctly while OCSP stapling is enabled!';
$lng['serversettings']['ssl']['apache24_ocsp_cache_path']['title'] = 'Apache 2.4: path to the OCSP stapling cache';
$lng['serversettings']['ssl']['apache24_ocsp_cache_path']['description'] = 'Configures the cache used to store OCSP responses which get included in TLS handshakes.';
$lng['serversettings']['nssextrausers']['title'] = 'Use libnss-extrausers instead of libnss-mysql';
$lng['serversettings']['nssextrausers']['description'] = 'Do not read users from the database but from files. Please only activate if you have already gone through the required configuration steps (system -> libnss-extrausers).<br><strong class="red">For Debian/Ubuntu only (or if you have compiled libnss-extrausers yourself!)</strong>';
$lng['admin']['domain_http2']['title'] = 'HTTP2 support';
$lng['admin']['domain_http2']['description'] = 'See <a target="_blank" href="https://en.wikipedia.org/wiki/HTTP/2">Wikipedia</a> for a detailed explanation of HTTP2';
$lng['admin']['testmail'] = 'SMTP test';
$lng['success']['testmailsent'] = 'Testovací email byl odeslán úspěšně';
$lng['serversettings']['le_domain_dnscheck']['title'] = "Validate DNS of domains when using Let's Encrypt";
$lng['serversettings']['le_domain_dnscheck']['description'] = "If activated, froxlor will validate whether the domain which requests a Let's Encrypt certificate resolves to at least one of the system ip addresses.";
$lng['menue']['phpsettings']['fpmdaemons'] = 'PHP-FPM versions';
$lng['admin']['phpsettings']['activephpconfigs'] = 'In use for php-config(s)';
$lng['admin']['phpsettingsforsubdomains'] = 'Apply php-config to all subdomains:';
$lng['serversettings']['phpsettingsforsubdomains']['description'] = 'If yes the chosen php-config will be updated to all subdomains';
$lng['serversettings']['leapiversion']['title'] = "Choose Let's Encrypt ACME implementation";
$lng['serversettings']['leapiversion']['description'] = "Currently only ACME v2 implementation for Let's Encrypt is supported.";
$lng['admin']['phpsettings']['pass_authorizationheader'] = 'Add "-pass-header Authorization" / "CGIPassAuth On" to vhosts';
$lng['serversettings']['ssl']['ssl_protocols']['title'] = 'Configure the TLS protocol version';
$lng['serversettings']['ssl']['ssl_protocols']['description'] = 'This is a list of ssl protocols that you want (or don\'t want) to use when using SSL. <b>Notice:</b> Some older browsers may not support the newest protocol versions.<br /><br /><b>Default value is:</b><pre>TLSv1.2</pre>';
$lng['serversettings']['phpfpm_settings']['limit_extensions']['title'] = 'Allowed extensions';
$lng['serversettings']['phpfpm_settings']['limit_extensions']['description'] = 'Limits the extensions of the main script FPM will allow to parse. This can prevent configuration mistakes on the web server side. You should only limit FPM to .php extensions to prevent malicious users to use other extensions to execute php code. Default value: .php';
$lng['phpfpm']['ini_flags'] = 'Enter possible <strong>php_flag</strong>s for php.ini. One entry per line';
$lng['phpfpm']['ini_values'] = 'Enter possible <strong>php_value</strong>s for php.ini. One entry per line';
$lng['phpfpm']['ini_admin_flags'] = 'Enter possible <strong>php_admin_flag</strong>s for php.ini. One entry per line';
$lng['phpfpm']['ini_admin_values'] = 'Enter possible <strong>php_admin_value</strong>s for php.ini. One entry per line';
$lng['serversettings']['phpfpm_settings']['envpath'] = 'Paths to add to the PATH environment. Leave empty for no PATH environment variable';
$lng['admin']['configfiles']['importexport'] = 'Import/Export';
$lng['success']['settingsimported'] = 'Settings imported successfully';
$lng['error']['jsonextensionnotfound'] = 'This feature requires the php json-extension.';

// added in froxlor 0.9.39
$lng['admin']['plans']['name'] = 'Plan name';
$lng['admin']['plans']['description'] = 'Popis';
$lng['admin']['plans']['last_update'] = 'Naposledy aktualizováno';
$lng['admin']['plans']['plans'] = 'Hosting plans';
$lng['admin']['plans']['plan_details'] = 'Plan details';
$lng['admin']['plans']['add'] = 'Add new plan';
$lng['admin']['plans']['edit'] = 'Edit plan';
$lng['admin']['plans']['use_plan'] = 'Apply plan';
$lng['question']['plan_reallydelete'] = 'Do you really want to delete the hosting plan %s?';
$lng['admin']['notryfiles']['title'] = 'No autogenerated try_files';
$lng['admin']['notryfiles']['description'] = 'Say yes here if you want to specify a custom try_files directive in specialsettings (needed for some wordpress plugins for example).';
$lng['serversettings']['phpfpm_settings']['override_fpmconfig'] = 'Override FPM-daemon settings (pm, max_children, etc.)';
$lng['serversettings']['phpfpm_settings']['override_fpmconfig_addinfo'] = '<br /><span class="red">Only used if "Override FPM-daemon settings" is set to "Yes"</span>';
$lng['panel']['backuppath']['title'] = 'Destination path for the backup';
$lng['panel']['backuppath']['description'] = 'This is the path where the backups will be stored. If backup of web-data is selected, all files from the homedir are stored excluding the backup-folder specified here.';

// added in froxlor 0.10.0
$lng['panel']['none_value'] = 'Nic';
$lng['menue']['main']['apihelp'] = 'API pomoc';
$lng['menue']['main']['apikeys'] = 'API klíče';
$lng['apikeys']['no_api_keys'] = 'Žádné API klíče nalezeny';
$lng['apikeys']['key_add'] = 'přidat nový klíč';
$lng['apikeys']['apikey_removed'] = 'The api key with the id #%s has been removed successfully';
$lng['apikeys']['apikey_added'] = 'A new api key has been generated successfully';
$lng['apikeys']['clicktoview'] = 'Klikni pro zobrazení';
$lng['apikeys']['allowed_from'] = 'Povoleno od';
$lng['apikeys']['allowed_from_help'] = 'Comma separated list of ip addresses. Default empty.<br>Specifying a subnet e.g. 192.168.1.1/24 is currently not supported.';
$lng['apikeys']['valid_until'] = 'Platné do';
$lng['apikeys']['valid_until_help'] = 'Date until valid, format YYYY-MM-DD';
$lng['serversettings']['enable_api']['title'] = 'Enable external API usage';
$lng['serversettings']['enable_api']['description'] = 'In order to use the froxlor API you need to activate this option. For more detailed information see <a href="https://api.froxlor.org/" target="_new">https://api.froxlor.org/</a>';
$lng['serversettings']['dhparams_file']['title'] = 'DHParams file (Diffie–Hellman key exchange)';
$lng['serversettings']['dhparams_file']['description'] = 'If a dhparams.pem file is specified here it will be included in the webserver configuration. Leave empty to disable.<br>Example: /etc/apache2/ssl/dhparams.pem<br><br>If the file does not exist, it will be created automatically with the following command: <em>openssl dhparam -out /etc/apache2/ssl/dhparams.pem 4096<em>. It is recommended to create the file prior to specifying it here as the creation takes quite a while and blocks the cronjob.';
$lng['2fa']['2fa'] = '2FA možnosti';
$lng['2fa']['2fa_enabled'] = 'Aktivovat dvoufázové ověření (2FA)';
$lng['login']['2fa'] = 'Dvoufázové ověření (2FA)';
$lng['login']['2facode'] = 'Prosím zadej 2FA kód';
$lng['2fa']['2fa_removed'] = '2FA úspěšně odstraněno';
$lng['2fa']['2fa_added'] = '2FA activated successfully<br><a href="%s?s=%s&page=2fa">View 2FA details</a>';
$lng['2fa']['2fa_add'] = 'Aktivovat 2FA';
$lng['2fa']['2fa_delete'] = 'Deaktivovat 2FA';
$lng['2fa']['2fa_verify'] = 'Ověřit kód';
$lng['mails']['2fa']['mailbody'] = 'Hello,\n\nyour 2FA login-code is: {CODE}.\n\nThis is an automatically created\ne-mail, please do not answer!\n\nYours sincerely, your administrator';
$lng['mails']['2fa']['subject'] = 'Froxlor - 2FA Code';
$lng['2fa']['2fa_overview_desc'] = 'Here you can activate a two-factor authentication for your account.<br><br>You can either use an authenticator-app (time-based one-time password / TOTP) or let froxlor send you an email to your account-address after each successful login with a one-time password.';
$lng['2fa']['2fa_email_desc'] = 'Your account is set up to use one-time passwords via e-mail. To deactivate, click on "' . $lng['2fa']['2fa_delete'] . '"';
$lng['2fa']['2fa_ga_desc'] = 'Your account is set up to use time-based one-time passwords via authenticator-app. Please scan the QR code below with your desired authenticator app to generate the codes. To deactivate, click on "' . $lng['2fa']['2fa_delete'] . '"';
$lng['admin']['logviewenabled'] = 'Enable access to access/error-logs';
$lng['panel']['viewlogs'] = 'View logfiles';
$lng['panel']['not_configured'] = 'System not configured yet. Click here to go to configurations.';
$lng['panel']['done_configuring'] = 'When you are done configuring all required / desired services,<br>click the link below';
$lng['panel']['ihave_configured'] = 'I have configured the services';
$lng['panel']['system_is_configured'] = 'System is already set as configured';
$lng['panel']['settings_before_configuration'] = 'Please be sure you adjusted the settings prior to configuring the services here';
$lng['panel']['alternative_cmdline_config'] = 'Alternatively, just run the following command as root-user in your shell to configure the services automatically';
$lng['tasks']['remove_pdns_domain'] = 'Delete domain %s from PowerDNS database';
$lng['tasks']['remove_ssl_domain'] = 'Delete ssl files of domain %s';
$lng['admin']['novhostcontainer'] = '<br><br><small class="red">None of the IPs and ports has the "' . $lng['admin']['ipsandports']['create_vhostcontainer'] . '" option enabled, many settings here will not be available</small>';
$lng['serversettings']['errorlog_level']['title'] = 'Error log-level';
$lng['serversettings']['errorlog_level']['description'] = 'Specify the error log level. Default is "warn" for apache-users and "error" for nginx-users.';
$lng['serversettings']['letsencryptecc']['title'] = "Issue ECC / ECDSA certificate";
$lng['serversettings']['letsencryptecc']['description'] = "If set to a valid key-size the certificate issued will use ECC / ECDSA";
$lng['serversettings']['froxloraliases']['title'] = "Domain aliases for froxlor vhost";
$lng['serversettings']['froxloraliases']['description'] = "Comma separated list of domains to add as server alias to the froxlor vhost";

$lng['serversettings']['ssl']['tlsv13_cipher_list']['title'] = 'Configure explicit TLSv1.3 ciphers if used';
$lng['serversettings']['ssl']['tlsv13_cipher_list']['description'] = 'This is a list of ciphers that you want (or don\'t want) to use when talking TLSv1.3. For a list of ciphers and how to include/exclude them, see <a href="https://wiki.openssl.org/index.php/TLS1.3">the docs for TLSv1.3</a>.<br /><br /><b>Default value is empty</b>';
$lng['usersettings']['api_allowed']['title'] = 'Allow API access';
$lng['usersettings']['api_allowed']['description'] = 'When enabled in the settings, this user can create API keys and access the froxlor API';
$lng['usersettings']['api_allowed']['notice'] = 'API access is not allowed for your account.';
$lng['serversettings']['default_sslvhostconf']['title'] = 'Default SSL vHost-settings';
$lng['serversettings']['includedefault_sslvhostconf'] = 'Include non-SSL vHost-settings in SSL-vHost';
$lng['admin']['ownsslvhostsettings'] = 'Own SSL vHost-settings';
$lng['admin']['ipsandports']['ssl_default_vhostconf_domain'] = 'Default SSL vHost-settings for every domain container';
$lng['customer']['total_diskspace'] = 'Total diskspace (MiB)';
$lng['admin']['domain_override_tls'] = 'Override system TLS settings';
$lng['domains']['isaliasdomainof'] = 'Is aliasdomain for %s';
$lng['serversettings']['apply_specialsettings_default']['title'] = 'Default value for "' . $lng['admin']['specialsettingsforsubdomains'] . "' setting when editing a domain";
$lng['serversettings']['apply_phpconfigs_default']['title'] = 'Default value for "' . $lng['admin']['phpsettingsforsubdomains'] . "' setting when editing a domain";
$lng['admin']['domain_sslenabled'] = 'Povolit použití SSL';
$lng['admin']['domain_honorcipherorder'] = 'Honor the (server) cipher order, default <strong>no</strong>';
$lng['admin']['domain_sessiontickets'] = 'Enable TLS sessiontickets (RFC 5077), default <strong>yes</strong>';

$lng['admin']['domain_sessionticketsenabled']['title'] = 'Enable usage of TLS sessiontickets globally';
$lng['admin']['domain_sessionticketsenabled']['description'] = 'Default <strong>yes</strong><br>Requires apache-2.4.11+ or nginx-1.5.9+';

$lng['serversettings']['phpfpm_settings']['restart_note'] = 'Attention: The config won\'t be checked for any errors. If it contains errors, PHP-FPM might not start again!';
$lng['serversettings']['phpfpm_settings']['custom_config']['title'] = 'Custom configuration';
$lng['serversettings']['phpfpm_settings']['custom_config']['description'] = 'Add custom configuration to each PHP-FPM version instance, for example <i>pm.status_path = /status</i> for monitoring. Variables below can be used here. ' . ' <strong>' . $lng['serversettings']['phpfpm_settings']['restart_note'] . '</strong>';

$lng['serversettings']['awstats']['logformat']['title'] = 'LogFormat setting';
$lng['serversettings']['awstats']['logformat']['description'] = 'If you use customized logformat for your webserver, you need change the awstats LogFormat too.<br/>Default is 1. For more information check documentation <a target="_blank" href="https://awstats.sourceforge.io/docs/awstats_config.html#LogFormat">here</a>.';