<?php

class PDO_htmlspecialchars extends PDOStatement {   
        public function fetchAll($how = NULL, $class_name = NULL, $ctor_args = NULL){
         if (isset($ctor_args))
             $fetchAll = parent::fetchAll($how, $class_name, $ctor_args);
         else if (isset($class_name) && !isset($ctor_args))
             $fetchAll = parent::fetchAll($how, $class_name);
         else 
             $fetchAll = parent::fetchAll($how);      
        foreach ($fetchAll as $key => $value)
            foreach ($fetchAll[$key] as $keys => $value)
                $fetchAll[$key][$keys] = htmlspecialchars($value);
         return $fetchAll;
    } 
    public function fetch($how = NULL, $orientation = NULL, $offset = NULL){
        $fetch = parent::fetch($how, $orientation, $offset);
        if (!$fetch)
            return false;
        foreach ($fetch as $key => $value)   
            $fetch[$key] = htmlspecialchars($value);
        return $fetch;
    }
}
