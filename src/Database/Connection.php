<?php

namespace Hriste\Database;

class Connection {

	/** @var \PDO */
	private $pdo;

	/**
	 * Connection constructor.
	 * @param $config
	 */
	public function __construct($config) {
		$driver = $config['driver'];
		$host = $config['host'];
		$database = $config['database'];
		$charset = $config['charset'];
		$dsn = "$driver:host=$host;dbname=$database;charset=$charset";
		dump($config);

		try {
			$this->pdo = new \PDO($dsn, $config['username'], $config['password'], [\PDO::FETCH_OBJ]);
		} catch (\PDOException $e) {
			throw $e;
		}
	}

	/**
	 * @param $sql
	 * @return \PDOStatement
	 */
	public function prepare(string $sql) {
		return $this->pdo->prepare($sql);
	}

	/**
	 * @param string $sql
	 * @param array $params
	 * @return array
	 */
	public function query(string $sql, array $params = []) {
		try {
			$stmt = $this->prepare($sql);
			$stmt->execute($params);
			return $stmt->fetchAll();
		} catch (\PDOException $e) {
			throw $e;
		}
	}
}