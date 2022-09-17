<?php 

namespace models;
use \PDO;

class Classes {
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
        return $this->Name;
    }

    public function getDescription() {
        return $this->Description;
    }

    public function getClassCode() {
        return $this->class_code;
    }

    public function getTeacherId() {
        return $this->teacher_id;
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