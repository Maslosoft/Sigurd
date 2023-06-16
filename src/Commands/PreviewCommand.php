<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Maslosoft\Sigurd\Commands;

use Maslosoft\Addendum\Interfaces\AnnotatedInterface;
use Maslosoft\Sitcom\Command as Command2;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * BuildCommand
 *
 * @author Piotr Maselkowski <pmaselkowski at gmail.com>
 */
class PreviewCommand extends Command implements AnnotatedInterface
{

	protected function configure(): void
	{
		$this->setName("preview");
		$this->setDescription("List builders");
		$this->setDefinition([
		]);

		$help = <<<EOT
The <info>preview</info> command will broadcast build signal to all builders and list them.
EOT;
		$this->setHelp($help);
	}

	protected function execute(InputInterface $input, OutputInterface $output): int
	{
		return 1;
	}

	/**
	 * @SlotFor(Maslosoft\Sitcom\Command)
	 * @param Command2 $signal
	 */
	public function reactOn(Command2 $signal): void
	{
		$signal->add($this, 'sigurd');
	}

}
