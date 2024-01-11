<?php

namespace App\Controller;

use App\Entity\Sport;
use App\Repository\SportRepository;
use Core\Http\Response;

class SportController extends \Core\Controller\Controller
{

    // localhost:8081/?type=sport&action=index
    public function index():Response
    {

        $sportsRepository = new SportRepository();

        $sports = $sportsRepository->findAll();


        return $this->render("sport/index",[
            "pageTitle"=>"Les Sports",
            "sports"=>$sports
        ]);
    }

    // localhost:8081/?type=sport&action=show&id=2

    public function show():Response
    {

        if(!empty($_GET['id']) && ctype_digit($_GET['id']))
        {
            $id = $_GET['id'];
        }



        $sportsRepository = new SportRepository();

        $sport = $sportsRepository->find($id);

        return $this->render("sport/show",[
            "pageTitle"=> "un sport",
            "sport"=>$sport
        ]);
    }


    // localhost:8081/?type=sport&action=delete&id=2

    public function delete():Response
    {

        if(!empty($_GET['id']) && ctype_digit($_GET['id']))
        {
            $id = $_GET['id'];
        }

        $sportRepository = new SportRepository();

        $sportRepository->delete($id);

        return $this->redirect("?type=sport&action=index");
    }

    // localhost:8081/?type=sport&action=create

    public function create():Response
    {
        $name =null;
        $description =null;
        $accessory =null;

        if(!empty($_POST['name'])){$name = $_POST['name'];}
        if(!empty($_POST['description'])){$description = $_POST['description'];}
        if(!empty($_POST['accessory'])){$accessory = $_POST['accessory'];}

        if($name && $description && $accessory)
        {
            $sport = new Sport();
            $sport->setName($name);
            $sport->setDescription($description);
            $sport->setAccessory($accessory);

            $sportRepository = new SportRepository();

            $sportRepository->save($sport);

            return $this->redirect("?type=sport&action=index");

        }

        return $this->render("sport/create", [
            "pageTitle"=>"Nouveau Sport"
        ]);
    }
}