<!DOCTYPE html>
<html>
  <head>


    <script>

function generateReportA(){
   document.forms['main'].action = 'register_blood.php';
   document.forms['main'].submit();
}

function generateReportB(){
   document.forms['main'].action = 'remove_blood.php';
   document.forms['main'].submit();
}

function generateReportC(){
   document.forms['main'].action = 'view_all_blood_record.php';
   document.forms['main'].submit();
}

</script>


    <title>BLOOD_MANAGEMENT_SYSTEM</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css" />
  </head>
  <body>
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>BLOOD GROUP SYSTEM</h1>
           
          </div>
          <div class="panel-body">
            <form name="main" action="" method="post">
              
               
             
               
              <div class="form-group summt-btns" style="display:flex; justify-content: space-around;">
               <button type="button" name="reb" value="reb" class="btn btn-primary col-xs-4" onclick="generateReportA();">REGISTER BLOOD</button> 

              </div>

              
              <div class="form-group summt-btns" style="display:flex; justify-content: space-around;">
               <button type="button" name="rob" value="rob" class="btn btn-primary col-xs-4" onclick="generateReportB();">REMOVE BLOOD</button> 

              </div>

               <div class="form-group summt-btns" style="display:flex; justify-content: space-around;">
               <button type="button" name="vbr" value="vbr" class="btn btn-primary col-xs-4" onclick="generateReportC();">VIEW ALL RECORDS</button> 

              </div>

            </form>
          </div>
        </div>
      </div>
    </div> 
  </body>
</html>
