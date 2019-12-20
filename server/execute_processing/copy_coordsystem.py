# -*- coding: utf-8 -*-
"""
Created on Thu Jul 11 13:44:31 2019

@author: Nathalie
"""

import os

os.chdir(r"C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/coord_system/") 

myCmd1 = 'COPY "C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/coord_system/" "C:/xampp/htdocs/test/jQuery-File-Upload/server/php/files/" > C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/copy_file_coord.txt'
os.system(myCmd1)
print(os.system(myCmd1))
print('process done')
