#!/usr/bin/python
import RPi.GPIO as GPIO
import time
GPIO.setmode(GPIO.BCM)
GPIO.setwarnings(False)
GPIO.setup(22, GPIO.OUT)
GPIO_PIR = 7
print "PIR Module Test (Ctrl-C to exit)"
GPIO.setup(GPIO_PIR,GPIO.IN)

Current_State = 0
Previous_State = 0

try:
    print "Waiting for PIR to settle ..."
    while GPIO.input(GPIO_PIR)==1:
        Current_State = 0
    print "Ready"
    while True:
        Current_State = GPIO.input(GPIO_PIR)
        if Current_State == 1 and Previous_State == 0:
            print "Motion detected !"
            GPIO.output(22, GPIO.HIGH)
            time.sleep(1),
            GPIO.output(22, GPIO.LOW)
            Previous_State = 1
        elif Current_State == 0 and Previous_State == 1:
            print "Ready"
            Previous_State = 0
        time.sleep(0.01)
except KeyboardInterrupt:
    print "Quit"
    GPIO.cleanup()
