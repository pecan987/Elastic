<?php declare(strict_types = 1);

namespace SpameriTests\Data\Entity\Video\Story;


class Synopsis implements \Spameri\Elastic\Entity\IValue
{

	/**
	 * @var ?string
	 */
	private $value;


	public function __construct(
		?string $value
	)
	{
		$this->value = $value;
	}


	public function value() : ?string
	{
		return $this->value;
	}
}
