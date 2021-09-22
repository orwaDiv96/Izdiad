<?php 

include "../session_vars.php";
include "../con_db.php";

$uniq_id = uniqid();
$add_date = date('Y-m-d');

$projectTitle = $_POST['projectTitle'];
$projectInfo = $_POST['projectInfo'];

$projectRequirments = $_POST['projectRequirments'];
$workPhase = $_POST['workPhase'];

$prototypeDelivery = $_POST['prototypeDelivery'];
$finalVersionDelivery = $_POST['finalVersionDelivery'];

///////////////////////////////////////////////////////////////////
$addProjectMetaDataQuery = "INSERT INTO project_metadata VALUES (NULL,'$uniq_id','$projectTitle','$add_date','$user_id','$user_ar_fullname')";
$excecuteMetaDataQuery = mysqli_query($con,$addProjectMetaDataQuery);

//////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////

$addProjectDataQuery = "INSERT INTO project_data VALUES (NULL,'$uniq_id','$projectTitle','$projectInfo','$projectRequirments','$workPhase','$prototypeDelivery','$finalVersionDelivery')";
$excecuteDataQuery = mysqli_query($con,$addProjectDataQuery);


//////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////
// Work Models Upload Process //

$workModel_dir = "../../uploads/Work Models/";
$workModel = $_FILES["workModel"]["name"];

$workModel_FileType = strtolower(pathinfo($workModel,PATHINFO_EXTENSION));
$workModel_filename = $uniq_id.'_'.$add_date.'.'.$workModel_FileType;

$workModelUploadFullPath = $workModel_dir.$workModel_filename;

move_uploaded_file($_FILES["workModel"]["tmp_name"], $workModelUploadFullPath);
///////////////////////////////////////////////////////////////////////


////////////////////////////////////////////////////////
// agreement Atach Upload Process //

$agreementAtach_dir = "../../uploads/Agreement Attaches/";
$agreementAtach = $_FILES["agreementAtach"]["name"];

$agreementAtach_FileType = strtolower(pathinfo($agreementAtach,PATHINFO_EXTENSION));
$agreementAtach_filename = $uniq_id.'_'.$add_date.'.'.$agreementAtach_FileType;
$agreementAtachUploadFullPath = $agreementAtach_dir.$agreementAtach_filename;

move_uploaded_file($_FILES["agreementAtach"]["tmp_name"], $agreementAtachUploadFullPath);
///////////////////////////////////////////////////////////////////////


////////////////////////////////////////////////////////
// User Experiance & Enternal Functions Upload Process //

$userExp_dir = "../../uploads/User Experiance & Enternal Functions/";
$userExp = $_FILES["userExp"]["name"];

$userExp_FileType = strtolower(pathinfo($userExp,PATHINFO_EXTENSION));
$userExp_filename = $uniq_id.'_'.$add_date.'.'.$userExp_FileType;
$userExpUploadFullPath = $userExp_dir.$userExp_filename;

move_uploaded_file($_FILES["userExp"]["tmp_name"], $userExpUploadFullPath);
///////////////////////////////////////////////////////////////////////


////////////////////////////////////////////////////////
// Technical Attaches Upload Process //

$technicalAttach_dir = "../../uploads/Technical Attaches/";
$technicalAttach = $_FILES["technicalAttach"]["name"];

$technicalAttach_FileType = strtolower(pathinfo($technicalAttach,PATHINFO_EXTENSION));
$technicalAttach_filename = $uniq_id.'_'.$add_date.'.'.$technicalAttach_FileType;
$technicalAttachUploadFullPath = $technicalAttach_dir.$technicalAttach_filename;

move_uploaded_file($_FILES["technicalAttach"]["tmp_name"], $technicalAttachUploadFullPath);
///////////////////////////////////////////////////////////////////////


////////////////////////////////////////////////////////
// Privacy Policy Upload Process //

$privacyPolicy_dir = "../../uploads/Privacy Policy/";
$privacyPolicy = $_FILES["privacyPolicy"]["name"];

$privacyPolicy_FileType = strtolower(pathinfo($privacyPolicy,PATHINFO_EXTENSION));
$privacyPolicy_filename = $uniq_id.'_'.$add_date.'.'.$privacyPolicy_FileType;
$privacyPolicyUploadFullPath = $privacyPolicy_dir.$privacyPolicy_filename;

move_uploaded_file($_FILES["privacyPolicy"]["tmp_name"], $privacyPolicyUploadFullPath);
///////////////////////////////////////////////////////////////////////

$addProjectFilesQuery = "INSERT INTO project_files VALUES (NULL,'$uniq_id','$workModelUploadFullPath','$agreementAtachUploadFullPath','$userExpUploadFullPath','$technicalAttachUploadFullPath','$privacyPolicyUploadFullPath')";
$excecuteFilesQuery = mysqli_query($con,$addProjectFilesQuery);

if ($excecuteFilesQuery) {
	echo 'Done';
}



?>