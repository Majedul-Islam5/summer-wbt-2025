<?php
    include_once ('data.php');

    $p_id=$_POST['p_id'];
    

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {

        $fname=$_POST['name'];
        $fb_price=$_POST['b_price'];
        $fs_price=$_POST['s_price'];
        
        $display=isset($_POST['show']) ? "display" : "hide";

        $result=$conn->query("update products set name='$fname', b_price='$fb_price', s_price='$fs_price', display='$display') where p_id='$p_id'"); 
    }
?>