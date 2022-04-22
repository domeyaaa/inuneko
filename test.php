<?php

// $p_date = date("d-F-Y");

// echo $p_date;
// $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890';
// $ref_arr = array();
// $ref = '';

// for($i = 0; $i < 6 ; $i++ ){
//     $x = rand(1,62);
//     $char = $chars[$x];
//     array_push($ref_arr,$char);
// }

// foreach($ref_arr as $x=>$x_value){
//     $ref = $ref.$x_value;
// }

$conn = mysqli_connect('localhost', 'root', '', 'province');

$sql = "SELECT * FROM provinces";
$qry = mysqli_query($conn, $sql);

$sql1 = "SELECT * FROM amphurse";
$qry1 = mysqli_query($conn, $sql1);

function district()
{
?>
    <script>
        alert('OK');
    </script>
<?php

}

?>

<head>

    <script>
        function call_php() {
            alert('OK');
            
        }
    </script>

</head>

<select name="" onchange="">
    <?php while ($rows = mysqli_fetch_assoc($qry)) : ?>
        <option value=""><?php echo $rows['name_th'] ?></option>
    <?php endwhile ?>
</select>

<button onclick="call_php()">xxxxxxxxxx</button>

<select name="" id="district" disabled>

    <option value="">เลือกอำเภอ</option>

</select>