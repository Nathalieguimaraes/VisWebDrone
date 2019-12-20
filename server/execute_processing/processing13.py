# -*- coding: utf-8 -*-
"""
Created on Tue Jul  2 10:38:23 2019

@author: Nathalie
"""
import os

os.chdir(r"C:/xampp/htdocs/test/jQuery-File-Upload/server/php/files") 

myCmd13= 'mm3d C3DC BigMac ".*JPG" Ground_etrs89  > C:/xampp/htdocs/test/jQuery-File-Upload/server/php/files/out13.txt'
os.system(myCmd13)
print(os.system(myCmd13))
File13 = open('C:/xampp/htdocs/test/jQuery-File-Upload/server/php/files/out13.txt','r') 
print(File13.read().replace("\n", "</BR>"))
print('process 13')
