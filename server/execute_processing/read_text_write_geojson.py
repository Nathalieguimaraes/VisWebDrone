# read coordinates in txt file
from geojson import MultiPoint, Point, Feature, FeatureCollection, dump
    
txt_file = open("C:/xampp/htdocs/test/jQuery-File-Upload/server/php/files/GpsCoordinatesFromExif.txt", "r")
text_file = str(file.read(txt_file))

t = text_file.split("\n")

# print(t)
# print("len", len(t))

i = 0
j = 1
txt_list = []
lon_list = []
lat_list = []
lats_final = []
lons_final = []

while (i <= len(t)-1 or j <= len(t)):
    t2 = str(t[i:j])
    # print(t2)
    txt_list.append(t2)

    # print("txt_list", txt_list)
    split_list = txt_list[i].split(" ")
    
    # list with all longitudes of file
    lon_list.append(split_list[1:2])
    lon_list_string = str(lon_list[i:j])
    lon_list_verified = lon_list_string.replace("[['", "")
    lon_list_verified = lon_list_verified.replace("']]", "")
    # print("lon_list", lon_list_string)
    # print("verified_lon", lon_list_verified)
    lons_final.append(lon_list_verified)
    # print("lons_final",lons_final)

    # list with all latitudes of file
    lat_list.append(split_list[2:3])
    lat_list_string = str(lat_list[i:j])
    lat_list_verified = lat_list_string.replace("[['", "")
    lat_list_verified = lat_list_verified.replace("']]", "")
    # print("lat_list", lat_list_string)
    # print("verified_lat", lat_list_verified)
    lats_final.append(lat_list_verified)
    # print("lats_final",lats_final)
    
    i = i + 1
    j = j + 1
    
#print(len(lats_final))
#print(lats_final)

k = 0
while (k <= len(lats_final)-1): 
    coord = []
    coord.append(lons_final[k])
    coord.append(lats_final[k])
  
   
    point = MultiPoint([(float(lons_final[k]),float(lats_final[k])), (-156.22, 20.74), (-157.97, 21.46)])
    #Point((float(lat_list_verified),float(lon_list_verified)))

    features = []
    features.append(Feature(geometry=point, properties={"country": "Spain"}))

    # add more features...
    # features.append(...)

    feature_collection = FeatureCollection(features)

    with open('C:/xampp/htdocs/test/jQuery-File-Upload/server/php/files/lats_file.txt', 'w') as f:
        dump(feature_collection, f)
        
    k = k + 1


        







    


