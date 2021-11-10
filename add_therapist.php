<?php
session_start();
require_once './config/config.php';
require_once './includes/auth_validate.php';

//serve POST method, After successful insert, redirect to therapists.php page.
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    $data_to_store = array_filter($_POST);

    //Insert timestamp
    $data_to_store['created_at'] = date('Y-m-d H:i:s');
    $db = getDbInstance();
    
    $last_id = $db->insert(implode(['therapists'], $data_to_store));

    if($last_id)
    {
    	$_SESSION['success'] = "Therapist added successfully!";
    	header('location: therapists.php');
    	exit();
    }
    else
    {
        echo 'insert failed: ' . $db->getLastError();
        exit();
    }
}

$edit = false;

require_once 'includes/header.php'; 
?>
<div id="page-wrapper">
<div class="row">
     <div class="col-lg-12">
            <h2 class="page-header">Add Therapists</h2>
        </div>
        
</div>
    <form class="form" action="" method="post"  id="therapist_form" enctype="multipart/form-data">
       <?php  include_once('./forms/therapist_form.php'); ?>
    </form>
</div>


<script type="text/javascript">
$(document).ready(function(){
   $("#therapist_form").validate({
       rules: {
            f_name: {
                required: true,
                minlength: 3
            },
            l_name: {
                required: true,
                minlength: 3
            },   
        }
    });
});
</script>

<?php include_once 'includes/footer.php'; ?>