<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>index</title>
    <style>
        span {
            background-color: darkred;
        }
        b {
            font-weight: bold;
            color: green;
        }
    </style>
</head>
<body>
<!--
Разработать функции и реализовать с их помощью постраничный вывод произвольного русского текста по k абзацев на страницу.
Определить количество символов, количество слов и количество предложений для каждого абзаца.
Выделить цветом все вхождения какого-либо слова (подобрать из контекста) с любым регистром символов, не изменяя регистр оригинала.
Если повторов слова мало, можно взять несколько слов.
Выделить первую букву каждого предложения жирным шрифтом.
Вывести полученную страницу в браузер.
-->
<?php
require __DIR__ . '/functions.php';

$text = 'Через минуту перед прокуратором стоял Марк Крысобой. Ему прокуратор приказал сдать преступника начальнику тайной службы и при этом передать ему распоряжение прокуратора о том, чтобы Иешуа Га-Ноцри был отделен от других осужденных, а также о том, чтобы команде тайной службы было под страхом тяжкой кары запрещено о чем бы то ни было разговаривать с Иешуа или отвечать на какие-либо его вопросы. 
По знаку Марка вокруг Иешуа сомкнулся конвой и вывел его с балкона.
Затем перед прокуратором предстал стройный, светлобородый красавец со сверкающими на груди львиными мордами, с орлиными перьями на гребне шлема, с золотыми бляшками на портупее меча, в зашнурованной до колен обуви на тройной подошве, в наброшенном на левое плечо багряном плаще. Это был командующий легионом легат. Его прокуратор спросил о том, где сейчас находится себастийская когорта. Легат сообщил, что себастийцы держат оцепление на площади перед гипподромом, где будет объявлен народу приговор над преступниками.
Тогда прокуратор распорядился, чтобы легат выделил из римской когорты две кентурии. Одна из них, под командою Крысобоя, должна будет конвоировать преступников, повозки с приспособлениями для казни и палачей при отправлении на Лысую Гору, а при прибытии на нее войти в верхнее оцепление. Другая же должна быть сейчас же отправлена на Лысую Гору и начинать оцепление немедленно. Для этой же цели, то есть для охраны Горы, прокуратор попросил легата отправить вспомогательный кавалерийский полк – сирийскую алу.
Когда легат покинул балкон, прокуратор приказал секретарю пригласить президента Синедриона, двух членов его и начальника храмовой стражи Ершалаима во дворец, но при этом добавил, что просит устроить так, чтобы до совещания со всеми этими людьми он мог говорить с президентом раньше и наедине.
Приказания прокуратора были исполнены быстро и точно, и солнце, с какой-то необыкновенною яростью сжигавшее в эти дни Ершалаим, не успело еще приблизиться к своей наивысшей точке, когда на верхней террасе сада у двух мраморных белых львов, стороживших лестницу, встретились прокуратор и исполняющий обязанности президента Синедриона первосвященник иудейский Иосиф Каифа.
В саду было тихо. Но, выйдя из-под колоннады на заливаемую солнцем верхнюю площадь сада с пальмами на чудовищных слоновых ногах, площадь, с которой перед прокуратором развернулся весь ненавистный ему Ершалаим с висячими мостами, крепостями и – самое главное – с не поддающейся никакому описанию глыбой мрамора с золотою драконовой чешуею вместо крыши – храмом Ершалаимским, – острым слухом уловил прокуратор далеко и внизу, там, где каменная стена отделяла нижние террасы дворцового сада от городской площади, низкое ворчание, над которым взмывали по временам слабенькие, тонкие не то стоны, не то крики.
Прокуратор понял, что там на площади уже собралась несметная толпа взволнованных последними беспорядками жителей Ершалаима, что эта толпа в нетерпении ожидает вынесения приговора и что в ней кричат беспокойные продавцы воды.
Прокуратор начал с того, что пригласил первосвященника на балкон, с тем чтобы укрыться от безжалостного зноя, но Каифа вежливо извинился и объяснил, что сделать этого не может. Пилат накинул капюшон на свою чуть лысеющую голову и начал разговор. Разговор этот шел по-гречески.
Пилат сказал, что он разобрал дело Иешуа ГаНоцри и утвердил смертный приговор.
Таким образом, к смертной казни, которая должна совершиться сегодня, приговорены трое разбойников: Дисмас, Гестас, Варравван и, кроме того, этот Иешуа Га-Ноцри. Первые двое, вздумавшие подбивать народ на бунт против кесаря, взяты с боем римскою властью, числятся за прокуратором, и, следовательно, о них здесь речь идти не будет. Последние же, Вар-равван и Га-Ноцри, схвачены местной властью и осуждены Синедрионом. Согласно закону, согласно обычаю, одного из этих двух преступников нужно будет отпустить на свободу в честь наступающего сегодня великого праздника пасхи.';

$textArray = explode(PHP_EOL, $text); // преобразовываем переменную в массив ???когда указываю в разделителе "\n\r"- все ломается

$itemsPerPage = 2; // кол-во абзацев на странице
$page = getPage();
$itemsCount = count($textArray); // кол-во абзацев
$countPages = getPagesCount($itemsCount, $itemsPerPage); // получаем кол-во страниц с округлением

if (!checkPageNumbers($page, $countPages)){
    die("the requested page does not exist");
} // проверяем, чтобы номер страницы не превышал их кол-ва

$firstNumber = getDatabase($page, $itemsPerPage); // определеям элементы массива для вывода на страницу
$pageData = getSliceData($textArray, $firstNumber, $itemsPerPage); // обрезаем массив
$string = implode($pageData); // преобразование массива в строку
echo $string. '<br>';
echo $html = pageCounter($page, $countPages);

// Определить количество символов, количество слов и количество предложений для каждого абзаца.
$countParagraph = substr_count($string, "\r\n");
echo '<p>number of paragraphs&colon;&nbsp;</p>' .$countParagraph. '<br>'; //количество абзацев

$countSentences = mb_substr_count($string, '.');
echo '<p>number of sentences&colon;&nbsp;</p>' .$countSentences. '<br>'; //количество предложений

$countWords = str_word_count($string);
echo '<p>number of words&colon;&nbsp;</p>' .$countWords. '<br>'; //количество слов

$countSymbols = mb_ereg_replace('[\s]', '', $string); //количество символов
echo '<p>number of symbols&colon;&nbsp;</p>' .mb_strlen($countSymbols). '<br>';


// Выделить цветом все вхождения какого-либо слова (подобрать из контекста) с любым регистром символов, не изменяя регистр оригинала.
$word = 'прокуратор';
echo str_replace('прокуратор', '<span>прокуратор</span>', $string), '<br>';

// Выделить первую букву каждого предложения жирным шрифтом.
$firstLetter = mb_substr($string, 0, 1);
$firstLetter = changing($firstLetter);

?>
</body>
</html>