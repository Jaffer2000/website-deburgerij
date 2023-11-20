<div class="row">

    <div class="jumbotron contactbackgroundimg"
        style="background-image: url('img/');">
        <h1 class="headertext">Activiteit toevoegen</h1>
    </div>

</div>


<div class="row">

    <div class="col-sm-12 activiteitenformulieraligncenter">

    <form action="" method="post" enctype="multipart/form-data">
        <label for="activiteitnaam">Naam van de activiteit:</label> <br>
        <input type="text" id="activiteitnaam" name="activiteitnaam" required> <br><br>

        <label for="datum">Datum van de activiteit:</label><br>
        <input type="date" id="datum" name="datum" required> <br><br>

        <label for="bericht">Beschrijving van de activiteit:</label><br>
        <textarea id="bericht" name="bericht" rows="4" required></textarea> <br><br>

        <label for="foto">Foto voor de activiteit:</label><br>
        <input type="file" id="foto" name="foto" accept="image/*"> <br><br>

        <button type="submit">Toevoegen</button>
    </form>

    </div>

</div>