<?php
function makeSound($breed)
{
    switch ($breed) {
        case 'shiba-inu':
            return "woof! woof!";
        case 'mops':
            return "woof! woof!";
        case 'taxa':
            return "woof! woof!";
        case 'plush-labrador':
            return "this dog doesn't bark!";
        case 'rubber-taxa':
            return "squeaks!";
        default:
            return "Unknown breed.";
    }
}

function hunt($breed)
{
    switch ($breed) {
        case 'shiba-inu':
            return "Hunting...";
        case 'mops':
            return "Too lazy to hunt.";
        case 'taxa':
            return "Hunting...";
        case 'plush-labrador':
            return "This dog doesn't hunt.";
        case 'rubber-taxa':
            return "This dog doesn't hunt.";
        default:
            return "Unknown breed.";
    }
}

if (count($argv) != 3) {
    echo "Usage: php dog_actions.php breed action\n";
    exit(1);
}

$breed = $argv[1];
$action = $argv[2];

switch ($action) {
    case 'sound':
        echo makeSound($breed) . "\n";
        break;
    case 'hunt':
        echo hunt($breed) . "\n";
        break;
    default:
        echo "Unknown action. Use 'sound' or 'hunt'.\n";
        exit(1);
}


?>
