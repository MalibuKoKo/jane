<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Joli\Jane\Tests\Expected\Schema1\Normalizer;

class NormalizerFactory
{
    public static function create()
    {
        $normalizers = [];
        $normalizers[] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
        $normalizers[] = new TestNormalizer();

        return $normalizers;
    }
}
