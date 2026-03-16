#!/bin/sh
phpunit > doq/last_test.txt
cloc . --exclude-dir=tmp,vendor,non-php > doq/last_cloc.txt
