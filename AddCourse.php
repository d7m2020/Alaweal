<?php Session_start();?>
<?php ob_start();
include "./include/templates/header.php";?>

<?php include"connectBymysqli.php";
?>
    <header class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h1>  اضافة دورة تدريبية</h1>
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
                      if(isset($_POST['reg'])){
                     $firstName=$_POST["firstName"];
                     $lastName=$_POST["lastName"];
                     $mobile=$_POST["mobile"];

                     if(empty($firstName)||empty($lastName)||empty($mobile)){
                         $error= "<div class='alert-danger'> فضلا ادخل كامل الحقول </div>";
                     }
                     else{
                         $query="INSERT INTO course (id, course_name, course_Date, Name2)
                          VALUES (NULL, '', '', NULL)
                         ";
                         $res=mysqli_query($conn,$query);
                         if(isset($res)){
                         $success="<div class='alert-success'>  تمت اضافة الدورة بنجاح   </div>";
                         }
                     }
                    }
                              ?>
                  
                         <!-- <asp:Label ID="lbl"  ></asp:Label> -->
                         <?php if(isset($error)){
                                   echo $error;
                               }
                               elseif(isset($success)){
                                   echo $success;
                               }?>
                           <form  action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
                             
                                    <div class="form-group py-1">
                                        <input type="text" name="firstName" class="form-control form-control-input"  placeholder=" اسم الدورة   " />           
                                    </div>     
                                    <div class="form-group py-1">
                                        <input type="text" name="lastName" class="form-control form-control-input"  placeholder=" تاريخ الدورة " />           
                                    </div>     <div class="form-group py-1">
                                        <input type="text" name="mobile" class="form-control form-control-input"  placeholder=" رقم الجوال " />           
                                    </div>   
                                        <div >
                                            <input class="btn-secondary" type="submit" name="reg" value="تسجيل">
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