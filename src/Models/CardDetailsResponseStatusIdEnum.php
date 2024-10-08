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
 * Possible Id’s and description:
 * * 1  Active
 * * 7  Blocked Card
 * * 8  Expired
 * * 9  Cancelled
 * * 10  New
 * * 23  Pending Renewal
 * * 31  Replaced
 * * 41  Temporary Block (Customer)
 * * 42  Temporary Block (Shell)
 * * 43  Fraud
 * * 101 Active (Block in progress) *
 * * 102 Blocked Card (Unblock in progress) *
 * * 103 Active (Cancel in progress) *
 * * 104 Active (Marked as damaged) *
 * * 105 New (Cancel as damaged) *
 * * 106 Active(Scheduled for block) ”#
 * * 107 Blocked Card(Scheduled for unblock)*#
 * * 108 Blocked Card (Cancel in progress) *
 * > Note:
 * •  Items marked with * are intermediate statuses  to indicate that there are pending requests in
 * progress. , The response can contain these intermediate statuses only if the
 * IncludeIntermediateStatus flag is true.
 * •  The placeholder “<Shell Card Platform Status>” in the items marked with # will be replaced with
 * the Shell Card Platform status description. E.g., “Active (Scheduled for block)”
 */
class CardDetailsResponseStatusIdEnum
{
    public const ENUM_1 = 1;

    public const ENUM_7 = 7;

    public const ENUM_8 = 8;

    public const ENUM_9 = 9;

    public const ENUM_10 = 10;

    public const ENUM_23 = 23;

    public const ENUM_31 = 31;

    public const ENUM_41 = 41;

    public const ENUM_42 = 42;

    public const ENUM_43 = 43;

    public const ENUM_101 = 101;

    public const ENUM_102 = 102;

    public const ENUM_103 = 103;

    public const ENUM_104 = 104;

    public const ENUM_105 = 105;

    public const ENUM_106 = 106;

    public const ENUM_107 = 107;

    public const ENUM_108 = 108;

    private const _ALL_VALUES = [
        self::ENUM_1,
        self::ENUM_7,
        self::ENUM_8,
        self::ENUM_9,
        self::ENUM_10,
        self::ENUM_23,
        self::ENUM_31,
        self::ENUM_41,
        self::ENUM_42,
        self::ENUM_43,
        self::ENUM_101,
        self::ENUM_102,
        self::ENUM_103,
        self::ENUM_104,
        self::ENUM_105,
        self::ENUM_106,
        self::ENUM_107,
        self::ENUM_108
    ];

    /**
     * Ensures that all the given values are present in this Enum.
     *
     * @param array|stdClass|null|int $value Value or a list/map of values to be checked
     *
     * @return array|null|int Input value(s), if all are a part of this Enum
     *
     * @throws Exception Throws exception if any given value is not in this Enum
     */
    public static function checkValue($value)
    {
        $value = json_decode(json_encode($value), true); // converts stdClass into array
        if (CoreHelper::checkValueOrValuesInList($value, self::_ALL_VALUES)) {
            return $value;
        }
        throw new Exception("$value is invalid for CardDetailsResponseStatusIdEnum.");
    }
}
