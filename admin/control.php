<?php
include('connect.php');
class data
{
    function insert_lich_chieu($name, $picture, $episode)
    {
        global $conn;
        $sql = "insert into lich_chieu(name,picture,espisode)  values ('$name','$picture','$episode')";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    function select_lich_chieu()
    {
        global $conn;
        $sql = "select * from lich_chieu";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
}