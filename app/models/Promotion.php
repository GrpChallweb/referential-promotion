<?php

use App\Model\DB;

require 'DB.php';

class Promotion {

    private $pdo;

    public function __construct()
    {
        $this->pdo = DB::get();
    }

    public function create($libelle)
    {
        $req = $this->pdo->prepare('INSERT INTO promotion(libelle) VALUES (?)');
        $req->bindParam(1, $libelle);
        $req->execute();

        header('Location: index.php');
    }

    public function show($id)
    {

    }

    public function update($id, $libelle)
    {
        $req = $this->pdo->prepare('UPDATE promotion SET libelle = ? WHERE id = ' . $id);
        $req->bindParam(1, $libelle);
        $req->execute();

        header('Location: index.php');
    }

    public function delete($id)
    {

    }

    public function all()
    {
        return $modules = $this->pdo->query('SELECT * from promotion')->fetchAll();
    }

}