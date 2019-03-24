<?php

require(ROOT . "controller/HomeController.php");

function createList()
{
	render("list/create");
}

function createNewAction()
{
	insertNewAction($_POST);
	header("Location:". URL . "home/index");
}

function deleteList($id)
{
	deleteNewAction($id);
	header("Location:" . URL . "home/index");
}

function updateList()
{
	$id = $_GET["id"];
	render("list/update", array(
		'list' => getNewAction($id)
	));
}
function updateNewAction()
{
	updateNewAction($_POST);
	header("Location:" . URL . "home/index");
}

function createTask() 
{
	$id = $_GET["id"];
	render("task/create", array(
		"id" => $id)
	));
}

function createNewAction() 
{
	insertNewAction($_POST);
	header("Location:" . URL . "home/index");
}

function deleteTask($id) 
{
	deleteNewTask($id);
	header("Location:" . URL . "home/index");
}

function updateTask() 
{
	$id = $_GET["id"];
	render("task/update", array(
		'task' => getNewAction($id)
	));
}

function updateNewAction() 
{
	updateNewAction($_POST);
	header("Location:" . URL . "home/index");
}


