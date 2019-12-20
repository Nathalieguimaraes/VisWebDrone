# -*- coding: utf-8 -*-
"""
Created on Wed Jul 10 13:22:32 2019

@author: Nathalie
"""

import os

os.chdir(r"C:/xampp/htdocs/test/jQuery-File-Upload/server/php/files") 

myCmd1 = 'rmdir /Q /S "C:/xampp/htdocs/test/jQuery-File-Upload/server/php/files/"  > C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/delete_folders.txt'
os.system(myCmd1)
print(os.system(myCmd1))
print('process done')

