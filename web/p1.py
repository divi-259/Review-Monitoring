#!C:/Program Files/Python36/python.exe
from textblob import TextBlob
sent={}
polarity={}
rid={}
f=open('file/rev.txt','r')
data=f.readlines()
i=0
for line in data:
    i=i+1
    l=line.split(',',1)
    li=list(l)
    s=TextBlob(li[1])
    r=s.sentiment
    sent[i]=r[0]
    polarity[i]=r[1]
    rid[i]=li[0]
    with open("file/Output.txt", "a+") as f1:
        print("{} {}".format(rid[i],sent[i]),file=f1)