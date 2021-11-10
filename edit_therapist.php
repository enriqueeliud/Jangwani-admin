<?php
session_start();
require_once './config/config.php';
require_once 'includes/auth_validate.php';


$therapist_id = filter_input(INPUT_GET, 'therapist_id', FILTER_VALIDATE_INT);
$operation = filter_input(INPUT_GET, 'operation',FILTER_SANITIZE_STRING); 
($operation == 'edit') ? $edit = true : $edit = false;
 $db = getDbInstance();

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    $therapist_id = filter_input(INPUT_GET, 'therapist_id', FILTER_SANITIZE_STRING);

    //Get input data
    $data_to_update = filter_input_array(INPUT_POST);
    
    $data_to_update['updated_at'] = date('Y-m-d H:i:s');
    $db = getDbInstance();
    $db->where('id',$therapist_id);
    $stat = $db->update('therapists', $data_to_update);

    if($stat)
    {
        $_SESSION['success'] = "Therapist updated successfully!";
      
        header('location: therapists.php');
       
        exit();
    }
}


if($edit)
{
    $db->where('id', $therapist_id);
    //Get data to pre-populate the form.
    $therapist = $db->getOne("therapists");
}
?>


<?php
    include_once 'includes/header.php';
?>
<div id="page-wrapper">
    <div class="row">
        <h2 class="page-header">Update Therapist</h2>
    </div>
    <!-- Flash messages -->
    <?php
        include('./includes/flash_messages.php')
    ?>

    <form class="" action="" method="post" enctype="multipart/form-data" id="contact_form">
        
        <?php
            require_once('./forms/therapist_form.php'); 
        ?>
    </form>
</div>




<?php include_once 'includes/footer.php'; ?>