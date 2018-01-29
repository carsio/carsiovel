<?php
namespace App;

use SON\Init\Bootstrap;
use SON\Init\Rota;
use PDO;

/**
 * É hora do show!
 */
class Init extends Bootstrap
{
	/**
	 * Responsável pela Inicialização do framework
	 * @return Init [Aplicação em si]
	 */
	protected function initRoutes()
	{
		require_once '../routes/web.php';
		$this->setRoutes( Rota::dumpRotas() );

		return $this;
	}
}
