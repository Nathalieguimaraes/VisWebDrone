# -*- coding: utf-8 -*-
"""
Created on Wed Aug 28 14:55:03 2019

@author: Nathalie
"""
from geoserver.catalog import Catalog

cat = Catalog("http://localhost:8080/geoserver/rest")
resource = cat.get_resource("ortofotog", workspace="orto_trigo")
resource.projection='EPSG:4326'
cat.save(resource)