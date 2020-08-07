<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table, $sort = null, $order = null)
    {
        $sql = "SELECT * FROM {$table}";

        if ($sort) {
            $sql .= " ORDER BY $sort";

            if ($order && in_array($order, ['ASC', 'DESC'])) {
                $sql .= ' ' . $order;
            }
        }

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute();
        } catch (Exception $e) {
            throw new Exception('Ошибка в запросе');
        }

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $columns)
    {
        $col_names = array_keys($columns);
        $col_places = array_map(function ($val) {
            return ':' . $val;
        }, $col_names);

        $col_names = implode(', ', $col_names);
        $col_places = implode(', ', $col_places);

        $sql = "INSERT INTO {$table} ({$col_names}) VALUES ({$col_places})";

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($columns);
        } catch (Exception $e) {
            throw new Exception('Ошибка сохранения');
        }
    }
}
