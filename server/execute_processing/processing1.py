# -*- coding: utf-8 -*-
"""
Created on Tue Jul  2 10:38:23 2019

@author: Nathalie
"""
import os

os.chdir(r"C:/xampp/htdocs/test/jQuery-File-Upload/server/php/files") 

myCmd1 = 'mm3d XifGps2Txt .*JPG > C:/xampp/htdocs/test/jQuery-File-Upload/server/php/files/out.txt'
os.system(myCmd1)
print(os.system(myCmd1))
File = open('C:/xampp/htdocs/test/jQuery-File-Upload/server/php/files/out.txt','r') 
print(File.read().replace("\n", "</BR>")) 
print('process 1')
