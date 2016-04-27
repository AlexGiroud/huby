#!/usr/bin/env python3.5
# coding=utf8

import RPi.GPIO as GPIO
import urllib

GPIO.setmode(GPIO.BCM)
GPIO.setup(18, GPIO.IN, pull_up_down=GPIO.PUD_UP)
print("Veuillez vérifier que vous avez un bouton connecté de telle maniere")
print("qu il connecte le port GPIO 23 (pin 16) au GND (pin 6)\n")
try:
    while 1:
        try:
            GPIO.wait_for_edge(18, GPIO.FALLING)
            print("\nAppui detecte. Maintenant votre script va")
            print("effectuer l'action correspondant a un appui sur le bouton.")
            #test = urllib.urlopen("localhost/PHP_Files/AddEntry.php?flow=in")
        except KeyboardInterrupt:
            GPIO.cleanup()
except KeyboardInterrupt:
    GPIO.cleanup()
GPIO.cleanup()
