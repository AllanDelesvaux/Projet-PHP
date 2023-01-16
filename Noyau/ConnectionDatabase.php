<?php

class ConnectionDatabase
{


    private $A_config;

    private $S_dsn;

    private $O_conn;


    public function __construct()
    {

        $this->A_config = parse_ini_file('Noyau/data.ini', true);
        $this->S_dsn = $this->A_config['type'] . ':dbname=patisseriebd_table;host=' . $this->A_config['adresse_IP'];
        $this->O_conn = new PDO($this->S_dsn, $this->A_config['utilisateur'], $this->A_config['motdepasse']);
    }


    public function getConnection()
    {
        return $this->O_conn;
    }
}