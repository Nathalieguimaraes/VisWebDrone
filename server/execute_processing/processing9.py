# -*- coding: utf-8 -*-
"""
Created on Tue Jul  2 10:38:23 2019

@author: Nathalie
"""
import os

os.chdir(r"C:/xampp/htdocs/test/jQuery-File-Upload/server/php/files") 

myCmd9 = 'mm3d Campari .*JPG Ground_Init_RTL Ground_RTL EmGPS=[RAWGNSS_N,5] AllFree=1 > C:/xampp/htdocs/test/jQuery-File-Upload/server/php/files/out9.txt'
os.system(myCmd9)
print(os.system(myCmd9))
File9 = open('C:/xampp/htdocs/test/jQuery-File-Upload/server/php/files/out9.txt','r') 
print(File9.read().replace("\n", "</BR>"))
print('process 9')