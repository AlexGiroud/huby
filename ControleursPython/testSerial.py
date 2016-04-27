#!/usr/bin/python
import serial
import urllib
from time import localtime, strftime
#import re
import time
import configparser

config = configparser.ConfigParser()
config.read('config.ini')

port = serial.Serial(config["SERIAL"]["Interface"], baudrate=9600, timeout=3.0)
#port = serial.Serial("ttyAMA0", baudrate=9600, timeout=3.0)
prog = re.compile("^[A-Z0-9a-z]{10}$")

while True:
    rcv = port.read(10)
    recivedString = rcv.decode('utf-8').replace('\n','').replace('\r','').replace('\r\n','')
    print(recivedString)
    if prog.find(recivedString):
        print("matched")
        params = urllib.urlencode({'flow': 'in'})
        headers = {"Content-type": "application/x-www-form-urlencoded","Accept": "text/plain"}
        conn = httplib.HTTPConnection(config["SERVER"]["Url"]+"AddEntry.php:80")
        try:
            conn.request("GET", "", params, headers)
            response = conn.getresponse()
            data = response.read()
            conn.close()
        except:
            print "Connection failed"
        #        test = urllib.urlopen(config["SERVER"]["Url"]+"action.controller.php?action=motion")
        time.sleep(1)
        port.flushInput()
    else:
        print('invalid rfid detection')