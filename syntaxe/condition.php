<?php

    /** Opérateurs de comparaison et de logique
     * - "==" (égalité)
     * - "===" (égalité strict)
     * - "!=" (inégalité)
     * - ">" (plus grand)
     * - ">=" (plus grand ou égal)
     * - "<" (plus petit)
     * - "<=" (plus petit ou égal)
     * - "&&" (ET logique)
     * - "||" (OU logique)
     * - "!" (NON logique)
     */

    $name = "benoit";
    $age = true;
    if ($name == "benoit" && $age === true) {
        echo  "je m'appelle " . $name . " \n";
    } else {
        echo  "pas de nom \n";
    }

    switch ($name) {
        case "benoit":
            echo  "je m'appelle " . $name . " \n";
            break;
        default:
            echo  "pas de nom \n";
    }