<?php
// This is the vehicles controller

// Get the database connection file
require_once '../library/connections.php';
// Get the PHP Motors model for use as needed
require_once '../model/main-model.php';
// Get the vehicles model
require_once '../model/vehicles-model.php';

// Get the array of classifications
$classifications = getClassifications();

// Build a navigation bar using the $classifications array
$navList = '<ul>';
$navList .= "<li><a href='/phpmotors/index.php' title='View the PHP Motors home page'>Home</a></li>";
foreach ($classifications as $classification) {
 $navList .= "<li><a href='/phpmotors/index.php?action=".urlencode($classification['classificationName'])."' title='View our $classification[classificationName] product line'>$classification[classificationName]</a></li>";
}
$navList .= '</ul>';

// Build a dinamic drop down select list array
$classificationList = getClassificationList();

$vehicleList = '<select id="dropdownlist" name="classificationId">';
$vehicleList .= '<option value="main" selected>Choose Classification...</option>';
foreach ($classificationList as $classificationvehicle){
    $vehicleList .= "<option value='".($classificationvehicle['classificationId'])."'> $classificationvehicle[classificationName]</option>";
}
$vehicleList .= '</select>';


$action = filter_input(INPUT_POST, 'action');
 if ($action == NULL){
  $action = filter_input(INPUT_GET, 'action');
 }


 switch ($action){
    case 'addclassification':
        include '../view/add-classification.php';
        break;

 //
    case 'add-vehicle':
        include '..view/add-vehicle.php';
        break;

    case 'adding-classification':
        $classificationName = filter_input(INPUT_POST, 'classificationName');
        if (empty($classificationName)) {
        $message = '<p class="warning-message">Please, do not let empty the field</p>';
        include '../view/add-classification.php';
        exit;
        }
        $regOutcome = addClassification($classificationName); // from vehicle-model.php
        if ($regOutcome === 1) {
        header('location:/phpmotors/vehicles/index.php');
        exit;
        } else {
        $message = "<p class='warning-message'>Sorry, adding $classificationName classification failed. Please try again.</p>";
        include '../view/add-classification.php';
        exit;
        };
        break;
//   

//filter and store data
    case 'addvehicles':
        $invMake = filter_input(INPUT_POST, 'invMake');
        $invModel = filter_input(INPUT_POST, 'invModel');
        $invDescription = filter_input(INPUT_POST, 'invDescription');
        $invImage = filter_input(INPUT_POST, 'invImage');
        $invThumbnail = filter_input(INPUT_POST, 'invThumbnail');
        $invPrice = filter_input(INPUT_POST, 'invPrice');
        $invStock = filter_input(INPUT_POST, 'invStock');
        $invColor = filter_input(INPUT_POST, 'invColor');
        $classificationId = filter_input(INPUT_POST, 'classificationId');

//check for missing data
        if(empty($invMake) || empty($invModel) || empty($invDescription) || empty($invImage) || empty($invThumbnail) || empty($invPrice) || empty($invStock) || empty($invColor) || empty($classificationId)){
            $message = '<p>Provide information for all empty form fields.</p>';
            include '../view/add-vehicle.php';
            exit;
        }

//Calling the function to register the variable in the DB and display messages
        $dataInput = regVehicle($invMake, $invModel, $invDescription, $invImage, $invThumbnail, $invPrice, $invStock, $invColor, $classificationId);
            if ($dataInput ===1){
                $message = '<p>Registered</p>';
                include '../view/add-vehicle.php';
                exit;
            }
            else { 
            $message = '<p>Please, fill all the required fields</p>';
                include '../view/add-vehicle.php';
                exit;
            }
                break;

    default:
        include '../view/vehicle-man.php';
}
?>
