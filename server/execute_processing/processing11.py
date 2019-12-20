# -*- coding: utf-8 -*-
"""
Created on Tue Jul  2 10:38:23 2019

@author: Nathalie
"""
import os

os.chdir(r"C:/xampp/htdocs/test/jQuery-File-Upload/server/php/files") 

myCmd11= 'mm3d Malt Ortho ".*.JPG" Ground_etrs89 ResolTerrain=0.025 > C:/xampp/htdocs/test/jQuery-File-Upload/server/php/files/out11.txt'
os.system(myCmd11)
print(os.system(myCmd11))
File11 = open('C:/xampp/htdocs/test/jQuery-File-Upload/server/php/files/out11.txt','r') 
print(File11.read().replace("\n", "</BR>"))
print('process 11')