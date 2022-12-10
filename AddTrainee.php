<?php Session_start();?>
<?php ob_start();
include "./include/templates/header.php";?>

<?php include"connectBymysqli.php";
?>
    <header class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h1> اضافة متدرب </h1>
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
                     $trainee_ID=$_POST["trainee_ID"];
                     $trainee_first_Name=$_POST["trainee_first_Name"];
                     $trainee_last_name=$_POST["trainee_last_name"];
                     $trainee_gender=$_POST["trainee_gender"];
                     $trainee_mobile=$_POST["trainee_mobile"];

                     if(empty($trainee_ID)||empty($trainee_first_Name)||empty($trainee_last_name)){
                         $error= "<div class='alert-danger'> فضلا ادخل كامل الحقول </div>";
                     }
                     else{
                         $query="INSERT INTO course_trainee (id,trainee_ID,trainee_first_Name,
                         trainee_second_Name,trainee_last_name,trainee_mobile,trainee_gender)
                         VALUES(null,'$trainee_ID','$trainee_first_Name',null,'$trainee_last_name',
                         '$trainee_mobile','$trainee_gender')";
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
                                        <input type="text" name="trainee_ID" class="form-control form-control-input"  placeholder=" رقم الجواز  " />           
                                    </div>    
                                    <div class="form-group py-1">
                                        <input type="text" name="trainee_first_Name" class="form-control form-control-input"  placeholder=" الاسم الاول  " />           
                                    </div>   
                                    <div class="form-group py-1">
                                        <input type="text" name="trainee_last_name" class="form-control form-control-input"  placeholder=" اسم العائلة  " />           
                                    </div>    
                                    <div class="form-group py-1">
                                    <input type="radio" name="trainee_gender" class="form-check-input" id="flexRadioDefault1"
                                    checked
                                    <?php if (isset($trainee_gender) && $trainee_gender=="1") echo "checked";?>
                                    value="1"><label class="form-check-label" for="flexRadioDefault1">
                                            ذكر
                                        </label>
                                    <input type="radio" name="trainee_gender" class="form-check-input" id="flexRadioDefault2" 
                                    <?php if (isset($trainee_gender) && $trainee_gender=="2") echo "checked";?>
                                    value="2"><label class="form-check-label" for="flexRadioDefault2" >
                                            انثى
                                        </label>      
                                </div>     <div class="form-group py-1">
                                        <input type="text" name="trainee_mobile" class="form-control form-control-input"  placeholder=" رقم الجوال " />           
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