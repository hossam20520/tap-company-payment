<?php

namespace Coopxl\TapPayment\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * Class TapPayment
 *
 * @package VMdevelopment\TapPayment\Facade
 *
 * @method static \VMdevelopment\TapPayment\Services\Charge createCharge()
 * @method static \VMdevelopment\TapPayment\Resources\Invoice findCharge()
 */
class TapPayment extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'tap-payment';
	}
}