<?php
include("config.php");

if(isset($_POST['input'])){
    $input = $_POST['input'];

    $query = "SELECT * FROM products WHERE name LIKE '{$input}%'";

    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result) > 0){?>
        
        <table class='table table-bordered table -stripped mt-4'>
            <thread>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Brand</th>
                </tr>
            </thread>
            <tbody>
                <?php
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row['id'];
                    $name = $row['name'];
                    $price = $row['price'];
                    $brand = $row['brand'];



                    ?>
                <tr>
                    <td><?php echo $id;?></td>
                    <td><?php echo $name;?></td>
                    <td><?php echo $price;?></td>
                    <td><?php echo $brand; ?></td>
                </tr>
<?php
                }
     
 ?>               </tbody>

        </table>

<?php
                
                
    }else{
        echo "<h4 class='text-danger text-center mt-3'>Product doesnt exist</h4>";
    }
}