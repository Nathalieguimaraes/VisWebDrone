# -*- coding: utf-8 -*-
"""
Created on Tue Jul  2 10:38:23 2019

@author: Nathalie
"""
import os

os.chdir(r"C:/xampp/htdocs/test/jQuery-File-Upload/server/php/files") 

myCmd4 = 'mm3d Tapioca File FileImagesNeighbour.xml 2448  > C:/xampp/htdocs/test/jQuery-File-Upload/server/php/files/out4.txt'
os.system(myCmd4)
print(os.system(myCmd4))
File4 = open('C:/xampp/htdocs/test/jQuery-File-Upload/server/php/files/out4.txt','r') 
print(File4.read().replace("\n", "</BR>"))
print('process 4')
