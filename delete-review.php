<?php 

    include('./config/constants.php');

    echo $id = $_GET['id'];

    $sql = "DELETE FROM review WHERE id=$id";

    $res = mysqli_query($conn, $sql);

    if($res == TRUE)
    {
        //echo 'admin deleted';
        $_SESSION['delete'] = "<div class='success'>ADMIN DELETED SUCCESSFULLY</div>";
        header('location:'.SITEURL.'./watch.php');
    }
    else
    {
        //echo '  failed to delete admin';
        $_SESSION['delete'] = "<div class='error'>DELETE FAILED, TRY AGAIN LATER</div>";
        header('location:'.SITEURL.'./watch.php');
    }
?>