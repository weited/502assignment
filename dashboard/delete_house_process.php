<?php
    include('session.php');
    include('../db_conn.php');

if (isset($_GET['del'])){
$id = $_GET['del'];
mysqli_query($mysqli,"DELETE from house Where house_id =$id ");

if ($session_access == '1'){
    echo "<script type='text/javascript'>
    alert('Deleted successful');
    window.location = '../hostdashboard/accommdations.php';
</script>";
} else if ($session_access == '2'){
        echo "<script type='text/javascript'>
    alert('Deleted successful');
    window.location = '../admindashboard/accommdations.php';
    </script>";
};

};
?>