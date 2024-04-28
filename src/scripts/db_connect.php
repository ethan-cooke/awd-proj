<?php
class TimewarpDb extends SQLite3 {
    function __construct() {
        $this->open($_SERVER['CONTEXT_DOCUMENT_ROOT']."/../.sqlite/timewarp.db");
    }

    public function queryAssoc(string $query): array {
        $data = parent::query($query);
        $arr = [];
        while($result = $data->fetchArray()) {
            $arr[] = $result;
        }
        return $arr;
    }

    function fieldAlreadyExists($tableName, $fieldName, $fieldValue) {
        $result = $this->query("SELECT COUNT(*) as count FROM $tableName WHERE $fieldName = '$fieldValue'");
        $row = $result->fetchArray();
        return $row['count'] > 0;
    }
}

