#!/bin/bash
# Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
# For licensing, see LICENSE.md or http://ckeditor.com/license

# Export language files to .po (gettext) format.

set -e

echo "CKLangTool - export translations to .po files."
echo ""

. ./_common.sh || exit

TARGETDIR=po

if [ ! -d "$TARGETDIR" ]; then
mkdir $TARGETDIR
fi

# Create po file for core
java -jar cklangtool/$CKLANGTOOL_VERSION/langtool.jar export -c=config -f=gettext -m=meta/ckeditor.core/meta.txt ../../lang/ $TARGETDIR/ckeditor.core/

# Update meta files for plugins
for i in "${plugins[@]}"
do
	java -jar cklangtool/$CKLANGTOOL_VERSION/langtool.jar export -c=config -f=gettext -m=meta/ckeditor.plugin-$i/meta.txt ../../plugins/$i/lang/ $TARGETDIR/ckeditor.plugin-$i/
done
# Update meta files for language files used by plugins' dialogs
for i in "${plugins_dialogs[@]}"
do
	java -jar cklangtool/$CKLANGTOOL_VERSION/langtool.jar export -c=config -f=gettext -m=meta/ckeditor.plugin-$i-dialogs/meta.txt ../../plugins/$i/dialogs/lang/ $TARGETDIR/ckeditor.plugin-$i-dialogs/
done
