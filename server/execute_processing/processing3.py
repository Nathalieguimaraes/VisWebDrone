# -*- coding: utf-8 -*-
"""
Created on Tue Jul  2 10:38:23 2019

@author: Nathalie
"""
import os

os.chdir(r"C:/xampp/htdocs/test/jQuery-File-Upload/server/php/files") 

myCmd3 = 'mm3d OriConvert "#F=N X Y Z" GpsCoordinatesFromExif.txt RAWGNSS_N ChSys=DegreeWGS84@RTLFromExif.xml MTD1=1 NameCple=FileImagesNeighbour.xml DN=50  > C:/xampp/htdocs/test/jQuery-File-Upload/server/php/files/out3.txt'
os.system(myCmd3)
print(os.system(myCmd3))
File3 = open('C:/xampp/htdocs/test/jQuery-File-Upload/server/php/files/out3.txt','r') 
print(File3.read().replace("\n", "</BR>"))
print('process 3')