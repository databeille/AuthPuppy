<?php
$language_block = '<form id="language_form" action="'.url_for('change_language').'">';
$language_block .= '<table id="language_table">';
$language_block .= str_replace('</tr>','<td><input type="submit" value="ok" /></td></tr>',$form);
$language_block .= '</table>';
$language_block .= '</form>';

echo $language_block;
?>
