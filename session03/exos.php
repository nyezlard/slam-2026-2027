<?php
$badgeValide = true;
$suspendu = false;
if ($badgeValide && !$suspendu)
    {
        echo "entrée autorisée";
        
    }else{
        echo "entrée refusée";
    }

function peutCommander(bool $compteValide, int $stock): bool
    {
        if (!$compteValide)
            {
                return false;
            }

        if ($stock <= 0)
            {
                return false;
            }

        return true;
    }

echo peutCommander(true, 4) ? "oui" : "non";

?>