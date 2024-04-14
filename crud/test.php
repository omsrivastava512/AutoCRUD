<?php 
$tableName ='item_schedule'   ;
// Include necessary files for configuration and table functions
    include("config.php");
   

// Include file containing table aliases if needed
    include("table_alias.php");      
    include("table_functions.php");   

// Fetch column names of the specified table
    // $columnNames = getColumnNames($tableName);  
    // $columnNames is a 1D array of all the names of attributes

// Uncomment the line below to display column names (for debugging purposes)
    // showColumnNames($columnNames);

// Initialize variables
$rows = [];
$where = "";    //where clause for the query
$form= new Form();

// Retrieve records from the specified table

// Uncomment the line below to display column names (for debugging purposes)
    // showColumnNames($columnNames);
   
    // print_r($form->getInputValues($tableName,$columnNames[0],""));
    echo "<h1>" . isHidden("item_id");
    print_r($inputAliases);
    
    
?>

<body>
    <form action="">
        <label for="d">hello</label>
        
        <input type="file" name="" id="d" accept="">
    </form>
    <input type="search" name="Hal" id="">
</body>


<?php


