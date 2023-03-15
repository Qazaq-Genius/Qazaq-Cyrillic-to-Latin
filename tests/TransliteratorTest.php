<?php

use PHPUnit\Framework\TestCase;

use QazaqGenius\Transliterator as Qazaq;
class TransliteratorTest extends TestCase
{
    const STRING_CYRILLIC_1 = 'Барлық адамдар тумысынан азат және қадір-қасиеті мен құқықтары тең болып дүниеге келеді. Адамдарға ақыл-парасат, ар-ождан берілген, сондықтан олар бір-бірімен туыстық, бауырмалдық қарым-қатынас жасаулары тиіс.';
    const STRING_OFFICIAL_LATIN_2021_WIKI_1 = 'Barlyq adamdar tumysynan azat jäne qadır-qasietı men qūqyqtary teñ bolyp düniege keledı. Adamdarğa aqyl-parasat, ar-ojdan berılgen, sondyqtan olar bır-bırımen tuystyq, bauyrmaldyq qarym-qatynas jasaulary tiıs.';
    const ANTHEM_CYRILLIC = "Алтын күн аспаны,".
                            "Алтын дән даласы,".
                            "Ерліктің дастаны –".
                            "Еліме қарашы!".
                            "Ежелден ер деген,".
                            "Даңқымыз шықты ғой,".
                            "Намысын бермеген,".
                            "Қазағым мықты ғой!";
    const ANTHEM_OFFICIAL_LATIN_2021_WIKI = "Altyn kün aspany,".
                            "Altyn dän dalasy,".
                            "Erlıktıñ dastany –".
                            "Elıme qaraşy!".
                            "Ejelden er degen,".
                            "Dañqymyz şyqty ğoi,".
                            "Namysyn bermegen,".
                            "Qazağym myqty ğoi!";

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
            [self::STRING_OFFICIAL_LATIN_2021_WIKI_1, self::STRING_CYRILLIC_1 , Qazaq::OFFICIAL_LATIN_2021],
            [self::ANTHEM_OFFICIAL_LATIN_2021_WIKI, self::ANTHEM_CYRILLIC, Qazaq::OFFICIAL_LATIN_2021],
        ];
    }
}