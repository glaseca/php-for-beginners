<?php

class Connection
{
    public static function make($config){
        try {
            switch ($config['driver'])
            {
                case 'mysql':
                    // mysql:host=localhost;dbname=testdb , bruce, mypass, options
                    return new PDO(
                        $config['driver'].':'.$config['connection'].';dbname='.$config['name'],
                        $config['username'],
                        $config['password'],
                        $config['options']
                    );
                case 'pgsql':
                    // pgsql:host=localhost;dbname=testdb;user=bruce;password=mypass
                    return new PDO(
                        $config['driver'].':'.$config['connection'].';dbname='.$config['name'].';user='.$config['username'].';password='.$config['password']
                    );
            }
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
