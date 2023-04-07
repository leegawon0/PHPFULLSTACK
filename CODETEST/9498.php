<?php
fscanf( STDIN, "%d", $score );
if($score >= 90 && $score <= 100)
{
    $grade = "A";
    fprintf( STDOUT, "%s", $grade );
}
else if ($score >= 80)
{
    $grade = "B";
    fprintf( STDOUT, "%s", $grade );
}
else if ($score >= 70)
{
    $grade = "C";
    fprintf( STDOUT, "%s", $grade );
}
else if ($score >= 60)
{
    $grade = "D";
    fprintf( STDOUT, "%s", $grade );
}
else
{
    $grade = "F";
    fprintf( STDOUT, "%s", $grade );
}
?>