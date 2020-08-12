@extends("Layout/master")


@section("showdata")
<h1>This is Complain Page</h1>

<?php

    //if($data == "China"){
    //    echo "<h1>This is China</h1>";
    //}else{
    //   echo "<h1>This is Pakistan</h1>";
    //}

?>




@if($data == "Pakistan")
<ul>
    <li>Karachi</li>
    <li>Lahore</li>
    <li>Islamabad</li>
    <li>KPK</li>
</ul>
@elseif($data = "India")
<ul>
    <li>Delhi</li>
    <li>Lakhnao</li>
    <li>Hyderabad</li>
    <li>Mumbai</li>
</ul>
$else
<h1>This is not Pakistan</h1>
@endif






@switch($data)
@case("China")
<h1>It's China</h1>
@break
@case("Pakistan")
<h1>It's Pakistan</h1>
@break
@case("India")
<h1>It's India</h1>
@break

@default
<h1>Not Found</h1>
@endswitch






@for($i = 1; $i <= 10; $i++)
        <p>Message</p>
@endfor


<ul>
@foreach($color as $c)
        <li>{{ $c }}</li>

@endforeach
</ul>



@while(true)
<h1>Pakistan</h1>
@endwhile



@endsection