this is Suzuki 14-12-1
<?php
$data = ['data' => 'this', 'data2' => 'that'];
$data = http_build_query($data);
$context = [
  'http' => [
    'method' => 'GET',
    'header' => "custom-header: custom-value\r\n" .
                "custom-header-two: custom-value-2\r\n",
    'content' => $data
  ]
];
$context = stream_context_create($context);
$result = file_get_contents('http://1.pt100t.sinaapp.com/pushdemo.php', false, $context);
?>
