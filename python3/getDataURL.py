import base64

def getDataURL(imgPath):
    result= "data:image/"+imgPath.split(".")[-1]+";base64,"
    with open("./"+imgPath, "br") as f:
        return result+base64.b64encode(f.read()).decode('ascii')