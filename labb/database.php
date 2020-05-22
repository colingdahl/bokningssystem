<?php
        echo "Name"

        $db = new SQLite3('SQLitedatabase.db');  
        $sql = "INSERT INTO Comments (Name, Email, Message) VALUES('axel', axel@gmail.com, 'best i test')"   
        $db->queryExec($sql);

        
        ?>