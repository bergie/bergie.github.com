#!/bin/sh
SOURCE=https://feeds.foursquare.com/history/MUD0LK0IBMWE3HUHMDDTWLNV0VMTODVM.ics
TARGET=/home/bergie/Projects/bergie/_midgard/foursquare.ics
curl -s $SOURCE > $TARGET
fromdos $TARGET
sed -i '/^DTSTAMP/d' $TARGET
