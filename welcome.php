<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
    <link rel="stylesheet" href="style_accueil.css">

</head>

<body>
<a href="envoyer_des_mails.php?id=" class="btn btn-primary "  >reset</a>

<?php

echo "<div class=\"nav\">\n";
echo "        <img src=\"https://zupimages.net/up/21/07/9lml.jpg\" alt=\"\" class=\"logo\">\n";
echo "<ul id=\"navigation\">\n";
echo "  <li><a href=\"#\" title=\"aller à la section 1\">Mes Prestations</a></li>\n";
echo "  <li><a href=\"#\" title=\"aller à la section 2\">Mes Produits</a></li>\n";
echo "  <li><a href=\"#\" title=\"aller à la section 3\">Me Contacter</a></li>\n";
echo "  <li><a href=\"logout.php?id=\" class=\"btn btn-primary \" >se deconnecter</a></li>\n";
echo "</ul>\n";
echo "</div>\n";
echo "    <div class=\"container\">";

?>
<?php
// Attempt select query execution
$sql = "SELECT * FROM persons WHERE first_name='john'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>first_name</th>";
                echo "<th>last_name</th>";
                echo "<th>email</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['first_name'] . "</td>";
                echo "<td>" . $row['last_name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

<script type="text/javascript">
    function change()
        {
    document.dt.submit();
        }
    function over(this_,a,t)
        {
        <?php 
        echo "var c2=['$ccl2[0]','$ccl2[1]','$ccl2[2]'];";
        ?>
    var col;
    if(t==2)
        this_.style.backgroundColor=c2[a];
    else
        this_.style.backgroundColor="";
        }
    function go_lien(a)
        {
    top.document.location=a;
        }
</script>
</body>
</html>