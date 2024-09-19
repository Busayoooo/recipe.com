<<<<<<< HEAD
<?php 
include('./templates/connect.php');
include('./templates/header.php');


// create blank variables to fetch
$recipe_id = "";
$error_msg = "";

// check if a particular recipe id is selected

if (isset($_GET['recipe_id'])) {
    // assign receipe id to the local variable
    $recipe_id = $_GET['recipe_id'];

    // fetch data from the table using row id
    $fetch_query = "SELECT * FROM `recipe_tb` WHERE `recipe_id` = $recipe_id";

    // send query to server
    $send_fetch_query = mysqli_query($db_connect, $fetch_query);

    // store received data in an associative array
    $recipe = mysqli_fetch_assoc($send_fetch_query);

    // print_r($recipe);

} else {
    $error_msg = "No recipe selected!";
}

// Delete the data once edited

$delete_recipe_id = "";

if (isset($_POST['delete'])) {
    $delete_recipe_id = $_POST['delete_recipe_id'];

    $delete_query = "DELETE FROM recipe_tb WHERE recipe_id='$delete_recipe_id'";

if (mysqli_query($db_connect, $delete_query)) {
    echo "Record deleted successfully";

    header("Location: ./index.php");
} 
else {
    echo "Error deleting record: " . mysqli_error($db_connect);}
mysqli_close($db_connect);
}
=======
<?php
include('./templates/connect.php');
include('./templates/header.php');

$recipe_id = " ";
$error_msg = " ";

//check if partciular id is selected
if (isset($_GET["recipe_id"])) {
    //Assign recipe 1d to local variable
    $recipe_id = $_GET["recipe_id"];

    //Fetch Data from table, using the row ID
    $fetch_query ="SELECT * FROM `recipe_tb` WHERE `recipe_id` = $recipe_id";

    $send_fetch_query = mysqli_query($db_connect, $fetch_query);

    //Store recieved data in an associative array
    $recipe = mysqli_fetch_assoc($send_fetch_query);
}else {
    $error_msg = "No recipe selected!";
}
print_r($recipe_id);
>>>>>>> 8c98c727023f74b3ee43cb4022bd2ca6deb1fb17

?>

<main>
<<<<<<< HEAD
    <div class="section container">
        <h1>
        Are you sure you want to delete <?php echo $recipe['recipe_name'] ?>?
        </h1>
        <div class="container">
            <form action="./delete_recipe.php" method="post">
                <div class="row">
                    <div class="left-align container center">
                        <div class="input-field col s12 l3">
                            <input type="hidden" name="delete_recipe_id" id="delete_recipe_id" value="<?php echo $recipe['recipe_id'] ?>" >
                        </div>
                        <div class="col s12 input-field">
                        <input type="submit" name="delete" value="delete" class="orange darken-4 btn-large btn-flat white-text">
                            <a href="./view_recipe.php?recipe_id=<?php echo $recipe['recipe_id'] ?>" class="btn btn-large btn-flat orange darken-4 white-text">Back</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>  
    </div>  
</main>

<?php include('./templates/footer.php'); ?>
=======
    <div class="container">
        <h1 class="center-align">Delete</h1>
    </div>
</main>

<?php
include('./templates/footer.php');
?>
>>>>>>> 8c98c727023f74b3ee43cb4022bd2ca6deb1fb17
