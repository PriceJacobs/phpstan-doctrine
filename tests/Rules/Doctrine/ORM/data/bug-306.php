<?php // lint >= 8.0

namespace PHPStan\Rules\Doctrine\ORM\Bug306;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class MyBrokenEntity
{

	/**
	 * @ORM\Id()
	 * @ORM\GeneratedValue()
	 * @ORM\Column(type="integer")
	 * @var int|null
	 */
	private $id;

	public function __construct(
		/**
		 * @ORM\Column(type="string", nullable=true)
		 */
		private string $one,

		/**
		 * @ORM\Column(type="string", nullable=true)
		 */
		private ?string $two
	)
	{
	}
}
