<?php require_once __DIR__ . "/index.php";
$xmlstr = $xmlstr ?? "";

try {
    $xml = new SimpleXMLElement($xmlstr);

    // 1
    echo $xml->movie->plot . "<br>";

    // 2
    echo ($xml->movie->characters->character[0]->name = "Missis Coder") . "<br>";

    // 3
    function print_attrs($xml): void
    {
        echo "Xml tag: " . $xml->getName() .
            ", attributes: ";
        foreach ($xml->attributes() as $key => $value) {
            echo $key . " " . $value . "; ";
        }
        echo "<br>";
    }

    foreach ($xml->movie->rating as $rating) {
        print_attrs($rating);
    }

    // 4
    $xml->movie->rating[0]->addAttribute("new-attr", 5);
    print_attrs($xml->movie->rating[0]);


} catch (Exception $e) {
    echo "Error occured: " . $e;
}
