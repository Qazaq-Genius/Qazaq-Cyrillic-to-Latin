<?php

use PHPUnit\Framework\TestCase;

use QazaqGenius\Transliterator as Qazaq;
class TransliteratorTest extends TestCase
{
    const STRING_CYRILLIC_1 = 'Барлық адамдар тумысынан азат және қадір-қасиеті мен '.
                              'құқықтары тең болып дүниеге келеді. Адамдарға ақыл-парасат, '.
                              'ар-ождан берілген, сондықтан олар бір-бірімен туыстық, '.
                              'бауырмалдық қарым-қатынас жасаулары тиіс.';
    const STRING_OFFICIAL_LATIN_2021_01_WIKI_1 = "Barlyq adamdar tumysynan azat jäne qadır-qasietı men " .
                                                "qūqyqtary teŋ bolyp düniege keledı. Adamdarğa aqyl-parasat, " .
                                                "ar-ojdan berılgen, sondyqtan olar bır-bırımen tuystyq, " .
                                                "bauyrmaldyq qarym-qatynas jasaulary tiıs.";

    const STRING_OFFICIAL_LATIN_2021_04_WIKI_1 = 'Barlyq adamdar tumysynan azat jäne qadır-qasietı men ' .
                                                'qūqyqtary teñ bolyp düniege keledı. Adamdarğa aqyl-parasat, '.
                                                'ar-ojdan berılgen, sondyqtan olar bır-bırımen tuystyq, '.
                                                'bauyrmaldyq qarym-qatynas jasaulary tiıs.';

    const ANTHEM_CYRILLIC_PT1 = "Алтын күн аспаны,".
                                "Алтын дән даласы,".
                                "Ерліктің дастаны –".
                                "Еліме қарашы!".
                                "Ежелден ер деген,".
                                "Даңқымыз шықты ғой,".
                                "Намысын бермеген,".
                                "Қазағым мықты ғой!";
    const ANTHEM_OFFICIAL_LATIN_2021_PT1 =  "Altyn kün aspany,".
                                            "Altyn dän dalasy,".
                                            "Erlıktıñ dastany –".
                                            "Elıme qaraşy!".
                                            "Ejelden er degen,".
                                            "Dañqymyz şyqty ğoi,".
                                            "Namysyn bermegen,".
                                            "Qazağym myqty ğoi!";

    const ANTHEM_CYRILLIC_PT2 = "Менің елім, менің елім," .
                                "Гүлің болып егілемін," .
                                "Жырың болып төгілемін, елім!" .
                                "Туған жерім менің — Қазақстаным!";
    const ANTHEM_OFFICIAL_LATIN_2021_PT2 =  "Menıñ elım, menıñ elım," .
                                            "Gülıñ bolyp egılemın," .
                                            "Jyryñ bolyp tögılemın, elım!" .
                                            "Tuğan jerım menıñ — Qazaqstanym!";

    const ANTHEM_CYRILLIC_PT3 = "Ұрпаққа жол ашқан," .
                                "Кең байтақ жерім бар." .
                                "Бірлігі жарасқан," .
                                "Тәуелсіз елім бар." .
                                "Қарсы алған уақытты," .
                                "Мәңгілік досындай." .
                                "Біздің ел бақытты," .
                                "Біздің ел осындай!" ;
    const ANTHEM_OFFICIAL_LATIN_2021_PT3 =  "Ūrpaqqa jol aşqan," .
                                            "Keñ baitaq jerım bar." .
                                            "Bırlıgı jarasqan," .
                                            "Täuelsız elım bar." .
                                            "Qarsy alğan uaqytty," .
                                            "Mäñgılık dosyndai." .
                                            "Bızdıñ el baqytty," .
                                            "Bızdıñ el osyndai!";

    /**
     * @dataProvider data
     */
    public function testTransliterate($latinExpected, $cyrillic, $mode)
    {
        $actualLatin = Qazaq::toLatin($cyrillic, $mode);

        $this->assertEquals($latinExpected, $actualLatin);
    }

    public function data()
    {
        return [
            [self::STRING_OFFICIAL_LATIN_2021_01_WIKI_1,   self::STRING_CYRILLIC_1, Qazaq::OFFICIAL_LATIN_2021_01],

            [self::STRING_OFFICIAL_LATIN_2021_04_WIKI_1,   self::STRING_CYRILLIC_1, Qazaq::OFFICIAL_LATIN_2021_04],
            [self::ANTHEM_OFFICIAL_LATIN_2021_PT1,     self::ANTHEM_CYRILLIC_PT1,   Qazaq::OFFICIAL_LATIN_2021_04],
            [self::ANTHEM_OFFICIAL_LATIN_2021_PT2,     self::ANTHEM_CYRILLIC_PT2,   Qazaq::OFFICIAL_LATIN_2021_04],
            [self::ANTHEM_OFFICIAL_LATIN_2021_PT3,     self::ANTHEM_CYRILLIC_PT3,   Qazaq::OFFICIAL_LATIN_2021_04],
        ];
    }
}