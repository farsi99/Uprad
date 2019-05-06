<?php


/* spécifique pour mon front */
if (!function_exists('css_urlft')) {
	function css_urlft($nom)
	{
		return base_url() . 'assets/front/css/' . $nom . '.css?ver=' . date("Ymd");
	}
}

if (!function_exists('css_urlrev')) {
	function css_urlrev($nom)
	{
		return base_url() . 'assets/front/revolution/css/' . $nom . '.css?ver=' . date("Ymd");
	}
}

if (!function_exists('js_urlft')) {
	function js_urlft($nom)
	{
		return base_url() . 'assets/front/js/' . $nom . '.js?ver=' . date("Ymd");
	}
}

if (!function_exists('js_urlrev')) {
	function js_urlrev($nom)
	{

		return base_url() . 'assets/front/revolution/js/' . $nom . '.js?ver=' . date("Ymd");
	}
}

if (!function_exists('js_urlrevext')) {
	function js_urlrevext($nom)
	{
		return base_url() . 'assets/front/revolution/js/extensions/' . $nom . '.js?ver=' . date("Ymd");
	}
}


if (!function_exists('img_urlft')) {
	function img_urlft($nom)
	{
		return base_url() . 'assets/front/images/' . $nom;
	}
}

if (!function_exists('font_urlft')) {
	function font_urlft($nom)
	{
		return base_url() . 'assets/fonts/' . $nom;
	}
}

// fin du front spécifique

if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('plugins_url')) {
	function plugins_url($pPluginPath)
	{
		return base_url() . 'assets/plugins/' . $pPluginPath;
	}
}

if (!function_exists('download_url')) {
	function download_url($filePath)
	{
		return './downloads/' . $filePath;
	}
}

if (!function_exists('css_url')) {
	function css_url($nom)
	{
		return base_url() . 'assets/css/' . $nom . '.css?ver=' . date("Ymd");
	}
}




if (!function_exists('js_url')) {
	function js_url($nom)
	{
		return base_url() . 'assets/js/' . $nom . '.js?ver=' . date("Ymd");
	}
}
if (!function_exists('img_url')) {
	function img_url($nom)
	{
		return base_url() . 'assets/img/' . $nom;
	}
}

if (!function_exists('font_url')) {
	function font_url($nom)
	{
		return base_url() . 'assets/fonts/' . $nom;
	}
}

if (!function_exists('tools_url')) {
	function tools_url($nom)
	{
		//return base_url() . 'assets/tools/' . $nom;
		return './assets/tools/' . $nom;
	}
}

if (!function_exists('upload_url')) {
	function upload_url($nom)
	{
		//return base_url() . 'assets/tools/' . $nom;
		return '/assets/uploads/images/' . $nom;
	}
}
if (!function_exists('upload_jpo_url')) {
	function upload_jpo_url($nom)
	{
		//return base_url() . 'assets/tools/' . $nom;
		return '/assets/uploads/jpo/' . $nom;
	}
}

if (!function_exists('string_to_url')) {
	function string_to_url($string)
	{
		$return = replace_spec_char($string);
		$return = str_replace(' ', '-', $return);
		$return = str_replace("'", '-', $return);
		$return = str_replace('-------', '-', $return);
		$return = str_replace('------', '-', $return);
		$return = str_replace('-----', '-', $return);
		$return = str_replace('----', '-', $return);
		$return = str_replace('---', '-', $return);
		$return = str_replace('--', '-', $return);
		$return = preg_replace('/[^A-Za-z0-9\-]/', '', $return);
		return strtolower($return);
	}
}


