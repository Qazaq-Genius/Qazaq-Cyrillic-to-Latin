# Qazaq Cyrillic to Latin

The official latin proposal from 2021 is implemented. 

## Quick Start

You can install the package using [Composer](https://getcomposer.org/). Simply require the version you need:

```sh
$ composer require gitonomy/gitlib
```

Or just add it to your `composer.json` by hand

```json
{
  "require": {
    "qazaq_genius/qazaq_cyrillic_to_latin": "dev-master"
  }
}
```

## Example Usage
```php
<?php

use QazaqGenius\Transliterator as Qazaq;

const ANTHEM_CYRILLIC = "Алтын күн аспаны,".
                        "Алтын дән даласы,".
                        "Ерліктің дастаны –".
                        "Еліме қарашы!".
                        "Ежелден ер деген,".
                        "Даңқымыз шықты ғой,".
                        "Намысын бермеген,".
                        "Қазағым мықты ғой!";

echo Qazaq::toLatin(ANTHEM_CYRILLIC);
/*  
    Output:

    Altyn kün aspany,
    Altyn dän dalasy,
    Erlıktıñ dastany –
    Elıme qaraşy!
    Ejelden er degen,
    Dañqymyz şyqty ğoi,
    Namysyn bermegen,
    Qazağym myqty ğoi!
*/
```

If you want to use the official proposed version of 2021 for example,
instead of the most current version, you can just use the according constant.

```php
Qazaq::toLatin("Алтын күн аспаны", Qazaq::OFFICIAL_LATIN_2021);
//Output: Altyn kün aspany
```
