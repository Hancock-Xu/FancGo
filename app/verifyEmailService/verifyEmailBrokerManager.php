<?php
/**
 * Created by PhpStorm.
 * User: Xuhanyu
 * Date: 7/1/16
 * Time: 16:56
 */

namespace verifyEmailService;

use Illuminate\Support\Str;
use InvalidArgumentException;
use verifyEmailService\verifyEmailTokenRepository;
use verifyEmailService\verifyEmailBrokerFactory as FactoryContract;


class verifyEmailBrokerManager implements FactoryContract
{
	/**
	 * the application instance
	 */
	protected $app;

	/**
	 * @var array of create 'drivers'
	 */
	protected $brokers = [];

	public function __construct($app)
	{
		$this->app = $app;
	}

	public function broker($name = null)
	{
		$name = $name?:$this->getDefaultDriver();

		return isset($this->brokers[$name]) ? $this->brokers[$name] : $this->resolve($name);

	}


	/**
	 * Create broker
	 */
	public function resolve($name = null)
	{
		$config = $this->getConfig($name);

		if (is_null($config)) {
			throw new InvalidArgumentException("Business email verifier [{$name}] is not defined.");
		}
		
		return new verifyEmailBroker(
			$this->createVerifyEmailTokenRepository($config),
			$this->app['auth']->createUserProvider($config['provider']),
			$this->app['mailer'],
			$config['email']
		);
	} 

	public function createVerifyEmailTokenRepository(array $config)
	{
		$key = $this->app['config']['app.key'];

		if (Str::startsWith($key, 'base64:')) {
			$key = base64_decode(substr($key, 7));
		}

		$connection = isset($config['connection']) ? $config['connection'] : null;

		return new verifyEmailTokenRepository(
			$this->app['db']->connection($connection),
			$config['table'],
			$key,
			$config['expire']
		);

	}

	/**
	 * Return default driver for verify_email
	 *
	 * @return mixed
	 */
	public  function getDefaultDriver()
	{
		return $this->app['config']['auth.defaults.verifyEmail'];
	}

	/**
	 * Return the config for drive named $name
	 *
	 * @param $name
	 * @return mixed
	 */
	public function getConfig($name)
	{
		return $this->app['config']["auth.{$name}"];
	}


}