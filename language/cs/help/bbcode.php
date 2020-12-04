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
	'HELP_BBCODE_BLOCK_IMAGES'	=> 'Zobrazení obrázků v příspěvcích',
	'HELP_BBCODE_BLOCK_INTRO'	=> 'Úvod',
	'HELP_BBCODE_BLOCK_LINKS'	=> 'Vytváření odkazů',
	'HELP_BBCODE_BLOCK_LISTS'	=> 'Generování seznamů',
	'HELP_BBCODE_BLOCK_OTHERS'	=> 'Další záležitosti',
	'HELP_BBCODE_BLOCK_QUOTES'	=> 'Citace a vložení kódu',
	'HELP_BBCODE_BLOCK_TEXT'	=> 'Formátování textu',

	'HELP_BBCODE_IMAGES_ATTACHMENT_ANSWER'	=> 'Přílohy můžou být umístěny na jakékoliv místo v příspěvku pomocí nového BBKódu <strong>[attachment=][/attachment]</strong>, pokud bylo používání příloh povoleno administrátorem fóra a pokud vám byla udělena příslušná oprávnění pro přidávání příloh. Na stránce psaní příspěvků je okno pro přetažení a nahrání příloh. Po nahrání příloh je můžete pomocí tlačítka „Umístit do textu“ vložit na jakékoliv místo do textu příspěvku.',
	'HELP_BBCODE_IMAGES_ATTACHMENT_QUESTION'	=> 'Přidávání příloh do příspěvků',
	'HELP_BBCODE_IMAGES_BASIC_ANSWER'	=> 'Součástí phpBB je BBKód, který slouží pro přidávání obrázků do vašich příspěvků. Při použití tohoto BBKódu je dobré pamatovat na dvě velmi důležité věci. Zaprvé, mnoho uživatelů nemá v příspěvcích rádo příliš mnoho obrázků a zadruhé, obrázek, který chcete přidat do příspěvku musí být dostupný online na internetu (například nemůže existovat pouze ve vašem počítači, kromě případu, kdy provozujete webový server!). Pro zobrazení obrázku v příspěvku musíte znát URL adresu obrázku, kterou vložíte do BBKódu <strong>[img][/img]</strong>. Například:<br /><br /><strong>[img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img]</strong><br /><br />Jak je zmíněno v URL sekci výše, pokud chcete, můžete vložit obrázek do BBKódu <strong>[url][/url]</strong> a vytvořit tak obrázek s odkazem, např.<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img][/url]</strong><br /><br />vytvoří:<br /><br /><a href="https://www.phpbb.com/"><img src="https://www.phpbb.com/theme/images/logos/blue/160x52.png" alt="" /></a>',
	'HELP_BBCODE_IMAGES_BASIC_QUESTION'	=> 'Přidávání obrázků do příspěvků',

	'HELP_BBCODE_INTRO_BBCODE_ANSWER'	=> 'BBKódy jsou speciální implementace HTML jazyka. Jestli můžete použít BBKódy při psaní vašich příspěvků, záleží na administrátorovi fóra. BBKódy je možné v jednotlivých příspěvcích zakázat ve formuláři pro odesílání příspěvků. BBKódy se používají podobně jako HTML, ale tagy jsou uzavřeny v hranatých závorkách [ a ] a ne v &lt; a &gt; a poskytují velkou kontrolu nad tím co a jak je zobrazeno. BBKódy můžete přidávat do příspěvků manuálně, nebo jednodušeji pomocí tlačítek s BBKódy zobrazených nad oknem editoru textu (zvýrazněním textu a kliknutím na tlačítko BBKódu). Následující průvodce vám může při používání BBKódů pomoci.',
	'HELP_BBCODE_INTRO_BBCODE_QUESTION'	=> 'Co jsou to BBKódy?',

	'HELP_BBCODE_LINKS_BASIC_ANSWER'	=> 'BBKódy v phpBB podporují několik způsobů vytváření odkazů v příspěvcích.<ul><li>Prvním způsobem je použití BBKódu <strong>[url=][/url]</strong>. URL adresa, kterou napíšete za rovnítko = je ta, na kterou odkaz povede. Například odkaz vedoucí na phpBB.com můžete napsat takhle:<br /><br /><strong>[url=https://www.phpbb.com/]</strong>Navštivte phpBB!<strong>[/url]</strong><br /><br />což vytvoří následující odkaz: <a href="https://www.phpbb.com/">Navštivte phpBB!</a> Poznámka: jestli se odkazy otevírají ve stejném nebo v novém okně/panelu záleží na nastavení prohlížeče uživatele.</li><li>Pokud chcete, aby byla samotná URL adresa zobrazená jako odkaz, můžete použít následující způsob:<br /><br /><strong>[url]</strong>https://www.phpbb.com/<strong>[/url]</strong><br /><br />To vytvoří následující odkaz: <a href="https://www.phpbb.com/">https://www.phpbb.com/</a></li><li>V phpBB je také funkce pojmenovaná <i>Magické odkazy</i>, pomocí které se z každé URL adresy se správnou syntaxí automaticky vytvoří odkaz, aniž by bylo potřeba URL adresu vložit do BBKódu a v adrese dokonce může chybět počáteční http://. Například, pokud napíšete do vašeho příspěvku www.phpbb.com, zobrazí se automaticky při prohlížení příspěvku: <a href="http://www.phpbb.com/">www.phpbb.com</a>.</li><li>Totéž platí i pro e-mailové adresy. E-mailovou adresu můžete vložit buď do BBKódu <strong>[email][/email]</strong>, například:<br /><br /><strong>[email]</strong>ni.kdo@domena.cz<strong>[/email]</strong><br /><br />což vytvoří <a href="mailto:ni.kdo@domena.cz">ni.kdo@domena.cz</a>, nebo můžete jednoduše napsat do zprávy ni.kdo@domena.cz, což bude při prohlížení příspěvku automaticky zkonvertováno na klikací emailovou adresu.</li></ul>Stejně jako v případě ostatních BBKódů můžete i BBKód <strong>[url][/url]</strong> umístit okolo jiných BBKódů jako jsou <strong>[img][/img]</strong> (více dále), <strong>[b][/b]</strong> atd. Jak už bylo řečeno výše, je na vás, abyste se ujistili, že používáte správné pořadí otevíracích a uzavíracích tagů BBKódů, například:<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/url][/img]</strong><br /><br /><span style="text-decoration: underline">není</span> správně a mohlo by to vést ke smazání příspěvku, takže si na to dávejte pozor.',
	'HELP_BBCODE_LINKS_BASIC_QUESTION'	=> 'Odkazy na jiné weby',

	'HELP_BBCODE_LISTS_ORDERER_ANSWER'	=> 'Druhý typ seznamu, seznam s pořadím, vám dává kontrolu nad tím, co bude zobrazeno před každou položkou seznamu. Abyste vytvořili seznam s pořadím, použijte BBKód <strong>[list=1][/list]</strong> pro vytvoření očíslovaného seznamu, nebo alternativně <strong>[list=a][/list]</strong> pro vytvoření abecedního seznamu. Stejně jako u neuspořádaného seznamu jsou jednotlivé položky definované použitím BBKódu <strong>[*]</strong>. Například:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Jít do obchodu<br /><strong>[*]</strong>Koupit nový počítač<br /><strong>[*]</strong>Nadávat, když se pokazí<br /><strong>[/list]</strong><br /><br />vytvoří následující:<br /><br /><ol style="list-style-type: decimal;"><li>Jít do obchodu</li><li>Koupit nový počítač</li><li>Nadávat, když se pokazí</li></ol>Zatímco abecední seznam můžete napsat takhle:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>První možná odpověď<br /><strong>[*]</strong>Druhá možná odpověď<br /><strong>[*]</strong>Třetí možná odpověď<br /><strong>[/list]</strong><br /><br />čímž dostanete tohle:<br /><br /><ol style="list-style-type: lower-alpha"><li>První možná odpověď</li><li>Druhá možná odpověď</li><li>Třetí možná odpověď</li></ol><br /><strong>[list=A]</strong><br /><strong>[*]</strong>První možná odpověď<br /><strong>[*]</strong>Druhá možná odpověď<br /><strong>[*]</strong>Třetí možná odpověď<br /><strong>[/list]</strong><br /><br />vytvoří<ol style="list-style-type: upper-alpha"><li>První možná odpověď</li><li>Druhá možná odpověď</li><li>Třetí možná odpověď</li></ol><br /><strong>[list=i]</strong><br /><strong>[*]</strong>První možná odpověď<br /><strong>[*]</strong>Druhá možná odpověď<br /><strong>[*]</strong>Třetí možná odpověď<br /><strong>[/list]</strong><br /><br />vytvoří<ol style="list-style-type: lower-roman"><li>První možná odpověď</li><li>Druhá možná odpověď</li><li>Třetí možná odpověď</li></ol><br /><strong>[list=I]</strong><br /><strong>[*]</strong>První možná odpověď<br /><strong>[*]</strong>Druhá možná odpověď<br /><strong>[*]</strong>Třetí možná odpověď<br /><strong>[/list]</strong><br /><br />vytvoří<ol style="list-style-type: upper-roman"><li>První možná odpověď</li><li>Druhá možná odpověď</li><li>Třetí možná odpověď</li></ol>',
	'HELP_BBCODE_LISTS_ORDERER_QUESTION'	=> 'Vytvoření seznamu s pořadím',
	'HELP_BBCODE_LISTS_UNORDERER_ANSWER'	=> 'BBKódy podporují dva druhy seznamů: neuspořádaný seznam a seznam s pořadím. Jsou v podstatě stejné jako jejich HTML ekvivalenty. V neuspořádaném seznamu budou všechny položky zobrazeny jedna za druhou každá na novém řádku a s odsazením pomocí kuličky. Pro vytvoření neuspořádaného seznamu použijte BBKód <strong>[list][/list]</strong> a jednotlivé položky v seznamu definujte použitím BBKódu <strong>[*]</strong>. Například pro vytvoření seznamu vašich oblíbených barev můžete napsat:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Červená<br /><strong>[*]</strong>Modrá<br /><strong>[*]</strong>Žlutá<br /><strong>[/list]</strong><br /><br />To vygeneruje následující seznam:<br /><br /><ul><li>Červená</li><li>Modrá</li><li>Žlutá</li></ul><br />Pokud chcete, můžete také pomocí následující úpravy BBKódu určit vzhled kuličky <strong>[list=disc][/list]</strong>, <strong>[list=circle][/list]</strong>, nebo <strong>[list=square][/list]</strong>.',
	'HELP_BBCODE_LISTS_UNORDERER_QUESTION'	=> 'Vytvoření neuspořádaného seznamu',

	'HELP_BBCODE_OTHERS_CUSTOM_ANSWER'	=> 'Pokud jste na tomto fóru administrátorem a máte dostatečná oprávnění, můžete v administraci fóra v sekci BBKódy přidat vlastní BBKódy.',
	'HELP_BBCODE_OTHERS_CUSTOM_QUESTION'	=> 'Můžu přidat do fóra další BBKódy?',

	'HELP_BBCODE_QUOTES_CODE_ANSWER'	=> 'Pokud chcete poslat do příspěvku část kódu nebo vlastně cokoliv u čeho je požadovaná pevná šířka dat, např. písmo typu Courier, měli byste vložit text do BBKódu <strong>[code][/code]</strong>, např.<br /><br /><strong>[code]</strong>echo &quot;Toto je nejaky kod&quot;;<strong>[/code]</strong><br /><br />Všechno formátování použité v BBKódu <strong>[code][/code]</strong> zůstane zachováno, když ho později zobrazíte.',
	'HELP_BBCODE_QUOTES_CODE_QUESTION'	=> 'Vložení kódu a dat s pevnou šířkou',
	'HELP_BBCODE_QUOTES_TEXT_ANSWER'	=> 'Existují dva způsoby citace textu - s odkazem na autora textu nebo bez odkazu:<br /><br /><ul><li>Když použijete pro odpověď na příspěvek ve fóru tlačítko „Citovat“, můžete si všimnout, že text, který je přidán okna pro psaní zprávy, je uzavřen v BBKódu <strong>[quote=&quot;&quot;][/quote]</strong>. Tímto způsobem můžete použít citaci s odkazem na osobu nebo cokoliv jiného, co vložíte mezi uvozovky! Například pro citaci části textu, který napsal pan Sněhurka, byste měli vložit:<br /><br /><strong>[quote=&quot;pan Sněhurka&quot;]</strong>Text, který napsal pan Sněhurka by měl přijít sem<strong>[/quote]</strong><br /><br />Výsledkem bude automatické přidání &quot;pan Sněhurka napsal:&quot; před citovaný text. Nezapomeňte, že <strong>musíte</strong> jméno, které chcete citovat, vložit mezi uvozovky &quot;jméno&quot;.</li><li>Druhý způsob vám umožní citovat něco bez uvedení autora. To uděláte tak, že vložíte text do BBKódu <strong>[quote][/quote]</strong> (všimněte si, že chybí rovnítko a uvozovky). Při prohlížení takového příspěvku bude text zobrazen v bloku citace.</li></ul>',
	'HELP_BBCODE_QUOTES_TEXT_QUESTION'	=> 'Citace textu v odpovědích',

	'HELP_BBCODE_TEXT_BASIC_ANSWER'	=> 'Pomocí BBKódů můžete rychle změnit základní formátování vašeho textu. Dělá se to následně:<br /><br /><ul><li>Abyste zvýraznili část textu tučně, vložte text mezi <strong>[b][/b]</strong>, např.:<br /><br /><strong>[b]</strong>Nazdar<strong>[/b]</strong><br /><br />se zobrazí jako <strong>Nazdar</strong></li><li>Pro podtržení použijte <strong>[u][/u]</strong>, například:<br /><br /><strong>[u]</strong>Dobré ráno<strong>[/u]</strong><br /><br />se zobrazí jako <span style="text-decoration: underline">Dobré ráno</span></li><li>Pro vytvoření kurzívy použijte <strong>[i][/i]</strong>, např.<br /><br />Tohle je <strong>[i]</strong>naprosto úžasné!<strong>[/i]</strong><br /><br />se zobrazí jako Tohle je <i>naprosto úžasné!</i></li></ul>',
	'HELP_BBCODE_TEXT_BASIC_QUESTION'	=> 'Jak vytvořit tučný, podtržený text nebo kurzívu',
	'HELP_BBCODE_TEXT_COLOR_ANSWER'	=> 'Barvu a velikost textu můžete změnit pomocí následujících BBKódů. Pamatujte, že výsledný vzhled textu závisí na tom, jaký prohlížeč a systém budou čtenáři vašeho příspěvku používat. <ul><li>Barvu textu můžete změnit tak, že text vložíte do BBKódu <strong>[color=][/color]</strong>. Můžete použít buď uznaný název barvy v ang. (např. red, blue, yellow atd.), nebo hexadecimální kód barvy (např. #FFFFFF, #000000 atd.). Z toho plyne, že pro vytvoření červeného textu můžete použít buď <br /><br /><strong>[color=red]</strong>Ahoj!<strong>[/color]</strong><br /><br />nebo<br /><br /><strong>[color=#FF0000]</strong>Ahoj!<strong>[/color]</strong><br /><br />Oběma způsoby bude vytvořeno <span style="color:red">Ahoj!</span></li><li>Velikost textu můžete změnit podobným způsobem a to použitím BBKódu <strong>[size=][/size]</strong>. Použití tohoto BBKódu závisí na vzhledu, který má uživatel vybraný, ale doporučený formát je numerická hodnota reprezentující velikost textu v procentech, přičemž se začíná na 20 (velmi malý text) a pokračuje až do 200 (velmi velký text). Například:<br /><br /><strong>[size=30]</strong>MALÉ<strong>[/size]</strong><br /><br />se zobrazí <span style="font-size:30%;">MALÉ</span><br /><br />zatímco:<br /><br /><strong>[size=200]</strong>OBROVSKÉ!<strong>[/size]</strong><br /><br />bude <span style="font-size:200%;">OBROVSKÉ!</span></li></ul>',
	'HELP_BBCODE_TEXT_COLOR_QUESTION'	=> 'Jak změnit barvu nebo velikost textu',
	'HELP_BBCODE_TEXT_COMBINE_ANSWER'	=> 'Ano, samozřejmě, že můžete. Například, abyste upoutali něčí pozornost, můžete napsat:<br /><br /><strong>[size=200][color=red][b]</strong>TADY JSEM!<strong>[/b][/color][/size]</strong>,<br /><br />což bude po odeslání příspěvku vypadat takto: <span style="color:red;font-size:200%;"><strong>TADY JSEM!</strong></span><br /><br />Nedoporučujeme vám ale psát hodně textu, který tak vypadá! Pamatujte, že je na vás, odesílateli, abyste se ujistili, všechny BBKódy jsou správně uzavřeny. Například následující text není napsaný správně:<br /><br /><strong>[b][u]</strong>Toto je špatně<strong>[/b][/u]</strong>, protože jsou přehozeny uzavírací tagy BBKódů.',
	'HELP_BBCODE_TEXT_COMBINE_QUESTION'	=> 'Můžu kombinovat formátovací BBKódy?',
));
