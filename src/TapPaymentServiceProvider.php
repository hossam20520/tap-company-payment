<?php

namespace Coopxl\TapPayment;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Facade;

class TapPaymentServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap TapPayment application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->publishes(
			[
				__DIR__ . '/Publishing/config.php' => config_path( 'tap-payment.php' ),
			]
		);
		$this->mergeConfigFrom(
			__DIR__ . '/Publishing/config.php',
			'tap-payment'
		);


		Facade::alias('TapPayment', \Coopxl\TapPayment\Facade\TapPayment::class);
	}


	/**
	 * Register TapPayment application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->singleton(
			'tap-payment', function() {
			return new TapService();
		}
		);
	}
}