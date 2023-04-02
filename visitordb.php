<?php
 $conn=  mysqli_connect('localhost', 'root','','visitor');
 if($conn)
 {
     
        $Date=$_POST['date'];
        $Vname=$_POST['vname'];
        $Timein=$_POST['in'];
        $Timeout=$_POST['out'];
        $Whommeet=$_POST['meet'];
        $Mode=$_POST['mode'];
        $Reason=$_POST['reason'];
        $query="INSERT INTO `visitor`(`Date`, `Vname`, `Timein`, `Timeout`, `Whommeet`, `Mode`, `Reason`) VALUES ('$Date','$Vname','$Timein','$Timeout','$Whommeet','$Mode','$Reason')";
      if(mysqli_query($conn, $query))
      {
            echo "<script type='text/javascript'>alert('Data Inserted!!');location='visitor.php'; </script>";
      }
      else
      {
           echo "<script type='text/javascript'>alert('Data Not Inserted!!'); location='visitor.php';</script>";
      }
     
     
 }
 else 
 {
     echo 'Database Not Connectd';
 }
    
?>
