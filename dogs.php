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


//Питання:
//1.Індекси у базах даних призначені для швидшого пошуку 
//та доступу до даних. Вони створюють впорядкований список 
//значень для одного чи кількох стовпців таблиці, що дозволяє 
//оптимізувати запити та покращувати продуктивність бази даних.
//2.INNER JOIN, LEFT JOIN, RIGHT JOIN, FULL JOIN, SELF JOIN, CROSS JOIN.
//3.Dependency Inversion - це принцип SOLID, що вказує на необхідність 
//орієнтуватися на абстракції та інтерфейси, а не на конкретні реалізації, 
//для зменшення залежностей та забезпечення гнучкості програми.
//4. 1)GET використовується для запиту даних з сервера та передачі їх у URL.
//   2)POST використовується для відправки даних на сервер. 
//5.Змінна self завжди посилається на поточний клас, тоді як static може змінюватися в підкласах.
//6. 1)MVC взаємодіє з обох контролера та моделі.
//   2)MVP взаємодіє тільки з презентером, який взаємодіє з моделлю.
//7.== порівнює значення з неявним приведенням типів, тоді як === порівнює значення та типи без приведення типів. 
//8.final class - це клас, який не може бути унаслідованим, і final method - це метод, який не може бути перевизначений.
//9.Фреймфорки з якими я працював Laravel, Node.js, typescript, express.js.
//10.Маю досвід роботи з php, js, html, css, git. Можу створювати та працювати за API,
//знаю PostgreSQL, маю невеликий досвід роботи з Wordpress, можу розбиратися в чужому коді,
//маю знання vue.js, розумію протоколи взаємодіЇ HTTP, HTTPS, RESTful API. 

?>