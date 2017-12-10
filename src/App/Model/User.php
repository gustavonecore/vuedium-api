<?php

namespace Leftaro\App\Model;

use Leftaro\App\Model\Base\User as BaseUser;

/**
 * Skeleton subclass for representing a row from the 'user' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class User extends BaseUser
{
	/**
	 * Map the data to the proper form
	 *
	 * @return array
	 */
	public function map() : array
	{
		return [
			'id' => $this->getId(),
			'fidrt_name' => $this->getFirstName(),
			'last_name' => $this->getLastName(),
			'email' => $this->getEmail(),
			'created_dt' => $this->getCreatedDt(),
		];
	}
}