<?php

namespace QazaqGenius;

class Transliterator
{
    const MOST_CURRENT = self::OFFICIAL_LATIN_2021_04;

    const OFFICIAL_LATIN_2021_01 = [
        // exceptions
        'Ё' => 'Ö',     'ё' => 'ö',
        'З' => 'Z',	    'з' => 'z',
        'Ц' => 'S',	    'ц' => 's',
        'сц' => 'S',	'цц' => 's',
        'Ч' => 'Ş',     'ч' => 'ş',
        'Щ' => 'Ş',	    'щ' => 'ş',
        'Ъ' => '',		'ъ' => '',
        'Ь' => '',		'ь' => '',
        'Э' => 'E',	    'э' => 'e',
        'Ю' => 'Ü',	    'ю' => 'ü',
        'Я' => 'Ä', 	'я' => 'ä',     'ия' => 'ia',
        'Дж' => 'J', 	'дж' => 'j',

        //alphabet
        'А' => 'A',  	'а' => 'a',
        'Ә' => 'Ä',	    'ә' => 'ä',
        'Б' => 'B',	    'б' => 'b',
        'Д' => 'D',	    'д' => 'd',
        'Е' => 'E',	    'е' => 'e',
        'Ф' => 'F',	    'ф' => 'f',
        'Г' => 'G',	    'г' => 'g',
        'Ғ' => 'Ğ',	    'ғ' => 'ğ',
        'Х' => 'H',	    'х' => 'h',
        'Һ' => 'H',	    'һ' => 'h',
        'І' => 'I',	    'і' => 'ı',
        'И' => 'İ',	    'и' => 'i',
        'Й' => 'İ',	    'й' => 'i',
        'Ж' => 'J',	    'ж' => 'j',
        'К' => 'K',	    'к' => 'k',
        'Л' => 'L',	    'л' => 'l',
        'М' => 'M',	    'м' => 'm',
        'Н' => 'N',	    'н' => 'n',
        'Ң' => 'Ŋ',	    'ң' => 'ŋ',
        'О' => 'O',	    'о' => 'o',
        'Ө' => 'Ö',	    'ө' => 'ö',
        'П' => 'P',	    'п' => 'p',
        'Қ' => 'Q',	    'қ' => 'q',
        'Р' => 'R',	    'р' => 'r',
        'С' => 'S',	    'с' => 's',
        'Ш' => 'Ş',	    'ш' => 'ş',
        'Т' => 'T',	    'т' => 't',
        'У' => 'U',	    'у' => 'u',
        'Ұ' => 'Ū',	    'ұ' => 'ū',
        'Ү' => 'Ü',	    'ү' => 'ü',
        'В' => 'V',	    'в' => 'v',
        'Ы' => 'Y',	    'ы' => 'y',
    ];

