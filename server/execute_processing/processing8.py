# -*- coding: utf-8 -*-
"""
Created on Tue Jul  2 10:38:23 2019

@author: Nathalie
"""
import os

os.chdir(r"C:/xampp/htdocs/test/jQuery-File-Upload/server/php/files") 

myCmd8 = 'mm3d CenterBascule .*JPG Arbitrary RAWGNSS_N Ground_Init_RTL  > C:/xampp/htdocs/test/jQuery-File-Upload/server/php/files/out8.txt'
os.system(myCmd8)
print(os.system(myCmd8))
File8 = open('C:/xampp/htdocs/test/jQuery-File-Upload/server/php/files/out8.txt','r') 
print(File8.read().replace("\n", "</BR>"))
print('process 8')