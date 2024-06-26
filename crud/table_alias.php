<?php

$where = "";        //for storing where clause of the query


$showAliases = [];      // for storing aliases of the table fields to be shown
/**
 *  Alias to be displayed instead of columnNames.
 *  These will be used as table headings and input labels
 */
    switch ($tableName) {
        case 'item_category':
            $showAliases = [
                'category_id' => 'Id',
                'category_name' => 'Name',
                'category_status' => 'Status',
                'category_image' => 'Image'

            ];
            $nameField = 'category_name';       // Name field is used to identify the field that represents the record's name
            $orderBy = " ORDER BY category_status ASC";      //for storing order by clause of the query
            break;

        case 'item_list':
            $showAliases = [
                'item_id' => 'Id',
                'category_id' => 'Category',
                'item_name' => 'Name',
                'item_price' => 'Price',
                'item_status' => 'Status',
                'item_description'=>'Description',
                'prep_time' => 'Preparation Time',
                'item_image' => 'Image',
            ];
            $nameField = 'item_name';
            $searchField = 'category_id';     // Search Field identifies the field that can be used to categorize the records
            $orderBy = " ORDER BY category_id ASC";      // in DB category table, categoes will be sequenced juciciously 
            break;

        case 'item_schedule':
            $showAliases = [
                'schedule_id' => 'Id',
                'schedule_day' => 'Select Day',
                'schedule_status' => 'Status',
                'item_id' => 'Item Name',

            ];
            $nameField = 'item_id';
            $orderBy = " ORDER BY schedule_day ASC";      
            break;
            
        case 'registered_user':
            $showAliases = [
                'user_id' => 'Id',
                'user_name' => 'Name',
                'user_email' => 'Email',         
                'user_phone' => 'Phone',

            ];
            $nameField = 'user_name';
            $orderBy = "";     
            break;

            case 'item_order':
                $showAliases = [
                    'order_id' => 'Id',
                    'item_id' => 'item',
                    'user_id' => 'email',
                    'order_amount' => 'Order Amount',
                    'order_status' => 'Status',
                    'item_quantity' => 'Quantity',
                    'order_notes' => 'Notes',
                ];
            $nameField = 'item_id';
            $searchField = 'user_id';
            $orderBy = " ORDER BY created_at DESC";      //for storing order by clause of the query
            break;

        /**
         *  Add more cases based on the added tables
         * 
         *  The case must be of the following format:
         *      case 'you_table_name':
         *           $showAliases = [
         *              'attribute_name_1 => 'display_name_1',
         *              'attribute_name_2 => 'display_name_2',    
         *          ];   
         *      break;
         *  
         * */

            // Add more cases based on the added tables
        default:
            break;
    }
//

$inputAliases = [];       // same as above but for insert/edit
/** */
    switch ($tableName) {
        case 'item_category':
            $inputAliases = [
                'category_id' => 'Id',
                'category_name' => 'Name',
                'category_status' => 'Status',
                'category_image' => 'Image'

            ];

            break;

        case 'item_list':
            $inputAliases = [
                'item_id' => 'Id',
                'category_id' => 'Category',
                'item_name' => 'Name',
                'item_price' => 'Price',
                'item_status' => 'Status',
                'item_description'=>'Description',
                'prep_time' => 'Preparation Time',
                'item_image' => 'Image',
            ];
            break;

        case 'item_schedule':
            $inputAliases = [
                'schedule_id' => 'Id',
                'schedule_day' => 'Select Day',
                'schedule_status' => 'Status',
                'item_id' => 'Item Name',
            ];
            break;
        case 'registered_user':
            $inputAliases = [
                'user_id' => 'Id',
                'user_name' => 'Name',
                'user_email' => 'Email',         
                'user_phone' => 'Phone',

            ];

            break;
            case 'item_order':
                $inputAliases = [
                    'order_id' => 'Id',
                    'item_id' => 'Item',
                    'order_status' => 'Status',
                    'order_notes' => 'Notes',
                ];
            break;
        default:
            break;
    }
//


// Aliases to be displayed instead of real entity names
// Used in title tag and form headings
$tableAliases = [
    'item_category' => 'Food Category',
    'item_list' => 'Food Item',
    'item_schedule' => 'Serve Schedule',
    'registered_user' => 'Users',
    'item_order' => 'Orders',
];

