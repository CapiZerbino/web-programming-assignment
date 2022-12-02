<?php
class LocationModel extends Model
{
    private int $id;
    private string $street_address;
    private string $city;
    private string $state;
    private string $country;
    private string $zip;

    public function loadParams ()
    {

    }

    function executeQuery(Request $request)
    {
        // TODO: Implement executeQuery() method.
    }

    private function addLocation()
    {

    }

    private function getLocation()
    {

    }

    private function updateLocation()
    {

    }
}