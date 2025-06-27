# Introduction

**AutoCRUD** is a revolutionary, fully automated CRUD system powered by **AJAX** and **Tailwind CSS** that intelligently detects your database structure and dynamically generates complete, production-ready interfaces without manual configuration.

## How It Works

The system performs deep database analysis using advanced SQL queries to automatically discover table structures, column types, constraints, and foreign key relationships. This intelligence drives dynamic generation of appropriate HTML elements—from text inputs and dropdowns to file uploads and date pickers—all tailored to your specific database schema.

Built around three core components: **`table_functions.php`** (the intelligent engine with reusable functions), **`table_alias.php`** (customization hub using smart keyword mapping), and **`config.php`** (secure database foundation). The system transforms raw database metadata into contextually appropriate user interfaces that feel hand-crafted for your data.

**Key Benefits**: Zero configuration deployment, intelligent field detection, real-time AJAX search with pagination, responsive design, built-in security, and performance optimization—turning hours of CRUD development into minutes of effortless automation.

To be able to make this system your own, read carefully the comments of `table_alias.php` and adjust the keyword according to your own needs. 

# ✨ Features

AutoCRUD is a powerful, fully automated CRUD (Create, Read, Update, Delete) system that revolutionizes database management through dynamic content generation. Here are its key features:

## 🚀 Core Features

### **Dynamic Table Detection & Generation**
- **Automatic Database Scanning**: Seamlessly detects all tables in your database
- **Dynamic Column Analysis**: Automatically identifies column names, data types, and constraints
- **Real-time Table Generation**: Creates complete CRUD interfaces based on database structure
- **Zero Manual Configuration**: No need to manually define table structures in code

### **Intelligent Form Generation**
- **Smart Input Type Detection**: Automatically generates appropriate input fields based on database column types:
  - Text inputs for VARCHAR/TEXT fields
  - Number inputs for INTEGER/DECIMAL fields
  - Date pickers for DATE fields
  - File upload buttons for image/document columns
  - Dropdown selections for ENUM fields
  - Textarea for description/comment fields
- **Dynamic Validation**: Automatically applies `required` attributes based on NOT NULL constraints
- **Foreign Key Relationships**: Automatically creates dropdown selections populated from related tables


https://github.com/user-attachments/assets/8bf7e24a-2888-42a2-9758-591e0f6e9437


### **Advanced Search & Filtering**
- **Real-time AJAX Search**: Instant search results without page refresh
- **Multi-column Search**: Search across all visible columns simultaneously
- **Category-based Filtering**: Click-to-filter functionality for related data
- **Smart Search Suggestions**: Dynamic placeholder text with search examples
- **Cross-table Search**: Search through foreign key relationships


https://github.com/user-attachments/assets/5ee0189d-dd16-481e-8d6c-6e3dbd70e4b2


### **Professional UI/UX**
- **Tailwind CSS Integration**: Modern, responsive design out of the box
- **Interactive Elements**: 
  - Hover effects on table rows
  - Loading animations
  - Modal confirmations for delete operations
  - Image zoom functionality
- **Mobile Responsive**: Optimized for all device sizes
- **Dark Mode Support**: Built-in dark theme capabilities

### **File Management System**
- **Automatic File Upload Detection**: Recognizes file/image columns automatically
- **File Type Validation**: Smart file type restrictions (images, PDFs, documents)
- **Secure File Handling**: Sanitized file names and secure upload processing
- **Image Preview**: Thumbnail display with click-to-zoom functionality

### **Pagination & Performance**
- **Automatic Pagination**: Configurable page limits (default: 10 records per page)
- **Performance Optimized**: LIMIT and OFFSET queries for large datasets
- **Navigation Controls**: Previous/Next buttons with page number links
- **Record Count Display**: Shows total pages and current position

### **Security Features**
- **SQL Injection Prevention**: All inputs are sanitized using `mysqli_real_escape_string()`
- **Input Validation**: Server-side validation for all form inputs
- **File Security**: Secure file upload with sanitized filenames
- **XSS Protection**: Output escaping for safe data display

### **Customization Options**
- **Field Aliasing**: Custom display names for database columns
- **Table Aliasing**: User-friendly names for database tables
- **Column Visibility Control**: Show/hide specific columns in different views
- **Input Field Customization**: Control which fields appear in forms
- **Sorting Configuration**: Custom sorting options per table

### **Relationship Management**
- **Foreign Key Detection**: Automatically identifies and handles foreign key relationships
- **Related Data Display**: Shows related table data instead of foreign key IDs
- **Cascading Operations**: Handles related data updates appropriately
- **Cross-table Navigation**: Easy navigation between related records

