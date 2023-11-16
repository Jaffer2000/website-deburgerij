<style>
.filter-agenda {
    padding-top: 50px;
    padding-bottom: 50px;
    text-align: center;
    color: #03629D;
}

.square-agenda {
    width: 280px;
    height: 320px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    position: relative;
    margin-bottom: 20px;
}

.square-agenda img {
    width: 100%;
    height: 100%;
    display: block;
    margin: 0;
}

.square-footer-agenda {
    background-color: #3d67ad;
    padding: 50px;
    width: 100%;
    bottom: 0;
    position: relative;
    text-align: left;
}

.footer-content-agenda h3 {
    font-size: 18px;
    color: #fff;
}

.footer-content-agenda p {
    color: #A2A2A2;
    font-size: 13px;
    margin-bottom: 8px;
}

.footer-content-agenda {
    position: absolute;
    top: 10%;
    left: 10%;
}

.activiteit {
    margin: 0 -25px;
}

.modal-header button {
    color: #03629D;
}

.modal-button {
    background-color: #03629D;
}

.modal-button:hover {
    background-color: #03629D;
}

.modal-title {
    color: #03629d;
    font-weight: bold;
}

#popupTitle {
    color: #03629d;
    font-weight: bold;
}

#popupDate {
    color: #A2A2A2;
}

#popupText {
    color: #03629d;
    font-weight: 600;
}

@media (max-width: 750px) {

    .activiteit {
        margin: 0 auto;
        display: flex;
        justify-content: center;
    }

    .filter-agenda {
        padding: 12px;
    }
}

@media (max-width: 1026px) {
    .activiteit {
        margin: 0 0px;
        display: flex;
        justify-content: center;
    }

    .filter-agenda {
        padding: 12px;
    }
}
</style>

<div class="jumbotron jumbotron-img-agenda">
    <img src="img/agendabanner.png" alt="Jumbotron Image" class="img-fluid">
    <div class="jumbotron-content">
        <h1>Agenda</h1>
    </div>
</div>

<p class="filter-agenda">Januari | Februari | Maart | April | Mei | Juni | Juli | Augustus | September | Oktober |
    November | December </p>

<div class="container activiteiten">
    <div class="row text-center justify-content-center">
        <div class="col-md-4 mb-4 activiteit">
            <div class="square-agenda">
                <img src="img/agenda1" alt="Image 1">
                <div class="square-footer-agenda">
                    <div class="footer-content-agenda">
                        <p>Wo. 15 Nov 2023</p>
                        <h3>Computercursus voor <br>
                            65+ ers</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4 activiteit">
            <div class="square-agenda">
                <img src="img/homepage3" alt="Image 2">
                <div class="square-footer-agenda">
                    <div class="footer-content-agenda">
                        <p>Wo. 15 Nov 2023</p>
                        <h3>Dit is ook een <br>
                            activiteit</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4 activiteit">
            <div class="square-agenda">
                <img src="img/homepage4" alt="Image 3">
                <div class="square-footer-agenda">
                    <div class="footer-content-agenda">
                        <p>Wo. 15 Nov 2023</p>
                        <h3>Dit is ook een <br>
                            activiteit</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Activiteit Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <img src="" alt="Popup Image" id="popupImage" class="img-fluid mb-4">
                </div>
                <h3 id="popupTitle"></h3>
                <p id="popupDate" class="mb-3"></p>
                <p id="popupText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor
                    incididunt ut labore
                    et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</p>
                <p id="popupText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores aut dolore
                    molestias possimus
                    ullam animi itaque, expedita voluptatum doloribus nostrum in quia aspernatur accusamus illum hic
                    deleniti cupiditate, mollitia corrupti.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary modal-button" data-dismiss="modal">Sluit</button>
            </div>
        </div>
    </div>
</div>

<script>
// JavaScript to handle the modal content
$('.square-agenda').click(function() {
    var imageSrc = $(this).find('img').attr('src');
    var title = $(this).find('.footer-content-agenda h3').text();
    var date = $(this).find('.footer-content-agenda p').text();

    // Set modal content
    $('#popupImage').attr('src', imageSrc);
    $('#popupTitle').text(title);
    $('#popupDate').text(date);

    // Show the modal
    $('#myModal').modal('show');
});
</script>