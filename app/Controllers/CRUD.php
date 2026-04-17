<?php
namespace App\Controllers;

interface CRUD {
    public function index();
    public function createForm();
    public function storeAction();
    public function show($id);
    public function editForm($id);
    public function updateAction($id);
    public function deleteAction($id);
}

