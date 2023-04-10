
<?php
    if(isset($_SESSION['message'])) :
?>




        <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Hey!</strong> <?php $_SESSION['message']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

<?php
    endif ;
?>    

        <link rel="stylesheet" type="text/css" href="../boot/css/bootstrap.css">  
        <script src="../master/boot/js/bootstrap.js"></script>     
