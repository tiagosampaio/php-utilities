<?php

declare(strict_types = 1);

namespace TiagoSampaio\Formatter;

/**
 * Warning! This class formats the postcodes only to Brazilian format.
 *
 * Class Postcode
 */
class Postcode
{
    /**
     * @var int
     */
    const FIRST_GROUP_LENGTH = 5;

    /**
     * @var int
     */
    const MAX_LENGTH = 8;

    /**
     * @var array
     */
    private $regions = [
        0 => 'Grande São Paulo',
        1 => 'Interior de São Paulo',
        2 => 'Rio de Janeiro e Espírito Santo',
        3 => 'Minas Gerais',
        4 => 'Bahia e Sergipe',
        5 => 'Pernambuco, Alagoas, Paraíba e Rio Grande do Norte',
        6 => 'Ceará, Piauí, Maranhão, Pará, Amazonas, Acre, Amapá e Roraima',
        7 => 'Distrito Federal, Goiás, Tocantins, Mato Grosso, Mato Grosso do Sul e Rondônia',
        8 => 'Paraná e Santa Catarina',
        9 => 'Rio Grande do Sul',
    ];

    /**
     * @param string $postcode
     *
     * @return string
     */
    public static function format(string $postcode) : string
    {
        $postcode = str_split(self::normalize($postcode), self::FIRST_GROUP_LENGTH);
        $postcode = implode('-', $postcode);

        return (string) $postcode;
    }

    /**
     * @param string $postcode
     *
     * @return string
     */
    public static function normalize(string $postcode) : string
    {
        $postcode = OnlyNumbers::format($postcode);
        $postcode = StringSize::format($postcode, self::MAX_LENGTH, '0', STR_PAD_LEFT);
        $postcode = substr($postcode, -self::MAX_LENGTH, self::MAX_LENGTH);

        return (string) $postcode;
    }
}
