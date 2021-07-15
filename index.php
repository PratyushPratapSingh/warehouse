<!doctype html>
<html>

    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Warehouse</title>
        <link rel="stylesheet" href="style.css">
        <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
        <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>                             
    </head>

<body oncontextmenu='return false' class='snippet-body'>

    <h2 id="heading">Enter your Warehousing Listing</h2>
    <h5>Please fill in the details of your warehouse.</h5>

        <!-- progressbar -->
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
                    <div class="card px-3 pt-4 pb-2 mt-3 mb-3">
                        <div class="newprogress">
                        <ul id="progressbar">
                            <li class="active" id="account"><strong>Initial Details</strong></li>
                            <li id="personal"><strong>Construction Details</strong></li>
                            <li id="payment"><strong>Additional Details</strong></li>
                            <li id="confirm"><strong>Special Remarks</strong></li>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
        </div> 
        
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
           
                
                <form id="msform" action="connect.php" method="post">

                    <br> <!-- fieldsets -->

                    <!-- 1st page -->
                    <fieldset>
                        <div class="form-card">
                             
                                <input type="text" name="firstname" class="left" placeholder="First Name" />

                                <input type="text" name="lastname" class="right" placeholder="Last Name" />
                                
                             <br>

                             <input type="number" name="phoneno" class="left" placeholder="Phone Number" />

                             <input type="email" name="emailid" class="right" placeholder="Email Id" />

                             <br>
                             <select name="type" class="dropdown">
                                <option value>Type of warehouse</option>
                               <option>Regular</option>
                               <option>AirConditioned</option>
                            </select> 

                                <input type="text" name="city" class="right" placeholder="City" />                          
                             
                             <br>
                                
                                <input type="text" name="address" class="area" placeholder="Location or Area" />

                             <br>
                            
                                <input type="text" name="detail" class="area" placeholder="Detailed Address of warehouse" />

                        </div> 
                        
                        <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>

                    <!-- 2nd page -->
                    <fieldset>
                        <div class="form-card">
                            <!-- for all righy side of dropdown -->
                            <select name="dropdown" class="dropdown">
                                <option value>Type</option>
                               <option>Regular warehouse</option>
                               <option>Classic warehouse</option>
                            </select> 
                            <!-- for all left side of dropdown -->
                            <select name="dropdown" class="dropdown-left">
                               <option value>Type of roof</option>
                               <option>Cemented Sheets</option>
                               <option>Tin Sheets</option>
                            </select> 
                            <br>
                            <input type="text" name="plot" class="left" placeholder="Total area of plot(sq. ft.)" />                
                            <input type="text" name="buildup-area" class="right" placeholder="Buildup Area(sq. ft.)" />  
                            <br>         
                            <input type="text" name="phno" class="left" placeholder="Free Space(sq. ft.)" /> 
                            <input type="text" name="phno_2" class="right" placeholder="Alternate Contact No." />
                            <br>
                            <div class="radio-box">
                            <tr>
                                <td>Flooring Type</td>
                                <br>
                                <td><input type="radio" value="VDF" name="Visually" />    VDF   </td>
                                <td><input type="radio" value="none" name="Visually" />     TRIMAX   </td>
                                <td><input type="radio" value="none" name="Visually" />      RCC   </td>
                            </tr>
                            </div>
                            <br>
                            <input type="text" name="area" class="area" placeholder="Year of warehouse construction" />

                        </div> 
                        
                               <input type="button" name="next" class="next action-button" value="Next" /> 
                               <input type="button" name="previous" class="previous action-button-previous" value="Back" />
                    </fieldset>

                    <!-- 3rd page -->
                    <fieldset>
                        <div class="form-card">

                            <input type="text" name="area" class="area" placeholder="Types of products not allowed to be stored" />
                            
                            <div class="yesno">

                            <h5 id="headingh5">Additional Information</h5>
                            <table>
                                
                              <tr>
                                <th class="first-col"></th>
                                <th>Yes</th>
                                <th>No</th>
                                
                              </tr>

                              <tr>
                                <td class="first-col">Professional</td>
                                
                                <td><input type="radio" class="left-radio" value="none" name="professional" /></td>
                                
                                <td><input type="radio" class="right-radio" value="none" name="professional" /></td>
                              </tr>

                              <tr>
                                <td class="first-col">Firefighting Arrangements</td>
                                <td><input type="radio" class="left-radio" value="none" name="FirefightingArrangements" /></td>
                                <td><input type="radio" class="right-radio" value="none" name="FirefightingArrangements" /></td>   
                              </tr>

                              <tr>
                                <td class="first-col">Weighbridge Facilities</td>
                                <td><input type="radio" class="left-radio" value="none" name="WeighbridgeFacilities" /></td>
                                <td><input type="radio" class="right-radio" value="none" name="WeighbridgeFacilities" /></td>    
                              </tr>

                              <tr>
                                <td class="first-col">Power Backup</td>
                                <td><input type="radio" class="left-radio" value="none" name="PowerBackup" /></td>
                                <td><input type="radio" class="right-radio" value="none" name="PowerBackup" /></td>   
                              </tr>

                              <tr>
                                <td class="first-col">Labour Availabilty</td>
                                <td><input type="radio" class="left-radio" value="none" name="LabourAvailabilty" /></td>
                                <td><input type="radio" class="right-radio" value="none" name="LabourAvailabilty" /></td>   
                              </tr>

                              <tr>
                                <td class="first-col">Grading Sorting Platform</td>
                                <td><input type="radio" class="left-radio" value="none" name="GradingSortingPlatform" /></td>
                                <td><input type="radio" class="right-radio" value="none" name="GradingSortingPlatform" /></td>   
                              </tr>

                              <tr>
                                <td class="first-col">Unloading Platfor</td>
                                <td><input type="radio" class="left-radio" value="none" name="UnloadingPlatfor" /></td>
                                <td><input type="radio" class="right-radio" value="none" name="UnloadingPlatfor" /></td>   
                              </tr>

                            </table>
                            </div>
                        </div> 
                            <input type="button" name="next" class="next action-button" value="Next"/> 
                            <input type="button" name="previous" class="previous action-button-previous" value="Back"/>
                    </fieldset>

                    <!-- 4th page -->

                    <fieldset>
                        <div class="form-card">
                            <input type="text" name="area" class="area" placeholder="Comments" />
                            <div class="picupload1">
                             <label class="fieldlabels">Upload outside picture of warehouse</label> 
                             <input type="file" name="pic" accept="image/*">
                             </div>
                                    
                             <br>

                                <div class="picupload2">
                                    <label class="fieldlabels">Upload inside picture of warehouse</label> 
                                    <input type="file" name="pic" accept="image/*">
                                </div> 
                                      
                        </div> 
                            <input type="button" name="next" class="next action-button" value="Submit"/> 
                            <input type="button" name="previous" class="previous action-button-previous" value="Back"/>
                    </fieldset>

                    <!-- after submission a successfully message display -->
                    <fieldset>
                        <div class="form-card">
                            
                            <h2 class="purple-text text-center"><strong>Succesfully submitted</strong></h2> <br>
                            <!-- <div class="row justify-content-center">
                                <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                            </div> <br><br> -->
                            
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript' src='script.js'></script>
                                
</body>
</html>