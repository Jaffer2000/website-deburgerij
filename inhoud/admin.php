<script>
    // JavaScript function to navigate to a different page
    function nieuwstoevoegen() {
    var url = "nieuwstoevoegen";
    window.open(url, "_self"); // Opent de link in dezelfde tab
}

function nieuwsbewerken() {
    var url = "nieuwsoverzicht";
    window.open(url, "_self"); // Opent de link in dezelfde tab
}

function activiteittoevoegen() {
    var url = "activiteitentoevoegen";
    window.open(url, "_self"); // Opent de link in dezelfde tab
}

function activiteitbewerken() {
    var url = "activiteitenoverzicht";
    window.open(url, "_self"); // Opent de link in dezelfde tab
}

function paginabewerken() {
    var url = "paginabewerkenoverzicht";
    window.open(url, "_self"); // Opent de link in dezelfde tab
}


</script>

<div class="row">

    <div class="jumbotron contactbackgroundimg"
        style="background-image: url('img/');">
        <h1 class="headertext">Admin</h1>
    </div>

</div>

<div class="row">

    <div class="col-sm-4 adminbuttonalign">

        <button  onClick="nieuwstoevoegen()" class="adminbutton">Nieuws toevoegen</button> <br><br>

        <button  onClick="nieuwsbewerken()" class="adminbutton">Nieuws bewerken</button>

    </div>

    <div class="col-sm-4 adminbuttonalign">

        <button  onClick="activiteittoevoegen()" class="adminbutton">Activiteiten toevoegen</button> <br><br>

        <button  onClick="activiteitbewerken()" class="adminbutton">Activiteiten bewerken</button>

    </div>

    <div class="col-sm-4 adminbuttonalign">

        <button  onClick="paginabewerken()" class="adminbutton">Pagina bewerken</button> <br>

    </div>



</div>