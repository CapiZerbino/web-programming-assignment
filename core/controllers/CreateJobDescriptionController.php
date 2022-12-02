<?php

class CreateJobDescriptionController extends Controller
{

    function process($param)
    {
        // TODO: Implement process() method.
        if(!$_SESSION['logged'])
        {
            $this->redirect("home");
        }
        header("HTTP/1.0 200");
        $this->header["title"] = "Create A Job Description Page";
        $this->header["description"] = "Create A Job Description";
        $action = array_shift($param);
        switch ($action)
        {
            case "":
                if($_SERVER["REQUEST_METHOD"] == "POST")
                {
                    require "../models/CompanyModel.php";
                    require "../models/JobModel.php";
                    require "../models/LocationModel.php";
                    $company = new CompanyModel();
                    $job = new JobModel();
                    $location = new LocationModel();
                } else {
                    $this->view = "createJobDescription";
                }
                break;
            default:
                $this->redirect("error");
        }
    }
}
