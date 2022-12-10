<?php Session_start();?>
<?php ob_start();
include "./include/templates/header.php";?>

<?php include"connectBymysqli.php";
?>
    <header class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h1> اضافة مدرب </h1>
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
                         $query="INSERT INTO course_instructor (id,instructor_first_name,instructor_second_name,
                         instructor_last_name,instructor_mobile)
                         VALUES(null,'$firstName',null,'$lastName','$mobile')";
                         $res=mysqli_query($conn,$query);
                         if(isset($res)){
                         $success="<div class='alert-success'>  تم التسجيل بنجاح   </div>";
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
                                        <input type="text" name="firstName" class="form-control form-control-input"  placeholder=" الاسم الاول  " />           
                                    </div>     
                                    <div class="form-group py-1">
                                        <input type="text" name="lastName" class="form-control form-control-input"  placeholder=" الاسم الاخير " />           
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