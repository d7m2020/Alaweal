
<?php Session_start();?>
<?php ob_start();
include "./include/templates/header.php";?>

<?php include "./conect.php";?>
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
  
        
            <form method="post" >
                <div class="col-lg-6 d-flex justify-content-center justify-content-lg-end align-items-center px-lg-5" data-aos="fade-right">
                    <div style="width:90%">
                       
                         
                           
                               
                                    <div class="form-group py-1">
                                        <input type="text" class="form-control form-control-input" placeholder="الاسم باللغة العربية" name="nameAR"> 
                                 
            
                                    </div>     
                                    <div class="form-group py-1">
                                       <input type="text" class="form-control form-control-input" name="nameEN" placeholder="الاسم باللغة الانجليزية "  >
                                        </div>                                 
                                
                             <div class="row" >
                            <div class="col-lg-6">
                            <div class="form-group py-2">
                             
                                  
                                </div>  
                                </div>
                             <div class="col-lg-6">
                            <div class="form-group py-2">
                                <!--  <asp:ImageButton ID="ImageButton1" runat="server" ImageUrl="~/assets/images/calendar.jpg" OnClick="imgBtnDate_Click"  Height="31px" style="margin-top: 16" Width="19px"/>

                               
                                 <script  type="text/javascript" >

                               --> 
                                 <!--<script  type="text/javascript" >

                                            $(function () {
                                                $("#<%=txtBirthDate.ClientID%>").datepicker(
                                                 {
                                                        
                                                     //minDate: 0,
                                                     changeMonth: true,
                                                     changeYear: true,
                                                     numberOfMonths: 1,
                                                    // showButtonPanel: true,
                                                     yearRange: '1970:2021'
                                                 });
                                         });
                                        -->
                                        
                                 </script>  -->
                                <input type="text"   class="form-control form-control-input" placeholder="تاريخ الميلاد" name="txtBirthDate"  >
                                
                                 <!-- <asp:Button ID="Button1" runat="server" Height="31px" style="margin-top: 16" Text=" " Width="19px"  OnClick="imgBtnDate_Click" />-->
                               <!-- <asp:Calendar ID="cldDateOfBirth" runat="server" Height="41px" Width="191px" OnSelectionChanged="cldDateOfBirth_SelectionChanged"></asp:Calendar>-->
                            </div>  
                                 </div>
                                  <div class="col-lg-6">
                            <div class="form-group py-2">

                               <select class="form-control form-control-input"   >
                        <option Value="السعودية">السعودية</option>
                        <option Value="اليمن">اليمن</option>
                                        </select>
                               
                                  </div>  
                                 </div>
                                  <div class="col-lg-6">
                            <div class="form-group py-2">
                            <select class="form-control form-control-input"   >
                            <option Value="السعودية">السعودية</option>
                        <option Value="اليمن">اليمن</option>
                                        </select>  
                      
                      </div>  
                                </div>

                                   <div class="col-lg-6">
                            <div class="form-group py-2">
                                <input type="text" class="form-control form-control-input" placeholder=" رقم الجواز" name="txtID">
                         
                            </div>  
                                 </div>
                                  <div class="col-lg-6">
                            <div class="form-group py-2">
                                <input type="text" class="form-control form-control-input" placeholder="تاريخ انتهاء الجواز " name="txtIDExpireDate" >
                         
                            </div>  
                                 </div>
                                 
                                <!--   <div class="col-lg-6">
                            <div class="form-group py-2">
                                <asp:TextBox class="form-control form-control-input" placeholder="عنوان السكن" ID="txtHomeAdress" runat="server"></asp:TextBox>
                         
                            </div>  
                                 </div>-->
                                  <div class="col-lg-6">
                            <div class="form-group py-2">
                                <input type="text" class="form-control form-control-input" placeholder="رقم الجوال " name="txtPhone" >
                         
                            </div>  
                                 </div>
                                 </div>
                           
                            <div class="form-group py-1">
                                <input type="text" class="form-control form-control-input" placeholder=" البريدالالكتروني " name="txtEmail" >noemail@hotmail.com
                                </div>

                             <div class="flex-grow-1">
                                    <h5>معلومات شهادة الثانوية العامة</h5>
                                    </div>
                       
                           <div class="row" >
                            <div class="col-lg-6">
                            <div class="form-group py-2">
                                 <span class="para para-light py-3">نوع الشهادة</span>
                                 <input type="radio"  name="contact" id="contact_email" value="1" />
علمي

<input   type="radio" name="contact" id="contact_phone" value="2" />
ادبي
                                

                                   </div>  
                                </div>
                             <div class="col-lg-6">
                            <div class="form-group py-2">
                                 <span class="para para-light py-3">الدولة </span>
                                
                               <select class="form-control form-control-input"   >
                        <option Value="السعودية">السعودية</option>
                        <option Value="اليمن">اليمن</option>
                                        </select>
                                  </div>  
                                 </div>
                                  <div class="col-lg-6">
                            <div class="form-group py-2">
                               
                                
                               <select class="form-control form-control-input"   >
                        <option Value="الرياض">الرياض</option>
                        <option Value="المكلام">المكلا</option>
                                        </select>
                            </div>  
                                 </div>
                                  <div class="col-lg-6">
                            <div class="form-group py-2">
                             <input type="text" class="form-control form-control-input" placeholder=" سنة التخرج " name="txtGraduationYear" >
                         
                                </div>  
                                </div>

                                   <div class="col-lg-6">
                            <div class="form-group py-2">
                                <input type class="form-control form-control-input" placeholder="  النسبة" name="txtRate" >
                         
                            </div>  
                                 </div>
                                  <div class="col-lg-6">
                            <div class="form-group py-2">
                            <select class="form-control form-control-input"   >
                        <option Value="الرياض">الرياض</option>
                        <option Value="المكلام">المكلا</option>
                                        </select>
                            </div>  
                                 </div>
                                 
                                   <div class="col-lg-6">
                            <div class="form-group py-2">
                            <select class="form-control form-control-input"   >
                        <option Value="الرياض">الرياض</option>
                        <option Value="المكلام">المكلا</option>
                                        </select>
                            </div>  
                                 </div>
                               
                             
                                 </div>
                                <div class="my-3">
                                    <Button class="btn-secondary">تسجيل</button
                                     </div></form>
                    <!-- end of div -->
                </div> <!-- end of col -->
                <!--<div class="col-lg-6 d-flex " data-aos="fade-down">
                    <img class="img-fluid d-none d-lg-block" src="./assets/images/contact.jpg" alt="contact">        
                </div>--> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
   </div>



   <?php include "./include/templates/footer.php"; ?>

   <?php
include "./include/templates/footer.php";
?>

