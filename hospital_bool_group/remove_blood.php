<!DOCTYPE html>
<html>
  <head>


    <title>REMOVE_BLOOD</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css" />
  </head>
  <body>
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>REMOVE BLOOD</h1>
           
          </div>
          <div class="panel-body">
            <form name="main" action="select_donor.php" method="post">
            
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
