<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>str_functions-05</title>
    <style>
        span {
            background-color: darkred;
        }
    </style>
</head>
<body>
<h1>Task_1</h1>
<!--Определить, сколько раз встречается в тексте слово Symfony и вывести текст, выделив его в тексте цветом-->
<?php
$text =
    'What is Symfony. Symfony is a set of PHP Components, a Web Application framework, a Philosophy, and a Community - all working together in harmony.
Symfony Framework. The leading PHP framework to create websites and web applications. Built on top of the Symfony Components.
Symfony Components. A set of decoupled and reusable components on which the best PHP applications are built, such as Drupal, phpBB, and eZ Publish.
Symfony Community. A passionate group of over 600,000 developers from more than 120 countries, all committed to helping PHP surpass the impossible.
Symfony Philosophy. Embracing and promoting professionalism, best practices, standardization and interoperability of applications.';

$sum = mb_substr_count($text, 'Symfony');
echo str_replace('Symfony', '<span>Symfony</span>', $text), '<br>';
echo '<h3>number of the text = </h3>' .$sum. '<br>';
?>

<h1>Task_2</h1>
<!--Вывести в браузер статистику файла – количество абзацев, предложений, слов, символов.-->
<?php
$text =
    'What is Symfony. Symfony is a set of PHP Components, a Web Application framework, a Philosophy, and a Community - all working together in harmony.
     Symfony Framework. The leading PHP framework to create websites and web applications. Built on top of the Symfony Components.
     Symfony Components. A set of decoupled and reusable components on which the best PHP applications are built, such as Drupal, phpBB, and eZ Publish.
     Symfony Community. A passionate group of over 600,000 developers from more than 120 countries, all committed to helping PHP surpass the impossible.
     Symfony Philosophy. Embracing and promoting professionalism, best practices, standardization and interoperability of applications.
     ';
echo nl2br($text);
// количество абзацев
$countParagraph = substr_count($text, PHP_EOL);
echo '<h3>number of paragraphs = </h3>' .$countParagraph. '<br>';

// количество предложений
$countSentences = mb_substr_count($text, '.');
echo '<h3>number of sentences = </h3>' .$countSentences. '<br>';

// количество слов
$countWords = str_word_count($text);
echo '<h3>number of words = </h3>' .$countWords. '<br>';

// количество символов
$countSymbols = mb_ereg_replace('[\s]', '', $text);
echo '<h3>number of symbols = </h3>' .mb_strlen($countSymbols). '<br>';
?>

<h1>Task_3</h1>
<!--Найти самое длинное слово. Если таких несколько, вывести в браузер их все.-->
<?php
$text =
    'What is Symfony. Symfony is a set of PHP Components, a Web Application framework, a Philosophy, and a Community - all working together in harmony.
Symfony Framework. The leading PHP framework to create websites and web applications. Built on top of the Symfony Components.
Symfony Components. A set of decoupled and reusable components on which the best PHP applications are built, such as Drupal, phpBB, and eZ Publish.
Symfony Community. A passionate group of over 600,000 developers from more than 120 countries, all committed to helping PHP surpass the impossible.
Symfony Philosophy. Embracing and promoting professionalism, best practices, standardization and interoperability of applications.';

$str = explode(' ', preg_replace('/[[:punct:]\s]+/u', ' ', $text));
$maxWord = $str[0];
$total = [];
for ($i = 0; $i < count($str); $i++){
    if (strlen($str[$i]) > strlen($maxWord)){
        $maxWord = $str[$i];
    }
}
echo '<h3>the max word is: = </h3>' .$maxWord. '<br>';
?>
<h1>Task_4</h1>
<!--Для каждого символа, имеющегося в тексте подсчитать, сколько раз он там встречается, символы расположить в
возрастающем порядке.
-->
<?php
$text =
    'What is Symfony. Symfony is a set of PHP Components, a Web Application framework, a Philosophy, and a Community - all working together in harmony.
Symfony Framework. The leading PHP framework to create websites and web applications. Built on top of the Symfony Components.
Symfony Components. A set of decoupled and reusable components on which the best PHP applications are built, such as Drupal, phpBB, and eZ Publish.
Symfony Community. A passionate group of over 600000 developers from more than 120 countries, all committed to helping PHP surpass the impossible.
Symfony Philosophy. Embracing and promoting professionalism, best practices, standardization and interoperability of applications.';

foreach (count_chars($text, 1) as $i => $val) {
    echo "\"" , chr($i) , "\" встречается в строке $val раз(а). <br>";
}
?>
</body>
</html>