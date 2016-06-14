<?php

namespace MeetupBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
     public function dashboardAction(Request $request){
         $json_string = file_get_contents("https://api.meetup.com/2/groups?&sign=true&photo-host=public&category_id=34&country=fr&city=paris&key=17662761a2d418394102b53502864");
            $jsonData = json_decode($json_string, true);
            var_dump($jsonData); exit;
     }
}
