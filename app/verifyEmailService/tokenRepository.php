<?php
/**
 * Created by PhpStorm.
 * User: Xuhanyu
 * Date: 7/3/16
 * Time: 17:44
 */

namespace verifyEmailService;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\ConnectionInterface;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class tokenRepository
{
	protected $connection;

	protected $table;

	protected $hashKey;

	protected $expires;

	public function __construct(ConnectionInterface $connection, $table, $hashKey, $expires = 60)
	{
		$this->table = $table;
		$this->connection = $connection;
		$this->hashKey = $hashKey;
		$this->expires = $expires * 60;
	}

	public function create($email)
	{
		$this->deleteExisting($email);

		$token = $this->createNewToken();

		$this->getTable()->insert($this->getPayload($email, $token));
	}

	public function createNewToken()
	{
		return hash_hmac('sha256', Str::random(40), $this->hashKey);
	}

	public function deleteExisting($email)
	{
		return $this->getTable()->where('email', $email)->delete();
	}

	public function getPayload($email, $token)
	{
		return ['email' => $email, 'token' => $token, 'created_at' => new Carbon];
	}

	public function exists($email, $token)
	{
		$token = (array) $this->getTable()->where('email', $email)->where('token', $token)->first();

		return $token && !$this->tokenExpired($token);
	}
	
	public function tokenExpired($token)
	{
		$expiresAt = Carbon::parse($token['created_at'])->addSeconds($this->expires);

		return $expiresAt->isPast();
	}
	
	public function delete($token)
	{
		$this->getTable()->where('token', $token)->delete();
	}
	
	public function deleteExpired()
	{
		$expiredAt = Carbon::now()->subSeconds($this->expires);

		$this->getTable()->where('created_at', '<', $expiredAt)->delete();
	}
	
	
	
	protected function getTable()
	{
		return $this->connection->table($this->table);
	}
	
	public function getConnection()
	{
		return $this->connection;
	}


}