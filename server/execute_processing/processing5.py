# -*- coding: utf-8 -*-
"""
Created on Tue Jul  2 10:38:23 2019

@author: Nathalie
"""
import os

os.chdir(r"C:/xampp/htdocs/test/jQuery-File-Upload/server/php/files") 

myCmd5 = 'mm3d Schnaps .*JPG  > C:/xampp/htdocs/test/jQuery-File-Upload/server/php/files/out5.txt'
os.system(myCmd5)
print(os.system(myCmd5))
File5 = open('C:/xampp/htdocs/test/jQuery-File-Upload/server/php/files/out5.txt','r') 
print(File5.read().replace("\n", "</BR>"))
print('process 5')