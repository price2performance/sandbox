<?php declare(strict_types=1);

namespace Price2Performance\Sandbox\Tests\Unit;

$container = require __DIR__ . '/../bootstrap.php';

use Doctrine\ORM\EntityManagerInterface;
use Price2Performance\Sandbox\Tests\ORMTestCase;
use Tester\Assert;

class TestingORMTest extends ORMTestCase
{
	public function testGetEntityManager()
	{
		Assert::type(EntityManagerInterface::class, $this->createEntityManager());
	}
}

(new TestingORMTest())->run();