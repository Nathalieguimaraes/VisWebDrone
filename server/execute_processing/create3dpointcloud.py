# -*- coding: utf-8 -*-
"""
Created on Wed Jul 10 13:22:32 2019

@author: Nathalie
"""

import os

os.chdir(r"C:\Users\Nathalie\Documents\REVEAL\PotreeConverter_1.6_windows_x64\PotreeConverter_1.6_windows_x64") 

myCmd1 = 'PotreeConverter.exe C:/xampp/htdocs/test/jQuery-File-Upload/server/php/files/C3DC_BigMac.ply -o C:/xampp/htdocs/potree --generate-page model3d --overwrite > C:/xampp/htdocs/test/jQuery-File-Upload/server/php/files/3dpointcloud_results.txt'
os.system(myCmd1)
print(os.system(myCmd1))
File = open('C:/xampp/htdocs/test/jQuery-File-Upload/server/php/files/3dpointcloud_results.txt','r') 
print(File.read().replace("\n", "</BR>")) 
print('process 1')