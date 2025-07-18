<?php
$Tools = ["VS Code", "Git", "GitHub", "Figma", "Postman"];
echo "Tools Count: " . count($Tools) ."<br>";
echo"<br>";
if (in_array("GitHub", $Tools)) {
echo "GitHub is in the list"."<br>";
}
echo"<br>";
echo "All Tools: ";
print_r(array_values($Tools));
?>