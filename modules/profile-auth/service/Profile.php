<?php
/**
 * Profile
 * @package profile-auth
 * @version 0.0.1
 */

namespace ProfileAuth\Service;

use ProfileAuth\Model\ProfileSession as PSession;
use Profile\Model\Profile as _Profile;

class Profile extends \Mim\Service
{
	private $session;
	private $profile;

	public function __construct(){
		$config = \Mim::$app->config->profileAuth;
		$cookie_name = $config->cookie->name;

		// by cookie
		$hash = \Mim::$app->req->getCookie($cookie_name);
		if($hash){
			$session = PSession::getOne(['hash'=>$hash]);
			if($session){
				$expires = strtotime($session->expires);

				if($expires < time()){
					PSession::remove(['id'=>$session->id]);
				}else{
					$profile = _Profile::getOne(['id'=>$session->profile]);
					if($profile){
						$this->profile = $profile;
						$this->session = $session;
					}
				}
			}
		}
	}

	public function isLogin(): bool{
		return !!$this->profile;
	}

	public function getSession(): ?object{
		return $this->session;
	}

	public function __get(string $name){
		if(!$this->profile)
			return null;
		return ($this->profile->$name ?? null);
	}
}