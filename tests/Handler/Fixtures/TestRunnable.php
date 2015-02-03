<?php

/*
 * This file is part of the webmozart/console package.
 *
 * (c) Bernhard Schussek <bschussek@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Webmozart\Console\Tests\Handler\Fixtures;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Webmozart\Console\Api\Runnable;

/**
 * @since  1.0
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class TestRunnable implements Runnable
{
    public function run(InputInterface $input, OutputInterface $output, OutputInterface $errorOutput)
    {
        $output->write((string) $input);
        $errorOutput->write((string) $input);
    }
}
