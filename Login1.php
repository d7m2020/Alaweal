﻿<?php include "./include/templates/header.php"; ?>

<?php include "./conect.php"; ?>
    <header class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h1> صفحة الدخول</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->
 <!-- Basic --> 
 
    <div  class="container-fluid" >
    
            <div class="row">
                <div class="col-lg-6 d-flex justify-content-center justify-content-lg-end align-items-center px-lg-5" data-aos="fade-right">
                    <div style="width:90%">

                    <?php
                    if($_SERVER['REQUEST_METHOD']=="POST"){
                        $t1=$_POST['s1'];
                        echo $t1;
                    }else{
                        echo "test";
                    }


?>
                  
                         <!-- <asp:Label ID="lbl"  ></asp:Label> -->
                         
                           <form  action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                               
                                    <div class="form-group py-1">
                                        <input type="text" name="s1" class="form-control form-control-input"  placeholder=" اسم المستخدم " />           
                                    </div>     
                                    <!-- <div class="form-group py-1">
                                       <input type="password" name="pass" class="form-control form-control-input"  placeholder="كلمة المرور"  />
                                    </div> -->
                                        <div >
                                            <input class="btn-secondary" type="submit" value="Login">
                                    <!-- <asp:Button   ID="btnLogin" Text="دخول"  /> -->
                                            </div>
                        </form>
                                        <div>
                                            <!-- <asp:Label ID="lblMsg"  ForeColor="Red" ></asp:Label> -->
            </div></div>                                 
                                </div>
                </div>
            </div>
      </div>

      <?php include "./include/templates/footer.php"; ?>