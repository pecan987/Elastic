<?php declare(strict_types = 1);

namespace Spameri\Elastic\Commands;


class Migrate extends \Symfony\Component\Console\Command\Command
{
	protected static $defaultName = 'spameri:elastic:migrate';

	/**
	 * @example spameri:elastic:load-dump
	 */
	protected function configure() : void
	{
		$this
			->setName(self::$defaultName)
			->setDescription('Runs migrations from files.')
			->addArgument('filename', \Symfony\Component\Console\Input\InputArgument::OPTIONAL)
		;
	}


	protected function execute(
		\Symfony\Component\Console\Input\InputInterface $input
		, \Symfony\Component\Console\Output\OutputInterface $output
	)
	{
		$output->writeln('Starting');

		// 1. Get folder
		// 2. Iterate folder
		// 3. Run each file in folder
		// 3a. Check if file was executed - skip
		// 3b. Check if file was changed - skip and report
		// 4. Save executed files to ES
		// 5. Done

	}
}
