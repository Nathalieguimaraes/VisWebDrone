# -*- coding: utf-8 -*-
#!C:/Python27/python.exe

"""
Created on Wed Aug 28 14:55:03 2019

@author: Nathalie
"""

# Print our Python version

import sys

version = sys.version_info
full_version = str(version.major) + '.' + str(version.minor) + '.' + str(version.micro)

# 8000 more lines that don't include print()...

# === Our first line(s) of text output ===
# print ('Content-type: text/html')
print ('')

print ('Python Version: ', full_version)


from geoserver.catalog import Catalog

cat = Catalog("http://localhost:8080/geoserver/rest")
resource = cat.get_resource("ortofotog", workspace="orto_trigo")
resource.projection='EPSG:3763'
cat.save(resource)

layer_native_bbox = cat.get_layer("ortofotog").resource.native_bbox
layer_bbox = cat.get_layer("ortofotog").resource.latlon_bbox
layer_native_bbox = str(layer_native_bbox)
layer_bbox = str(layer_bbox)
print(layer_native_bbox)
print(layer_bbox)
print(layer_bbox[2:85])

f = open('file.txt', 'w')
f.write(layer_bbox[2:85])
f.close()

with open('file.txt') as fp:
    for line in iter(fp.readline, ''):
        print(line)
        text = str(line)
        def find(str, ch):
            for i, ltr in enumerate(str):
                if ltr == ch:
                    yield i

        results = (list(find(text, "'")))
        print(results)
        
        var_1 = line[0:results[0]-1]
        var_2 = line[results[1]+1:results[2]-1]
        var_3 = line[results[3]+1:results[4]-1]
        var_4 = line[results[5]+1:results[6]-1]
        var1 = float(var_1)
        print('var1',var1)
        var2 = float(var_2)
        print('var2',var2)
        var3 = float(var_3)
        print('var3',var3)
        var4 = float(var_4)
        print('var4',var4)
        
        med_var1_2 = (var1 + var2) / 2
        med_var3_4 = (var3 + var4) / 2
        print('med_var1_2', med_var1_2)
        print('med_var3_4', med_var3_4)
        final_var1 = str(med_var1_2)
        final_var2 = str(med_var3_4)
        
        f2 = open('C:/xampp/htdocs/test/jQuery-File-Upload/orthomap/file2.txt', 'w')
        f2.write(final_var1)
        f2.write(' ')
        f2.write(final_var2)
        f2.close()
        
        
