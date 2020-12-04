<?php
/**
*
* acp_permissions [Čeština]
*
* @package language
* @version $Id: permissions.php 492 2009-09-14 13:28:16Z ameeck $
* @copyright (c)  2007 phpBB.cz
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* Original copyright: (c) 2005 phpBB Group
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
   exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_PERMISSIONS_EXPLAIN'	=> '
		<p>Oprávnění jsou definována velice podrobně. Dělí se do čtyř základních skupin:</p>

		<h2>Globální oprávnění</h2>
		<p>Nastavují práva na globální úrovni a jsou platná na celém fóru. Jsou dále rozdělena na Oprávnění uživatele, Oprávnění skupiny, Administrátory a Globální Moderátory.</p>

		<h2>Oprávnění založená na fórech</h2>
		<p>Nastavují přístupová práva pro jednotlivá fóra zvlášť. Jsou dále rozdělena na Oprávnění fóra, Moderátoři fóra, Uživatelské oprávnění fóra a Skupinové oprávnění fóra.</p>

		<h2>Role oprávnění</h2>
		<p>Používají se k&nbsp;vytvoření různých předdefinovaných rolí, které využívají všechny druhy oprávnění a lze je využít při nastavování ostatních druhů oprávnění. Výchozí předdefinované role by měly pokrýt potřeby velkých i malých diskusních fór, v&nbsp;opačném případě můžete přidávat/upravovat/mazat další role podle vlastních potřeb.</p>

		<h2>Masky oprávnění</h2>
		<p>Jsou využitelné pro zobrazení konkrétních koncových oprávnění přidělených Uživatelům, Moderátorům (místním i Globálním), Administrátorům nebo jednotlivým fórům.</p>

		<br />

		<p>Pro další informace o&nbsp;nastavení a správě oprávnění na vašem fóru nahlédněte do <a href="https://www.phpbb.com/support/docs/en/3.3/ug/quickstart/permissions/">Nastavení oprávnění pro rychlý start</a>.</p>
	',

	'ACL_NEVER'				=> 'Nikdy',
	'ACL_SET'				=> 'Nastavení oprávnění',
	'ACL_SET_EXPLAIN'		=> 'Oprávnění jsou založena na jednoduchém systému <samp>ANO</samp>/<samp>NE</samp>. Je-li oprávnění uživatele nebo skupiny nastaveno na hodnotu <samp>NIKDY</samp>, budou ignorována jakákoli jiná nastavení oprávnění. Pokud si nepřejete přiřadit hodnotu k&nbsp;vlastnosti pro uživatele nebo skupinu, nastavte položku na <samp>NE</samp>. Jsou-li oprávnění nastavena na jiném místě odlišně, budou použita přednostně, jinak bude nastavení shodné s&nbsp;hodnotou <samp>NIKDY</samp>. Všechny zaškrtnuté objekty obdrží nastavené oprávnění.',
	'ACL_SETTING'			=> 'Nastavení',

	'ACL_TYPE_A_'			=> 'Administrátorská oprávnění',
	'ACL_TYPE_F_'			=> 'Oprávnění fór',
	'ACL_TYPE_M_'			=> 'Moderátorská oprávnění',
	'ACL_TYPE_U_'			=> 'Uživatelská oprávnění',

	'ACL_TYPE_GLOBAL_A_'	=> 'Administrátorská oprávnění',
	'ACL_TYPE_GLOBAL_U_'	=> 'Uživatelská oprávnění',
	'ACL_TYPE_GLOBAL_M_'	=> 'Oprávnění Globálních Moderátorů',
	'ACL_TYPE_LOCAL_M_'		=> 'Oprávnění Moderátorů fór',
	'ACL_TYPE_LOCAL_F_'		=> 'Oprávnění fór',

	'ACL_NO'				=> 'Ne',
	'ACL_VIEW'				=> 'Zobrazení oprávnění',
	'ACL_VIEW_EXPLAIN'		=> 'Zde si můžete prohlédnout využitelná oprávnění uživatele nebo skupiny. Červený čtverec indikuje, že uživatel/skupina nemá dané oprávnění; zelený, že toto oprávnění má.',
	'ACL_YES'				=> 'Ano',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'Zde můžete přidělit administrátorská práva uživatelům nebo skupinám. Všichni uživatelé s&nbsp;administrátorskými pravomocemi mohou nahlížet do Administrace fóra.',
 	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Zde můžete přidělit uživatelům nebo skupinám práva moderátora fóra. Pro nastavení přístupu uživatelů k&nbsp;diskuzím, nastavení globálních moderátorů nebo administrátorů použijte odpovídající sekce oprávnění.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Zde můžete určit, které skupiny nebo uživatelé mají přístup k&nbsp;určitým fórům. Pro nastavení moderátorů nebo administrátorů použijte odpovídající sekce oprávnění.',
	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN'		=> 'Zde můžete kopírovat nastavení oprávnění fóra z jednoho na druhé.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'Zde můžete přiradit moderátorské pravomoci pro celé fórum uživatelům nebo skupinám. Tito moderátoři jsou shodní s&nbsp;běžnými, nicméně mají práva ke všem sekcím na fóru.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Zde můžete upravit práva skupin pro jednotlivá fóra.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'Zde můžete přiřadit globální práva skupinám - uživatelská, moderátorská či administrátorská. Uživatelská oprávnění zahrnují možnosti jako použití avataru, odesílání soukromých zpráv atd.; globální moderátorská práva zahrnují možnosti jako schvalování příspěvků, správa témat, správa banů apod.; administrátorská zahrnují práva jako např. úpravy oprávnění, definování vlastních BBCode značek, správa fór atd. Individuální uživatelská oprávnění by měla být upravována pouze výjimečně, preferovanou metodou je zařazení uživatelů do skupin a nastavení koncových práv konkrétním skupinám.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'Zde můžete upravit role pro administrátorská oprávnění. Upravíte-li oprávnění určité role, všem uživatelům nebo skupinám k&nbsp;ní přiřazeným se odpovídajícím způsobem změní oprávnění.',
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'Zde můžete upravit role pro oprávnění fór. Upravíte-li oprávnění určité role, všem uživatelům nebo skupinám k&nbsp;ní přiřazeným se odpovídajícím způsobem změní oprávnění.',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'Zde můžete upravit role pro moderátorská oprávnění. Upravíte-li oprávnění určité role, všem uživatelům nebo skupinám k&nbsp;ní přiřazeným se odpovídajícím způsobem změní oprávnění.',
	'ACP_USER_ROLES_EXPLAIN'					=> 'Zde můžete upravit role pro uživatelská oprávnění. Upravíte-li oprávění určité role, všem uživatelům nebo skupinám k&nbsp;ní přiřazeným se odpovídajícím způsobem změní oprávnění.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Zde můžete uživatelům přiřadit oprávnění pro jednotlivá fóra.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Zde můžete uživatelům přiřadit globální oprávnění uživatelská, moderátorská i administrátorská. Uživatelská oprávnění zahrnují možnosti jako použití avataru, odesílání soukromých zpráv atd.; moderátorská oprávnění možnosti jako schvalování příspěvků, správá témat, správa banů apod.; administrátorská oprávnění možnosti jako úpravy oprávnění, definování vlastních BBCode značek, správa fór atd. K úpravě těchto oprávnění pro větší počet uživatelů se doporučuje využít Uživatelské skupiny. Individuální uživatelská oprávnění by měla být měněna pouze výjimečně, preferovanou metodou je zařazení uživatelů do skupin a nastavení koncových práv konkrétním skupinám.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'Zde si můžete prohlédnout koncová administrátorská oprávnění, přiřazená vybraným uživatelům nebo skupinám.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Zde si můžete prohlédnout koncová globální moderátorská oprávnění, přiřazená vybraným uživatelům nebo skupinám.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'Zde si můžete prohlédnout koncová práva ke konkrétním fórům, přiřazená vybraným uživatelům, skupinám nebo samotným fórům.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Zde si můžete prohlédnout koncová moderátorská oprávnění ke konkrétním fórům, přiřazená vybraným uživatelům, skupinám nebo samotným fórům.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'Zde si můžete prohlédnout koncová uživatelská oprávnění přiřazená vybraným uživatelům či skupinám.',

	'ADD_GROUPS'				=> 'Přidat skupiny',
	'ADD_PERMISSIONS'			=> 'Přidat oprávnění',
	'ADD_USERS'					=> 'Přidat uživatele',
	'ADVANCED_PERMISSIONS'		=> 'Pokročilá oprávnění',
	'ALL_GROUPS'				=> 'Vybrat všechny skupiny',
	'ALL_NEVER'					=> 'Vše <samp>NIKDY</samp>',
	'ALL_NO'					=> 'Vše <samp>NE</samp>',
	'ALL_USERS'					=> 'Vybrat všechny uživatele',
	'ALL_YES'					=> 'Vše <samp>ANO</samp>',
	'APPLY_ALL_PERMISSIONS'		=> 'Použít všechna oprávnění',
	'APPLY_PERMISSIONS'			=> 'Použít oprávnění',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'Role a oprávnění definovaná pro tuto položku budou použita na této položce a všech dalších, které jsou zaškrtnuté.',
  'AUTH_UPDATED'				=> 'Oprávnění byla aktualizována.',

	'COPY_PERMISSIONS_CONFIRM'				=> 'Opravdu chcete zkopírovat oprávnění? Kopírování přepíše všechna současná nastavení na cílových fórech.',
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN'	=> 'Zdrojové fórum s již existující sadou oprávnění.',
	'COPY_PERMISSIONS_FORUM_TO_EXPLAIN'		=> 'Fóra, kde budou zdrojová oprávnění aplikována.',
	'COPY_PERMISSIONS_FROM'					=> 'Zkopírovat oprávnění od',
	'COPY_PERMISSIONS_TO'					=> 'Použít oprávnění na',

	'CREATE_ROLE'				=> 'Vytvořit roli',
	'CREATE_ROLE_FROM'			=> 'Použít nastavení z…',
	'CUSTOM'					=> 'Vlastní…',

	'DEFAULT'					=> 'Výchozí',
	'DELETE_ROLE'				=> 'Odstranit roli',
	'DELETE_ROLE_CONFIRM'		=> 'Opravdu chcete odstranit tuto roli? Položky, které mají tuto roli přidělenou, <strong>neztratí</strong> svá oprávnění.',
	'DISPLAY_ROLE_ITEMS'		=> 'Zobrazit položky využivající tuto roli',

	'EDIT_PERMISSIONS'			=> 'Upravit oprávnění',
	'EDIT_ROLE'					=> 'Upravit roli',

	'GROUPS_NOT_ASSIGNED'		=> 'Této roli není přidělena žádná skupina',

	'LOOK_UP_GROUP'				=> 'Prohlédnout skupinu',
	'LOOK_UP_USER'				=> 'Prohlédnout uživatele',

	'MANAGE_GROUPS'		=> 'Spravovat skupiny',
	'MANAGE_USERS'		=> 'Spravovat uživatele',

	'NO_AUTH_SETTING_FOUND'		=> 'Oprávnění nebyla definována.',
	'NO_ROLE_ASSIGNED'			=> 'Žádná role nepřidělena…',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Nastavení této role nezmění oprávnění zobrazená vpravo. Chcete-li odstranit všechna oprávnění, použijte odkaz „Vše <samp>NE</samp>“.',
	'NO_ROLE_AVAILABLE'			=> 'Není dostupná žádná role',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Nejprve uveďte název role.',
	'NO_ROLE_SELECTED'			=> 'Role nebyla nalezena.',
	'NO_USER_GROUP_SELECTED'	=> 'Nevybrali jste žádného uživatele nebo skupinu.',

	'ONLY_FORUM_DEFINED'	=> 'Definovali jste ve svém výběru jen fórum, vyberte též jednoho uživatele nebo skupinu.',

	'PERMISSION_APPLIED_TO_ALL'		=> 'Role a oprávnění budou aplikována na všechny zaškrtnuté objekty',
	'PLUS_SUBFORUMS'				=> '+subfóra',

	'REMOVE_PERMISSIONS'			=> 'Odstranit oprávnění',
	'REMOVE_ROLE'					=> 'Odstranit roli',
	'RESULTING_PERMISSION'			=> 'Výsledné oprávnění',
	'ROLE'							=> 'Role',
	'ROLE_ADD_SUCCESS'				=> 'Role byla přidána.',
	'ROLE_ASSIGNED_TO'				=> 'Uživatelé/skupiny byli přiřazeni k&nbsp;%s',
	'ROLE_DELETED'					=> 'Role byla odstraněna.',
	'ROLE_DESCRIPTION'				=> 'Popis role',

	'ROLE_ADMIN_FORUM'			=> 'Admin fóra',
	'ROLE_ADMIN_FULL'			=> 'Hlavní admin',
	'ROLE_ADMIN_STANDARD'		=> 'Standardní admin',
	'ROLE_ADMIN_USERGROUP'		=> 'Admin uživatelů',
	'ROLE_FORUM_BOT'			=> 'Přístup botů',
	'ROLE_FORUM_FULL'			=> 'Plný přístup',
	'ROLE_FORUM_LIMITED'		=> 'Omezený přístup',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Omezený přístup + hlasování',
	'ROLE_FORUM_NOACCESS'		=> 'Žádný přístup',
	'ROLE_FORUM_ONQUEUE'		=> 'Nutné schválení',
	'ROLE_FORUM_POLLS'			=> 'Běžný přístup + hlasování',
	'ROLE_FORUM_READONLY'		=> 'Jen čtení',
	'ROLE_FORUM_STANDARD'		=> 'Běžný přístup',
	'ROLE_FORUM_NEW_MEMBER'		=> 'Přístup nového člena fóra',
	'ROLE_MOD_FULL'				=> 'Hlavní moderátor',
	'ROLE_MOD_QUEUE'			=> 'Schvalující moderátor',
	'ROLE_MOD_SIMPLE'			=> 'Prostý moderátor',
	'ROLE_MOD_STANDARD'			=> 'Standardní moderátor',
	'ROLE_USER_FULL'			=> 'Všechny funkce',
	'ROLE_USER_LIMITED'			=> 'Omezené funkce',
	'ROLE_USER_NOAVATAR'		=> 'Bez avataru',
	'ROLE_USER_NOPM'			=> 'Bez soukromých zpráv',
	'ROLE_USER_STANDARD'		=> 'Běžné funkce',
	'ROLE_USER_NEW_MEMBER'		=> 'Funkce nového člena fóra',

	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> 'Má přístup k&nbsp;ovládání fór a nastavení oprávnění pro fóra.',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> 'Má přístup ke všem administrátorským panelům na tomto fóru.<br />Není doporučeno.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> 'Má přístup k&nbsp;většině práv administrátora, ale nemůže měnit nastavení serveru a systému.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> 'Může spravovat skupiny a uživatele; Může měnit oprávnění, nastavení, bany a hodnosti.',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> 'Tato role je doporučena pro boty a vyhledávací roboty.',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> 'Může využívat všech možností fóra, včetně odesílaní Důležitých témat a Oznámení. Také může ignorovat časový interval pro odeslání příspěvků.<br />Není doporučeno pro běžné uživatele.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> 'Může využít některé možnosti fóra, ale nemůže připojovat přílohy a používat ikony témat.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'Stejné jako Omezený přístup, ale může zakládat hlasování.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> 'Nevidí ani nemá přístup k&nbsp;fóru.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> 'Může využít většinu funkcí fóra včetně příloh, ale příspěvky a témata musí být schváleny moderátorem.',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> 'Stejné jako Běžný přístup, ale může zakládat hlasování.',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> 'Může číst témata na fóru, ale nemůže vytvářet nová témata nebo odesílat odpovědi.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> 'Může využívat většinu funkcí fóra, včetně příloh, ale nemůže zamykat nebo mazat své vlastní příspěvky ani vytvářet nová hlasování.',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER'		=> 'Role pro skupinu nově registrovaných uživatelů. obsahuje oprávnění typu <samp>NIKDY</samp> pro omezení oprávnění nových uživatelů',
	'ROLE_DESCRIPTION_MOD_FULL'				=> 'Může využívat všechny možnosti moderátora, včetně banování.',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> 'Může pouze schvalovat příspěvky.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> 'Může využívat jen základní operace s&nbsp;tématy. Nemůže udělovat varování nebo schvalovat příspěvky.',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> 'Může využívat většinu nástrojů moderátora, ale nemůže udělit ban nebo změnit autora příspěvku.',
	'ROLE_DESCRIPTION_USER_FULL'			=> 'Může využívat všechna uživatelská oprávnění, včetně změny uživatelského jména a ignorace ochranných intervalů.<br />Není doporučeno.',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> 'Má přístup k&nbsp;některým oprávněním uživatele. Přílohy, e-maily nebo instant messaging nejsou povoleny.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> 'Má omezenou sadu možností a zákaz používání avataru.',
	'ROLE_DESCRIPTION_USER_NOPM'			=> 'Má omezenou sadu možností a nemůže používat soukromé zprávy.',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> 'Má přístup k&nbsp;většině uživatelských oprávnění. Např. nemůže změnit své uživatelské jméno nebo ignorovat ochranné intervaly.',
	'ROLE_DESCRIPTION_USER_NEW_MEMBER'		=> 'Role pro skupinu nově registrovaných uživatelů. obsahuje oprávnění typu <samp>NIKDY</samp> pro omezení oprávnění nových uživatelů',

	'ROLE_DESCRIPTION_EXPLAIN'		=> 'Můžete vložit krátký popis/označení role. Text, který zde vložíte, se zobrazí v&nbsp;přehledu rolí v&nbsp;administraci.',
	'ROLE_DESCRIPTION_LONG'			=> 'Popis role nesmí být delší než 4000 znaků.',
	'ROLE_DETAILS'					=> 'Podrobnosti role',
	'ROLE_EDIT_SUCCESS'				=> 'Role byla upravena.',
	'ROLE_NAME'						=> 'Název role',
	'ROLE_NAME_ALREADY_EXIST'		=> 'Role s&nbsp;názvem <strong>%s</strong> pro daný druh oprávnění již existuje.',
	'ROLE_NOT_ASSIGNED'				=> 'Role ještě nebyla přiřazena.',

	'SELECTED_FORUM_NOT_EXIST'		=> 'Zvolená fóra neexistují.',
	'SELECTED_GROUP_NOT_EXIST'		=> 'Zvolené skupiny neexistují.',
	'SELECTED_USER_NOT_EXIST'		=> 'Zvolení uživatelé neexistují.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'Pokud zde zvolíte fórum, budou zahrnuta i všechna subfóra.',
	'SELECT_ROLE'					=> 'Vybrat roli…',
	'SELECT_TYPE'					=> 'Vybrat druh',
	'SET_PERMISSIONS'				=> 'Nastavit oprávnění',
	'SET_ROLE_PERMISSIONS'			=> 'Nastavit oprávnění role',
	'SET_USERS_PERMISSIONS'			=> 'Nastavení oprávnění uživatele',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Nastavení oprávnění uživatele pro fóra',

	'TRACE_DEFAULT'					=> 'Pokud není nastaveno jinak, oprávnění má vždy hodnotu <samp>NE</samp> (bez oprávnění), a tak mohou být oprávnění přepsána jinými nastaveními.',
	'TRACE_FOR'						=> 'Sledovat pro',
	'TRACE_GLOBAL_SETTING'			=> '%s (globální)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'Oprávnění skupiny jsou nastavena na <samp>NIKDY</samp> jako výsledné oprávnění, tudíž je tato hodnta ponechána.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'Oprávnění skupiny jsou pro toto fórum nastavena na <samp>NIKDY</samp> jako výsledné oprávnění, tudíž je tato hodnta ponechána.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'Oprávnění skupiny jsou nastavena na <samp>NIKDY</samp>, což je nová výsledná hodnota. Předchozí nastavení bylo <samp>NE</samp>.',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'Oprávnění skupiny jsou pro toto fórum nastavena na <samp>NIKDY</samp>, což je nová výsledná hodnota. Předchozí nastavení bylo <samp>NE</samp>.',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'Oprávnění skupiny jsou nastavena na <samp>NIKDY</samp>, což změní nastavení oprávnění <samp>ANO</samp> na <samp>NIKDY</samp> pro tohoto uživatele',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'Oprávnění skupiny jsou pro toto fórum nastavena na <samp>NIKDY</samp>, což změní nastavení oprávnění <samp>ANO</samp> na <samp>NIKDY</samp> pro tohoto uživatele',
	'TRACE_GROUP_NO'				=> 'Oprávnění je nastaveno na <samp>NE</samp> pro tuto skupinu, proto je ponechána původní hodnota.',
	'TRACE_GROUP_NO_LOCAL'			=> 'Oprávnění v&nbsp;rámci tohoto fóra je nastaveno na <samp>NE</samp> pro tuto skupinu, proto je ponechána původní hodnota.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'Oprávnění skupiny jsou nastavena na <samp>ANO</samp>, ale nastavení oprávnění <samp>NIKDY</samp> nelze ignorovat.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'Oprávnění skupiny jsou pro toto fórum nastavena na <samp>ANO</samp>, ale nastavení oprávnění <samp>NIKDY</samp> nelze ignorovat.',
	'TRACE_GROUP_YES_TOTAL_NO'		=> 'Oprávnění skupiny jsou nastavena na <samp>ANO</samp>, což je nová výsledná hodnota. Předchozí nastavení bylo <samp>NE</samp>.',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> 'Oprávnění skupiny jsou pro toto fórum nastavena na <samp>ANO</samp>, což je nová výsledná hodnota. Předchozí nastavení bylo <samp>NE</samp>.',
	'TRACE_GROUP_YES_TOTAL_YES'		=> 'Oprávnění skupiny jsou nastavena na <samp>ANO</samp>, stejně jako výsledné oprávnění. Původní hodnota je ponechána.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> 'Oprávnění skupiny jsou pro toto fórum nastavena na <samp>ANO</samp>, stejně jako výsledné oprávnění. Původní hodnota je ponechána.',
	'TRACE_PERMISSION'				=> 'Sledovat oprávnění – %s',
	'TRACE_RESULT'					=> 'Výsledné oprávnění',
	'TRACE_SETTING'					=> 'Nastavení sledování',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> 'Oprávnění nezávislá na fóru mají hodnotu <samp>ANO</samp> a výsledná hodnota již má také hodnotu <samp>ANO</samp>, a tak se tedy nic nemění. %sSledovat globální oprávnění%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'Oprávnění nezávislá na fóru mají hodnotu <samp>ANO</samp>, což přepisuji místní hodnotu <samp>NIKDY</samp>. %sSledovat globální oprávnění%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'Oprávnění nezávislá na fóru mají hodnotu <samp>NIKDY</samp>, což neovlivňuje místní oprávnění. %sSledovat globální oprávnění%s',

	'TRACE_USER_FOUNDER'					=> 'Uživatel má nastavenu úroveň Zakladatel, tudíž administrátorská oprávnění jsou nastavena na <samp>ANO</samp>.',
	'TRACE_USER_KEPT'						=> 'Oprávnění uživatele je nastaveno na <samp>NE</samp>, původní hodnota je tedy ponechána.',
	'TRACE_USER_KEPT_LOCAL'					=> 'Oprávnění uživatele je pro toto fórum nastaveno na <samp>NE</samp>, původní hodnota je tedy ponechána.',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'Oprávnění uživatele je nastaveno na <samp>NIKDY</samp>, stejně jako výsledná hodnota, nedojde proto k&nbsp;žádným změnám.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'Oprávnění uživatele je pro toto fórum nastaveno na <samp>NIKDY</samp>, stejně jako výsledná hodnota, nedojde proto k&nbsp;žádným změnám.',
	'TRACE_USER_NEVER_TOTAL_NO'				=> 'Oprávnění uživatele je nastaveno na <samp>NIKDY</samp>, což je výsledná hodnota. Předchozí nastavení bylo <samp>NE</samp>.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> 'Oprávnění uživatele je pro toto fórum nastaveno na <samp>NIKDY</samp>, což je výsledná hodnota. Předchozí nastavení bylo <samp>NE</samp>.',
	'TRACE_USER_NEVER_TOTAL_YES'			=> 'Oprávnění uživatele je nastaveno na <samp>NIKDY</samp> a ruší předchozí hodnotu <samp>ANO</samp>.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> 'Oprávnění uživatele je pro toto fórum nastaveno na <samp>NIKDY</samp> a ruší předchozí hodnotu <samp>ANO</samp>.',
	'TRACE_USER_NO_TOTAL_NO'				=> 'Oprávnění uživatele je nastaveno na <samp>NE</samp> stejně jako výsledná hodnota, výchozí hodnota se proto mění na <samp>NIKDY</samp>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> 'Oprávnění uživatele je pro toto fórum nastaveno na <samp>NE</samp> stejně jako výsledná hodnota, výchozí hodnota se proto mění na <samp>NIKDY</samp>.',
	'TRACE_USER_YES_TOTAL_NEVER'			=> 'Oprávnění uživatele je nastaveno na <samp>ANO</samp>, ale výsledná oprávnění, která nelze přepsat, jsou nastavena na <samp>NIKDY</samp>.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> 'Oprávnění uživatele je pro toto fórum nastaveno na <samp>ANO</samp>, ale výsledná oprávnění, která nelze přepsat, jsou nastavena na <samp>NIKDY</samp>.',
	'TRACE_USER_YES_TOTAL_NO'				=> 'Oprávnění uživatele je nastaveno na <samp>ANO</samp>, což je nová výsledná hodnota. Předchozí nastavení bylo <samp>NE</samp>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> 'Oprávnění uživatele je pro toto fórum nastaveno na <samp>ANO</samp>, což je nová výsledná hodnota. Předchozí nastavení bylo <samp>NE</samp>.',
	'TRACE_USER_YES_TOTAL_YES'				=> 'Oprávnění uživatele je nastaveno na <samp>ANO</samp>, stejně jako výsledná oprávnění, nedojde proto k&nbsp;žádné změně.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> 'Oprávnění uživatele je pro toto fórum nastaveno na <samp>ANO</samp>, stejně jako výsledná oprávnění, nedojde proto k&nbsp;žádné změně.',
	'TRACE_WHO'								=> 'Kdo',
	'TRACE_TOTAL'							=> 'Výsledné',

	'USERS_NOT_ASSIGNED'			=> 'Žádní uživatelé nebyli k této roli přiřazeni',
	'USER_IS_MEMBER_OF_DEFAULT'		=> 'je členem následujících přednastavených skupin',
	'USER_IS_MEMBER_OF_CUSTOM'		=> 'je členem následujících uživatelských skupin',

	'VIEW_ASSIGNED_ITEMS'	=> 'Zobrazit přidělené položky',
	'VIEW_LOCAL_PERMS'		=> 'Místní oprávnění',
	'VIEW_GLOBAL_PERMS'		=> 'Globální oprávnění',
	'VIEW_PERMISSIONS'		=> 'Zobrazit oprávnění',

	'WRONG_PERMISSION_TYPE'	=> 'Byl zvolen špatný druh oprávnění.',
	'WRONG_PERMISSION_SETTING_FORMAT'   => 'Nastavení oprávnění má špatný formát a phpBB je nemůže správně zpracovat.',
));
