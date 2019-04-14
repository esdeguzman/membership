<?php

namespace App\Traits;

use Carbon\Carbon;

trait CheckableState
{
	public function isAlreadyIdle()
	{
		if (! is_null($this->visited_at) and Carbon::parse(auth()
				->user()->visited_at)->lte(now()->subMinutes(5))) {
			return true;
		}
	}
}