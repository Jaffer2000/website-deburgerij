<div class="row">
    <div class="jumbotron contactbackgroundimg" style="background-image: url('img/');">
        <h1 class="headertext">Slider bewerken</h1>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="terugbuttonadmin">
            <button class="activiteitentoevoegenbutton" onClick="hometerug()">Home bewerken</button>
        </div>
    </div>
</div>

<div class="container mt-5">

    <?php
        // Retrieve slider data for display
        $query = "SELECT id, title, text, img, reference FROM slider";
        $result = $conn->query($query);

        // Check if the query was successful
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $id = $row['id'];
                $title = $row['title'];
                $text = $row['text'];
                $imagePath = $row['img'];
                $reference = $row['reference'];
        ?>
    <form method="post" action="" enctype="multipart/form-data">
        <div class="card mb-3">
            <div class="card-header">
                <h5 class="card-title">Slide <?php echo $id; ?></h5>
            </div>
            <div class="card-body">
                <input type="hidden" name="slider_id" value="<?php echo $id; ?>">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="slider[<?php echo $id; ?>][title]"
                        value="<?php echo isset($_POST['slider'][$id]['title']) ? htmlspecialchars($_POST['slider'][$id]['title']) : htmlspecialchars($title); ?>">
                </div>
                <div class="form-group">
                    <label for="text">Text</label>
                    <textarea class="form-control"
                        name="slider[<?php echo $id; ?>][text]"><?php echo isset($_POST['slider'][$id]['text']) ? htmlspecialchars($_POST['slider'][$id]['text']) : htmlspecialchars($text); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control-file" name="slider_image_<?php echo $id; ?>"
                        id="slider_image_input_<?php echo $id; ?>" onchange="previewImage(<?php echo $id; ?>)">

                    <?php
                                if (!empty($imagePath)) {
                                    echo '<img id="previewImage_' . $id . '" src="img/' . $imagePath . '?t=' . time() . '" alt="Current Image" class="mt-2" style="max-width: 200px;">';
                                }
                                ?>
                </div>
                <div class="form-group">
                    <label for="reference">Reference</label>
                    <input type="text" class="form-control" name="slider[<?php echo $id; ?>][reference]"
                        value="<?php echo isset($_POST['slider'][$id]['reference']) ? htmlspecialchars($_POST['slider'][$id]['reference']) : htmlspecialchars($reference); ?>">
                </div>
            </div>
            <div class="card-footer">
                <input type="submit" class="btn btn-primary" value="Save Changes">
            </div>
        </div>
    </form>
    <?php
            }
        } else {
            echo "There is no data found!";
        }

        // Close the result set
        $result->close();

        // Move this outside the loop
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve slider_id from form submission
            $slider_id = $_POST['slider_id'];

            // Ontvang gegevens van het formulier
            $title = mysqli_real_escape_string($conn, $_POST['slider'][$slider_id]['title']);
            $text = mysqli_real_escape_string($conn, $_POST['slider'][$slider_id]['text']);
            $reference = mysqli_real_escape_string($conn, $_POST['slider'][$slider_id]['reference']);

            if (!empty($_FILES['slider_image_' . $slider_id]['name'])) {
                $imagePath = uploadImage($slider_id);
        
                // Update the image source in the response
                echo "<script>
                        document.getElementById('previewImage_" . $slider_id . "').src = 'img/" . $imagePath . "?" . time() . "';
                      </script>";
            }

            // Update query
            $updateQuery = "UPDATE slider SET 
               title = '$title', text = '$text',
               img = '$imagePath', reference = '$reference'
               WHERE id = $slider_id";

            // After successful update
            if ($conn->query($updateQuery) === TRUE) {
                echo "<script>alert('Slider succesvol bijgewerkt!')</script>";
            } else {
                echo "<script>alert('Error updating slider: " . $conn->error . "')</script>";
            }

            $conn->close();
        }
        ?>

</div>

<?php
function uploadImage($slider_id)
{
    // Check if the file was uploaded without errors
    if ($_FILES['slider_image_' . $slider_id]['error'] == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES['slider_image_' . $slider_id]['tmp_name'];
        $filename = basename($_FILES['slider_image_' . $slider_id]['name']);
        $target_path = 'img/' . $filename;

        // Move the uploaded file to the desired location
        if (move_uploaded_file($tmp_name, $target_path)) {
            return $filename; // Return the filename to store in the database
        } else {
            echo "<script>alert('Error uploading image.')</script>";
        }
    }

    return null; // Return null if there was an error
}
?>

<script>
// JavaScript function to navigate to a different page
function hometerug() {
    var url = "homepagebewerken";
    window.open(url, "_self"); // Opent de link in dezelfde tab
}

function previewImage(sliderId) {
    var input = document.getElementById('slider_image_input_' + sliderId);
    var previewImage = document.getElementById('previewImage_' + sliderId);

    // Check if a file is selected
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            previewImage.src = e.target.result;
        };

        reader.readAsDataURL(input.files[0]);
    }
}
</script>