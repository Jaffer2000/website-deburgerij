<?php
    include("check_login.php")
?>
<script>
    // JavaScript function to navigate to a different page
    function homepagebewerken() {
    var url = "homepagebewerken";
    window.open(url, "_self"); // Opent de link in dezelfde tab
}
function overonsbewerken() {
    var url = "overonsbewerken";
    window.open(url, "_self"); // Opent de link in dezelfde tab
}

function verhuurbewerken() {
    var url = "verhuurbewerken";
    window.open(url, "_self"); // Opent de link in dezelfde tab
}

function contactbewerken() {
    var url = "contactbewerken";
    window.open(url, "_self"); // Opent de link in dezelfde tab
}

function adminterug() {
    var url = "admin";
    window.open(url, "_self"); // Opent de link in dezelfde tab
}

</script>

<div class="row">

    <div class="jumbotron contactbackgroundimg"
        style="background-image: url('img/');">
        <h1 class="headertext">Pagina bewerken overzicht</h1>
    </div>

</div>

<div class="row">

    <div class="col-sm-12">

        <div class="terugbuttonadmin">
        
            <button class="activiteitentoevoegenbutton" onClick="adminterug()">Adminoverzicht</button>
        
        </div>

    </div>

</div>

<div class="row">

    <div class="col-sm-6 adminbuttonalign">

        <button  onClick="homepagebewerken()" class="adminbutton">Homepage</button> <br><br>
        <button  onClick="overonsbewerken()" class="adminbutton">Over ons</button> <br><br>

    </div>

    <div class="col-sm-6 adminbuttonalign">

        <button  onClick="verhuurbewerken()" class="adminbutton">Verhuur</button> <br><br>
        <button  onClick="contactbewerken()" class="adminbutton">Contact</button> <br>

    </div>



</div>