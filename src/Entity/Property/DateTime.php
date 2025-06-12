<?php declare(strict_types = 1);

namespace Spameri\Elastic\Entity\Property;


class DateTime extends \Nette\Utils\DateTime implements \Spameri\Elastic\Entity\DateTimeInterface
{

	public const FORMAT = 'Y-m-d\TH:i:s';
	public const INDEX_FORMAT = 'Y-m-d_H-i-s';


	#[\ReturnTypeWillChange]
	public function format($format = NULL): string
	{
		if ( ! $format) {
			$format = self::FORMAT;
		}

		return parent::format($format);
	}

}
