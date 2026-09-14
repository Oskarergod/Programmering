<?php
$svar=$_POST ["svar"]; 
if (!$svar)
    {
        print ("Du har ikke svart på spørsmålet. <br />");  
    }
    else if ($svar == "M")
{
    Print ("Du har svart at du er en Mann. <br />");
}
else if ($svar == "K")
    {
        Print ("Du har svart at du er en Kvinne. <br />");
    }
    else
        {
            Print ("Du har ikke svart riktig. <br />");
        }
        ?>