<section class="main-section alabaster" id="users">
	<div class="container fullsize">
    <table  >
        <tr>
            
            <td class="tableheader"><strong>First Name</strong></td>
            <td class="tableheader"><strong>Last Name</strong></td>
            <td class="tableheader"><strong>Email</strong></td>
            <td class="tableheader"><strong>Home Address</strong></td>
            <td class="tableheader"><strong>Home Phone</strong></td>
            <td class="tableheader"><strong>Cell Phone</strong></td>
            
        </tr>
        <?php
         require('mm.php');
        //if(!isset($_SESSION)) 
         //{ 
        //    session_start(); 
        //     $sql = "SELECT * FROM GuestInfo WHERE";
        //     if(isset($_POST["name"]) and $_POST["name"]!="")
        //     {
        //         $sql=$sql." first_name LIKE '%".$_POST["name"]."%' OR last_name LIKE '%".$_POST["name"]."%'";
        //     }
        //     else
        //     {
        //         $sql=$sql." first_name = '' OR last_name= ''";
        //     }
        //     if(isset($_POST["email"]) and $_POST["email"]!= "" )
        //     {
        //         $sql=$sql."OR email LIKE '%".$_POST["email"]."%'";
        //     }
        //     if(isset($_POST["phone"]) and $_POST["phone"]!= "")
        //     {
        //         $sql=$sql."OR home_phone LIKE'%".$_POST["phone"]."%' OR cell_phone LIKE '%".$_POST["phone"]."%';";
        //     }
        //     $result = $mysqli->query($sql);
        // }
      //  else{
            $sql = "SELECT * FROM GuestInfo";
            $result = $mysqli->query($sql);
   //     }
        
        while($row = $result -> fetch_assoc()){
            echo "<tr>";
                echo "<td>";
                    echo $row["first_name"];
                echo "</td>";
                echo "<td>";
                    echo $row["last_name"];
                echo "</td>";
                echo "<td>";
                    echo $row["email"];
                echo "</td>";
                echo "<td>";
                    echo $row["home_address"];
                echo "</td>";
                echo "<td>";
                    echo $row["home_phone"];
                echo "</td>";
                echo "<td>";
                    echo $row["cell_phone"];
                echo "</td>";
            echo "</tr>";
        }
    ?>
            </table>
    <br/>
    <br/>
    
        </div>
</section>