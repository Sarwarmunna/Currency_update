 <!--<script src="js2/sweetalert.min.js"></script>-->
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php
    if (isset($_SESSION['status']) && $_SESSION['status'] !='') { ?>
         <script>
             
             swal({
                  title: "<?php echo $_SESSION['status']; ?>",
                  icon: "<?php echo $_SESSION['status_code']; ?>",
                  button: "done"
             }, function(){
      window.location.href = "https://sarwar35.com/currency_management/";
                });
         </script>
     <?php 
     unset($_SESSION['status']);
 } 



    ?>