function replace_spec_char($subject)
{
	$char_map = array(
		"ъ" => "-", "ь" => "-", "Ъ" => "-", "Ь" => "-",
		"А" => "A", "Ă" => "A", "Ǎ" => "A", "Ą" => "A", "À" => "A", "Ã" => "A", "Á" => "A", "Æ" => "A", "Â" => "A", "Å" => "A", "Ǻ" => "A", "Ā" => "A", "א" => "A",
		"Б" => "B", "ב" => "B", "Þ" => "B",
		"Ĉ" => "C", "Ć" => "C", "Ç" => "C", "Ц" => "C", "צ" => "C", "Ċ" => "C", "Č" => "C", "©" => "C", "ץ" => "C",
		"Д" => "D", "Ď" => "D", "Đ" => "D", "ד" => "D", "Ð" => "D",
		"È" => "E", "Ę" => "E", "É" => "E", "Ë" => "E", "Ê" => "E", "Е" => "E", "Ē" => "E", "Ė" => "E", "Ě" => "E", "Ĕ" => "E", "Є" => "E", "Ə" => "E", "ע" => "E",
		"Ф" => "F", "Ƒ" => "F",
		"Ğ" => "G", "Ġ" => "G", "Ģ" => "G", "Ĝ" => "G", "Г" => "G", "ג" => "G", "Ґ" => "G",
		"ח" => "H", "Ħ" => "H", "Х" => "H", "Ĥ" => "H", "ה" => "H",
		"I" => "I", "Ï" => "I", "Î" => "I", "Í" => "I", "Ì" => "I", "Į" => "I", "Ĭ" => "I", "I" => "I", "И" => "I", "Ĩ" => "I", "Ǐ" => "I", "י" => "I", "Ї" => "I", "Ī" => "I", "І" => "I",
		"Й" => "J", "Ĵ" => "J",
		"ĸ" => "K", "כ" => "K", "Ķ" => "K", "К" => "K", "ך" => "K",
		"Ł" => "L", "Ŀ" => "L", "Л" => "L", "Ļ" => "L", "Ĺ" => "L", "Ľ" => "L", "ל" => "L",
		"מ" => "M", "М" => "M", "ם" => "M",
		"Ñ" => "N", "Ń" => "N", "Н" => "N", "Ņ" => "N", "ן" => "N", "Ŋ" => "N", "נ" => "N", "ŉ" => "N", "Ň" => "N",
		"Ø" => "O", "Ó" => "O", "Ò" => "O", "Ô" => "O", "Õ" => "O", "О" => "O", "Ő" => "O", "Ŏ" => "O", "Ō" => "O", "Ǿ" => "O", "Ǒ" => "O", "Ơ" => "O",
		"פ" => "P", "ף" => "P", "П" => "P",
		"ק" => "Q",
		"Ŕ" => "R", "Ř" => "R", "Ŗ" => "R", "ר" => "R", "Р" => "R", "®" => "R",
		"Ş" => "S", "Ś" => "S", "Ș" => "S", "Š" => "S", "С" => "S", "Ŝ" => "S", "ס" => "S",
		"Т" => "T", "Ț" => "T", "ט" => "T", "Ŧ" => "T", "ת" => "T", "Ť" => "T", "Ţ" => "T",
		"Ù" => "U", "Û" => "U", "Ú" => "U", "Ū" => "U", "У" => "U", "Ũ" => "U", "Ư" => "U", "Ǔ" => "U", "Ų" => "U", "Ŭ" => "U", "Ů" => "U", "Ű" => "U", "Ǖ" => "U", "Ǜ" => "U", "Ǚ" => "U", "Ǘ" => "U",
		"В" => "V", "ו" => "V",
		"Ý" => "Y", "Ы" => "Y", "Ŷ" => "Y", "Ÿ" => "Y",
		"Ź" => "Z", "Ž" => "Z", "Ż" => "Z", "З" => "Z", "ז" => "Z", "S" => "S",
		"а" => "a", "ă" => "a", "ǎ" => "a", "ą" => "a", "à" => "a", "ã" => "a", "á" => "a", "æ" => "a", "â" => "a", "å" => "a", "ǻ" => "a", "ā" => "a", "א" => "a",
		"б" => "b", "ב" => "b", "þ" => "b",
		"ĉ" => "c", "ć" => "c", "ç" => "c", "ц" => "c", "צ" => "c", "ċ" => "c", "č" => "c", "©" => "c", "ץ" => "c",
		"Ч" => "ch", "ч" => "ch",
		"д" => "d", "ď" => "d", "đ" => "d", "ד" => "d", "ð" => "d",
		"è" => "e", "ę" => "e", "é" => "e", "ë" => "e", "ê" => "e", "е" => "e", "ē" => "e", "ė" => "e", "ě" => "e", "ĕ" => "e", "є" => "e", "ə" => "e", "ע" => "e",
		"ф" => "f", "ƒ" => "f",
		"ğ" => "g", "ġ" => "g", "ģ" => "g", "ĝ" => "g", "г" => "g", "ג" => "g", "ґ" => "g",
		"ח" => "h", "ħ" => "h", "х" => "h", "ĥ" => "h", "ה" => "h",
		"i" => "i", "ï" => "i", "î" => "i", "í" => "i", "ì" => "i", "į" => "i", "ĭ" => "i", "ı" => "i", "и" => "i", "ĩ" => "i", "ǐ" => "i", "י" => "i", "ї" => "i", "ī" => "i", "і" => "i",
		"й" => "j", "Й" => "j", "Ĵ" => "j", "ĵ" => "j",
		"ĸ" => "k", "כ" => "k", "ķ" => "k", "к" => "k", "ך" => "k",
		"ł" => "l", "ŀ" => "l", "л" => "l", "ļ" => "l", "ĺ" => "l", "ľ" => "l", "ל" => "l",
		"מ" => "m", "м" => "m", "ם" => "m",
		"ñ" => "n", "ń" => "n", "н" => "n", "ņ" => "n", "ן" => "n", "ŋ" => "n", "נ" => "n", "ŉ" => "n", "ň" => "n",
		"ø" => "o", "ó" => "o", "ò" => "o", "ô" => "o", "õ" => "o", "о" => "o", "ő" => "o", "ŏ" => "o", "ō" => "o", "ǿ" => "o", "ǒ" => "o", "ơ" => "o",
		"פ" => "p", "ף" => "p", "п" => "p",
		"ק" => "q",
		"ŕ" => "r", "ř" => "r", "ŗ" => "r", "ר" => "r", "р" => "r", "®" => "r",
		"ş" => "s", "ś" => "s", "ș" => "s", "š" => "s", "с" => "s", "ŝ" => "s", "ס" => "s",
		"т" => "t", "ț" => "t", "ט" => "t", "ŧ" => "t", "ת" => "t", "ť" => "t", "ţ" => "t",
		"ù" => "u", "û" => "u", "ú" => "u", "ū" => "u", "у" => "u", "ũ" => "u", "ư" => "u", "ǔ" => "u", "ų" => "u", "ŭ" => "u", "ů" => "u", "ű" => "u", "ǖ" => "u", "ǜ" => "u", "ǚ" => "u", "ǘ" => "u",
		"в" => "v", "ו" => "v",
		"ý" => "y", "ы" => "y", "ŷ" => "y", "ÿ" => "y",
		"ź" => "z", "ž" => "z", "ż" => "z", "з" => "z", "ז" => "z", "ſ" => "z",
		"™" => "tm",
		"@" => "at",
		"Ä" => "ae", "Ǽ" => "ae", "ä" => "ae", "æ" => "ae", "ǽ" => "ae",
		"ĳ" => "ij", "Ĳ" => "ij",
		"я" => "ja", "Я" => "ja",
		"Э" => "je", "э" => "je",
		"ё" => "jo", "Ё" => "jo",
		"ю" => "ju", "Ю" => "ju",
		"œ" => "oe", "Œ" => "oe", "ö" => "oe", "Ö" => "oe",
		"щ" => "sch", "Щ" => "sch",
		"ш" => "sh", "Ш" => "sh",
		"ß" => "ss",
		"Ü" => "ue",
		"Ж" => "zh", "ж" => "zh",
	);
	return strtr($subject, $char_map);
}

?>