# -*- coding: utf-8 -*-
"""
Created on Tue Jul  2 10:38:23 2019

@author: Nathalie
"""
import os

os.chdir(r"C:/xampp/htdocs/test/jQuery-File-Upload/server/php/files") 

myCmd1 = 'mm3d XifGps2Txt .*JPG > C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/out.txt'
os.system(myCmd1)
print(os.system(myCmd1))
File = open('C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/out.txt','r') 
print(File.read().replace("\n", "</BR>")) 

myCmd2 = 'mm3d XifGps2Xml .*JPG RAWGNSS  > C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/out2.txt'
os.system(myCmd2)
print(os.system(myCmd2))
File2 = open('C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/out2.txt','r') 
print(File2.read().replace("\n", "</BR>"))

myCmd3 = 'mm3d OriConvert "#F=N X Y Z" GpsCoordinatesFromExif.txt RAWGNSS_N ChSys=DegreeWGS84@RTLFromExif.xml MTD1=1 NameCple=FileImagesNeighbour.xml DN=50  > C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/out3.txt'
os.system(myCmd3)
print(os.system(myCmd3))
File3 = open('C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/out3.txt','r') 
print(File3.read().replace("\n", "</BR>"))


#myCmd4 = 'mm3d Tapioca File FileImagesNeighbour.xml 2448  > C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/out4.txt'
#os.system(myCmd4)
#print(os.system(myCmd4))
#File4 = open('C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/out4.txt','r') 
#print(File4.read().replace("\n", "</BR>"))
#
#myCmd5 = 'mm3d Schnaps .*JPG  > C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/out5.txt'
#os.system(myCmd5)
#print(os.system(myCmd5))
#File5 = open('C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/out5.txt','r') 
#print(File5.read().replace("\n", "</BR>"))
#
#myCmd6 = 'mm3d Tapas FraserBasic .*JPG Out=Arbitrary SH="_mini"   > C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/out6.txt'
#os.system(myCmd6)
#print(os.system(myCmd6))
#File6 = open('C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/out6.txt','r') 
#print(File6.read().replace("\n", "</BR>")) 
#
#myCmd7 = 'mm3d AperiCloud .*JPG Ori-Arbitrary  > C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/out7.txt'
#os.system(myCmd7)
#print(os.system(myCmd7))
#File7 = open('C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/out7.txt','r') 
#print(File7.read().replace("\n", "</BR>"))
#
#myCmd8 = 'mm3d CenterBascule .*JPG Arbitrary RAWGNSS_N Ground_Init_RTL  > C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/out8.txt'
#os.system(myCmd8)
#print(os.system(myCmd8))
#File8 = open('C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/out8.txt','r') 
#print(File8.read().replace("\n", "</BR>"))
#
#myCmd9 = 'mm3d Campari .*JPG Ground_Init_RTL Ground_RTL EmGPS=[RAWGNSS_N,5] AllFree=1 SH="_mini"  > C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/out9.txt'
#os.system(myCmd9)
#print(os.system(myCmd9))
#File9 = open('C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/out9.txt','r') 
#print(File9.read().replace("\n", "</BR>"))
#
#myCmd10= 'mm3d ChgSysCo  .*JPG Ground_RTL RTLFromExif.xml@SysCoETRS89_EPSG3763.xml Ground_etrs89 > C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/out10.txt'
#os.system(myCmd10)
#print(os.system(myCmd10))
#File10 = open('C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/out10.txt','r') 
#print(File10.read().replace("\n", "</BR>"))
#
#myCmd11= 'mm3d Malt Ortho ".*.JPG" Ground_etrs89 ResolTerrain=0.025 > C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/out11.txt'
#os.system(myCmd11)
#print(os.system(myCmd11))
#File11 = open('C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/out11.txt','r') 
#print(File11.read().replace("\n", "</BR>"))
#
#myCmd12= 'mm3d Tawny Ortho-MEC-Malt > C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/out12.txt'
#os.system(myCmd12)
#print(os.system(myCmd12))
#File12 = open('C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/out12.txt','r') 
#print(File12.read().replace("\n", "</BR>"))
#
#myCmd13= 'mm3d C3DC BigMac ".*JPG" Ground_etrs89  > C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/out13.txt'
#os.system(myCmd13)
#print(os.system(myCmd13))
#File13 = open('C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/out13.txt','r') 
#print(File13.read().replace("\n", "</BR>"))

