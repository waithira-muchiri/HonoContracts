
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title></title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="contact.css">
<script type="text/javascript">

function statusCheck() {
    if (document.getElementById('yes').selected) {
        document.getElementById('ifYes').style.display = 'block';
        document.getElementById('ifTerm').style.display = 'block';
    } else {
        document.getElementById('ifYes').style.display = 'none';
        document.getElementById('ifTerm').style.display = 'none';
    }}
</script>
</head>
<body>
    <div class="logo">
                <img src="honologo.svg" width="150px;" height="150px;"><i style="color:white;">contracts</i>
            </div>
  <div class="container">
    <div class="row">
        
      <div class="col-8 offset-md-2 form-div">
        
        <form action="trial.php" method="POST">
            
            
          <h2 class="text-center" style="color:white;">Submit Contract Details</h2>
          <?php if (!empty($msg)): ?>
            <div class="alert <?php echo $msg_class ?>" role="alert">
              <?php echo $msg; ?>
            </div>
          <?php endif; ?>
         
          <div class="form-group">
            <input type="text" placeholder="Name" name="name" required>
          </div>
            <div class="form-group">
            <input type="text" placeholder="Phone Number 07XXX.." name="phone" required>
            </div>
            <div class="form-group">
            <input type="email" placeholder="Email Address" name="email" required>
            </div>
            
            <div class="form-group">
                 <select class="sel" name="category" style="width: 100%;padding: 8px 12px;margin: 8px 0;box-sizing: border-box;border-radius: 30px;" required>
                                <option value="" disabled selected hidden>Employee Category</option>
                                <option value="Intern">Intern</option>
                                <option value="Employee">Employee</option>
                                <option value="Supplier">Supplier</option>
                                <option value="Other">Other</option>
                            </select>
          </div>
            
            <div class="form-group" style=""><label>Start date: </label>
            <input type="date" placeholder="date" name="start" required>
           
          </div>
            <div class="form-group" style="">
            <label>End date: </label>
            <input type="date" pattern="date" name="end" required>
          </div>
          
            
         <div class="form-group" >
            <select onchange="statusCheck()" class="sel" name="status" style="width: 100%;padding: 8px 12px;margin: 8px 0;box-sizing: border-box;border-radius: 30px;" required>
                                <option value="" disabled selected hidden>CONTRACT STATUS</option>
                                <option value="Active" id="no">Active</option>
                                <option value="Ended" id="no">Ended</option>
                                <option value="Termination" id="yes">Termination</option>
                                
                            </select>
          </div>
          <div class="form-group" id="ifYes" style="display:none;"><label>Date of Termination: </label>
            <input type="date" pattern="date" name="termination" >
            </div>
            <div class="form-group" id="ifTerm" style="display:none;">
            <label>Reason for Termination: </label>
            <input type="text" placeholder="Type reason" name="reason" >
          </div>
            <div class="form-group" style=""><label>Date of Creation : </label>
          <input type="date" value="<?php echo date('Y-m-d'); ?>" name = "created" readonly/>
            </div>
            
          <div class="form-group">
            <button type="submit" name="save" class="btn btn-primary btn-block">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
