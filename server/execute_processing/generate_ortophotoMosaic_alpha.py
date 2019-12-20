# -*- coding: utf-8 -*-
"""
Created on Thu Jul 11 13:44:31 2019

@author: Nathalie
"""

import os

os.chdir(r"C:/xampp/htdocs/test/jQuery-File-Upload/server/php/files/Ortho-MEC-Malt/") 

myCmd1 = 'gdalbuildvrt -srcnodata "0 0 0" output.vrt Orthophotomosaic.tif'
os.system(myCmd1)
print(os.system(myCmd1))
print('process done')

myCmd2 = 'gdal_translate output.vrt ortofotog.tif -b 1 -b 2 -b 3 -b mask'
os.system(myCmd2)
print(os.system(myCmd2))
print('process done')