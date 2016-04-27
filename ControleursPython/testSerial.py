#!/usr/bin/python
import serial
import urllib.parse
import urllib.request
from time import localtime, strftime
import re
import time

port = serial.Serial("/dev/ttyAMA0", baudrate=9600)
#prog = re.compile('^[A-Z0-9a-z]{10}')

while True:
    rcv = port.read(14)
    receivedString = rcv.decode('utf-8')
    #print(len(receivedString))
    #temp = re.match(prog, receivedString)
    #values = {'flow' : 'in'}
    #data = urllib.parse.urlencode(values)
    #data = data.encode('ascii')
    if len(receivedString)== 14:
        #req = urllib.request.Request("localhost/PHP_FILES/AddEntry.php",data)
        #test = urllib.request.urlopen(req)
        fichier = open("Dashboard/action.txt", "r")
        stri = fichier.read()
        nb = int(stri) + 1
        str2 = str(nb)
        fichier.close()
        fichier = open("Dashboard/action.txt", "w")
        fichier.write(str2)
        fichier.close()
        print(receivedString)
        #time.sleep(1)
        port.flushInput()
    else:
        print('invalid rfid detection')
        print(receivedString)
