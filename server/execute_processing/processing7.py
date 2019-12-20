# -*- coding: utf-8 -*-
"""
Created on Tue Jul  2 10:38:23 2019

@author: Nathalie
"""
import os

os.chdir(r"C:/xampp/htdocs/test/jQuery-File-Upload/server/php/files") 

myCmd7 = 'mm3d AperiCloud .*JPG Ori-Arbitrary  > C:/xampp/htdocs/test/jQuery-File-Upload/server/php/files/out7.txt'
os.system(myCmd7)
print(os.system(myCmd7))
File7 = open('C:/xampp/htdocs/test/jQuery-File-Upload/server/php/files/out7.txt','r') 
print(File7.read().replace("\n", "</BR>"))
print('process 7')