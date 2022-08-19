<?php

declare(strict_types=1);

namespace ReactWeb\HTML\Attribute;

use ReactWeb\HTML\Attribute;

/**
 * Style
 *
 * @package ReactWeb\HTML\Attribute
 * @author Philipp Lohmann <lohmann.philipp@gmx.net>
 */
final class Style extends ArrayValueAttribute
{
    public function __construct(array $values)
    {
        parent::__construct('style', $values, ';');
    }
}