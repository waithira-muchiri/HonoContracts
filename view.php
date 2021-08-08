<?php
        session_start();
        $con = mysqli_connect("localhost", "root", "", "hono");
        
        $query = "SELECT * FROM active_contracts";
        $records = mysqli_query($con,$query); // fetch data from database
      foreach ($records as $record):
    ?>
<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!----<title> Website Layout | CodingLab</title>---->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
      <style>
          @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
        *{
          margin: 0;
          padding: 0;
          box-sizing: border-box;
          font-family: 'Poppins', sans-serif;
        }
        .main_box{
          position: relative;
          background: url('img/plumbing.jpg') right no-repeat;
          background-size: cover;
          height: 100vh;
          width: 100%;
          overflow-x: hidden;
        }

        .container{
          width:80%;
          margin: 0 auto;
        }

        .details{
          text-align: center;
        }

        .details h2{
          color:#243238;
          font-size:50px;
          margin: 0;
        }

        .main-box{
          display: flex;
          justify-content: center;
          flex-wrap: wrap;
        }

        .box{
          width: 300px;
          height: 400px;
          margin: 10px;
          text-align: center;
          padding: 40px 20px;
          color: #ffffff;
          position: relative;
          z-index: 2;
          border-radius: 5px;

        }
        .box > * {
          position: relative;
          z-index: 2;
          color: #ffffff;
        }

        .box::before{
          content: "";
          position: absolute;
          width: 100%;
          height: 100%;
          border: 2px solid rgba(255, 255, 255, 0.5);
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          z-index: 1;
        }

        .box:hover::before{
          width: 95%;
          height: 95%;
          transition: all ease .50s;
        }

        .box .icon{
          width: 100px;
          height: 100px;
          border-radius: 50%;
          background-color: #ffffff;
          text-align: center;
          display: inline-block;
          position: relative;
        }

        .box .icon .fas{
          color: #404044;
          font-size: 30px;
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
        }

        hr{
          margin-top: 10px;
          margin-bottom: 10px;
          display: block;
          width: 100%;
          border: 1px solid rgba(255,255,255, 0.1);

        }

        .box button{
          text-decoration: none;
          color: #ffffff;
          text-transform: uppercase;
          background-color:#D50000 ;
          padding: 10px 25px;
          border-radius: 25px;
          margin-top: 25px;
          display: inline-block;
          font-weight: 600 ;
          bottom: 0;
        }
        .box button:hover{
          background-color:#243238 ;
        cursor: pointer;
        }

        .box .white-border{
          border: 1px solid #ffffff;
        }


        .box-grey{
          background-color:#404044 ;
        }

        form {
            position: absolute;
            top: 30%;
          padding: 15px;
          border: 1px solid #666;
          background-color:rosybrown;
          display: none;
            z-index: 9999;
            color: white;
        }
        input[type=text] ,input[type=email]{
          width: 100%;
          padding: 8px 12px;
          margin: 8px 0;
          box-sizing: border-box;
          border-radius: 30px;
        }
          .btn{
               width: 100%;
              padding: 8px 12px;
              margin: 8px 0;
              box-sizing: border-box;
              border-radius: 30px;
              color: white;
              background-color:rgba(0,0,0, 0.7);
          }
          .btn:hover{
              background-color: red;
          }
      </style>
      <script>
          function toggleText(){
  var x = document.getElementById("form1");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
      </script>
   </head>
<body>
  
  <div class="container">
      <div class="details">
        <h2 style="color:#fff;padding:0.05em;background-color:grey;">Active Contracts</h2>
        <hr>
      </div>
      <div class="main-box">
        <div class="box box-grey">
          <div class="icon">
            <i class="fas fa-user"></i>
          </div>
          <h2><?php echo $record['name']; ?></h2>
          <hr>
          <p>Start Date : <?php echo $record['start']; ?></p>
        <p>End Date : <?php echo $record['end']; ?></p>
          <button  type="button" onclick="toggleText()">Update Details</button>
        </div>  

      </div>
      <form id="form1">
  <b>Phone Number</b> <input type="text" name="firstName" placeholder="07xxxx..">
  <br><br>
  <b>Email </b><input type="email" name="lastName">
  <br><br>
  <button class="btn" type="button" id="submit">Submit</button>
</form>
    </div>
    
  </body>

</html>
<?php endforeach; ?>