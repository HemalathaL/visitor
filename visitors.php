<html>
    <head>
        <meta charset="UTF-8">
          <link rel="icon" type="image/png" sizes="96x96" href="logo.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
        <title>Athulya Assisted Living</title>
    </head>
    <style>
        body
        {
/*            background-image: url(1.jpg);*/
/*                background-color: rgb(241,241,241);*/
          
        }
        #home
        {
            color: rgb(239,72,130);
        }
         #form
        {
            background-color: white;
            border:2px solid white;
            border-radius: 8px;
            margin-top: 94px;
         box-shadow: 0 8px 20px 0 ;
/*           font-family: 'Poppins', sans-serif;*/
            
        }
        .form-label
        {
           color:rgb(23,98,147);
        }
         input[type=text] 
         {
            padding: 5px;
            margin-top: 6px;
            font-size: 12px;
            border: 1px solid;
            border-color: wheat;
            border-radius: 2px;
            width:289px;
         }
         input[type=date] 
         {
            padding: 5px;
            margin-top: 6px;
            font-size: 12px;
            border: 1px solid;
            border-color: wheat;
            border-radius: 2px;
            width:289px;
         }
           input[type=text]:hover 
           {
            box-shadow: 0 5px 10px wheat;
          }
        input[type=text]:focus 
        {
          box-shadow: 0 5px 10px wheat;
          outline: none;
        }
       
           input[type=date]:hover 
           {
            box-shadow: 0 5px 10px wheat;
          }
        input[type=date]:focus 
        {
          box-shadow: 0 5px 10px wheat;
          outline: none;
        }
        input[type=time] 
         {
            padding: 5px;
            margin-top: 6px;
            font-size: 12px;
            border: 1px solid;
            border-color: wheat;
            border-radius: 2px;
            width:289px;
         }
           input[type=time]:hover 
           {
            box-shadow: 0 5px 10px wheat;
          }
        input[type=time]:focus 
        {
          box-shadow: 0 5px 10px wheat;
          outline: none;
        }
        textarea {
            resize: none;
            padding: 5px;
            margin-top: 6px;
            font-size: 12px;
            border: 1px solid;
            border-color: wheat;
            border-radius: 2px;
            width:289px;
        }
       .sub
       {
            float: right;
            padding: 8px;
            height: 50px;
            width:100px;
            margin-right: 344px;
            background-color: rgb(239,72,130);
            color: white;
            font-size: 13px;
            font-weight: 700;
            border: 1px solid;
            cursor: pointer;
            border-radius: 5px;
       }
        .sub:hover
            {
                background-color:rgb(23,98,147);
            }
           select
           {
               padding: 5px;
            margin-top: 6px;
            font-size: 12px;
            border: 1px solid;
            border-color: wheat;
            border-radius: 2px;
            width:289px;
               
           }
         .select1 :hover
         {
            box-shadow: 0 5px 10px wheat; 
         }
         .select1 :focus
         {
            box-shadow: 0 5px 10px wheat;
          outline: none; 
         }
           .header
        {
            height: 100vh;
        }
       .navbar-style
       {
         box-shadow: 0 5px 10px wheat;
       }
        .logo
        {
            height: 48px;
            padding: 2px 10px;
        }

     </style>
    <body>
        <header>
        <nav class="navbar navbar-style">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a href=""><img class="logo" src="logo.png"></a>
                     </div>
                </div>
        </nav>
        </header>
        <div class="container">
            <div class="row">
                 
                <div class="col-md-9 col-md-offset-2" id="form">
                    <h3 class="text-center" id="home">Visitors Form</h3><br>
                    <form action="visitordb.php" method="POST" enctype="multipart/form-data">          
                        <div class="form-group">
                        <div class="row h">
                        <div class="col-md-6 pp">
                            <div class="col-md-6 col-md-offset-2" >
                                <label for="inputname" class="form-label">Date</label> 
                                <input type="date" class="but1" name="date">
                            </div>
                        </div>
                         <div class="col-md-6 pp">
                           <div class="col-md-6 col-md-offset-2">
                                <label for="inputname" class="form-label">Visitor's Name</label> 
                                <input type="text" class="but1" name="vname">
                            </div>                           
                         </div>
                        </div>
                        <div class="row h">
                        <div class="col-md-6 pp">
                            <div class="col-md-6 col-md-offset-2" >
                                <label class="form-label">Time IN</label> 
                                <input type="time" id="appt" name="in" >
                            </div>
                        </div>
                         <div class="col-md-6 pp">
                           <div class="col-md-6 col-md-offset-2">
                           <label class="form-label">Time OUT</label> 
                           <input type="time" id="appt" name="out" >
                            </div>                           
                         </div>
                        </div>
                        <div class="row h">
                        <div class="col-md-6 pp">
                            <div class="col-md-6 col-md-offset-2" >
                                <label class="form-label">To Whom Meet</label> 
                                <input type="text" class="but1" name="meet">
                            </div>
                        </div>
                         <div class="col-md-6 pp">
                           <div class="col-md-6 col-md-offset-2">
                           <label class="form-label">Mode of Visit</label> 
                           <input type="text" class="but1" name="mode">
                            </div>                           
                         </div>
                        </div>
                        <div class="row">
                        <div class="col-md-6 pp">
                            <div class="col-md-6 col-md-offset-2" >
                                <label class="form-label">Reason for Visiting the Facility</label> 
                                <textarea id="w3review" name="reason" rows="4" cols="50"></textarea>
                            </div>
                        </div>
                        </div>
                            <div class="row text-center">
                                <div class="col-md-12"><br><br>
                                    <input type="submit" class="sub" name="save" value="Save">
                                </div>
                            </div>
                        
                        </div>    
                </form>
             </div>
                

            </div>
        </div>
        
    </body>
</html>