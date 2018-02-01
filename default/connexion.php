<?php
if(isset($_POST["mail"]) && isset($_POST["pwd"] )){

if($_POST["mail"] === "exemple@gmail.com" && $_POST["pwd"] === "pwdd")
{
echo "ok";
} else {
    echo "Not Ok";
}

}
else {
    echo "bien essayé";
}