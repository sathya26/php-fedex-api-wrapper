<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * CM = centimeters, IN = inches
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class LinearUnits extends AbstractSimpleType
{
    const _CM = 'CM';
    const _IN = 'IN';
}
