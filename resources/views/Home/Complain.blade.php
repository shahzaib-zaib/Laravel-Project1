@extends("Layout/master")


@section("showdata")
<h1>This is Complain Page</h1>

<?php

    if($data == "China"){
        echo "<h1>This is China</h1>";
    }else{
        echo "<h1>This is Pakistan</h1>";
    }

?>

@endsection