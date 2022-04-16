<?php include "./include/templates/header.php"; ?>

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
                       
                         <!-- <asp:Label ID="lbl"  ></asp:Label> -->
                           
                               
                                    <div class="form-group py-1">
                                        <asp:TextBox ID="txtUserName"  class="form-control form-control-input"  placeholder=" اسم المستخدم "></asp:TextBox>            
                                    </div>     
                                    <div class="form-group py-1">
                                       <asp:TextBox class="form-control form-control-input" id="txtpass" placeholder="كلمة المرور" runat="server" TextMode="Password" ></asp:TextBox>
                                       
                                        <div >
                                    <asp:Button  class="btn-secondary" ID="btnLogin" Text="دخول"  />
                                            </div>
                                        <div>
                                            <asp:Label ID="lblMsg"  ForeColor="Red" ></asp:Label>
            </div></div>                                 
                                </div>
                </div>
            </div>
      </div>

      <?php include "./include/templates/footer.php"; ?>