    const OFFICIAL_LATIN_2021_04 = [
        // exceptions
        'Ё' => 'Ö',     'ё' => 'ö',
        'З' => 'Z',	    'з' => 'z',
        'Ц' => 'S',	    'ц' => 's',
        'сц' => 'S',	'цц' => 's',
        'Ч' => 'Ş',     'ч' => 'ş',
        'Щ' => 'Ş',	    'щ' => 'ş',
        'Ъ' => '',		'ъ' => '',
        'Ь' => '',		'ь' => '',
        'Э' => 'E',	    'э' => 'e',
        'Ю' => 'Ü',	    'ю' => 'ü',
        'Я' => 'Ä', 	'я' => 'ä',     'ия' => 'ia',
        'Дж' => 'J', 	'дж' => 'j',

        //alphabet
        'А' => 'A',  	'а' => 'a',
        'Ә' => 'Ä',	    'ә' => 'ä',
        'Б' => 'B',	    'б' => 'b',
        'Д' => 'D',	    'д' => 'd',
        'Е' => 'E',	    'е' => 'e',
        'Ф' => 'F',	    'ф' => 'f',
        'Г' => 'G',	    'г' => 'g',
        'Ғ' => 'Ğ',	    'ғ' => 'ğ',
        'Х' => 'H',	    'х' => 'h',
        'Һ' => 'H',	    'һ' => 'h',
        'І' => 'I',	    'і' => 'ı',
        'И' => 'İ',	    'и' => 'i',
        'Й' => 'İ',	    'й' => 'i',
        'Ж' => 'J',	    'ж' => 'j',
        'К' => 'K',	    'к' => 'k',
        'Л' => 'L',	    'л' => 'l',
        'М' => 'M',	    'м' => 'm',
        'Н' => 'N',	    'н' => 'n',
        'Ң' => 'Ñ',	    'ң' => 'ñ',
        'О' => 'O',	    'о' => 'o',
        'Ө' => 'Ö',	    'ө' => 'ö',
        'П' => 'P',	    'п' => 'p',
        'Қ' => 'Q',	    'қ' => 'q',
        'Р' => 'R',	    'р' => 'r',
        'С' => 'S',	    'с' => 's',
        'Ш' => 'Ş',	    'ш' => 'ş',
        'Т' => 'T',	    'т' => 't',
        'У' => 'U',	    'у' => 'u',
        'Ұ' => 'Ū',	    'ұ' => 'ū',
        'Ү' => 'Ü',	    'ү' => 'ü',
        'В' => 'V',	    'в' => 'v',
        'Ы' => 'Y',	    'ы' => 'y',
    ];

/*
    const QAZAQ_GRAMMAR_2023 = [
        // exceptions
        'Ё' => 'Ö',     'ё' => 'ö',
        'Ц' => 'S',	    'ц' => 's',
        'сц' => 'S',	'цц' => 's',
        'Ч' => 'Ş',     'ч' => 'ş',
        'Щ' => 'Ş',	    'щ' => 'ş',
        'Ъ' => '',		'ъ' => '',
        'Ь' => '',		'ь' => '',
        'Э' => 'E',	    'э' => 'e',
        'Ю' => 'Ü',	    'ю' => 'ü',
        'Я' => 'Ä', 	'я' => 'ä',     'ия' => 'ia',
        'Дж' => 'J', 	'дж' => 'j',

        //alphabet
        'А' => 'A',  	'а' => 'a',
        'Ә' => 'Ä',	    'ә' => 'ä',
        'Б' => 'B',	    'б' => 'b',
        'Ш' => 'C',	    'ш' => 'c',
        'Д' => 'D',	    'д' => 'd',
        'Е' => 'E',	    'е' => 'e',
        'Ф' => 'F',	    'ф' => 'f',
        'Г' => 'G',	    'г' => 'g',
        'Ғ' => 'Ğ',	    'ғ' => 'ğ',
        'Х' => 'H',	    'х' => 'h',
        'Һ' => 'H',	    'һ' => 'h',
        'Ы' => 'І',	    'ы' => 'ı',
        'І' => 'İ',	    'і' => 'і',
        'Ж' => 'J',	    'ж' => 'j',
        'К' => 'K',	    'к' => 'k',
        'Л' => 'L',	    'л' => 'l',
        'М' => 'M',	    'м' => 'm',
        'Н' => 'N',	    'н' => 'n',
        'Ң' => 'Ñ',	    'ң' => 'ñ',
        'О' => 'O',	    'о' => 'o',
        'Ө' => 'Ö',	    'ө' => 'ö',
        'П' => 'P',	    'п' => 'p',
        'Қ' => 'Q',	    'қ' => 'q',
        'Р' => 'R',	    'р' => 'r',
        'С' => 'S',	    'с' => 's',
        'Т' => 'T',	    'т' => 't',
        'Ұ' => 'U',	    'ұ' => 'u',
        'Ү' => 'Ü',	    'ү' => 'ü',
        'В' => 'V',	    'в' => 'v',
        'У' => 'W',	    'у' => 'w', //!!!!!!!!!!!!!!!!!!!!!!!!
        'Й' => 'Y',	    'й' => 'y',
        'З' => 'Z',	    'з' => 'z',
        'И' => 'Y',	    'и' => 'y',

     // 'Ң' => 'Ŋ',	    'ң' => 'ŋ',

    ];
*/

    /**
     * @param string $cyrillicQazaq
     * @param string $mode
     * @return string
     */
    public static function toLatin($cyrillicQazaq, $mode = self::MOST_CURRENT)
    {
        return strtr($cyrillicQazaq, $mode);
    }
}