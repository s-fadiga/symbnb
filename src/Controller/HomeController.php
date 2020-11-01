<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends Controller {

        /**
         * @Route("/hello/{prenom}/age/{age}", name="welcome")
         * @Route("/home", name="pageaccueil")
         *
         * @return void
         */
        /* public function hello($prenom = "Nano", $age = 3) {
            return $this->render(
                'hello.html.twig',
                [
                    'prenom' => $prenom,
                    'age' => $age
                ]
            );
        }*/

        /**
         * @Route("/", name="homepage")
         *
         */
        public function home(){
            return $this->render('home.html.twig');
        }
    }
?>