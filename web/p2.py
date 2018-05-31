#!C:/Program Files/Python36/python.exe
import os

filelist = [ f for f in os.listdir('file') if f.endswith(".txt") ]
for f in filelist:
    os.remove(os.path.join("file", f))
