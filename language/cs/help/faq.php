<?php
/**
 *
 * This file is part of the phpBB Forum Software package.
 *
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * For full copyright and license information, please see
 * the docs/CREDITS.txt file.
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

$lang = array_merge($lang, array(
	'HELP_FAQ_ATTACHMENTS_ALLOWED_ANSWER'	=> 'Každý administrátor fóra může povolit nebo zakázat určité typy příloh. Pokud si nejste jisti, jaké přílohy můžete nahrát, kontaktujte administrátora fóra a požádejte ho o pomoc.',
	'HELP_FAQ_ATTACHMENTS_ALLOWED_QUESTION'	=> 'Jaké přílohy jsou na tomto fóru povoleny?',
	'HELP_FAQ_ATTACHMENTS_OWN_ANSWER'	=> 'Seznam se všemi přílohami, které jste nahráli, najdete ve vašem „Uživatelském panelu“ v sekci „Přílohy“.',
	'HELP_FAQ_ATTACHMENTS_OWN_QUESTION'	=> 'Jak můžu najít všechny svoje přílohy?',

	'HELP_FAQ_BLOCK_ATTACHMENTS'	=> 'Přílohy',
	'HELP_FAQ_BLOCK_BOOKMARKS'	=> 'Sledování a záložky',
	'HELP_FAQ_BLOCK_FORMATTING'	=> 'Formátování a druhy témat',
	'HELP_FAQ_BLOCK_FRIENDS'	=> 'Přátelé a nepřátelé',
	'HELP_FAQ_BLOCK_GROUPS'	=> 'Uživatelské úrovně a skupiny',
	'HELP_FAQ_BLOCK_ISSUES'	=> 'Záležitosti týkající se phpBB',
	'HELP_FAQ_BLOCK_LOGIN'	=> 'Přihlašování a registrace',
	'HELP_FAQ_BLOCK_PMS'	=> 'Soukromé zprávy',
	'HELP_FAQ_BLOCK_POSTING'	=> 'Psaní příspěvků',
	'HELP_FAQ_BLOCK_SEARCH'	=> 'Vyhledávání ve fóru',
	'HELP_FAQ_BLOCK_USERSETTINGS'	=> 'Předvolby a nastavení uživatele',

	'HELP_FAQ_BOOKMARKS_DIFFERENCE_ANSWER'	=> 'V phpBB 3.0 fungovali záložky velmi podobně jako záložky ve vašem prohlížeči. Nebyli jste upozorněni, když došlo v tématu k nějakým změnám. V phpBB 3.1 se záložky chovají stejně jako sledování tématu, což znamená, že můžete být upozorněni, když v tématu v záložkách dojde k nějakým změnám. Při sledování fóra nebo tématu budete upozorněni, když dojde ve sledovaném fóru nebo tématu k nějakým změnám. Způsob upozornění pro záložky a sledování můžete nastavit ve vašem „Uživatelském panelu“ na záložce „Nastavení fóra“ v sekci „Upravit nastavení upozornění“. Může být užitečné nastavit pro záložky a sledování jiný způsob upozornění.',
	'HELP_FAQ_BOOKMARKS_DIFFERENCE_QUESTION'	=> 'Jaký je rozdíl mezi záložkami a sledováním?',
	'HELP_FAQ_BOOKMARKS_FORUM_ANSWER'	=> 'Pro sledování určitého fóra přejděte do toho fóra a klikněte na odkaz „Sledovat fórum“, který se nachází naspodu stránky.',
	'HELP_FAQ_BOOKMARKS_FORUM_QUESTION'	=> 'Jak můžu začít sledovat určité fórum?',
	'HELP_FAQ_BOOKMARKS_REMOVE_ANSWER'	=> 'Pro ukončení sledování tématu nebo fóra přejděte ve vašem „Uživatelském panelu“ na „Sledovaná fóra a témata“, zatrhněte témata a fóra, která nechcete nadále sledovat a klikněte na tlačítko „Ukončit sledování označených“. Můžete také kliknout v tématu na odkaz „Ukončit sledování tématu“ nebo ve fóru na odkaz „Ukončit sledování fóra“.',
	'HELP_FAQ_BOOKMARKS_REMOVE_QUESTION'	=> 'Jak můžu ukončit sledování témat nebo fór?',
	'HELP_FAQ_BOOKMARKS_TOPIC_ANSWER'	=> 'Přidat určité téma do záložek nebo téma začít sledovat můžete kliknutím na příslušný odkaz v nabídce „Nástroje tématu“ (obvykle má ikonu klíče), která se nachází nad a pod tématem.<br />Pro sledování tématu můžete také poslat do tématu odpověď a přitom zatrhnout políčko „Upozornit mě, když někdo pošle odpověď“.',
	'HELP_FAQ_BOOKMARKS_TOPIC_QUESTION'	=> 'Jak můžu přidat určité téma do záložek nebo téma začít sledovat?',

	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_ANSWER'	=> 'Oznámení často obsahují důležité informace pro fórum, které právě čtete, a proto byste je měli vždy číst. Oznámení jsou zobrazeny nahoře na každé stránce fóra, do kterého byly odeslány. Podobně jako u globálních oznámení, jsou oprávnění pro odeslání tématu jako oznámení udělována administrátorem fóra.',
	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_QUESTION'	=> 'Co jsou to oznámení?',
	'HELP_FAQ_FORMATTING_BBOCDE_ANSWER'	=> 'BBKódy jsou speciální implementace HTML jazyka, které poskytují velkou kontrolu pro formátování jednotlivých objektů v příspěvcích. Možnost používání BBKódů uděluje administrátor fóra, ale BBKódy je také možné pro jednotlivé příspěvky zakázat ve formuláři pro odesílání příspěvků. BBKódy se používají podobně jako HTML, ale tagy jsou uzavřeny v hranatých závorkách [ a ] a ne v &lt; a &gt;. Pro více informací o formátování pomocí BBKódů se podívejte na průvodce, ke kterému najdete odkaz na stránce, na které se píší příspěvky.',
	'HELP_FAQ_FORMATTING_BBOCDE_QUESTION'	=> 'Co jsou to BBKódy?',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_ANSWER'	=> 'Globální oznámení obsahují důležité informace, a proto byste je měli vždy číst. Globální oznámení jsou zobrazeny v každém fóru nahoře a ve vašem uživatelském panelu. Oprávnění pro odeslání tématu jako globálního oznámení jsou udělena administrátorem fóra.',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_QUESTION'	=> 'Co jsou to globální oznámení?',
	'HELP_FAQ_FORMATTING_HTML_ANSWER'	=> 'Ne. Na tomto fóru nelze používat HTML, aby bylo zpracováno jako HTML. Většinu formátování, které lze provést pomocí HTML, lze nahradit použitím BBKódů.',
	'HELP_FAQ_FORMATTING_HTML_QUESTION'	=> 'Můžu použít HTML?',
	'HELP_FAQ_FORMATTING_ICONS_ANSWER'	=> 'Ikony témat jsou autory témat vybrané obrázky asociované s příspěvky, které můžou indikovat jejich obsah. Možnost používat ikony témat závisí na oprávněních nastavených administrátorem fóra.',
	'HELP_FAQ_FORMATTING_ICONS_QUESTION'	=> 'Co jsou to ikony témat?',
	'HELP_FAQ_FORMATTING_IMAGES_ANSWER'	=> 'Ano, obrázky můžou být ve vašich příspěvcích zobrazeny. Pokud administrátor povolil ve fóru používání příloh, budete moci nahrát obrázek do fóra. V opačném případě musíte odkázat na obrázek, který se nachází na veřejně přístupném webovém serveru, např. http://www.priklad.cz/muj-obrazek.gif. Nemůžete odkázat na obrázek uložený ve vašem vlastním počítači (pokud to není veřejně přístupný server) ani na obrázky uložené za nějakým autentizačním mechanizmem, např. v emailech na seznamu.cz nebo v Gmailu, heslem chráněných webech atd. Aby se obrázek zobrazil, vložte adresu, která k němu vede do BBKódu [img].',
	'HELP_FAQ_FORMATTING_IMAGES_QUESTION'	=> 'Můžu do příspěvků přidávat obrázky?',
	'HELP_FAQ_FORMATTING_LOCKED_ANSWER'	=> 'Zamknutá témata jsou témata, do kterých uživatelé nemůžou posílat odpovědi a jakékoliv hlasování, které se v nic nachází, bylo automaticky ukončeno. Témata můžou být zamknuta moderátorem nebo administrátorem fóra z řady důvodů. V závislosti na oprávněních, které vám udělil administrátor fóra, můžete také mít možnost zamykat vlastní témata.',
	'HELP_FAQ_FORMATTING_LOCKED_QUESTION'	=> 'Co jsou to zamknutá témata?',
	'HELP_FAQ_FORMATTING_SMILIES_ANSWER'	=> 'Smajlíci nebo emotikony jsou malé obrázky, které můžou být použity k vyjádření pocitů a vytvořeny za použití krátkého kódu, např. kód :) znamená radost a kód :( znamená smutek. Úplný seznam smajlíků najdete na formuláři, na kterém se tvoří zprávy a příspěvky. Pokuste se nepoužívat smajlíky v příliš velkém počtu, protože můžou způsobit nečitelnost příspěvku a moderátoři by je mohli odstranit, nebo smazat celý váš příspěvek. Administrátor fóra může také nastavit omezení počtu smajlíků, které lze v příspěvku použít.',
	'HELP_FAQ_FORMATTING_SMILIES_QUESTION'	=> 'Co jsou to smajlíci?',
	'HELP_FAQ_FORMATTING_STICKIES_ANSWER'	=> 'Důležitá témata jsou zobrazena ve fóru pod oznámeními, ale jen na první stránce. Často obsahují důležité informace, proto byste je měli číst kdykoli je to možné. Podobně jako u oznámení a globálních oznámení, jsou oprávnění pro odeslání tématu jako důležitého udělována administrátorem fóra.',
	'HELP_FAQ_FORMATTING_STICKIES_QUESTION'	=> 'Co jsou to důležitá témata?',

	'HELP_FAQ_FRIENDS_BASIC_ANSWER'	=> 'Tyto seznamy můžete použít k rozdělení ostatních členů fóra. Uživatelé přidáni do vašeho seznamu přátel budou zobrazeni ve vašem uživatelském panelu, abyste k nim měli rychlý přístup, viděli jejich online stav a mohli jim posílat soukromé zprávy. V závislosti na použitém vzhledu můžou být zvýrazněny i příspěvky od těchto uživatelů. Pokud přidáte uživatele do seznamu nepřátel, budou jejich příspěvky skryty.',
	'HELP_FAQ_FRIENDS_BASIC_QUESTION'	=> 'Co jsou seznamy přátel a nepřátel?',
	'HELP_FAQ_FRIENDS_MANAGE_ANSWER'	=> 'Uživatele můžete přidat do vašeho seznamu dvěma způsoby. Po kliknutí na jméno uživatele se dostanete na stránku s profilem uživatele, kde najdete odkaz, pomocí kterého můžete uživatele přidat do seznamu přátel nebo nepřátel. Nebo můžete ve vašem „Uživatelském panelu“ na záložce „Přátelé a nepřátelé“ přímo přidat uživatele do jednoho ze seznamů vložením jejich uživatelských jmen. Na stejné stránce můžete také odstranit uživatele z vašich seznamů.',
	'HELP_FAQ_FRIENDS_MANAGE_QUESTION'	=> 'Jak můžu přidat nebo odstranit uživatele do/z mého seznamu přátel nebo nepřátel?',

	'HELP_FAQ_GROUPS_ADMINISTRATORS_ANSWER'	=> 'Administrátoři jsou uživatelé fóra, kteří mají nejvyšší úroveň kontroly nad celým fórem. Tito členové můžou kontrolovat všechny aspekty fóra, včetně nastavení oprávnění, banování uživatelů, vytváření uživatelských skupin nebo moderátorů atd. a to v závislosti na oprávněních, která jsou jim udělena majitelem fóra nebo dalšími administrátory. Administrátoři také můžou mít ve všech fórech úplné moderátorské schopnosti, opět v závislosti na nastavení provedeném majitelem fóra nebo dalšími administrátory.',
	'HELP_FAQ_GROUPS_ADMINISTRATORS_QUESTION'	=> 'Kdo jsou to administrátoři?',
	'HELP_FAQ_GROUPS_COLORS_ANSWER'	=> 'Je možné, že administrátor fóra přiřadil k členům určitých skupin nějakou barvu, aby bylo jednodušší identifikovat členy těchto skupin.',
	'HELP_FAQ_GROUPS_COLORS_QUESTION'	=> 'Proč mají některé uživatelské skupiny jinou barvu?',
	'HELP_FAQ_GROUPS_DEFAULT_ANSWER'	=> 'Pokud jste členem více než jedné uživatelské skupiny, vaše výchozí uživatelská skupina určuje, jaká a barva a hodnost skupiny by měla být u vašeho uživatelského jména zobrazena. Administrátor fóra vám může udělit oprávnění ke změně vaší výchozí uživatelské skupiny ve vašem „Uživatelském panelu“.',
	'HELP_FAQ_GROUPS_DEFAULT_QUESTION'	=> 'Co je to „Výchozí uživatelská skupina“?',
	'HELP_FAQ_GROUPS_MODERATORS_ANSWER'	=> 'Moderátoři jsou uživatelé (nebo skupiny uživatelů), kteří se starají o každodenní chod fóra. Mají pravomoc k upravování a mazání příspěvků a zamykání, odemykání, přesunování, mazání a rozdělování témat ve fórech, která moderují. Obecně jsou moderátoři přítomni, aby zabraňovali uživatelů v psaní mimo téma nebo v posílání hanlivých nebo urážlivých materiálů.',
	'HELP_FAQ_GROUPS_MODERATORS_QUESTION'	=> 'Kdo jsou to moderátoři?',
	'HELP_FAQ_GROUPS_TEAM_ANSWER'	=> 'Na této stránce můžete zobrazit seznam členů starajících se o chod nebo vedení fóra včetně moderátorů a administrátorů fóra. Také tam můžete najít další informace jako například, která fóra moderátoři moderují.',
	'HELP_FAQ_GROUPS_TEAM_QUESTION'	=> 'K čemu slouží odkaz „Tým“?',
	'HELP_FAQ_GROUPS_USERGROUPS_ANSWER'	=> 'Uživatelské skupiny jsou skupiny uživatelů, které dělí komunitu uživatelů na menší části, se kterými můžou administrátoři fóra snadněji pracovat. Každý člen fóra může patřit do několika skupin a každé skupině můžou být přiřazena různá oprávnění. To umožňuje administrátorům jednoduše měnit oprávnění pro mnoho uživatelů najednou, například změnit oprávnění pro moderátory, nebo povolit uživatelům přístup do soukromého fóra.',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_ANSWER'	=> 'Všechny uživatelské skupiny můžete zobrazit na záložce „Uživatelské skupiny“ ve vašem „Uživatelském panelu“. Pokud se chcete stát členem některé z uživatelských skupin, pokračujte kliknutím na příslušné tlačítko. Ne do všech skupin je volný přístup. V některých se musí žádost o členství schválit, některé můžou být uzavřené a některé můžou být dokonce skryté. Pokud je skupiny otevřená, můžete se stát jejím členem po kliknutí na příslušné tlačítko. Pokud členství ve skupině vyžaduje schválení, můžete o ně požádat kliknutím na příslušné tlačítko. Vedoucí uživatelské skupiny bude muset schválit vaši žádost a může se vás zeptat, proč se chcete stát členem skupiny. Neobtěžujte, prosím, vedoucího skupiny v případě, že zamítne vaši žádost - určitě pro to bude mít svoje důvody.',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_QUESTION'	=> 'Kde najdu seznam uživatelských skupin a jak se můžu stát členem skupiny?',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_ANSWER'	=> 'Vedoucí skupiny je obvykle určen administrátorem fóra při vytváření skupiny. Pokud máte zájem o vytvoření uživatelské skupiny, měli byste nejdříve kontaktovat administrátora fóra - zkuste mu poslat soukromou zprávu.',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_QUESTION'	=> 'Jak se můžu stát vedoucím skupiny?',
	'HELP_FAQ_GROUPS_USERGROUPS_QUESTION'	=> 'Co jsou to uživatelské skupiny?',

	'HELP_FAQ_ISSUES_ADMIN_ANSWER'	=> 'Všichni uživatelé fóra můžou použít formulář „Kontaktujte nás“, který se nachází naspodu všech stránek, pokud je tato možnost povolena administrátorem fóra.<br />Přihlášení uživatelé můžou také použít odkaz „Tým“, který se také nachází naspodu všech stránek.',
	'HELP_FAQ_ISSUES_ADMIN_QUESTION'	=> 'Jak můžu kontaktovat administrátora fóra?',
	'HELP_FAQ_ISSUES_FEATURE_ANSWER'	=> 'Tento software byl napsán a je licencován přes phpBB Limited. Pokud věříte, že by do něho měla být přidána nějaká funkce, navštivte, prosím, <a href="https://www.phpbb.com/ideas/">phpBB Ideas Centre</a> (Centrum nápadů pro phpBB), kde můžete hlasovat pro existující nápady nebo navrhnout nové funkce.',
	'HELP_FAQ_ISSUES_FEATURE_QUESTION'	=> 'Proč ve fóru není funkce XY?',
	'HELP_FAQ_ISSUES_LEGAL_ANSWER'	=> 'Jakýkoliv z administrátorů uvedených na stránce „Tým“, by měl být pro vaši stížnost vhodnou kontaktní osobou. Pokud se vám nedostane odpovědi, měli byste kontaktovat majitele domény (proveďte <a href="http://www.google.com/search?q=whois">WHOIS vyhledávání</a>) nebo, pokud je fórum provozováno na bezplatné službě (např. Yahoo!, forumzdarma, Webzdarma atd.), vedení nebo oddělení stížností tohoto provozovatele. Vezměte, prosím, na vědomí, že phpBB Limited na tomto fóru <strong>nemá absolutně žádné pravomoci</strong> a nemůže nést odpovědnost za to jak, kde, nebo kým je toto fórum používáno. Nekontaktujte phpBB Limited v souvislosti s jakýmikoliv právními záležitostmi (zastavení činnosti, odpovědnost, pomlouvačný komentář atd.), které <strong>nemají přímou souvislost</strong> s webem phpBB.com, nebo se samotným phpBB softwarem. Pokud pošlete email phpBB Limited týkající se <strong>jakákoliv třetí strany</strong>, která používá tento software, můžete očekávat, že dostanete pouze strohou, nebo vůbec žádnou odpověď.',
	'HELP_FAQ_ISSUES_LEGAL_QUESTION'	=> 'Koho mám kontaktovat ohledně stížnosti a/nebo právních záležitostí týkajících se tohoto fóra?',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_ANSWER'	=> 'Tento software (v jeho nemodifikované podobě) byl vytvořen, zveřejněn a chráněn autorskými právy <a href="https://www.phpbb.com/">phpBB Limited</a>. phpBB je dostupné pod GNU General Public License verze 2 (GPL-2.0) a může být volně distribuováno. Pro více informací se podívejte na stránku <a href="https://www.phpbb.com/about/">About phpBB</a> (angl.).',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_QUESTION'	=> 'Kdo napsal toto diskusní fórum?',

	'HELP_FAQ_LOGIN_AUTO_LOGOUT_ANSWER'	=> 'Pokud nezatrhnete během přihlašování políčko <em>Zapamatovat si mě</em> zůstanete na fóru přihlášen jen po přednastavený čas. To slouží k zabránění zneužití vašeho účtu někým jiným. Abyste zůstali přihlášeni, zatrhněte během přihlašování políčko <em>Zapamatovat si mě</em>. To se ale nedoporučuje, pokud přistupujete k fóru ze sdíleného počítače, např. v knihovně, internetové kavárně, počítačové učebně atd. Pokud toto zaškrtávací políčko nevidíte, znamená to, že administrátor fóra tuto funkci zakázal.',
	'HELP_FAQ_LOGIN_AUTO_LOGOUT_QUESTION'	=> 'Proč se automaticky odhlašuji?',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANSWER'	=> 'Existuje několik důvodů, proč k tomu může dojít. Nejdříve se ujistěte, že zadáváte správné uživatelské jméno a heslo. Pokud tomu tak je, kontaktujte administrátora fóra, abyste se ujistili, že jste nebyli zabanováni. Je také možné, že je na webu chyba v nastavení, která by měla být odstraněna.',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_ANSWER'	=> 'Je možné, že administrátor z nějakého důvodu deaktivoval nebo smazal váš účet. Na některých fórech také pravidelně odstraňují uživatele, kteří dlouhou dobu do fóra nic nenapsali, čímž se zmenší velikost databáze. Pokud je to váš případ, zaregistrujte se znovu a pokuste se více zapojit do diskuzí.',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_QUESTION'	=> 'Byl jsem ve fóru zaregistrovaný, ale teď se nemůžu přihlásit?!',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_QUESTION'	=> 'Proč se nemůžu přihlásit?',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_ANSWER'	=> 'Je možné, že administrátor fóra zakázal registrace, aby zabránil novým návštěvníkům, aby se stali členy fóra. Administrátor mohl také zakázat vaši IP adresu nebo používání uživatelského jména, pomocí kterého se snažíš zaregistrovat. Kontaktujte administrátora fóra a požádejte ho o pomoc.',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_QUESTION'	=> 'Proč se nemůžu zaregistrovat?',
	'HELP_FAQ_LOGIN_COPPA_ANSWER'	=> 'COPPA je americký zákon z roku 1998 na ochranu soukromí nezletilých na internetu. Tento zákon vyžaduje, aby webové stránky, které mohou potenciálně shromažďovat informace od nezletilých osob mladších 13 let, získaly písemný souhlas rodičů nebo nějaké jiné potvrzení od zákonného zástupce povolující shromažďování osobních identifikačních informací od nezletilých osob mladších 13 let. Pokud si nejste jisti, jestli se toto týká vás, jako někoho, kdo se zkouší zaregistrovat na webovou stránku, nebo se to týká webové stránky, na kterou se zkoušíte zaregistrovat, kontaktujte vašeho právního poradce. Vezměte prosím na vědomí, že ani phpBB Limited ani majitelé tohoto fóra nemůžou poskytovat právní poradenství a není kontaktním místem pro právní zájmy jakéhokoliv druhu, kromě těch uvedených v otázce „Koho mám kontaktovat ohledně stížnosti a/nebo právních záležitostí týkajících se tohoto fóra?“.',
	'HELP_FAQ_LOGIN_COPPA_QUESTION'	=> 'Co je to COPPA?',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_ANSWER'	=> 'Funkce „Smazat cookies“ smaže cookies vytvořené phpBB fórem, díky kterým zůstáváte přihlášen ve fóru. Pokud je to povoleno majitelem fóra, můžou být v cookies uloženy informace o tom, které příspěvky jste četli, a které ještě ne. Pokud máte problém s přihlašováním nebo odhlašováním, smazání cookies fóra může pomoci.',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_QUESTION'	=> 'K čemu slouží funkce „Smazat cookies“?',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_ANSWER'	=> 'Nepropadejte panice! Vaše původní heslo nelze sice získat zpět, ale můžete ho jednoduše resetovat. Přejděte na přihlašovací stránku a klikněte na odkaz <em>Zapomněl/a jsem heslo</em>. Postupujte podle instrukcí a brzy se opět budete moci přihlásit.<br />Pokud nebudete moci resetovat vaše heslo, kontaktujte administrátora fóra.',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_QUESTION'	=> 'Zapomněl jsem heslo!',
	'HELP_FAQ_LOGIN_REGISTER_ANSWER'	=> 'Možná nemusíte, záleží na administrátorovi fóra, jestli nastaví, že uživatel musí být přihlášen, aby mohl odesílat příspěvky. Nicméně registrací získáte přístup k dalším funkcím, které nejsou pro nepřihlášené uživatele dostupné, jako je například možnost použití vlastních avatarů, posílání soukromých zpráv a emailů ostatním členům fóra atd. Registrace trvá jen chvíli a tak vám ji můžeme doporučit.',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_ANSWER'	=> 'Nejdříve zkontrolujte správnost vašeho uživatelského jména a hesla. Pokud jsou správné, mohly se stát následující dvě věci. Pokud je ve fóru povolena registrace v souladu s americkým zákonem na ochranu soukromí nezletilých na internetu COPPA a vy jste během registrace zadali, že ještě nemáte třináct let, budete muset postupovat podle instrukcí, které jste obdrželi emailem. Na některých fórech je také vyžadováno, aby před přihlášením proběhla aktivace nově registrovaného účtu a to buď vámi, nebo administrátorem. Tato informace byla zobrazena během registrace. Pokud jste obdrželi registrační email, pokračujte podle instrukcí, které v něm najdete. Pokud jste registrační email neobdrželi, mohli jste zadat špatnou emailovou adresu, nebo byl email zachycen spam filtrem a skončil ve složce se spamy. Pokud jste si jistí, že jste zadali správnou emailovou adresu, zkuste s prosbou o pomoc kontaktovat administrátora fóra.',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_QUESTION'	=> 'Zaregistroval jsem se, ale nemůžu se přihlásit!',
	'HELP_FAQ_LOGIN_REGISTER_QUESTION'	=> 'Proč se musím zaregistrovat?',

	'HELP_FAQ_PMS_CANNOT_SEND_ANSWER'	=> 'Jsou tři důvody, proč to tak je. Nejste zaregistrovaní a/nebo přihlášení, administrátor fóra zakázal soukromé zprávy pro celé fórum, nebo administrátor fóra zakázal přímo vám odesílání zpráv. Pro více informací kontaktujte administrátora fóra.',
	'HELP_FAQ_PMS_CANNOT_SEND_QUESTION'	=> 'Nemůžu posílat soukromé zprávy!',
	'HELP_FAQ_PMS_SPAM_ANSWER'	=> 'Je nám líto, že se vám to stalo. Formulář pro odesílání emailů používaný na tomto fóru obsahuje obranné mechanismy, pomocí kterých můžeme vystopovat, kdo posílá takové emaily, proto pošlete administrátorovi fóra email s úplnou kopií emailu, který vám přišel. Je velmi důležité, aby v něm byly zahrnuty hlavičky, které obsahují podrobné údaje o uživateli, který email poslal. Administrátor fóra pak bude moci problém vyřešit.',
	'HELP_FAQ_PMS_SPAM_QUESTION'	=> 'Přišel mi od někoho na tomto fóru nevyžádaný nebo urážlivý email!',
	'HELP_FAQ_PMS_UNWANTED_ANSWER'	=> 'Ve vašem „Uživatelském panelu“ na záložce „Soukromé zprávy“ v sekci „Pravidla, složky a nastavení“ můžete vytvořit pravidlo, pomocí kterého budou zprávy od určeného uživatele nebo uživatelů automaticky smazány. Pokud dostáváte urážlivé soukromé zprávy od určitého uživatele, nahlaste zprávy moderátorům. Ti mají pravomoc zabránit uživateli v odesílání soukromých zpráv.',
	'HELP_FAQ_PMS_UNWANTED_QUESTION'	=> 'Dostávám nechtěné soukromé zprávy!',

	'HELP_FAQ_POSTING_BUMP_ANSWER'	=> 'Při zobrazení tématu můžete oživit téma kliknutím na odkaz „Oživit téma“ (většinou naspodu stránky), čímž se téma přesune na první místo ve fóru. Pokud tento odkaz nevidíte, mohlo být oživování témat zakázáno, nebo ještě neuběhla doba, po které je povoleno téma oživit. Oživit téma jde také jednoduše tak, že do něho odešlete příspěvek. Pokud to ale budete dělat, ujistěte se, že to není proti pravidlům fóra.',
	'HELP_FAQ_POSTING_BUMP_QUESTION'	=> 'Jak můžu oživit moje téma?',
	'HELP_FAQ_POSTING_CREATE_ANSWER'	=> 'Pokud chcete do fóra poslat nové téma, klikněte na tlačítko „Nové téma“. Pro odeslání odpovědi do existujícího tématu klikněte na tlačítko „Odpovědět“. Je možné, že se budete muset zaregistrovat a přihlásit předtím, než budete moci posílat příspěvky. Naspodu každého fóra a tématu můžete najít seznam oprávnění, které v konkrétním fóru a tématu máte. Například: „Můžete posílat nová témata“, „Můžete posílat přílohy“ atd.',
	'HELP_FAQ_POSTING_CREATE_QUESTION'	=> 'Jak můžu vytvořit nové téma nebo poslat odpověď?',
	'HELP_FAQ_POSTING_DRAFT_ANSWER'	=> 'Pomocí tohoto tlačítka můžete uložit rozepsanou zprávu, abyste ji mohli dokončit a odeslat později. Pro načtení rozepsaných zpráv přejděte na váš „Uživatelský panel“, ve kterém naleznete odkaz na vaše rozepsané zprávy.',
	'HELP_FAQ_POSTING_DRAFT_QUESTION'	=> 'K čemu slouží tlačítko „Uložit jako rozepsanou zprávu“ zobrazené při psaní příspěvku?',
	'HELP_FAQ_POSTING_EDIT_DELETE_ANSWER'	=> 'Pokud nejste administrátor nebo moderátor, můžete pouze upravovat nebo mazat svoje vlastní příspěvky. Příspěvek můžete upravit po kliknutí na tlačítko „Upravit“, které se nachází v příslušném příspěvku. Někdy lze upravit příspěvek jen po omezenou dobu po jeho odeslání. Pokud již někdo na příspěvek odpověděl a vy se do tématu vrátíte, najdete pod ním krátký text, ve kterém je uvedeno kolikrát a kdy jste příspěvek upravili. Toto bude zobrazeno pouze v případě, že někdo do tématu pošle odpověď, ale neobjeví se to, pokud moderátor nebo administrátor upraví příspěvek, ačkoli ti mohou zanechat na základě vlastního uvážení vzkaz, proč příspěvek upravili. Vezměte prosím na vědomí, že normální uživatelé nemůžou smazat příspěvek, když k němu někdo pošle odpověď.',
	'HELP_FAQ_POSTING_EDIT_DELETE_QUESTION'	=> 'Jak můžu upravit nebo smazat příspěvek?',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_ANSWER'	=> 'Do některých fór mají přístup jen určití uživatelé nebo skupiny. Abyste je mohli zobrazit, číst, přispívat do nich nebo v nich provádět jiné akce, můžete potřebovat speciální oprávnění. Kontaktujte administrátora fóra, aby vám umožnil do fóra přístup.',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_QUESTION'	=> 'Proč nemám přístup do určitého fóra?',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_ANSWER'	=> 'Oprávnění pro přílohy se nastavují pro jednotlivá fóra, skupiny nebo uživatele. Administrátor fóra nemusel povolit do určitého fóra, do kterého můžete posílat příspěvky, přidávat přílohy, nebo možná, že posílat přílohy můžou jen určité skupiny, do kterých nepatříte. Pokud si nejste jisti, z jakého důvodu nemůžete k příspěvkům přidávat přílohy, kontaktujte administrátora fóra.',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_QUESTION'	=> 'Proč nemůžu posílat přílohy?',
	'HELP_FAQ_POSTING_POLL_ADD_ANSWER'	=> 'Omezení počtu možností v hlasování je nastaveno administrátorem fóra. Pokud si myslíte, že potřebujete do vašeho hlasování vložit více možností než je povoleno, kontaktujte administrátora fóra.',
	'HELP_FAQ_POSTING_POLL_ADD_QUESTION'	=> 'Proč nemůžu přidat do hlasování více možností?',
	'HELP_FAQ_POSTING_POLL_CREATE_ANSWER'	=> 'Při posílání nového tématu, nebo při úpravě prvního příspěvku tématu, klikněte na záložku „Vytvořit hlasování“ pod hlavním formulářem pro text příspěvku. Pokud tuto záložku nevidíte, nemáte potřebné oprávnění k vytvoření hlasování. Vložte „Hlasovací otázku“ a nejméně dvě „Možnosti hlasování“, ujistěte se, že je každá možnost napsaná v textovém poli na vlastním řádku. Můžete také nastavit počet možností, které uživatel může během hlasování vybrat (v poli „Možností na uživatele“), časové omezení trvání hlasování ve dnech (0 pro časově neomezené hlasování) a nakonec můžete povolit uživatelům měnit jejich hlasy.',
	'HELP_FAQ_POSTING_POLL_CREATE_QUESTION'	=> 'Jak můžu vytvořit hlasování/anketu?',
	'HELP_FAQ_POSTING_POLL_EDIT_ANSWER'	=> 'Stejně jako v případě příspěvků může být hlasování upraveno pouze jeho autorem, moderátorem nebo administrátorem. Pro úpravu hlasování klikněte na tlačítko pro úpravu prvního příspěvku v tématu, ke kterému je hlasování vždy připojeno. Pokud zatím nikdo nehlasoval, uživatelé můžou smazat hlasování nebo v něm upravit jakoukoliv možnost. Pokud ale již uživatelé hlasovali, jen administrátoři nebo moderátoři můžou upravit nebo smazat hlasování. To zabrání tomu, aby byly možnosti hlasování změněny v ještě neukončeném hlasování.',
	'HELP_FAQ_POSTING_POLL_EDIT_QUESTION'	=> 'Jak můžu upravit nebo smazat hlasování?',
	'HELP_FAQ_POSTING_QUEUE_ANSWER'	=> 'Administrátor fóra se mohl rozhodnout, že příspěvky ve fóru, do kterého přispíváte, musí být prohlédnuty předtím, než je budou moci zobrazit ostatní uživatelé. Je také možné, že vás administrátor fóra vložil do skupiny uživatelů, jejichž příspěvky musí být schváleny. Kontaktujte, prosím, administrátora fóra pro další informace.',
	'HELP_FAQ_POSTING_QUEUE_QUESTION'	=> 'Proč musí být můj příspěvek schválen?',
	'HELP_FAQ_POSTING_REPORT_ANSWER'	=> 'Pokud je tato funkce povolena administrátorem fóra, měli byste v příspěvku, který chcete nahlásit, vidět tlačítko (ikonu) pro nahlášení příspěvku. Po kliknutí na tlačítko se zobrazí formulář, pomocí kterého můžete příspěvek nahlásit.',
	'HELP_FAQ_POSTING_REPORT_QUESTION'	=> 'Jak můžu moderátorovi nahlásit příspěvek?',
	'HELP_FAQ_POSTING_SIGNATURE_ANSWER'	=> 'Abyste mohli přidat podpis k vašim příspěvkům, musíte ho nejdřív ve vašem „Uživatelském panelu“ na záložce „Profil“ vytvořit. Jakmile ho vytvoříte, můžete při psaní příspěvku zatrhnout políčko <em>Připojit podpis</em>, čímž váš podpis k příspěvku připojíte. Pomocí možnosti „Připojit můj podpis ke všem mým příspěvkům“, kterou naleznete ve vašem „Uživatelském panelu“ na záložce „Nastavení fóra“ v sekci „Výchozí nastavení příspěvků“ můžete automaticky připojit váš podpis ke všem vašim příspěvkům. Pokud to uděláte, můžete stále zamezit připojení vašeho podpisu k jednotlivým příspěvkům tak, že během psaní příspěvku zrušíte zaškrtnutí možnosti <em>Připojit podpis</em>.',
	'HELP_FAQ_POSTING_SIGNATURE_QUESTION'	=> 'Jak můžu přidat ke svým příspěvků podpis?',
	'HELP_FAQ_POSTING_WARNING_ANSWER'	=> 'Každý administrátor fóra má na svém fóru svoje vlastní pravidla. Pokud nějaké z těchto pravidel porušíte, může vám být uděleno varování. Vezměte prosím na vědomí, že toto je rozhodnutí administrátora a phpBB Limited nemá nic společného s varováními na daném fóru. Pokud si nejste jisti, z jakého důvodu jste obdrželi varování, kontaktujte administrátora fóra.',
	'HELP_FAQ_POSTING_WARNING_QUESTION'	=> 'Proč jsem obdržel varování?',

	'HELP_FAQ_SEARCH_BLANK_ANSWER'	=> 'Vaše vyhledávání vrátilo příliš mnoho výsledků a webový server je nebyl schopen zpracovat. Přejděte na „Rozšířené vyhledávání“ a použijte konkrétnější hledané výrazy a vyberte fóra, ve kterých budete vyhledávat.',
	'HELP_FAQ_SEARCH_BLANK_QUESTION'	=> 'Proč se mi po vyhledávání zobrazí prázdná stránka!?',
	'HELP_FAQ_SEARCH_FORUM_ANSWER'	=> 'Vložte hledaný výraz do vyhledávacího pole umístěného na obsahu fóra (indexu) nebo na stránkách témat nebo fór. Na rozšířené vyhledávání můžete přejít kliknutím na odkaz (nebo ikonu) „Rozšířené vyhledávání“, který najdete na všech stránkách fóra. Jakým způsobem bude vyhledávání dostupné závisí na použitém vzhledu fóra.',
	'HELP_FAQ_SEARCH_FORUM_QUESTION'	=> 'Jak můžu vyhledávat na celém fóru nebo v jednotlivých fórech?',
	'HELP_FAQ_SEARCH_MEMBERS_ANSWER'	=> 'Přejděte na stránku „Členové“ a klikněte na odkaz „Najít uživatele“.',
	'HELP_FAQ_SEARCH_MEMBERS_QUESTION'	=> 'Jak můžu vyhledat určité uživatele?',
	'HELP_FAQ_SEARCH_NO_RESULT_ANSWER'	=> 'Vámi hledaný výraz byl pravděpodobně příliš obecný a obsahoval mnoho běžných termínů, které phpBB neindexuje. Buďte konkrétnější a použijte možnosti v „Rozšířeném vyhledávání“.',
	'HELP_FAQ_SEARCH_NO_RESULT_QUESTION'	=> 'Proč moje vyhledávání nic nenašlo?',
	'HELP_FAQ_SEARCH_OWN_ANSWER'	=> 'Vaše vlastní příspěvky můžete vyhledat buď kliknutím na odkaz „Zobrazit vaše příspěvky“ ve vašem „Uživatelském panelu“, nebo kliknutím na odkaz „Vyhledat příspěvky uživatele“ ve vašem „Profilu“ (zobrazí se po kliknutí na vaše uživatelské jméno), nebo kliknutím na odkaz „Vaše příspěvky“ v nabídce „Rychlé odkazy“, která se nachází nahoře na fóru. Pro vyhledání vašich témat použijte stránku „Rozšířené vyhledávání“, na které pomocí různých možnosti můžete zúžit vyhledávání na vaše témata.',
	'HELP_FAQ_SEARCH_OWN_QUESTION'	=> 'Jak můžu vyhledat svoje vlastní příspěvky a témata?',

	'HELP_FAQ_USERSETTINGS_AVATAR_ANSWER'	=> 'Existují dva druhy obrázků, které můžou být v příspěvcích zobrazeny u uživatelského jména. Jedním z nich jsou obrázky asociované s vaší hodností, které obvykle vypadají jako hvězdičky, tečky nebo čtverečky a indikují, kolik příspěvků jste odeslali, nebo pomáhají určit jakou mají uživatelé fóra funkci. Další, obvykle větší obrázek, je známý jako avatar a obecně se jedná o unikátní nebo osobní obrázek každého uživatele.',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_ANSWER'	=> 'Avatar můžete přidat pomocí možnosti „Nastavení avataru“, kterou najdete ve vašem „Uživatelském panelu“ na záložce „Profil“. Avatar můžete přidat jedním z následujících způsobů: použít Gravatar, vybrat si avatar v Galerii, použít vzdálený avatar (z jiného webu), nebo avatar nahrát do tohoto fóra. Záleží na administrátorovi fóra, jestli je používání avatarů povoleno a jakými způsoby lze avatary do fóra přidat. Pokud nemůžete avatary používat, kontaktujte administrátora fóra.',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_QUESTION'	=> 'Jak můžu u svého jména zobrazit avatar?',
	'HELP_FAQ_USERSETTINGS_AVATAR_QUESTION'	=> 'K čemu slouží obrázky zobrazené u mého uživatelského jména?',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_ANSWER'	=> 'Pokud jste se ve fóru zaregistrovali, jsou všechna vaše nastavení uložena v databázi fóra. Pro jejich změnu přejděte na váš „Uživatelský panel“ pomocí odkazu, který obvykle najdete po kliknutí na vaše jméno nahoře na stránkách fóra. V „Uživatelském panelu“ budete moci změnit všechna vaše nastavení a předvolby fóra.',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_QUESTION'	=> 'Jak můžu změnit svoje nastavení?',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_ANSWER'	=> 'Jen registrovaní uživatelé můžou posílat emaily ostatním členům fóra přes vestavěný formulář a to jen v případě, že administrátor tuto funkci povolil. Je to z důvodu zabránění zneužití emailového systému anonymními uživateli.',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_QUESTION'	=> 'Když chci poslat email uživateli fóra, musím se přihlásit?',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_ANSWER'	=> 'V „Uživatelském panelu“ na záložce „Nastavení fóra“ -> „Obecné nastavení fóra“ najdete možnost <em>Skrýt můj online stav</em>. Pokud u této možnosti nastavíte „Ano“, budete na seznamu viditelní jen pro administrátory, moderátory a sama sebe. Budete počítán jako skrytý uživatel.',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_QUESTION'	=> 'Jak můžu zabránit tomu, aby bylo moje uživatelské jméno zobrazeno na seznamu uživatelů nacházejících se ve fóru?',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_ANSWER'	=> 'Pokud váš jazyk není na seznamu jazyků, tak ho buď administrátor nenainstaloval, nebo nikdo toto fórum do vašeho jazyka nepřeložil. Zkuste se zeptat administrátora fóra, jestli může nainstalovat požadovaný jazyk. Pokud překlad do vašeho jazyku neexistuje, můžete vytvořit nový překlad. Více informací můžete najít na webu <a href="https://www.phpbb.com/">phpBB</a>&reg;.',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_QUESTION'	=> 'Můj jazyk není na seznamu!',
	'HELP_FAQ_USERSETTINGS_RANK_ANSWER'	=> 'Hodnosti, které jsou zobrazeny pod vaším uživatelským jménem, indikují počet příspěvků, které jste do fóra odeslali, nebo slouží k identifikaci určitých uživatelů např. moderátorů a administrátorů. Obecně řečeno, nemůžete sami změnit znění žádných hodností ve fóru, protože jsou nastaveny administrátorem fóra. Prosím, nezatěžujte fórum zbytečným přispíváním jen proto, abyste dosáhli vyšší hodnosti. Na většině fór to nebude tolerováno a moderátor nebo administrátor jednoduše sníží váš počet příspěvků.',
	'HELP_FAQ_USERSETTINGS_RANK_QUESTION'	=> 'Jaká je moje hodnost a jak ji můžu změnit?',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_ANSWER'	=> 'Pokud jste si jisti, že jste nastavili vaši časovou zónu správně, ale čas se stále zobrazuje nesprávně, pak je čas nastavený na hodinách serveru nesprávný. Upozorněte na to, prosím, administrátora, aby mohl tento problém odstranit.',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_QUESTION'	=> 'Změnil jsem časovou zónu, ale čas se stále nezobrazuje správně!',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_ANSWER'	=> 'Je možné, že zobrazený čas je pro jinou časovou zónu, než ve které se nacházíte. Pokud se jedná o tento případ, přejděte na váš „Uživatelský panel“ na záložku „Nastavení fóra“ a změňte vaši časovou zónu, aby odpovídala vaší konkrétní oblasti, např. Praha, Bratislava, Londýn, New York, Sydney atd. Vezměte prosím na vědomí, že změnu časové zóny, stejně jako většinu nastavení, můžou provádět jen zaregistrovaní uživatelé. Pokud ještě nejste registrováni, toto je dobrý důvod, proč tak učinit.',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_QUESTION'	=> 'Zobrazení časů není správné!',
));
