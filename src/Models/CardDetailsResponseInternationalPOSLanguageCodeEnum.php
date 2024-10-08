<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models;

use Core\Utils\CoreHelper;
use Exception;
use stdClass;

/**
 * POS language code. Language code:
 * * `deu` - German
 * * `fra` - French
 * * `bul` - Bulgarian
 * * `hrv` - Croatian
 * * `ces` - Czech
 * * `dan` - Danish
 * * `fin` - Finnish
 * * `eng` - English
 * * `ell` - Greek
 * * `zho` - Chinese
 * * `hun` - Hungarian
 * * `ita` - Italian
 * * `ltz` - Luxembourgish
 * * `msa` - Malay
 * * `nld` - Dutch
 * * `nob` - Norwegian, Bokmal
 * * `urd` - Urdu
 * * `pol` - Polish
 * * `por` - Portuguese
 * * `ron` - Romanian
 * * `rus` - Russian
 * * `slk` - Slovak
 * * `slv` - Slovenian
 * * `spa` - Spanish
 * * `swe` - Swedish
 * * `tur` - Turkish
 * * `tha` - Thai
 * * `fil` - Filipino
 * * `est` - Estonian
 * * `lav` - Latvian
 * * `lit` - Lithuanian
 */
class CardDetailsResponseInternationalPOSLanguageCodeEnum
{
    public const DEU = 'deu';

    public const FRA = 'fra';

    public const BUL = 'bul';

    public const HRV = 'hrv';

    public const CES = 'ces';

    public const DAN = 'dan';

    public const FIN = 'fin';

    public const ENG = 'eng';

    public const ELL = 'ell';

    public const ZHO = 'zho';

    public const HUN = 'hun';

    public const ITA = 'ita';

    public const LTZ = 'ltz';

    public const MSA = 'msa';

    public const NLD = 'nld';

    public const NOB = 'nob';

    public const URD = 'urd';

    public const POL = 'pol';

    public const POR = 'por';

    public const RON = 'ron';

    public const RUS = 'rus';

    public const SLK = 'slk';

    public const SLV = 'slv';

    public const SPA = 'spa';

    public const SWE = 'swe';

    public const TUR = 'tur';

    public const THA = 'tha';

    public const FIL = 'fil';

    public const EST = 'est';

    public const LAV = 'lav';

    public const LIT = 'lit';

    private const _ALL_VALUES = [
        self::DEU,
        self::FRA,
        self::BUL,
        self::HRV,
        self::CES,
        self::DAN,
        self::FIN,
        self::ENG,
        self::ELL,
        self::ZHO,
        self::HUN,
        self::ITA,
        self::LTZ,
        self::MSA,
        self::NLD,
        self::NOB,
        self::URD,
        self::POL,
        self::POR,
        self::RON,
        self::RUS,
        self::SLK,
        self::SLV,
        self::SPA,
        self::SWE,
        self::TUR,
        self::THA,
        self::FIL,
        self::EST,
        self::LAV,
        self::LIT
    ];

    /**
     * Ensures that all the given values are present in this Enum.
     *
     * @param array|stdClass|null|string $value Value or a list/map of values to be checked
     *
     * @return array|null|string Input value(s), if all are a part of this Enum
     *
     * @throws Exception Throws exception if any given value is not in this Enum
     */
    public static function checkValue($value)
    {
        $value = json_decode(json_encode($value), true); // converts stdClass into array
        if (CoreHelper::checkValueOrValuesInList($value, self::_ALL_VALUES)) {
            return $value;
        }
        throw new Exception("$value is invalid for CardDetailsResponseInternationalPOSLanguageCodeEnum.");
    }
}
