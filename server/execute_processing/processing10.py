# -*- coding: utf-8 -*-
"""
Created on Tue Jul  2 10:38:23 2019

@author: Nathalie
"""
import os

os.chdir(r"C:/xampp/htdocs/test/jQuery-File-Upload/server/php/files") 

myCmd10= 'mm3d ChgSysCo  .*JPG Ground_RTL RTLFromExif.xml@SysCoETRS89_EPSG3763.xml Ground_etrs89 > C:/xampp/htdocs/test/jQuery-File-Upload/server/php/files/out10.txt'
os.system(myCmd10)
print(os.system(myCmd10))
File10 = open('C:/xampp/htdocs/test/jQuery-File-Upload/server/php/files/out10.txt','r') 
print(File10.read().replace("\n", "</BR>"))
