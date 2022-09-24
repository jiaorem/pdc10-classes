<?php 

namespace Models;
use PDO;
use Exception;

class Classes 
{
    protected $id;
	protected $name;
	protected $description;
	protected $class_code;
    protected $teacher_id;

    // Database Connection Object
	protected $connection;

	public function __construct()
	{
		$this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->class_code = $class_code;
        $this->teacher_id = $teacher_id;
	}

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getClassCode() {
        return $this->class_code;
    }

    public function getTeacherId() {
        return $this->teacher_id;
    }

	public function setConnection($connection)
	{
		$this->connection = $connection;
	}

	public static function displayClasses(){
		$dsn = "mysql:host=localhost;dbname=pdc10_classes";
		$user = "root";
		$passwd = "";
		$pdo = new PDO($dsn, $user, $passwd);
		try {
			$sql = "SELECT * FROM classes";
			$statement = $pdo->prepare($sql);
			$statement->execute();
			$retrieveClasses = $statement->fetchAll();
			return $retrieveClasses;

		} catch (Exception $e) {
			error_log($e->getMessage());
		}
	}

    public function addToClass(){
        global $pdo;
		try {

			$sql = "INSERT INTO classes SET name=:name, description=:description, class_code=:class_code, teacher_id=:teacher_id";

			$statement = $pdo->prepare($sql);

			return $statement->execute([
				':name' => $this->getName(),
				':description' => $this->getDescription(),
				':class_code' => $this->getClassCode(),
                ':teacher_id' => $this->getTeacherId()
			]);

		} catch (Exception $e) {
			error_log($e->getMessage());
		}
    }

    public function updateClass(){
        global $pdo;
		try {

			$sql = "UPDATE classes SET name=:name, description=:description, class_code=:class_code, teacher_id=:teacher_id";

			$statement = $pdo->prepare($sql);

			return $statement->execute([
				':name' => $this->getName(),
				':description' => $this->getDescription(),
				':class_code' => $this->getClassCode(),
                ':teacher_id' => $this->getTeacherId()
			]);

		} catch (Exception $e) {
			error_log($e->getMessage());
		}
    }

    public function deleteClass(){
        global $pdo;
		try {

			$sql = "DELETE FROM classes WHERE id=$id";

			$statement = $pdo->prepare($sql);

			return $statement->execute([
				':name' => $this->getName(),
				':description' => $this->getDescription(),
				':class_code' => $this->getClassCode(),
                ':teacher_id' => $this->getTeacherId()
			]);

		} catch (Exception $e) {
			error_log($e->getMessage());
		}
    }

    public function assignTeacher(){
        global $pdo;
		try {

			$sql = "UPDATE classes SET teacher_id=:teacher_id";

			$statement = $pdo->prepare($sql);

			return $statement->execute([
				':name' => $this->getName(),
				':description' => $this->getDescription(),
				':class_code' => $this->getClassCode(),
                ':teacher_id' => $this->getTeacherId()
			]);

		} catch (Exception $e) {
			error_log($e->getMessage());
		}
    }
}