<?php
/**
 * Elgg welcome plugin cs language
 *
 * @author Gerard Kanters
 * @author Wouter van Os
 * @author Juho Jaakkola
 *
 * @website https://www.centillien.com
 *
 * @copyright Centillien 2016
 */

$czech = array(
        'welcome' => 'Vítejte',
        'welcome:title' => 'Již jste téměř u cíle!',
		'welcome:text' => '<p>Vítejte %s, úspěšně jste se zaregistroval/a na %s.</p>
<p>Než se budete moci přihlásit, je třeba váš účet aktivovat. Na adresu <strong>%s</strong> jsme vám poslali aktivační odkaz. Zkontrolujte prosím doručenou poštu a navštívením odkazu dokončete vaši registraci.</p>
<p>Pokud žádný e-mail nevidíte, zkontrolujte také složku s nevyžádanou poštou.</p>',
	'welcome:wrongemail' =>  '<p>Vítejte %s, vaše registrace na %s nemohla být dokončena. </p> Kontrola adresy <strong>%s</strong> vrátila chybu. Vaši e-mailovou adresu můžete změnit tlačítkem na vrchu stránky. ', 
        'welcome:changeemail' => 'Změnit e-mail',
        'welcome:changeemailtext' => '<p>Pokud jste nedopatřením zadali špatnou e-mailovou adresu, změňte ji použitím příslušného tlačítka. To je možné provést <strong>pouze jednou</strong></p>',
        'welcome:changeemailcontact' => '<p>Pokud si myslíte, že chyba je na naší straně, použije <a href="/mod/contact">kontaktní formulář</a></p>',
        'welcome:no_user_guid_provided' => 'Nebylo zadáno uživatelovo GUID.',
        'welcome:user_email_changed_to' => 'E-mailová adresa uživatele %s byla změněna na %s.',
        'welcome:email_address_invalid' => 'Zadaná e-mailová adresa %s je neplatná.',
        'welcome:user_email_not_changed' => 'E-mailová adresa uživatele %s nemohla být změněna',
        'welcome:new_user_email' => 'Zadejte novou e-mailovou adresu pro %s: ',
        'welcome:change_email' => 'Změnit e-mail',

);

add_translation('cs', $czech);

