<?php
declare(strict_types=1);
function accessMessage(int $age, bool $hasTicket, bool $banned): string {

if ($age < 16) {
    return'accès refusé : mineur';
}
if ($hasTicket === false) {
    return 'accès refusé : billet abscent';
}
if ($banned === true) {
    return 'accès refusé : joueur banni';
}

return'accès autorisé';
}
echo accessMessage(17, true, false), "\n";
echo accessMessage(17, true, true), "\n";
