import json
from pyproj import Proj, transform
from geojson import Point, Feature, FeatureCollection, dump

# read file
with open('C:/Users/Nathalie/Downloads/measure_6.json', 'r') as myfile:
    data=myfile.read()

# parse file
obj = json.loads(data)

# show values
#print(obj)
print("features: " + str(obj["features"]))

coord = str(obj["features"])
coord_stop = coord.find("]]},")
print('coord_stop',coord_stop)
coord_interval = coord[58:coord_stop]
print('coord_interval',coord_interval)

coord_final_interval = str(coord_interval)

def find(str, ch):
    for i, ltr in enumerate(str):
        if ltr == ch:
            yield i
                    
ind = (list(find(coord_final_interval, ",")))
print('ind',ind)
print('ind_length',len(ind))

coord_list = []
i = 0
j = 0
k = 0

while(i <= len(ind)):
    coord = coord_final_interval[ind[i]+k:ind[j]-1]
    
    coord_list.append(coord)
    k = 2    
    j = j + 1
    i = j - 1
    if(j >= 1):
        k = 2
        
    print('i,j,k', i,j,k)
    

    print('coord_list',coord_list)


    

    
coord1 = coord_final_interval[0:ind[0]-1]
coord1 = float(coord1)
print('coord1',coord1)

coord2 = coord_final_interval[ind[0]+2:ind[1]-1]
coord2 = float(coord2)
print('coord2',coord2)

coord3 = coord_final_interval[ind[1]+2:ind[2]-1]
coord3 = float(coord3)
print('coord3',coord3)


inProj = Proj(init='epsg:3763')
outProj = Proj(init='epsg:4326')
x1,y1 = 32848.62825000286,179609.62453126907
x2,y2 = transform(inProj,outProj,x1,y1)
print(x2,y2)

# write geojson
point = Point((x2, y2))

features = []
features.append(Feature(geometry=point))

# add more features...
# features.append(...)

feature_collection = FeatureCollection(features)

with open('C:/xampp/htdocs/test/jQuery-File-Upload/orthomap/myfile.geojson', 'w') as f:
   dump(feature_collection, f)
   
# write geojson
point = Point((x2, y2))

features = []
features.append(Feature(geometry=point))

# add more features...
# features.append(...)

feature_collection = FeatureCollection(features)

with open('C:/xampp/htdocs/test/jQuery-File-Upload/orthomap/myfile.geojson', 'w') as f:
   dump(feature_collection, f)