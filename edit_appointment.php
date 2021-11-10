<?php
session_start();
require_once './config/config.php';
require_once 'includes/auth_validate.php';

$appointment_id = filter_input(INPUT_GET, 'appointment_id', FILTER_VALIDATE_INT);
$operation = filter_input(INPUT_GET, 'operation',FILTER_SANITIZE_STRING); 
($operation == 'edit') ? $edit = true : $edit = false;
 $db = getDbInstance();

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    $appointment_id = filter_input(INPUT_GET, 'appointment_id', FILTER_SANITIZE_STRING);

    $data_to_update = filter_input_array(INPUT_POST);
    
    $data_to_update['updated_at'] = date('Y-m-d H:i:s');
    $db = getDbInstance();
    $db->where('id',$appointment_id);
    $stat = $db->update('appointments', $data_to_update);

    if($stat)
    {
        $_SESSION['success'] = "Appointment updated successfully!";
        header('location: appointments.php');
        exit();
    }
}

if($edit)
{
    $db->where('id', $appointment_id);
    $appointment = $db->getOne("appointments");
}
?>

<?php
    include_once 'includes/header.php';
?>
<div id="page-wrapper">
    <div class="row">
        <h2 class="page-header">Update Appointment</h2>
    </div>
    <!-- Flash messages -->
    <?php
        include('./includes/flash_messages.php')
    ?>

    <form class="" action="" method="post" enctype="multipart/form-data" id="contact_form">
        
        <?php
            //Include the common form for add and edit  
            require_once('./forms/appointment_form.php'); 
        ?>
    </form>
</div>

<?php include_once 'includes/footer.php'; ?>