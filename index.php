<?php
require('./filtering.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="icon" href="%PUBLIC_URL%/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta
      name="description"
      content="Web site created using create-react-app"
    />
    <link rel="apple-touch-icon" href="%PUBLIC_URL%/logo192.png" />
    <!--
      manifest.json provides metadata used when your web app is installed on a
      user's mobile device or desktop. See https://developers.google.com/web/fundamentals/web-app-manifest/
    -->
    <link rel="manifest" href="%PUBLIC_URL%/manifest.json" />
    <!--
      Notice the use of %PUBLIC_URL% in the tags above.
      It will be replaced with the URL of the `public` folder during the build.
      Only files inside the `public` folder can be referenced from the HTML.

      Unlike "/favicon.ico" or "favicon.ico", "%PUBLIC_URL%/favicon.ico" will
      work correctly both with client-side routing and a non-root public URL.
      Learn how to configure a non-root public URL by running `npm run build`.
    -->
    <script src="https://kit.fontawesome.com/05a96b49bd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="index.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="myScript.js"></script>
    <title>SIG</title>
  </head>
  <body>
    <div id="root">
    <div class="App">
        <div class="navbar"> 
                <div class="links">
                <form method="post" action="/">
                    <div class="left">
                    
                    <div class="navbar-links"><button type='submit' name="line" value='1'><i class="fa-solid fa-industry"></i></button> </div>
                    <div class="navbar-links"><a href='/'><i class="fa-solid fa-tower-observation"></i> line 1</a> </div>
                    <div class="navbar-links"> <a href='/'><i class="fa-solid fa-tower-observation"></i> line 2</a> </div>
                    <div class="navbar-links"><a href='/'><i class="fa-solid fa-tower-observation"></i> line 3</a> </div>
                    </form>
                    <div class="navbar-links"><a href='/dropdown'><i class="fa-regular fa-bookmark"></i></a> </div>
                    <div class="navbar-links"><a href='/edit'><i class="fa-solid fa-pen"></i></a></div>
                    </div>
                    <div class="right">
                    <div class="navbar-links no-bck"><a href="/" ><i class="fa-regular fa-user"> userX</i></a> </div>
                    <div class="navbar-links no-bck"><a href="/" ><i class="fa-solid fa-globe"></i>en</a> </div>
                    <div class="navbar-links no-bck"><a href="/" >Factory local time</a></div>
                    <div class="navbar-links"><a href="/" >options</a> </div>
                    </div>
                </div>
            </div>

      <!-- <Filterbar></Filterbar> -->
        <div class="filters">

                <div class="filters-time">
                    <form method="post" action="/">
                    <input type="text" name="filter" value='filter-input' hidden/>
                    <button class='filter filter-active' type='submit' name='btn-filter' value='curnt prod'><i class='fa-solid fa-play'></i><br/>current production</button>
                    <button class='filter ' type='submit' name='btn-filter-time' value='curnt shift'><i class='fa-solid fa-play'></i><br/>current shift</button>
                    <button class='filter ' type='submit' name='btn-filter-time' value='last shift'><i class='fa-regular fa-clock' ></i><br/>last shift</button>
                    <button class='filter ' type='submit' name='btn-filter-time' value='last day'><i class='fa-regular fa-clock' ></i><br/>last day</button>
                    <button class='filter ' type='submit' name='btn-filter-time' value='last week'><i class='fa-regular fa-clock'></i><br/>last week</button>
                   
                </div>
              
                <div class="filters-line">
                <button class="filter break line" type='submit' name='btn-filter-line' value='line'><i class="fa-solid fa-tower-observation"></i><br/>line</button>
                </form>
                </div>
            </div>
            <div class="content">
                <!-- <Taskbar></Taskbar>

                
                <Graphs/> -->

                <div class="taskbar">
 
            
                    <h2>
                    <i class="fa-solid fa-gear"></i> <br/>
                    Production Data
                    </h2>

                        
                        <div class="view-btn-group">
                        <button class='view-button view-button-active'>operation view</button>
                            <button class='view-button' >leader view</button>
                            <button class='view-button' >Managment view</button>
                            <button class='view-button' >loss deployment</button>
                        </div>
                        <div class="img-wrap">
                            <img class="logo" src="logo.png"/>
                        </div>
     
     
  
                </div>
                <div class="data">
                    <div class="date-error-filter">
                      <form method='post' action='/'>
                        <div class="date-filter">
                            <label htmlFor="startDate" class="date-label">Date From: </label>
                            <input type="date" class="date-input" name="startDate" placeholder=""/>
                            <label htmlFor="endDate" class="date-label">Untill: </label>
                            <input type="date" class="date-input" name="endDate"/>
                            <button class="load">Load</button>
                        </div>
                      </form>
                        <div class="error-filter">
                            <button class="error-cat" name='all'>All Errors</button>
                            <button class="error-cat" name='technical'>Technical </button>
                            <button class="error-cat" name='organizational'>Organizational </button>
                            <button class='btn btn-success' onClick= "window.location.replace('download.php')"> Download CSV </button>
                        
                            <input type="checkbox" class="show-details" id="details"/>
                            <label htmlFor="details" class="show-details-label">Show details</label>
                            
                        </div>

                    </div>
                    <div class='table'>
                        <table class="table table-hover">
                            <thead>
                                <th>cfaName</th>
                                <th>hiredate</th>
                                <th>track name</th>
                                <th>errorCode</th>
                                <th>errorCategory</th>
                                <th>start Time</th>
                                <th>end Time</th>
                                <th>Record</th>
                                <th>Update</th>
                            </thead>
                            <tbody>
                                
                                    <?php 
                                    $count=0;
                                    while (($row = $SUBMMITED_ROWS->fetch_assoc())&&($count<20)){
                                        echo"<tr>";
                                        echo "<td>".$row['cfaName']."</td>";
                                        echo "<td>".$row['filedate']."</td>";
                                        echo "<td>".$row['trackName']."</td>";
                                        echo "<td>".$row['errorCode']."</td>";
                                        echo "<td>".$row['errorCategory']."</td>";
                                        echo "<td>".$row['startTimeStamp']."</td>";
                                        echo "<td>".$row['endTimeStamp']."</td>";
                                        echo "<td>A</td>";
                                        echo"<td><button type='button' class='edit btn btn-primary'>Edit</button></td>";
                                        echo"</tr>";
                                        
                                        $count++;
                                    }
                                    
                                    ?>
                                
                            </tbody>
                           </table>
                    </div>
                </div>
            </div>
            
     </div>
     <div class="modal" id="myModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modify Selected Event</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form method='post' action='https://www.w3schools.com/bootstrap5/bootstrap_modal.php'>
        <label for='errorCode'>Error Code </label>
        <input type ='text' class = 'errorCodeInput' id='errorCode'/><br/>
        <label for='errorCat'>Error Category</label>
        <input type ='text' class = 'errorCatInput ' id='errorCat'/>
        
      </div>
     
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="button" class="submitModal btn btn-primary" >submit</button>
        </form>
      </div>

    </div>
  </div>
  <button type="button" class="open-modal" data-bs-toggle="modal" data-bs-target="#myModal" hidden>

     </div>
  </body>
</html>