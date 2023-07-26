<?php
$mobil = array("Xenia","Alphard","Toyota");
$jumlah_mobil = count($mobil);
// echo $jumlah_mobil;

// ?>
<!-- <ul> -->
    <?php
    // // for ($i=0; $i < 100; $i++) { 
    //     // echo "<li>$i</li>";
    // // }
    
    // for ($i=0; $i< ; $jumlah_mobil++) { 
    //     echo "<li>$mobil[$i]</li>";
    // }
    
    ?>

<!-- </ul> -->
<table border="1" style="border-collapse: collapse">
    <tr>
        <th></th>
        <th></th>
    </tr>

    <?php
    // echo html di dalam php
    // for ($i=0; $i <  $jumlah_mobil; $i++) { 
    //     echo"<tr>
    //         <td>" .  $i+1  . "</td>
    //         <td>$mobil[$i]</td>
    //     </tr>";

    // }



    // php di dalam html
    for ($i=0; $i < $jumlah_mobil; $i++) { ?>
        <tr>
            <td><?= $i+1 ?></td>
            <td><?= $mobil[$i] ?></td>
        </tr>

    <?php }?>

</table>