<?php

declare(strict_types=1);

namespace Umbrellio\Postgres\Schema\Types;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\Type;

class DateRangeType extends Type
{
    public const TYPE_NAME = 'daterange';

    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform): string
    {
        return static::TYPE_NAME;
    }

    public function getName(): string
    {
        return self::TYPE_NAME;
    }
}
