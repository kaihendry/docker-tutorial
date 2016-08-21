<pre>
<?php
require 'vendor/autoload.php';
echo `composer show`;

use Aws\Ses\SesClient;
use Aws\Ses\Exception\SesException;

$fromAdr = getenv("FROM");

$SesClient = new Aws\Ses\SesClient([
	'version'   =>  'latest',
	'region'    =>  getenv("REGION")
]);


$result = $SesClient->sendEmail([
	'Destination' => [
		'ToAddresses' => [
			getenv("TO")
		],
	],
	'Message' => [
		'Body' => [
			'Html' => [
				'Charset' => 'UTF-8',
				'Data' => 'This message body contains HTML formatting. It can, for example, contain links like this one: Amazon SES Developer Guide.',
			],
			'Text' => [
				'Charset' => 'UTF-8',
				'Data' => 'This is the message body in text format.',
			],
		],
		'Subject' => [
			'Charset' => 'UTF-8',
			'Data' => 'Test email',
		],
	],
	'ReplyToAddresses' => [$fromAdr],
	'ReturnPath' => $fromAdr,
	'Source' => $fromAdr,
]);

print_r($result);


?>
</pre>

