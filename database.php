<?


$server="localhost";
$username="root";
$password="kiran2001";
$con=mysqli_connect($server,$username,$password,"vibe");

if($con)
{
    echo "success";
}
else
{
    echo "error";
}



?>