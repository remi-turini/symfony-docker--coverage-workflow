#!/usr/bin/python3

import sys
import os
import shutil

# Functions


def copyFiles(src, dest):
    src_files = os.listdir(src)
    for file_name in src_files:
        full_file_name = os.path.join(src, file_name)
        if os.path.isfile(full_file_name):
            shutil.copy(full_file_name, dest)


# Program
if len(sys.argv) < 2:
    print('Usage: ./setup.sh prod|preprod|local')
    exit()

if sys.argv[1] == "prod":
    copyFiles('configuration/production/', '.')
elif sys.argv[1] == "preprod":
    copyFiles('configuration/pre-production/', '.')
elif sys.argv[1] == "local":
    copyFiles('configuration/local/', '.')
else:
    print('Usage: ./setup.sh prod|dev|local')
    exit()

os.system('unzip -o secrets.zip')
os.system('cat secrets/.env >> .env')