$foreignKey = [];     // Store data of foreign keys present in the table 
// like `related_table` => `their_primary_key_acting_as_foreign_key`
//

    switch ($tableName) {
        case 'item_list':
            // says that `item_list` is related to `item_category` throigh `category_id`
            $foreignKey = [
                'item_category' => 'category_id'
                // Add more as more fk constraints are created
            ];
            break;
        case 'item_schedule':
            $foreignKey = [
                'item_list' => 'item_id'
            ];
            break;
            // Add more cases according to new entities and relations created
        case 'item_order':
            $foreignKey = [
                'item_list' => 'item_id',
                'registered_user' => 'user_id'
            ];
            break;
        default:
            break;
    }
//


$categoryColumnList = []; // Stores the relevant column name to be fetched using the foriegnkey
// like `related_table` => `column_required_to_display`
    switch ($tableName) {
        case 'item_list':
            $categoryColumnList = [
                'item_category' => 'category_name'
                // Add more but only one column from each table
            ];
            break;
            case 'item_order':
                $categoryColumnList = [
                    'item_list' => 'item_name',
                    'registered_user' => 'user_email'
                ];
                break;
            case 'item_schedule':
            $categoryColumnList = [
                'item_list' => 'item_name'
            ];
            break;
        default:
            break;
    }
//

/** Field Names and keywords to create 'Text Area'
 *  Check against aliases/columnRenames.
 *  If column name match any in the below array a function is defined to create a textArea.
 * */
$forTextArea = array(
    'COMMENT',
    'FEEDBACK',
    'DESCRIPTION',
    'BIO',
    'ADDRESS',
    'LOCATION',
    'NOTES',
    'REVIEWS'
    /**Add more keywords according to your need but make sure you mention them in the 
    *columnAliases array under the right table name case in the correct format.
    */
);

$forUploadFiles = array(
    'FILE',
    'DOC',
    'PIC',
    'PHOTO',
    'IMAGE',
    'PDF'
);

/*********************```R I S K Y    Z O N E```******************/




/**
 *  Checks against the keywords that need to stay hidden in the form.
 *  Currently, it is limited to Id and may not be altered or modified since many functions are 
 *  dependent on this variable
 */
$toHide = array(
    'Id',
    'order_id',
    'user_id',
    'item_id',
    'category_id',
    'schedule_id',
);


/*********************```E N O U G H    S C R O L L I N G```*********************/
/*********************```E N O U G H    S C R O L L I N G```*********************/
/*********************```E N O U G H    S C R O L L I N G```*********************/











/** 2-D array of all input types and their corresponding data type in MySQL
 * Key is the input type in HTML and value is the corresponding data type in MySQL
 * Example: $dataTypes['number step = 0.01 '] = array('DECIMAL', 'FLOAT', 'DOUBLE');
 * This means that if the user selects the data type 'number step = 0.01 ' in the form,
 * the corresponding data type in MySQL will be 'DECIMAL', 'FLOAT', or 'DOUBLE' and vice
 */
$dataTypes = array(
    'number ' => array(
        'INT',
        'TINYINT',
        'SMALLINT',
        'MEDIUMINT',
        'BIGINT'
    ),
    'number step = 0.01 ' => array(
        'DECIMAL',
        'FLOAT',
        'DOUBLE',
    ),
    'date ' => array(
        'DATE'
    ),
    'text ' => array(
        'CHAR',
        'VARCHAR',
        'TINYTEXT',
        'TEXT',
        'MEDIUMTEXT',
        'LONGTEXT',
    ),
    'enum' => array(
        'ENUM'
    ),
    'spatial ' => array(
        'GEOMETRY',
        'POINT',
        'LINESTRING',
        'POLYGON',
        'MULTIPOINT',
        'MULTILINESTRING',
        'MULTIPOLYGON',
        'GEOMETRYCOLLECTION'
    )
);

/** Block Entries */
$blockEntries = [
    'registered_user',
    'item_order',
    'order_payment',
];









/* Strings for sql clauses */
$order = "";        //for storing order by clause of the query
$limit = "";        //for storing limit clause of the query
$join = "";         //for storing join clause of the query
$group = "";        //for storing group by clause of the query
$having = "";       //for storing having clause of the query
$select = "";       //for storing select clause of the query
$from = "";         //for storing from clause of the query
$groupBy = "";      //for storing group by clause of the query
$having = "";       //for storing having clause of the query
$limit = "";        //for storing limit clause of the query
$join = "";         //for storing join clause of the query
$group = "";        //for storing group by clause of the query
$having = "";       //for storing having clause of the query
$select = "";       //for storing select clause of the query
/**/
