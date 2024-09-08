<?php

namespace App\Doctrine\Types;

use App\Enum\Gender;
use Doctrine\DBAL\Types\Type;
use Doctrine\DBAL\Platforms\AbstractPlatform;

class GenderType extends Type
{
    const GENDER = 'gender'; // Название типа

    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform): string
    {
        return "VARCHAR(25)";
    }

    public function convertToPHPValue($value, AbstractPlatform $platform): ?Gender
    {
        if ($value === null) {
            return null;
        }
        return Gender::from($value);
    }

    public function convertToDatabaseValue($value, AbstractPlatform $platform): ?string
    {
        return $value?->value;
    }

    public function getName(): string
    {
        return self::GENDER;
    }
}
