<!DOCTYPE html>
<html>
  <head>


    <title>BLOOD-RECORDS</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css" />
  </head>
  <body>
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>ENTER NEW BLOOD RECORD</h1>
           
          </div>
          <div class="panel-body">
            <form name="main" action="view_blood_record.php" method="post">
              <div class="form-group">
                <label for="idnumber">ENTER DONOR`S NAME</label>
                <input
                  type="text"
                  class="form-control"
                  id="dname"
                  name="dname"
                  required="required" 
                  pattern="[A-Za-z0-9]{1,20}"
                />
              </div>
               
              </br>
               <div class="form-group">
                <label for="blood_group">SELECT BLOOD GROUP</label>
                  <SELECT type="text" class="form-control" id="blood_group" name="blood_group" >
                    
                    <OPTION value="A+" >A+</OPTION>
                    <OPTION value="A-" >A-</OPTION>
                    <OPTION value="B+" >B+</OPTION>
                    <OPTION value="B-" >B-</OPTION>
                    <OPTION value="O+" >O+</OPTION>
                    <OPTION value="O-" >O-</OPTION>
                    <OPTION value="AB+" >AB+</OPTION>
                    <OPTION value="AB-" >AB-</OPTION>

      
                 </SELECT>
              </br>

               <div class="form-group">
                <label for="idnumber">ENTER BLOOD QUANTITY(it is in liters)</label>
                <input
                  type="number"
                  class="form-control"
                  id="bquantity"
                  name="bquantity"
                  required="required" 
                  pattern="[A-Za-z0-9]{1,20}"
                />
              </div>
              
              </br>

              <div class="form-group summt-btns" style="display:flex; justify-content: space-around;">
               <input type="submit" name="submit" value="submit" class="btn btn-primary col-xs-4"></input> 

              </div>
             <a href="index.php" style="display:flex; justify-content: space-around;" >BACK</a>
            </form>
          </div>
        </div>
      </div>
    </div> 
  </body>
</html>
