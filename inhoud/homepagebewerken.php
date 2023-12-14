<?php
    include("check_login.php")
?>
<style>
.admin-home-buttons {
    padding: 70px;
}

.admin-home-buttons button {
    margin-right: 20px;
}
</style>

<div class="row">
    <div class="jumbotron contactbackgroundimg" style="background-image: url('img/');">
        <h1 class="headertext ">Homepage bewerken</h1>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="terugbuttonadmin">
            <button class="activiteitentoevoegenbutton" onClick="adminterug()">Pagina overzicht</button>
        </div>
    </div>
</div>

<div class="row admin-home-buttons">
    <div class="col-sm-12 adminbuttonalign">
        <button onClick="slidertoevoegen()" class="adminbutton">Slider toevoegen</button>
        <button onClick="sliderbewerken()" class="adminbutton">Slider bewerken</button>
        <button onClick="tekstbewerken()" class="adminbutton">Tekst bewerken</button>
    </div>
</div>

<script>
// JavaScript function to navigate to a different page
function adminterug() {
    var url = "paginabewerkenoverzicht";
    window.open(url, "_self"); // Opent de link in dezelfde tab
}

function slidertoevoegen() {
    var url = "slidertoevoegen";
    window.open(url, "_self"); // Opent de link in dezelfde tab
}

function sliderbewerken() {
    var url = "sliderbewerken";
    window.open(url, "_self"); // Opent de link in dezelfde tab
}

function tekstbewerken() {
    var url = "tekstbewerken";
    window.open(url, "_self"); // Opent de link in dezelfde tab
}
</script>