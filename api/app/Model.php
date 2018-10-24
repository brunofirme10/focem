<?php

/**
 * Configuration for: Database
 *
 */
class Model {

    protected $db;
    public $_tabela;

    public function __construct() {
        // MYSQLCONECTOR
        $this->db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";", DB_USER, DB_PASS);

        /* conenexao para servidor linux unix*/
        // $this->db = new PDO("dblib:version=7.0;charset=UTF-8;host=".DB_HOST .";dbname=" . DB_NAME . "", DB_USER,  DB_PASS);        
        // $this->db->exec("set names utf8");

        // $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // $this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }

    public function insert(Array $dados) {
        foreach ($dados as $index => $vals) {
            if (!empty($vals)) {
                $campos[] = $index;
                $campos_pdo[] = ':' . $index;

                $pdo_dados[$index] = $vals;
            }
        }

        $campos = implode(", ", array_values($campos));
        $campos_pdo = implode(", ", array_values($campos_pdo));

        $query = "INSERT INTO {$this->_tabela} ({$campos}) VALUES ({$campos_pdo})";
       
        $stmt = $this->db->prepare($query);
      
        $stmt->execute($pdo_dados);
        return $this->db->lastInsertId();
    }
    public function first($data = null, $where = null, $fetchStyle = PDO::FETCH_ASSOC) {
        $sql_where = ($where != null ? "WHERE {$where}" : '');
        $query = "SELECT * FROM `{$this->_tabela}` {$sql_where}";

        $stmt = $this->db->prepare($query);
        $stmt->execute($data);
        return $stmt->fetch($fetchStyle);
    }

    public function read($data = null, $where = null, $limit = null, $offset = null, $orderby = null, $params = null, $fetchStyle = PDO::FETCH_ASSOC) {
        $sql_where = ($where != null ? "WHERE {$where}" : '');
        $sql_limit = ($limit != null ? "LIMIT {$limit}" : '');
        $sql_offset = ($offset != null ? "OFFSET {$offset}" : '');
        $sql_orderby = ($orderby != null ? "ORDER BY {$orderby}" : '');

        $query = "";
        if ($params == null) {
            $query = "SELECT * FROM `{$this->_tabela}` {$sql_where} {$sql_orderby} {$sql_limit} {$sql_offset}";
        } else {
            $query = "SELECT {$params} FROM `{$this->_tabela}` {$sql_where} {$sql_orderby} {$sql_limit} {$sql_offset}";
        }


        $stmt = $this->db->prepare($query);
        $stmt->execute($data);

        try {
            return $stmt->fetchAll($fetchStyle);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function update(Array $dados, $where) {
        foreach ($dados as $index => $vals) {
            if (isset($vals) && $vals !== "") {
                $campos[] = $index . '=:' . $index;
                $pdo_dados[$index] = $vals;
            }
        }

        $campos = implode(", ", array_values($campos));

        $campos = $campos . ', updated_at=:updated_at';
        date_default_timezone_set('America/Sao_Paulo');
        $pdo_dados['updated_at'] = date("Y-m-d H:i:s");

        $query = "UPDATE {$this->_tabela} SET {$campos} WHERE {$where}";

        $stmt = $this->db->prepare($query);
        return $stmt->execute($pdo_dados);
    }

    public function delete($where) {
        $query = "DELETE FROM {$this->_tabela} WHERE {$where}";
        $stmt = $this->db->prepare($query);
        return $stmt->execute();
    }

    public function query($query) {
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function distinct($field, $where = null) {
        $sql_where = ($where != null ? "WHERE {$where}" : '');
        $query = "SELECT DISTINCT $field FROM `{$this->_tabela}` {$sql_where}";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function count() {
        return $this->db->query("SELECT count(*) FROM `{$this->_tabela}` ")->fetchColumn(); 
    }
    public function lastInsert() {
        return $this->db->lastInsertId();
    }
    public function lastInsertSQLServer(){
        $query = "SELECT SCOPE_IDENTITY()";
        $stmt = $this->db->prepare($query);
        return $stmt->execute();
    }
}
