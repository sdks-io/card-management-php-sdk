<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellCardManagementAPIsLib\Models\CardDetailsResponseNonFuelSetsItems;

/**
 * Builder for model CardDetailsResponseNonFuelSetsItems
 *
 * @see CardDetailsResponseNonFuelSetsItems
 */
class CardDetailsResponseNonFuelSetsItemsBuilder
{
    /**
     * @var CardDetailsResponseNonFuelSetsItems
     */
    private $instance;

    private function __construct(CardDetailsResponseNonFuelSetsItems $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new card details response non fuel sets items Builder object.
     */
    public static function init(int $productRestrictionId, string $description): self
    {
        return new self(new CardDetailsResponseNonFuelSetsItems($productRestrictionId, $description));
    }

    /**
     * Initializes a new card details response non fuel sets items object.
     */
    public function build(): CardDetailsResponseNonFuelSetsItems
    {
        return CoreHelper::clone($this->instance);
    }
}
