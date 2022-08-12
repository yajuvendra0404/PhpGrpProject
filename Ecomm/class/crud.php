<?php
    require_once('connection.php');
    class Crud extends DbConnection {
        function insert($table_name,$data){

            $fields = $placeholder = [];
            foreach($data as $field => $value){
                $fields[] = $field;
                $placeholder[] = ":{$field}";
            }

            $sql = "INSERT INTO {$table_name} (" .implode(',',$fields) .") VALUES(".implode(',',$placeholder).")";
            $statement = $this->db->prepare($sql);

            try {

                $this->db->beginTransaction();  
                $statement->execute($data);
                $this->db->commit();
                $insert_id = $this->db->lastInsertId();
                return $insert_id;

            } catch (PDOException $ex) {
                echo "error". $ex->getMessage();
            }
        }

        function fetchData($table_name,$filter,$key,$value){
            if(!empty($filter)) {
                $sql = "SELECT * FROM {$table_name} Where {$key} = {$value}";
                
            } else {
                $sql = "SELECT * FROM {$table_name}";
            }
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        function fetchProductData($table_name,$category){
            

            if(!empty($category)) {
                $sql = "SELECT * FROM {$table_name} Where category_id in ({$category})";
            } else {
                $sql = "SELECT * FROM {$table_name}";
            }
            // echo "query - ".$sql;
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }




        
    }
?>