#!/usr/bin/python

import argparse
import RPi.GPIO as GPIO

parser = argparse.ArgumentParser(description='Process some integers.')
parser.add_argument('switch', choices=['on', 'off'], help='switch light on or off')
parser.add_argument('pin', type=int, help='board pin to switch', required=True)
args = parser.parse_args()

switch_choices = {
  'on': GPIO.HIGH,
  'off': GPIO.LOW,
}
switch = switch_choices[args.switch]

if args.switch:
  GPIO.setmode(GPIO.BCM)
  GPIO.setwarnings(False)
  GPIO.setup(args.pin, GPIO.OUT) 
  GPIO.output(args.pin, switch)

GPIO.setup(args.pin, GPIO.IN)
status = GPIO.input(args.pin)
print(status)

GPIO.cleanup()
