# -*- coding: utf-8 -*-
"""
Created on Tue Jul  2 10:38:23 2019

@author: Nathalie
"""
import os

os.chdir(r"C:/xampp/htdocs/test/jQuery-File-Upload/server/php/files") 

myCmd6 = 'mm3d Tapas FraserBasic .*JPG Out=Arbitrary > C:/xampp/htdocs/test/jQuery-File-Upload/server/php/files/out6.txt'
os.system(myCmd6)
print(os.system(myCmd6))
File6 = open('C:/xampp/htdocs/test/jQuery-File-Upload/server/php/files/out6.txt','r') 
print(File6.read().replace("\n", "</BR>")) 
print('process 6')