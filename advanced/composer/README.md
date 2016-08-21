# AWS PHP SDK

	RUN composer require aws/aws-sdk-php

<http://docs.aws.amazon.com/aws-sdk-php/v3/guide/getting-started/installation.html>

	docker build -t phpaws .

# Credentials

<http://docs.aws.amazon.com/aws-sdk-php/v3/guide/guide/credentials.html#environment-credentials>

Fill out `env.list` else you will get a "PHP Fatal error:  Uncaught exception 'Aws\Exception\CredentialsException'"

# Demo, send an email

<http://docs.aws.amazon.com/aws-sdk-php/v3/api/api-email-2010-12-01.html#sendemail>

	docker run --name phpaws --env-file ./env.list --rm -p 2015:2015 phpaws
