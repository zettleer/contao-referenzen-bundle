<?php

declare(strict_types=1);

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace Zettleer\ContaoReferenzenBundle\Tests;

use Zettleer\ContaoReferenzenBundle\ContaoReferenzenBundle;
use PHPUnit\Framework\TestCase;

class ContaoReferenzenBundleTest extends TestCase
{
    public function testCanBeInstantiated(): void
    {
        $bundle = new ContaoReferenzenBundle();

        $this->assertInstanceOf('Zettleer\ContaoReferenzenBundle\ContaoReferenzenBundle', $bundle);
    }
}
