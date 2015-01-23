<?php
function shortcutAsHtml($shortcutKey) {
    return '<span class="btn">'.$shortcutKey.'</span>';
};
$json = file_get_contents("usefulwindowsshortcuts.json");
$shortcuts = json_decode($json, true);
shuffle($shortcuts);
foreach ($shortcuts as $shortcutIndex => $shortcut) {
    echo '<tr>';
    $shortcutKeysHtml = array_map('shortcutAsHtml',  $shortcut["keys"]);
    echo '<td class="keys">'.join(' ', $shortcutKeysHtml).'</td>';
    echo '<td class="description">'.$shortcut["description"].'</td>';
    echo '</tr>';
}
?>