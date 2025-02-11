<?php

/*
 * This file is part of the Pho package.
 *
 * (c) Emre Sokullu <emre@phonetworks.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pho\Cli;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class ServeCommand extends Command
{

    protected $server, $kernel, $founder;

    protected function configure()
    {
        $this
            ->setName('serve')
            ->setDescription('Run RESTful HTTP server based on given Pho kernel');

    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        Utils::checkPhoDir($input, $output);
        
        $root = \getcwd();

        include($root . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "inc.php");
        include($root . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "kernel.php");
        
        $kernel = run($root);
        include($root . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "server.php");
        $server = \get_server($root, $kernel);
        $server->serve();
        exit(0);
    }
}