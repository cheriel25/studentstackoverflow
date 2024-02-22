<?php

##REUSABLE QUERY FUNCTION##

function query($pdo, $sql, $parameters = []) {
	$query = $pdo->prepare($sql);
	$query->execute($parameters);
	return $query;
}

##QUESTION FUNCTIONS##

function getQuestion($pdo, $id) {
	$parameters = [':id' => $id];
	$query = query($pdo, 'SELECT * FROM question WHERE id = :id', $parameters);
	return $query->fetch();
}

function totalQuestions($pdo) {
	$query = query($pdo, 'SELECT COUNT(*) FROM question');
	$row = $query->fetch();
	return $row[0];
}

function allQuestions($pdo) {
	$questions = query($pdo, 'SELECT question.id, questiontext, name, email, moduleName FROM question
	INNER JOIN student ON studentid  = student.id
	INNER JOIN module ON moduleid = module.id');
	return $questions->fetchAll();
}

function insertQuestion($pdo, $questiontext, $studentid, $moduleid) {
	$query = 'INSERT INTO question (questiontext, questiondate, studentid, moduleid)
	VALUES (:questiontext, CURDATE(), :studentid, :moduleid)';
	$parameters = [':questiontext' => $questiontext, ':studentid' => $studentid, ':moduleid' => $moduleid];
	query($pdo, $query, $parameters);
}

function updateQuestion($pdo, $questionId, $questiontext) {
	$query = 'UPDATE question SET questiontext = :questiontext WHERE id = :id';
	$parameters = [':questiontext' => $questiontext, ':id' => $questionId];
	query($pdo, $query, $parameters);
}

function deleteQuestion($pdo, $id) {
	$parameters = [':id' => $id];
	query($pdo, 'DELETE FROM question WHERE id = :id', $parameters);
}

##STUDENT FUNCTIONS##

function allStudents($pdo) {
	$students = query($pdo, 'SELECT * FROM student');
	return $students->fetchAll();
}

function getStudent($pdo, $id) {
	$parameters = [':id' => $id];
	$query = query($pdo, 'SELECT * FROM student WHERE id = :id', $parameters);
	return $query->fetch();
}

function totalStudents($pdo) {
	$query = query($pdo, 'SELECT COUNT(*) FROM student');
	$row = $query->fetch();
	return $row[0];
}


function insertStudent($pdo, $name, ) {
	$query = 'INSERT INTO student (name)
	VALUES (:name )';
	$parameters = [':name' => $name];
	query($pdo, $query, $parameters);
}

function updateStudent($pdo, $studentid, $name) {
	$query = 'UPDATE student SET name = :name WHERE id = :id';
	$parameters = [':name' => $name, ':id' => $studentid];
	query($pdo, $query, $parameters);
}

function deleteStudent($pdo, $id) {
	$parameters = [':id' => $id];
	query($pdo, 'DELETE FROM student WHERE id = :id', $parameters);
}


##MODULE FUNCTIONS##

function allModules($pdo) {
	$modules = query($pdo, 'SELECT * FROM module');
	return $modules->fetchAll();
}


function getModule($pdo, $id) {
	$parameters = [':id' => $id];
	$query = query($pdo, 'SELECT * FROM module WHERE id = :id', $parameters);
	return $query->fetch();
}

function totalModules($pdo) {
	$query = query($pdo, 'SELECT COUNT(*) FROM module');
	$row = $query->fetch();
	return $row[0];
}


function insertModule($pdo, $moduleName, ) {
	$query = 'INSERT INTO module (moduleName)
	VALUES (:moduleName )';
	$parameters = [':moduleName' => $moduleName];
	query($pdo, $query, $parameters);
}

function updateModule($pdo, $moduleid, $moduleName) {
	$query = 'UPDATE module SET moduleName = :moduleName WHERE id = :id';
	$parameters = [':moduleName' => $moduleName, ':id' => $moduleid];
	query($pdo, $query, $parameters);
}

function deleteModule($pdo, $id) {
	$parameters = [':id' => $id];
	query($pdo, 'DELETE FROM module WHERE id = :id', $parameters);
}