<?php declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

define('TEMP_DIR', __DIR__ . '/../temp');

$configurator = \Price2Performance\Sandbox\Bootstrap::boot();
$container = $configurator->createContainer();
$application = $container->getByType(Nette\Application\Application::class);
$application->run();
