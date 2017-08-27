#!/usr/bin/python
import argparse
import RPi.GPIO as GPIO

parser = argparse.ArgumentParser(description='Switches some GPIO pins and returns the current status.')
parser.add_argument('--switch', choices=['on', 'off'], help='switch light on or off')
parser.add_argument('--pin', type=int, help='board pin to switch', required=True)
args = parser.parse_args()

switch_choices = {
  'on': GPIO.HIGH,
  'off': GPIO.LOW,
}
GPIO.setmode(GPIO.BCM)
GPIO.setup(args.pin, GPIO.OUT)

if args.switch is not None:
  switch = switch_choices[args.switch]
  GPIO.output(args.pin, switch)

status = GPIO.input(args.pin)
print('on' if status else 'off')

GPIO.cleanup()
