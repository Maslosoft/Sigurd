<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Maslosoft\Sigurd\Application;

use Maslosoft\Sigurd\Commands\BuildCommand;
use Maslosoft\Sigurd\Commands\PreviewCommand;
use Symfony\Component\Console\Application;

/**
 * SigurdApplication
 *
 * @author Piotr Maselkowski <pmaselkowski at gmail.com>
 */
class SigurdApplication extends Application
{
	const Logo = <<<LOGO
   _____ _                      __
  / ___/(_)___ ___  ___________/ /
  \__ \/ / __ `/ / / / ___/ __  /
 ___/ / / /_/ / /_/ / /  / /_/ /
/____/_/\__, /\__,_/_/   \__,_/
       /____/

LOGO;

	public function __construct()
	{
		parent::__construct('Sigurd', 'stable');
		$this->add(new BuildCommand());
		$this->add(new PreviewCommand());
	}

	public function getHelp()
	{
		return self::Logo . parent::getHelp();
	}
}
