<?php
//
// controller of the reading page
//
include_once('m/model.php');

class C_Page extends C_Base
{
	//
	// Contractor
	//

	public function action_index()
	{
		$this->title .= '::Reading';
		$text = text_get();
		//$today = date();
		$this->content = nl2br($text);
	}


	public function action_edit()
	{

		if ($this->isPost()) {
			text_set($_POST['text']);
			header('location: index.php');
			exit();
		}


		$vars = array('title' => $this->title .= '::Editing', 'text' => text_get(), 'kw' => $this->keyWords);

		$loader = new \Twig\Loader\FilesystemLoader('views');
		$twig = new \Twig\Environment($loader);
		$template = $twig->load('v_edit.twig');
		echo $template->render($vars);
	}
}