### **AJAX-Powered Interactions**
- **Live Search**: Real-time search without page reloads
- **Dynamic Content Loading**: Smooth user experience with AJAX updates
- **Error Handling**: Graceful handling of network errors
- **Loading States**: Visual feedback during operations

### **Developer-Friendly Architecture**
- **Modular Design**: Separated concerns with dedicated files:
  - `config.php` - Database configuration
  - `table_functions.php` - Core functionality
  - `table_alias.php` - Customization settings
- **Reusable Functions**: Comprehensive function library for common operations
- **Extensible Structure**: Easy to add new features and customize behavior
- **Well-Documented Code**: Inline comments explaining functionality

### **Multi-Operation Support**
- **Create Records**: Dynamic insert forms with proper validation
- **Read/Display**: Formatted data display with pagination
- **Update Records**: Pre-populated edit forms with current values
- **Delete Records**: Confirmation dialogs with cascade handling

### **Data Type Intelligence**
- **Automatic Type Mapping**: Maps database types to appropriate HTML input types
- **ENUM Handling**: Automatic dropdown generation for ENUM fields
- **Text Area Detection**: Smart detection of description/comment fields
- **Number Format Handling**: Proper handling of integers, decimals, and floats

## 🎯 Use Cases

- **Admin Panels**: Perfect for creating admin interfaces for any database
- **Content Management**: Ideal for managing dynamic content
- **Data Entry Systems**: Streamlined data entry with validation
- **Prototyping**: Rapid prototyping of database-driven applications
- **Internal Tools**: Quick internal tools for data management

## 🔧 Technical Highlights

- **Server-side Rendering**: All HTML generated server-side for SEO and performance
- **MySQL Integration**: Optimized for MySQL databases with full feature support
- **PHP 7+ Compatible**: Modern PHP features and best practices
- **No Framework Dependencies**: Lightweight implementation without heavy frameworks
- **Standards Compliant**: Clean, semantic HTML5 output
 
<h1>Getting Started</h1>
The system is implememnted and deployed as a feature of [https://canmansys.littledoiknow.com/admin/dashboard.php]. Explore the various tables on the sidebar, watch them generate dynamically by changing the URL query, try editing and find out the forms also generating dynamically, all rendered on the server side.


<h2>Installation</h2>
To seamlessly integrate the AutoCRUD system into your project, follow these simple installation steps:
<h3> Download Source Code:</h3>
  <li>Visit the GitHub repository at <a href="https://github.com/omsrivastava512/AutoCRUD">AutoCRUD</a> and download the source code.
<h3>Integration:</h3>
  <li>Integrate the downloaded source code into your project's admin panel.



<h2>Setup</h2>
Configure AutoCRUD to align with your project requirements by following these setup instructions:
<ol>
  <h3> <li>
    
  Edit `config.php`:
  </h3>Locate the config.php file and update the following values:
  <ul>
    <li type = disc>Username
    <li type = disc>Password
    <li type = disc>Database name
    <li type = disc>Server name
  </ul>

   <h3> <li>
    
  Customize `$showAliases`:
  </h3>
  
  In the `table_alias.php`, 
  <ul>
    <li type = disc>Navigate to the $showAliases array.
    <li type = disc>Create a switch case for every table in your database.
    <li type = disc>Beneath each case, assign an associative array to $showAliases, mapping original attribute names in the table to preferred display names as keys and values, respectively.
  </ul>

  The $showAliases array stores the fields that you want to be displayed in the table_show.php. Another array `$inputAliases` stores the fields that are allowed to take input through a form. Please follow the above instructions for this array as well.
  Additionally, insert  `$nameField` and `$searchField` too inside the switch case, if needed.

   <h3> <li> 
     
   Customize `$tableAliases` array:
   </h3> 
    Store the display name of the tables in the similar fashion.

   <h3> <li> 
     
   Customize `$foreignKey` array:
   </h3> Stores the primary keys of the tables that are acting as foreign keys in the corresponding table case.

  <h3> <li> 
     
   Customize `$categoryColumnList` array:
   </h3> 

  Store the column of the related table that is to fetched using the foreign key. For example, `category_name` is fetched using the foreign key `category_id` from the table `item_category`.
 
  <h3><li> Additional Notes

  Add your primary keys fields of each table in the `toHide` array in no specific order. <br>

  Whenever you have make any change in the HTML of `table_show.php`, make sure you replicate those changes in `search.php`, or create a reusable page that generates the tables altogether.<br>
  
   


</ol>


