<?php
/**
 * Contains EWSType_NonEmptyArrayOfGroupIdentifiersType.
 */

/**
 * Represents a collection of Active Directory directory service group object
 * security identifiers.
 *
 * @package php-ews\Type
 */
class EWSType_NonEmptyArrayOfGroupIdentifiersType extends EWSType
{
    /**
     * Represents a single security identifier and attribute for an Active
     * Directory object group of which the account is a member.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\SidAndAttributesType
     */
    public $GroupIdentifier;
}
