# -*- coding: utf-8 -*-
"""
Created on Tue Jul  2 10:38:23 2019

@author: Nathalie
"""
import os

os.chdir(r"C:/xampp/htdocs/test/jQuery-File-Upload/server/php/files") 

myCmd2 = 'mm3d XifGps2Xml .*JPG RAWGNSS  > C:/xampp/htdocs/test/jQuery-File-Upload/server/php/files/out2.txt'
os.system(myCmd2)
print(os.system(myCmd2))
File2 = open('C:/xampp/htdocs/test/jQuery-File-Upload/server/php/files/out2.txt','r') 
print(File2.read().replace("\n", "</BR>"))
print('process 2')