<?php

/**
 * SPDX-License-Identifier: MIT
 * Copyright (c) 2017-2018 Tobias Reich
 * Copyright (c) 2018-2025 LycheeOrg.
 */

namespace App\Legacy\V1\Contracts\Http\Requests;

use App\Models\User;

interface HasUser extends HasOptionalUser
{
	/**
	 * {@inheritDoc}
	 *
	 * @return User
	 */
	public function user2(): User;
}
