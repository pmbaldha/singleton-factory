<?php
$data = [
	"prashant",
	"address" => [
		"city" => "surat",
		"state" => "gujarat"
	],
];
$json = json_encode($data);
echo $json;

$json_to_var_replace_arr = [
	"'" => "_s_sq_s_",
	'"' => "_s_dq_s_",
	'{' => "_s_sb_s_",
	'}' => "_s_eb_s_",
	':' => "_s_cl_s_",
	',' => "_s_cm_s_",
	',' => "_s_sp_s_",
	
];
$var = str_replace(array_keys($json_to_var_replace_arr), array_values($json_to_var_replace_arr), $json);

echo "<br/>";
echo $var;

