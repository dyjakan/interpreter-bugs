<?php
$input = "plain [indent] deep [indent] [abcd]deeper[/abcd] [/indent] deep [/indent] plain"; 

function parseTagsRecursive($input)
{
    
    $regex = '#\[indent]((?:[^[]|\[(?!/?indent])|(?R))+)\[/indent]#';

    if (is_array($input)) {
        $input = '<div style="margin-left: 10px">'.$input[0].'</div>';
    }

    return preg_replace_callback($regex, 'parseTagsRecursive', $input)($regex, 'parseTagsRecursive', $input);
}

$output = parseTagsRecursive($input);

echo $output, "\n";

?>
