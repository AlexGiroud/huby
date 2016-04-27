#!/usr/bin/python
import serial
import http.client, urllib.request
from time import localtime, strftime
import re
import time
import configparser

config = configparser.ConfigParser()
config.read('config.ini')

port = serial.Serial(config["SERIAL"]["Interface"], baudrate=9600, timeout=3.0)
#port = serial.Serial("ttyAMA0", baudrate=9600, timeout=3.0)
prog = re.compile("^[A-Z0-9a-z]{12}$")

while True:
    rcv = port.read(14)
    recivedString = rcv.decode('utf-8')
    recivedString = recivedString[1:-1]
    print(recivedString)
    if prog.match(recivedString):
        print("matched")
        urllib.request.urlopen(config["SERVER"]["Url"]+"AddEntry.php?flow=in")
        #params = urllib.parse.urlencode({'flow': 'in'})
        #headers = {"Content-type": "application/x-www-form-urlencoded","Accept": "text/plain"}
        #conn = http.client.HTTPConnection(config["SERVER"]["Url"]+"AddEntry.php:80")
        #try:
        #    conn.request("GET", "", params, headers)
        #    response = conn.getresponse()
        #    data = response.read()
        #    conn.close()
        #except:
        #    print("Connection failed")
        #        test = urllib.urlopen(config["SERVER"]["Url"]+"action.controller.php?action=motion")
        time.sleep(1)
        port.flushInput()
    else:
        print('invalid rfid detection')
