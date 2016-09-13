<?php
/**
 * Created by PhpStorm.
 * User: Xuhanyu
 * Date: 7/1/16
 * Time: 16:56
 */

namespace App\VerifyEmailService;

use Illuminate\Support\Str;
use InvalidArgumentException;
use App\VerifyEmailService\VerifyBrokerFactory as FactoryContract;

class VerifyBrokerManager implements FactoryContract
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
		
		return new VerifyBroker(
			$this->createVerifyEmailTokenRepository($config),
			$this->app['auth']->createUserProvider($config['provider']),
			$this->app['mailer'],
			$config['replayJobApplyInterestedBaseURL'],
			$config['replayJobApplyNotInterestedBaseURL'],
			$config['baseURL'],
			$config['email'],
			$config['apply_job_email_view'],
			$config['promote_to_company_email_view'],
			$config['promote_to_user_email_view'],
			$config['interested_In_Applicant_View'],
			$config['not_interested_In_Applicant_View']
		);
	} 

	public function createVerifyEmailTokenRepository(array $config)
	{
		$key = $this->app['config']['app.key'];

		if (Str::startsWith($key, 'base64:')) {
			$key = base64_decode(substr($key, 7));
		}

		$connection = isset($config['connection']) ? $config['connection'] : null;

		return new TokenRepository(
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
		return $this->app['config']['auth.defaults.verify_email'];
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