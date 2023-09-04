<?php declare(strict_types=1);

namespace Price2Performance\Sandbox\Model\Security;

enum Role: string
{
	case GUEST = 'guest';
	case REGISTERED = 'registered';
	case EMPLOYEE = 'employee';
	case ADMINISTRATOR = 'administrator';
}