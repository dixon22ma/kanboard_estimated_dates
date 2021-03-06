<?php

namespace Kanboard\Plugin\EstimatedDates\Schema;

use PDO;

const VERSION = 3;

function version_3(PDO $pdo)
{
    $pdo->exec("ALTER TABLE tasks ADD COLUMN date_estimated_start INT DEFAULT '0'");
    $pdo->exec("ALTER TABLE tasks ADD COLUMN date_actual_due INT DEFAULT '0'");
    $pdo->exec("ALTER TABLE tasks ADD COLUMN date_first_reponse INTEGER DEFAULT '0'");
    $pdo->exec("ALTER TABLE tasks ADD COLUMN date_request INTEGER DEFAULT '0'");
}
