<?php
class JobModel extends Model
{

    private int $posted_by_id;
    private int $job_type_id;
    private int $company_id;
    private bool $is_company_name_hidden;
    private string $created_date;
    private string $job_description;
    private int $job_location_id;
    private bool $is_active;

    public function validate() : bool
    {

        return true;
    }

    function executeQuery(Request $request)
    {
        // TODO: Implement executeQuery() method.
    }

    private function getJob()
    {

    }

    private function addJob()
    {

    }

    private function updateJob()
    {

    }



}