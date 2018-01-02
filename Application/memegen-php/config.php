<?php

#####################
## Global Settings ##
#####################

$yourId = "1";

$awsRegion = "us-east-2";

$dynamoDBTable = "images-$yourId";

$s3Bucket = "lab-$yourId-bucket";

###################
## Site Settings ##
###################

# Wether to save data locally (mongodb) or remotely (dynamodb)
$remoteData = false; # MongoDB
#$remoteData = true; # DynamoDB

# Wether to save the memes locally or remotely (s3)
$remoteFiles = false; # locally
#$remoteFiles = true; # s3

# Wether to set site color to blue or green (used to differentiate sites from ELB)
$siteColorBlue = false; # Green
#$siteColorBlue = true; # Blue

?>