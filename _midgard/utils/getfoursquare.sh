#!/bin/sh
SOURCE=https://feeds.foursquare.com/history/MUD0LK0IBMWE3HUHMDDTWLNV0VMTODVM.ics
TARGET=~/Projects/bergie/_midgard/foursquare.ics
curl -s $SOURCE > $TARGET
perl -pi -e 's/\r\n?/\n/g' $TARGET
sed -ibak '/^DTSTAMP/d' $TARGET
