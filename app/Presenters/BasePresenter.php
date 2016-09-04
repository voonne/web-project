<?php

namespace App\Presenters;

use Kdyby\Autowired\AutowireComponentFactories;
use Kdyby\Autowired\AutowireProperties;
use Nette\Application\UI\Presenter;


abstract class BasePresenter extends Presenter
{

	use AutowireProperties;
	use AutowireComponentFactories;

	/**
	 * @var string
	 * @persistent
	 */
	public $locale;

}
