<?php

require_once('./vendor/autoload.php');

//
// Base controller of the site.
//
abstract class C_Base extends C_Controller
{
	protected $title;		// head of a page
	protected $content;		// contnt of a page
	protected $keyWords;


	protected function before()
	{

		$this->title = 'name of the site';
		$this->content = '';
		$this->keyWords = "...";
	}

	//
	// Generation of the base page
	//	
	public function render()
	{
		$vars = array('title' => $this->title, 'content' => $this->content, 'kw' => $this->keyWords);

		$loader = new \Twig\Loader\FilesystemLoader('views');
		$twig = new \Twig\Environment($loader);
		$template = $twig->load('v_main.twig');
		echo $template->render($vars);


		// $page = $this->Template('v/v_main.php', $vars);
		// echo $page;
	}
}
