<?php


$melee = array("Zenith", "Solar Flare Helmet", "Solar Flare Breastplate", "Solar Flare Leggings", 78);
$ranged = array("S.D.M.G.", "Vortex Helmet", "Vortex Breastplate", "Vortex Leggings", 62);
$summoner = array("Terraprisma", "Stardust Helmet", "Stardust Breastplate", "Stardust Leggings", 38);
$mage = array("Last Prism", "Nebula Helmet", "Nebula Breastplate", "Nebula Leggings", 54);

echo "Sobre a classe de melee: ";
foreach ($melee as $classe1) {
    echo $classe1 . " | ";
}
echo "\n";

echo "Sobre a classe de ranged: ";
foreach ($ranged as $classe2) {
    echo $classe2 . " | ";
}
echo "\n";

echo "Sobre a classe de summoner: ";
foreach ($summoner as $classe3) {
    echo $classe3 . " | ";
}
echo "\n";

echo "Sobre a classe de mage: ";
foreach ($mage as $classe4) {
    echo $classe4 . " | ";
}
echo "\n";

