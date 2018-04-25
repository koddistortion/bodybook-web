<?php
/**
 * This file is part of the BodyBook.
 *
 * (c) Oliver "koddistortion" Kotte
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends Controller {

	/**
	 * @Route("/lucky/number")
	 * @throws \Exception
	 */
	public function number() {
		$number = random_int(0, 100);

		return $this->render('lucky/number.html.twig', array(
			'number' => $number
		));
	}
}