# -*- coding: utf-8 -*-
"""
Created on Tue Jul  2 10:38:23 2019

@author: Nathalie
"""
import os

os.chdir(r"C:/xampp/htdocs/test/jQuery-File-Upload/server/php/files") 

myCmd12= 'mm3d Tawny Ortho-MEC-Malt > C:/xampp/htdocs/test/jQuery-File-Upload/server/php/files/out12.txt'
os.system(myCmd12)
print(os.system(myCmd12))
File12 = open('C:/xampp/htdocs/test/jQuery-File-Upload/server/php/files/out12.txt','r') 
print(File12.read().replace("\n", "</BR>"))
print('process 12')

