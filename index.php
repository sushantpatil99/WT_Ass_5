<!DOCTYPE html>
<!--
-->
<html lang = "en">
    <head>
        <meta charset="UTF-8">
        <title>EVENTO</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel ="stylesheet" type ="text/css" href ="style.css">
        <script src="jquery-3.5.1.min.js"></script>
        <script src="JS.js"></script>
    </head>
    <body>
        <header>
            <section class='inner-header'>
                <div class='logo'>
                    <a href='index.html'>Evento</a>
                </div>
                <nav>
                    <button  type ="button" id = "HomeButton" onclick="selectBlock ('Home')">Home</button>  
                    <button  type ="button" id = "RegisterButton" onclick="selectBlock ('Register')">Register</button>
                    <button  type ="button" id = "SRegisterButton" onclick="selectBlock ('ShowRegistrations')">Show Registrations</button> 
                </nav>
            </section>
        </header>
        <main>
            <section id ="Home">
            <section class='banner-image'>
                <center>
                <section class='inner-banner-image'>
                    <section class='banner-content'>
                        <h1>The one place for any <span class ="intro">EVENT</span> to be a <span class ="intro">MOMENTO</span> is <span class ="intro">EVENTO</span>.</h1>
                        <p>We provide all the services required to organize a memorable event.</p> 
                        <p>Till today, <span style="color: #FFDF00">EVENTO</span> has organized more than 100 events successfully.</p>
                        <p>Want a quotation? Click on <span class = "intro">Register</span> in the navigation menu.</p><br><br>
                    </section>
                    
                </section>
                </center>
            </section>
            </section>
            
            <section id ="Register">
                <section class="box">
                    <div class="inner-box">
                        <h1>Fill the form:</h1>
                        <form name="regform" id="rform" method="post" >
                        <fieldset>
                            <legend>Personal Information</legend>
                            <label for="Name">Name:</label><br/><input type="text" id="Name" name="Name"><span id="name"></span><br/>
                            <label for="Email">Email id:</label><br/><input type="text" id="Email" name="Email"><span id="email"></span><br/>
                            <label for="Password">Password:</label><br/><input type="text" id="Password" name="Password"><span id="password"></span><br/>
                            <label for="Cpassword">Confirm Password:</label><br/><input type="text" id="Cpassword" name="Cpassword"><span id="cpassword"></span><br/>
                            <label for="Mobile">Contact No:</label><br/><input type="text" id="Mobile" name="Mobile"><span id="mobile"></span><br/>
                        </fieldset>
                        <fieldset>
                            <legend>Event Information</legend>
                            
                        <label for="Eventtype">Event type:</label><br/>
                        <select id="Eventtype" name="Eventtype">
                            <option value="none">Select</option>
                            <option value="Family Function">Family Function</option>
                            <option value="Corporate Event">Corporate Event</option>
                            <option value="Social Event">Social Event</option>
                        </select><span id="eventtype"></span><br/>
                        <label for="Requirements">Requirements:</label><br/>
                        <input type="checkbox" id = "Requirement1" name="Requirement1" value="Venue"><label for="Requirement1">Venue</label><br/>
                        <input type="checkbox" id = "Requirement2" name="Requirement2" value="Catering"><label for="Requirement2">Catering</label><br/>
                        <input type="checkbox" id = "Requirement3" name="Requirement3" value="Decoration"><label for="Requirement3">Decoration</label><br/>
                        <input type="checkbox" id = "Requirement4" name="Requirement4" value="Promotion"><label for="Requirement4">Promotion</label><span id="requirement"></span><br/>
                        <label for="Otherrequirements">Other Requirements:</label><br/><textarea id="Otherrequirements" name="Otherrequirements" rows="5" cols="20" placeholder="Give your other requirements."></textarea><br/><span id="otherrequirements"></span><br/>
                        <label>Event space:</label><input type="radio" name ='Eventspace' id='radiooption1' value='Indoor'><label> Indoor </label> <input type="radio" name ='Eventspace' id='radiooption2' value='Outdoor'><label> Outdoor </label><span id="eventspace"></span><br/><br/>
                        <label for='Eventdate'>Event Date:</label><input type ='date' id='Eventdate' name='Eventdate'><br/><span id="eventdate"></span><br/>
                        <label>Time-slot:</label><br/><label for="StartTime"> Start time </label><input type="time" id="StartTime" name="StartTime"><label for="EndtTime"> - End time </label><input type="time" id="EndTime" name="EndTime"><span id="time"></span><br/>
                        </fieldset>
                        
                            <input type="button" value="Register" onclick="validateForm()"><span id="success"></span>
                    </form>
                    </div>
                    
                </section>
            </section>
            <section id="ShowRegistrations">
                <section class='box'>
                    <section class='inner-box'>
                        <section id="smess">
                        <p style="text-align: center ; font-weight: bold ; font-size: 20px">No registrations yet. Be the first to book an event with us. </p>
                        </section>
                        <center>
                        <section>
                            <table id ="regdata">
                                <caption>Registration Details</caption>
                                <thead>
                                <th>Sr.No</th>
                                <th>Timestamp</th>
                                <th>Name</th>
                                <th>Email id</th>
                                <th>Contact No</th>
                                <th>Event type</th>
                                <th>Requirement/s</th>
                                <th>Other Requirement/s</th>
                                <th>Event space</th>
                                <th>Event date</th>
                                <th>Time slot</th>
                                
                                </thead>
                                <tbody id="tb">
                                </tbody>
                            </table>
                        </section>
                        </center>
                    </section>
                </section>
            </section>
          
            
        </main>
        <footer>
            
            <div style="padding-top: 1px">
            <center><p>Copyright &COPY; Evento. All Rights Reserved &VerticalLine; Contact Us: &plus;91 7021768922</p> </center>
            </div>
        </footer>    
    </body>
</html>