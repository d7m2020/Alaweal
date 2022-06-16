<?php include "./include/templates/header.php";?>

    <header class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h1> تسجيل الطالب</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->
 <!-- Basic -->
  
        <div class="container-fluid" >
            <div class="row">
                <div class="col-lg-6 d-flex justify-content-center justify-content-lg-end align-items-center px-lg-5" data-aos="fade-right">
                    <div style="width:90%">
                       
                         <!-- <asp:Label ID="lbl" runat="server" ></asp:Label> -->
                           
                               
                                    <div class="form-group py-1">
                                        <asp:TextBox ID="txtNameAr" runat="server" class="form-control form-control-input"  placeholder="الاسم باللغة العربية"></asp:TextBox>   
                                       <asp:RegularExpressionValidator ID="RegularExpressionValidator2" runat="server" ErrorMessage="يجب ان يكون باللغة العربية"  ControlToValidate="txtNameAr" ValidationExpression="^[\u0600-\u065F\u066A-\u06EF\u06FA-\u06FFa ]+[\u0600-\u065F\u066A-\u06EF\u06FA-\u06FFa ]*$"></asp:RegularExpressionValidator>
                       
                                        <asp:RequiredFieldValidator  ID="RequiredFieldValidator1" runat="server" ErrorMessage="الحقل مطلوب" ControlToValidate="txtNameAr"></asp:RequiredFieldValidator>
                                    </div>     
                                    <div class="form-group py-1">
                                       <asp:TextBox class="form-control form-control-input" id="txtNameEn" placeholder="الاسم باللغة الانجليزية " runat="server" ></asp:TextBox>
                                        <asp:RegularExpressionValidator ID="RegularExpressionValidator1" runat="server" ErrorMessage="يجب ان يكون باللغة الانلجيزية"  ControlToValidate="txtNameEn" ValidationExpression="^[A-Za-z ]+$"></asp:RegularExpressionValidator>
                                        <asp:RequiredFieldValidator  ID="RequiredFieldValidator2" runat="server" ErrorMessage="الحقل مطلوب" ControlToValidate="txtNameEn"></asp:RequiredFieldValidator>
                                    </div>                                 
                                
                             <div class="row" >
                            <div class="col-lg-6">
                            <div class="form-group py-2">
                             <asp:DropDownList class="form-control form-control-input" ID="DlNationality" runat="server"   DataSourceID="SqlNationality" DataTextField="Nationality_name_ar" DataValueField="ID">
                    </asp:DropDownList>
                                  <asp:SqlDataSource ID="SqlNationality" runat="server" ConnectionString="<%$ ConnectionStrings:modernalawaelConnectionString %>" SelectCommand="SELECT [ID], [Nationality_name_ar] FROM [Nationalities]"></asp:SqlDataSource>
                        
                                </div>  
                                </div>
                             <div class="col-lg-6">
                            <div class="form-group py-2">
                                <!--  <asp:ImageButton ID="ImageButton1" runat="server" ImageUrl="~/assets/images/calendar.jpg" OnClick="imgBtnDate_Click"  Height="31px" style="margin-top: 16" Width="19px"/>
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
                                        
                                 </script>  
                                <asp:TextBox   class="form-control form-control-input" placeholder="تاريخ الميلاد" ID="txtBirthDate" runat="server" ></asp:TextBox>
                                
                                 <!-- <asp:Button ID="Button1" runat="server" Height="31px" style="margin-top: 16" Text=" " Width="19px"  OnClick="imgBtnDate_Click" />-->
                               <!-- <asp:Calendar ID="cldDateOfBirth" runat="server" Height="41px" Width="191px" OnSelectionChanged="cldDateOfBirth_SelectionChanged"></asp:Calendar>-->
                            </div>  
                                 </div>
                                  <div class="col-lg-6">
                            <div class="form-group py-2">

                               <asp:DropDownList class="form-control form-control-input" ID="drblistBirthPlace" runat="server"  >
                        <asp:ListItem Value="السعودية">السعودية</asp:ListItem>
                        <asp:ListItem Value="اليمن">اليمن</asp:ListItem>
                    </asp:DropDownList>
                               
                                  </div>  
                                 </div>
                                  <div class="col-lg-6">
                            <div class="form-group py-2">
                             <asp:DropDownList class="form-control form-control-input" ID="drpListStatus" runat="server"  DataSourceID="SqlGenders" DataTextField="Gender_Descreption_Ar" DataValueField="Gender_ID">
                               
                      
                    </asp:DropDownList>
                                <asp:SqlDataSource ID="SqlGenders" runat="server" ConnectionString="<%$ ConnectionStrings:modernalawaelConnectionString %>" SelectCommand="SELECT [Gender_ID], [Gender_Descreption_Ar] FROM [Genders]"></asp:SqlDataSource>
                                </div>  
                                </div>

                                   <div class="col-lg-6">
                            <div class="form-group py-2">
                                <asp:TextBox class="form-control form-control-input" placeholder=" رقم الجواز" ID="txtID" runat="server"></asp:TextBox>
                         
                            </div>  
                                 </div>
                                  <div class="col-lg-6">
                            <div class="form-group py-2">
                                <asp:TextBox class="form-control form-control-input" placeholder="تاريخ انتهاء الجواز " ID="txtIDExpireDate" runat="server"></asp:TextBox>
                         
                            </div>  
                                 </div>
                                 
                                <!--   <div class="col-lg-6">
                            <div class="form-group py-2">
                                <asp:TextBox class="form-control form-control-input" placeholder="عنوان السكن" ID="txtHomeAdress" runat="server"></asp:TextBox>
                         
                            </div>  
                                 </div>-->
                                  <div class="col-lg-6">
                            <div class="form-group py-2">
                                <asp:TextBox class="form-control form-control-input" placeholder="رقم الجوال " ID="txtPhone" runat="server"></asp:TextBox>
                         
                            </div>  
                                 </div>
                                 </div>
                           
                            <div class="form-group py-1">
                                <asp:TextBox class="form-control form-control-input" placeholder=" البريدالالكتروني " ID="txtEmail" runat="server">noemail@hotmail.com</asp:TextBox>
                                <asp:RegularExpressionValidator ID="RegularExpressionValidator3" runat="server" ErrorMessage="البريد الالكتروني غير صحيح" ControlToValidate="txtEmail" ValidationExpression="\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*"></asp:RegularExpressionValidator>
                                </div>

                             <div class="flex-grow-1">
                                    <h5>معلومات شهادة الثانوية العامة</h5>
                                    </div>
                       
                           <div class="row" >
                            <div class="col-lg-6">
                            <div class="form-group py-2">
                                 <span class="para para-light py-3">نوع الشهادة</span>
                                <asp:RadioButtonList class="form-control form-control-input" ID="RadioHighSchool_id" runat="server" placeholder="تاريخ الميلاد" ToolTip="نوع الشهادة" RepeatDirection="Horizontal" DataSourceID="SqlHigh_SchoolDataSource" DataTextField="nameAr" DataValueField="id">
                                    <asp:ListItem Value="1">علمي</asp:ListItem>
                                    <asp:ListItem Value="2">أدبي</asp:ListItem>
                                </asp:RadioButtonList>

                                <asp:SqlDataSource runat="server" ID="SqlHigh_SchoolDataSource" ConnectionString='<%$ ConnectionStrings:modernalawaelConnectionString %>' SelectCommand="SELECT [id], [nameAr] FROM [High_School]"></asp:SqlDataSource>
                            </div>  
                                </div>
                             <div class="col-lg-6">
                            <div class="form-group py-2">
                                 <span class="para para-light py-3">الدولة </span>
                                <asp:DropDownList class="form-control form-control-input" ID="drpLCountry" runat="server" DataSourceID="SqlDcountryDataSource" DataTextField="Country_name_ar" DataValueField="ID" AutoPostBack="True" >
                        <asp:ListItem Value="1">السعودية</asp:ListItem>
                        <asp:ListItem Value="2">اليمن</asp:ListItem>
                    </asp:DropDownList>
                                 <asp:SqlDataSource ID="SqlDcountryDataSource" runat="server" ConnectionString="<%$ ConnectionStrings:modernalawaelConnectionString %>" SelectCommand="SELECT [ID], [Country_name_ar] FROM [Countries]"></asp:SqlDataSource>
                            </div>  
                                 </div>
                                  <div class="col-lg-6">
                            <div class="form-group py-2">
                               
                                <asp:DropDownList class="form-control form-control-input" ID="drpLCity" runat="server" DataSourceID="SqlCityDataSource" DataTextField="City_name_ar" DataValueField="ID" >
                       <asp:ListItem Value="0">اختر المدينة</asp:ListItem>
                                    <asp:ListItem Value="1">الرياض</asp:ListItem>
                        <asp:ListItem Value="2">المكلا</asp:ListItem>
                    </asp:DropDownList>
                                <asp:SqlDataSource ID="SqlCityDataSource" runat="server" ConnectionString="<%$ ConnectionStrings:modernalawaelConnectionString %>" SelectCommand="SELECT [City_name_ar], [ID] FROM [Cities] WHERE ([Country_id] = @Country_id)">
                                    <SelectParameters>
                                        <asp:ControlParameter ControlID="drpLCountry" Name="Country_id" PropertyName="SelectedValue" Type="Int32" />
                                    </SelectParameters>
                                </asp:SqlDataSource>
                            </div>  
                                 </div>
                                  <div class="col-lg-6">
                            <div class="form-group py-2">
                             <asp:TextBox class="form-control form-control-input" placeholder=" سنة التخرج " ID="txtGraduationYear" runat="server"></asp:TextBox>
                         
                                </div>  
                                </div>

                                   <div class="col-lg-6">
                            <div class="form-group py-2">
                                <asp:TextBox class="form-control form-control-input" placeholder="  النسبة" ID="txtRate" runat="server"></asp:TextBox>
                         
                            </div>  
                                 </div>
                                  <div class="col-lg-6">
                            <div class="form-group py-2">
                                <asp:DropDownList class="form-control form-control-input" ID="drpCollage" runat="server" DataSourceID="SqlGollageDataSource" DataTextField="Departmente_name_ar"  DataValueField="Department_id" AutoPostBack="true"></asp:DropDownList>
                                <asp:SqlDataSource runat="server" ID="SqlGollageDataSource" ConnectionString='<%$ ConnectionStrings:modernalawaelConnectionString %>' SelectCommand="SELECT [Department_id], [Departmente_name_ar] FROM [Departments] WHERE ([specilization_ID] = @specilization_ID)">
                                    <SelectParameters>
                                        <asp:Parameter DefaultValue="1" Name="specilization_ID" Type="Int32" />
                                    </SelectParameters>
                                </asp:SqlDataSource>
                            </div>  
                                 </div>
                                 
                                   <div class="col-lg-6">
                            <div class="form-group py-2">
                                <asp:DropDownList  class="form-control form-control-input" ID="drbMajor" runat="server" DataSourceID="SqlMajorDataSource" DataTextField="Sector_name_ar" DataValueField="Sector_ID"></asp:DropDownList>
                                <asp:SqlDataSource runat="server" ID="SqlMajorDataSource" ConnectionString='<%$ ConnectionStrings:modernalawaelConnectionString %>' SelectCommand="SELECT [Sector_name_eng], [Sector_ID], [Sector_name_ar] FROM [Departments_Sectors] WHERE ([department_ID] = @department_ID)">
                                    <SelectParameters>
                                        <asp:ControlParameter ControlID="drpCollage" PropertyName="SelectedValue" Name="department_ID" Type="Int32"></asp:ControlParameter>
                                    </SelectParameters>
                                </asp:SqlDataSource>
                            </div>  
                                 </div>
                               
                             
                                 </div>
                                <div class="my-3">
                                    <asp:Button class="btn-secondary" ID="btnInsert" runat="server" Text="تسجيل" OnClick="btnInsert_Click" />
                                    <asp:ValidationSummary ID="ValidationSummary1" runat="server" />
            </div>
                    <!-- end of div -->
                </div> <!-- end of col -->
                <!--<div class="col-lg-6 d-flex " data-aos="fade-down">
                    <img class="img-fluid d-none d-lg-block" src="./assets/images/contact.jpg" alt="contact">        
                </div>--> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
   </div>

   <?php
include "./include/templates/footer.php";
?>
