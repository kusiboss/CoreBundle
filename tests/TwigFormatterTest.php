<?php

declare(strict_types=1);

namespace araise\CoreBundle\Tests;

use araise\CoreBundle\Formatter\TwigFormatter;

class TwigFormatterTest extends AbstractFormatterTest
{
    public function testFormatter(): void
    {
        $formatter = $this->getFormatter(TwigFormatter::class);
        $formatter->processOptions([
            'template' => 'test.html.twig',
        ]);
        self::assertSame('<blockquote>hallo Welt</blockquote>', $formatter->getHtml('hallo Welt'));
    }
}
