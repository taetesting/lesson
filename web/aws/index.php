<?php
require __DIR__ . '/../../vendor/autoload.php';

use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;

function getListObj($client, $bucket) 
{
    $iterator = $client->getIterator('ListObjects', array(
        'Bucket' => $bucket
    ));
    return $iterator;
}

const ACL_PRIVATE           = 'private';
const ACL_PUBLIC_READ       = 'public-read';
const ACL_PUBLIC_READ_WRITE = 'public-read-write';

$bucket            = 's3dummy.ap1.sys.am';
$setting["key"]    = 'AKIAJAR6EBWP55BNRSHA';
$setting["secret"] = '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';
$region            = 'ap-southeast-1';
$version           = '2006-03-01';
$credentials       = array(
                        'key'    => 'AKIAJAR6EBWP55BNRSHA',
                        'secret' => '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',
                    );

// $s3Client = S3Client::factory(array(
//             "region"  => $region,
//             "version" => $version,
//             "scheme"  => "http",

//         ));
$s3Client = new S3Client([
    'version'     => $version,
    'region'      => $region,
    'credentials' => $credentials
]);


$fileName = '../../assets/desert.jpg';
if (!file_exists ($fileName)) die ("FILE NOT FOUND");

$time     = time();
$keyName  = date('YmdHis', $time) . $keyName;
try {
    $result = $s3Client->putObject(array(
                'Bucket'       => $bucket,
                'SourceFile'   => $fileName,
                'ContentType'  => 'text/plain',
                'Key'          => $time . basename($fileName),
                'StorageClass' => 'REDUCED_REDUNDANCY',
                'ACL'          => ACL_PUBLIC_READ
        ));

    // echo $result['ObjectURL'] . "\n";
    $lstObj = getListObj($s3Client, $bucket);
    foreach ($lstObj as $obj) {
        echo $obj['Key'] . " -- " . $obj['Size'] . "<br/>";
    }
} catch (S3Exception $e) {
    echo $e->getMessage() . "\n";
}

//$lstObj = getListObj($s3Client, $bucket);
//var_dump($lstObj);
die;

$keyName  = 'key_name_demo';


