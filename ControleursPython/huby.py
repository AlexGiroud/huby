#!/usr/bin/python3.5
import serial
import RPi.GPIO as GPIO
import http.client, urllib.request
from time import localtime, strftime
import re
import time
import configparser
from threading import Thread

#Config
config = configparser.ConfigParser()
config.read('config.ini')
############

#Bouton
GPIO.setmode(GPIO.BCM)
GPIO.setup(18, GPIO.IN, pull_up_down=GPIO.PUD_UP)
############

#RFID
port = serial.Serial(config["SERIAL"]["Interface"], baudrate=9600)
prog = re.compile("^[A-Z0-9a-z]{12}$")
############

class RFID(Thread):
    def __init__(self):
        Thread.__init__(self)

    def run(self):
        while True:
            rcv = port.read(14)
            recivedString = rcv.decode('utf-8')
            recivedString = recivedString[1:-1]
            print(recivedString)
            if prog.match(recivedString):
                print("matched")
                urllib.request.urlopen(config["SERVER"]["Url"]+"AddEntry.php?flow=in")
                time.sleep(1)
                port.flushInput()
            else:
                print('invalid rfid detection')

class Button(Thread):
    def __init__(self):
        Thread.__init__(self)

    def run(self):
        while 1:
            try:
                GPIO.wait_for_edge(18, GPIO.FALLING)
                test = urllib.request.urlopen(config["SERVER"]["Url"]+"AddEntry.php?flow=out")
                time.sleep(1)
            except KeyboardInterrupt:
                GPIO.cleanup()

# Création des threads
thread_1 = RFID("1")
thread_2 = Button("2")

# Lancement des threads
thread_1.start()
thread_2.start()

# Attend que les threads se terminent
thread_1.join()
thread_2.join()