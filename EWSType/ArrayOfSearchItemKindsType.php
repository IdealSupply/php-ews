<?php
/**
 * Contains EWSType_ArrayOfSearchItemKindsType.
 */

/**
 * Represents an array of messages to search.
 *
 * @package php-ews\Type
 */
class EWSType_ArrayOfSearchItemKindsType extends EWSType
{
    /**
     * Indicates an item type to be searched.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Enumeration\SearchItemKindType
     */
    public $SearchItemKind;
}
